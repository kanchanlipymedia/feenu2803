<?php $__env->startSection('title'); ?> Comments <?php $__env->stopSection(); ?>

<?php $__env->startSection('styles'); ?>
<link href="<?php echo e(asset('vendor/datatables/dataTables.bootstrap4.min.css')); ?>" rel="stylesheet">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Comments</h1>
    </div>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Comments</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Comment</th>
                            <th>Game</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $comments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($comment->comment); ?></td>
                            <td><?php echo e($comment->game->name); ?></td>
                            <td>
                                <div class="custom-control custom-switch">
                                    <input type="checkbox" class="custom-control-input change-status" id="status_<?php echo e($comment->comment_id); ?>" data-id="<?php echo e($comment->comment_id); ?>" data-url="<?php echo e(route('admin.update-comment-status')); ?>" <?php if($comment->status): ?> checked <?php endif; ?>>
                                    <label class="custom-control-label" for="status_<?php echo e($comment->comment_id); ?>"></label>
                                </div>
                            </td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
<script src="<?php echo e(asset('vendor/datatables/jquery.dataTables.min.js')); ?>"></script>
<script src="<?php echo e(asset('vendor/datatables/dataTables.bootstrap4.min.js')); ?>"></script>
<script src="<?php echo e(asset('js/demo/datatables-demo.js')); ?>"></script>

<script>
    //Change Status
    $(document).on("change", ".change-status", function () {

        if($(this).is(":checked")) {
            var status = 1;
        }else{
            var status = 0;
        }
        var url = $(this).data('url');
        var commentId = $(this).data('id');
        var data = {
            'commentId': commentId,
            'status':status
        };
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: url,
            type: "POST",
            data: data,
            success: function (response) {
                if (response.status == "success") {
                    showAlert('success',"Successfully Updated");
                } else {
                    showAlert('error',response.message);
                }
            },
            error: function (request, error) {
                alert("Request: " + JSON.stringify(request));
            },
        });
    });


</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\feenu0503\resources\views/admin/comments.blade.php ENDPATH**/ ?>