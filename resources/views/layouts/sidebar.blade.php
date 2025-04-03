<div class="vertical-menu">
    <div data-simplebar class="h-100">
        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title">Menu</li>

                <li>
                    <a href="{{route('dashboard')}}" class="waves-effect">
                        <i class="ri-dashboard-line"></i><span class="badge rounded-pill bg-success float-end"></span>
                        <span>Dashboard</span>
                    </a>
                </li>
                <!-- end li -->

                <li>
                    <a href="javascript:void(0);" class="has-arrow waves-effect">
                        <i class="ri-calendar-2-line"></i>
                        <span>Blogs</span>
                    </a>
                    <ul class="sub-menu">
                        <li><a href="{{route('categories.index')}}">Blogs Categories</a></li>
                    </ul>
                </li>
                <!-- end li -->

            </ul>
            <!-- end ul -->
        </div>
        <!-- Sidebar -->
    </div>
</div>
