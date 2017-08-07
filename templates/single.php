<?php get_header(); ?>



<!--end main menu-->



	<div id="main">
		<?php if (have_posts()): while (have_posts()): the_post(); ?>
			<h2><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>    
			<?php the_content(''); ?>
		<?php endwhile; endif; ?>
		
        <small>single.php</small>
		
	</div>
    
    <?php get_sidebar(); ?>

	
	
<?php get_footer();