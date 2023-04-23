<?php

namespace App\Http\Controllers\Backend;

use App\Repositories\Backend\Interf\DashboardRepository;
use Illuminate\Routing\Controller as BaseController;

class DashboardController extends BaseController
{
    private DashboardRepository $repository;

    public function __construct(DashboardRepository $repository)
    {
        $this->repository = $repository;
    }

    public function index()
    {
        $statics = $this->repository->getStatics();

        return view('backend.dashboard.index');
    }
}
