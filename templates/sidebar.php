<div id="aside">
		<h2>This is the aside</h2> 
		<ul>
			<?php
			global $id;
			wp_list_pages(array('sort_column' => 'post_date', 'sort_order' => 'desc'));
			?>
		</ul>    
	</div>