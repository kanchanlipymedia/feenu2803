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
                    <h3>All Games  - 50</h3>
                   
                    <center><h3><a href="<?php echo e(route('admin.games')); ?>">View</a></h3></center>
                </div>
            </div>        
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
              
                <div class="card-body">
                    <h3>All Users  - 5</h3>
                   
                    <center><h3><a href="<?php echo e(route('admin.users')); ?>">View</a></h3></center>
                </div>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-6 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <h3>All Unaproved Comments</h3>
                    <center><h3><a href="">View</a></h3></center>
                </div>
            </div>
        </div>

        <!-- Pending Requests Card Example -->
        
    </div>

    <!-- Content Row -->

  

    <!-- Content Row -->
    <div class="row">

        <!-- Content Column -->
        <div class="col-lg-6 mb-4">
           
            <!-- Project Card Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
               
                </div>
                <div class="card-body">
               
                </div>
            </div>

            <!-- Color System -->
            <div class="row">
                
            </div>

        </div>

        <div class="col-lg-6 mb-4">

            <!-- Illustrations -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
               
                </div>
                <div class="card-body">
                    <div class="text-center">
                       
                    </div>
                  
                </div>
            </div>

            <!-- Approach -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                
                </div>
                <div class="card-body">
                    
                </div>
            </div>

        </div>
    </div>

</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\feenu3023\resources\views/admin/dashboard.blade.php ENDPATH**/ ?>