<?php get_header(); ?>



<!--end main menu-->



	<div id="main">
		<?php if (have_posts()): while (have_posts()): the_post(); ?>
			
        <article id="post-<?php the_ID(); ?>"class="post">
        <h2><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>    
		<small>Posted on <?php the_time('F j, Y'); ?> by <?php the_author(); ?> in <?php the_category(', '); ?>
</small>
	   <?php the_post_thumbnail( 'medium' ); ?>

        <?php the_content(''); ?>
            
       
		<?php endwhile; endif; ?>
		
        <small>single.php</small>
		</article>
	</div>
    
    <?php get_sidebar(); ?>

	
	
<?php get_footer();