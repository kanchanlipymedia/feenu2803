<!DOCTYPE html>
<html>
<head> 
    <title>Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=0, initial-scale=1.0">
    <link rel="icon" href="<?php echo e(url('frontend/images/logo/logo.png')); ?>" type="images/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="<?php echo e(url('frontend/css/bootstrap_v4.3.1_min.css')); ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo e(url('frontend/css/owl.carousel.min.css')); ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo e(url('frontend/css/owl.theme.default.min.css')); ?>" type="text/css">
    <link rel="stylesheet" href="https://kit-free.fontawesome.com/releases/latest/css/free.min.css" media="all">
    <link rel="stylesheet" href="<?php echo e(url('frontend/css/style.css')); ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo e(url('frontend/css/custom.css')); ?>" type="text/css">
</head>
<body>
   
<div class="nit-mobile-box">
<?php if(session('status')): ?>
    <div class="mb-4 font-medium text-sm text-green-600">
         <?php echo e(session('status')); ?>

    </div>
 <?php endif; ?>
   <div class="nit-close-btn">
        <a class="nit-close" href="<?php echo e(url('/')); ?>"><i class="fas fa-times"></i></a>
    </div>
    <div class="login-box">
        <div class="box">
            <i class="fas fa-user"></i>
            <h3>Login</h3>
        </div>
        <form method="POST" action="<?php echo e(route('login')); ?>">
             <?php echo csrf_field(); ?>
             <input type="hidden" name="user_type" value="2">
             <input  id="email" name="email" placeholder="Email Address" type="email" required autofocus >
             <?php if($errors->has('email')): ?>
                <span class="invalid-feedback d-block">
                    <strong><?php echo e($errors->first('email')); ?></strong>
                </span>
             <?php endif; ?>
             <input  id="password" placeholder="Enter Password" type="password"  name="password" required autocomplete="current-password">
             <?php if($errors->has('password')): ?>
                                <span class="invalid-feedback d-block">
                                    <strong><?php echo e($errors->first('password')); ?></strong>
                                </span>
                            <?php endif; ?>
             <input type="submit" class="btn" >
            <?php if(Route::has('password.request')): ?>
                <a  href="<?php echo e(route('password.request')); ?>" style="text-align:center;">Forgot password</a> 
            <?php endif; ?>
        </form>
    </div>
</div>  
   
<script src="<?php echo e(url('frontend/js/jQuery_v3.4.1_min.js')); ?>"></script>
<script src="<?php echo e(url('frontend/js/bootstrap_v4.3.1_min.js')); ?>"></script>
<script src="<?php echo e(url('frontend/js/owl.carousel.min.js')); ?>"></script>
<script src="<?php echo e(url('frontend/js/custom.js')); ?>"></script>


</body>
</html><?php /**PATH C:\xampp\htdocs\lara\feenu2803\resources\views/frontend/loginmobile.blade.php ENDPATH**/ ?>