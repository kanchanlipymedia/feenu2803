

<?php $__env->startSection('title'); ?>Contact <?php $__env->stopSection(); ?>

<?php $__env->startSection('styles'); ?>
<link href="<?php echo e(asset('vendor/datatables/dataTables.bootstrap4.min.css')); ?>" rel="stylesheet">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="container-fluid">

    <!-- Page Heading -->
 

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
      
        <div class="card-body">
            <div class="table-responsive">
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Enquiry Details</h1>
      
    </div>
    <?php if($message = Session::get('success')): ?>
         <div class="alert alert-info">
            <p><?php echo e($message); ?></p>
         </div>
         <?php endif; ?>
         <button class="btn btn-primary btn-xs removeAll mb-3">Remove All Data</button>
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th><input type="checkbox" id="checkboxesMain"></th>
                            <th>Id</th>
                            <th>Subject</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Message</th>                           
                        </tr>
                    </thead>
                    
                    <tbody>
                        <?php if($contacts->count()): ?>
                        <?php $__currentLoopData = $contacts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $contact): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>                         
                                    <tr id="tr_<?php echo e($contact->id); ?>">
                                    <td><input type="checkbox" class="checkbox" data-id="<?php echo e($contact->id); ?>"></td>
                                    <td><?php echo e(++$key); ?></td>
                                    <td><?php echo e($contact->subject); ?></td>
                                    <td><?php echo e($contact->name); ?></td>
                                    <td><?php echo e($contact->email); ?></td>
                                    <td><?php echo e($contact->message); ?></td>            
                                </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php endif; ?>
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<script language="javascript">
    $("#checkAll").click(function () {
        $('input:checkbox').not(this).prop('checked', this.checked);
    });
</script>
<script type = "text/javascript" >
    $(document).ready(function() {
        $('#checkboxesMain').on('click', function(e) {
            if ($(this).is(':checked', true)) {
                $(".checkbox").prop('checked', true);
            } else {
                $(".checkbox").prop('checked', false);
            }
        });
        $('.checkbox').on('click', function() {
            if ($('.checkbox:checked').length == $('.checkbox').length) {
                $('#checkboxesMain').prop('checked', true);
            } else {
                $('#checkboxesMain').prop('checked', false);
            }
        });
        $('.removeAll').on('click', function(e) {
            var contactIdArr = [];
            $(".checkbox:checked").each(function() {
                contactIdArr.push($(this).attr('data-id'));
            });
            if (contactIdArr.length <= 0) {
                alert("Choose min one item to remove.");
            } else {
                if (confirm("Are you sure?")) {
                    var contId = contactIdArr.join(",");
                    $.ajax({
                        url: "<?php echo e(url('delete-all')); ?>",
                        type: 'DELETE',
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        data: 'ids=' + contId,
                        success: function(data) {
                            if (data['status'] == true) {
                                $(".checkbox:checked").each(function() {
                                    $(this).parents("tr").remove();
                                });
                                alert(data['message']);
                            } else {
                                alert('Error occured.');
                            }
                        },
                        error: function(data) {
                            alert(data.responseText);
                        }
                    });
                }
            }
        });
    }); 
 </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\lara\feenu2803\resources\views/admin/contact.blade.php ENDPATH**/ ?>