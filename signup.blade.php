<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
			<!-- icons -->
    <link rel="shortcut icon" href="icon.png" />
        <title>sign up successful.</title>

		       <script async src="https://www.googletagmanager.com/gtag/js?id=UA-117749332-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-117749332-1');
</script>

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
<style>

.login100-form-avatar {
    display: flex;
    width: 70px;
    height: 70px;
    border-radius: 100%;
    border-line: 50px;
    border-color: #57b846;
    overflow: hidden;
    margin-left: 0px;
    margin-top: 0px;
    margin-bottom: 0px;
}

</style>
    <body>
<!-- Top menu -->
		<nav class="navbar navbar-inverse navbar-no-bg" role="navigation">
			<div class='container>
				<div class='navbar-header'>
					<button type='button' class='navbar-toggle collapsed' data-toggle='collapse' data-target='#top-navbar-1'>
						<span class='sr-only'>Toggle navigation</span>
						<span class='icon-bar'></span>
						<span class='icon-bar'></span>
						<span class='icon-bar'></span>
					</button>
								<a href="index.html"><span class="login100-form-avatar">
	<img src="icon.png" alt="AVATAR">
	</span></a></div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="top-navbar-1">
					<ul class="nav navbar-nav navbar-right">
						<li>
							<span class="li-text">
							  
							</span> 
							<a href='#'><strong>Terms of services </strong></a> 
							,
							<a href='#'><strong>privacy policy </strong></a>
							,
							<a href='#'><strong>About </strong></a>
							,
							<a href='#'><strong>Help, </strong></a>
							<span class='li-text'>
								 
							</span> 
							<span class='li-social'>
								<a href='index.html'><i class='fa fa-home'></i></a> 
							</span>
						</li>
					</ul>
				</div>
			</div>
		</nav>

        <!-- Top content -->
        <div class='top-content'>
        	
            <div class='inner-bg'>
                <div class='container'>
                    <div class='row'>
                        <div class='col-sm-8 col-sm-offset-2 text'>
                            <h1><strong>Sign up response</strong> </h1>
                            <div class='description'>
                         <p><font color='black'>Link you up to know whats</font><font color='#57b846'>x</font><font color='black'>up !!!</font></p>
                            </div>
                        </div>
                    </div>
                    <div class='row'>
                        <div class='col-sm-6 col-sm-offset-3 form-box'>

						<form role="form" action="login.php" method="post" class="registration-form">
                        	
							<fieldset>
							@csrf
<?php
require_once 'database.php';


if(!empty($_POST['form-first-name']))
{ $firstname = strip_tags(htmlspecialchars($_POST['form-first-name'])); }


if(!empty($_POST['form-last-name']))
{ $lastname = strip_tags(htmlspecialchars($_POST['form-last-name'])); }

if(!empty($_POST['gender']))
{ $gender = strip_tags(htmlspecialchars($_POST['gender'])); }


if(!empty($_POST['form-phone']))
{ $ph = strip_tags(htmlspecialchars($_POST['form-phone'])); }


if(!empty($_POST['dob']))
{ $dob = strip_tags(htmlspecialchars($_POST['dob'])); }else{$dob = '';}

if(!empty($_POST['type-password']))
{ $retypepassword = strip_tags(htmlspecialchars($_POST['type-password'])); }


if(!empty($_POST['form-email']))
{ $email = strip_tags(htmlspecialchars($_POST['form-email'])); }




if(!empty($_POST['myname']))
{ $username = strip_tags(htmlspecialchars($_POST['myname'])); 

}




if(!empty($_POST['form-password']))
{ $password = strip_tags(htmlspecialchars($_POST['form-password'])); }

if(!empty($_POST['cc']))
{ $cc = strip_tags(htmlspecialchars($_POST['cc'])); }


$verification="unverified";

$phone=$cc.$ph;




//Do the passwords match?
	
	
//Enter the new user into the database.

if((empty($username) && empty($lastname) && empty($gender) && empty($ph) && empty($retypepassword) && empty($email) && empty($password) && empty($phone) )){
	echo "<p><font color='red'> <h4>Please input all required data fields and try again!!!</h4></font> 
</p>";
}

if((!empty($username) && !empty($lastname) && !empty($gender) && !empty($ph) && !empty($retypepassword) && !empty($email) && !empty($password) && !empty($phone) )){
	
	
	//Confirm if password match.....
	if($password == $retypepassword){ /////////
		
		
		
		if(preg_match('/[^a-z\-0-9]/i',$username)){echo"<h4><font color='red'>Your username can only 
	contain alphanumerics, with an hyphen (-) as the only possible puntuation mark that could be added.<br>You can't leave spaces in between your usernames</font></h4>";}else{
		
		$stmt=mysqli_query($link, "SELECT username FROM users WHERE username='$username'");
$num=mysqli_fetch_row($stmt);
		if($num[0] == "$username"){
			echo"<p><font color='red'>Oops!! sorry username: $username is already taken please input a non existing (unused) Username...Thank you...</font><font color='#57b846'><a href='sign up.html'>Back to completing signing up to know whatsxup ?...</a></font></p>";
		}else{
			 $untoken = uniqid('', true);
			
		$stmt=mysqli_query($link, "INSERT INTO users (firstname, lastname, gender, email, phone, dob, username, password, verification, untoken, coins, bio, pro,
  location, website, profilepic, status, linkups, linkedup, token, mode) VALUES ('$firstname', '$lastname', '$gender', '$email', '$phone', '$dob', '$username', '$password','$verification', '$untoken', '20',
  '','','','','','show','','','','')");
		
		if($stmt){
			
		 $stm=mysqli_query($link, "INSERT INTO notifications (username, status, achieve, format, url, uniqueid, message) VALUES ('$username', 'regular', 'unread', 'welcome','','','')");

	   
			if($stm){
			//redirect to login page
			header("location: log in.php?signedup=signedup");
			exit();
			}else{echo"Process failed";}
			
		}else{
			echo"<font color='red'> Operation not successful. please don't use unnecessary puntuations e.g apostrophe (') etc, while filling in your data in the signup form fields </font>";
			
		}	
		}
		
	}
		
		
		
		
		 
	////////////   
	}else{echo"<h4><font color='red'>Password mismatch... Re-confirm password</font></h4>
	
	<button type='button' class='btn btn-previous'><a href='sign up.html'><font color='#fff'>Previous</font></a></button>
	
	
	";}
	
	
	
	
	

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
