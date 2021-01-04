
<!DOCTYPE html>
<html>
    <head>
        <title>Edit linkupdate</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
		
	    <link rel="shortcut icon" href="icon.png" />
  

 <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'>

        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-117749332-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-117749332-1');
</script>
  
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
      
  
   <!-- CSS -->
      
      
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
	<body>
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

/////
echo"<script>

$(document).ready(function(){

    // Load more data
    $('.fa-paper-plane-o, .text button, button').click(function(){


        
 
          $('button').css('display','none');
   $('h6').css('display','block');

    });

});

</script>";
/////






	if(isset($_COOKIE['username']))
	{$user=$_COOKIE['username'];}else{
	header("location: log in.html");
	exit();
}
	 
	 if(isset($_COOKIE['untoken'])){
	 $untoken=$_COOKIE['untoken'];}
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
 
if(isset($user)){
	$to=$_GET['un'];
	$uniqueid=$_GET['pid'];
	
}else{
	header("location: log in.html");
	exit();
}
	
	
			
echo'
	<fieldset>
  
 
  <form action="editpost1.php?un=';echo"$to"; echo'&pid='; echo"$uniqueid"; echo'" method="post">';
 ?>
 @csrf
  <?php echo'<ul class="twitter" role="navigation">
   
    <li><a href="';
	
	echo'remarks.php?un=';echo"$to"; echo'&pid='; echo"$uniqueid";
	
	echo'"><i class="fa fa-close"></i></a></li>
	
   <li><button type="submit">Edit linkupdate</button></li>
     
   <li><button><i class="fa fa-paper-plane-o"></i></button></li>
   <li><h6>Updating your linkupdate...</h6></li>
  </ul>';
 
 
	
	
	require'database.php';
	$query = "SELECT * FROM users WHERE username='$user'";
