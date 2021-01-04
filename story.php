<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Slide Stories</title>
    <link rel="stylesheet" href="./story.css">
	
	<link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>

	<script>
		
		  $(document).ready(function(){
		  
		    $(".fa-arrow-left").click(function(){
			
		
			window.history.go(-1);
	
      });
	  
	  //////////////
		 
	   });
	  
	
	</script>
</head>


<div id="load_1">

</div>

<?php
if(isset($_COOKIE['username']))
{$user=$_COOKIE['username'];}
else{
		setcookie("username","$user", time() - 1);
		setcookie("untoken","$untoken", time() - 1);
		header("location: log in.html");
        exit();
		}
 
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

?>


<body>

<?php
$que = "SELECT * FROM moment1";
$moment = mysqli_query($link, $que);

while($mom = mysqli_fetch_array($moment)) {
 
 //Delete medias if more than 24 hour old...
				$time="$mom[time]";
				$date=date('Y-m-d H:i:s');
				
		
		 $date1=date_create("$time");
		 $date2=date_create("$date");
		 $diff=date_diff($date1, $date2);
 	if($diff->format("%a") >= 1)
	{

$stmt=mysqli_query($link, "DELETE FROM moment1 WHERE time='$time'");

	}
	
}

		//Check if the present username in moment1 has data in moment2 else delete such 
	//username from moment2.
	require'database.php';
	
	$q = "SELECT * FROM moment2";
$m = mysqli_query($link, $q);

if(mysqli_num_rows($m) < 1)
{
	
$stmt=mysqli_query($link, "DELETE FROM moment1 WHERE username='$name'");
	
	
}
	


while($mo = mysqli_fetch_array($m)) {
 
 //Delete medias if more than 24 hour old...
				$tim="$mo[time]";
				$date=date('Y-m-d H:i:s');
				
		
		 $date1=date_create("$tim");
		 $date2=date_create("$date");
		 $diff=date_diff($date1, $date2);
 	if($diff->format("%a") >= 1 && $mo["url"] != '')
	{

	$first = explode('/',$mo["url"]);
				$objectName = end($first);
				$bucketName = "imagez";
				putenv("GOOGLE_APPLICATION_CREDENTIALS=linksxup-launch-1b3a355e45e5.json");
				
				$deleted = delete_object($bucketName, $objectName);
						


$stmt=mysqli_query($link, "DELETE FROM moment2 WHERE time='$tim'");

	}//else if url is empty which implies its a text moment
	elseif($diff->format("%a") >= 1 && $mo["url"] == '')
	{
	

$stmt=mysqli_query($link, "DELETE FROM moment2 WHERE time='$tim'");
	
		
	}

}















$name=$_GET["un"];

require'database.php';
$que="SELECT * FROM users WHERE username='$name'";

		$resu= mysqli_query($link, $que);
		$row= mysqli_fetch_array($resu);
		
	
	   echo' <div data-slide="slide" class="slide">
	<ul class="twi" role="navigation">
		
	<i class="fa fa-arrow-left"></i>
