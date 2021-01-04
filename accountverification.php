
<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
			<!-- icons -->
    <link rel="shortcut icon" href="icon.png" />
        <title>Linksxup-Account Recovery.</title>

        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="assets/css/form-elements.css">
        <link rel="stylesheet" href="assets/css/style.css">

       		<!-- manifest for Andriod and Chrome -->
		<link rel="manifest" href="manifest.json">
  
	<!-- manifest ios support -->

	<!-- manifest arena -->
    <link rel="apple-touch-icon" href="icons/icon-96x96.png">
    <link rel="apple-touch-icon" href="icons/icon-128x128.png">
	    <link rel="apple-touch-icon" href="icons/icon-144x144.png">
		    <link rel="apple-touch-icon" href="icons/icon-152x152.png">
			    <link rel="apple-touch-icon" href="icons/icon-192x192.png">
				    <link rel="apple-touch-icon" href="icons/icon-384x384.png">
					    <link rel="apple-touch-icon" href="icons/icon-512x512.png">
						
						<meta name="apple-mobile-web-app-status-bar" content="#57b846">
		
		 	<!-- Chrome, Firefox OS and Opera --> <meta name="theme-color" content="#57b846"/>
	 <!-- Windows Phone --> <meta name=  "msapplication-navbutton-color" content="#57b846"/>
	  <!-- iOS Safari --> <meta name= "apple-mobile-web-app-status-bar-style" content="#57b846"/>
	  

    </head>

    <body>
<!-- Top menu -->
		<nav class="navbar navbar-inverse navbar-no-bg" role="navigation">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#top-navbar-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="index.html"></a>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="top-navbar-1">
					<ul class="nav navbar-nav navbar-right">
						<li>
							<span class="li-text">
							  
							</span> 
							<a href="tos.html"><strong>Terms of services </strong></a> 
							,
							<a href="policy.html"><strong>privacy policy </strong></a>
							,
							<a href="about.html"><strong>About </strong></a>
							,
							<a href="help.php"><strong>Help, </strong></a>
							<span class="li-text">
								 
							</span> 
							<span class="li-social">
								<a href="index.html"><i class="fa fa-home"></i></a> 
							</span>
						</li>
					</ul>
				</div>
			</div>
		</nav>

        <!-- Top content -->
        <div class="top-content">
        	
            <div class="inner-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2 text">
                            <h1><strong>Linksxup Account Recovery</strong> </h1>
                            <div class="description">
                         <p><font color='black'>Link you up to know whats</font><font color='#57b846'>x</font><font color='black'>up !!!</font></p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3 form-box">




<?php
require_once 'database.php';

if(!empty($_POST['username']))
{ $username = strip_tags(htmlspecialchars($_POST['username'])); }


if(!empty($_POST['firstname']))
{ $firstname = strip_tags(htmlspecialchars($_POST['firstname'])); }


if(!empty($_POST['lastname']))
{ $lastname = strip_tags(htmlspecialchars($_POST['lastname'])); }

if(isset($_FILES["passport"]))
{ 


  $passport=addslashes(file_get_contents($_FILES['passport']['tmp_name']));
$filename = $_FILES['passport']['name'];
	
	$file_error = $_FILES['passport']['error'];
	
	$file_size = $_FILES['passport']['size'];
	
	$file_tmplocation = $_FILES['passport']['tmp_name'];
	
	$file_type = $_FILES["passport"]["type"];
		
		$fileext = explode('.',$filename);
	$fileactualext = strtolower(end($fileext));
	
}


if(!empty($_POST['dob']))
{ $dob = strip_tags(htmlspecialchars($_POST['dob'])); }


if(!empty($_POST['id']))
{ $id = strip_tags(htmlspecialchars($_POST['id'])); }


if(!empty($_POST['phone']))
{ $phone = strip_tags(htmlspecialchars($_POST['phone'])); }

if(!empty($_POST['email']))
{ $email = strip_tags(htmlspecialchars($_POST['email'])); }

if(!empty($_POST['gender']))
{ $gender = strip_tags(htmlspecialchars($_POST['gender'])); }

//if(!empty($_POST['cpassword']))
//{$cpassword=$_POST['cpassword'];}



//Do the passwords match?
			//if($password!=$cpassword) 
			//{
			//	echo "<p><font color='red'>The Password supplied did not match please reconfirm password.</font></p>";}



				
$allowedimage= array('jpg','jpeg','png','gif','webp','tiff','psd','raw','bmp','heif','indd','svg','ai','eps');
	
	if(in_array($fileactualext,$allowedimage)){
		
			if($file_error == 0){
			if($file_size > 11485760){echo'<h4>
<font color="red">Image size too large. maximum allowable image size is 10mb</font></h4>';
			}if($file_size < 11485760){
	$label='linksxup';

	
	
		 $uniqueid = uniqid('', true);
	$filenewname = $label.uniqid('', true).'.'.$fileactualext;
	$filedestination= "https://storage.googleapis.com/recovery11/$filenewname";
	
	$filedestinationreal= "recovery11";
	//For condition of same name existence $filedestination= "linkupdates/images".$filenewname;
	
	putenv("GOOGLE_APPLICATION_CREDENTIALS=linksxup-launch-1b3a355e45e5.json");
   
    $storage= new Storage();

	$upload = upload_object($filedestinationreal, $filenewname, $file_tmplocation[$j]);
	
	
	 //$uniqueid = uniqid('', true);
	//$filenewname = $label.uniqid('', true).'.'.$fileactualext;
	//$filedestination= "linkupdates/recoveraccount/$filenewname";
	//For condition of same name existence $filedestination= "linkupdates/images".$filenewname;
	//$upload = move_uploaded_file($file_tmplocation, $filedestination);
	//header("location: linkupdate.php? upload success");
	
	
   //if($upload==true){
	require_once 'database.php';

	$fileactualext1="image/$fileactualext";


$stmt=mysqli_query($link, "INSERT INTO recoveraccount (username, firstname, lastname, url, file_type, dob, phone, email, gender) 	VALUES ('$username', '$firstname', '$lastname', '$filedestination', '$fileactualext1', '$dob', '$phone', '$email', '$gender')");
 
if($stmt)
{echo '<p><font color="blue"><h2>Thank you for submitting account validation request form. Our management system will validate the documents submitted, and get back to you with the new E-mail you included, within the next 48 hours. Thank you for using linksxup... please enjoy the rest of your day.</h2></font></p>
<p><font color="#57b846"><a href="sign up.html"><h4>SIGN UP NOW</h4></a>or<a href="log in.html"><h4>LOG IN</h4></a></font></p>
</p>';}
   //}

if($stmt==false)
{echo'<h2><font color="red">Oops operation not successful! please try again thank you!</font></h2>
<p><font color="#57b846"><a href="sign up.html"><h4>SIGN UP NOW</h4></a>or<a href="log in.html"><h4>LOG IN</h4></a></font></p>
';}
			}
			}
	}
	
?>



<!-- Javascript -->
        <script src="assets/js/jquery-1.11.1.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery.backstretch.min.js"></script>
        <script src="assets/js/retina-1.1.0.min.js"></script>
        <script src="assets/js/scripts.js"></script>
        
        <!--[if lt IE 10]>
            <script src="assets/js/placeholder.js"></script>
        <![endif]-->
		
		<style>
		body{
width: 100% ;
height: 100% ;
background-color : #DDD;
background size: cover;
 
}
		</style>
    </body>

</html>
