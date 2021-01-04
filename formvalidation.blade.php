
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

           <script async src="https://www.googletagmanager.com/gtag/js?id=UA-117749332-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-117749332-1');
</script>

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
if (isset($_SESSION['username']))
{$user = $_SESSION['username'];
require_once 'database.php';

if(!empty($_GET['time']))
{ $option = strip_tags(htmlspecialchars($_GET['time'])); }
if($option==3)
{echo'

<form role="form" action="accountverification.php" method="POST" class="registration-form" enctype="multipart/form-data">

<fieldset>';}
		 ?>                       

@csrf
		 
<?php	if($option==3){	 echo'<div class="form-top">
		                        		<div class="form-top-left">
		                        		
		                            		<p<h2><font color=black>Hello please upload the documents/informations needed to proof you are the owner of this account Thank you.</font></h2></p>
		                        		</div>
		                        		<div class="form-top-right">
		                        			<i class="fa fa-user"></i>
		                        		</div>
		                            </div>
		                            <div class="form-bottom">
									
									<div class="form-group">
				                    		<label class="sr-only" for="form-first-name">Username</label>
				                        	<input type="text" name="username" placeholder="Username...." class="form-first-name form-control" id="username" required="required">
				                        </div>
									
				                    	<div class="form-group">
				                    		<label class="sr-only" for="form-first-name">First name</label>
				                        	<input type="text" name="firstname" placeholder="First name..." class="form-first-name form-control" id="firstname" required="required">
				                        </div>
				                        <div class="form-group">
				                        	<label class="sr-only" for="form-last-name">Last name</label>
				                        	<input type="text" name="lastname" placeholder="Last name..." class="form-last-name form-control" id="lastname" required="required">
				                        </div>
										
										

										
										<div class="form-group">
										<p><font color=#57b846>When is your birthday?</font></p>
				                    		<label class="sr-only" for="form-facebook">When is your birthday?</label>
				                        	<input type="date" name="dob" placeholder="When is your birthday" class="form-facebook form-control" id="dob" required="required">
				                        </div>
										
										
										<div class="form-group">
										<p><font color=#57b846>Valid ID card/document(e.g National ID card, voters card, International passport etc with your full names and picture)</font></p>
										
				                        	<label class="sr-only" for="form-last-name">Valid ID card/document(e.g National ID card, voters card, International passport etc with your full names and picture)</label>
				                        	<input type="file" name="passport" placeholder="Valid ID" class="form-last-name form-control" id="passport" required="required" accept="image/*">
				                        </div>
										
																				<div class="form-group">
				                    		<label class="sr-only" for="form-facebook">Phone no..</label>
				                        	<input type="number" name="phone" placeholder="Phone" class="form-facebook form-control" id="Phone" required=required="required">
				                        </div>
										
										
				                        <div class="form-group">
				                        	<label class="sr-only" for="form-email" required="required">E-mail</label>
				                        	<input type="email" name="email" placeholder="Valid e-mail..." class="form-email form-control" id="email" required="required">
				                        </div>
										
										
										<div class="form-group">
				                        	<label class="sr-only" for="form-last-name">Gender</label>
											<br><font color=#57b846>Gender</font></br>
												<select name="gender" size="1"  single="single"> 
											<option value="Male">Male</option> 
											<option value="Female">Female</option>  
												</select>
				                        </div>
				                        
				                        <button type="submit" class="btn">Done</button>
				                    </div>
			                    </fieldset>
								</form>';}

if(empty($option))								
{echo"<font color='red'>Hello you haven't choosen any option.</font>";}	



if($option==2)
{$otp=mt_rand(100000,999999);


if (isset($_SESSION['username']))
{$user = $_SESSION['username'];

$stmt=mysqli_query($link, "SELECT phone FROM users WHERE username='$user'");
$num=mysqli_fetch_row($stmt);


}
 

if($stmt)
{

$_SESSION['otp']=$otp;


	// Authorisation details.
	$username = "victoryyoungi@gmail.com";
	$hash = "564329492fe918f974e4607f31114fce4a2c30d18a3ab7f46f485605e99ed895";

	// Config variables. Consult http://api.txtlocal.com/docs for more info.
	$test = "0";

	// Data for text message. This is the text message data.
	$sender = "Linksxup"; // This is who the message appears to be from.
	$numbers = $num[0]; // A single number or a comma-seperated list of numbers
	$message = "Lx-$otp is your Linksxup verification code. The six digit number is the code. ";
	// 612 chars or less
	// A single number or a comma-seperated list of numbers
	$message = urlencode($message);
	$data = "username=".$username."&hash=".$hash."&message=".$message."&sender=".$sender."&numbers=".$numbers."&test=".$test;
	$ch = curl_init('http://api.txtlocal.com/send/?');
	curl_setopt($ch, CURLOPT_POST, true);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$result = curl_exec($ch); // This is the result from the API
	curl_close($ch);
    //$result
	
	
	echo "
	<form role='form' action='otpauth.php' method='post' class='registration-form'>
                        		
                        		<fieldset>";?>
		                @csrf
									<?php echo"<div class='form-top'>
		                        		<div class='form-top-left'>
		                        			<h3> We've sent you a code</h3>
		                         <p>Enter the code sent to $num[0]</p>
		                        		</div>
		                        		<div class='form-top-right'>
		                        			<i class='fa fa-code'></i>
		                        		</div>
		                            </div>
		                            <div class='form-bottom'>
				                    	<div class='form-group'>
				                    		<label class='sr-only' for='form-first-name'>Enter otp</label>
				                        	<input type='number' name='otp1' placeholder='Enter code' class='form-first-name form-control' id='otp1' required='required'>
				                        </div>
				                       
				                        
										<button type='submit' class='btn'>Proceed</button>
				                    </div>
			                    </fieldset>
								
								<p><font color='#57b846'><a href='recoveraccount.html'>Didn't recieve SMS within 5 minutes ? (Resend sms)</a></font></p>
								</form>";}
else{echo"<font color='red'>Operation not successful.</font>";}

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