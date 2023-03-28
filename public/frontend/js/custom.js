//Design by Nitin Saxena

$(document).ready(function(){	
    
    $('.related-carousel').owlCarousel({
		items:1,
		loop:false,
		autoplay:true,
		slideSpeed : 200,
		paginationSpeed : 800,
    rewindSpeed : 1000,
		slideSpeed : 200,
		dots:false,
        nav:true
		
	});
    $('.fvt-carousel').owlCarousel({
		items:1,
		loop:false,
		autoplay:true,
		slideSpeed : 200,
		paginationSpeed : 800,
    rewindSpeed : 1000,
		slideSpeed : 200,
		dots:false,
        nav:true,
		responsive:{
			1080:{items:9},
			768:{items:6},
			600:{items:2},
			425:{items:2},
			360:{items:2},
			30:{items:1}
			
		}
	});
    $('.lastPlayed-carousel').owlCarousel({
		items:1,
		loop:false,
		autoplay:true,
		slideSpeed : 200,
		paginationSpeed : 800,
    rewindSpeed : 1000,
		slideSpeed : 200,
		dots:false,
        nav:true,
		responsive:{
			1080:{items:9},
			768:{items:6},
			600:{items:2},
			425:{items:2},
			360:{items:1},
			30:{items:1}
			
		}
	});

    
$('.nit-userAc span').click(function(){
    $(this).siblings('.nit-dropdown').slideToggle();
});
if($(window).width() > 760){
   $('.menuBtn').click(function(){
        $('.nit-nav-main').slideToggle();
        $(this).toggleClass('active');
    });
   }else{
       $('.menuBtn').click(function(){
            $(this).siblings('.sub-menu').slideToggle();
           $(this).toggleClass('active');
      });
   }

$('header .nit-right .nit-close i').click(function(){
    $('header .nit-right').css('right','-110%');
});
$('header .nit-upper-nav .logo button').click(function(){
    $('header .nit-right').css('right','0%');
});

});