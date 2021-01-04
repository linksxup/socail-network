<!DOCTYPE html>

<html>
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		    <link rel="shortcut icon" href="icon.png"/>
	
	
	 <!-- FOR THE FONT CHANGE EFFECT -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>



 <script src="js/jquery-1.12.0.min.js" type="text/javascript"></script>


<script src="js/jquery-3.3.1.js" type="text/javascript"></script>
	  
	     <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>

 <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'>

  
  
  
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
		
		
		
			<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-117749332-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-117749332-1');
</script>
		
    </head>
	<body>
	
	  <nav id="nav">
 
   <ul class="twitter" role="navigation">
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
$('h6').css('color','#fff');
$('b').css('color','#fff');

	  });
	  
    </script>";
	
}
   
   
    $user=$_COOKIE['username'];
   if(isset($user)){
	    $uname=$_GET['pid'];
  echo"<li><a href='notifs.php?un="; echo"$uname"; echo"'<i class='fa fa-arrow-left'></i></a></li>";
   echo'<li>';
  
	  
	   if(isset($uname)){
   echo'<form action="notifs.php?un='; echo"$uname"; echo'"method="get">';
 
   
   echo"<button>";
   
   	require'database.php';
	$query = "SELECT * FROM linkupdates WHERE uniqueid= '$uname'";
$result = mysqli_query($link, $query);
$row = mysqli_fetch_array($result);


	   $u=$row['awards'];
	 echo$u; echo"&nbsp Award(s)";
   echo"</button>
   </form>";
   
   
   
   
   }else{
	   
	   header('location: testt.php'); 
   }
   }else{
	   
	   header('location: log in.html');
	   
   }

  ?></li>
  
  </ul>

</nav>

<style type="text/css">
nav {
    z-index: 9999;
    min-height: 0px;
    width: 100%;
    min-width: px;
    background: #fff;
    border-radius: box-shadow: 5px 55px 50px -20px #b6b6b6;
    position: fixed;
    top: 0px;
}
body {
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100%;
    background-color: #ddd;
}
ul {
    padding: 0;
    list-style: none;
}
.liinkk {
    height: 70px;
    align-items: center;
    padding: 110 110px;
    border-radius: 5px;
    color: #fff;
    cursor: pointer;
    min-width: 200px;
  box-shadow: 5px 10px 20px -20px rgba(85,172,238 );
}

.liinkk {
    display: flex;
    background-color: #ffffff;
}


.liinkk hover{
    background-color: #dddddd;
}

.login200-form-avatar img {
    width: 100%;
}
.login200-form-avatar img {
    display: flex;
    height: auto;
    border-radius: 100%;
    border-line: 50px;
    border-color: #57b846;
    overflow: hidden;
    margin-left: 0px;
    margin-top: 0px;
    margin-bottom: 0px;
    align-items: center;
}

			.loader {
		    position: fixed;
		    z-index: 99;
		    top: 0;
		    left: 0;
		    width: 100%;
		    height: 100%;
		    background: white;
		    display: flex;
		    justify-content: center;
		    align-items: center;
		}

		.loader > img {
		    width: 50px;
		}

		.loader.hidden {
		    animation: fadeOut 1s;
		    animation-fill-mode: forwards;
		}

		@keyframes fadeOut {
		    100% {
		        opacity: 0;
		        visibility: hidden;
		    }
		}

		.thumb {
		    height: 500px;
		    border: 3px solid blue;
		    margin: 10px;
		}
		
		
		
		.twit li a {
    text-decoration: none;
    color: #57b846;
}

.login10-form-avatar img {
    width: 100%;
}

.login10-form-avatar {
    display: flex;
    width: 30px;
    height: 30px;
    border-radius: 100%;
    border-line: 50px;
    border-color: #57b846;
    overflow: hidden;
    margin-left: 0px;
    margin-top: 0px;
    margin-bottom: 0px;
}



