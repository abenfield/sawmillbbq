<?php
    if ($_POST["submit"]) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];

        $from = 'TheAustinEffect Contact Form'; 
        $to = 'null'; 
        $subject = 'Message from Contact Form ';
        
        $body = "From: $name\n E-Mail: $email\n Message:\n $message";
 
        // Check if name has been entered
        if (!$_POST['name']) {
            $errName = 'Please enter your name';
        }
        
        // Check if email has been entered and is valid
        if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            $errEmail = 'Please enter a valid email address';
        }
        
        //Check if message has been entered
        if (!$_POST['message']) {
            $errMessage = 'Please enter your message';
        }
        //Check if simple anti-bot test is correct

 
// If there are no errors, send the email
if (!$errName && !$errEmail && !$errMessage) {
    if (mail ($to, $subject, $body, $from)) {
        $result='<div class="alert alert-success">Thank You! I will be in touch</div>';
    } else {
        $result='<div class="alert alert-danger">Sorry there was an error sending your message. Please try again later</div>';
    }
}
    }
?>
<!DOCTYPE html>

	<!-- Meta-Data begins here-->
<html lang="en">
<head>
<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
<link rel="icon" href="/favicon.ico" type="image/x-icon">
<link href='http://fonts.googleapis.com/css?family=Rye' rel='stylesheet' type='text/css'>
	<!-- Favicon Icon here-->
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
<link rel="icon" href="favicon.ico" type="image/x-icon">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>SawMillBBQ -- Joplin</title>
		<!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    
		<!-- Font Family -->
<link href='http://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
		<!-- Custom Stylesheets-->
      <link rel="stylesheet" href="css/flexslider.css" type="text/css">
	  <link rel="stylesheet" type="text/css"  href="css/styles.css?t=<?php echo date('his'); ?>" />
	  
       <script src="js/jquery.flexslider.js"></script>
 </head>
 
 <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.3";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
 <!-- Meta Data Ends -->
	
  

<body>

<!--My Modal goes below this line. -->
<div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h3 id="myModalLabel">We'd Love to Hear From You</h3>
      </div>
      <div class="modal-body">
	  <h4 style = "color:#a12c2c;">Call 417-Rub-Rack or Email us at sawmillbbq@hotmail.com below!</h4>
           <form class="form-horizontal" role="form" method="post" action="index.php">
    <div class="form-group">
        <label for="name" class="col-sm-2 control-label">Name</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="name" name="name" placeholder="First & Last Name" value="<?php echo htmlspecialchars($_POST['name']); ?>">
            <?php echo "<p class='text-danger'>$errName</p>";?>
        </div>
    </div>
    <div class="form-group">
        <label for="email" class="col-sm-2 control-label">Email</label>
        <div class="col-sm-10">
            <input type="email" class="form-control" id="email" name="email" placeholder="example@domain.com" value="<?php echo htmlspecialchars($_POST['email']); ?>">
            <?php echo "<p class='text-danger'>$errEmail</p>";?>
        </div>
    </div>
    <div class="form-group">
        <label for="message" class="col-sm-2 control-label">Message</label>
        <div class="col-sm-10">
            <textarea class="form-control" rows="4" name="message"><?php echo htmlspecialchars($_POST['message']);?></textarea>
            <?php echo "<p class='text-danger'>$errMessage</p>";?>
        </div>
    </div>

    <div class="form-group">
        <div class="col-sm-10 col-sm-offset-2">
            <input id="submit" name="submit" type="submit" value="Send" class="btn btn-primary">
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-10 col-sm-offset-2">
            <?php echo $result; ?>    
        </div>
    </div>
</form>
	   
	   
	   
	   
      </div>
      <div class="modal-footer">
        <button class="btn" data-dismiss="modal" aria-hidden="true">Cancel</button>
      </div>
    </div>
  </div>
</div>

<!--My Modal goes below this line. -->
<div id="myTime" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h3 id="myModalLabel">Restaurant Hours</h3>
      </div>
      <div class="modal-body">
	<table class="table table-hover">
  <tr>
 <td>Monday</td>
    <td style = "color:red">Closed</td>		
  </tr>
  <tr>
    <td>Tuesday</td>
    <td style = "color:green">11 am - 3 pm</td>		
  </tr>
  <tr>
    <td>Wednesday</td>
    <td style = "color:green">11 am - 8 pm</td>		

  </tr>
   <tr>
    <td>Thursday</td>
    <td style = "color:green">11 am - 8 pm</td>		

  </tr>
   <tr>
    <td>Friday</td>
    <td style = "color:green">11 am - 10 pm</td>		

  </tr>
   <tr>
    <td>Saturday</td>
    <td style = "color:green">11 am - 9 pm</td>		

  </tr>
   <tr>
    <td>Sunday</td>
    <td style = "color:red">Closed</td>		

  </tr>
