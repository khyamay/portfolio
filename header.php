<!DOCTYPE html>
<html>
	<head>
		<title>
			<?php 
				wp_title( '-', true, 'right');
				bloginfo('name');
			?>
		</title>
		<meta name="viewport" content="width=device-width">
		<?php wp_head(); ?>
	</head>
	<body>

 	<div class="header-container">
            <header class="wrapper clearfix"> 
               	<header id="topnav">
	                <a href="/"><div class="icon-logo logo"></div></a>
	                <a href="#" id="navbtn"><span>menu</span></a>
	                <nav>
	                	<ul>
						<?php 
						$args = array(
							'menu' => 'main-menu'
							);
						echo strip_tags(wp_nav_menu( $args ), '<a>');
						?>
						</ul>
	                </nav>
            	</header>  
           </header>
       </div>