.twit {
    border: 1px solid red;
    height: 50px;
    align-items: center;
    padding: 110 110px;
    border: 1px solid rgba(238,238,238 ,1);
    border-radius: 5px;
    color: rgba(117,117,117 ,1);
    /* box-shadow: 5px 10px 20px -20px rgba(85,172,238 ,1); */
    min-width: 200px;
    position: ;
}
		</style>

		
			
	

<form>
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
 
	
	if(isset($user)){
		
	////////////	
	if(!empty($_GET['pid'])){
	$pid= $_GET['pid'];}
	
	$allowed= array('video/avi','video/flv','video/wmv','video/mov','video/mp4','video/webm','video/mkv','video/vob','video/ogv','video/ogg','video/drc','video/gifv','video/mng','video/mpeg','video/svi','video/3gp','video/3g2','video/mxf','video/roq','video/nsv','video/amv','video/asf','audio/3gp','audio/aa','audio/aac','audio/aax','audio/act','audio/aiff','audio/alac','audio/amr','audio/ape','audio/au','audio/awb','audio/dct','audio/dss','audio/dvf','audio/flac','audio/gsm','audio/iklax','audio/ivs','audio/m4a','audio/m4b','audio/m4p','audio/mmf','audio/mp3','audio/mpc','audio/msv','audio/nmf','audio/nsf','audio/ogg','audio/oga','audio/mog','audio/opus','audio/ra','audio/rm','audio/raw','audio/sln','audio/tta','audio/voc','audio/vox','audio/wav','audio/wma','audio/wv','audio/webm','audio/8svx', '3gpp','image/jpg','image/jpeg','image/png','image/gif','image/webp','image/tiff','image/psd','image/raw','image/bmp','image/heif','image/indd','image/svg','image/ai','image/eps');
				
				$allowedimage= array('image/jpg','image/jpeg','image/png','image/gif','image/webp','image/tiff','image/psd','image/raw','image/bmp','image/heif','image/indd','image/svg','image/ai','image/eps');
				
				$allowedvideo= array('video/avi','video/flv','video/wmv','video/mov','video/mp4','video/webm','video/mkv','video/vob','video/ogv','video/ogg','video/drc','video/gifv','video/mng','video/mpeg','video/svi','video/3gp','video/3g2','video/mxf','video/roq','video/nsv','video/amv','video/asf');
				
				$allowedaudio= array('audio/3gp','audio/aa','audio/aac','audio/aax','audio/act','audio/aiff','audio/alac','audio/amr','audio/ape','audio/au','audio/awb','audio/dct','audio/dss','audio/dvf','audio/flac','audio/gsm','audio/iklax','audio/ivs','audio/m4a','audio/m4b','audio/m4p','audio/mmf','audio/mp3','audio/mpc','audio/msv','audio/nmf','audio/nsf','audio/ogg','audio/oga','audio/mog','audio/opus','audio/ra','audio/rm','audio/raw','audio/sln','audio/tta','audio/voc','audio/vox','audio/wav','audio/wma','audio/wv','audio/webm','audio/8svx', 'audio/3gpp');
				
				$alloweddocument= array('0','1st','600','602','abw','acl','afp','ami','ans','asc','aww','ccf','csv','cwk','dbk','dita','doc','docm','docx','dot','dotx','dwd','egt','epub','ezw','fdx','ftm','ftx','gdoc','html','hwp','hwpml','hwpml','log','lwp','mbp','md','me','mcw','mobi','nb','nbp','neis','odm','odoc','odt','osheet','ott','omm','pages','pap','pdax','pdf','quox','radix','rtf','rpt','sdw','se','stw','sxw','tex','info','troff','txt','uof','uoml','via','wpd','wps','wpt','wrd','wrf','wri','xhtml','xml','xps', 'ppt');
			
	require'database.php';
		
		$query = "SELECT * FROM linkupdates WHERE uniqueid='$pid'";

$result = mysqli_query($link, $query);
		$row = mysqli_fetch_array($result);
		
		
		
		
		
		
		
		echo' <fieldset>';

	 
	 
	 //<h5>You relinkupdated 2019-01-14 07:17:06</h5>
	 //<p><article>Then any caption written by me, if available appears here...(Maximum characters of 50 ).</article></p>
	 
 
  
 
 
 
 
 
 
 
  
	echo'<ul class="twit" role="navigation">';
	echo'<li>';
	echo'<span class="login100-form-avatar">';
	
	if($row["profilepic"] != "")
	
	{ echo'<a href="'; echo $row["profilepic"]; echo'">';
		echo'<img src="'; echo $row["profilepic"]; echo'" alt="AVATAR">';
	echo'</span></li>';}else{if($row["gender"] == "male")
		{echo'<img src="';echo'gender/male.jpg'; echo'" alt="AVATAR">';
	echo'</span></li>';}else{
		echo'<img src="';echo'gender/female.jpg'; echo'" alt="AVATAR">';
	echo'</span></li>';}}
		
		
		
		if($row["verification"] == "verified" ){echo'<span class="login10-form-avatar">
	<img src="verified.jpeg" alt="AVATAR"> 
	</span>';}
	
   echo '<li><a href="info.php?un=';echo$row['username']; echo'"><b>';if (strlen($row['firstname']) < 9){
							  
							  echo $row['firstname']; 
							  
							  }else{	  echo substr("$row[firstname]","0", "8"); echo'...';}


   echo'&nbsp'; 


		   if (strlen($row['lastname']) < 9){
							  
							  echo $row['lastname']; 
							  
							  }else{	  echo substr("$row[lastname]","0", "8"); echo'...';}



   echo'</b><br>Un@';


     if (strlen($row['username']) < 11){
							  
							  echo $row['username']; 
							  
							  }else{	  echo substr("$row[username]","0", "10"); echo'...';} echo'<br/></a></li>
   <br><br>'; echo'</br> <li>';
   
   
   if(in_array($row["file_type"],$allowed))
{echo'<li><a href="'; echo $row["url"]; echo'"';  echo'download><i class="fa fa-download"></i></a></li><br>';}
   
   
		echo'<li> <i class="fa fa-caret-down"></i><ul id="menu">';
    
    echo'<li>';
       echo' <ul>';
        echo ' <b> ';

		if($row["username"] == "$user"){echo' <li><a href="'; echo'delete.php?uniqueid='; echo$row["uniqueid"]; echo'&status=linkupdate"><i class="fa fa-trash-o"></i></a></li>';}
		


if($row["username"] != "$user"){echo'<li><a href="report.php?un='; echo$row["username"];echo'&uniqueid='; echo$row["uniqueid"]; echo'">Report</a></li>';}


		echo'</b>';
        echo'</ul>';
    echo'</li>';
echo'</ul></li>';

  echo'</ul></li>';
  
  echo'<div class="postWraper">	';			
			echo'<a href="remarks.php?un='; echo $row['username']; echo'&pid='; echo $row['uniqueid']; echo'" class="postTitle">';
  
   if(!empty($row['caption'])){
	  //////////////

 
	  if (strlen($row['caption'])<450){
  
	  
$reg_exUrl = "/(http|https|ftp|ftps)\:\/\/[a-zA-Z0-9\-\.]+\.[a-zA-Z]{2,3}(\/\S*)?/"; //
$reg_exUr="/#+([a-zA-Z0-9_]+)/";//for hash tags
$reg_exU="/(#)[a-z A-Z0-9.]+[A-Za-z.]+(#)/i";//for letter boldness
$reg="/@+([a-zA-Z0-9-]+)/";//for username reference

   
   
 if(preg_match($reg, $row['caption'], $url)){ // Username @ tag..

 echo preg_replace($reg, "<a href='/info.php?un=$1'><font color='57b846'>$0</font></a>", $row['caption']);  echo '</br>';}
 
   /////////////
 elseif(preg_match($reg_exU, $row['caption'], $url)){ // for text boldness

 echo preg_replace($reg_exU, "<b>$0</b>", $row['caption']);  echo '</br>';}
 
  ///////////////
 elseif(preg_match($reg_exUr, $row['caption'], $url) ){ // For Hashtag recognition
 
 echo preg_replace($reg_exUr, "<a href='/hashtags.php?query=$1'><font color='57b846'>$0</font></a>", $row['caption']);  echo '</br>';
 }
 
/////////////////
  elseif(preg_match($reg_exUrl, $row['caption'], $url)) { // make the urls hyper links

 echo preg_replace($reg_exUrl, "<a href='$0'><font color='57b846'>$0</font></a>", $row['caption']);  echo '</br>';}
 
 else { // if no urls/foreign symbols in the text just return the text
  echo $row['caption']; }
  
  
  
  
  
  
 }else{

	
	  
$reg_exUrl = "/(http|https|ftp|ftps)\:\/\/[a-zA-Z0-9\-\.]+\.[a-zA-Z]{2,3}(\/\S*)?/"; //
$reg_exUr="/#+([a-zA-Z0-9_]+)/";//for hash tags
$reg_exU="/(#)[a-z A-Z0-9.]+[A-Za-z.]+(#)/i";//for letter boldness
$reg="/@+([a-zA-Z0-9-]+)/";//for username reference


 $half= substr("$row[caption]","0", "450");



  if(preg_match($reg, $half, $url)){ // Username @ tag..

 echo preg_replace($reg, "<a href='/info.php?un=$1'><font color='57b846'>$0</font></a>", $half);  echo '</br>';
 
  echo"<font color='54b846'>&nbspsee more....</font> <br>";
 }
 
   /////////////
 elseif(preg_match($reg_exU, $half, $url)){ // for text boldness

 echo preg_replace($reg_exU, "<b>$0</b>", $half); echo '</br>';
 
  echo"<font color='54b846'>&nbspsee more....</font> <br>";
 }
 
  ///////////////
 elseif(preg_match($reg_exUr, $half, $url) ){ // For Hashtag recognition
 
 echo preg_replace($reg_exUr, "<a href='/hashtags.php?query=$1'><font color='57b846'>$0</font></a>", $half);  echo '</br>';
 
 
  echo"<font color='54b846'>&nbspsee more....</font> <br>";
 }
 
/////////////////
  elseif(preg_match($reg_exUrl, $half, $url)) { // make the urls hyper links

 echo preg_replace($reg_exUrl, "<a href='$0'><font color='57b846'>$0</font></a>", $half);  echo '</br>';
 
  echo"<font color='54b846'>&nbspsee more....</font> <br>";
 }






 else { // if no urls in the text just return the text
  echo substr("$row[caption]","0", "450"); echo"<font color='54b846'>&nbspsee more....</font> <br>"; }
	  
	  
	  
  }
  
  
  ////////////
  }
  
   if(!empty($row['file_type'] || $row['url'])){
	   if(in_array($row['file_type'],$allowedvideo)){
		   
		   echo'<span class="loginvideo-form-avatar">';
	echo'<video src="'; echo $row['url']; echo'" alt="AVATAR" controls controlslist="nodownload" type="'; echo $row['file_type']; echo'"/>';
	echo'</span>';
		   
	   }
	   
	   if(in_array($row['file_type'],$allowedimage)){
		   
		   echo'<span class="login-form-avatar">';
	echo'<img src="';echo $row['url']; echo'" alt="AVATAR" controls="control">';
	echo'</span>';
		   
	   }
	   
	   
	     if(in_array($row['file_type'],$allowedaudio)){
		   
		   echo'<span class="loginvideo-form-avatar">';
	echo'<audio src="'; echo $row['url']; echo'" alt="AVATAR" controls controlslist="nodownload" type="'; echo $row['file_type']; echo'"align items="center";/>';
	echo'</span>';
		   
	   }
	   
	   
	   	     if(in_array($row['file_type'],$alloweddocument)){
		   
		   echo'<span class="login200-form-avatar">';
		   
		   echo'<img src="';echo'document.png'; echo'" alt="AVATAR">';
		   
	echo'<a href="'; echo $row["url"]; echo'"';  echo'download>'; echo'<font color="57b846"><h3 align= "center">'; echo"save&nbsp"; echo$row['file_type']; echo'&nbspdocument'; echo'</h3></font>'; echo'</a><br>';
	echo'</span>';
		   
	   }
	   
	  // $username="u";
	   
 //if(preg_match('/[^a-z\-0-9]/i',$username)){echo"it match";}else{echo"No match";}
	  
	   
	   
	   if($row['url']=='multiple'){
		   
		  $e=unserialize($row['file_type']);	
		//print_r($e[0]);
		if(count($e)==4){
			
			   
		   echo'<span class="login-form-avatar">';
	echo'<img src="'; print_r($e[0]); echo'" alt="AVATAR" controls="control">';
	echo'</span>';
			
			

				echo'<button><a href="allphotos.php?un=';echo$row['username']; echo'&punid='; echo$row['uniqueid']; echo'">+1 more photos</a></button>';
				 
		}	if(count($e)==6){
			
			   
		   echo'<span class="login-form-avatar">';
	echo'<img src="'; print_r($e[0]); echo'" alt="AVATAR" controls="control">';
	echo'</span>';
			
			

				echo'<button><a href="allphotos.php?un=';echo$row['username']; echo'&punid='; echo$row['uniqueid']; echo'">+2 more photos</a></button>';
				 
		}	if(count($e)==8){
			
			   
		   echo'<span class="login-form-avatar">';
	echo'<img src="'; print_r($e[0]); echo'" alt="AVATAR" controls="control">';
	echo'</span>';
			
			

				echo'<button><a href="allphotos.php?un=';echo$row['username']; echo'&punid='; echo$row['uniqueid']; echo'">+3 more photos</a></button>';
				 
		}	if(count($e)==10){
			
			   
		   echo'<span class="login-form-avatar">';
	echo'<img src="'; print_r($e[0]); echo'" alt="AVATAR" controls="control">';
	echo'</span>';
			
			

				echo'<button><a href="allphotos.php?un=';echo$row['username']; echo'&punid='; echo$row['uniqueid']; echo'">+4 more photos</a></button>';
				 
		}	if(count($e)==12){
			
			   
		   echo'<span class="login-form-avatar">';
	echo'<img src="'; print_r($e[0]); echo'" alt="AVATAR" controls="control">';
	echo'</span>';
			
			

				echo'<button><a href="allphotos.php?un=';echo$row['username']; echo'&punid='; echo$row['uniqueid']; echo'">+5 more photos</a></button>';
				 
		}
		   
	   }
   }
		
	echo'</div>				
			</a>';
			
			
			
			
				$fileext = explode('.',$row['uniqueid']);
	$ui = strtolower(end($fileext));
			
		if($ui)	{
			echo'<div id="cont_'; print_r($ui); echo'">';
			echo'<ul class="twit" role="navigation">';
			if(empty($row['remarks'])){
				
				echo'<li><font color=""><i class="fa fa-comment" id="remark_un=';echo$row['username']; echo'&pid='; echo$row['uniqueid']; echo'"></i></font></li>';
			}else{
				$r=unserialize($row['remarks']);
				if(in_array($user,$r)){
					
					echo'<li><font color="57b846"><i class="fa fa-comment" id="remark_un=';echo$row['username']; echo'&pid='; echo$row['uniqueid']; echo'"></i>&nbsp'; print_r(count($r)); echo'</font></li>';
					
				}else{echo'<li><font color=""><i class="fa fa-comment" id="remark_un=';echo$row['username']; echo'&pid='; echo$row['uniqueid']; echo'"></i>&nbsp'; print_r(count($r)); echo'</font></li>';}
				
				}
			
			
			
			
 // For awards gotten
			
				if(empty($row['awards1'])){
				echo'<li><font color="darkgoldenrod"><i class="fa fa-star" data-target="stars.php?un=';echo$row['username']; echo'&pid='; echo$row['uniqueid']; echo'" id="like_'; print_r($ui); echo'">&nbsp';  echo'</i></font></li>';}
				else{//check if my username is in the array of awarders
					$r=unserialize($row['awards1']);
				if(in_array($user,$r)){
					
					echo'<li><font color="gold"><i class="fa fa-star" data-target="stars.php?un=';echo$row['username']; echo'&pid='; echo$row['uniqueid']; echo'" id="like_'; print_r($ui); echo'">&nbsp'; echo	$row['awards']; echo'</i></font></li>';
				}else{
					
					echo'<li><font color="darkgoldenrod"><i class="fa fa-star" data-target="stars.php?un=';echo$row['username']; echo'&pid='; echo$row['uniqueid']; echo'" id="like_'; print_r($ui); echo'">&nbsp'; echo	$row['awards']; echo'</i></font></li>';
					
				}
				
				
					}
		
	
		if(empty($row['likes'])){
				
				echo'<li><font color=""><i class="fa fa-heart" data-target="likes.php?un=';echo$row['username']; echo'&pid='; echo$row['uniqueid']; echo'" id="like_'; print_r($ui);  echo'"></i></font></li>';
			}else{
				
				$l=unserialize($row['likes']);
				if(in_array($user,$l)){
				echo'<li><font color="red"><i class="fa fa-heart" data-target="likes.php?un=';echo$row['username']; echo'&pid='; echo$row['uniqueid']; echo'" id="like_'; print_r($ui); echo'">&nbsp'; print_r(count($l)); echo'</i></font></li>';
				}else{
					
				echo'<li><font color=""><i class="fa fa-heart" data-target="likes.php?un=';echo$row['username']; echo'&pid='; echo$row['uniqueid']; echo'" id="like_'; print_r($ui); echo'">&nbsp'; print_r(count($l)); echo'</i></font></li>';	
					
				}
				
			}







		

		echo'</ul>
 </div>';
 
 //echo'<div class="link_'; print_r($ui); echo'">www.linksxup.com/remarks.php?pid='; echo$row['uniqueid']; echo'</div>';
 
		}
			
				
		echo'<h6>'; echo$row['time']; echo'</h6>';	
			
		
	echo'</fieldset>';
	
		
		echo'<fieldset><ul class="liink" role="navigation">
 <li><b>'; echo'&nbsp Awarders &nbsp<i class="fa fa-arrow-circle-o-down"></i></b></li>
</ul>
<hr></fieldset>';
		
		
		
		
		
		
		
		
		
	/////////
		
		if(!empty($_GET['pid'])){
			$pid= $_GET['pid'];
			
	require'database.php';
		
		$query1 = "SELECT * FROM linkupdates  WHERE uniqueid='$pid'";
		$result1 = mysqli_query($link, $query1);
	
	$row = mysqli_fetch_array($result1);
	
		if(empty($row['awards1'])){echo"<fieldset>No user has currently given your linkupdate an award</fieldset>";}
		
		else{$u=unserialize($row['awards1']);
	
		$count=count($u);
		
	
	for($j=0;$j<$count;$j++)
{$x="$user";


//if($u[$j]==$x)

		
			require'database.php';
		
		$query = "SELECT * FROM users  WHERE username='$u[$j]'";
		$result = mysqli_query($link, $query);
	$ro= mysqli_fetch_array($result);
echo'<fieldset><ul class="liinkk" role="navigation">
	<li>';
	
	if($ro["profilepic"] != "")
	{
	echo'<a href="'; echo $ro["profilepic"]; echo'">
	<span class="login100-form-avatar">';}else{ echo'
	<span class="login100-form-avatar">';}
	
	if($ro["profilepic"] != "")
	{
	echo'<img src="'; echo $ro["profilepic"]; 


	}else{
		if($ro["gender"] == "male")
		{echo'<img src="';echo'gender/male.jpg';}else{
		echo'<img src="';echo'gender/female.jpg';
	
	}
	}
	
	echo'"alt="AVATAR"> 
	</span>
	<a/>
	</li>'; if($ro["verification"] == "verified" ){echo'<span class="login10-form-avatar">
	<img src="verified.jpeg" alt="AVATAR"> 
	</span>';}
 if($ro["username"] != "$user"){
     echo'<li><a href="info.php?un='; echo $ro["username"]; echo'">'; if (strlen($ro['firstname']) < 9){
							  
							  echo $ro['firstname']; 
							  
							  }else{	  echo substr("$ro[firstname]","0", "8"); echo'...';}


   echo'&nbsp'; 


		   if (strlen($ro['lastname']) < 9){
							  
							  echo $ro['lastname']; 
							  
							  }else{	  echo substr("$ro[lastname]","0", "8"); echo'...';}



   echo'</b><br>Un@';


     if (strlen($ro['username']) < 11){
							  
							  echo $ro['username']; 
							  
							  }else{	  echo substr("$ro[username]","0", "10"); echo'...';} 
	 echo'<br/>';
echo' </a></li>';}
    if($ro["username"] == "$user"){ echo'<li><a href="info.php?un='; echo $ro["username"]; echo'"><h5>';  echo'&nbsp'; echo "You"; echo'</h5><br>'; 
	 echo'<br/>';
echo' </a></li>';}
	
	
  echo'</ul></fieldset>';
  
}		
			
			
			
			
		
}
		
		
		
	
	
	
	
	
	}
}else{header('location: log in.html');}


		
	
	
	

			
	
	?>
	
	
	</form>

  
  
  <style type="text/css">

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
  
  
#menu li {
    display: block;
    position: relative;
    float: left;
	
}


#menu li:hover {
    display: block;
    position: relative;
    float: left;
	color: 57b846;
}


