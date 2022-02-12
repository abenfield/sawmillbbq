<?php

	include("config.php");
	
	$title = "Wesley's Happy Website";
	
	$content = <<<EOT

	
<body >
 <div id="body-wrapper">
            <div id="outer-wrapper" style="height: auto;">
                <div id="content-wrapper">
                    <div id="header">
                        


<div id="header-left">
    <h1>
        <a href="index.html" class=""><img style = "width:150px"src="logo.png" ></a>
      
    </h1>
</div>
<div id="header-right">
   
    <div id="main-nav">
        <ul>
	        <li class="first">
                <a  href="menu.html">Menu</a>
              
            </li>
            <li>
                <a  href="#">Catering</a>
               
            </li>
            
            <li>
                <a  href="#">Gallery</a>
                
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
<div style = "font-size:25px;color:white;text-align:center; margin-bottom:20px;">Welcome to SawmillBBQ! <br/><br/><span style = "font-size:20px"> Put your nose in the air and your eyes all around, cause your looking for the best BBQ in town!</span></div>
<div  style = "height:600px;"class="my-slider">
	<ul>
		<li><img src = "image.jpg"/></li>
		<li><img src = "image2.jpg"/></li>
		<li><img src = "image3.jpg"/></li>
	</ul>
</div>

EOT;
	
	$site->display($content, $title);


?>