# Mail-Service
This project is helpful if anyone wants to add mail services in their website

# if you are working on local server like xampp or wamp server the you have to use PHPMailer 
or


# if you have hosted you website for free or any paid version on hosting company websites like on 000webhost then it is little easy to send a mail using inquiry (contact) form.

code for the same is ,put the code in index.php file

<?php

if(isset($_POST['submit'])){


    $name=$_POST['name'];
	$email=$_POST['email'];
	$phonenumber=$_POST["phonenumber"];
	$course=$_POST['course'];  //  encrypted password
    $msg="";
    



$subject='CallBack request';
$content='Thaks for enrollment.We will reach you soon.'.' '.'Your course name is:'.$course.' '.'Your Phone number is:'.$phonenumber;

$result = mail($email,$subject,$content);



if($result)
	$msg="Email sent! Please check your mail";
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
    <h4>Enroll for VLCC Institute Guwahati</h4>
	 
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
  

