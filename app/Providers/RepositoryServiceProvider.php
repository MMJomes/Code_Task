<?php

namespace App\Providers;

use App\Repositories\Backend\Impls\AdminRepositoryImpl;
use App\Repositories\Backend\Impls\BannerRepositoryImpl;
use App\Repositories\Backend\Impls\RoleRepositoryImpl;
use App\Repositories\Backend\Impls\DashboardRepositoryImpl;

use App\Repositories\Backend\Interf\AdminRepository;
use App\Repositories\Backend\Interf\BannerRepository;
use App\Repositories\Backend\Interf\RoleRepository;
use App\Repositories\Backend\Interf\DashboardRepository;

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind(RoleRepository::class, RoleRepositoryImpl::class);
        $this->app->bind(DashboardRepository::class, DashboardRepositoryImpl::class);
        $this->app->bind(AdminRepository::class, AdminRepositoryImpl::class);
        $this->app->bind(BannerRepository::class, BannerRepositoryImpl::class);

    }
}
