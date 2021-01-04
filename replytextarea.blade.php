<!DOCTYPE html>
<html lang="en" >

<head>
   <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		    <link rel="shortcut icon" href="icon.png" />
		
  <meta charset="UTF-8">
  <title>Reply</title>
  
  
 <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'>

      
  
                 <script async src="https://www.googletagmanager.com/gtag/js?id=UA-117749332-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-117749332-1');
</script>
  
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
echo'
	     <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
		 ';
 
 if(isset($_COOKIE['darkmode'])){
	
	  echo"<script>
	  $(document).ready(function(){

$('body').css('background-color','#333');
$('fieldset').css('background-color','#121212');
$('.postWraper a').css('color','#fff');
$('nav').css('background','#333');
$('main').css('background','#333');
$('article').css('color','#fff');
$('h3').css('color','#fff');
$('p').css('color','#fff');
$('.twit li b').css('color','#fff');



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
 
 if(isset($_COOKIE['untoken']))
 { $untoken=$_COOKIE['untoken'];}else{
	header("location: log in.html");
	exit();
}

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
	$sid=$_GET['sid'];
	$pid=$_GET['pid'];
	
}else{
	header("location: log in.html");
	exit();
}
?>
	
<form role="form" action="replytextarea.php?un=<?php

echo"$to"; echo'&sid='; echo"$sid"; echo'&pid='; echo"$pid";


?>" method="GET">

  @csrf
  <fieldset>


	

 
  
  <?php
	
	
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
	
	
	
    echo"<li>Replying to <br><b>Un@";


 if (strlen($to) < 9){
							  
							  echo $to; 
							  
							  }else{	  echo substr("$to","0", "8"); echo'...';}

	echo"<br/></li>
   <li><button type='submit'>";

  echo'<a href="';
	
	echo'remarks.php?un=';echo"$to"; echo'&pid='; echo"$pid";
	
	echo'"></a>';

  echo" <i class='fa fa-paper-plane-o'></i></button></li>
  <li><h6>posting your reply...</h6></li>
  </ul>";
  
  
  
  echo'<ul class="twit" role="navigation">
   
    <a href="';
	
	echo'remarks.php?un=';echo"$to"; echo'&pid='; echo"$pid";
	
	echo'"<li><i class="fa fa-close"></i></li></a>
  </ul>';
  
  
  
 
	
	
	
	echo"<textarea id='textstatus' name='textstatus' required='required'></textarea></fieldset>";
	
echo"<input type='hidden' id='sid' name='sid' value='$sid'>";
   echo"<input type='hidden' id='pid' name='pid' value='$pid'>";
echo"<input type='hidden' id='un' name='un' value='$to'>";

			                    
			                    	
	
	
	
	
	
	
	require'database.php';
					$que="SELECT * FROM users WHERE username='$user'";

		$resu= mysqli_query($link, $que);
		$res= mysqli_fetch_array($resu);
	
	
	
   
if(isset($_GET['textstatus']) && $res['mode'] != "suspended"){
	//echo"<fieldset>textstatus isset</fieldset>";
	$to=$_GET['un'];
	$sid=$_GET['sid'];
	$pid=$_GET['pid'];
$cap=addslashes($_GET['textstatus']);
$url="replies.php?sid=$sid&pid=$pid";




$stmt=mysqli_query($link, "INSERT INTO replies (username, firstname, caption, 
primaryuniqueid, uniqueid, verification, lastname, profilepic, gender) VALUES ('$user', '$row[firstname]', '$cap', '$pid', '$sid', '$row[verification]', '$row[lastname]', '$row[profilepic]', '$row[gender]')");	
	   
	   
	   $query = "SELECT * FROM notifications  WHERE uniqueid='$sid' AND format='reply'";
		$result = mysqli_query($link, $query); 
	   if(mysqli_num_rows($result) <= 0){
		   
		 $stm=mysqli_query($link, "INSERT INTO notifications (username, status, url, achieve, format, uniqueid,message) VALUES ('$to', 'regular', '$url', 'unread', 'reply', '$sid', '')");

	   }
	   
	   /////////////////
	   
	   if($user != $_GET['un']){
		   
		   //////////
		 	//Sending a push notification to the user that owns the linkupdate if such user has fcm token in the db
				require'database.php';
				$request= "SELECT * FROM users WHERE username='$_GET[un]'";	
$next= mysqli_query($link, $request);
$gotten= mysqli_fetch_array($next);	
				
				/////////////
				if(!empty($gotten['token'])){
					
						if($gotten["profilepic"] != "")
	
	{  $image= $gotten["profilepic"]; }else{if($gotten["gender"] == "male")
		{$image='/gender/male.jpg'; }else{$image='/gender/female.jpg';}}
					
					
					
					
					
					
					
					define('SERVER_API_KEY', 'AAAAvZ4y-FE:APA91bFHqOSBx3mjYnakQEnqoTnjSASoqJuqYw-wWryFcyD9gOQCd1VgkeRUnsG4FLJMDP1s0K6O8nexaz8eU9ykErPjXDSFe7bHowF9_Hj69fugJr_gpCeDQ2lsZBmyhVCLu4m760QZ');

//$tokens = mysqli_fetch_array($result);

		$registrationIds[] = $gotten['token'];

//print_r($registrationIds);
	
	$header = [
		'Authorization: Key=' . SERVER_API_KEY,
		'Content-Type: Application/json'
	];

	$msg = [
		'title' => 'Linksxup',
		'body' => "$user replied to your remark",
		'icon' => '/icon.png',
		'image' => "$image",
		'click_action'=> "/replies.php?sid=$sid&pid=$pid",
	];

	$payload = [
		'registration_ids' 	=> $registrationIds,
		'data'				=> $msg
	];

	$curl = curl_init();

	curl_setopt_array($curl, array(
	  CURLOPT_URL => "https://fcm.googleapis.com/fcm/send",
	  CURLOPT_RETURNTRANSFER => true,
	  CURLOPT_CUSTOMREQUEST => "POST",
	  CURLOPT_POSTFIELDS => json_encode( $payload ),
	  CURLOPT_HTTPHEADER => $header
	));

	$response = curl_exec($curl);
	$err = curl_error($curl);

	curl_close($curl);

			
				}
		   
	   }
	   
	   /////////////////
	   
   if($stmt==true){
	   
	   
	   $query1 = "SELECT * FROM remarks  WHERE secondaryuniqueid='$sid'";
		$result1 = mysqli_query($link, $query1);
		$resultt1=mysqli_fetch_array($result1);
		if($resultt1){
			if(empty($resultt1['secondaryuniqueid'])){
				
				$likes[]="$user";
				$likess=serialize($likes);
				
				$querry = "UPDATE remarks SET replies='$likess' WHERE secondaryuniqueid='$sid'";
			$res = mysqli_query($link, $querry);
			if($res){
	   
	   
	   
	   
	   
	   header("location:replies.php?sid=$sid&pid=$pid");
	   exit();
   }
	
			}else{
				$query1 = "SELECT * FROM remarks  WHERE secondaryuniqueid='$sid'";
		$result1 = mysqli_query($link, $query1);
		$resultt1=mysqli_fetch_array($result1);
		
		$u=unserialize($resultt1['replies']);
		
		$u[]="$user";
				$likess=serialize($u);
		
		$querry = "UPDATE remarks SET replies='$likess' WHERE secondaryuniqueid='$sid'";
			$res = mysqli_query($link, $querry);
			
			if($res){
				 header("location:replies.php?sid=$sid&pid=$pid");
				exit();
				
			}
				
				
				
				
				
			}
	   
	   
	   
	   

	   
   }
	
	
	
	
	
	
	
	
	
	}

  
 

}
		 
  ?>
		
</form>

<style>

h6{display: none;}
a{
	color: #57b846;
}
textarea{
margin: 0px -1px 0px 0px; 
width: 594px; 
height: 91px;

}


.liinkk li > button {
  font-size: 0.7em;
  border: 0;
  background: #57b846;
  color: #fff;
  border-radius: 100px;
  
}




.liinkk {
  display: flex;
  
 
}



.liinkk {
  height: 70px;
  align-items: center;
  padding: 110 110px;
  border-radius: 5px;
  color: rgba(117,117,117 ,1);
 
  min-width: 200px;
  position: 
}
.liinkk li {
  cursor: pointer;
   margin-left: auto;
  margin-right: auto;
font-size: 20px;
}

.liinkk li:hover {
 
 color: 57b846;
}

.liinkk li b {
 color: black;
}



.liinkk article{
 color: black;
}

.liinkk a{
 color: #57b846;
 text-decoration: none;
}






.login-form-avatar {
  display: flex;
    min-width: 600px;
  max-width: 600px;
  max-height: 500px;
  border-radius: 2px;
  s-resize:500px;
  overflow: hidden;
  margin-left: 0px; 
  margin-top: 0px;
margin-bottom: 0px;
}

.login-form-avatar img {
  width: 100%;
}
p {cursor: pointer;
   margin-left: auto;
  margin-right: auto;}



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
p {cursor: pointer;
   margin-left: auto;
  margin-right: auto;}








body {
  display: flex;
  justify-content: center;
  align-items: center;
  min-height: 100%;
  background-color: #ddd;
  
}

 .loginvideo-form-avatar {
  display: flex;
    min-width: 600px;
  max-width: 600px;
  max-height: 500px;
  border-radius: 70px;
  s-resize:500px;
  overflow: hidden;
  margin-left: 0px; 
  margin-top: 0px;
margin-bottom: 0px;
}

.loginvideo-form-avatar video {
  width: 100%;
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


ul {
  padding: 0;
  list-style: none;
}
fieldset{
	
	top: 80px;

  justify-content: center;
  align-items: center;
   background: #fff;
       border-radius: 5px;
	width: 100%;
	 min-width: 600px;
	 max-width: 600px;
	 

	 
 padding: 40px 20px;
 margin-left: auto;
  margin-right: auto;
  position: relative;
}

/* ============================
    Twitter
   ============================
*/

.twitter {
  display: flex;
  
 
}

.twitter__bird {
  margin-left: auto;
  margin-right: auto/*this will push aside the other flex-items and the bird takes the remaining space!*/
} 

/*
  UI cleanups for the twitter navigation. This just makes things look good on the eye ðŸ˜Ž
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
font-size: 25px;
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
}
.twit li {
  cursor: pointer;
   margin-left: auto;
  margin-right: auto;
font-size: 22px;
}


.twit li i {
  cursor: pointer;
   margin-left: auto;
  margin-right: auto;
font-size: 22px;
}





.twit li b {
 color: black;
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
	
	
	
	
	textarea{

   top: auto;
   margin-left: auto;
  margin-right: auto;
  position: relative;
	 display: flex;
	max-width:210px;
	min-width: 90px;
   min-height:15em;
   max-height:80em;
   padding:12px 20px;
   box-sizing:cover;
   border: 2px solid #57b846;
   border-radius:4px;
   background-color:#fff
   resize:yes;
   rows:40px;
   cols:10px;
   }

	
.liinkk li > button {
  font-size: 0.7em;
  border: 0;
  background: #57b846;
  color: #fff;
  border-radius: 100px;
  
}




.liinkk {
  display: flex;
  
 
}



.liinkk {
  height: 70px;
  align-items: center;
  padding: 110 110px;
  border-radius: 5px;
  color: rgba(117,117,117 ,1);
 
  min-width: 200px;
  position: 
}
.liinkk li {
  cursor: pointer;
   margin-left: auto;
  margin-right: auto;
font-size: 12px;
}

.liinkk li:hover {
 
 color: 57b846;
}

.liinkk li b {
 color: black;
}



.liinkk article{
 color: black;
}

.liinkk a{
 color: #57b846;
 text-decoration: none;
}

	
	
	
	
	
	
	
	
        .loginvideo-form-avatar {
  display: flex;
    min-width: 200px;
  max-width: 600px;
  max-height: 300px;
  border-radius: 70px;
  s-resize:500px;
  overflow: hidden;
  margin-left: 0px; 
  margin-top: 0px;
margin-bottom: 0px;
}

.loginvideo-form-avatar video {
  width: 100%;
}
p {cursor: pointer;
   margin-left: auto;
  margin-right: auto;}
		
	
	
	
	
	  .login-form-avatar {
  display: flex;
    min-width: 200px;
  max-width: 600px;
  max-height: 400px;
  border-radius: 2px;
  s-resize:500px;
  overflow: hidden;
  margin-left: 0px; 
  margin-top: 0px;
margin-bottom: 0px;
}

.login-form-avatar img {
  width: 100%;
}
p {cursor: pointer;
   margin-left: auto;
  margin-right: auto;}
	
	
	
	
	
	
	
	body {
  display: flex;
  justify-content: center;
  align-items: center;
  min-height: 100%;
  background-color: #ddd;
  
}

/***** FOR COOMENT LIKE AND RELINK *****/


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
	 max-width: auto;
 padding: 40px 20px;

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


</body>

</html>