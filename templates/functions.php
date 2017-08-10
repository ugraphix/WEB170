<?php
/*
Theme Name: Gracie
Theme URI: http://graciebikes.com/
Description: Theme designed for Grace's portfolio.
Author: Grace Eder
Author URI: http://ugraphix.com/ 
Version: 1.0 
Tags: simple, basic, plain, customizable

License: 
License URI:

General comments: I hope this works.
*/

//Register My Sidebar
register_sidebar (array(
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h2>',
    'after_title' => '</h2>',

));

//register menus
register_nav_menus(array('main-menu' => 'Main Menu'));
//

    
//Create Post Thumbnails
add_theme_support( 'post-thumbnails' );

//Create Page Excerpts
add_post_type_support('page', 'excerpt');
    

?>