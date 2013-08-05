
<?php

/*

	Template Name: Work Page

*/

?>
<?php get_header(); ?>
    <div class="main-container">
       <div class="main portfolio">
       		<h2 class="port" id="port">Portfolio</h2>
       		<ul class="portimages wrapper">
				<?php 	
					$args = array (
						'post_type' => 'work',
						'order' => 'ASC'
						);
					$the_query = new WP_Query( $args );
				?>
				<?php if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>	
			          
			          <?php  get_template_part('content', 'work'); ?>
			          
				<?php endwhile; endif; ?>
			</ul>
		<div class="badge">
			<div class="badge-container wrapper">
				<?php if(dynamic_sidebar('treehouse-badges')): ?>
				<?php else: ?>
					<h1>Treehouse Badges</h1>
					<p>Install the Treehouse plugin</p>
					<?php endif; ?>
			</div>
		</div>
		</div>
   </div>
<?php get_footer(); ?>
