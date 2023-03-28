<?php $__env->startSection('title'); ?> <?php if(empty($tag)): ?> Add <?php else: ?> Edit <?php endif; ?> Tag <?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?php if(empty($tag)): ?> Add <?php else: ?> Edit <?php endif; ?> Tag</h1>

    <!-- Content Row -->

    <div class="row">
        <div class="col-xl-8 col-lg-7">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div
                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary"><?php if(empty($tag)): ?> Add <?php else: ?> Edit <?php endif; ?> Tag</h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <form action="" method="post">
                        <?php echo csrf_field(); ?>
                        <div class="mb-3">
                            <label for="name" class="form-label">Tag Name</label>
                            <input type="text" class="form-control" id="name" name="name" value="<?php if(!empty($tag)): ?><?php echo e($tag->name); ?><?php endif; ?>">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\feenu3023\resources\views/admin/tags_add.blade.php ENDPATH**/ ?>