.liinkk li {
    cursor: pointer;
    margin-left: auto;
    margin-right: auto;
    font-size: 20px;
}


li ul {
    display: none;
	
}
#menu li a {
    display: absolute;
    text-decoration: none;
    color: #000000;
    border-top: 1px solid #ffffff;
	border-radius: 5px;
    padding: -1em;
    background: #ffffff;
    margin-left: 1px;
    white-space: nowrap;
	
}
#menu li a:hover {
background: #57b846;
}
li:hover ul {
    display: block;
    position: absolute;

li:hover li {
    float: none;
    font-size: 1110px;
}
li:hover a { background: #57b846; }
li:hover li a:hover {
    background: #000000;
}


</style>
	
	
	<style>
	
	audio {
    width: 100%;
}
	
	.loginvideo-form-avatar video {
    width: 100%;
}
	
	button {
    font-size: 0.9em;
    border: 0;
    background: #57b846;
    color: #fff;
    border-radius: 10px;
}
	
	
	.postWraper a {
    color: #000000;
    text-decoration: none;
}
	
	.login-form-avatar img {
    width: 100%;
}
	
	
	a{
		text-decoration: none;
		color: #57b846;
	}
	
	
.twitter li a{
  color: black;
  style: none;
  color: #57b846;
  
}
	
	.twitter li a:hover{
  color: #57b846;
}
	
	input[type="text"] {
	width:50em;
	
	border-radius:20px;
	height:30px;
	border-color:#57b846;
	
	}
	
	.twitter li> button:hover {
  cursor: pointer;
   margin-left: auto;
  margin-right: auto;
font-size: 0.8em;
border-radius: 80px;
}
	
	
	.twit {
  display: flex;
  
 
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


.twitter{
display: none;
}
	
	
name {
	
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
  font-size: 0.6em;
  border: 0;
  background: #57b846;
  color: #fff;
  border-radius: 100px;
  
}
	
	textarea{
	
   top: 160px;
   margin-left: auto;
  margin-right: auto;
  position: relative;
  	

	 display: flex;
   
	max-width:50em;
	min-width: 30em;
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
	



    table.table tr th, table.table tr td {
        border-color: #e9e9e9;
		padding: 5px 15px;
		vertical-align: middle;
		top:80px;
    }
	
    table.table td i {
        font-size: 19px;
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




fieldset{
	
	top: 70px;

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






/***** Media queries *****/

@media (min-width: 992px) and (max-width: 1199px) {}

@media (min-width: 768px) and (max-width: 991px) {}

@media (max-width: 767px) {
	
	audio {
    width: 100%;
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

}
	
	</style>

	</body>
</html>
