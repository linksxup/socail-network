
<!DOCTYPE html>

<html lang="en" >

<head>
   <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
			<!-- icons -->
    <link rel="shortcut icon" href="icon.PNG" />
  <meta charset="UTF-8">
  <title>Share whatsxup</title>
  
  
 <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'>

  
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
      <script async src="https://www.googletagmanager.com/gtag/js?id=UA-117749332-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-117749332-1');
</script>
  
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
  
  
   <!-- CSS -->
      <link rel="stylesheet" type="text/css" href="css/component.css" />
      
	  
	  
	  
        <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
		
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

<?php


 	if(isset($_COOKIE['darkmode'])){
	
	  echo"<script>
	  $(document).ready(function(){

$('body').css('background-color','#333');
$('fieldset').css('background-color','#121212');
$('.postWraper a').css('color','#fff');
$('nav').css('background','#333');
$('main').css('background','#333');
$('.twit li b').css('color','#fff');
$('.postWraper').css('color','#fff');
$('b').css('color','#fff');
$('name').css('background','#333');


	  });
	  
    </script>";
	
}


?>

  <nav>
 <form action='status.php' method='post'>
   <ul class="twitter" role="navigation">
   
    <li><a href='testt.php'><i class="fa fa-arrow-left"></a></i></li>
   <li><button>Linkupdate</button></li>
   <li><button><i class="fa fa-paper-plane-o"></i></button></li>
  </ul>
  </form>
</nav>



  <main>
  
   <ul class="links" role="navigation">


     
	
	<li><button><h4>linkupdate</button></h4></li>
	 <li><button><i class="fa fa-paper-plane-o"></i></button></li>
  </ul>
  
  </main>



  
  
  


<body>

  
  
  
  
                        		<style>
								
								
		select option { 
		margin:40px;
		background: rgba(0, 0, 0, 0.3)
		color:#57b846;
		text-shadow:0 1px 0 rgba(0, 0, 0, 0.4); }						
								
								
								
.login100-form-avatar {
  display: flex;
  width: 70px;
  height: 70px;
  border-radius: 100%;
 border-line:50px;
 border-color:#57b846;
  overflow: hidden;
  margin-left: 0px; 
  margin-top: 0px;
margin-bottom: 0px;
}

.login100-form-avatar img {
  width: 100%;
}
i {cursor: pointer;
   margin-left: auto;
  margin-right: auto;}

</style>



		







<?php
 $user=$_COOKIE['username'];
 
   $untoken=$_COOKIE['untoken'];
	if(isset($untoken) && isset($user)){
		require'database.php';
		
		$query= "SELECT untoken FROM users WHERE username='$user'";	
$next= mysqli_query($link, $query);
$result= mysqli_fetch_array($next);
		
		if($result['untoken'] != $untoken){setcookie("username","$user", time() - 1);
		setcookie("untoken","$untoken", time() - 1);
		header("location: log in.html");
        exit();}
		
	}else{
		setcookie("username","$user", time() - 1);
		setcookie("untoken","$untoken", time() - 1);
		header("location: log in.html");
        exit();
		}
 
if(isset($user))
{ 
					
						$content = strip_tags(htmlspecialchars($_GET['content']));
						
						if(!empty($content)){
													
	

if (strlen($content) <= 1000){
	
	require_once 'database.php';
$fileactualext1="text";
	 $uniqueid = uniqid('', true);
	 
	 
	 $query = "SELECT * FROM users WHERE username= '$user'";

$result = mysqli_query($link, $query);
$row = mysqli_fetch_array($result);

	
$stmt=mysqli_query($link, "INSERT INTO linkupdates (username, file_type, uniqueid, caption, firstname, lastname, profilepic, verification, gender) VALUES ('$user', '$fileactualext1', '$uniqueid', '$content', '$row[firstname]', '$row[lastname]', '$row[profilepic]','$row[verification]', '$row[gender]')");
	
	   

if($stmt==true){
	echo'
	
 <fieldset>

<h4 align= "center"><font color="57b846">linkupdate successful</font></h4>
	<ul class="single">
	<form action="timeline.php">
	<li><button>+<i class="fa fa-pencil"></button></i></li>	
	</form>
	</ul>
<ul class="arrange">
<form action="linkupdateimage.php">           
		<li><button>+<i class="fa fa-photo"></button></i></li>
		</form>
		<form action="camera/index.html">
		<li><button>+<i class="fa fa-camera"></button></i></li>
		</form>
</ul>

	<ul class="arrange">  
<form action="linkupdateaudio.php">	
		<li><button>+<i class="fa fa-music"></button></i></li>
		</form>
		<li><button>+<i class="fa fa-file"></button></i></li>
		
</ul>

<ul class="arrange">
<form action="linkupdatevideo.php">
		<li><button>+<i class="fa fa-file-movie-o"></button></i></li>
		</form>
		<form action="videorecoder/cameracanvas.html">
		<li><button>+<i class="fa fa-video-camera"></button></i></li>
		</form>
</ul>
	
 </fieldset>';

	
}else{
	
	echo"<h4><font color='red'>Oops sorry linkupdate failed !!</font></h4>";
	
}





}
if($content > 1000){
	echo'<h4 align= "center"><font color="red">Oops sorry your number of character  has exceed the maximum value limit which is 1000 characters..</font></h4>';	
}
		
							
}	else{
echo'<fieldset><h4>
<font color="red"> Please writeup whatsxup to linkupdate </font></h4></fieldset>';
}	
						
		 
	
		
						
					}else{
	header("location: log in.html");
}	
	

	
					
					


	
						
					
					
					
					
					
					
					
						



 
												
 



					

	


 

		 
					
					
					?>


    <script  src="js/index.js"></script>


