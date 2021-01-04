<!DOCTYPE html>

<html lang="en" >

<head>
   <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="shortcut icon" href="icon.png" />
		
  <meta charset="UTF-8">
  <title>Delete confirmation</title>
  
  
 <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'>

      <link rel="stylesheet" href="css/style.css">

  
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
  echo'<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
		';
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
$('h4').css('color','#fff');
$('name').css('background','#333');


	  });
	  
    </script>";
	
}
 
 $user=$_COOKIE['username'];
 
  $untoken=$_COOKIE['untoken'];
	if(isset($untoken) && isset($user)){
		require'database.php';
		
		$query= "SELECT untoken FROM users1 WHERE username='$user'";	
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
 $uniqueid=$_GET['uniqueid'];
 $status=$_GET['status'];
  $confirm=$_GET['confirmation'];
  //////////
   require'database.php';
 $format1="likes"; $format2="awards"; $format3="remark"; $format4="replies";
 mysqli_query($link, "DELETE FROM notifications WHERE uniqueid='$uniqueid' AND format='$format1' ");
 mysqli_query($link, "DELETE FROM notifications WHERE uniqueid='$uniqueid' AND format='$format2' ");
 mysqli_query($link, "DELETE FROM notifications WHERE uniqueid='$uniqueid' AND format='$format3' ");
 mysqli_query($link, "DELETE FROM notifications WHERE uniqueid='$uniqueid' AND format='$format4' ");
 
  
  if(isset($status) && $confirm='proceed'){
	
	if($status == 'linkupdate'){
		
		require_once 'database.php';

$bio=mysqli_query($link, "SELECT * FROM linkupdates WHERE uniqueid='$uniqueid'");	
$row=mysqli_fetch_array($bio);

		
		if($row['url'] == 'multiple'){
			$e=unserialize($row['file_type']);
			
			//print_r($e[0]);
			//$r=$e[0];
			//echo"$r";
			if(count($e)==4){
				$first0 = explode('/',$e[0]);
				$objectName0 = end($first0);
				$bucketName = "linksxup.appspot.com";
		putenv("GOOGLE_APPLICATION_CREDENTIALS=linksxup-launch-1b3a355e45e5.json");
				
				$deleted0=delete_object($bucketName, $objectName0);
				//////
				
				$first2 = explode('/',$e[2]);
				$objectName2 = end($first2);
				$bucketName = "linksxup.appspot.com";
		putenv("GOOGLE_APPLICATION_CREDENTIALS=linksxup-launch-1b3a355e45e5.json");
				
				$deleted2=delete_object($bucketName, $objectName2);
				
				
				
		
				
			}
			
			if(count($e)==6){
				$first0 = explode('/',$e[0]);
				$objectName0 = end($first0);
				$bucketName = "linksxup.appspot.com";
		putenv("GOOGLE_APPLICATION_CREDENTIALS=linksxup-launch-1b3a355e45e5.json");
				
				$deleted0 = delete_object($bucketName, $objectName0);
				/////
				
				$first2 = explode('/',$e[2]);
				$objectName2 = end($first2);
				$bucketName = "linksxup.appspot.com";
		putenv("GOOGLE_APPLICATION_CREDENTIALS=linksxup-launch-1b3a355e45e5.json");
				
				$deleted2 = delete_object($bucketName, $objectName2);
				/////
				
				
				$first4 = explode('/',$e[4]);
				$objectName4 = end($first4);
				$bucketName = "linksxup.appspot.com";
		putenv("GOOGLE_APPLICATION_CREDENTIALS=linksxup-launch-1b3a355e45e5.json");
				
				$deleted4=delete_object($bucketName, $objectName4);
	  
				
			}
			
			if(count($e)==8){
				
				$first0 = explode('/',$e[0]);
				$objectName0 = end($first0);
				$bucketName = "linksxup.appspot.com";
		putenv("GOOGLE_APPLICATION_CREDENTIALS=linksxup-launch-1b3a355e45e5.json");
				
				$deleted0=delete_object($bucketName, $objectName0);
				/////
				
				$first2 = explode('/',$e[2]);
				$objectName2 = end($first2);
				$bucketName = "linksxup.appspot.com";
		putenv("GOOGLE_APPLICATION_CREDENTIALS=linksxup-launch-1b3a355e45e5.json");
				
				$deleted2=delete_object($bucketName, $objectName2);
				/////
				
				$first4 = explode('/',$e[4]);
				$objectName4 = end($first4);
				$bucketName = "linksxup.appspot.com";
		putenv("GOOGLE_APPLICATION_CREDENTIALS=linksxup-launch-1b3a355e45e5.json");
				
				$deleted4=delete_object($bucketName, $objectName4);
				//////
				
				$first6 = explode('/',$e[6]);
				$objectName6 = end($first6);
				$bucketName = "linksxup.appspot.com";
		putenv("GOOGLE_APPLICATION_CREDENTIALS=linksxup-launch-1b3a355e45e5.json");
				
				$deleted6=delete_object($bucketName, $objectName6);
		
				
			}
			
			if(count($e)==10){
				$first0 = explode('/',$e[0]);
				$objectName0 = end($first0);
				$bucketName = "linksxup.appspot.com";
		putenv("GOOGLE_APPLICATION_CREDENTIALS=linksxup-launch-1b3a355e45e5.json");
				
				$deleted0=delete_object($bucketName, $objectName0);
				///////
				
				$first2 = explode('/',$e[2]);
				$objectName2 = end($first2);
				$bucketName = "linksxup.appspot.com";
		putenv("GOOGLE_APPLICATION_CREDENTIALS=linksxup-launch-1b3a355e45e5.json");
				
				$deleted2 = delete_object($bucketName, $objectName2);
				////////
				
				$first4 = explode('/',$e[4]);
				$objectName4 = end($first4);
				$bucketName = "linksxup.appspot.com";
		putenv("GOOGLE_APPLICATION_CREDENTIALS=linksxup-launch-1b3a355e45e5.json");
				
				$deleted4 = delete_object($bucketName, $objectName4);
				//////
				
				$first6 = explode('/',$e[6]);
				$objectName6 = end($first6);
				$bucketName = "linksxup.appspot.com";
		putenv("GOOGLE_APPLICATION_CREDENTIALS=linksxup-launch-1b3a355e45e5.json");
				
				$deleted6 = delete_object($bucketName, $objectName6);
				///////
				
				$first8 = explode('/',$e[8]);
				$objectName8 = end($first8);
				$bucketName = "linksxup.appspot.com";
		putenv("GOOGLE_APPLICATION_CREDENTIALS=linksxup-launch-1b3a355e45e5.json");
				
				$deleted8 = delete_object($bucketName, $objectName8);
				
			}
			
			if(count($e)==12){
				$first0 = explode('/',$e[0]);
				$objectName0 = end($first0);
				$bucketName = "linksxup.appspot.com";
		putenv("GOOGLE_APPLICATION_CREDENTIALS=linksxup-launch-1b3a355e45e5.json");
				
				$deleted0=delete_object($bucketName, $objectName0);
				/////
				
				$first2 = explode('/',$e[2]);
				$objectName2 = end($first2);
				$bucketName = "linksxup.appspot.com";
		putenv("GOOGLE_APPLICATION_CREDENTIALS=linksxup-launch-1b3a355e45e5.json");
				
				$deleted2 = delete_object($bucketName, $objectName2);
				/////
				
				$first4 = explode('/',$e[4]);
				$objectName4 = end($first4);
				$bucketName = "linksxup.appspot.com";
		putenv("GOOGLE_APPLICATION_CREDENTIALS=linksxup-launch-1b3a355e45e5.json");
				
				$deleted4 = delete_object($bucketName, $objectName4);
				///////
				$first6 = explode('/',$e[6]);
				$objectName6 = end($first6);
				$bucketName = "linksxup.appspot.com";
		putenv("GOOGLE_APPLICATION_CREDENTIALS=linksxup-launch-1b3a355e45e5.json");
				
				$deleted6 = delete_object($bucketName, $objectName6);
				//////
				$first8 = explode('/',$e[8]);
				$objectName8 = end($first8);
				$bucketName = "linksxup.appspot.com";
		putenv("GOOGLE_APPLICATION_CREDENTIALS=linksxup-launch-1b3a355e45e5.json");
				
				$deleted8 = delete_object($bucketName, $objectName8);
				/////
				
				$first10 = explode('/',$e[10]);
				$objectName10 = end($first10);
				$bucketName = "linksxup.appspot.com";
		putenv("GOOGLE_APPLICATION_CREDENTIALS=linksxup-launch-1b3a355e45e5.json");
				
				$deleted10 = delete_object($bucketName, $objectName10);

					
				}
				
			}
			
		
		
		$fileee=$row['file_type'];
		$filee=$row['url'];
						if($fileee != 'text' && $row['url']!= 'multiple'){
				
				$allowedimage= array('image/jpg','image/jpeg','image/png','image/gif','image/webp','image/tiff','image/psd','image/raw','image/bmp','image/heif','image/indd','image/svg','image/ai','image/eps');
				
				$allowedvideo= array('video/avi','video/flv','video/wmv','video/mov','video/mp4','video/webm','video/mkv','video/vob','video/ogv','video/ogg','video/drc','video/gifv','video/mng','video/mpeg','video/svi','video/3gp','video/3g2','video/mxf','video/roq','video/nsv','video/amv','video/asf');
				
				$allowedaudio= array('audio/3gp','audio/aa','audio/aac','audio/aax','audio/act','audio/aiff','audio/alac','audio/amr','audio/ape','audio/au','audio/awb','audio/dct','audio/dss','audio/dvf','audio/flac','audio/gsm','audio/iklax','audio/ivs','audio/m4a','audio/m4b','audio/m4p','audio/mmf','audio/mp3','audio/mpc','audio/msv','audio/nmf','audio/nsf','audio/ogg','audio/oga','audio/mog','audio/opus','audio/ra','audio/rm','audio/raw','audio/sln','audio/tta','audio/voc','audio/vox','audio/wav','audio/wma','audio/wv','audio/webm','audio/8svx', 'audio/3gpp');
				
				$alloweddocument= array('0','1st','600','602','abw','acl','afp','ami','ans','asc','aww','ccf','csv','cwk','dbk','dita','doc','docm','docx','dot','dotx','dwd','egt','epub','ezw','fdx','ftm','ftx','gdoc','html','hwp','hwpml','hwpml','log','lwp','mbp','md','me','mcw','mobi','nb','nbp','neis','odm','odoc','odt','osheet','ott','omm','pages','pap','pdax','pdf','quox','radix','rtf','rpt','sdw','se','stw','sxw','tex','info','troff','txt','uof','uoml','via','wpd','wps','wpt','wrd','wrf','wri','xhtml','xml','xps', 'ppt');
			
				//if file_type is an image 
			
			if(in_array($row["file_type"],$allowedimage))
					
					
					{
					$first = explode('/',$filee);
				$objectName = end($first);
				$bucketName = "linksxup.appspot.com";
				putenv("GOOGLE_APPLICATION_CREDENTIALS=linksxup-launch-1b3a355e45e5.json");
				
				$deleted = delete_object($bucketName, $objectName);
						}
						
						
				//if file_type is a video		
						
					
	if(in_array($row["file_type"],$allowedvideo))
					
					
					{
					$first = explode('/',$filee);
				$objectName = end($first);
				$bucketName = "videozz";
				putenv("GOOGLE_APPLICATION_CREDENTIALS=linksxup-launch-1b3a355e45e5.json");
				
				$deleted = delete_object($bucketName, $objectName);
						}				
			

		//if file_type is an audio		
						
					
	if(in_array($row["file_type"],$allowedaudio))
					
					
					{
					$first = explode('/',$filee);
				$objectName = end($first);
				$bucketName = "audioz";
				putenv("GOOGLE_APPLICATION_CREDENTIALS=linksxup-launch-1b3a355e45e5.json");
				
				$deleted = delete_object($bucketName, $objectName);
						}



	//if file_type is a document		
						
					
	if(in_array($row["file_type"],$alloweddocument))
					
					
					{
					$first = explode('/',$filee);
				$objectName = end($first);
				$bucketName = "documentzz";
				putenv("GOOGLE_APPLICATION_CREDENTIALS=linksxup-launch-1b3a355e45e5.json");
				
				$deleted = delete_object($bucketName, $objectName);
						}						
					
					
		}
		$dele=mysqli_query($link, "DELETE FROM linkupdates WHERE uniqueid='$uniqueid'");	
		if($dele){echo"deleted from linkupdates";}
		$bi=mysqli_query($link, "SELECT * FROM remarks WHERE primaryuniqueid='$uniqueid'");
		//print_r(mysqli_num_rows($bi));
		//if($bi){echo"selected remarks";}
//$ro=mysqli_fetch_array($bi);
		if(mysqli_num_rows($bi)>0){
		//while($roww=mysqli_fetch_array($bi)){
			//$uid=$roww['secondaryuniqueid'];
			//print_r($roww['secondaryuniqueid']);
			
			$delete=mysqli_query($link, "DELETE FROM replies WHERE primaryuniqueid='$uniqueid'");
			
			
			//if($delete){	
			$bi=mysqli_query($link, "DELETE FROM remarks WHERE primaryuniqueid='$uniqueid'");	//}
		//}
		}
		
		
		
		
		header("location: testt.php");
		exit();
		
	
	}

}else{header('location: testt.php');
exit();}}
 ?>

			                    </fieldset>
			                    
								

<style>

.twit li button a {
    text-decoration: none;
    color: #ffffff;
}

.login100-form-avatar img {
    width: 100%;
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
  position: 
}
.twit li {
  cursor: pointer;
   margin-left: auto;
  margin-right: auto;
font-size: 22px;
}

.twit li b {
 color: #57b846;
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