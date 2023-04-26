<?php

namespace App\Repositories\Backend\Impls;

use App\DataTables\BannerDataTable;
use App\Http\Requests\BannerRequest;
use App\Models\Banner;
use App\Repositories\Backend\Interf\BannerRepository;

class BannerRepositoryImpl implements BannerRepository
{
    public function index()
    {
        return Banner::all();
    }

    public function create(BannerRequest $request)
    {
        $admin = Banner::create($request->validated());
        return $admin;
    }

    public function getall()
    {
        return Banner::all();
    }

    public function DataTable(BannerDataTable $dataTable)
    {
        view()->share(['datatable' => true]);
        return $dataTable->render('backend.banner.index');
    }
    public function delete(int $id)
    {
        Banner::destroy($id);
    }
    public function find(int $id)
    {
        return Banner::findorFail($id);
    }
    public function update(Banner $banner, $data): Banner
    {
        $banner->update($data);
        return $banner;
    }
}
