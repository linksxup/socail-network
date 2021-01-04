

<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- icons -->
    <link rel="shortcut icon" href="icon.PNG" />
        <title>Linksxup log in</title>

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

    <body>


<?php
require_once 'database.php';





if(!empty($_POST['username']))
{ $username = strip_tags(htmlspecialchars($_POST['username'])); }

if(!empty($_POST['password']))
{ $password = strip_tags(htmlspecialchars($_POST['password'])); }


$stmt=mysqli_query($link, "SELECT username, password FROM users1 WHERE username='$username' AND password='$password'");
 

if(mysqli_num_rows($stmt))
{
$query= "SELECT untoken FROM users1 WHERE username='$username'";	
$next= mysqli_query($link, $query);
$result= mysqli_fetch_array($next);
if($result){
setcookie("untoken","$result[untoken]",time() + 2592000);	
setcookie("username","$username",time() + 2592000);

header("location: testt.php");
exit();
}	
}
else{echo'




                    
                        	<form role="form" action="login.php" method="post" class="registration-form">
							
	
                        		
                        		
		                            <div class="form-bottom">
				                    	<div class="form-group">
				                    		<label class="sr-only" for="form-first-name">Username</label>
				                        	<input type="text" name="username" placeholder="Username" class="form-first-name form-control" id="username">
				                        </div>
				                        <div class="form-group">
				                        	<label class="sr-only" for="form-last-name">Password</label>
				                        	<input type="password" name="password" placeholder="Password" class="form-last-name form-control" id="form-last-name">
				                        </div>
				                        
										<button type="submit" class="btn">Log In</button>
				                    </div>
			                    </form>';






}



?>


		
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