$result = mysqli_query($link, $query);
$row=mysqli_fetch_array($result);
	
	echo'<ul class="twit" role="navigation">
	<li>';
	if($row["profilepic"] != "")
	{
	echo'<a href="'; echo $row["profilepic"]; echo'">
	<span class="login100-form-avatar">';}else{ echo'
	<span class="login100-form-avatar">';}
	
	if($row["profilepic"] != "")
	{
	echo'<img src="'; echo $row["profilepic"]; 


	}else{
		if($row["gender"] == "male")
		{echo'<img src="';echo'gender/male.jpg';}else{
		echo'<img src="';echo'gender/female.jpg';
	
	}
	}
	
	echo'"alt="AVATAR"> 
	</span>
	<a/></li>';


	echo"</ul>";


	//Fetch caption from db
	require_once 'database.php';
$uniqueid=$_GET['pid'];
$bio=mysqli_query($link, "SELECT * FROM linkupdates WHERE uniqueid='$uniqueid'");	
$row=mysqli_fetch_array($bio);
	
	if($row['username'] == $user){
echo"<textarea id='textstatus' name='textstatus'>";

echo$row["caption"];

	echo"</textarea>
</fieldset>
	</form>";
	}else{header("location:testt.php");
	   exit();}
	
		




?>
							   

		                   
				
			
	
	</body>	
	
	
	
	<style>
	h6{
	
		display: none;
		
	}
	
	
	fieldset{
	
	top: 10px;
	 display: flex;
  justify-content: center;
  align-items: center;
   background: #fff;
       border-radius: 5px;
	width: 100%;
	 min-width: 600px;
	 max-width: 600px;
 padding: 10px 20px;
 margin-left: auto;
  margin-right: auto;
  position: relative;
}
	
	
	
	a{
		
		color: #57b846;
	}
	
	body {
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100%;
    background-color: #ddd;
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
p {cursor: pointer;
   margin-left: auto;
  margin-right: auto;}

ul {
  padding: 0;
  list-style: none;
}
	
	
.twitter {
  display: flex;

}

.twitter__bird {
  margin-left: auto;
  margin-right:auto;
} 

/*
 
*/

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
  position: 
}
.twitter li {
  cursor: pointer;
   margin-left: auto;
  margin-right: auto;
font-size: 30px;
}
.twitter li:hover{
  color: #57b846;
}



.twitter__bird {
  color: rgba(85,172,238 ,1);
  font-size: 1.3em;
}

.twitter li  i:not(.fa-twitter):not(.fa-search):not(.fa-user-circle-o) {
  margin-right: 3px;
}
.twitter li > button {
  font-size: 0.8em;
  border: 0;
  background: #57b846;
  color: #fff;
  border-radius: 100px;
  
}
	
	textarea{
	
   
   margin-left: auto;
  margin-right: auto;
  position: relative;
  	

	 display: flex;
   
	max-width:50em;
	min-width: 10em;
   height:30em;
   padding:12px 20px;
   box-sizing:cover;
   border: 2px solid #57b846;
   border-radius:4px;
   background-color:#fff
   resize:none;
   rows:40px;
   cols:10px;
   }
	
	
	@import url(https://fonts.googleapis.com/css?family=Open+Sans);
html{
	font-family: 'Open Sans', sans-serif;
	font-weight: bold;
}
body{
	height: 100%;
	width: 100%;
	margin:0;
	padding:0;
}
.s-button{
	border:1px solid #DCDCDC;
	border-radius: 5px;
	background-color: #FFFFFF;
	text-transform: capitalize;
	height: 32px;
	width: 120px;
	line-height: 32px;
	text-align: center;
	  margin-left: auto;
  margin-right: auto;
	overflow:auto;
}
.dialog-background{
	position: fixed;
	z-index: 1;
	top:0px;
	margin:0px;
	padding:0px;
    height: 100%;
	height: 50em;
	width: 100%;
	background-color: rgba(0, 0, 0, 0.45);
	
}
#popup{
	visibility:visible;
}

.dialog-container{
    position: relative;
	padding: 20px;
	box-shadow: 0px 5px 15px #313131;
	border:1px solid #DCDCDC;
	border-radius: 10px;
	color: #6F6F6F;
	background-color: #ffffff;
	margin: auto;
	margin-top: 0px;
	max-width: 35em;
	min-width: 10em;
	height: 40em;
	text-align: center;
	overflow: auto;
	
}

div .s-button{
	float:right;
}
.s-button:hover{
	cursor: pointer;
	box-shadow: 0px 0px 2px #6EBCFF;
}
.dialog-header,.dialog-context,.dialog-footer{
	padding-top:20px;
	text-transform: capitalize;
}



/***** Media queries *****/

@media (min-width: 992px) and (max-width: 1199px) {}

@media (min-width: 768px) and (max-width: 991px) {}

@media (max-width: 767px) {
	
	fieldset{
	
	
	 display: flex;
  justify-content: center;
  align-items: center;
   background: #fff;
       border-radius: 5px;
	width: auto;
	 min-width: 60px;
	 max-width: 767px;
	 min-height: 60px;
	 max-height: 600px;
 padding: 20px 20px;
 font-size: 40px;
 margin-left: auto;
  margin-right: auto;
}
	
	
	body {
  display: flex;
  justify-content: center;
  align-items: center;
  min-height: 100
  background-color: #57b846;
  
}


nav {
	
		z-index: 9999;
 min-height:0px;
    width: 100%;
    min-width:
    background: #fff;
    
    border-radius: 
    box-shadow: 5px 55px 50px -20px #b6b6b6;
position: fixed;
top: 0px;
	 


}


textarea{

   
   margin-left: auto;
  margin-right: auto;
  position: relative;
	 display: flex;
	max-width:50em;
	min-width: 20em;
   min-height:20em;
   max-height:20em;
   padding:12px 20px;
   box-sizing:cover;
   border: 2px solid #57b846;
   border-radius:4px;
   background-color:#fff
   resize:yes;
   rows:40px;
   cols:10px;
   }



	
.twitter li {
  cursor: pointer;
   margin-left: auto;
  margin-right: auto;
font-size: 20px;
}



.twitter li > button {
  font-size: 0.8em;
  border: 0;
  background: #57b846;
  color: #fff;
  border-radius: 100px;
  display: flex;
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
font-size: 15px;
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


.dialog-container{
		padding: 10px;
		margin: 10px;
		width: 90%;

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















}
	
	</style>
</html>
