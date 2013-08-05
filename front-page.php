<?php get_header(); ?>
<div class="main-container">
 	<div class="slogan clearfix">
        <div id="banner">
            <div id="bannertext" class="wrapper">
                <h1>Khemraj Thapa</h1>
 					<p  class="note"><span> A <em>web developer </em>from Sandhurst, passionate about both front-end and back-end. Currently learning JavaScript, PHP, Wordpress and more.</span></p>
            </div>
        </div>
	</div>
	<?php
	$args = array(
		'post_type' => 'work',
		'order' => 'ASC',
		'posts_per_page'=> 1
	);

	$the_query = new WP_Query( $args );

?>
<div class="main portfolio">
<h2 class="port" id="port">Recent Work</h2>
    <div class="recentwork wrapper">
		<?php if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>	
            <figure>
                <img src="<?php the_field('image'); ?>" alt="img01" data-description="<?php the_field('description'); ?>" data-title="<?php the_field('title'); ?>">
                <figcaption>
                    <h3><?php the_field('title'); ?></h3>
                    <span><?php the_field('description'); ?></span>
                    <a href="<?php the_field('url'); ?>">Visit</a>
                </figcaption>
            </figure>
                  </div>
		<?php endwhile; endif; ?>
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