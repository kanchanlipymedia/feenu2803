//Design by Nitin Saxena

$(document).ready(function(){	
    
    $('.related-carousel').owlCarousel({
		items:1,
		loop:true,
		autoplay:true,
		slideSpeed : 200,
        nav:true,
		paginationSpeed : 800,
    rewindSpeed : 1000,
		slideSpeed : 200,
		dots:false
	});
    $('.related-carousel1').owlCarousel({
		items:1,
		loop:true,
		autoplay:true,
		slideSpeed : 200,
		paginationSpeed : 800,
    rewindSpeed : 1000,
		slideSpeed : 200,
		nav:true,
		dots:false,
        responsiveClass:true,
        responsive:{
			980:{items:6},
			768:{items:4},
			600:{items:3},
			425:{items:2},
			360:{items:2},
			30:{items:1}
			
		}
	});
    $('.related-carousel2').owlCarousel({
		items:1,
		loop:true,
		autoplay:true,
		slideSpeed : 200,
		paginationSpeed : 800,
    rewindSpeed : 1000,
		slideSpeed : 200,
		dots:false,
        nav:true,
        responsiveClass:true,
        responsive:{
			980:{items:6},
			768:{items:4},
			600:{items:3},
			425:{items:2},
			360:{items:2},
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

$('#newMobileMenu .nit-close i').click(function(){
    $('#newMobileMenu').css('right','-110%');
});
$('header .nit-upper-nav .logo button').click(function(){
    $('#newMobileMenu').css('right','0%');
});

});