<?php

include("contact.php");
   include("order.php");
  

?>


<!DOCTYPE html>

	<!-- Meta-Data begins here-->
<html lang="en">
<head>
<script src='https://www.google.com/recaptcha/api.js'></script>
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
	  <link rel="stylesheet" type="text/css"  href="css/styles.css" />
	    <link rel="stylesheet" type="text/css"  href="css/date.css" />
	<script type="text/javascript" src="js/formcalculations.js"></script>
	<script type="text/javascript" src="js/dog.js"></script>

	
 </head>
 

	
  

<body> 
<style>#container {
 background-color:#F5F5F5;
  padding: 5px;
    margin: 0px;
    overflow: auto;
    width: 100%; //for some explorer browsers to trigger hasLayout


}</style>
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
           <form class="" role="form" method="post" action="index.php">
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
              <a href ="http://theaustineffect.com/sawmill">  <img class="img-responsive" id ="logo" src="media/logo.png" width="300px" height="150px" /></a>
	</center>
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
        <li><a href="index.php">Home <span class="sr-only">(current)</span></a></li>
        <li ><a href="menu.php">Menu</a></li>
         <li class="active"><a href="catering.php">Catering</a></li>
		        <li><a href="location.php">Location</a></li>
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
<center>
           <div id = "container" style = "font-family:PT Sans"> 
	
		
		



       
 
             
           <form class="" role="form" method="post" action="catering.php" id="cakeform">
              
    	<h1>Place a order online in 3 steps!</h1>
	
	<br/>
	<div style ="background-color:#F5F5F5">

		<h2>Step 1 : Select a Meat Combo!</h1>
		
		<span style = "color:green; "/>
			<br/>
		Brisket : $14.29 per pound
		<br/>
		Pork : $13.19 per pound
		<br/>
		Turkey : $15.39 per pound
		<br/>
		Sausage : $12.09 per pound
		<br/>
		Hot Links : $12.09 per pound
		<br/>
		</span>
		
		</br>
</div>
	<div class="form-group" style  = "background-color:blue;">
<div style = "background-color:green">
	<div class = "menualt">
	<label >Brisket Amount:</label>
		  <li style=" background-image: url('media/meatcombo/brisket.PNG');"	>
		
		 
		    <select class="form-control" id="filling" name='filling' onchange="calculateTotal()" value="<?php echo htmlspecialchars($_POST['filling']); ?>">
              <option value="None">0 pounds (none)</option>
                <option value="1">1 pound ($14.29)</option>
                <option value="2">2 pounds ($28.58)</option>
                <option value="3">3 pounds ($42.87)</option>
                <option value="4">4 pounds ($57.16)</option>
                <option value="5">5 pounds ($71.45)</option>
                <option value="10">10 pounds ($142.9)</option>
                <option value="20">20 pounds ($285.8)</option>
              
               </select>
		  </li>
</div>

	<div class = "menualt">
	<label >Pork Amount:</label>
		  <li style=" background-image: url('media/meatcombo/pork.PNG');"	>
		
		 
		    <select class="form-control" id="filling2" name='filling2' onchange="calculateTotal()" value="<?php echo htmlspecialchars($_POST['filling2']); ?>">
                <option value="None">0 pounds (none)</option>
                <option value="1">1 pound ($13.19)</option>
                <option value="2">2 pounds ($26.38)</option>
                <option value="3">3 pounds ($39.57)</option>
                <option value="4">4 pounds ($52.76)</option>
                <option value="5">5 pounds ($65.95)</option>
                <option value="10">10 pounds ($131.90)</option>
                <option value="20">20 pounds ($263.80)</option>
              
               </select>
		  </li>
</div>

<div class = "menualt">
	<label >Sausage Amount:</label>
		  <li style=" background-image: url('media/meatcombo/smokedsausage.PNG');"	>
		
		 
		    <select class="form-control" id="filling3" name='filling3' onchange="calculateTotal()" value="<?php echo htmlspecialchars($_POST['filling3']); ?>">
               <option value="None">0 pounds (none)</option>
                <option value="1">1 pound ($12.09)</option>
                <option value="2">2 pounds ($24.18)</option>
                <option value="3">3 pounds ($36.27)</option>
                <option value="4">4 pounds ($48.36)</option>
                <option value="5">5 pounds ($60.45)</option>
                <option value="10">10 pounds ($120.90)</option>
                <option value="20">20 pounds ($241.80)</option>
              
               </select>
		  </li>
