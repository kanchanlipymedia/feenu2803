<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{route('admin.dashboard')}}">
        <div class="sidebar-brand-icon rotate-n-15">

        </div>
        <div class="sidebar-brand-text mx-3"><img  src="{{url('frontend/images/logo/alogo.png')}}"> </div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="{{route('admin.dashboard')}}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>
                        <!-- Divider -->
                        <hr class="sidebar-divider">
                            <!-- Nav Item - Pages Collapse Menu -->
                            <li class="nav-item">
                                    <a class="nav-link collapsed" href="" data-toggle="collapse" data-target="#collapseTwo"
                                    aria-expanded="true" aria-controls="collapseTwo">
                                    <i class="fas fa-fw fa-cog"></i>
                                    <span>Manage Website</span></a>         
                                
                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                                    <div class="bg-white py-2 collapse-inner rounded">
                                        <a class="collapse-item" href="{{route('admin.categories')}}">Category</a>
                                        <a class="collapse-item" href="{{route('admin.tags')}}">Tags</a>
                                        <a class="collapse-item" href="{{route('admin.games')}}">Games</a>
                                        <a class="collapse-item" href="{{route('admin.about')}}">
                                        <i class="fas fa-fw fa-table"></i><span>About</span></a>
                                        <a class="collapse-item" href="{{route('admin.privacy')}}">
                                        <i class="fas fa-fw fa-table"></i>
                                        <span>Privacy</span></a>    
                                        <a class="collapse-item" href="">
                                        <i class="fas fa-fw fa-table"></i>
                                        <span>Dmca</span></a>
                                    </div>
                                </div>
                                
                            </li>
    
      <li class="nav-item">
            <a class="nav-link" href="{{route('admin.contact')}}">
            <i class="fas fa-fw fa-table"></i>
            <span>Contact</span></a>
      </li>

    <li class="nav-item">
        <a class="nav-link" href="{{route('admin.users')}}">
            <i class="fas fa-fw fa-table"></i>
            <span>Users</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{route('admin.comments')}}">
            <i class="fas fa-fw fa-table"></i>
            <span>Comments</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{route('admin.reports')}}">
            <i class="fas fa-fw fa-table"></i>
            <span>Reports</span></a>
    </li>

</ul>
