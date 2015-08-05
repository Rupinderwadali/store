jQuery(document).ready( function() {
	jQuery('#searchicon').click(function() {
		jQuery('#jumbosearch').fadeIn();
		jQuery('#jumbosearch input').focus();
	});
	jQuery('#jumbosearch .closeicon').click(function() {
		jQuery('#jumbosearch').fadeOut();
	});
	jQuery('body').keydown(function(e){
	    
	    if(e.keyCode == 27){
	        jQuery('#jumbosearch').fadeOut();
	    }
	});
		
	jQuery('#site-navigation ul.menu').slicknav({
		label: 'Menu',
		duration: 1000,
		prependTo:'#slickmenu'
	});	
	
});

// Swiper Slider Coverflow		
jQuery(function(){
  var myCoverflow = jQuery('.swiper-container').swiper({
    pagination: '.swiper-pagination',
    effect: 'coverflow',
    grabCursor: true,
    centeredSlides: true,
    slidesPerView: 'auto',
    slideToClickedSlide: true,
    paginationClickable: true,
    loop: true,
    coverflow: {
	        rotate: 50,
	        stretch: 0,
	        depth: 100,
	        modifier: 1,
	        slideShadows : true
	    }
    });
    
    //myCoverflow.slideTo(3, 0, false);
    
});

jQuery(document).ready( function() {
	
});

//Featured Products - CUbe
jQuery(function(){
  var mySwiper = jQuery('.fp-container').swiper({
        pagination: '.swiper-pagination',
        effect: 'cube',
        grabCursor: true,
        paginationClickable: true,
        loop: true,
        pagination: false,
        nextButton: '.swiper-button-next',
        prevButton: '.swiper-button-prev',
        cube: {
            shadow: false,
            slideShadows: true,
            shadowOffset: 12,
            shadowScale: 0.64
        }
        });
    });


		
		
	