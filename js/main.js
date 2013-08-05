

function EasyPeasyParallax() {
	
	bannerText= jQuery('#bannertext');
	
	scrollPos = jQuery(this).scrollTop();
	
	jQuery('#banner').css({
		'background-position' : '50% ' + (-scrollPos/4)+"px"
	});
	bannerText.css({
		'margin-top': (scrollPos/4)+"px",
		'opacity': 1-(scrollPos/450),
			
	});
}
jQuery(document).ready(function($){
    bannerText= $('#bannertext');
    winWidth = jQuery(window).width();
	if(winWidth >= 481){
	    jQuery(window).scroll(function() {
		EasyPeasyParallax(); });
	}
else {bannerText.css({'position': 'relative',});
}
});