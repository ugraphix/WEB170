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
<title>Main</title>

<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;">
<meta name="description" content="The web design portfolio of Grace Eder">
<meta name="keywords" content="grace eder, grace, web, website, websites, web design, design, graphic design, logo design, freelance, responsive, mobile, mobile design, development, responsive development, web development, unique, fun, developer, typography, hand drawn, lettering, illustration, affordable, small business, personal, blog, portfolio, store, prints, font, icons, skewed icons, stacked font">

<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>">


</head>



<body>



 

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

<header class="nav-down">
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
</header>









<section>


    
<a name="work">
</a>   
<div class="portfolio">
    <h3> Work</h3> 
    <div class ="yellowBox">
        <div class="grow">
            <img src="images/portfolio1.png">
        </div>
        <br>
        CONTENT 1
        <br>
        <div class="boxesInfo" style="color:#d76713">Content 1</div>
    </div>   
    <div class ="greenBox">
        <div class="grow">
            <img src="images/portfolio2.png">
        </div>
        <br>
        CONTENT 2
        <br>
        <div class="boxesInfo" style="color:#535C4F">Content 2</div>
    </div>  
    <div class ="orangeBox">
        <div class="grow">
            <img src="images/portfolio3.png">
        </div>
        <br>
        CONTENT 3
        <br>
        <div class="boxesInfo" style="color:#fbd474">Content 3</div>
    </div>
     <div class ="dkOrangeBox">
        <div class="grow">
            <img src="images/portfolio4.png">
        </div>
         <br>
        CONTENT 4
        <br>
        <div class="boxesInfo" style="color:#e28100">Content 4</div>
    </div>
    <div class ="orangeBox">
        <div class="grow">
            <img src="images/portfolio5.png">
        </div>
        <br>
        CONTENT 5
        <br>
        <div class="boxesInfo" style="color:#fbd474">Content 5</div>
    </div>
     <div class ="dkGreenBox">
        <div class="grow">
            <img src="images/portfolio6.png">
        </div>
        <br>
        CONTENT 6
        <br>
        <div class="boxesInfo" style="color:#e6e8bf">Content 6</div>
    </div>  
    <div class ="yellowBox">
        <div class="grow">
            <img src="images/portfolio7.png">
        </div>
        <br>
        CONTENT 7
        <br>
        <div class="boxesInfo" style="color:#d76713">Content 7</div>
    </div>
    <div class ="greenBox">
        <div class="grow">
            <img src="images/portfolio8.png">
        </div>
        <br>
        CONTENT 8
        <br>
        <div class="boxesInfo" style="color:#535C4F">Content 8</div>
    </div>  
    
</div>    

<a name="contact">
</a>
<div class="contact">
<h3>Contact</h3>
</div>

</section>



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
    
    
    
</body>
</html>
