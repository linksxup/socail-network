
<!DOCTYPE html>

<html lang="en" >

<head>
   <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		
		    <link rel="shortcut icon" href="icon.PNG" />
		
  <meta charset="UTF-8">
  <title>Share linkupdate</title>
  
           <script async src="https://www.googletagmanager.com/gtag/js?id=UA-117749332-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-117749332-1');
</script>
  
 <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'>

      <link rel="stylesheet" href="css/style.css">

  
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
  
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
$('b').css('color','#fff');
$('name').css('background','#333');


	  });
	  
    </script>";
	
}



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

					
	

	if(isset($_FILES['file-1'])){	 	 
		 
		$fil=$_FILES['file-1']['tmp_name'];
	$count=count($fil);
	//print_r($count);
	//print_r($_FILES['file-1']['tmp_name']);
	if($count <=1){
	
		for($j=0; $j<$count; ++$j) 
		 
		 {
	
	 $file = $_FILES['file-1'];
		 
	$filename = $_FILES['file-1']['name'];
	
	$file_error = $_FILES['file-1']['error'];
	
	$file_size = $_FILES['file-1']['size'];
	
	$file_tmplocation = $_FILES['file-1']['tmp_name'];
	
	$file_type = $_FILES["file-1"]["type"];
	
	$fileext = explode('.',$filename[$j]);
	$fileactualext = strtolower(end($fileext));
	

	
	
	

	// for image file extension for now
	$allowed= array('video/avi','video/flv','video/wmv','video/mov','video/mp4','video/webm','video/mkv','video/vob','video/ogv','video/ogg','video/drc','video/gifv','video/mng','video/mpeg','video/svi','video/3gp','video/3g2','video/mxf','video/roq','video/nsv','video/amv','video/asf','audio/3gp','audio/aa','audio/aac','audio/aax','audio/act','audio/aiff','audio/alac','audio/amr','audio/ape','audio/au','audio/awb','audio/dct','audio/dss','audio/dvf','audio/flac','audio/gsm','audio/iklax','audio/ivs','audio/m4a','audio/m4b','audio/m4p','audio/mmf','audio/mp3','audio/mpc','audio/msv','audio/nmf','audio/nsf','audio/ogg','audio/oga','audio/mog','audio/opus','audio/ra','audio/rm','audio/raw','audio/sln','audio/tta','audio/voc','audio/vox','audio/wav','audio/wma','audio/wv','audio/webm','audio/8svx','image/jpg','image/jpeg','image/png','image/gif','image/webp','image/tiff','image/psd','image/raw','image/bmp','image/heif','image/indd','image/svg','image/ai','image/eps');

	$videos= array('video/avi','video/flv','video/wmv','video/mov','video/mp4','video/webm','video/mkv','video/vob','video/ogv','video/ogg','video/drc','video/gifv','video/mng','video/mpeg','video/svi','video/3gp','video/3g2','video/mxf','video/roq','video/nsv','video/amv','video/asf');
	

	$audios= array('audio/3gp','audio/aa','audio/aac','audio/aax','audio/act','audio/aiff','audio/alac','audio/amr','audio/ape','audio/au','audio/awb','audio/dct','audio/dss','audio/dvf','audio/flac','audio/gsm','audio/iklax','audio/ivs','audio/m4a','audio/m4b','audio/m4p','audio/mmf','audio/mp3','audio/mpc','audio/msv','audio/nmf','audio/nsf','audio/ogg','audio/oga','audio/mog','audio/opus','audio/ra','audio/rm','audio/raw','audio/sln','audio/tta','audio/voc','audio/vox','audio/wav','audio/wma','audio/wv','audio/webm','audio/8svx');
	
	
	//$count=count($ext);
	
	

	
	//for($j=0; $j<$count; ++$j)
	//{
	//print_r($file_type);
	//print_r($ext[$j]);
	//print_r($file_error);
					//$a="image/jpeg";
					//$b="image/jpeg";
					if(in_array($fileactualext,$allowed)){//echo"They're thesame";
					
					
					
					
					
		if($file_error[$j] === 0){
			if($file_size[$j] > 11485760){echo'<h4>
<font color="red">file size too large. maximum allowable file size is 10mb</font></h4>';
			}if($file_size[$j] < 11485760){
	$label='linksxup';

	 $uniqueid = uniqid('', true);
	$filenewname = $label.uniqid('', true).'.'.$fileactualext;
	
		if(in_array($fileactualext,$images))
	{$filedestination= "linkupdates/images/$filenewname";}
	
	
	if(in_array($fileactualext,$videos))
	{$filedestination= "linkupdates/videos/$filenewname";}

if(in_array($fileactualext,$audios))
	{$filedestination= "linkupdates/audios/$filenewname";}
	
	
	//For condition of same name existence $filedestination= "linkupdates/images".$filenewname;
	$upload = move_uploaded_file($file_tmplocation[$j], $filedestination);
	//header("location: linkupdate.php? upload success");
	
	
   if($upload==true){
	require_once 'database.php';

	if(in_array($fileactualext,$images))
	{$fileactualext1="image/$fileactualext";}
	
	if(in_array($fileactualext,$videos))
	{$fileactualext1="video/$fileactualext";}
	
	if(in_array($fileactualext,$audios))
	{$fileactualext1="audio/$fileactualext";}
	
	
	
	require_once 'database.php';
		$query = "SELECT * FROM users WHERE username= '$user'";

$result = mysqli_query($link, $query);
$row = mysqli_fetch_array($result);



$stmt=mysqli_query($link, "INSERT INTO linkupdates (username, url, file_type, uniqueid, firstname, lastname, profilepic,verification, gender) VALUES ('$user', '$filedestination', '$fileactualext1', '$uniqueid', '$row[firstname]', '$row[lastname]', '$row[profilepic]','$row[verification]', '$row[gender]')");	
	   
   }
	
	}
}


//else{// perform operation of authentication and uploading file into database as written/described in my pseudo book...... }
		}if(!in_array($fileactualext,$allowed)){echo"<fieldset><h4>
<font-color='red'>file type not supported</font></h4></fieldset>";}
	
		
		if($file_error[$j]!==0){echo'<fieldset><h1>
<font color="red">An error occured uploading the file</font></h1></fieldset>';}
		
					
					
					
					
					
					
					
					
					}	if($upload==true)
	{
	echo'
	
 <fieldset>

<h4 align= "center"><font color="57b846"> image linkupdate successful</font></h4>
	<ul class="single">
	<form action="timeline.php">
	<li><button>+<i class="fa fa-pencil"></button></i></li>	
	</form>
	</ul>
<ul class="arrange">
<form action="linkupdate image.html">           
		<li><button>+<i class="fa fa-photo"></button></i></li>
		</form>
		<form action="camera/index.html">
		<li><button>+<i class="fa fa-camera"></button></i></li>
		</form>
</ul>

	<ul class="arrange">  
<form action="linkupdate audio.html">	
		<li><button>+<i class="fa fa-music"></button></i></li>
		</form>
		<form action="document.html">	
		<li><button>+<i class="fa fa-file"></button></i></li>
		</form>
</ul>

<ul class="arrange">
<form action="linkupdate video.html">
		<li><button>+<i class="fa fa-file-movie-o"></button></i></li>
		</form>
		<form action="videorecoder/cameracanvas.html">
		<li><button>+<i class="fa fa-video-camera"></button></i></li>
		</form>
</ul>
	
 </fieldset>';


}
}else{
echo'<fieldset><h4 align= "center">
<font color="red"> Just only a single file can be lunkupdated </font></h4></fieldset>';
}
	}else{
echo'<fieldset><h4 align= "center">
<font color="red"> Please select a file to linkupdate. </font></h4></fieldset>';
}

 
												
 


	}else{
	header("location: log in.html");
	
}
					
	


 

		 
					
					
					?>


    <script  src="js/index.js"></script>

<style>
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
  color: black;
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