<style>

.twitter {
    display: flex;
}
.twitter {
    border: 1px solid red;
    height: 50px;
    align-items: center;
    padding: 110 110px;
    border: 1px solid rgba(238,238,238 ,1);
    border-radius: 5px;
    color: rgba(117,117,117 ,1);
    box-shadow: 5px 10px 20px -20px rgba(85,172,238 ,1);
    min-width: 200px;
    position: flex;
}

ul {
    padding: 0;
    list-style: none;
}

.h5{
text-align: right;
align-items: center;
margin-left: auto;
margin-right: auto;
position: relative;
	
}

.single li > button{
	color:#fff;
	margin-left: 0px;
	margin-right: auto;
	font-size: 30px;
	}

	.single li > button i{
	color:#fff;
	margin-left: auto;
	margin-right: auto;
	font-size: 30px;
	}

.arrange li > button i{
	color:#fff;
	margin-left: auto;
	margin-right: auto;
	font-size: 30px;
	}
	
	
	
	
	.arrange li > button{
	color:#fff;
	margin-left: auto;
	margin-right: auto;
	font-size: 30px;
	display: flex;
	position:relative;
	}
	
	.arrange li > button:hover{
  color: blue;
}

	.single li > button:hover{
  color: blue;
}


	.arrange li > button{
	margin-top: 10px;
	padding:10px;
	min-width:10em;
	max-width:10em;
	border-radius: 100%;
	background-color:#57b846;
	margin-left: auto;
	margin-right: auto;
	position: relative;
	display: flex;
	}

.single li > button{
	margin-top: 10px;
	padding:10px;
	min-width:10em;
	max-width:10em;
	border-radius: 100%;
	background-color:#57b846;
	margin-left: auto;
	margin-right: auto;
	position: relative;
	display: flex;
	}
  

.arreange li{
	margin-left: auto;
	margin-right: auto;

}

.text button {
  font-size: 1.3em;
  border: 0;
  background: #57b846;
  color: #fff;
  border-radius: 100px;
  
}



textarea{
height: 400px;
width:600px;
 border: 2px solid #57b846;
   border-radius:4px;
}

.text{
text-align: center;
 margin-right: auto;
  margin-left: auto;
  position: relative;
;
}

.box{
text-align: center;

}


body {
  display: flex;
  justify-content: center;
  align-items: center;
  min-height: 100%;
  background-color: #ddd;
  margin-right: auto;
  margin-left: auto;
  
}

 
p {cursor: pointer;
   margin-left: auto;
  margin-right: auto;}
	


nav {
	
	z-index: 9999;
 min-height:0px;
    width: 100%;
    min-width: px;
    background: #fff;
    
    border-radius: 
    box-shadow: 5px 55px 50px -20px #b6b6b6;
position: fixed;
top: 0px;
	 


}


main {
	
	z-index: 9999;
 min-height:0px;
    width: 100%;
    min-width: px;
    background: #fff;
    
    position: fixed;
bottom: 0px;
	 display: none;

}

li {
 
  list-style: none;
}



ul {
  padding: 0;
  list-style: none;
}
fieldset{
	
	top: 78px;

  justify-content: center;
  align-items: center;
   background: #fff;
       border-radius: 5px;
	width: 100%;
	 min-width: 600px;
	 max-width: 600px;
 padding: 20px 20px;
 margin-left: auto;
  margin-right: auto;
  position: relative;
}

.twitter li > button {
  font-size: 0.8em;
  border: 0;
  background: #57b846;
  color: #fff;
  border-radius: 100px;
  display: none;
  
}


.twitter li a{
  color: #57b846;
}




.twit {
  display: flex;
  
 
}

.twit {
  border: 1px solid red;
  height: 50px;
  align-items: center;
  padding: 110 110px;
  border: 1px solid rgba(238,238,238 ,1);
  border-radius: 5px;
  color: rgba(117,117,117 ,1);
  box-shadow: 5px 10px 20px -20px rgba(85,172,238 ,1);
  min-width: 200px;
  position: 
}
.twit li {
  cursor: pointer;
   margin-left: auto;
  margin-right: auto;
font-size: 22px;
}
.twit li:hover{
  color: #57b846;
}





