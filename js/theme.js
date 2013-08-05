jQuery(document).ready(function($){
  var nb = jQuery('#navbtn');
  var n = jQuery('#topnav nav');
  
  jQuery(window).on('resize', function(){
    
    if(jQuery(this).width() < 580 && n.hasClass('keep-nav-closed')) {
      // if the nav menu and nav button are both visible,
      // then the responsive nav transitioned from open to non-responsive, then back again.
      // re-hide the nav menu and remove the hidden class
      jQuery('#topnav nav').hide().removeAttr('class');
    
    }
    if(nb.is(':hidden') && n.is(':hidden') && jQuery(window).width() > 579) {
      // if the navigation menu and nav button are both hidden,
      // then the responsive nav is closed and the window resized larger than 560px.
      // just display the nav menu which will auto-hide at <560px width.
      jQuery('#topnav nav').show().addClass('keep-nav-closed');
    }
  }); 
  
  jQuery('#navbtn').on('click', function(e){
    e.preventDefault();
    jQuery("#topnav nav").slideToggle(350);

  });
    /* grunticon Stylesheet Loader | https://github.com/filamentgroup/grunticon | (c) 2012 Scott Jehl, Filament Group, Inc. | MIT license. */
        window.grunticon=function(e){if(e&&3===e.length){var t=window,n=!!t.document.createElementNS&&!!t.document.createElementNS("http://www.w3.org/2000/svg","svg").createSVGRect&&!!document.implementation.hasFeature("http://www.w3.org/TR/SVG11/feature#Image","1.1"),A=function(A){var o=t.document.createElement("link"),r=t.document.getElementsByTagName("script")[0];o.rel="stylesheet",o.href=e[A&&n?0:A?1:2],r.parentNode.insertBefore(o,r)},o=new t.Image;o.onerror=function(){A(!1)},o.onload=function(){A(1===o.width&&1===o.height)},o.src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///ywAAAAAAQABAAACAUwAOw=="}};
        grunticon( [ "css/icons.data.svg.css", "css/icons.data.png.css", "css/icons.fallback.css" ] );
     
  
});

     
      