&nbsp
	<span class="login400-form-avatar">';
	
	
		if($row["profilepic"] != "")
	
	{
		echo'<img src="'; echo $row["profilepic"]; echo'" alt="AVATAR">';
	echo'</span>';}else{if($row["gender"] == "male")
		{echo'<img src="';echo'gender/male.jpg'; echo'" alt="AVATAR">';
	echo'</span>';}else{
		echo'<img src="';echo'gender/female.jpg'; echo'" alt="AVATAR">';
	echo'</span>';}}
	echo'&nbsp';
	
	if($row["verification"] == 'verified')
	{echo'<span class="login30-form-avatar">

	<img src="verified.jpeg" alt="AVATAR"> 
	</span>';}
	
			
echo"&nbsp
	<a href='info.php?un=$name'><b><font color='#fff'>";
	echo substr("$row[firstname]","0", "5"); 
	echo'&nbsp'; echo substr("$row[lastname]","0", "5"); echo"</font></b><br>@$name</a>
   <br><br>
   
   
   </ul>";
	
        echo'<div class="slide-items">';
		
		///////////////
		
			//stories
$q="SELECT * FROM moment2 WHERE username='$name' ORDER  BY TIME ASC";

		$re= mysqli_query($link, $q);
		while($ro= mysqli_fetch_array($re))
		{
			if($ro["file_type"] == 'text')
			{
		
			echo'<div class="caption">
            <img src="./story/'; echo rand(1,5); echo'.png" alt="background">
			
			<div id="mi">
		
			<div class="postWraper"><font color="#fff">';

			
			
			
			
			
					  
$reg_exUrl = "/(http|https|ftp|ftps)\:\/\/[a-zA-Z0-9\-\.]+\.[a-zA-Z]{2,3}(\/\S*)?/"; //
$reg_exUr="/#+([a-zA-Z0-9_]+)/";//for hash tags
$reg_exU="/(#)[a-z A-Z0-9.]+[A-Za-z.]+(#)/i";//for letter boldness
$reg="/@+([a-zA-Z0-9-]+)/";//for username reference


 $half= substr("$ro[caption]","0", "400");



  if(preg_match($reg, $half, $url)){ // Username @ tag..

 echo preg_replace($reg, "<a href='/info.php?un=$1'><font color='57b846'>$0</font></a>", nl2br($half));  echo '</br>';
 
 }
 
   /////////////
 elseif(preg_match($reg_exU, $half, $url)){ // for text boldness

 echo preg_replace($reg_exU, "<b>$0</b>", nl2br($half)); echo '</br>';
 
 }
 
  ///////////////
 elseif(preg_match($reg_exUr, $half, $url) ){ // For Hashtag recognition
 
 echo preg_replace($reg_exUr, "<a href='/hashtags.php?query=$1'><font color='57b846'>$0</font></a>", nl2br($half));  echo '</br>';
 
 }
 
/////////////////
  elseif(preg_match($reg_exUrl, $half, $url)) { // make the urls hyper links

 echo preg_replace($reg_exUrl, "<a href='$0'><font color='57b846'>$0</font></a>", $half);  echo '</br>';
 
 }






 else { // if no urls in the text just return the text
  echo nl2br(substr("$ro[caption]","0", "400"));}
				
			
			
			
			
			
			
			
			
			
			echo'</font>
</div>

	</div>
			
			<div id="m">
<div class="postWraper">';

 echo'<b><h6>';
 

 echo'<font color="#fff">';  echo substr("$ro[time]","10", "400");  
 echo'</font>';

 if($user == $name)
 {echo'&nbsp <a href="delete.php?uniqueid='; echo$ro["uniqueid"]; echo'&status=textmoment">';
 echo'<font color="#fff"><i class="fa fa-trash-o"></i></font></a>';}
   
if($user == $name)   
{echo'&nbsp <a href="viewers.php?uniqueid='; echo$ro["uniqueid"]; echo'">
<font color="#fff">';

if($ro["viewers"] != '')
{print_r(count(unserialize($ro["viewers"])));}

 echo'<i class="fa fa-eye"></i></font></a>';}
   
  echo' </h6>
   </b>';

echo'</div>  
 </div>
			
			</div>';
			
		}
		
	else{
			
			echo'<div class="caption">
           <img src="'; echo$ro["url"]; echo'" alt="moments">';
			
			echo'<div id="m">
<div class="postWraper">';



			
			if($ro["caption"] != '')
			{ echo'<font color="#fff">';

$reg_exUrl = "/(http|https|ftp|ftps)\:\/\/[a-zA-Z0-9\-\.]+\.[a-zA-Z]{2,3}(\/\S*)?/"; //
$reg_exUr="/#+([a-zA-Z0-9_]+)/";//for hash tags
$reg_exU="/(#)[a-z A-Z0-9.]+[A-Za-z.]+(#)/i";//for letter boldness
$reg="/@+([a-zA-Z0-9-]+)/";//for username reference


 $half= substr("$ro[caption]","0", "400");



  if(preg_match($reg, $half, $url)){ // Username @ tag..

 echo preg_replace($reg, "<a href='/info.php?un=$1'><font color='57b846'>$0</font></a>", nl2br($half));  echo '</br>';
 
 }
 
   /////////////
 elseif(preg_match($reg_exU, $half, $url)){ // for text boldness

 echo preg_replace($reg_exU, "<b>$0</b>", nl2br($half)); echo '</br>';
 
 }
 
  ///////////////
 elseif(preg_match($reg_exUr, $half, $url) ){ // For Hashtag recognition
 
 echo preg_replace($reg_exUr, "<a href='/hashtags.php?query=$1'><font color='57b846'>$0</font></a>", nl2br($half));  echo '</br>';
 
 }
 
/////////////////
  elseif(preg_match($reg_exUrl, $half, $url)) { // make the urls hyper links

 echo preg_replace($reg_exUrl, "<a href='$0'><font color='57b846'>$0</font></a>", nl2br($half));  echo '</br>';
 
 }






 else { // if no urls in the text just return the text
  echo nl2br(substr("$ro[caption]","0", "400"));}
			



		echo'</font>';}

   
    echo'<b><h6>';
 
 echo'<font color="#fff">';  echo substr("$ro[time]","10", "400");  
 echo'</font>';

 if($user == $name)
 {echo'&nbsp <a href="delete.php?uniqueid='; echo$ro["uniqueid"]; echo'&status=imagemoment">';
 echo'<font color="#fff"><i class="fa fa-trash-o"></i></font></a>';}
   
if($user == $name)   
{echo'&nbsp <a href="viewers.php?uniqueid='; echo$ro["uniqueid"]; echo'">
<font color="#fff">';


if($ro["viewers"] != '')
{print_r(count(unserialize($ro["viewers"])));}




echo'<i class="fa fa-eye"></i></font></a>';}
   
  echo' </h6>
   </b>';
   
   
echo'</div>  
 </div>
			
			</div>';

		}			
		
		
		
			
			
		}	
			
		//////////////	
		echo'</div>
        <div class="slide-nav">
        <div class="slide-thumbs"></div>
			
			
			
			
            <button class="slide-prev">Previous</button>
            <button class="slide-next">Next</button>
        </div>

    </div>';
	
	if($user != $name)
	{
		$name=$_GET["un"];

	
require'database.php';
$qu="SELECT * FROM moment2 WHERE username='$name'";

		$res= mysqli_query($link, $qu);
		
if(mysqli_num_rows($res) > 0)
{
	$re=mysqli_fetch_array($res);
	
	if($re["viewers"] == '')
	{
		
	$u[]="$user";
				$likess=serialize($u);
		
		$querry = "UPDATE moment2 SET viewers='$likess' WHERE username='$name'";
			$res = mysqli_query($link, $querry);
				
		
	}else{
		
			$u=unserialize($re['viewers']);
		if(in_array($user,$u)){}
		else{$u[]="$user";
				$likess=serialize($u);
		
		$querry = "UPDATE moment2 SET viewers='$likess' WHERE username='$name'";
			$res = mysqli_query($link, $querry);
		}	
		
	}
	
}	
		
	}
  	
?>


	
	<style>

	a{
  color: #57b846;
  text-decoration: none;
  
}
	
	
	
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
	align-items: center;
}
	
	.twi {
	z-index:1111;
     height: 50px;
    align-items: center;
    padding: 110 110px;
color: rgba(117,117,117 ,1);
    box-shadow: 5px 10px 20px -20px rgba(85,172,238 ,1);

     position: fixed;
    top: 5px;
	min-width: 100px;
	max-width: 600px;
	  margin-left: 5px;
    margin-right: 1px;
	}

