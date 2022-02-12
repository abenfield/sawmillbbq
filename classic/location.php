<?php
include("contact.php");
?>
<!DOCTYPE html>

	<!-- Meta-Data begins here-->
<html lang="en">
<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
<link rel="icon" href="/favicon.ico" type="image/x-icon">
<head>
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
		<link rel="stylesheet" href="style.css">
<link href='http://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
		<!-- Custom Stylesheets-->
	  <link rel="stylesheet" type="text/css"  href="css/styles.css" />
	
 </head>
 

 <!-- Meta Data Ends -->
	
  

<body>

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
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
         <li ><a href="index.php">Home <span class="sr-only">(current)</span></a></li>
        <li><a href="menu.php">Menu</a></li>
         <li><a href="catering.php">Catering</a></li>
		        <li class="active"><a href="location.php">Location</a></li>
				<li ><a href="events.php">Events</a></li>
			 <li><a href="#myTime"data-toggle="modal">Hours</a></li></h1>
      </ul>
    
      <ul class="nav navbar-nav navbar-right">
	    <ul class="nav navbar-nav">
	  <li><a href="#myModal"data-toggle="modal">Contact us</a></li></h1>
	  
       </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
         <div id = "container"> 
		 <div id = "content"> 
				 <br>
		 <h1>SawMillBBQ is located at 612 Main St. Joplin,Mo!</h1>
		 <br>
		<iframe width="600" height="450" frameborder="0" style="border:0"
src="https://www.google.com/maps/embed/v1/place?q=612+South+Main+Street,+Joplin,+MO,+United+States&key=AIzaSyAnsX2CYgGtSz56_oJwdtgBAg6rtuD4X_k"></iframe> 
       
       
    </div>
</div>

			  


<footer> Copyrighted SawMillBBQ 2015 - Website Developed by <a href ="http://benfielddesigns.com">Benfield Web Design </a></footer>
</center>




<script>
	$.get("time.php",function(data){
		$(".huh").append(data)();
		});

	</script>


	
</body>

</html>