</div>

<div class = "menualt">
	<label >Turkey Amount:</label>
		  <li style=" background-image: url('media/meatcombo/turkey.PNG');"	>
		
		 
		    <select class="form-control" id="filling4" name='filling4' onchange="calculateTotal()" value="<?php echo htmlspecialchars($_POST['filling4']); ?>">
                <option value="None">0 pounds (none)</option>
                <option value="1">1 pound ($15.39)</option>
                <option value="2">2 pounds ($30.78)</option>
                <option value="3">3 pounds ($46.17)</option>
                <option value="4">4 pounds ($61.56)</option>
                <option value="5">5 pounds ($76.95)</option>
                <option value="10">10 pounds ($153.90)</option>
                <option value="20">20 pounds ($307.80)</option>
              
               </select>
		  </li>
</div>

<div class = "menualt">
	<label >Hot Link Amount:</label>
		  <li style=" background-image: url('media/meatcombo/sausage.PNG');"	>
		
		 
		    <select class="form-control" id="filling5" name='filling5' onchange="calculateTotal()" value="<?php echo htmlspecialchars($_POST['filling5']); ?>">
                <option value="None">0 pounds (none)</option>
                <option value="1">1 pound ($12.09)</option>
                <option value="2">2 pounds ($24.18)</option>
                <option value="3">3 pounds ($36.27)</option>
                <option value="4">4 pounds ($48.36)</option>
                <option value="5">5 pounds ($60.45)</option>
                <option value="10">10 pounds ($120.9)</option>
                <option value="20">20 pounds ($241.8)</option>
              
               </select>
		  </li>
		
</div>
    </div>
    </div>
	  <br/>
         
                
                <br/>

                
                
                 
			
	
        
                <br/>
               
	<br/>
	
		</br>
		</br>
		<div style  = " clear: both; ">
		  <h2 style = "margin-top:400px;">Step 2 : Select Sides!</h1>
		  <br/>	<span style = "color:green; "/>
	
		<h3>1/2 pan serves 25 people.| Full pan serves 50 people.</h3>
		<br/>
		<h3>Regular Sides : $30 per 1/2 Pan | $60 per Full Pan.
		<br/><br/>
		**Speciality Sides : $35 per 1/2 Pan | $70 per Full Pan**</h3>
		</div>
		<br/>
		</span>
		  <div class = "menualt">
	<label >Smoked Baked Beans</label>
		  <li style=" background-image: url('media/sides/bean.PNG');"	>
		
		 
		    <select class="form-control" id="filling6" name='filling6' onchange="calculateTotal()" value="<?php echo htmlspecialchars($_POST['filling6']); ?>">
  
					<option value="None">0 pans (none)</option>
                <option value="1">1/2 pan ($30)</option>
                <option value="2">1 pan ($60)</option>
                <option value="3"> 1 1/2 pan ($90)</option>
                <option value="4">2 pans ($120)</option>
                <option value="5">2 1/2 pan ($150)</option>
                <option value="10">3 pans ($180)</option>
                <option value="20">3 1/2 pans ($210)</option>
              
               </select>
		  </li>
		
</div>
<div class = "menualt">
	<label >Cheesy Corn</label>
		  <li style=" background-image: url('media/sides/corn.PNG');"	>
		
		 
		    <select class="form-control" id="filling7" name='filling7' onchange="calculateTotal()" value="<?php echo htmlspecialchars($_POST['filling7']); ?>">
     	<option value="None">0 pans(none)</option>
                <option value="1">1/2 pan ($30)</option>
                <option value="2">1 pan ($60)</option>
                <option value="3"> 1 1/2 pan ($90)</option>
                <option value="4">2 pans ($120)</option>
                <option value="5">2 1/2 pan ($150)</option>
                <option value="10">3 pans ($180)</option>
                <option value="20">3 1/2 pans ($210)</option>
               </select>
		  </li>
		
