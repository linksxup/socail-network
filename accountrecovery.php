


<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
			<!-- icons -->
    <link rel="shortcut icon" href="icon.PNG" />
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
session_start();
$_SESSION['username']=$_POST['username'];
require_once 'database.php';
if(!empty($_POST['username']))
{$username=strip_tags(htmlspecialchars($_POST['username']));

$stmt=mysqli_query($link, "SELECT phone FROM users WHERE username='$username'");
$test=mysqli_fetch_row($stmt);
 if($test)
 { 
echo"

<form action='formvalidation.php' method='GET'>
<p><h3>Recover password by sending an O T P(One Time Password) to this phone number</h3></p>
 <p><input type='radio' name='time' value='2' checked='checked'>
<font color='#57b846'>$test[0]</font></input></p> or <p><input type='radio' name='time' value='3'><font color='#57b846'> No longer have access to this phone number ?</font></input></p>
<button type='submit' class='btn'>Proceed</button>
</form>
";
};
 if($test==false)
{echo"<p><font color='red'><h3>Username does not exist. could not find the username you entered.</h3></font></p>
<p><font color='#57b846'><a href='sign up.html'><h4>SIGN UP NOW</h4></a>or<a href='log in.html'><h4>LOG IN</h4></a></font></p>";}}
if(empty($_POST['username']))
{
	echo"<p><font color='red'><h3>Please enter username.....Username not entered!!!</h3></font></p>
<p><font color='#57b846'><a href='sign up.html'><h4>SIGN UP NOW</h4></a>or<a href='log in.html'><h4>LOG IN</h4></a></font></p>";
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