</main>
<div class="nit-footer-bottom">
    <div class="container">
       <div class="nit-flex">
           <div class="nit-box">
              <p><a href="#">FEENU (C)</a> All Rights Reserved</p>
           </div>
           <div class="nit-links">
               <ul>
                   <li><a href="<?php echo e(('/privacy')); ?>">Privacy</a></li>
                   <li><a href="<?php echo e(('/contact')); ?>">Contact</a></li>
                   <li><a href="<?php echo e(('/about')); ?>">About</a></li>
                   <li><a href="<?php echo e(('/cookies')); ?>">Cookies</a></li>
                   <li><a href="<?php echo e(('/policy')); ?>">Policy</a></li>
                   <li><a href="<?php echo e(('/dmca')); ?>">DMCA</a></li>
                   <li><a href="<?php echo e(('/sitemap')); ?>">Sitemap</a></li>
               </ul>
           </div>
           <div class="nit-footer-social">
               <ul>
                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                    <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                </ul>
            </div>
            <div class="nitImg"><img src="assets/images/icons/google-play.png" alt=""></div>
       </div>
    </div>
</div>




<script src="<?php echo e(url('frontend/js/jQuery_v3.4.1_min.js')); ?>"></script>
<script src="<?php echo e(url('frontend/js/bootstrap_v4.3.1_min.js')); ?>"></script>
<script src="<?php echo e(url('frontend/js/owl.carousel.min.js')); ?>"></script>
<script src="<?php echo e(url('frontend/js/custom.js')); ?>"></script>

<script>
var elem = document.getElementById("myvideo");
function openFullscreen() {
  if (elem.requestFullscreen) {
    elem.requestFullscreen();
  } else if (elem.webkitRequestFullscreen) { /* Safari */
    elem.webkitRequestFullscreen();
  } else if (elem.msRequestFullscreen) { /* IE11 */
    elem.msRequestFullscreen();
  }
}
<?php if(Auth::check()): ?>
    var isAuth = true;
    <?php if(Auth::user()->user_type == 2): ?>
        var isUserLogin = true;
    <?php else: ?>
        var isUserLogin = false;
    <?php endif; ?>
<?php else: ?>
    var isAuth = false;
    var isUserLogin = false;
<?php endif; ?>
var loginRequired = "Please Login First";
$(document).ready(function(){

});

$(document).ready(function(){

    $(document).on('keyup','.search-games',function(){
        var value = this.value.toLowerCase().trim();
        var $rows = $('.games-list').find('.game-box');
        $(".games-list .game-box").show().filter(function() {
            return $(this).text().toLowerCase().trim().indexOf(value) == -1;
        }).hide();
    });

    $(document).on('submit','#save-comment-form',function(e){
        e.preventDefault();
        if(!isUserLogin){
            alert(loginRequired);
            return false;
        }

        var url = $(this).attr('action');
        var gameId = $('#gameId').val();
        var comment = $('#comment').val();
        var data = {
            'gameId': gameId,
            'comment':comment
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
                    $('#comment').val('');
                    alert(response.message);
                } else {
                    alert(response.message);
                }
            },
            error: function (request, error) {
                alert("Request: " + JSON.stringify(request));
            },
        });
    });

    $(document).on('click','.reply-comment',function(){
        var parentCommentId = $(this).data('commentId');
        var gameId = $(this).data('gameId');
        $('#parentCommentId').val(parentCommentId);
        $('#replyGameId').val(gameId);
        $('#replyCommntModal').modal('show');
    });

    $(document).on('submit','#save-reply-comment-form',function(e){
        e.preventDefault();

        if(!isUserLogin){
            alert(loginRequired);
            return false;
        }

        var url = $(this).attr('action');
        var parentCommentId = $('#parentCommentId').val();
        var gameId = $('#replyGameId').val();
        var comment = $('#replyComment').val();
        var data = {
            'parentCommentId':parentCommentId,
            'gameId': gameId,
            'comment':comment
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
                    $('#parentCommentId').val('');
                    $('#replyGameId').val('');
                    $('#replyComment').val('');
                    $('#replyCommntModal').modal('hide');
                    alert(response.message);
                } else {
                    alert(response.message);
                }
            },
            error: function (request, error) {
                alert("Request: " + JSON.stringify(request));
            },
        });
    });

    //mark favorite/unfavorite
    $(document).on('click','.favorite-btn',function(){
        if(!isUserLogin){
            alert(loginRequired);
            return false;
        }

        var thisObj = $(this);
        var url = $(this).data('url');;
        var gameId = $(this).data('gameId');
        var favoriteStatus = $(this).data('favoriteStatus');
        var data = {
            'favoriteStatus':favoriteStatus,
            'gameId': gameId,
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
                    if(favoriteStatus == 1){
                        thisObj.data('favoriteStatus','0');
                        thisObj.find('i').removeClass('fal').addClass('fas');
                    }else{
                        thisObj.data('favoriteStatus','1');
                        thisObj.find('i').removeClass('fas').addClass('fal');
                    }
                } else {
                    alert(response.message);
                }
            },
            error: function (request, error) {
                alert("Request: " + JSON.stringify(request));
            },
        });
    });

    //mark like/dislike
    $(document).on('click','.like-dislike-btn',function(){
        if(!isUserLogin){
            alert(loginRequired);
            return false;
        }

        var thisObj = $(this);
        var url = $(this).data('url');;
        var gameId = $(this).data('gameId');
        var likeStatus = $(this).data('likeStatus');
        var data = {
            'likeStatus':likeStatus,
            'gameId': gameId,
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
                    if(likeStatus == 1){
                        $('.like-btn').find('i').removeClass('fal').addClass('fas');
                        $('.dislike-btn').find('i').removeClass('fas').addClass('far');
                    }else{
                        $('.like-btn').find('i').removeClass('fas').addClass('fal');
                        $('.dislike-btn').find('i').removeClass('fal').addClass('fas');
                    }
                    $('.like-btn').find('span').text(response.data.likeCount);
                    $('.dislike-btn').find('span').text(response.data.dislikeCount);
                } else {
                    alert(response.message);
                }
            },
            error: function (request, error) {
                alert("Request: " + JSON.stringify(request));
            },
        });
    });
});



</script>
<script>
    function myFunction() {
      var dots = document.getElementById("dots");
      var moreText = document.getElementById("more");
      var btnText = document.getElementById("myBtn");
    
      if (dots.style.display === "none") {
        dots.style.display = "inline";
        btnText.innerHTML = "share"; 
        moreText.style.display = "none";
      } else {
        dots.style.display = "none";
        btnText.innerHTML = "share"; 
        moreText.style.display = "inline";
      }
    }
    </script>
    <script>
        $(document).ready(function(){
            $('a[target="iframe_a"]').click(function(){
                $(this).parent().hide();
            });
        });
        </script>

</body>
</html>
<?php /**PATH C:\xampp\htdocs\feenu(4)\resources\views/frontend/Layouts/footer.blade.php ENDPATH**/ ?>