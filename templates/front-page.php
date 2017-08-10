<?php get_header(); ?>



    
    
<!-- Flexslider CSS and JS -->
<link rel="stylesheet" href=" <?php bloginfo('template_directory'); ?>/flex/css/flexslider.css" type="text/css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script src=" <?php bloginfo('template_directory'); ?>/flex/js/jquery.flexslider.js"></script>
<!-- Load the flexslider -->
<script type="text/javascript" charset="utf-8">
$(window).load(function() {
$('.flexslider').flexslider({
animation: "fade",  // slide or fade
controlsContainer: ".flex-container" // the container that holds the flexslider
});
});
</script>




	<div id="main">
		<?php if (have_posts()): while (have_posts()): the_post(); ?>
			<h2><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>    
			<?php the_content(''); ?>
		<?php endwhile; endif; ?>
        
        

            <!-- Slider Container and Images -->
<div style="padding:5px;">
<div class="flexslider">
<ul class="slides" background-color="yellow">
<li><img src="http://www.graciebikes.com/web170/images/portfolio1.png" /></li>
<li><img src="http://www.graciebikes.com/web170/images/portfolio2.png" /></li>
<li><img src="http://www.graciebikes.com/web170/images/portfolio3.png" /></li>
<li><img src="http://www.graciebikes.com/web170/images/portfolio4.png" /></li>
<li><img src="http://www.graciebikes.com/web170/images/portfolio5.png" /></li>
<li><img src="http://www.graciebikes.com/web170/images/portfolio6.png" /></li>
</ul>
</div>
</div>        
        
        
        
        
        
        
        
        <?php 
   // the query
   $the_query = new WP_Query( array(
     'category_name' => 'news',
      'posts_per_page' => 4,
   )); 
?>

<?php if ( $the_query->have_posts() ) : ?>
        
  <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

    <article class="post-excerpt">
        <h2><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>    
		<small>Posted on <?php the_time('F j, Y'); ?> by <?php the_author(); ?> in <?php the_category(', '); ?>
</small>
	   <?php the_post_thumbnail( 'thumbnail' ); ?>

        <?php the_excerpt(''); ?>
            <p class="read-more"><a href="<?php the_permalink(); ?>">Read More</a></p>
        </article>

  <?php endwhile; ?>
  <?php wp_reset_postdata(); ?>

<?php else : ?>
  <p><?php __('No News'); ?></p>
<?php endif; ?>
 
        

		
        <small>front-page.php</small>
		
	</div>
    
    <?php get_sidebar(); ?>

	
	
<?php get_footer();