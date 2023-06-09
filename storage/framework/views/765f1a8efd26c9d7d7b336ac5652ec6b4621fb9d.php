<?php $__env->startSection('title'); ?> <?php if(empty($game)): ?> Add <?php else: ?> Edit <?php endif; ?> Game <?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?php if(empty($game)): ?> Add <?php else: ?> Edit <?php endif; ?> Game</h1>

    <!-- Content Row -->

    <form action="" method="post" enctype='multipart/form-data'>
        <div class="row">
            <?php echo csrf_field(); ?>
            <div class="col-md-8">
                <div class="card shadow mb-4">
                    <!-- Card Header - Dropdown -->
                    <div
                        class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary"><?php if(empty($game)): ?> Add <?php else: ?> Edit <?php endif; ?> Game</h6>
                    </div>
                    <!-- Card Body -->
                    <div class="card-body">
                        <div class="mb-3">
                            <label for="name" class="form-label">Game Name</label>
                            <input type="text" class="form-control" id="name" name="name" value="<?php if(!empty($game)): ?><?php echo e($game->name); ?><?php endif; ?>" required>
                        </div>
                        <div class="mb-3">
                            <label for="category" class="form-label">Category</label>
                            <select class="form-control" id="category" name="category" required>
                                <option value="">Select Category</option>
                                <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($category->category_id); ?>" <?php if(!empty($game)): ?> <?php if($category->category_id == $game->category_id): ?> selected <?php endif; ?> <?php endif; ?>><?php echo e($category->name); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="image" class="form-label">Game Image</label>
                            <input type="file" class="form-control" id="game_thumb" name="game_thumb" value="<?php if(!empty($game)): ?> <img src=<?php echo e(asset($game->game_thumb)); ?> <?php endif; ?>">

                        </div>
                        <div class="mb-3">
                            <label for="link" class="form-label">Iframe Url</label>
                            <input type="text" class="form-control" id="ifame_url" name="ifame_url" value="<?php if(!empty($game)): ?><?php echo e($game->ifame_url); ?><?php endif; ?>" >
                        </div>
                        <div class="mb-3">
                            <label for="link" class="form-label">Walkthrough Video</label>
                            <input type="text" class="form-control" id="walk_through_link" name="walk_through_link" value="<?php if(!empty($game)): ?><?php echo e($game->walk_through_link); ?><?php endif; ?>" >
                        </div>
                        <div class="mb-3">
                            <label for="link" class="form-label">App store link</label>
                            <input type="text" class="form-control" id="app_store_link" name="app_store_link" value="<?php if(!empty($game)): ?><?php echo e($game->app_store_link); ?><?php endif; ?>" >
                        </div>
                        <div class="mb-3">
                            <label for="link" class="form-label">Google Store Link</label>
                            <input type="text" class="form-control" id="google_store_link" name="google_store_link" value="<?php if(!empty($game)): ?><?php echo e($game->google_store_link); ?><?php endif; ?>">
                        </div>
                        <div class="mb-3">
                            <label for="link" class="form-label">How to play</label>
                            <input type="text" class="form-control" id="howtoplay" name="how_to_play" value="<?php if(!empty($game)): ?><?php echo e($game->how_to_play); ?><?php endif; ?>" >
                        </div>
                        <div class="mb-3">
                            <label for="link" class="form-label">Description</label>
                            <input type="text" class="form-control" id="description" name="description" value="<?php if(!empty($game)): ?><?php echo e($game->description); ?><?php endif; ?>" required>
                        </div>
                        <div class="mb-3">
                            <label for="tags" class="form-label">Tags</label>

                            <select class="form-control" id="tags" name="tags[]" multiple required>
                                <option value="">Select Tags</option>
                                <?php
                                    if(!empty($game))
                                        $tagsIdArray = explode(',',$game->tags);
                                ?>
                                <?php $__currentLoopData = $tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($tag->tag_id); ?>" <?php if(!empty($game)): ?> <?php if(in_array($tag->tag_id,$tagsIdArray)): ?> selected <?php endif; ?> <?php endif; ?>><?php echo e($tag->name); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card shadow mb-4">
                    <!-- Card Header - Dropdown -->
                    <div
                        class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">Other Details</h6>
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <label for="name" class="form-label">Height</label>
                            <input type="number" class="form-control" id="height" name="height" value="<?php if(!empty($game)): ?><?php echo e($game->height); ?><?php endif; ?>" required>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\lara\feenu2803\resources\views/admin/games_add.blade.php ENDPATH**/ ?>