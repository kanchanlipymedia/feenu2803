<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-primary logoutBtn" href="#">Logout</a>
                <form action="<?php echo e(route('logout')); ?>" method="POST" id="logoutForm">
                    <?php echo csrf_field(); ?>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap core JavaScript-->
<script src="<?php echo e(asset('vendor/jquery/jquery.min.js')); ?>"></script>
<script src="<?php echo e(asset('vendor/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>

<!-- Core plugin JavaScript-->
<script src="<?php echo e(asset('vendor/jquery-easing/jquery.easing.min.js')); ?>"></script>

<!-- Custom scripts for all pages-->
<script src="<?php echo e(asset('js/sb-admin-2.min.js')); ?>"></script>

<!-- Page level plugins -->
<script src="<?php echo e(asset('vendor/chart.js/Chart.min.js')); ?>"></script>

<!-- Page level custom scripts -->
<script src="<?php echo e(asset('js/demo/chart-area-demo.js')); ?>"></script>
<script src="<?php echo e(asset('js/demo/chart-pie-demo.js')); ?>"></script>

<!--tinymce script-->
<script src="https://cdn.jsdelivr.net/npm/tinymce@6.0.3/tinymce.min.js"></script>

<!--tata script-->
<script src="<?php echo e(url('frontend/js/tata.js')); ?>"></script>

<script>
    $(document).on('click','.logoutBtn',function(e){
        e.preventDefault();
        $('#logoutForm').submit();
    });
    function showAlert(type,message){
    if(type == 'success'){
        tata.success('Success', message)
    }
    else if(type == 'error'){
        tata.error('Error', message)
    }
    else if(type == 'info'){
        tata.info('Message', message)
    }else{
        tata.info(type, message)
    }
}
</script>
<?php /**PATH C:\xampp\htdocs\lara\feenu2803\resources\views/admin/partials/scripts.blade.php ENDPATH**/ ?>