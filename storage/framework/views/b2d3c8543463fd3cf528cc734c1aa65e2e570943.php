

<?php $__env->startSection('title'); ?>Contact <?php $__env->stopSection(); ?>

<?php $__env->startSection('styles'); ?>
<link href="<?php echo e(asset('vendor/datatables/dataTables.bootstrap4.min.css')); ?>" rel="stylesheet">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Enquiry Details</h1>
        <button class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm delete-selected" data-url="<?php echo e(route('admin.contact-delete-bulk')); ?>">
            <i class="fas fa-trash fa-sm text-white-50"></i> Delete Selected
        </button>
    </div>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">

        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="select-all">
                                <label class="custom-control-label" for="select-all">Select All</label>
                            </div>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Message</th>
                            <th>Action</tr>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $contacts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $contact): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input single-checkox" id="single-checkox-<?php echo e($contact->id); ?>" value="<?php echo e($contact->id); ?>">
                                        <label class="custom-control-label" for="single-checkox-<?php echo e($contact->id); ?>"></label>
                                    </div>
                                    <td><?php echo e($contact->name); ?></td>
                                    <td><?php echo e($contact->email); ?></td>
                                    <td><?php echo e($contact->message); ?></td>
                                    <td><a href="<?php echo e(route('admin.contact-delete',['enquiryId'=>$contact->id])); ?>"><i class='fas fa-trash-alt' style='color:red'></i></a></td>
                                <td>
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

<script language="javascript">
    $(document).on('change','#select-all',function(){
        if($('#select-all').is(":checked")){
            $('.single-checkox').prop('checked', true);
        }else{
            $('.single-checkox').prop('checked', false);
        }
    });

    $(document).on('click','.delete-selected',function(){
        var selectedCheckboxCount = $(".single-checkox:checkbox").length;
        console.log(selectedCheckboxCount);
        if($(".single-checkox:checkbox:checked").length < 1){
            showAlert('error',"Select Atleast One");
            return false;
        }
        var val = [];
        $('.single-checkox:checkbox:checked').each(function(i){
            val.push($(this).val());
        });

        var url = $(this).data('url');
        var data = {
            'selectedIds': val
        };
        console.log(data);
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: url,
            type: "POST",
            data: data,
            success: function (response) {
                if (response.status == "success") {
                    showAlert('success',"Successfully Deleted");
                    setTimeout(function() {
                        location.reload();
                    }, 2000);

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

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\lara\feenu2803\resources\views/admin/contact.blade.php ENDPATH**/ ?>