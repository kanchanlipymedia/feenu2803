
<div class="nit-upper-nav">
    <div class="container">
        <div class="nit-flex">
            <div class="logo navbar-dark">
                <a href="<?php echo e(url('/')); ?>"><img class="ing-fluid" src="<?php echo e(url('frontend/images/logo/logo.png')); ?>"> </a>
                <button class="navbar-toggler">
                    <i class="fas fa-bars"></i>
                    <span>Menu</span>
                </button>
            </div>
            <div class="nit-right">
               <div class="nit-close"><i class="fas fa-times"></i></div>
                <ul>
                    <li>
                        <span class="menuBtn">CATEGORIES <i class="fas fa-caret-up"></i></span>
                        <div class="sub-menu">
                 <ul>
                    <li><a href="#">Adventure</a>
                    </li>
                    <li><a href="#">sports</a>
                    <li><a href="#">Arcade</a></li>
                    <li><a href="#">girls</a></li>
                    <li><a href="#">action</a></li>
                    <li><a href="#">strategy</a></li>
                    <li><a href="#">rpg</a></li>
                    <li><a href="#">puzzle</a></li>
                    <li><a href="#">fighting</a></li>
                    <li><a href="#">shooting</a></li>
                    <li class="current-menu-item"><a href="<?php echo e(('/casual')); ?>">casual</a></li>
                    <li><a href="#">racing</a></li>
                    <li><a href="#">board</a></li>
                    <li><a href="#">IQ</a></li>
                </ul>
                        </div>
                    </li>
                    <li>
                        <form action="">
                            <input type="search" placeholder="Search">
                            <input type="submit">
                        </form>
                    </li>
                        <li>
                            <?php if(session('status')): ?>
                            <div class="mb-4 font-medium text-sm text-green-600">
                                <?php echo e(session('status')); ?>

                            </div>
                        <?php endif; ?>
                            <div class="nit-userAc">
                        
                                <?php if(Route::has('login')): ?>
                                <span><i class="fas fa-user-circle"></i><?php echo e(Auth::user()->name ?? 'Account'); ?></span>
                                <div class="nit-dropdown">
                                    <?php if(auth()->guard()->check()): ?>
                                    <a href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>

                                        <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                        <?php echo csrf_field(); ?>
                                    </form>

                                <?php else: ?>
                               
                                    <a href="<?php echo e(route('login')); ?>" >Log in</a>
                                 
                                    <?php if(Route::has('register')): ?>
                                        <a href="<?php echo e(route('register')); ?>" >New Account</a>
                                    <?php endif; ?>
                                <?php endif; ?>
                                    
                                </div>
                                <?php endif; ?>
                            </div>
                            
                        </li>
                </ul>
            </div>
        </div>
    </div>
</div><?php /**PATH C:\xampp\htdocs\feenu\resources\views/frontend/layouts/categories.blade.php ENDPATH**/ ?>