</div>
<div class = "menualt">
	<label >Coleslaw</label>
		  <li style=" background-image: url('media/sides/coleslaw.PNG');"	>
		
		 
		    <select class="form-control" id="filling8" name='filling8' onchange="calculateTotal()" value="<?php echo htmlspecialchars($_POST['filling8']); ?>">
         	<option value="None">0 pans(none)</option>
                <option value="1">1/2 pan ($30)</option>
                <option value="2">1 pan ($60)</option>
                <option value="3"> 1 1/2 pan ($90)</option>
                <option value="4">2 pans ($120)</option>
                <option value="5">2 1/2 pan ($150)</option>
                <option value="10">3 pans ($180)</option>
                <option value="20">3 1/2 pans ($210)</option>
               </select>
		  </li>
		
</div>
<div class = "menualt">
	<label >Greenbeans</label>
		  <li style=" background-image: url('media/sides/green.PNG');"	>
		
		 
		    <select class="form-control" id="filling9" name='filling9' onchange="calculateTotal()" value="<?php echo htmlspecialchars($_POST['filling9']); ?>">
         		<option value="None">0 pans (none)</option>
                <option value="1">1/2 pan ($30)</option>
                <option value="2">1 pan ($60)</option>
                <option value="3"> 1 1/2 pan ($90)</option>
                <option value="4">2 pans ($120)</option>
                <option value="5">2 1/2 pan ($150)</option>
                <option value="10">3 pans ($180)</option>
                <option value="20">3 1/2 pans ($210)</option>
              
               </select>
		  </li>
		
</div>
<div class = "menualt">
	<label >Yellow Potato Salad</label>
		  <li style=" background-image: url('media/sides/yellow.PNG');"	>
		
		 
		    <select class="form-control" id="filling10" name='filling10' onchange="calculateTotal()" value="<?php echo htmlspecialchars($_POST['filling10']); ?>">
             	<option value="None">0 pans (none)</option>
                <option value="1">1/2 pan ($30)</option>
                <option value="2">1 pan ($60)</option>
                <option value="3"> 1 1/2 pan ($90)</option>
                <option value="4">2 pans ($120)</option>
                <option value="5">2 1/2 pan ($150)</option>
                <option value="10">3 pans ($180)</option>
                <option value="20">3 1/2 pans ($210)</option>
              
               </select>
		  </li>
		
</div>
<div class = "menualt">
	<label >**Jalepeno Mac & Cheese**</label>
		  <li style=" background-image: url('media/special/ja.PNG');"	>
		
		 
		    <select class="form-control" id="filling11" name='filling11' onchange="calculateTotal()" value="<?php echo htmlspecialchars($_POST['filling11']); ?>">
           	<option value="None">0 pans (none)</option>
                <option value="1">1/2 pan ($35)</option>
                <option value="2">1 pan ($70)</option>
                <option value="3"> 1 1/2 pan ($105)</option>
                <option value="4">2 pans ($140)</option>
                <option value="5">2 1/2 pan ($175)</option>
                <option value="10">3 pans ($210)</option>
                <option value="20">3 1/2 pans ($245)</option>
               </select>
		  </li>
		
</div>
<div class = "menualt">
	<label >**Smoked Potato Salad**</label>
		  <li style=" background-image: url('media/special/potato.PNG');"	>
		
		 
		    <select class="form-control" id="filling12" name='filling12' onchange="calculateTotal()" value="<?php echo htmlspecialchars($_POST['filling12']); ?>">
       	<option value="None">0 pans (none)</option>
                <option value="1">1/2 pan ($35)</option>
                <option value="2">1 pan ($70)</option>
                <option value="3"> 1 1/2 pan ($105)</option>
                <option value="4">2 pans ($140)</option>
                <option value="5">2 1/2 pan ($175)</option>
                <option value="10">3 pans ($210)</option>
                <option value="20">3 1/2 pans ($245)</option>
              
               </select>
		  </li>
		
