<?php

if(isset($_POST['submit'])){
require_once('PHPMailer/PHPMailerAutoload.php');

    $name=$_POST['name'];
	$email=$_POST['email'];
	$phonenumber=$_POST["phonenumber"];
	$course=$_POST['course'];  //  encrypted password
    $msg="";

$mail=new PHPMailer();
//$mail->SMTPDebug = 1;
$mail->isSMTP(true);
$mail->SMTPAuth=true;
$mail->SMTPSecure='ssl';
$mail->Host='smtp.gmail.com';
$mail->Port='465';
$mail->isHTML(true);
$mail->Username='sender email';
$mail->Password='sender email password';
//$mail->SetFrom('sender email');
$mail->Subject='CallBack request';
$mail->Body='Thaks for enrollment.We will reach you soon.<br>Your course name is:'.$course.'<br> Your Phone number is:'.$phonenumber;
$mail->AddAddress($email);


if($mail->send())
	$msg="Email sent! Please Check your mail";
      
else
	 echo "Message could not be sent";
 
} 
?>

<html>
<head>
<title>Inquiry Form</title>
<link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="container">  
  <form id="contact" action="index.php" method="post">
    <?php if(isset($_POST['submit'])):?>
	<h2><?php echo($msg);?></h2>
	<?php endif;?>
	<h3>VLCC Inquiry Form</h3>
    <h4>Enroll for VLCC Institute</h4>
	 
    <fieldset>
      <input placeholder="Name" type="text" name="name" required autofocus>
    </fieldset>
    <fieldset>
      <input placeholder="Email" type="email" name="email"  required>
    </fieldset>
    <fieldset>
      <input placeholder="Phone" type="tel" tabindex="3" name="phonenumber" required>
    </fieldset>
    
    <fieldset>
      
		<select type="text" name="course" required >
		  <option value="courses">Courses</option>
		  <option value="Aesthetics: Diploma & Certificate">Aesthetics: Diploma & Certificate</option>
		  <option value="Makeup: Diploma & Certificate">Makeup: Diploma & Certificate</option>
		  <option value="Hair Design: Diploma & Certificate">Hair Design: Diploma & Certificate</option>
		  <option value="Nail Art: Diploma & Certificate">Nail Art Design: Diploma & Certificate</option>
		  <option value="Nutrition: Diploma & Certificate | Distance Learning">Nutrition: Diploma & Certificate| Distance Learning</option>
		  <option value="Skin: Diploma & Certificate">Skin: Diploma & Certificate</option>
		  <option value="Spa Therapy:Diploma & Certificate">Spa Therapy: Diploma & Certificate</option>
		  <option value="Crash Courses Available">Crash Courses Available</option>
		</select>
		
    </fieldset>
    <fieldset>
      <button name="submit" type="submit" >Request a Callback</button>
    </fieldset>
    
  </form>
</div>

