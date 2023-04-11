<?php $__env->startSection('main'); ?>
<div class="container">
    <div class="row gr">
        <div class="col-md-3">
            <div class="nit-content g1">
                <ul>
                    <li>
                        <div class="nit-ads"><a href="#"><img src="<?php echo e(url('frontend/images/more/ads-600.jpg')); ?>"
                                    alt=""></a></div>
                    </li>

                    <?php $__currentLoopData = $newGames; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $newGame): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li class="newGame"><a href="<?php echo e(route('game-detail', ['gameId' => $newGame->game_id])); ?>"><img
                                src="<?php echo e(asset($newGame->game_thumb)); ?>" alt="">
                            <figcaption><?php echo e($newGame->shortName()); ?></figcaption>
                        </a></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div>
        </div>
        <style>
            .content {
  position: absolute; 
  background: rgb(0, 0, 0); /* Fallback color */
  background: rgba(0, 0, 0, 0.5); /* Black background with 0.5 opacity */
  color: #f1f1f1;
  width: 100%;
  padding: 0px ;
  bottom:70px;  
  
}
</style>
        <div class="col-md-6">
            <div class="nit-main">
                <div class="main-game-content">
                    <input type="hidden" id="gameDetailId" value="<?php echo e($game->game_id); ?>">
                    <div class="video-box">
                        <figure id="myvideo1">
                     
                            <div class="iframe-div" id="myvideo" style="width:100%;height:<?php if(!empty($game->height)): ?><?php echo e($game->height); ?>px; <?php else: ?> 450px <?php endif; ?>">
                                <figcaption style="z-index:99">
                                        <a href="<?php echo e($game->ifame_url); ?>" target="iframe_a" class="btn">Play Game</a>
                                        <div class="content"> <center><h2 style="color:#fff;font-size:24px;";><?php echo e($game->name); ?></h2></center></div>
                                    </figcaption>
                                    <img src="<?php echo e(asset($game->game_thumb)); ?>" style="width:100%;height:inherit;filter:blur(45px)">
                                    <iframe scrolling="auto" allowtransparency="true" name="iframe_a" style="width:100%;height:100%;display:none;" src="<?php echo e($game->ifame_url); ?>">
                                    </iframe>
                             
                        </figure>
                    </div>
                    <div class="nit-flex jcsb">
                        <div class="logo"><img src="<?php echo e(url('frontend/images/logo/logo.png')); ?>" alt="">
                        </div>
                        <div onclick="openFullscreen();" class="zoom-icon"><img
                                src="<?php echo e(url('frontend/images/icons/zoom-icon.png')); ?>" alt=""></div>
                    </div>
                    <div class="nit-footer">
                        <div class="nit-flex">
                            <h2><?php echo e($game->name); ?></h2>
                            <div class="so">
                                <ul>
                                    <?php
                                    if(is_null($likeStatus)){
                                    $likeBtnClass = 'far';
                                    $dislikeBtnClass = 'far';
                                    }else{
                                    if($likeStatus == 0){
                                    $likeBtnClass = 'far';
                                    $dislikeBtnClass = 'fas';
                                    }else{
                                    $likeBtnClass = 'fas';
                                    $dislikeBtnClass = 'far';
                                    }
                                    }

                                    ?>


                                    <li class="like-dislike-btn like-btn" data-url="<?php echo e(route('update-like-status')); ?>"
                                        data-game-id="<?php echo e($game->game_id); ?>" data-like-status="1"><i
                                            class="<?php echo e($likeBtnClass); ?> fa-thumbs-up"
                                            style="cursor: pointer;"></i><span><?php echo e($game->likeCount()); ?></span></li>
                                    <li class="like-dislike-btn dislike-btn" data-url="<?php echo e(route('update-like-status')); ?>"
                                        data-game-id="<?php echo e($game->game_id); ?>" data-like-status="0"><i
                                            class="<?php echo e($dislikeBtnClass); ?> fa-thumbs-down"
                                            style="cursor: pointer;"></i><span><?php echo e($game->dislikeCount()); ?></span></li>
                                    <li class="favorite-btn" data-url="<?php echo e(route('update-favorite-status')); ?>"
                                        data-game-id="<?php echo e($game->game_id); ?>" data-favorite-status=<?php if($favoriteStatus): ?> "0"
                                        <?php else: ?> "1" <?php endif; ?>><span>Favorite</span><i
                                            class="<?php if($favoriteStatus): ?> fas <?php else: ?> far <?php endif; ?> fa-heart"
                                            style="color: red;cursor: pointer;margin-left:5px;"></i></li>
                                    <li class="report-btn" data-game-id="<?php echo e($game->game_id); ?>" style="cursor: pointer;">
                                        <span>Report</span><i class="fa fa-exclamation-triangle"
                                            style="font-size:14px;color:rgb(241, 199, 10);"></i></li>

                                    <div class="shareBox">

                                        <button onclick="myFunction()" id="myBtn">share<i class="fa fa-share"
                                                style="font-size:14px;color:rgb(22, 189, 97)"></i></button>
                                        <ul><span id="dots"></span><span id="more"><a href="https://www.facebook.com/" target="_blank"
                                                    class="fab fa-facebook"></a>
                                                <a href="" target="_blank"class="fab fa-twitter"></a>
                                                <a href="#" class="fab fa-google"></a>
                                                <a href="#" class="fab fa-linkedin"></a>
                                                <a href="#" class="fab fa-youtube"></a>
                                                <a href="#" class="fab fa-instagram"></a></span>
                                        </ul>
                                    </div </ul>
                            </div>
                            <div class="rating">
                                <ul>
                                    <li class="active"><i class="fas fa-star"></i></li>
                                    <li class="active"><i class="fas fa-star"></i></li>
                                    <li class="active"><i class="fas fa-star"></i></li>
                                    <li class="active"><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ads"><a href="#"><img src="<?php echo e(url('frontend/images/more/ads3.png')); ?>"
                                class="tni" alt=""></a></div>
                                <div class="nit-dis">
                        <div class="nit-flex jcsb">
                            <div class="btn-box">
                                <?php $__currentLoopData = $game->gamesTags(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <a href="#"><?php echo e($tag->name); ?></a>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>

                            <div class="app-box">
                            <?php if(!empty($game->app_store_link)): ?>
                                <a href="<?php echo e($game->app_store_link); ?>"><img src="<?php echo e(url('frontend/images/icons/apple.png')); ?>" alt=""></a>
                            <?php endif; ?>
                            <?php if(!empty($game->google_store_link)): ?>
                                <a href="<?php echo e($game->google_store_link); ?>"><img src="<?php echo e(url('frontend/images/icons/google-play.png')); ?>" alt=""></a>
                            <?php endif; ?>
                            </div>
                        </div>
                        <div class="dis-box">
                            <h1>Description</h1>
                            <div class="con">
                                <p><?php echo e($game->description); ?></p>
                            </div>
                            <div class="row">
                                <?php if(!empty($game->how_to_play)): ?>
                                <div class="col-md-5 mr-auto">
                                    <h1>How to play</h1>
                                    <p><?php echo e($game->how_to_play); ?> </p>
                                </div>
                                <?php endif; ?>
                                <?php if(!empty($game->walk_through_link)): ?>
                                <div class="col-md-5 ml-auto">
                                    <h1>Walkthrough Video</h1>
                                    <div class="nit-video"><iframe src="<?php echo e($game->walk_through_link); ?>" width="100%" height="200" style="border:none;">
                                    </iframe></div>
                                </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                <div class="nit-dis">

                    <div class="dis-box-comment">
                        <div class="d-flex gap-2 mt-2 justify-content-center align-items-center">
                            <div class="fs-sm blue fw-bold pt-1">Rate</div>

                            <div class="rate-star">
                                <input type="radio" id="5-stars" name="rating" value="5" />
                                <label for="5-stars" class="star">&#9733;</label>
                                <input type="radio" id="4-stars" name="rating" value="4" />
                                <label for="4-stars" class="star">&#9733;</label>
                                <input type="radio" id="3-stars" name="rating" value="3" />
                                <label for="3-stars" class="star">&#9733;</label>
                                <input type="radio" id="2-stars" name="rating" value="2" />
                                <label for="2-stars" class="star">&#9733;</label>
                                <input type="radio" id="1-star" name="rating" value="1" />
                                <label for="1-star" class="star">&#9733;</label>
                            </div>

                        </div>
                        <h1>User Comments</h1>
                        <?php $__currentLoopData = $comments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="btn-box-comment">
                            <a><img src="<?php echo e(url('frontend/images/more/user_profile_images.png')); ?>"></a>
                            <a href="<?php echo e(route('user-profile',['userId'=>$comment->user->id])); ?>">
                                <h1><?php echo e($comment->user->name); ?></h1>
                            </a>
                            <p><?php echo e($comment->comment); ?></p>
                            <p><a href="javascript:void(0)" class="reply-comment text-dark"
                                    data-comment-id="<?php echo e($comment->comment_id); ?>" data-game-id="<?php echo e($game->game_id); ?>">Reply
                                    <i class='fa fa-reply' style='font-size:12px;color:rgb(8, 163, 73)'></i></a></p>
                        </div>
                        <?php $__currentLoopData = $comment->replyComment(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $replyComment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="btn-box-comment pl-4">
                            <a><img src="<?php echo e(url('frontend/images/more/user_profile_images.png')); ?>"></a>
                            <a href="<?php echo e(route('user-profile',['userId'=>$replyComment->user->id])); ?>">
                                <h1><?php echo e($replyComment->user->name); ?></h1>
                            </a>
                            <p><?php echo e($replyComment->comment); ?></p>
                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <div class="box-comment-des">
                            <form id="save-comment-form" action="<?php echo e(route('save-comment')); ?>" method="POST">
                                <input type="hidden" id="gameId" name="gameId" value="<?php echo e($game->game_id); ?>">
                                <textarea class="form-control" id="comment" name="comment" rows="6" cols="50"
                                    placeholder="Comment" required></textarea>
                                <input class="input-color" type="submit" value="Submit">
                            </form>
                        </div>
                    </div>

                </div>
                <?php if(!Auth::check()): ?>
                <div class="nit-comment">
                    <div>Please<a href="<?php echo e(route('login')); ?>"> Login </a>To Comment</div>
                </div>
                <?php endif; ?>
            </div>


            <div class="nit-related">
                <h1>related games</h1>
                <div class="owl-carousel related-carousel owl-theme">
                    <div class="item">
                        <ul>
                            <?php $__currentLoopData = $relatedGames1; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $relatedGame): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li><a href="<?php echo e(route('game-detail', ['gameId' => $relatedGame->game_id])); ?>"><img
                                        src="<?php echo e(asset($relatedGame->game_thumb)); ?>" alt="">
                                    <figcaption><?php echo e($relatedGame->shortName()); ?></figcaption>
                                </a></li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        </ul>
                    </div>

                </div>

            </div>
        </div>
        <div class="col-md-3">
            <div class="nit-content g1 g2">
                <ul>
                    <li>
                        <div class="nit-ads">
                            <a href="#"><img src="<?php echo e(url('frontend/images/more/ads.png')); ?>" alt=""></a>
                        </div>
                    </li>
                    <?php $__currentLoopData = $relatedGames; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $relatedGame): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li>
                        <a href="<?php echo e(route('game-detail', ['gameId' => $relatedGame->game_id])); ?>">
                            <img src="<?php echo e(asset($relatedGame->game_thumb)); ?>" alt="">
                            <figcaption><?php echo e($relatedGame->shortName()); ?></figcaption>
                        </a>
                    </li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div>
        </div>
    </div>