</table>
	   
	   
	   
      </div>
      <div class="modal-footer">
        <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
      </div>
    </div>
  </div>
</div>

    <div class="container">
        
            <center>

              <a href ="http://benfielddesigns.com/sawmill">  <img class="img-responsive" src="media/logo.png" width="300px" height="150px" /></a>
				
				<nav class="navbar navbar-custom">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    
    
    </div>

     <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse " id="bs-example-navbar-collapse-1" style = "overflow: hidden;">
      <ul class="nav navbar-nav">
   <li class = "active"><a href="index.php">Home <span class="sr-only">(current)</span></a></li>
        <li ><a href="menu.php">Menu</a></li>
         <li><a href="catering.php">Catering</a></li>
		        <li><a href="location.php">Location</a></li>
				<li ><a href="events.php">Events</a></li>
			 <li><a href="#myTime"data-toggle="modal">Hours</a></li></h1>
				
				
				 
      </ul>
    
      <ul class="nav navbar-nav navbar-right">
	    <ul class="nav navbar-nav">
	  <li><a href="#myModal"data-toggle="modal">Contact us</li></h1>
	  <div id = "cat" class = "hidden-xs">
	 <img class="" src="sin.png"  style =" width:200px; height:150px; margin-left:-50px;" />
	 </a>
	 </div>
       </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
         <div id = "container"> 
		 <div id = "content"> 
		<h2> <div class="huh ">Currently, it is </div></h2>
		<br/>
<div id = "meme"<a href="#myTime"data-toggle="modal">See the complete hours here...</a></div>
	<hr>
	<br>

               
<!--Flex slider begins -->
		   <div id='homepage-images' class='flexslider'>
                <ul class='slides'>
                    <li>
                        <img src='media/01.jpg' alt='' />
                        <h1 class='flex-caption'>SawmillBBQ, Best BBQ in town!</h1>
                    </li>
                     <li>
                        <img src='images/03.jpg' alt='' />
                        <h1 class='flex-caption'>Check out our selection of cold brews!</h1>
                    </li>
                    
                    
                    <li>
                        <img src='media/02.jpg' alt='' />
                        <h1 class='flex-caption'>Come try some of our mouth-watering BBQ today!</h1>
                    </li>
                    
                    
                </ul>
            </div>
        </div>
		<!--Flex slider ends -->
    
    
 <div class="container-fluid">

     
     
     
     
     
     
  <div class="row">

    <div class="col-sm-8" style="">

 <div class="style" >
                <p style="font-size:25px; " class="paragraph_style">We specialize in creating mouth watering BBQ that will 
                make you want to come back for more.  Locally owned with &quot;Local Flavors&quot;. Competition worthy BBQ with sides that can stand on there own.  Check us out!</p>
              </div>
		
			
		<a href = "http://www.joplinglobe.com/news/local_news/wally-kennedy-sawmill-bbq-will-need-more-tables/article_368ddf1d-a036-53b0-8556-e95184360294.html"><div id = "newspaper">
             <h3 style = " color:#C43737;">Check out our review in the 12-8-12 edition of Joplin Globe!</h3>
             <img style = style= "align:right" src = "images/news.png"/>
           
      
           
            <h4 style = " color:#C43737;">"...I have one predication for Sawmill BBQ: It's going to need more tables."</h4><br/>
            <h4 >-Wally Kennedy</h4>
            
        </div>
        </a>
			  
</div>
    <div class="col-sm-4" style="">
	                <p style="font-size:25px;  " class="paragraph_style">Like us on Facebook for exclusive specials!</p>
	
	
	<div class="fb-page" data-href="https://www.facebook.com/SawMillBBQ" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" data-show-posts="true"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/SawMillBBQ"><a href="https://www.facebook.com/SawMillBBQ">Sawmill BBQ</a></blockquote></div></div></div>
  </div>
</div>
		    
		
			
        </div>

<footer> Copyrighted SawMillBBQ 2015 - Website Developed by <a href ="http://benfielddesigns.com">Benfield Web Design </a></footer>
		</div>

</center>

 <script type="text/javascript" charset="utf-8">
        $(window).load(function() {
            $('.flexslider').flexslider({
                animation: "fade", // slide or fade
                controlsContainer: ".flex-container" // the container that holds the flexslider
            });
        });
    </script>


<script>
	$.get("time.php",function(data){
		$(".huh").append(data)();
		});

	</script>


	
</body>

</html>
