<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>
<!DOCTYPE html>

<html>
<head>
	<meta charset=utf-8 />
	<title>SawMillBBQ | Joplin</title>
	<link rel="stylesheet" type="text/css" media="screen" href="css/style.css" />
	<link rel="icon" type="image/x-icon" href="favicon.ico" />
<link rel="stylesheet" href="css/unslider.css">
<link rel="stylesheet" href="css/unslider-dots.css">
	<script src="js/jquery-3.1.0.min.js"></script>
<script src="js/unslider-min.js"></script> <!-- but with the right path! -->
	<script>
		jQuery(document).ready(function($) {
			$('.my-slider').unslider({
			 autoplay: true,
			 delay: 9000,
			 arrows:false
			 
			});
		
		});
	</script>
<link rel="stylesheet" type="text/css" href="gallery/resources/UberGallery.css" />
<link rel="stylesheet" type="text/css" href="gallery/resources/colorbox/1/colorbox.css" />
<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script type="text/javascript" src="gallery/resources/colorbox/jquery.colorbox.js"></script>

<script type="text/javascript">
$(document).ready(function(){
    $("a[rel='colorbox']").colorbox({maxWidth: "90%", maxHeight: "90%", opacity: ".5"});
});
</script>
	<!--[if IE]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
</head>
<body >
 <div id="body-wrapper">
            <div id="outer-wrapper" style="height: auto;">
                <div id="content-wrapper">
                    <div id="header">
                        


<div id="header-left">
    <h1>
        <a href="index.php" class=""><img style = "width:150px"src="media/logo.png" ></a>
      
    </h1>
</div>
<div id="header-right">
   
    <div id="main-nav">
        <ul>
	        <li class="first">
                <a  href="menu.pdf">Menu</a>
              
            </li>
            <li>
                <a  href="#">Catering</a>
               
            </li>
            
            <li>
                <a  href="gallery.php">Gallery</a>
                
            </li>
            <li>
                <a  href="#">Hours</a>
               
            </li>
           <li style = "border:none;" >
                <a  href="#">Contact</a>
               
            </li>
         
		
		 <a style = "margin-left:50px"href = "https://www.facebook.com/SawMillBBQ/"><img src="media/facebook.png" style="width:30px;"/></a>

    </div>
   </div>
   </div>
   <h1 style = "color:white";> Photo Gallery </h1>
   
   
<?php include_once('gallery/resources/UberGallery.php'); $gallery = UberGallery::init()->createGallery('gallery-images'); ?>

<footer>

<div class = "footerfont">SawmillBBQ Copyright 2016 �</div>

<div class = "footerfont">Website Developed by Benfield Designs</div>
</footer>
</body>
</html>