</div>
<div class = "menualt">
	<label >**Mac & Cheese**</label>
		  <li style=" background-image: url('media/special/mac.PNG');"	>
		
		 
		    <select class="form-control" id="filling13" name='filling13' onchange="calculateTotal()" value="<?php echo htmlspecialchars($_POST['filling13']); ?>">
       	<option value="None">0 pans (none)</option>
                <option value="1">1/2 pan ($35)</option>
                <option value="2">1 pan ($70)</option>
                <option value="3"> 1 1/2 pan ($105)</option>
                <option value="4">2 pans ($140)</option>
                <option value="5">2 1/2 pan ($175)</option>
                <option value="10">3 pans ($210)</option>
                <option value="20">3 1/2 pans ($245)</option>
              
               </select>
		  </li>
		
</div>




<br/>
	<div style  = " clear: both; ">
	<div style = "background-color:#F1E8DC">
	<h3>Sale Before Tax : <h3 id = "totalPrice"></h3></h3>
<h3>Sales Tax : <h3 id = "taxPrice"> </h3> 
<h1>Grand Total:</h1> <h1 id = "finalPrice"></h1>
  </div>
  <br/>
<h1 style>Step 3 : Enter Contact Info!</h1>
<br/>
		
	
			</br>
	  <label  class="col-sm-2 control-label">Name</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="name2" name="name2" placeholder="First & Last Name" value="<?php echo htmlspecialchars($_POST['name2']); ?>">
            <?php echo "<p class='text-danger'>$errName</p>";?>
        </div>

    <div class="form-group">
        <label class="col-sm-2 control-label">	Email:</label>
        <div class="col-sm-10">
            <input type="email" class="form-control" id="email2" name="email2" placeholder="example@domain.com" value="<?php echo htmlspecialchars($_POST['email2']); ?>">
            <?php echo "<p class='text-danger'>$errEmail</p>";?>
        </div>
    </div>
   <div class="form-group">
        <label class="col-sm-2 control-label">	Phone:</label>
        <div class="col-sm-10">
            <input type="phone" class="form-control" id="phone2" name="phone2" placeholder="417-XXX-XXXX" value="<?php echo htmlspecialchars($_POST['phone2']); ?>">
            <?php echo "<p class='text-danger'>$errPhone</p>";?>
        </div>
</div>
<div class="form-group">
		  <label class="col-sm-2 control-label">	Delivery Date:</label>
 <div class="col-sm-10">
 <input type="phone" class="form-control" id="date" name="date" placeholder="01/12/15" value="<?php echo htmlspecialchars($_POST['date']); ?>">
            <?php echo "<p class='text-danger'>$errDate</p>";?>
</div>
 </div>
<div class="form-group">
   <label class="col-sm-2 control-label">	Specifications:</label>
   <br/>
	<textarea id = "specifics" name = "specifics" class="form-control" rows="3" value="<?php echo htmlspecialchars($_POST['specifics']); ?>" ></textarea>
<br/><br/>
<h3 style = "color:red">We will contact you in 24/7 of your order placement. If you are not contacted within 24/7, please 
          contact 417-RUB-RACK!</h3>
     <label class="col-sm-2 control-label">	Captcha:</label>
	  <div class="col-sm-10">
<br/>	
	
         


          
          
        <div class="g-recaptcha" data-sitekey="6Le0yQsTAAAAAOILiL17xtJLcJLqdtS7gHJqbwen"></div>
	    <?php echo "<p class='text-danger'>$errCaptcha</p>";?>
		
		

</div>
    </div>
	</div>
	

    <div class="form-group">
        <div class="col-sm-10 col-sm-offset-2">
            <input id="submit2" name="submit2" type="submit" value="Send" class="btn btn-primary">
        </div>
    </div>
	
	
	
	
	
    <div class="form-group">
        <div class="col-sm-10 col-sm-offset-2">
            <?php echo $result2; echo $uid; ?>    
        </div>
    </div>
	    
</form>
		
		
		
		
		<br/>
		</div>


<!--		
<br/>
Contact Brian or Natasha for all your catering needs!
<br/>
<span style = "color:#a12c2c">417-RUB-RACK or sawmillbbq@hotmail.com</span>
<br/>
<br/>
</h4>
-->
       <footer class = "center"> Copyrighted SawMillBBQ 2015 - Website Developed by <a href ="http://theaustineffect.com">Benfield Web Design </a></footer>
    </div>


</div>
</center>
			  

		    
		
			
    






<script>
	$.get("time.php",function(data){
		$(".huh").append(data)();
		});

	</script>


	
</body>

</html>