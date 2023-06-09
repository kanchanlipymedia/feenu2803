<?php $__env->startSection('title'); ?> Dashboard <?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
      
    </div>

    <!-- Content Row -->
    <div class="row">

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <h3>All Game - <?php echo e(App\Models\Game::gamesCount()); ?></h3>
                   
                    <center><h3><a href="<?php echo e(route('admin.games')); ?>">View</a></h3></center>
                </div>
            </div>        
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
              
                <div class="card-body">
                    <h3>All Users - <?php echo e(App\Models\User::usersCount()); ?></h3>
                   
                    <center><h3><a href="<?php echo e(route('admin.users')); ?>">View</a></h3></center>
                </div>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-4 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <h3>All  Comments - <?php echo e(App\Models\Comment::commentCount()); ?></h3>
                    <center><h3><a href="<?php echo e(route('admin.comments')); ?>">View</a></h3></center>
                </div>
            </div>
        </div>

        <!-- Pending Requests Card Example -->
        
    </div>

    <!-- Content Row -->

  

  

</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\lara\feenu2803\resources\views/admin/dashboard.blade.php ENDPATH**/ ?>