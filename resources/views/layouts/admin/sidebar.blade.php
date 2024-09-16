<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('dashboard')}}">
        <div class="sidebar-brand-icon">
        </div>
        <div class="sidebar-brand-text mx-3">Accept Design</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="{{ route('dashboard')}}">
            <i class="fas fa-home"></i>
            <span>Dashboard</span></a>
    </li>
    {{-- <li class="nav-item active">
        <a class="nav-link" href="{{ route('admin.user.index')}}">
            <i class="fas fa-user"></i>
            <span>User Information</span></a>
    </li> --}}
    <li class="nav-item active">
        <a class="nav-link" href="{{ route('admin.employee.index') }}">
            <i class="fa fa-bars"></i>
            <span>Employee</span></a>
    </li>
    <li class="nav-item active">
        <a class="nav-link" href="{{ url('admin/calendar/index') }}">
            <i class="fa fa-table"></i>
            <span>calendar</span></a>
    </li>
    <li class="nav-item active">
        <a class="nav-link" href="{{ url('admin/event/index') }}">
            <i class="fa fa-image"></i>
            <span>Event Gallery</span></a>
    </li>
    <li class="nav-item active">
        <a class="nav-link" href="{{ url('admin/news/index') }}">
            <i class="fa fa-newspaper"></i>
            <span>Company News</span></a>
    </li>
    {{-- <li class="nav-item active">
        <a class="nav-link" href="{{ route('admin.support.index') }}">
            <i class="fa fa-question"></i>
            <span>help and support</span></a>
    </li> --}}
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Login Screens:</h6>
                <a class="collapse-item" href="login.html">Login</a>
                <a class="collapse-item" href="register.html">Register</a>
                <a class="collapse-item" href="forgot-password.html">Forgot Password</a>
                <div class="collapse-divider"></div>
                <h6 class="collapse-header">Other Pages:</h6>
                <a class="collapse-item" href="404.html">404 Page</a>
                <a class="collapse-item" href="blank.html">Blank Page</a>
            </div>
        </div>
    </li>




    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->
