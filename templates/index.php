<?php get_header(); ?>



<!--end main menu-->



	<div id="main">
		<?php if (have_posts()): while (have_posts()): the_post(); ?>
			<h2><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>    
			<?php the_content(''); ?>
		<?php endwhile; endif; ?>
        
        
        
        
        <script>$my_query = new WP_Query( 'cat=3' );
if ( $my_query->have_posts() ) { 
	while ( $my_query->have_posts() ) { 
		$my_query->the_post();
		the_content();
	}
}
wp_reset_postdata();</script>
        
        
		
        <small>index.php</small>
		
	</div>
    
    <?php get_sidebar(); ?>

	
	
<?php get_footer();