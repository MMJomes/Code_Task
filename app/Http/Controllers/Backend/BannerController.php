<?php

namespace App\Http\Controllers\Backend;

use App\DataTables\BannerDataTable;
use App\Http\Controllers\Controller;
use App\Http\Requests\BannerRequest;
use App\Models\Banner;
use App\Repositories\Backend\Interf\BannerRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BannerController extends Controller
{
    private BannerRepository $repository;
    public function __construct(BannerRepository   $repository)
    {
        $this->middleware('permission:banner.create', ['only' => ['create', 'store']]);
        $this->middleware('permission:banner.edit', ['only' => ['edit']]);
        $this->middleware('permission:banner.view', ['only' => ['index']]);
        $this->repository = $repository;
    }
    public function index(BannerDataTable $dataTable)
    {
        return $this->repository->DataTable($dataTable);
    }
    public function create()
    {
        view()->share(['form' => true, 'sweet_alert' => true]);
        return view('backend.banner.create');
    }

    public function store(BannerRequest $request)
    {
        $data = $this->repository->create($request);
        return redirect()
            ->route('backend.banner.index')
            ->with(['success' => 'Successfully Added']);
    }


    public function edit($id)
    {
        $banner = $this->repository->find($id);
        return view('backend.banner.edit', compact('banner'));
    }

    public function update(BannerRequest $request, Banner $banner)
    {
        if ($request->image == null) {
            $request->merge(['image' => $banner->image]);
            $this->repository->update($banner, $request->all());
            return redirect()->route('backend.banner.index')->with(['success' => 'Successfully Updated!']);
        }
        $this->repository->update($banner, $request->validated());

        return redirect()->route('backend.banner.index')->with(['success' => 'Successfully Updated!']);
    }

    public function destroy(Request $request)
    {
        $this->repository->delete($request->id);
        return redirect()->back()->with(['success' => 'Successfully Deleted!']);
    }
}
