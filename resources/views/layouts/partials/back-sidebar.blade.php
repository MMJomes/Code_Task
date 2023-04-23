<div class="side-mini-panel">
    <ul class="mini-nav">
        <div class="togglediv"><a href="javascript:void(0)" id="togglebtn"><i class="ti-menu"></i></a></div>
        <!-- .Dashboard -->
        <li>
            <a href="javascript:void(0)"><i class="ti-layout-grid2"></i></a>
            <div class="sidebarmenu">
                <!-- Left navbar-header -->
                <h3 class="menu-title">Dashboard</h3>
                <div class="searchable-menu">
                    <form role="search" class="menu-search">
                        <input type="text" placeholder="Search..." class="form-control">
                        <a href=""><i class="fa fa-search"></i></a>
                    </form>
                </div>
                <ul class="sidebar-menu">
                    <li><a href="{{ route('backend.dashboard.index') }}">Default </a></li>
                </ul>
                <!-- Left navbar-header end -->
            </div>
        </li>
        <!-- /.Dashboard -->
         <!-- .User Management -->
         <li>
            <a href="javascript:void(0)"><i class="fa fa-users"></i></a>
            <div class="sidebarmenu">
                <!-- Left navbar-header -->
                <h3 class="menu-title">User Management</h3>
                <div class="searchable-menu">
                    <form role="search" class="menu-search">
                        <input type="text" placeholder="Search..." class="form-control">
                        <a href=""><i class="fa fa-search"></i></a>
                    </form>
                </div>
                <ul class="sidebar-menu">
                    <li><a href="{{ route('backend.roles.index') }}">Roles </a></li>
                    <li><a href="{{ route('backend.admins.index') }}">Admins</a></li>
                </ul>
                <!-- Left navbar-header end -->
            </div>
        </li>
        <!-- /.User Management -->
    </ul>
</div>
