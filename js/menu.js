jQuery(function(){
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
  
});