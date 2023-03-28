<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?php echo e(route('admin.dashboard')); ?>">
        <div class="sidebar-brand-icon rotate-n-15">
           
        </div>
        <div class="sidebar-brand-text mx-3"><img  src="<?php echo e(url('frontend/images/logo/alogo.png')); ?>"> </div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="<?php echo e(route('admin.dashboard')); ?>">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <li class="nav-item">
        <a class="nav-link" href="<?php echo e(route('admin.categories')); ?>">
            <i class="fas fa-fw fa-table"></i>
            <span>Categories</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="<?php echo e(route('admin.tags')); ?>">
            <i class="fas fa-fw fa-table"></i>
            <span>Tags</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="<?php echo e(route('admin.games')); ?>">
            <i class="fas fa-fw fa-table"></i>
            <span>Games</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="<?php echo e(route('admin.about')); ?>">
            <i class="fas fa-fw fa-table"></i>
            <span>About</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="<?php echo e(route('admin.users')); ?>">
            <i class="fas fa-fw fa-table"></i>
            <span>Users</span></a>
    </li>

</ul>
<?php /**PATH C:\xampp\htdocs\feenu3023\resources\views/admin/partials/sidebar.blade.php ENDPATH**/ ?>