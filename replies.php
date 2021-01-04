<!DOCTYPE html>

<html lang="en" >

<head>
   <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="shortcut icon" href="icon.png" />
		
  <meta charset="UTF-8">
  <title>replies</title>
  
   <!-- FOR THE FONT CHANGE EFFECT -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">

  
  
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



<style>
  								
.login10-form-avatar {
  display: flex;
  width: 30px;
  height: 30px;
  border-radius: 100%;
 border-line:50px;
 border-color:#57b846;
  overflow: hidden;
  margin-left: 0px; 
  margin-top: 0px;
margin-bottom: 0px;
}

.login10-form-avatar img {
  width: 100%;
}								
	a{
		color:#57b846;
		text-decoration: none;
	}

.twit li a{
 
  text-decoration: none;
  color:#57b846;
}
	
 </style> 


   <nav>

   <ul class="twitter" role="navigation">
   <?php
   $pid=$_GET['pid'];
   
    echo'<li><a href="';
	
	
	echo'remarks.php?';echo'pid='; echo"$pid";
	
	echo'"><i class="fa fa-arrow-left"></i></a></li>
   <li><button>replies</button></li>';
?>
  </ul>
 
</nav>
  
  
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
$('h6').css('color','#fff');
$('p').css('color','#fff');
$('.twit li b').css('color','#fff');
$('b').css('color','#fff');


	  });
	  
    </script>";
	
}
 
 if(isset($_COOKIE['username']))
 {$user=$_COOKIE['username'];}else{header("location: log in.html");
        exit();}
 
   if(isset($_COOKIE['untoken']))
   {$untoken=$_COOKIE['untoken'];}else{header("location: log in.html");
        exit();}

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
	
	$sid=$_GET['sid'];
	$pid=$_GET['pid'];
	
}else{
	header("location: log in.html");
}
  
 echo' <form role="form">

  
  <fieldset>';

 	$sid=$_GET['sid'];
	$pid=$_GET['pid'];
	
	require'database.php';
	$query = "SELECT * FROM remarks WHERE secondaryuniqueid='$sid' ORDER BY time DESC;";