</div>

<!-- reply comment Modal -->
<div class="modal fade" id="replyCommntModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Reply</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="save-reply-comment-form" action="<?php echo e(route('save-comment')); ?>" method="POST">
                <div class="modal-body">
                    <input type="hidden" id="parentCommentId" name="gameId" value="">
                    <input type="hidden" id="replyGameId" name="gameId" value="">
                    <textarea class="form-control" id="replyComment" name="replyComment" rows="6" cols="50"
                        placeholder="Comment" required></textarea>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary ">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- reply comment Modal -->
<div class="modal fade" id="reportModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Report</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="report-form" action="<?php echo e(route('save-report')); ?>" method="POST">
                <div class="modal-body">
                    <input type="hidden" id="reportGameId" name="reportgameId" value="">
                    <textarea class="form-control" id="reportComment" name="reportComment" rows="6" cols="50"
                        placeholder="Comment" required></textarea>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary ">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
<style>
    .rate-star {
        display: flex;
        flex-direction: row-reverse;
        font-size: 1.5em;
        justify-content: space-around;
        padding: 0 0.2em;
        text-align: center;
        width: 5em;
    }

    .rate-star input {
        display: none;
    }

    .rate-star label {
        color: #ccc;
        cursor: pointer;
        font-size: 20px;
        margin-bottom: 0px;
    }

    .rate-star :checked~label {
        color: #f96747;
    }
</style>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.Layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\lara\feenu2803\resources\views/frontend/game.blade.php ENDPATH**/ ?>