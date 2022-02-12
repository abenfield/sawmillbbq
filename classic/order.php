<?php
require_once "recaptchalib.php";
$secret = "6Le0yQsTAAAAAISCnNfl5smIzjGxjwRF3ixAtruI";
$response = null;
$reCaptcha = new ReCaptcha($secret);

if ($_POST["g-recaptcha-response"]) {
    $response = $reCaptcha->verifyResponse(
        $_SERVER["REMOTE_ADDR"],
        $_POST["g-recaptcha-response"]
    );
}

    if ($_POST["submit2"]) {
				$date = $_POST['date'];
		
		
		
		$tax = .07825;
		$brisket = $_POST['filling'];
		$brisketp = $brisket * 14.29;

		$specifics = $_POST['specifics'];
		$pork = $_POST['filling2'];
		$porkp = $pork * 13.19;
		$sausage = $_POST['filling3'];
			$sausagep = $sausage * 12.09;
		$turkey = $_POST['filling4'];
			$turkeyp = $turkey * 15.39;
		$hotlink = $_POST['filling5'];
			$hotlinkp = $hotlink * 12.09;
		$beans = $_POST['filling6'];
			$beansp = $beans * 30;
		$corn = $_POST['filling7'];
			$cornp = $corn * 30;
		$coleslaw = $_POST['filling8'];
			$coleslawp = $coleslaw * 30;
		$greenbean = $_POST['filling9'];
			$greenbeanp = $greenbean * 30;
		$potato = $_POST['filling10'];
			$potatop = $potato * 30;
		$jamac = $_POST['filling11'];
			$jamacp = $jamac * 35;
			$spotato = $_POST['filling12'];
				$spotatop = $spotato * 35;
$mac = $_POST['filling13'];
	$macp = $mac * 35;
	
$tprice = $brisketp + $porkp + $sausagep + $turkeyp + $hotlinkp + $beansp + 
$cornp +  $coleslawp + $greenbeanp + $potatop + $jamacp	+ $spotatop + $macp;					
	
$price = $tprice * $tax ;

$fprice = $price + $tprice;
				
$nprice = number_format($fprice, 2)	;		

        $name = $_POST['name2'];
        $email = $_POST['email2'];
		$phone = $_POST['phone2'];
		$up_id = uniqid(); 
        $from = 'Order from Catering Form :'; 
        $to = 'austinleebenfield@gmail.com'; 
        $subject = "$name is requesting an order.";
        $headers = 'From: SawmillBBQ Order <contact@benfielddesigns.com>' . "\r\n" . 'Reply-To: contact@benfielddesigns.com' . "\r\n" .
$headers .= "Reply-To: ". strip_tags($_POST['email2']) . "\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
		
		
		
        $body = "
		<html><body>
		
		
	
		<br/>
	
	
	
	<hr/>
	Order From: $name <br /> 
		E-Mail: $email <br />
		Phone: $phone<br /> 
	<hr/>
			<b>Brisket Amount:</b> $brisket lbs <br />
			<b>Brisket Price:</b> $ $brisketp<br />
			<br/>
			<b>Pork Amount:</b> $pork lbs <br />
			<b>Pork Price:</b> $ $porkp<br />
			<br/>
			<b>Sausage Amount:</b> $sausage lbs <br />
			<b>Sausage Price:</b> $ $sausagep<br />
			<br/>
			<b>Turkey Amount:</b> $turkey lbs <br />
			<b>Turkey Price:</b> $ $turkeyp<br />
			<br/>
			<b>Hot Link Amount:</b> $hotlink lbs <br />
			<b>Hot Link Price:</b> $ $hotlinkp<br />
			<br/>
			<b>Smoked Baked Beans Amount:</b> $beans half pan <br />
			<b>Smoked Baked Beans Price:</b> $ $beansp<br />
			<br/>
			<b>Cheesy Corn Amount:</b> $corn half pan <br />
			<b>Cheesy Corn Price:</b> $ $cornp<br />
			<br/>
			<b>Coleslaw Amount:</b> $coleslaw half pan <br />
			<b>Coleslaw Price:</b> $ $coleslawp<br />
			<br/>
			<b>Greenbeans Amount:</b> $greenbean half pan <br />
			<b>Greenbeans Price:</b> $ $greenbeanp<br />
			<br/>
			<b>Yellow Potato Salad Amount:</b> $potato half pan <br />
			<b>Yellow Potato Salad Price:</b> $ $potatop<br />
			<br/>
			<b>Jalepeno Mac & Cheese Amount:</b> $jamac half pan <br />
			<b>Jalepeno Mac & Cheese Price:</b> $ $jamacp<br />
			<br/>
			<b>Smoked Potato Salad Amount:</b> $spotato half pan <br />
			<b>Smoked Potato Salad Price:</b> $ $spotatop<br />
			<br/>
			<b>Mac & Cheese Amount:</b> $mac half pan <br />
			<b>Mac & Cheese Price:</b> $ $macp<br />
				<hr/>
				<b>Total Price :</b> $ $nprice<br/>
				<hr/>
				<b>Specifics:</b> $specifics  <br />
			<b>	Date :</b> $date <br/>
		<b>Order Number:</b> $up_id <br />
		<hr/>
		
		</body></html>
		"
		;
 
 $body2 = "
		<html><body>
		
		You are recieving this email because you placed an order. You will be contacted by phone within 24/7 from a SawmillBBQ representive. If you are not contacted in 24/7, then please give us a call at 417-RUB-RACK.
		<br/>
		
		
		
		
		If you haven't placed an order then please ignore this email.
	
		<br/>
	
	
	
	<hr/>
	Order From: $name <br /> 
		E-Mail: $email <br />
		Phone: $phone<br /> 
	<hr/>
			<b>Brisket Amount:</b> $brisket lbs <br />
			<b>Brisket Price:</b> $ $brisketp<br />
			<br/>
			<b>Pork Amount:</b> $pork lbs <br />
			<b>Pork Price:</b> $ $porkp<br />
			<br/>
			<b>Sausage Amount:</b> $sausage lbs <br />
			<b>Sausage Price:</b> $ $sausagep<br />
			<br/>
			<b>Turkey Amount:</b> $turkey lbs <br />
			<b>Turkey Price:</b> $ $turkeyp<br />
			<br/>
			<b>Hot Link Amount:</b> $hotlink lbs <br />
			<b>Hot Link Price:</b> $ $hotlinkp<br />
			<br/>
			<b>Smoked Baked Beans Amount:</b> $beans half pan <br />
			<b>Smoked Baked Beans Price:</b> $ $beansp<br />
			<br/>
			<b>Cheesy Corn Amount:</b> $corn half pan <br />
			<b>Cheesy Corn Price:</b> $ $cornp<br />
			<br/>
			<b>Coleslaw Amount:</b> $coleslaw half pan <br />
			<b>Coleslaw Price:</b> $ $coleslawp<br />
			<br/>
			<b>Greenbeans Amount:</b> $greenbean half pan <br />
			<b>Greenbeans Price:</b> $ $greenbeanp<br />
			<br/>
			<b>Yellow Potato Salad Amount:</b> $potato half pan <br />
			<b>Yellow Potato Salad Price:</b> $ $potatop<br />
			<br/>
			<b>Jalepeno Mac & Cheese Amount:</b> $jamac half pan <br />
			<b>Jalepeno Mac & Cheese Price:</b> $ $jamacp<br />
			<br/>
			<b>Smoked Potato Salad Amount:</b> $spotato half pan <br />
			<b>Smoked Potato Salad Price:</b> $ $spotatop<br />
			<br/>
			<b>Mac & Cheese Amount:</b> $mac half pan <br />
			<b>Mac & Cheese Price:</b> $ $macp<br />
				<hr/>
				<b>Total Price :</b> $ $nprice<br/>
				<hr/>
				<b>Specifics:</b> $specifics  <br />
			<b>	Date :</b> $date <br/>
		<b>Order Number:</b> $up_id <br />
		<hr/>
		
		</body></html>
		"
		;
 
 
 
 
        // Check if name has been entered
        if (!$_POST['name2']) {
            $errName = 'Please enter your name';
        }
        
        // Check if email has been entered and is valid
        if (!$_POST['email2'] || !filter_var($_POST['email2'], FILTER_VALIDATE_EMAIL)) {
            $errEmail = 'Please enter a valid email address';
        }
        
        //Check if message has been entered
       if (!$_POST['phone2']) {
		   
            $errPhone = 'Please enter your phone number.';
        }
		 if (!$_POST['date']) {
            $errDate = 'Please enter your date.';
        }
		
		
		if(isset($_POST['g-recaptcha-response'])){
          $captcha=$_POST['g-recaptcha-response'];
        }
		 
		 if(!$captcha){
         $errCaptcha = 'Please prove you are human.';
        }else
        {
          
        }
        //Check if simple anti-bot test is correct

 
// If there are no errors, send the email
if (!$errName && !$errEmail && !$errPhone && !$errDate && !$errCaptcha) {
    if (mail ($to, $subject, $body, $headers)) {
        $result2='<div class="alert alert-success">Success!  If not contacted in 24/7 call 417-RUB-RACK.</div>';
		mail ($email, "Your sawmill order has been received.", $body2, $headers);
		$uid= "Your order ID is $up_id";
    } else {
        $result2='<div class="alert alert-danger">Sorry there was an error sending your message. Please try again later</div>';
    }
}
    }
?>



