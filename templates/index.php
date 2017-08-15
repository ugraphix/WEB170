<?php get_header(); ?>



<!--end main menu-->


<!---this is the start of the loop for posts---->
	<div id="main">
		<?php if (have_posts()): while (have_posts()): the_post(); ?>
			
        <article class="post-excerpt">
        <h2><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>    
		<small>Posted on <?php the_time('F j, Y'); ?> by <?php the_author(); ?> in <?php the_category(', '); ?>
</small>
	   <?php the_post_thumbnail( 'thumbnail' ); ?>

        <?php the_excerpt(''); ?>
            <p class="read-more"><a href="<?php the_permalink(); ?>">Read More</a></p>
        </article>
		<?php endwhile; endif; ?>

<!---this is the end of loop for posts---->
        
        
        
        
   
        
        
		
        <small>index.php</small>
		
	</div>
    
    <?php get_sidebar(); ?>

	
	
<?php get_footer();