.twi li {
    cursor: pointer;
    margin-left: auto;
    margin-right: auto;
    font-size: 15px;
	  padding: 20 20px;
}

.twi {
    display: flex;
}



.twi li a {
    text-decoration: none;
    color: #57b846;
}



.login30-form-avatar {
    display: flex;
    width: 15px;
    height: 15px;
    border-radius: 100%;
    border-line: 5px;
    border-color: #57b846;
    overflow: hidden;
    margin-left: 0px;
    margin-top: 0px;
    margin-bottom: 0px;
}
.login400-form-avatar img {
    width: 100%;
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
    align-items: center;
}
	
	
	
#m{
align-items: center;
    z-index: 9999;
    min-width: auto;
    position: fixed;
    bottom: 0px;
    display: flex;
margin-left: auto;
    margin-right: auto;
   display: flex;
opacity: 1;
padding: 10px 10px;
}



#mi{
align-items: center;
    z-index: 9999;
    min-width: auto;
    position: fixed;
    bottom: 50%;
    display: flex;
  display: flex;
opacity: 1;
padding: ;

margin-left: auto;
    margin-right: 30%;

}




@media(max-width: 767px)	
{
#mi{
align-items: center;
    z-index: 9999;
    min-width: auto;
    position: fixed;
    bottom: 50%;
    display: flex;
margin-left:10% ;
    margin-right: 10%;
   display: flex;
opacity: 1;
padding: ;


}
}

	</style>
	



	
	<style>

	
body {
  display: flex;
  justify-content: center;
  align-items: center;
  min-height: 100%;

  margin-right: auto;
  margin-left: auto;
  
}

	
	
	a{
  color: #57b846;
  text-decoration: none;
  
}
	
	
	
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
	align-items: center;
}
	
	.twi {
	z-index:1111;
     height: 50px;
    align-items: center;
    padding: 110 110px;
color: rgba(117,117,117 ,1);
    box-shadow: 5px 10px 20px -20px rgba(85,172,238 ,1);

     position: fixed;
    top: 5px;
	min-width: 100px;
	max-width: 600px;
	  margin-left: 5px;
    margin-right: 1px;
	}

.twi li {
    cursor: pointer;
    margin-left: auto;
    margin-right: auto;
    font-size: 15px;
	  padding: 20 20px;
}

.twi {
    display: flex;
}



.twi li a {
    text-decoration: none;
    color: #57b846;
}



.login30-form-avatar {
    display: flex;
    width: 15px;
    height: 15px;
    border-radius: 100%;
    border-line: 5px;
    border-color: #57b846;
    overflow: hidden;
    margin-left: 0px;
    margin-top: 0px;
    margin-bottom: 0px;
}
.login400-form-avatar img {
    width: 100%;
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
    align-items: center;
}
	
	
	
#m{
align-items: center;
    z-index: 9999;
    min-width: auto;
    position: fixed;
    bottom: 0px;
    display: flex;
margin-left: auto;
    margin-right: auto;
   display: flex;
opacity: 1;
padding: 10px 10px;
}





@media(max-width: 767px)	
{
	
	body {
  display: flex;
  justify-content: center;
  align-items: center;
  min-height: 100%;

  margin-right: auto;
  margin-left: auto;
  
}
	
	
#mi{
align-items: center;
    z-index: 9999;
    min-width: auto;
    position: fixed;
    bottom: 50%;
    display: flex;
  display: flex;
opacity: 1;
padding: ;


}
}

	</style>
	


    <script src="./slide-stories.js"></script>
</body>

</html>