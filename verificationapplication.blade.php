
<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- icons -->
    <link rel="shortcut icon" href="icon.png"/>
        <title>Application for account verification</title>

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
							
							<span class="li-social">
								<a href="testt.php"><i class="fa fa-home"></i></a> 
							</span>
						</li>
					</ul>
				</div>
			</div>
		</nav>

		<!-- Top menu -->



                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3 form-box">
                        	
                        	<form role="form" action="verificationapply.php" method="post" class="registration-form" enctype="multipart/form-data">
                        		
                        		<fieldset>
								@csrf
								<?php
								if(isset($_GET['status']) && $_GET['status']== "paid"){
								echo'<p><font color="57b846">Your application for linksxup account verification has been submitted. You will be notified if your account is successfully verified.</font></p>';}
								?>
								
		                        	<div class="form-top">
		                        		<div class="form-top-left">
		                        			<p>An account verified, indicate that the account is the authentic presence of a notable celebrity, public figure, global brand/entity it represents.</p>
		                            		<p>Submitting an application request for verification of your account, requires an account verification application fee of just a thousand niara (NGN 1000)... </p>
											<p>Applying for account verification does not guarantee that your account will be verified.</p>
		                        		</div>
		                        		<div class="form-top-right">
		                        			<i class="fa fa-user"></i>
		                        		</div>
		                            </div>
		                            <div class="form-bottom">
									
									<div class="form-group">
				                    		<br><font color="57b846"> Username</font>: <?php
											$user=$_COOKIE['username'];
											echo"$user"; ?> </br>
											
				                        </div>
									
				                    	<div class="form-group">
				                    		<label class="sr-only" for="form-first-name">Full Name</label>
				                        	<input type="text" name="fullname" placeholder="Full name..." class="form-first-name form-control" id="fullname">
				                        </div>
				                        <div class="form-group">
				                        	<label class="sr-only" for="form-last-name">Enter category</label>
				                        	<input type="text" name="category" placeholder="Enter category/short description of your account.e.g Entertainment, Education, news/media, music etc." class="form-last-name form-control" id="category">
										
				                    </div>
													                       	
										<div class="form-group">
										<font color=#57b846>Recent photograph of your identity</font>
				                        	<label class="sr-only" for="form-last-name">Recent photograph your identity</label>
				                        	<input type="file" name="passport" placeholder="Please upload photograph of your identity</" class="form-last-name form-control" id="passport" required="required" accept="image/*">
											We require a governent-issued/any legal means of your ID. in order to review your application.
				                        </div>
									
									<button type="submit" name="submit">Apply</button>
				                        </div>
										
										</fieldset>
							
		                    </form>
		                    
                        </div>
                    </div>
                </div>
            </div>
            
        </div>

        <!-- Javascript -->
        <script src="assets/js/jquery-1.11.1.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery.backstretch.min.js"></script>
        <script src="assets/js/retina-1.1.0.min.js"></script>
        <script src="assets/js/scripts.js"></script>
         <script src="assets/js/main.js"></script>
		 
		 <script type="text/javascript" src="action.js"></script>
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

button{
background-color : #57b846;
color: #fff;
border-radius:50px;
font-size: 25px;
	
}
		</style>
    </body>

</html>