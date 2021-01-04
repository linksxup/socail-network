
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

<?php
if(isset($_POST['submit'])){

	
		 
		 $username=$_COOKIE['username'];
		 
		 $fullname= $_POST['fullname'];
		 
		 $category= $_POST['category'];
		 
		 $file = $_FILES['passport'];
		 
	$filename = $_FILES['passport']['name'];
	
	$file_error = $_FILES['passport']['error'];
	
	$file_size = $_FILES['passport']['size'];
	
	$file_tmplocation = $_FILES['passport']['tmp_name'];
	
	$file_type = $_FILES["passport"]["type"];
		
		$fileext = explode('.',$filename);
	$fileactualext = strtolower(end($fileext));
	
	//print_r($fileactualext);
	
	$allowedimage= array('jpg','jpeg','png','gif','webp','tiff','psd','raw','bmp','heif','indd','svg','ai','eps');
	
	if(in_array($fileactualext,$allowedimage)){
		
			if($file_error == 0){
			if($file_size > 11485760){echo'<h4>
<font color="red">Image size too large. maximum allowable image size is 10mb</font></h4>';
			}if($file_size < 11485760){
	$label='linksxup';

	
		 $uniqueid = uniqid('', true);
	$filenewname = $label.uniqid('', true).'.'.$fileactualext;
	$filedestination= "https://storage.googleapis.com/verification11/$filenewname";
	
	$filedestinationreal= "verification11";
	//For condition of same name existence $filedestination= "linkupdates/images".$filenewname;
	
	putenv("GOOGLE_APPLICATION_CREDENTIALS=linksxup-launch-1b3a355e45e5.json");
   
    $storage= new Storage();

 upload_object($filedestinationreal, $filenewname, $file_tmplocation);
	
	
	 //$uniqueid = uniqid('', true);
	//$filenewname = $label.uniqid('', true).'.'.$fileactualext;
	//$filedestination= "linkupdates/verificationid/$filenewname";
	//For condition of same name existence $filedestination= "linkupdates/images".$filenewname;
	//    $upload = move_uploaded_file($file_tmplocation, $filedestination);
	//header("location: linkupdate.php? upload success");
	
	
   //if($upload==true){
	require_once 'database.php';

	$fileactualext1="image/$fileactualext";
	
$stmt=mysqli_query($link, "INSERT INTO verification (username, category, fullname, 
url, file_type, uniqueid,id) VALUES ('$username', '$category', '$fullname', '$filedestination', '$fileactualext1', '$uniqueid','')");	
	   
  if($stmt){header("location: https://paystack.com/pay/linksxup-accountverificationapplication");
  exit();}


	  //}
	
	}
		
	}if(!in_array($fileactualext,$allowedimage)){echo"<fieldset><h4>
<font-color='red'>image type not supported</font></h4></fieldset>";}
	
}else{echo"<font color='red'>Oops image file type not supported!</font></h4>";}


}
?>
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