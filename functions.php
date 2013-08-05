<?php
update_option('siteurl','http://iamkhem.com');
update_option('home','http://iamkhem.com');
// Load the Theme CSS
function theme_styles(){

		wp_enqueue_style( 'icons', get_template_directory_uri() . '/css/icons.data.png.css');
		wp_enqueue_style( 'icon1', get_template_directory_uri() . '/css/icons.data.svg.css');
		wp_enqueue_style( 'icon2', get_template_directory_uri() . '/css/icons.fallback.css');
		wp_enqueue_style( 'normalize', get_template_directory_uri() . '/css/normalize.css');
		wp_enqueue_style( 'google', 'http://fonts.googleapis.com/css?family=Cabin');
		wp_enqueue_style( 'google', 'http://fonts.googleapis.com/css?family=PT+Sans');
		wp_enqueue_style( 'main', get_template_directory_uri() . '/style.css');


}
// Load the Theme JS
function theme_js(){

		wp_register_script('custom-script1', get_template_directory_uri() . '/js/menu.js', array('jquery'),'', true);
		wp_register_script('custom-script2', get_template_directory_uri() . '/js/main.js', array('jquery'),'', true);
		wp_register_script('custom-script3', get_template_directory_uri() . '/js/css3-mediaqueries.js', array('jquery'),'', true);
	
		wp_enqueue_script('custom-script1', get_template_directory_uri() . '/js/theme.js', array('jquery'),'', true );
		wp_enqueue_script('custom-script2');
		wp_enqueue_script('custom-script3');
}
		add_action('wp_enqueue_scripts', 'theme_js');


		add_action('wp_enqueue_scripts', 'theme_styles');

//Enable custom menus
		add_theme_support( 'menus' );

//for SVG images
function cc_mime_types( $mimes ){
		$mimes['svg'] = 'image/svg+xml';
		return $mimes;
}
	add_filter( 'upload_mimes', 'cc_mime_types' );

//Add active class to the menu
	
function special_nav_class($classes, $item){
     if( in_array('current-menu-item', $classes) ){
             $classes[] = 'active ';
     }
     return $classes;
}
	add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);

//Creating widget
function create_widget($name, $id, $description){

		$args = array(
		'name' => __( $name),
		'id'   =>$id,
		'description'=> $description,
		'before_widget'=>'',
		'after_widget'=>'',
		'before_title'=>'<h1>',
		'after_title'=>'</h1>'
		);
	register_sidebar($args);
}

create_widget('Treehouse Badges', "treehouse-badges", "Displaying all the Treehouse Badges");


?>