<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;">
	<meta name="description" content="The web design portfolio of Grace Eder">
	<meta name="keywords" content="grace eder, grace, web, website, websites, web design, design, graphic design, logo design, freelance, responsive, mobile, mobile design, development, responsive development, web development, unique, fun, developer, typography, hand drawn, lettering, illustration, affordable, small business, personal, blog, portfolio, store, prints, font, icons, skewed icons, stacked font">
	
	<title>
		<?php bloginfo('description'); ?> |
		<?php bloginfo ('name'); ?>
	</title>

	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>"> 

	<!--for mobile device-->
	<script>
		function MM_openBrWindow(theURL, winName, features) { //v2.0
			window.open(theURL, winName, features);
		}
	</script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
	<script>
		$(document).ready(function() {
			$(".nav-button").click(function() {
				$(".nav-button,.primary-nav").toggleClass("open");
			});
		});
	</script>
	<script>
		// Hide Header on on scroll down
		var didScroll;
		var lastScrollTop = 0;
		var delta = 2;
		var navbarHeight = $('header').outerHeight();

		$(window).scroll(function(event) {
			didScroll = true;
		});

		setInterval(function() {
			if (didScroll) {
				hasScrolled();
				didScroll = false;
			}
		}, 250);

		function hasScrolled() {
			var st = $(this).scrollTop();

			// Make sure they scroll more than delta
			if (Math.abs(lastScrollTop - st) <= delta)
				return;

			// If they scrolled down and are past the navbar, add class .nav-up.
			// This is necessary so you never see what is "behind" the navbar.
			if (st > lastScrollTop && st > navbarHeight) {
				// Scroll Down
				$('header').removeClass('nav-down').addClass('nav-up');
			} else {
				// Scroll Up
				if (st + $(window).height() < $(document).height()) {
					$('header').removeClass('nav-up').addClass('nav-down');
				}
			}

			lastScrollTop = st;
		}
	</script>



	<!-- begin wp head content-->
	<?php wp_head(); ?>
	<!--end wp head content-->
    
<body <?php body_class(); ?>>    
	<!--begin main menu-->
	<header class="nav-down">
		<div class="navWrapper">
			<?php wp_nav_menu(array('theme_location' => 'main-menu', 'container' => 'div', 'container_id' => 'navbar1', 'items_wrap' => '<ul id="top-menu" class="%2$s">%3$s</ul>',)); ?> 
		</div> 
	</header>

<!--end main menu-->
</head>