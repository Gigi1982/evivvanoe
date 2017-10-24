(function ($, root, undefined) {
	
	$(function () {
		
		'use strict';
		
		$('.artist-home-listing').lightSlider({
            adaptiveHeight:false,
            item:2,
            pager:false,
            slideMargin:0,
            loop:true,
            responsive : [
                {
                    breakpoint:800,
                    settings: {
                        item:1,
                        slideMove:1,
                        slideMargin:6,
                      }
                }
            ]
        });
        
        $('.home-news-listing').lightSlider({
            adaptiveHeight:false,
            item:1,
            pager:false,
            slideMargin:0,
            loop:true
        });
        
        $('.events-slider').lightSlider({
            adaptiveHeight:false,
            item:1,
            pager:false,
            slideMargin:0,
            loop:true
        });
        
        $('.events-gallery-slider').lightSlider({
            adaptiveHeight:false,
            item:1,
            pager:false,
            auto:true,
            pause:7000,
            slideMargin:0,
            loop:true
        });
        
        $('#fullpage').fullpage({
            verticalCentered: false,
            anchors:['first', 'second', 'third' , 'fourth']
        });
        
        $('.scroll-down').click(function(){
            $.fn.fullpage.moveSectionDown();
            return false;
        });
        
        $('#lightgallery').lightGallery({
            thumbnail: false,
            download: false,
            selector: '.artist-single-images'
        }); 
		
        $('#lightNews').lightGallery({
            thumbnail: false,
            download: false,
            selector: '.news-single-images'
        }); 
        
        $('#nav-icon3').click(function(){
            $(this).toggleClass('open');
            $('body').toggleClass('nav-open');
            return false;
        });
        
        $('.show-hide-map').click(function(){
            $('.overmap-layer').fadeToggle();
        });
        
	});
	
})(jQuery, this);
