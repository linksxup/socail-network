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
						
						$bio= addslashes(strip_tags(htmlspecialchars($_POST['bio'])));
						$pro= addslashes(strip_tags(htmlspecialchars($_POST['pro'])));
						$location= addslashes(strip_tags(htmlspecialchars($_POST['location'])));
						$website= addslashes(strip_tags(htmlspecialchars($_POST['website'])));
						
						
		
						
						$file = $_FILES['file-1'];
						$filename = $_FILES['file-1']['name'];
						
					if(!empty($filename[0])){
						
						
						$file = $_FILES['file-1'];
		 
	$filename = $_FILES['file-1']['name'];
	
	$file_error = $_FILES['file-1']['error'];
	
	$file_size = $_FILES['file-1']['size'];

		
	$file_tmplocation = $_FILES['file-1']['tmp_name'];
	$fil = $_FILES["file-1"]["type"];
	
	$count=count($fil);
	//print_r($count);
	//print_r($_FILES['file-1']['tmp_name']);
	if($count <=1){
	
		for($j=0; $j<$count; ++$j) 
		 
		 {
	
						$bio= strip_tags(htmlspecialchars($_POST['bio']));
						$pro= strip_tags(htmlspecialchars($_POST['pro']));
						$location= strip_tags(htmlspecialchars($_POST['location']));
						$website= strip_tags(htmlspecialchars($_POST['website']));
						
	
	 $file = $_FILES['file-1'];
		 
	$filename = $_FILES['file-1']['name'];
	
	$file_error = $_FILES['file-1']['error'];
	
	$file_size = $_FILES['file-1']['size'];
	
	$file_tmplocation = $_FILES['file-1']['tmp_name'];
	
	$file_type = $_FILES["file-1"]["type"];
	
	$fileext = explode('.',$filename[$j]);
	$fileactualext = strtolower(end($fileext));
	

	//print_r($filename[0]);
	
	

	// for image file extension for now
	
	$allowedimage= array('image/jpg','image/jpeg','image/png','image/gif','image/webp','image/tiff','image/psd','image/raw','image/bmp','image/heif','image/indd','image/svg','image/ai','image/eps');

	
	

	
	//for($j=0; $j<$count; ++$j)
	//{
	//print_r($file_type);
	//print_r($ext[$j]);
	//print_r($file_error);
					//$a="image/jpeg";
					//$b="image/jpeg";
					if(in_array($file_type[0],$allowedimage)){//echo"They're thesame";
					
					
					
					
					
		if($file_error[$j] == 0){
			if($file_size[$j] > 11485760){echo'<fieldset><h4>
<font color="red">image size too large. maximum allowable image size is 10mb</font></h4></fieldset>';
			}if($file_size[$j] < 11485760){
	$label='linksxup';

		 $uniqueid = uniqid('', true);
	$filenewname = $label.uniqid('', true).'.'.$fileactualext;
	$filedestination= "https://storage.googleapis.com/linksxup.appspot.com/$filenewname";
	
	$filedestinationreal= "linksxup.appspot.com";
	//For condition of same name existence $filedestination= "linkupdates/images".$filenewname;
	
	putenv("GOOGLE_APPLICATION_CREDENTIALS=linksxup-launch-1b3a355e45e5.json");
   
    $storage= new Storage();

	$upload = upload_object($filedestinationreal, $filenewname, $file_tmplocation[$j]);
	
   //if($upload==true){

$stmt=mysqli_query($link, "UPDATE users SET bio='$bio', pro='$pro', location='$location', website='$website', profilepic='$filedestination' WHERE username='$user'");

if($stmt){header('location: testt.php');
exit();}	
	 
  // }else{echo"Didn't work oooo";}
	
	}
}


//else{// perform operation of authentication and uploading file into database as written/described in my pseudo book...... }
		}else{echo"<fieldset><h4>
<font-color='red'>image type not supported</font></h4></fieldset>";}
						
						
					}
					
		 }
		 
		 
	}else{
						
						require_once 'database.php';


	
$stmt=mysqli_query($link, "UPDATE users SET bio='$bio', pro='$pro', location='$location', website='$website' WHERE username='$user'");	

if($stmt){header('location: testt.php');
exit();}
	  	   
   }
	
	if(empty($pro && $location && $bio && $website)){
echo'<fieldset><h4>
<font color="red"> Please fill up your bio data form. </font></h4></fieldset>';
}


}else{header('location: log in.html');
exit();}
?>