
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
if(!empty($_POST['otp1']))
{$otp1=$_POST['otp1'];

session_start();
if (isset($_SESSION['otp']))
{$otp = $_SESSION['otp'];


if($otp==$otp1)
{echo"<form role='form' action='reset.php' method='GET' class='registration-form'>
                        		<fieldset>
		                        	
									<div class='form-top'>
		                        		<div class='form-top-left'>
		                        			<h3>Reset password</h3>
		                         <p>Create new password...</p>
		                        		</div>
		                        		<div class='form-top-right'>
		                        			<i class='fa fa-lock'></i>
		                        		</div>
		                            </div>
		                            <div class='form-bottom'>
				                        <div class='form-group'>
				                        	<label class='sr-only' for='form-email' required='required'>password</label>
				                        	<input type='password' name='pw' placeholder='Enter a new password' class='form-email form-control' id='password' required='required'>
				                        </div>
				                        
										<div class='form-group'>
				                    		<label class='sr-only' for='form-facebook'>Re-type password</label>
				                        	<input type='password' name='rpw' placeholder='Re-type password' class='form-facebook form-control' id='rpassword' required='required'>
				                        </div>
				                        
										<button type='submit' class='btn'>Reset</button>
				                    </div>
			                    </fieldset>
								</form>";
					
}
}
}
if($otp!=$otp1)
{
	
	echo"
<p><font color='red'<h3>Sorry Otp Mismatch... You entered an incorrect otp</h3></font></p>
<p><font color='#57b846'><a href='resendotp.php'>Resend OTP code (Resend sms).</a></font></p>";}


if(empty($_POST['otp1']))
{echo"<h3><font color='red'>Please enter otp.... Otp not Entered!!!</font></h3>";}


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