
<!DOCTYPE html>

<html lang="en" >

<head>
   <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		
		<link rel="shortcut icon" href="icon.png"/>
		
  <meta charset="UTF-8">
  <title>Update profile</title>
  
  
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
 <form>
   <ul class="twit" role="navigation">
   <li><a href="account.php" ><i class="fa fa-arrow-left"></i></a></li>
  <li><a href="testt.php" ><i class="fa fa-home"></i></a></li>
   <li><b>My profile</b></li>
  
  </ul>
  </form>
</nav>





  
  
  


<body>

  
  
  
  
                        		<style>
					a{
						
						color:#57b846;
					}			
								
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



 <fieldset>
 
			<form role="form" action="edit profile2.php" method="POST" enctype="multipart/form-data">



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
	require_once 'database.php';			

$bio=mysqli_query($link, "SELECT * FROM users WHERE username='$user'");	
$row=mysqli_fetch_array($bio);			
	
	
if(isset($_POST['submit'])){
						if(!empty($_POST['pic'])){
						$pic= strip_tags(htmlspecialchars($_POST['pic']));}else{$pic='';}
						
						if(!empty($_POST['phone'])){
						$phone= strip_tags(htmlspecialchars($_POST['phone']));}else{$phone='';}
						
						if(!empty($_POST['number'])){
						$number= strip_tags(htmlspecialchars($_POST['number']));}else{$number='';}
						
						
						$fname= strip_tags(htmlspecialchars($_POST['fname']));
						$lname= strip_tags(htmlspecialchars($_POST['lname']));
						$bio= addslashes(strip_tags(htmlspecialchars($_POST['bio'])));
						$pro= addslashes(strip_tags(htmlspecialchars($_POST['pro'])));
						$location= addslashes(strip_tags(htmlspecialchars($_POST['location'])));
						$website= addslashes(strip_tags(htmlspecialchars($_POST['website'])));
						
						
						$filename = $_FILES['file-1']['name'];
						$file = $_FILES['file-1'];
	
	
	$file_error = $_FILES['file-1']['error'];
	
	$file_size = $_FILES['file-1']['size'];

		
	$file_tmplocation = $_FILES['file-1']['tmp_name'];
	$file_type = $_FILES["file-1"]["type"];
	
	//If profilepic is not empty...
if(!empty($filename[0]) && !empty($row["profilepic"]))
{
	//Delete from cloud storage first...
	$fileee = $row['profilepic'];
						
				$first0 = explode('/',$fileee);
				$objectName0 = end($first0);
				$bucketName = "imagez";
		putenv("GOOGLE_APPLICATION_CREDENTIALS=linksxup-launch-1b3a355e45e5.json");
				
				$deleted0=delete_object($bucketName, $objectName0);
				
	
	
//////////////////////////////////////////////////////////////////////	
	
	$fileext = explode('.',$filename[0]);
	$fileactualext = strtolower(end($fileext));
	

	// for image file extension for now
	
	$allowedimage= array('image/jpg','image/jpeg','image/png','image/gif','image/webp','image/tiff','image/psd','image/raw','image/bmp','image/heif','image/indd','image/svg','image/ai','image/eps');

if(in_array($file_type[0],$allowedimage)){//echo"They're thesame";
					
					
					
					
					
		if($file_error[0] == 0){
			if($file_size[0] > 11485760){echo'<fieldset><h4>
<font color="red">image size too large. maximum allowable image size is 10mb</font></h4></fieldset>';
			}if($file_size[0] < 11485760){
	$label='linksxup';
	
		 $uniqueid = uniqid('', true);
	$filenewname = $label.uniqid('', true).'.'.$fileactualext;
	$filedestination= "https://storage.googleapis.com/imagez/$filenewname";
	
	$filedestinationreal= "imagez";
	//For condition of same name existence $filedestination= "linkupdates/images".$filenewname;
	
	putenv("GOOGLE_APPLICATION_CREDENTIALS=linksxup-launch-1b3a355e45e5.json");
   
    $storage= new Storage();

	$upload = upload_object($filedestinationreal, $filenewname, $file_tmplocation[0]);
	
	
	
	

	
	require_once 'database.php';
	
	
	
	
$a=mysqli_query($link, "UPDATE moment1 SET profilepic='$filedestination' WHERE username='$user'");
	
	
$b=mysqli_query($link, "UPDATE moment2 SET profilepic='$filedestination' WHERE username='$user'");

	
$stmt=mysqli_query($link, "UPDATE users SET firstname='$fname', lastname='$lname', bio='$bio', pro='$pro', location='$location', website='$website', profilepic='$filedestination', status='$phone', phone='$number' WHERE username='$user'");


$stt=mysqli_query($link, "UPDATE linkupdates SET firstname='$fname', lastname='$lname', profilepic='$filedestination' WHERE username='$user'");


$st=mysqli_query($link, "UPDATE remarks SET firstname='$fname', lastname='$lname', profilepic='$filedestination' WHERE username='$user'");


$s=mysqli_query($link, "UPDATE replies SET firstname='$fname', lastname='$lname', profilepic='$filedestination' WHERE username='$user'");

if($s){
require_once 'database.php';

$bio=mysqli_query($link, "SELECT * FROM users WHERE username='$user'");	
$row=mysqli_fetch_array($bio);	


echo'<ul class="twit" role="navigation">';
	echo'<li>';
	echo'<span class="login100-form-avatar">';


	if($row["profilepic"] != "")
	
	{ echo'<a href="'; echo $row["profilepic"]; echo'">';
		echo'<img src="'; echo $row["profilepic"]; echo'" alt="AVATAR">';
	echo'</a></span></li></ul>';}else{
	
	
	
	
				if($row['gender'] == "male"){
	
	echo'<span class="login100-form-avatar">
	<img src="gender/male.jpg" alt="AVATAR">	
</span><br>';echo'</ul></li>';}else{
	
	
	echo'<span class="login100-form-avatar">
	<img src="gender/female.jpg" alt="AVATAR">	
</span>';echo'</ul></li>';}

}

			

			
				echo'
				
			
				<p><font color="#57b846"> <p>First name</font></p>
				                        	
				                        	<textarea placeholder="'; echo$row['firstname']; echo'" name="fname">';
											echo$row['firstname'];
											
											echo'</textarea>';
			
			
			
				echo'<p><font color="#57b846"> <p>Last name</font></p>
				                        	
				                        	<textarea placeholder="'; echo$row['lastname']; echo'" name="lname">';
											echo$row['lastname'];
											
											echo'</textarea>';
			
			
										echo'<p><font color="#57b846"> <p>Bio</font></p>
				                        	
				                        	<textarea placeholder="'; echo$row['bio']; echo'" name="bio">';
											echo$row['bio'];
											
											echo'</textarea>';

				                        
										
										echo'<p><font color="#57b846"> <p>Profession/skill</font></p>
				                        	
				                        	<textarea placeholder="'; echo$row['pro']; echo'" name="pro">';
											echo$row['pro'];
											
											echo'</textarea>';

				                      
										
										echo'<p><font color="#57b846"> <p>Location</font></p>
				                        	
				                        	<textarea placeholder="'; echo$row['location']; echo'" name="location">';
											echo$row['location'];
											
											echo'</textarea>';

				                       
										
										
										
											
	echo'<p><font color="#57b846"> <p>phone-no</font></p>';
				                      
		echo'<textarea placeholder="'; echo'" name="number"  required="required">';
											echo$row['phone'];
											
											echo'</textarea>';
										
										
										
										
									
										echo'<p><font color="#57b846"> <p>Website</font></p>
				                        	
				                        	<textarea placeholder="'; echo$row['website']; echo'" name="website">';
											echo$row['website'];
											
											echo'</textarea>';

				               
										
										
										

				                        
 }	
   
   //}
	
	}
}
	
	
/////////////////////////////////////////////////////////////////////	
}

}


////////////////////////////////////////////////////////

	//If profilepic is not empty...
if(!empty($filename[0]) && empty($row["profilepic"])){
	
//////////////////////////////////////////////////////////////////////	
	
	$fileext = explode('.',$filename[0]);
	$fileactualext = strtolower(end($fileext));
	

	// for image file extension for now
	
	$allowedimage= array('image/jpg','image/jpeg','image/png','image/gif','image/webp','image/tiff','image/psd','image/raw','image/bmp','image/heif','image/indd','image/svg','image/ai','image/eps');

if(in_array($file_type[0],$allowedimage)){//echo"They're thesame";
					
					
					
					
					
		if($file_error[0] == 0){
			if($file_size[0] > 11485760){echo'<fieldset><h4>
<font color="red">image size too large. maximum allowable image size is 10mb</font></h4></fieldset>';
			}if($file_size[0] < 11485760){
	$label='linksxup';
	
		 $uniqueid = uniqid('', true);
	$filenewname = $label.uniqid('', true).'.'.$fileactualext;
	$filedestination= "https://storage.googleapis.com/imagez/$filenewname";
	
	$filedestinationreal= "imagez";
	//For condition of same name existence $filedestination= "linkupdates/images".$filenewname;
	
	putenv("GOOGLE_APPLICATION_CREDENTIALS=linksxup-launch-1b3a355e45e5.json");
   
    $storage= new Storage();

	$upload = upload_object($filedestinationreal, $filenewname, $file_tmplocation[0]);
	
	
	
	

	
	require_once 'database.php';
	
	
	
$a=mysqli_query($link, "UPDATE moment1 SET profilepic='$filedestination' WHERE username='$user'");
	
	
$b=mysqli_query($link, "UPDATE moment2 SET profilepic='$filedestination' WHERE username='$user'");

	
$stmt=mysqli_query($link, "UPDATE users SET firstname='$fname', lastname='$lname', bio='$bio', pro='$pro', location='$location', website='$website', profilepic='$filedestination', status='$phone', phone='$number' WHERE username='$user'");


$stt=mysqli_query($link, "UPDATE linkupdates SET firstname='$fname', lastname='$lname', profilepic='$filedestination' WHERE username='$user'");


$st=mysqli_query($link, "UPDATE remarks SET firstname='$fname', lastname='$lname', profilepic='$filedestination' WHERE username='$user'");


$s=mysqli_query($link, "UPDATE replies SET firstname='$fname', lastname='$lname', profilepic='$filedestination' WHERE username='$user'");

if($s){
require_once 'database.php';

$bio=mysqli_query($link, "SELECT * FROM users WHERE username='$user'");	
$row=mysqli_fetch_array($bio);	


echo'<ul class="twit" role="navigation">';
	echo'<li>';
	echo'<span class="login100-form-avatar">';


	if($row["profilepic"] != "")
	
	{ echo'<a href="'; echo $row["profilepic"]; echo'">';
		echo'<img src="'; echo $row["profilepic"]; echo'" alt="AVATAR">';
	echo'</a></span></li></ul>';}else{
	
	
	
	
				if($row['gender'] == "male"){
	
	echo'<span class="login100-form-avatar">
	<img src="gender/male.jpg" alt="AVATAR">	
</span><br>';echo'</ul></li>';}else{
	
	
	echo'<span class="login100-form-avatar">
	<img src="gender/female.jpg" alt="AVATAR">	
</span>';echo'</ul></li>';}

}

			

			
				echo'
				
			
				<p><font color="#57b846"> <p>First name</font></p>
				                        	
				                        	<textarea placeholder="'; echo$row['firstname']; echo'" name="fname">';
											echo$row['firstname'];
											
											echo'</textarea>';
			
			
			
				echo'<p><font color="#57b846"> <p>Last name</font></p>
				                        	
				                        	<textarea placeholder="'; echo$row['lastname']; echo'" name="lname">';
											echo$row['lastname'];
											
											echo'</textarea>';
			
			
										echo'<p><font color="#57b846"> <p>Bio</font></p>
				                        	
				                        	<textarea placeholder="'; echo$row['bio']; echo'" name="bio">';
											echo$row['bio'];
											
											echo'</textarea>';

				                        
										
										echo'<p><font color="#57b846"> <p>Profession/skill</font></p>
				                        	
				                        	<textarea placeholder="'; echo$row['pro']; echo'" name="pro">';
											echo$row['pro'];
											
											echo'</textarea>';

				                      
										
										echo'<p><font color="#57b846"> <p>Location</font></p>
				                        	
				                        	<textarea placeholder="'; echo$row['location']; echo'" name="location">';
											echo$row['location'];
											
											echo'</textarea>';

				                       
						echo'<p><font color="#57b846"> <p>phone-no</font></p>';
				                      
		echo'<textarea placeholder="'; echo'" name="number"  required="required">';
											echo$row['phone'];
											
											echo'</textarea>';
										
														   
										
									
										echo'<p><font color="#57b846"> <p>Website</font></p>
				                        	
				                        	<textarea placeholder="'; echo$row['website']; echo'" name="website">';
											echo$row['website'];
											
											echo'</textarea>';

				               
										
										
										

				                        
 }	
   
   //}
	
	}
}
	
	
/////////////////////////////////////////////////////////////////////	
}
	
	
}


///////////////////////////////////////////////////////

	
						
		
		if($pic == 'remove'){
	
						
						$fileee = $row['profilepic'];
						
						$first0 = explode('/',$fileee);
				$objectName0 = end($first0);
				$bucketName = "imagez";
		putenv("GOOGLE_APPLICATION_CREDENTIALS=linksxup-launch-1b3a355e45e5.json");
				
				$deleted0=delete_object($bucketName, $objectName0);
				
						
					//if(unlink($fileee)){
			
$a=mysqli_query($link, "UPDATE moment1 SET profilepic='$filedestination' WHERE username='$user'");
	
	
$b=mysqli_query($link, "UPDATE moment2 SET profilepic='$filedestination' WHERE username='$user'");

			
$stmt = mysqli_query($link, "UPDATE users SET firstname='$fname', lastname='$lname', bio='$bio', pro='$pro', location='$location', website='$website', profilepic='', status='$phone', phone='$number' WHERE username='$user'");


$stt=mysqli_query($link, "UPDATE linkupdates SET firstname='$fname', lastname='$lname', profilepic='' WHERE username='$user'");



$st=mysqli_query($link, "UPDATE remarks SET firstname='$fname', lastname='$lname', profilepic='' WHERE username='$user'");



$s=mysqli_query($link, "UPDATE replies SET firstname='$fname', lastname='$lname', profilepic='' WHERE username='$user'");

if($s == true){
require_once 'database.php';

$bio=mysqli_query($link, "SELECT * FROM users WHERE username='$user'");	
$row=mysqli_fetch_array($bio);	


echo'<ul class="twit" role="navigation">';
	echo'<li>';
	echo'<span class="login100-form-avatar">';


	if($row["profilepic"] != "")
	
	{ echo'<a href="'; echo $row["profilepic"]; echo'">';
		echo'<img src="'; echo $row["profilepic"]; echo'" alt="AVATAR">';
	echo'</a></span></li></ul>';}else{
	
	
	
	
				if($row['gender'] == "male"){
	
	echo'<span class="login100-form-avatar">
	<img src="gender/male.jpg" alt="AVATAR">	
</span><br>';echo'</ul></li>';}else{
	
	
	echo'<span class="login100-form-avatar">
	<img src="gender/female.jpg" alt="AVATAR">	
</span>';echo'</ul></li>';}

}



			

			
				echo'
				
			
				<p><font color="#57b846"> <p>First name</font></p>
				                        	
				                        	<textarea placeholder="'; echo$row['firstname']; echo'" name="fname">';
											echo$row['firstname'];
											
											echo'</textarea>';
			
			
			
				echo'<p><font color="#57b846"> <p>Last name</font></p>
				                        	
				                        	<textarea placeholder="'; echo$row['lastname']; echo'" name="lname">';
											echo$row['lastname'];
											
											echo'</textarea>';
			
			
										echo'<p><font color="#57b846"> <p>Bio</font></p>
				                        	
				                        	<textarea placeholder="'; echo$row['bio']; echo'" name="bio">';
											echo$row['bio'];
											
											echo'</textarea>';

				                        
										
										echo'<p><font color="#57b846"> <p>Profession/skill</font></p>
				                        	
				                        	<textarea placeholder="'; echo$row['pro']; echo'" name="pro">';
											echo$row['pro'];
											
											echo'</textarea>';

				                      
										
										echo'<p><font color="#57b846"> <p>Location</font></p>
				                        	
				                        	<textarea placeholder="'; echo$row['location']; echo'" name="location">';
											echo$row['location'];
											
											echo'</textarea>';

				                       
					echo'<p><font color="#57b846"> <p>phone-no</font></p>';
				                      
		echo'<textarea placeholder="'; echo'" name="number"  required="required">';
											echo$row['phone'];
											
											echo'</textarea>';
										
													

							
									
										echo'<p><font color="#57b846"> <p>Website</font></p>
				                        	
				                        	<textarea placeholder="'; echo$row['website']; echo'" name="website">';
											echo$row['website'];
											
											echo'</textarea>';

				               
										
										
										

 }	
					//}
						
					}
			
		
		if(empty($filename[0])){
				
$bio=mysqli_query($link, "SELECT * FROM users WHERE username='$user'");	
$row=mysqli_fetch_array($bio);
	
	
$fname= strip_tags(htmlspecialchars($_POST['fname']));
$lname= strip_tags(htmlspecialchars($_POST['lname']));
$bio= strip_tags(htmlspecialchars($_POST['bio']));
$pro= strip_tags(htmlspecialchars($_POST['pro']));
$location= strip_tags(htmlspecialchars($_POST['location']));
$website= strip_tags(htmlspecialchars($_POST['website']));
						
	
	
	
	

	
	require_once 'database.php';
	
	
	
	$a=mysqli_query($link, "UPDATE moment1 SET profilepic='$filedestination' WHERE username='$user'");
	
	
$b=mysqli_query($link, "UPDATE moment2 SET profilepic='$filedestination' WHERE username='$user'");

	
$stmt=mysqli_query($link, "UPDATE users SET firstname='$fname', lastname='$lname', bio='$bio', pro='$pro', location='$location', website='$website', status='$phone', phone='$number' WHERE username='$user'");


$stt=mysqli_query($link, "UPDATE linkupdates SET firstname='$fname', lastname='$lname' WHERE username='$user'");


$st=mysqli_query($link, "UPDATE remarks SET firstname='$fname', lastname='$lname' WHERE username='$user'");


$s=mysqli_query($link, "UPDATE replies SET firstname='$fname', lastname='$lname' WHERE username='$user'");

if($s){
require_once 'database.php';

$bio=mysqli_query($link, "SELECT * FROM users WHERE username='$user'");	
$row=mysqli_fetch_array($bio);	


echo'<ul class="twit" role="navigation">';
	echo'<li>';
	echo'<span class="login100-form-avatar">';


	if($row["profilepic"] != "")
	
	{ echo'<a href="'; echo $row["profilepic"]; echo'">';
		echo'<img src="'; echo $row["profilepic"]; echo'" alt="AVATAR">';
	echo'</a></span></li></ul>';}else{
	
	
	
	
				if($row['gender'] == "male"){
	
	echo'<span class="login100-form-avatar">
	<img src="gender/male.jpg" alt="AVATAR">	
</span><br>';echo'</ul></li>';}else{
	
	
	echo'<span class="login100-form-avatar">
	<img src="gender/female.jpg" alt="AVATAR">	
</span>';echo'</ul></li>';}

}

			

			
				echo'
				
			
				<p><font color="#57b846"> <p>First name</font></p>
				                        	
				                        	<textarea placeholder="'; echo$row['firstname']; echo'" name="fname">';
											echo$row['firstname'];
											
											echo'</textarea>';
			
			
			
				echo'<p><font color="#57b846"> <p>Last name</font></p>
				                        	
				                        	<textarea placeholder="'; echo$row['lastname']; echo'" name="lname">';
											echo$row['lastname'];
											
											echo'</textarea>';
			
			
										echo'<p><font color="#57b846"> <p>Bio</font></p>
				                        	
				                        	<textarea placeholder="'; echo$row['bio']; echo'" name="bio">';
											echo$row['bio'];
											
											echo'</textarea>';

				                        
										
										echo'<p><font color="#57b846"> <p>Profession/skill</font></p>
				                        	
				                        	<textarea placeholder="'; echo$row['pro']; echo'" name="pro">';
											echo$row['pro'];
											
											echo'</textarea>';

				                      
										
										echo'<p><font color="#57b846"> <p>Location</font></p>
				                        	
				                        	<textarea placeholder="'; echo$row['location']; echo'" name="location">';
											echo$row['location'];
											
											echo'</textarea>';

				                       
								echo'<p><font color="#57b846"> <p>phone-no</font></p>';
				                      
		echo'<textarea placeholder="'; echo'" name="number"  required="required">';
											echo$row['phone'];
											
											echo'</textarea>';
										
													
									
										echo'<p><font color="#57b846"> <p>Website</font></p>
				                        	
				                        	<textarea placeholder="'; echo$row['website']; echo'" name="website">';
											echo$row['website'];
											
											echo'</textarea>';

				               
										
										
										

				                        
 }	
   
   //}
	
	
}



		 }else{echo'<h4><font color="red"> Please fill up your bio data form.
		 </font></h4>';}

		 
		 
					}else{header('location: testt.php');
exit();}
	
	if(empty($pro && $location && $bio && $website)){
echo'<h4>
<font color="red"> Please fill up your bio data form. </font></h4>';
}	
	
	
//}else{echo'<h4>
//<font color="red"> Please fill up your bio data form. </font></h4>';}



?>


 </fieldset>
		</form>	                    
				
  <main>
  
  <ul class="links" role="navigation">

    <!--<li class="twitter__bird"><i class="fa fa-twitter"></i></li>-->
     <li><button><h4>Linksxup</h4></button></li>
	 <form action="timeline.php">
	<li><button>+<i class="fa fa-pencil"></i></button></li>
  </form>
  </ul>
  
  </main>
				
	

    <script  src="js/index.js"></script>

<style>

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
    position: ;
}

.twitter {
    display: flex;
}

input[type="number"] {
  
	display:flex;
    width: 600px;
    margin: 0px auto;
    border: 1px solid #ee;
    border-radius: 5px;
    height: 30px;
	border-color: #57b846;
}


.text button {
  font-size: 1.3em;
  border: 0;
  background: #57b846;
  color: #fff;
  border-radius: 100px;
   cursor: pointer;
}



textarea{
height: 100px;
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
  display: flex;
  
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


input[type="number"] {
  
	display:flex;
    width: 250px;
    margin: 0px auto;
    border: 1px solid #ee;
    border-radius: 5px;
    height: 30px;
	border-color: #57b846;
}





.text button {
  font-size: 23px;
  border: 0;
  background: #57b846;
  color: #fff;
  border-radius: 100px;
  display: none;
  
}


textarea{

	 display: flex;
	max-width: 20em;
	min-width: 20em;
   min-height: 5em;
   max-height:5em;
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
	 max-height: 2000px;
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