
<!DOCTYPE html>
<html>
    <head>
        <title>search linksxup</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		    <link rel="shortcut icon" href="icon.png"/>
			
		
	


	<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-117749332-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-117749332-1');
</script>


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
		
		
    </head>
	<body>
	
	

<style type="text/css">
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
    height: 70px;
    align-items: center;
    padding: 110 110px;
    border: 1px solid rgba(238,238,238 ,1);
    border-radius: 5px;
    color: rgba(117,117,117 ,1);
    /* box-shadow: 5px 10px 20px -20px rgba(85,172,238 ,1); */
    min-width: 200px;
    position: ;
}


a:hover {
    text-decoration: none;
    color: #57b846;
}
		</style>

		
			
	
		 		 
     <script>

	
	
      $(document).ready(function(){

		    // like and unlike click
    $(".fa-comment, .fa-heart, .fa-star").click(function(){
        var id = this.id;   // Getting Button id
        var split_id = id.split("_");

        var text = split_id[0];
        var postid = split_id[1];  // postid
		  
	if(text == "like"){
		  
        // Set trigger and container variables
        var trigger = $(".fa fa-heart, .fa fa-star"),
            container = $("#cont_"+postid);
			


			
			
          // Set $this for re-use. Set target from data attribute
          var $this = $(this),
            target = $this.data('target');       
          
          // Load target page into container
          container.load(target);
          
          // Stop normal link behavior
          return false;
        
		
		
		
    }else{
		  // Set $this for re-use. Set target from data attribute
          var $this = $(this),
            target = $this.data('target');       
          window.location.assign("remark.php?"+postid);
		
		
	}
	
	
	
	
	
      });
	  
	 
	  });
    </script>
	





	 <?php
	 
	 
	 
	 
	 			if(isset($_COOKIE['darkmode'])){
	
	  echo"<script>
	  $(document).ready(function(){

$('body').css('background-color','#333');
$('fieldset').css('background-color','#121212');
$('.postWraper a').css('color','#fff');
$('nav').css('background','#333');
$('name').css('background','#333');
$('.twit li b').css('color','#fff');
$('table.table tr td').css('background-bcolor','#121212');
$('table.table tr td').css('color','#fff');
$('h6').css('color','#fff');
$('b').css('color','#fff');

$('.postWraper').css('color','#fff');
	  });
	  
    </script>";
								}
	 
	 
	 
	 
	 
	 
	 
	 
	 
	  echo' <script>

	
	
      $(document).ready(function(){

		    // like and unlike click
    $(".fa-link").click(function(){
        var id = this.id;   // Getting Button id
        var split_id = id.split("_");

        var text = split_id[0];
        var postid = split_id[1];  // postid
		  
	if(text == "like"){
		  
        // Set trigger and container variables
        var trigger = $(".fa fa-link"),
            container = $("#cont_"+postid);
			


			
			
          // Set $this for re-use. Set target from data attribute
          var $this = $(this),
            target = $this.data("target");       
          
          // Load target page into container
          container.load(target);
          
          // Stop normal link behavior
          return false;
        
		
		
		
    }else{
		  // Set $this for re-use. Set target from data attribute
          var $this = $(this),
            target = $this.data("target");       
          window.location.assign("remark.php?"+postid);
		
		
	}
	
	
	
	
	
      });
	  
	 
	  });
    </script>';

	 
	 
	 
	 
	 
	 
	 
	 
	 
	 echo'<form>';
	 
	if(isset($_GET['query'])){
		
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
	
require_once 'database.php';

$user=$_COOKIE['username'];
if(isset($user)){
	
	$limit= "20";
	


	$search = mysqli_real_escape_string($link, $_GET["query"]);
	$query = "
	SELECT * FROM users 
	WHERE username LIKE '%".$search."%'
	OR lastname LIKE '%".$search."%'
	OR firstname LIKE '%".$search."%'
	OR phone LIKE '%".$search."%' 
	OR pro LIKE '%".$search."%' 
	OR location LIKE '%".$search."%'
	OR gender LIKE '%".$search."%'
	
	ORDER BY verification DESC, Linkups DESC LIMIT $limit OFFSET 0;
	";
	
	
		
		
		$result = mysqli_query($link, $query);





if(mysqli_num_rows($result) > 0 )
{

	while($row = mysqli_fetch_array($result))
	{
	
	echo'<fieldset>';
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
	<a/>
	</li>'; if($row["verification"] == "verified" ){echo'<span class="login10-form-avatar">
	<img src="verified.jpeg" alt="AVATAR"> 
	</span>';}
 
     echo'<li><a href="info.php?un='; echo $row["username"]; echo'"><b>'; 
	 


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


	 
	 echo'<br/>';
	 
	 	
	echo' </a></li>
    ';
	
	
	$a=mysqli_query($link, "SELECT * FROM users WHERE username='$user'");	
$c=mysqli_fetch_array($a);
		
	

$u=unserialize($c['linkups']);

if(in_array($row["username"],$u)){}
else{
	echo'<li> <br><div id="cont_'; echo $row["username"]; echo'">
	<button class= "fa fa-link" data-target="linkup.php?un=';echo $row["username"]; echo"&status=linkup"; echo'" id="like_'; echo$row["username"]; echo'"> Link up</button>
	</div>
	
	</br></li> ';
}

  echo'</ul>';
  if(!empty($row["pro"])){
  echo'<ul class="twit" role="navigation">
	<li> <b>Skill/pro:</b>&nbsp'; echo substr("$row[pro]","0", "30"); echo'</br></h5>
						</li>
	</ul>';

	 if(!empty($row["bio"])){
  echo'<ul class="twit">
	<li>&nbsp'; echo substr("$row[bio]","0", "50"); echo'.....</br></h5>
						</li>
	</ul>';}
	}
	
  echo'</fieldset>';
	

	}
	

}




else
{
	echo '<fieldset><font color="red">No search result Found</font></fieldset>';
	
}
		
	}
	
	}else{		echo'<fieldset>'; 

	echo'<ul class="twit" role="navigation">';
	echo'<li>';
	
	echo'<a href="log in.html"><h4>Log in</h4></button></a>';

	echo'</li>';

	echo'<li>';
	echo'<a href="sign up.html"><h4>Sign up</h4></a>';

	echo'</li>';
	echo'</ul>';
	echo'</fieldset>';
	}
	
	
	}else{	
		
		require'database.php';
		
		if(isset($_COOKIE['username']))
		{$user=$_COOKIE['username'];}
	
		
if(isset($user)){
		$query = "SELECT * FROM users  WHERE username='$user';";
		
		
$result = mysqli_query($link, $query);
	
$row = mysqli_fetch_array($result);	
	
	echo'<fieldset>';
	
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

	
   echo '<li><a href="mylinkups.php"><b>'; echo'<h4>My linkups</h4>'; echo'</a></li>
   <br><br><h6>';
   
   echo'</ul></li>';
	
	echo'</fieldset>';
	
}else{
			echo'<fieldset>'; 

	echo'<ul class="twit" role="navigation">';
	echo'<li>';
	
	echo'<a href="log in.html"><h4>Log in</h4></button></a>';

	echo'</li>';
	
	
	echo'<li>';
	
	echo'<a href="sign up.html"><h4>Sign up</h4></a>';

	echo'</li>';

	echo'</ul>';
	echo'</fieldset>';
	
	
}
	
	
	//}
	
	/////////
	
	

	
	
	/////////
	echo'<fieldset>'; 
echo'<ul class="twit" role="navigation">';
	echo'<li>';
	echo'<p align= "center">
	
	<a href="explore.php?query=text"> <i class="fa fa-pencil"></i></a>
	
	
	&nbsp<a href="explore.php?query=video"> <i class="fa fa-play-circle"></i></a>
	
	&nbsp <a href="explore.php?query=audio"> <i class="fa fa-music"></i></a>
	
	&nbsp <a href="explore.php?query=pdf"> <i class="fa fa-file"></i></a>
	
	
	</p></li></ul>';
	
	
	echo'<ul class="twit" role="navigation">';
	echo'<li>';
	
	echo'<a href="featured.php"> <i class="fa fa-search"></i> &nbsp search linkupdates </a>';

	echo'</li>';
	echo'</ul>';
	
	 
	
	echo"&nbsp<a href='/awards.php'><font color='57b846'>Top awards</font> <font color='gold'><i class='fa fa-star'></i></font></a>";

	echo'<hr>';
	
	echo'Linkupdates';
	
	echo'<div class="postWraper">';
	
	echo"<a href='hashtags.php?query=business'><font color='57b846'>#Business</font></a> &nbsp";
	
	
	echo"<a href='hashtags.php?query=career'><font color='57b846'>#Career</font></a> &nbsp";
	
	echo"<a href='hashtags.php?query=celebration'><font color='57b846'>#Celebration</font></a> &nbsp";
	
	echo"<a href='hashtags.php?query=education'><font color='57b846'>#Education</font></a> &nbsp";
	
	echo"<a href='hashtags.php?query=entertainment'><font color='57b846'>#Entertainment</font></a> &nbsp";
	
	echo"<a href='hashtags.php?query=fashion'><font color='57b846'>#Fashion</font></a> &nbsp";
	
	echo"<a href='hashtags.php?query=food'><font color='57b846'>#Food</font></a> &nbsp";
	
	echo"<a href='hashtags.php?query=gaming'><font color='57b846'>#Gaming</font></a> &nbsp";
	
	
	echo"<a href='hashtags.php?query=information'><font color='57b846'>#Information</font></a> &nbsp";
	
	echo"<a href='hashtags.php?query=job'><font color='57b846'>#Jobs</font></a> &nbsp";
	
	
	
	echo"<a href='hashtags.php?query=music'><font color='57b846'>#Music</font></a> &nbsp";
	
	echo"<a href='hashtags.php?query=movie'><font color='57b846'>#Movies</font></a> &nbsp";
	
	
	echo"<a href='hashtags.php?query=news'><font color='57b846'>#News</font></a> &nbsp";
	
	echo"<a href='hashtags.php?query=politics'><font color='57b846'>#Politics</font></a> &nbsp";
	
	echo"<a href='hashtags.php?query=QA'><font color='57b846'>#QA</font></a> &nbsp";
	
	
	echo"<a href='hashtags.php?query=relationship'><font color='57b846'>#Relationship</font></a> &nbsp";
	
	
	echo"<a href='hashtags.php?query=religion'><font color='57b846'>#Religion</font></a> &nbsp";
	
	echo"<a href='hashtags.php?query=sports'><font color='57b846'>#Sports</font></a> &nbsp";
	
	echo"<a href='hashtags.php?query=tech'><font color='57b846'>#Tech</font></a> &nbsp";
	
	echo"<a href='hashtags.php?query=travel'><font color='57b846'>#Travel</font></a>&nbsp";
	echo'</div>';
	
	echo'</fieldset>';
	
	
	
	echo"<fieldset>";
			echo"<font color='#57b846'>Linkup suggestion</font>
			
			<table class='table table-striped table-hover'>

                <tbody>";	
		require'database.php';
	
		$quer = "SELECT * FROM users  WHERE username='$user';";

$fetch = mysqli_query($link, $quer);
	
$data = mysqli_fetch_array($fetch);	
	if(!empty($data['linkups'])){$u=unserialize($data['linkups']);}else{$u= array();}
	
		require'database.php';
	
		$que = "SELECT * FROM users ORDER  BY RAND()  LIMIT 5 OFFSET 0;";

$fetc = mysqli_query($link, $que);

				while($dat = mysqli_fetch_array($fetc)){
					if(!in_array($dat["username"], $u)){
					if($dat['username'] != $user){
                    echo"<tr>
					
					<td>";
					
					if($dat["profilepic"] != "")
	{
	echo'<a href="'; echo $dat["profilepic"]; echo'">
	<span class="login100-form-avatar">';}else{ echo'
	<span class="login100-form-avatar">';}
	
	if($dat["profilepic"] != "")
	{
	echo'<img src="'; echo $dat["profilepic"]; 


	}else{
		if($dat["gender"] == "male")
		{echo'<img src="';echo'gender/male.jpg';}else{
		echo'<img src="';echo'gender/female.jpg';
	
	}
	}
	
	echo'"alt="AVATAR"> 
	</span>
	<a/>
	
	</td>
                        <td>';
						echo"<a href='info.php?un="; echo$dat['username']; echo"'><h5><br>"; 




 if (strlen($dat['firstname']) < 7){
							  
							  echo $dat['firstname']; 
							  
							  }else{	  echo substr("$dat[firstname]","0", "6"); echo'..';}




						echo"</br></h5>
						<h5><br>Un@"; 

				   if (strlen($dat['username']) < 6){
							  
							  echo $dat['username']; 
							  
							  }else{	  echo substr("$dat[username]","0", "5"); echo'..';}


						echo"</br></h5></a>
						</td>";
						
						 echo"<td><br><i class='fa fa-map-marker' placeholder='location'></i></br>
						<h5><br>";

if (strlen($dat['location']) < 6){
  
  echo $dat['location']; 
  
  }else{	  echo substr("$dat[location]","0", "5"); echo'..';}

  echo"</br></h5>
<hr>";
						
						if($dat["username"] != $user){
						echo'<div id="cont_'; echo$dat["username"]; echo'">
	<button class= "fa fa-link" data-target="linkup.php?un='; echo $dat["username"]; echo"&status=linkup"; echo'" id="like_'; echo$dat["username"]; echo'">linkup</button>
					</div>';}
	
	
					echo'</td>
                        <td><h5><br>Skill</br></h5>
						<h5><br>';

									
			if (strlen($dat['pro']) < 6){
			  
			  echo $dat['pro']; 
			  
			  }else{	  echo substr("$dat[pro]","0", "5"); echo'..';}

						echo'</br></h5>
						
						</td>
						
                    </tr>';
					
				
				
		}
		
	
		
				}
	
	
		}

		echo" </tbody>
            </table>
			<hr>
			  <a href='suggestions.php'>see more</a>";
	
	echo"</fieldset>";
				   
echo"

<fieldset>
<p><font color='#57b846'>Featured linkupdates &nbsp<i class='fa fa-arrow-circle-o-down'></i></font></p>
";






$allowed= array('video/avi','video/flv','video/wmv','video/mov','video/mp4','video/webm','video/mkv','video/vob','video/ogv','video/ogg','video/drc','video/gifv','video/mng','video/mpeg','video/svi','video/3gp','video/3g2','video/mxf','video/roq','video/nsv','video/amv','video/asf','audio/3gp','audio/aa','audio/aac','audio/aax','audio/act','audio/aiff','audio/alac','audio/amr','audio/ape','audio/au','audio/awb','audio/dct','audio/dss','audio/dvf','audio/flac','audio/gsm','audio/iklax','audio/ivs','audio/m4a','audio/m4b','audio/m4p','audio/mmf','audio/mp3','audio/mpc','audio/msv','audio/nmf','audio/nsf','audio/ogg','audio/oga','audio/mog','audio/opus','audio/ra','audio/rm','audio/raw','audio/sln','audio/tta','audio/voc','audio/vox','audio/wav','audio/wma','audio/wv','audio/webm','audio/8svx','image/jpg','image/jpeg','image/png','image/gif','image/webp','image/tiff','image/psd','image/raw','image/bmp','image/heif','image/indd','image/svg','image/ai','image/eps');
				
				$allowedimage= array('image/jpg','image/jpeg','image/png','image/gif','image/webp','image/tiff','image/psd','image/raw','image/bmp','image/heif','image/indd','image/svg','image/ai','image/eps');
				
				$allowedvideo= array('video/avi','video/flv','video/wmv','video/mov','video/mp4','video/webm','video/mkv','video/vob','video/ogv','video/ogg','video/drc','video/gifv','video/mng','video/mpeg','video/svi','video/3gp','video/3g2','video/mxf','video/roq','video/nsv','video/amv','video/asf');
				
				$allowedaudio= array('audio/3gp','audio/aa','audio/aac','audio/aax','audio/act','audio/aiff','audio/alac','audio/amr','audio/ape','audio/au','audio/awb','audio/dct','audio/dss','audio/dvf','audio/flac','audio/gsm','audio/iklax','audio/ivs','audio/m4a','audio/m4b','audio/m4p','audio/mmf','audio/mp3','audio/mpc','audio/msv','audio/nmf','audio/nsf','audio/ogg','audio/oga','audio/mog','audio/opus','audio/ra','audio/rm','audio/raw','audio/sln','audio/tta','audio/voc','audio/vox','audio/wav','audio/wma','audio/wv','audio/webm','audio/8svx');
				
				$alloweddocument= array('0','1st','600','602','abw','acl','afp','ami','ans','asc','aww','ccf','csv','cwk','dbk','dita','doc','docm','docx','dot','dotx','dwd','egt','epub','ezw','fdx','ftm','ftx','gdoc','html','hwp','hwpml','hwpml','log','lwp','mbp','md','me','mcw','mobi','nb','nbp','neis','odm','odoc','odt','osheet','ott','omm','pages','pap','pdax','pdf','quox','radix','rtf','rpt','sdw','se','stw','sxw','tex','info','troff','txt','uof','uoml','via','wpd','wps','wpt','wrd','wrf','wri','xhtml','xml','xps');
			
		$query = "SELECT * FROM linkupdates  ORDER  BY VERIFICATION DESC, RAND()  LIMIT 10 OFFSET 0;";
		$query1 = "SELECT * FROM linkupdates  ORDER  BY TIME DESC";
		
		
$result = mysqli_query($link, $query);
$result1=mysqli_query($link, $query1);		

		//echo count($row['caption']);	
		//echo strlen($row['caption']);
		//echo str_word_count($row['caption']);
		//echo substr("$row[caption]","0", "250"); echo'... ';	
		
//if( date('Y-m-d H:i:s') - '2020-4-1 12:3:45' < '1'){echo"The current date is higher";}else{echo"The current date is not higher";}

//echo  date('Y-m-d H:i:s') - '2020-03-06' ;
//print_r('2020-04-1 12:3:45');
	if(mysqli_num_rows($result)>0){
//print_r(mysqli_num_rows($result));

$no = mysqli_num_rows( $result1);
//echo"$no";

		while($row = mysqli_fetch_array($result)){
			
		
	echo'   <form role="form"  class="registration-form">';

 
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
	
   echo '<li><a href="info.php?un=';echo$row['username']; echo'"><b>'; if (strlen($row['firstname']) < 9){
							  
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
 echo'<br/></a></li>
   <br>';  echo'<li>';
   
   
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
  
  echo'<div class="postWraper">';			
			echo'<a href="remarks.php?un='; echo $row['username']; echo'&pid='; echo $row['uniqueid']; echo'" class="postTitle">';
  
  
   if(!empty($row['caption'])){
	  //////////////

 
	  if (strlen($row['caption'])<450){
  
	  
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
  
  
  
  
  
  
 }else{

	
	  
$reg_exUrl = "/(http|https|ftp|ftps)\:\/\/[a-zA-Z0-9\-\.]+\.[a-zA-Z]{2,3}(\/\S*)?/"; //
$reg_exUr="/#+([a-zA-Z0-9_]+)/";//for hash tags
$reg_exU="/(#)[a-z A-Z0-9.]+[A-Za-z.]+(#)/i";//for letter boldness
$reg="/@+([a-zA-Z0-9-]+)/";//for username reference


 $half= substr("$row[caption]","0", "450");



  if(preg_match($reg, $half, $url)){ // Username @ tag..

 echo preg_replace($reg, "<a href='/info.php?un=$1'><font color='57b846'>$0</font></a>", nl2br($half));  echo '</br>';
 
  echo"<font color='54b846'>&nbspsee more....</font> <br>";
 }
 
   /////////////
 elseif(preg_match($reg_exU, $half, $url)){ // for text boldness

 echo preg_replace($reg_exU, "<b>$0</b>", nl2br($half)); echo '</br>';
 
  echo"<font color='54b846'>&nbspsee more....</font> <br>";
 }
 
  ///////////////
 elseif(preg_match($reg_exUr, $half, $url) ){ // For Hashtag recognition
 
 echo preg_replace($reg_exUr, "<a href='/hashtags.php?query=$1'><font color='57b846'>$0</font></a>", nl2br($half));  echo '</br>';
 
 
  echo"<font color='54b846'>&nbspsee more....</font> <br>";
 }
 
/////////////////
  elseif(preg_match($reg_exUrl, $half, $url)) { // make the urls hyper links

 echo preg_replace($reg_exUrl, "<a href='$0'><font color='57b846'>$0</font></a>", nl2br($half));  echo '</br>';
 
  echo"<font color='54b846'>&nbspsee more....</font> <br>";
 }






 else { // if no urls in the text just return the text
  echo nl2br(substr("$row[caption]","0", "450")); echo"<font color='54b846'>&nbspsee more....</font> <br>"; }
	  
	  
	  
  }
  
  
  ////////////
  }
  
   if(!empty($row['file_type'] || $row['url'])){
	   if(in_array($row['file_type'],$allowedvideo)){
		   
		   echo'<span class="loginvideo-form-avatar">';
	echo'<video src="'; echo $row['url']; echo'" alt="AVATAR" controls controlslist="nodownload" type="'; echo $row['file_type']; echo'"/>';
	echo'</span><br>';
	
	if(!empty($row['remarks'])){
			echo'<font color="#57b846">Show this thread</font>';}
		   
	   }
	   
	   if(in_array($row['file_type'],$allowedimage)){
		   
		   echo'<span class="login-form-avatar">';
	echo'<img src="';echo $row['url']; echo'" alt="AVATAR" controls="control">';
	echo'</span>';
		   
	   }
	   
	   
	     if(in_array($row['file_type'],$allowedaudio)){
		   
		   echo'<span class="loginvideo-form-avatar">';
	echo'<audio src="'; echo $row['url']; echo'" alt="AVATAR" controls controlslist="nodownload" type="'; echo $row['file_type']; echo'"align items="center";/>';
	echo'</span><br>';
	
	if(!empty($row['remarks'])){
			echo'<font color="#57b846">Show this thread</font>';}
		   
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
 </div> ';
 
 echo'<br><h6>'; echo$row['time']; echo'</h6></br>';
 

 
 
		}
			
				
			
			
		
	
	
	
	
	

}
	echo"<hr>
			  <a href='featured.php'>Search/see more</a>
			  </fieldset>
</form>";		
			}
			

}


		                   
				
			
	
	?>
	
	
	
	</style> 
  
  
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
  

  .postWraper a{
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
	
	top: 60px;
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






/***** Media queries *****/

@media (min-width: 992px) and (max-width: 1199px) {}

@media (min-width: 768px) and (max-width: 991px) {}

@media (max-width: 767px) {
	
		

    table.table tr th, table.table tr td {
        border-color: #e9e9e9;
		padding: -10em -20em;
		vertical-align: middle;
		top:10px;
    }
	
    table.table td i {
        font-size: 19px;
    }
	
	
	<?php
		if(isset($_COOKIE['darkmode'])){
	echo"	
table.table tr td{

padding: 0em 0em;
min-width: 40px;
max-width: auto;

}";
								}else{
									
echo"table.table tr td{
background-color: #fff;
padding: 0em 0em;
min-width: 40px;
max-width: auto;

}";
								}
	
	

	
	
	?>
	
	
	
	
	
	
	
	
	fieldset{
	

  justify-content: center;
  align-items: center;
   background: #fff;
       border-radius: 5px;
	width: auto;
	 min-width: 60px;
	 max-width: auto;
 padding: 20px 20px;

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


	input[type="text"] {
	width:17em;
	
	border-radius:20px;
	height: 25px;
	border-color:#57b846;
	
	}
	
	.twit li> button:hover {
  cursor: pointer;
   margin-left: auto;
  margin-right: auto;
font-size: 15px;
border-radius: 10px;
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

   top: 160px;
   margin-left: auto;
  margin-right: auto;
  position: relative;
	 display: flex;
	max-width:50em;
	min-width: 20em;
   min-height:30em;
   max-height:50em;
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

	</body>
</html>
