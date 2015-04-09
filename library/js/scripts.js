/*
Bones Scripts File
Author: Eddie Machado

This file should contain any js scripts you want to add to the site.
Instead of calling it in the header or throwing it inside wp_head()
this file will be called automatically in the footer so as not to
slow the page load.

*/

// IE8 ployfill for GetComputed Style (for Responsive Script below)
if (!window.getComputedStyle) {
    window.getComputedStyle = function(el, pseudo) {
        this.el = el;
        this.getPropertyValue = function(prop) {
            var re = /(\-([a-z]){1})/g;
            if (prop == 'float') prop = 'styleFloat';
            if (re.test(prop)) {
                prop = prop.replace(re, function () {
                    return arguments[2].toUpperCase();
                });
            }
            return el.currentStyle[prop] ? el.currentStyle[prop] : null;
        }
        return this;
    }
}

// as the page loads, call these scripts
jQuery(document).ready(function($) {


    /*
    Responsive jQuery is a tricky thing.
    There's a bunch of different ways to handle
    it, so be sure to research and find the one
    that works for you best.
    */
    
    /* getting viewport width */
    var responsive_viewport = $(window).width();
    
    /* if is below 481px */
    if (responsive_viewport < 481) {
    
    } /* end smallest screen */
    
    /* if is larger than 481px */
    if (responsive_viewport > 481) {
        
    } /* end larger than 481px */
    
    /* if is above or equal to 768px */
    if (responsive_viewport >= 768) {
		
        /* load gravatars */
        $('.comment img[data-gravatar]').each(function(){
            $(this).attr('src',$(this).attr('data-gravatar'));
        });
        
    }
    
    /* off the bat large screen actions */
    if (responsive_viewport > 1030) {
        
    }
	
        //Fixes footer height on pages with few content.
        var containerHeight = $('#container').height();
        var containerOffset = $(window).height() - $('#container').height();
        
        if (containerOffset > 0) {
        	$('.push').height('9em');
        };
        
		if ($('.current_page_item').parent('ul.children').length == 0) {
            $('.current_page_item').addClass('current');
            $('.current_page_item a:first').addClass('active');
        } else {
            $('.current_page_ancestor').addClass('current');
            $('.current_page_ancestor a:first').addClass('active');
        }
	
    // Clearfix to the ul from nav menu.
	$('.header nav ul').addClass('clearfix');
	
	// Fix some issues with #current and separators on nav menu.
	$('.header nav .nav ul li + li.current').prev('li').css('box-shadow','none');
	$('.header nav .nav ul li + li.current').prev('li').css('border','none');

  	if ($('body').hasClass('single') || $('body').hasClass('search') ) {
        $('.header nav .nav ul li:first').addClass('current').children('a').addClass('active');
    };

    // Show .related content on participants page
  	$('.image-shadow').mouseenter(function() {
  		$(this).parent().children('.related').show();
  	});
  	$('.image-shadow').mouseleave(function() {
  		$(this).parent().children('.related').hide();
  	});
	
    // Set footer background color depending on what type of page is displayed
    if ($('#content').hasClass('page')) {
	$('#container').css('background-color','white');
    }

    //Project nav logic
    $('#projecte-section-fases #nav li .arrow_box').mouseenter(function() {
        if (!$(this).hasClass('active')){
            $(this).addClass('hover');
            $(this).mouseleave(function() {
                $(this).removeClass('hover');
            });
        }
    });

    $('#projecte-section-fases #nav li .arrow_box a').click(function(event) {
        if (!$(this).parent().hasClass('active')) {
            $('#projecte-section-fases #nav .active').removeClass('active');
            $(this).parent().addClass('active');
            var sectionClass = $(this).attr('href');
            $('#projecte-main .displayed').removeClass('displayed');
            $('.' + sectionClass).addClass('displayed');
        }
        return false; 
    });

    //Logic for the project page nav
    $('#participants-section ul#participants-navigation li a').click(function() {
        $('#participants-section ul#participants-navigation li a.participants-active').removeClass('participants-active');
        var sectionName = $(this).text().toLowerCase();
        $(this).addClass('participants-active');
        $('.displayed').hide(0,function() {
            $(this).removeClass('displayed');
            $(this).css('display','none');
            $('.' + sectionName).show().addClass('displayed');
        });
    });

    //Main slideshow logic
    $('#ingressa').css('display','block').addClass('visible');
    if ($('body.home')) {setInterval(slideShow, 5000);}

    //Innovació opberta logic
    if($('body.page-template-innovacio-php')) {setTimeout(slideShowInnovacio, 2000);}

}); /* end of as page load scripts */

function slideShowInnovacio() {
    $('.induct img').fadeOut('fast', function() {
        $(this).remove();
        $('.induct').append('<iframe src="http://player.vimeo.com/video/59391291?autoplay=1" width="745" height="419" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>');
    });
}

function slideShow() {

        var visible = $('.visible');
        if (visible.next('.slide').length == 0) {
                visible.fadeOut(function() {
                    $('#ingressa').fadeIn().addClass('visible');
                }).removeClass('visible').find('.slide-caption').fadeOut();
        } else {
                visible.fadeOut(function() {
                    visible.next('.slide').fadeIn(function() {
                        $(this).find('.slide-caption').fadeIn();
                    }).addClass('visible');
                }).removeClass('visible').find('.slide-caption').fadeOut();    
        }
    }

/*! A fix for the iOS orientationchange zoom bug.
 Script by @scottjehl, rebound by @wilto.
 MIT License.
*/
(function(w){
	// This fix addresses an iOS bug, so return early if the UA claims it's something else.
	if( !( /iPhone|iPad|iPod/.test( navigator.platform ) && navigator.userAgent.indexOf( "AppleWebKit" ) > -1 ) ){ return; }
    var doc = w.document;
    if( !doc.querySelector ){ return; }
    var meta = doc.querySelector( "meta[name=viewport]" ),
        initialContent = meta && meta.getAttribute( "content" ),
        disabledZoom = initialContent + ",maximum-scale=1",
        enabledZoom = initialContent + ",maximum-scale=10",
        enabled = true,
		x, y, z, aig;
    if( !meta ){ return; }
    function restoreZoom(){
        meta.setAttribute( "content", enabledZoom );
        enabled = true; }
    function disableZoom(){
        meta.setAttribute( "content", disabledZoom );
        enabled = false; }
    function checkTilt( e ){
		aig = e.accelerationIncludingGravity;
		x = Math.abs( aig.x );
		y = Math.abs( aig.y );
		z = Math.abs( aig.z );
		// If portrait orientation and in one of the danger zones
        if( !w.orientation && ( x > 7 || ( ( z > 6 && y < 8 || z < 8 && y > 6 ) && x > 5 ) ) ){
			if( enabled ){ disableZoom(); } }
		else if( !enabled ){ restoreZoom(); } }
	w.addEventListener( "orientationchange", restoreZoom, false );
	w.addEventListener( "devicemotion", checkTilt, false );
})( this );