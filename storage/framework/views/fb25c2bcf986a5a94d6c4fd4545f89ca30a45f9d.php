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
                   <li><a href="<?php echo e(('/contact-us')); ?>">Contact</a></li>
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

    $(document).on('click','.report-btn',function(){
        var gameId = $(this).data('gameId');
        $('#reportGameId').val(gameId);
        $('#reportModal').modal('show');
    });

    $(document).on('submit','#report-form',function(e){
        e.preventDefault();

        // if(!isUserLogin){
        //     alert(loginRequired);
        //     return false;
        // }

        var url = $(this).attr('action');
        var gameId = $('#reportGameId').val();
        var comment = $('#reportComment').val();
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
                    $('#reportComment').val('');
                    $('#reportModal').modal('hide');
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
                $('.iframe-div').find('iframe').show();
                $('.iframe-div').find('img').hide();
                var gameId = parseInt($("#gameDetailId").val());
                var gameIdsStr = getCookie('game-ids');
                if(!gameIdsStr)
                    gameIdsStr = '[]';

                var gameIdsArr = JSON.parse(gameIdsStr);
                if(gameIdsArr.includes(gameId))
                    gameIdsArr = gameIdsArr.filter(val => val !== gameId);

                gameIdsArr.unshift(gameId);

                if(gameIdsArr.length > 5)
                    gameIdsArr.pop()
                setCookie('game-ids',JSON.stringify(gameIdsArr),1000);

                var data = {
                    'gameId': gameId
                };
                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    url: "<?php echo e(route('update-tpc')); ?>",
                    type: "POST",
                    data: data,
                    success: function (response) {
                        if (response.status == "success") {
                            console.log('total played count updated');
                            setInterval(updateTPD, 30000);
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

        function setCookie(cname, cvalue, exdays) {
            const d = new Date();
            d.setTime(d.getTime() + (exdays*24*60*60*1000));
            let expires = "expires="+ d.toUTCString();
            document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
        }

        function getCookie(cname) {
            var name = cname + "=";
            var ca = document.cookie.split(';');
            for(var i=0; i<ca.length; i++) {
                var c = ca[i];
                while (c.charAt(0)==' ') c = c.substring(1);
                if(c.indexOf(name) == 0)
                return c.substring(name.length,c.length);
            }
            return "";
        }

        var gameId = $("#gameDetailId").val();
        function updateTPD(){
            console.log('updateTPD function hit');
            var data = {
                'gameId': gameId
            };
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: "<?php echo e(route('update-tpd')); ?>",
                type: "POST",
                data: data,
                success: function (response) {
                    if (response.status == "success") {
                        console.log('total played duration updated');
                    } else {
                        alert(response.message);
                    }
                },
                error: function (request, error) {
                    alert("Request: " + JSON.stringify(request));
                },
            });
        }
    </script>

</body>
</html>
<?php /**PATH C:\xampp\htdocs\lara\feenu2803\resources\views/frontend/Layouts/footer.blade.php ENDPATH**/ ?>