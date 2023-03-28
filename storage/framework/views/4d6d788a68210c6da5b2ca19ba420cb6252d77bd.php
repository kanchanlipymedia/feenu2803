<?php $__env->startSection('title'); ?> <?php if(empty($about)): ?> Add <?php else: ?> Edit <?php endif; ?> About <?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="container-fluid">

    <!-- Page Heading -->

    <!--<h1 class="h3 mb-4 text-gray-800"><?php if(empty($about)): ?> Add <?php else: ?> Edit <?php endif; ?> About</h1>-->

    <!-- Content Row -->

    <div class="row">
        <div class="col-xl-8 col-lg-7">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div
                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary"><?php if(empty($about)): ?> Add <?php else: ?> Edit <?php endif; ?> About</h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <form action="" method="post">
                        <?php echo csrf_field(); ?>
                        <div class="mb-3">
                            <label for="name" class="form-label">Title</label>
                            <input type="text" class="form-control" id="title" name="title" value="<?php if(!empty($about)): ?><?php echo e($about->title); ?><?php endif; ?>" required>
                        </div>
                        <div class="mb-3">
                            <label for="name" class="form-label">Description</label>
                            <textarea class="form-control" id="Description" name="Description"><?php if(!empty($about)): ?><?php echo e($about->Description); ?><?php endif; ?></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('scripts'); ?>
<script>
$(document).ready(function () {
    tinymce.init({
        selector: "#Description",
    });
});
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Xampp8.1\htdocs\test\feenu\resources\views/admin/about_add.blade.php ENDPATH**/ ?>