.twit li  i:not(.fa-twitter):not(.fa-search):not(.fa-user-circle-o) {
  margin-right: 3px;
}
.twit li > button {
  font-size: 0.8em;
  border: 0;
  background: #57b846;
  color: #fff;
  border-radius: 100px;
  
}








/***** Media queries *****/

@media (min-width: 992px) and (max-width: 1199px) {}

@media (min-width: 768px) and (max-width: 991px) {}

@media (max-width: 767px) {

.text button {
  font-size: 23px;
  border: 0;
  background: #57b846;
  color: #fff;
  border-radius: 100px;
  
}


textarea{

	 display: flex;
	max-width:20em;
	min-width: 20em;
   min-height:30em;
   max-height:50em;
   border: 2px solid #57b846;
   border-radius:4px;
   resize:yes;
  
   }

	.single{
	display: none;
	}
	
	.single li > button{
	color:#fff;
	margin-left: auto;
	margin-right: auto;
	font-size: 20px;
	width:10px;
	display: none;
	}

	.single li > button i{
	color:#fff;
	margin-left: auto;
	margin-right: auto;
	font-size: 30px;
	visibility: hidden;
	}

.arrange li > button i{
	color:#fff;
	margin-left: auto;
	margin-right: auto;
	font-size: 30px;
	}
	
	
	
	
	.arrange li > button{
	color:#fff;
	margin-left: auto;
	margin-right: auto;
	font-size: 20px;
	display: flex;
	position:relative;
	}
	
	.arrange li > button:hover{
  color: blue;
}

	.single li > button:hover{
  color: blue;
}


	.arrange li > button{
	margin-top: 10px;
	padding:10px;
	min-width: 10em;
	max-width:20em;
	border-radius: 100%;
	background-color:#57b846;
	margin-left: auto;
	margin-right: auto;
	position: relative;
	display: flex;
	
	}

.single li > button{
	margin-top: 10px;
	padding:10px;
	min-width:10em;
	max-width:10em;
	border-radius: 100%;
	background-color:#57b846;
	margin-left: auto;
	margin-right: auto;
	position: relative;
	display: flex;
	}
  

.arreange li{
	margin-left: auto;
	margin-right: auto;

}

	
	
	
	
	
	
	body {
  display: flex;
  justify-content: center;
  align-items: center;
  min-height: 100%;
  background-color: #ddd;
  
}

/***** FOR COOMENT LIKE AND RELINK *****/







main {
	
	z-index: 9999;
 min-height:0px;
    width: 100%;
    min-width: px;
    background: #fff;
    
    position: fixed;
bottom: 0px;
	 
display: flex;

}

	
.twitter li {
  cursor: pointer;
   margin-left: auto;
  margin-right: auto;
font-size: 20px;
}

fieldset{
	
	

  justify-content: center;
  align-items: center;
   background: #fff;
       border-radius: 5px;
	width: auto;
	 min-width: 60px;
	 max-width: 767px;
	 min-height: 60px;
	 max-height: 800px;
 padding: 40px 20px;
 font-size: 40px;
 margin-left: auto;
  margin-right: auto;
}

.twitter li > button {
  font-size: 0.8em;
  border: 0;
  background: #57b846;
  color: #fff;
  border-radius: 100px;
  display: none;
}

.links li > button {
    font-size: 0.8em;
  border: 0;
  background: #57b846;
  color: #fff;
  border-radius: 100%;

}

.links li > button i {
    font-size: 0.8em;
  border: 0;
  background: #57b846;
  color: #fff;
  border-radius: 100%;
  font-size: 30px;
  
}



.links li {
  cursor: pointer;
   margin-left: auto;
  margin-right: auto;
font-size: 20px;
}

.links {
  
  height: 10px;
  align-items: center;
  padding: 110 110px;
  
  border-radius: 5px;
  color: rgba(117,117,117 ,1);
  box-shadow: 5px 10px 20px -20px rgba(85,172,238 ,1);
  min-width: 200px;
  position: 
}



.links {
  display: flex;
  
 
}




}

@media (max-width: 415px) {
	
	h1, h2 { font-size: 32px; }

}


/* Retina-ize images/icons */

@media
only screen and (-webkit-min-device-pixel-ratio: 2),
only screen and (   min--moz-device-pixel-ratio: 2),
only screen and (     -o-min-device-pixel-ratio: 2/1),
only screen and (        min-device-pixel-ratio: 2),
only screen and (                min-resolution: 192dpi),
only screen and (                min-resolution: 2dppx) {
	
	
	
}

</style>

<script src="js/custom-file-input.js"></script>
</body>

</html>