$result = mysqli_query($link, $query);
$row=mysqli_fetch_array($result);
	
	if(mysqli_num_rows($result)>0)
	
	
	{
	echo'<ul class="twit" role="navigation">
	<li>';
	if($row["profilepic"] !== "")
	{
	echo'<a href="'; echo $row["profilepic"]; echo'">
	<span class="login100-form-avatar">';}else{ echo'
	<span class="login100-form-avatar">';}
	
	if($row["profilepic"] !== "")
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
	
	
	
			
		if($row["verification"] == "verified" ){echo'<span class="login10-form-avatar">
	<img src="verified.jpeg" alt="AVATAR"> 
	</span>';}
	
    echo '<li><a href="info.php?un=';echo$row['username']; echo'"><b>'; 


			   if (strlen($row['firstname']) < 9){
							  
							  echo $row['firstname']; 
							  
							  }else{	  echo substr("$row[firstname]","0", "8"); echo'...';}


   echo'&nbsp'; 


		   if (strlen($row['lastname']) < 9){
							  
							  echo $row['lastname']; 
							  
							  }else{	  echo substr("$row[lastname]","0", "8"); echo'...';}



   echo'</b><br>Un@';


     if (strlen($row['username']) < 11){
							  
							  echo $row['username']; 
							  
							  }else{	  echo substr("$row[username]","0", "10"); echo'...';}


   echo'<br/></a></li>';
 
 
 
   echo'<br><h6>';echo'</br></ul>';
   


   echo'<article>';
  				
			

  
	  
$reg_exUrl = "/(http|https|ftp|ftps)\:\/\/[a-zA-Z0-9\-\.]+\.[a-zA-Z]{2,3}(\/\S*)?/"; //
$reg_exUr="/#+([a-zA-Z0-9_]+)/";//for hash tags
$reg_exU="/(#)[a-z A-Z0-9.]+[A-Za-z.]+(#)/i";//for letter boldness
$reg="/@+([a-zA-Z0-9-]+)/";//for username reference

   
   
 if(preg_match($reg, $row['caption'], $url)){ // Username @ tag..

 echo preg_replace($reg, "<a href='/info.php?un=$1'><font color='57b846'>$0</font></a>", nl2br($row['caption']));  echo '</br>';}
 
   /////////////
 elseif(preg_match($reg_exU, $row['caption'], $url)){ // for text boldness
 
 echo preg_replace($reg_exU, "<b>$0</b>", nl2br($row['caption']));  echo '</br>';}
 
  ///////////////
 elseif(preg_match($reg_exUr, $row['caption'], $url) ){ // For Hashtag recognition
 
 echo preg_replace($reg_exUr, "<a href='/hashtags.php?query=$1'><font color='57b846'>$0</font></a>", nl2br($row['caption']));  echo '</br>';
 }
 
/////////////////
  elseif(preg_match($reg_exUrl, $row['caption'], $url)) { // make the urls hyper links

 echo preg_replace($reg_exUrl, "<a href='$0'><font color='57b846'>$0</font></a>", nl2br($row['caption']));  echo '</br>';}
 
 else { // if no urls/foreign symbols in the text just return the text
  echo nl2br($row['caption']); }
 
  echo'</article>';
  
      ///////
	echo'<ul class="twit" role="navigation">
	<li>';
	if($user == $row['username'])
{
	echo'<li><a href="delete.php?uniqueid='; echo$row['secondaryuniqueid']; echo'&status=remark'; echo'">&nbsp <i class="fa fa-trash-o"></i></a></li>';
	
	
	echo'<li><a href="replytextarea.php?un='; echo$row['username']; echo'&sid='; echo$row['secondaryuniqueid']; echo'&pid='; echo$row['primaryuniqueid']; echo'">&nbspReply</a></li>
	
	';
}else{echo'<li><a href="replytextarea.php?un='; echo$row['username']; echo'&sid='; echo$row['secondaryuniqueid']; echo'&pid='; echo$row['primaryuniqueid']; echo'"><h6>&nbspReply</h6></a></li>
	';}
	echo'</li></ul>';
	////////
  
  echo'<p>'; echo$row['time']; echo'</h6> </p>';
 
echo '<p><b><h3> Replies <i class="fa fa-arrow-circle-o-down"></i></h3></b></p>';
 
echo'<hr>';
	
	}if(mysqli_num_rows($result)== 0){echo"<b>couldn't find remark.. Probaly it has been deleted, or it never exist...</b>";}
	
	
$query = "SELECT * FROM replies WHERE uniqueid = '$sid' ORDER BY time DESC;";
$resultt = mysqli_query($link, $query);
//$roww=mysqli_fetch_array($resultt);	
	
	while($roww= mysqli_fetch_array($resultt))
 
 {echo'<ul class="twit" role="navigation">
	<li>';
	if($roww["profilepic"] != "")
	{
	echo'<a href="'; echo $roww["profilepic"]; echo'">
	<span class="login100-form-avatar">';}else{ echo'
	<span class="login100-form-avatar">';}
	
	if($roww["profilepic"] != "")
	{
	echo'<img src="'; echo $roww["profilepic"]; 


	}else{
		if($roww["gender"] == "male")
		{echo'<img src="';echo'gender/male.jpg';}else{
		echo'<img src="';echo'gender/female.jpg';
	
	}
	}
	
	echo'"alt="AVATAR"> 
	</span>
	<a/></li>';
	
	
	
			
		if($roww["verification"] == "verified" ){echo'<span class="login10-form-avatar">
	<img src="verified.jpeg" alt="AVATAR"> 
	</span>';}
	
	
	   echo '<li><a href="info.php?un=';echo$roww['username']; echo'"><b>'; 


			   if (strlen($roww['firstname']) < 9){
							  
							  echo $roww['firstname']; 
							  
							  }else{	  echo substr("$roww[firstname]","0", "8"); echo'...';}


   echo'&nbsp'; 


		   if (strlen($roww['lastname']) < 9){
							  
							  echo $roww['lastname']; 
							  
							  }else{	  echo substr("$roww[lastname]","0", "8"); echo'...';}



   echo'</b><br>Un@';


     if (strlen($roww['username']) < 11){
							  
							  echo $roww['username']; 
							  
							  }else{	  echo substr("$roww[username]","0", "10"); echo'...';}


   echo'<br/></a></li>';
	
	
 echo'<br><br><h6>';echo'</br>';
   
    
if($user == $roww['username'])
{
	echo'<li><a href="delete.php?uniqueid='; echo$roww['uniqueid']; echo'&time='; echo$roww['time']; echo'&status=reply'; echo'">&nbsp <i class="fa fa-trash-o"></i></a></li>
	</ul>';
}else{echo'</ul>';}
   echo'<article>';
  				
				

  
	  
$reg_exUrl = "/(http|https|ftp|ftps)\:\/\/[a-zA-Z0-9\-\.]+\.[a-zA-Z]{2,3}(\/\S*)?/"; //
$reg_exUr="/#+([a-zA-Z0-9_]+)/";//for hash tags
$reg_exU="/(#)[a-z A-Z0-9.]+[A-Za-z.]+(#)/";//for letter boldness
$reg="/@+([a-zA-Z0-9-]+)/";//for username reference

   
   
 if(preg_match($reg, $roww['caption'], $url)){ // Username @ tag..

 echo preg_replace($reg, "<a href='/info.php?un=$1'><font color='57b846'>$0</font></a>", nl2br($roww['caption']));  echo '</br>';}
 
   /////////////
 elseif(preg_match($reg_exU, $roww['caption'], $url)){ // for text boldness

 echo preg_replace($reg_exU, "<b>$0</b>", nl2br($roww['caption']));  echo '</br>';}
 
  ///////////////
 elseif(preg_match($reg_exUr, $roww['caption'], $url) ){ // For Hashtag recognition
 
 echo preg_replace($reg_exUr, "<a href='/hashtags.php?query=$1'><font color='57b846'>$0</font></a>", nl2br($roww['caption']));  echo '</br>';
 }
 
/////////////////
  elseif(preg_match($reg_exUrl, $roww['caption'], $url)) { // make the urls hyper links

 echo preg_replace($reg_exUrl, "<a href='$0'><font color='57b846'>$0</font></a>", nl2br($roww['caption']));  echo '</br>';}
 
 else { // if no urls/foreign symbols in the text just return the text
  echo nl2br($roww['caption']); }
 
  echo'</article>';
  
  
  
  echo'<p><h6>'; echo$roww['time']; echo'</h6> </p>';
 
 
echo'<hr>';
 }if(mysqli_num_rows($resultt)<0){
	 
	 echo"<b>No replies has been made yet</b>";
	 
 }
			                    echo'</fieldset></form>';
			                    
	?>							

<style>
.postWraper {
  color: #000000;
  text-decoration: none;
  
  overflow_wrap: break-word;
  word-wrap: break-word;
  
  -ms-word-break: break-all;
  
  word-break: break-all;
  
  word-break: break-word;
  
  -ms-hyphens: auto;
  -moz-hyphens: auto;
  hyphens: auto;
 
}

article {
  color: #000000;
  text-decoration: none;
  
  overflow_wrap: break-word;
  word-wrap: break-word;
  
  -ms-word-break: break-all;
  
  word-break: break-all;
  
  word-break: break-word;
  
  -ms-hyphens: auto;
  -moz-hyphens: auto;
  hyphens: auto;
 
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
  height: 70px;
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