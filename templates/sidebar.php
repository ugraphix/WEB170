<div id="aside">
		<h2>This is the aside</h2> 
		<ul>
			<?php
			global $id;
			wp_list_pages(array('sort_column' => 'post_date', 'sort_order' => 'desc'));
			?>
		</ul>   
    
    <!---begin quote-->
    <?php if (get_post_meta($post->ID, 'Quote', true)) ://check to see if a quote pops up ?>
    
    <blockquote><?php echo get_post_meta($post->ID, 'Quote', true); ?></blockquote>
    
    <?php endif; ?>
    <!---end quote-->
    
    <!---begin dynamic sidebar-->
    <?php dynamic_sidebar(1);//call our widgets ?>
    
    <!---end dynamic sidebar-->
    
    
    
	</div>
