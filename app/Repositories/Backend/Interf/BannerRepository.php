<?php

namespace App\Repositories\Backend\Interf;

use App\DataTables\BannerDataTable;
use App\Http\Requests\BannerRequest;
use App\Models\Banner;

interface  BannerRepository
{
    public function getall();
    public function index();
    public function create(BannerRequest $request);
    public function update(Banner $banner,$data): Banner;
    public function delete(int $id);
    public function find(int $id);
    public function DataTable(BannerDataTable $dataTable);

}
