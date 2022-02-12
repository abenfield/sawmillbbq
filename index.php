<?php

	include("config.php");
	
	
	$content = <<<EOT

	

<div class = "mainfont">Welcome to SawmillBBQ! <br/><br/><span style = "font-size:20px"> Put your nose in the air and your eyes all around, cause your looking for the best BBQ in town!</span></div>
<div  style = "height:600px;"class="my-slider">
	<ul>
		<li><img src = "media/image.jpg"/></li>
		<li><img src = "media/image2.jpg"/></li>
		<li><img src = "media/image3.jpg"/></li>
	</ul>
</div>

<div class = "mainfont">We specialize in creating mouth watering BBQ that will make you want to come back for more. Locally owned with "Local Flavors". Competition worthy BBQ with sides that can stand on there own. Check us out! </div>
 <section class="four">
 <div  class="col1">      <a href = "http://www.joplinglobe.com/news/local_news/wally-kennedy-sawmill-bbq-will-need-more-tables/article_368ddf1d-a036-53b0-8556-e95184360294.html"><div class="image"><img src = "media/box1.jpg"/></div><div class="text">CHECK OUT OUR REVIEW IN THE JOPLIN GLOBE</div></div></a>
      <div class="col2"><div class="image"><img src = "media/box2.jpg"/></div><div class = "text">NEED FOOD? WE CATER. FIND OUT MORE.</div></div>
      <div class="col3"><a href = "https://www.facebook.com/SawMillBBQ/"><div class="image"><img src = "media/box3.jpg"/></div><div class = "text">LIKE OUR FOOD? FOLLOW ON FB </div></div></a>
      <div class="col4"><div class="image"><img src = "media/box4.jpg"/></div><div class = "text">ANY QUESTIONS? CONTACT US. 417-RUB-BACK</div></div>
    </section>

<div class="clearfix">

<div class = "mainfont"> We are located at 612 S Main St in Joplin, Missouri. </div>
<iframe width="982" height="450" frameborder="0" style="border:0" 
src="https://www.google.com/maps/embed/v1/place?q=612+South+Main+Street,+Joplin,+MO,+United+States&key=AIzaSyAnsX2CYgGtSz56_oJwdtgBAg6rtuD4X_k"></iframe> 

EOT;
	
	$site->display($content, $title);


?>
