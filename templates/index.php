
<!doctype html>
<html>

<meta charset="utf-8">





<script type="text/javascript">
function MM_openBrWindow(theURL,winName,features) { //v2.0
  window.open(theURL,winName,features);
}
</script>

<meta name="viewport" content="width=device-width, initial-scale=1"/><!--for mobile device-->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script>
		$(document).ready(function(){
			$(".nav-button").click(function () {
			$(".nav-button,.primary-nav").toggleClass("open");
			});    
		});
		</script>






<head>
<title><?php bloginfo('description'); ?> | <?php bloginfo ('name'); ?></title>

<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;">
<meta name="description" content="The web design portfolio of Grace Eder">
<meta name="keywords" content="grace eder, grace, web, website, websites, web design, design, graphic design, logo design, freelance, responsive, mobile, mobile design, development, responsive development, web development, unique, fun, developer, typography, hand drawn, lettering, illustration, affordable, small business, personal, blog, portfolio, store, prints, font, icons, skewed icons, stacked font">

<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>">
<!-- begin wp head content-->
<?php wp_head(); ?>
<!--end wp head content-->
</head>



<body <?php body_class(); ?>>



 

<script>
// Hide Header on on scroll down
var didScroll;
var lastScrollTop = 0;
var delta = 2;
var navbarHeight = $('header').outerHeight();

$(window).scroll(function(event){
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
    if(Math.abs(lastScrollTop - st) <= delta)
        return;
    
    // If they scrolled down and are past the navbar, add class .nav-up.
    // This is necessary so you never see what is "behind" the navbar.
    if (st > lastScrollTop && st > navbarHeight){
        // Scroll Down
        $('header').removeClass('nav-down').addClass('nav-up');
    } else {
        // Scroll Up
        if(st + $(window).height() < $(document).height()) {
            $('header').removeClass('nav-up').addClass('nav-down');
        }
    }
    
    lastScrollTop = st;
}
    
    
    
</script> 
    
<!--begin main menu-->
<header class="nav-down">
	<div class="navWrapper">
        <?php wp_nav_menu(array('theme_location' => 'main-menu', 'container' => 'div', 'container_id' => 'navbar1', 'items_wrap' => '<ul id="top-menu" class="%2$s"><%3$s</ul>',)); ?> 
    </div> 
   </header>
    
<!--end main menu-->

<!--begin old navigation-->
    
    <!--<header class="nav-down">
	<div class="navWrapper">
	<div class="navbar1">
    	<ul id="top-menu">
            <li class="">
    			<a href="home">HOME</a>
  			</li>
  			<li class="">
    			<a href="about">ABOUT</a>
  			</li>
  			<li class="">
    			<a href="portfolio">WORK</a>
  			</li>
  			<li class="">
    			<a href="contact">CONTACT</a>
  			</li>
            <li class="">
    			<a href="staging">STAGING AREA</a>
  			</li>
		</ul>
	</div>
	<div class="navbar2">
			<div class="accordionButton">MENU</div>
			<div class="accordionContent">
                <a href="home.php">Home</a>
                <div class="divLine"></div>
				<a href="#about">ABOUT</a><br>
				<div class="divLine"></div>
				<a href="#work">WORK</a><br>
				<div class="divLine"></div>
				<a href="#contact">CONTACT</a><br>
                <div class="divLine"></div>
				<a href="staging.php">STAGING AREA</a><br>
		</div>
	</div>
       <div class="socialMedia">
       		 <a href="" target="_blank"><div class="emailIcon"></div></a>
            <a href="" target="_blank"><div class="twitterIcon"></div></a>
            <a href="" target="_blank"><div class="googleplusIcon"></div></a>
           
       </div>
  </div>
</header>-->
<!--begin old navigation-->


<div id="main">
    <h2>Main Section</h2>
    <?php if (have_posts()): while (have_posts()): the_post(); ?>
            
            
    <?php the_content(''); ?>
    <?php endwhile; endif; ?>
</div>
<div id="aside">
<h2>This is the aside</h2>    
  
    
    </div>










<script type="text/javascript" src="<?php bloginfo('template_directory'); ?> /js/javascript.js"> </script>

  
<script>
// Cache selectors
var lastId,
    topMenu = $("#top-menu"),
    topMenuHeight = topMenu.outerHeight()+15,
    // All list items
    menuItems = topMenu.find("a"),
    // Anchors corresponding to menu items
    scrollItems = menuItems.map(function(){
      var item = $($(this).attr("href"));
      if (item.length) { return item; }
    });

// Bind click handler to menu items
// so we can get a fancy scroll animation
menuItems.click(function(e){
  var href = $(this).attr("href"),
      offsetTop = href === "#" ? 0 : $(href).offset().top-topMenuHeight+1;
  $('html, body').stop().animate({ 
      scrollTop: offsetTop
  }, 900);
  e.preventDefault();
});

// Bind to scroll
$(window).scroll(function(){
   // Get container scroll position
   var fromTop = $(this).scrollTop()+topMenuHeight;
   
   // Get id of current scroll item
   var cur = scrollItems.map(function(){
     if ($(this).offset().top < fromTop)
       return this;
   });
   // Get the id of the current element
   cur = cur[cur.length-1];
   var id = cur && cur.length ? cur[0].id : "";
   
   if (lastId !== id) {
       lastId = id;
       // Set/remove active class
       menuItems
         .parent().removeClass("active")
         .end().filter("[href=#"+id+"]").parent().addClass("active");
   }                   
});
</script>



<div id="footer">
<ul>
<li>Copyright &copy; 2015,</li>
<li>All Rights Reserved</li>
    <li><a href="mailto:grace@ugraphix.com">Web Design: Grace Eder</a></li></ul>
</div><!--end footer-->
    
    
 <?php wp_footer(); ?>
<!--end wp head content-->
</head>   
</body>
</html>

