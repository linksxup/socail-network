<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- icons -->
    <link rel="shortcut icon" href="icon.png"/>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    
<?php  



	if(isset($_COOKIE['untoken']) && isset($_COOKIE['username'])){
		 $user=$_COOKIE['username'];
 
		 $untoken=$_COOKIE['untoken'];
		require'database.php';
		
		$query= "SELECT untoken FROM users WHERE username='$user'";	
$next= mysqli_query($link, $query);
$result= mysqli_fetch_array($next);
		
		if($result['untoken'] != $untoken){setcookie("username","$user", time() - 1);
		setcookie("untoken","$untoken", time() - 1);
		header("location: log in.html");
        exit();}
		
	}else{
		//setcookie("username","$user", time() - 1);
		//setcookie("untoken","$untoken", time() - 1);
		header("location: log in.html");
        exit();
		}
 
 
if(isset($user)){
	
	$un=$_GET['un'];
	if(isset($un)){
	echo'
<title>'; echo"$un"; echo'</title>';
}else{
	header("location: testt.php");
	exit();
}
}else{
	header("location: log in.html");
	exit();
}




?>
		
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-117749332-1"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-117749332-1');
  
    $(document).ready(function(){
		  
		    $(".fa-arrow-left").click(function(){
			
		
			window.history.go(-1);
	
      });
	  
	  //////////////
		 
	   });
</script>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>



 <script src="js/jquery-1.12.0.min.js" type="text/javascript"></script>


<script src="js/jquery-3.3.1.js" type="text/javascript"></script>
	  
	     <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
		
<script src="js/jquery-3.3.1.js" type="text/javascript"></script>

 <script src="js/jquery-1.12.0.min.js" type="text/javascript"></script>

	  
	     <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
  
		   <script src="js/clipboard.min.js"></script>

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
	  





  <nav id="nav">
 
   <ul class="twitter" role="navigation">
   <li><i class="fa fa-arrow-left"></i></li>
    
	
   <li><button><?php echo"$un";?>&nbsp account profile</button></li>
  </ul>
   

  

</nav>



   <main id="main">
 
   <ul class="links" role="navigation">

    <!--<li class="twitter__bird"><i class="fa fa-twitter"></i></li>-->
     
	 <form action="timeline.php">
	<li><button>+<i class="fa fa-pencil"></button></i></li>
  </form>
  </ul>
  </main>
  
  


<style type="text/css">
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

.twitter li a{
  color: #57b846;
  text-decoration: none;
  
}
	
	.twitter li a:hover{
  color: #57b846;
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

button{
	
	
    font-size: 0.9em;
  border: 0;
  background: #57b846;
  color: #fff;
  border-radius: 10px;
	
}


</style>



  <script src="js/jquery-3.3.1.js" type="text/javascript"></script>
	  
	     <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
		 
	
		 	<script>
			
			 

	
	
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
    </script>
			
			</script>	 
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
	
	
	
	
	<script>

$(document).ready(function(){

    // Load more data
    $('.liinkk').click(function(){
        var row = Number($('#row').val());
        var allcount = Number($('#all').val());
		var key =($('#key').val());
        row = row + 10;

if(row <= allcount){
            $('#row').val(row);
			$('#key').val(key);
            $.ajax({
				url: 'info2.php',
                type: 'get',
                data: {row: row, key: key},
				
                beforeSend:function(){
                    $('.load-more').text('Loading more linkupdates...');
                },
                success: function(response){

                    // Setting little delay while displaying new content
                    setTimeout(function() {
                        // appending posts after last post with class='post'
                        $('.post:last').after(response).show().fadeIn('slow');

                        var rowno = row + 10;

                        // checking row value is greater than allcount or not
                        if(rowno > allcount){

                            // Change the text and background
                            $('.load-more').text('Hide');
                            $('.load-more').css('display','none');
							$('.liinkkk').css('display','none');
                        }else{
                            $('.load-more').text('Load more');
                        }
                    }, 1000);


                }
            });
        }else{
            $('.load-more').text('Loading...');

            // Setting little delay while removing contents
            setTimeout(function() {

                // When row is greater than allcount then remove all class='post' element after 3 element
                $('.post:nth-child(3)').nextAll('.post').remove().fadeIn('slow');

                // Reset the value of row
                $('#row').val(0);

                // Change the text and background
                $('.load-more').text('Load more');
                $('.load-more').css('background','#15a9ce');

            }, 1000);


        }

    });

});


</script>
</head>
<body>




<form>





<fieldset>





	<?php
 
	
	
	if(isset($_COOKIE['darkmode'])){
	
	  echo"<script>
	  $(document).ready(function(){

$('body').css('background-color','#333');
$('fieldset').css('background-color','#121212');
$('.postWraper a').css('color','#fff');
$('postWraper').css('color','#fff');
$('nav').css('background','#333');
$('main').css('background','#333');
$('.twit li b').css('color','#fff');
$('.liink li b').css('color','#fff');
$('.liink').css('color','#fff');
$('article').css('color','#fff');
$('h6').css('color','#fff');
	  });
	  
    </script>";
	
}


	
	$uname=$_GET["un"];
	

	require'database.php';
	
	$query = "SELECT * FROM users WHERE username= '$uname'";


$result = mysqli_query($link, $query);

$row = mysqli_fetch_array($result);
	
	
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
							  
							  }else{	  echo substr("$row[username]","0", "10"); echo'...';} echo'<br/></a></li>
 ';
   
   
   
  //Check if username does exist
      require'database.php';
	
	$que = "SELECT username FROM users WHERE username= '$_GET[un]'";
	$e=mysqli_query($link,$que);
   $c=mysqli_fetch_row($e);
   if(empty($c)){echo'User not found';}else{
   
    $un=$_GET['un'];
   if($user==$un){
	   
	   echo'
	   <ul class="hmm">
	<i class= "fa fa-pencil" > <a href="edit profile.php"><font color="#FFFFFF"><font color="#ffffff">Edit profile</font></a></i></ul>';
	
	   
   }else{
	   $user=$_COOKIE['username'];
	   
	   require'database.php';
	
	$quer = "SELECT * FROM users WHERE username= '$user'";


$resul = mysqli_query($link, $quer);

$ro = mysqli_fetch_array($resul);
	   if($ro["linkups"] != "")
	   {
	   $u=unserialize($ro['linkups']);
	  
	   if(in_array($uname,$u)){  
	   echo'<ul class="hmm">
	<i class= "fa fa-check">&nbsp Linkedup</i>
	</ul>';}
	   
	   else{
		   if($ro["linkedup"] != ""){ $b=unserialize($ro['linkedup']);}else{$b=array();}
		   
		   if(in_array($uname,$b)){
		   echo'<div id="cont_'; echo$row["username"]; echo'">
	<ul class="hmm">
	<i class= "fa fa-link" data-target="linkup.php?un=';echo $row["username"]; echo"&status=linkup"; echo'" id="like_'; echo$row["username"]; echo'"> Link up back</i>
	  </ul> </div>';}else{echo'<div id="cont_'; echo$row["username"]; echo'">
	<ul class="hmm">
	<i class= "fa fa-link" data-target="linkup.php?un=';echo $row["username"]; echo"&status=linkup"; echo'" id="like_'; echo$row["username"]; echo'"> Linkup</i>
	  </ul> </div>';}
	}
   } else{echo'<div id="cont_'; echo$row["username"]; echo'">
   <ul class="hmm">
	<i class= "fa fa-link" data-target="linkup.php?un='; echo$row["username"]; echo"&status=linkup"; echo'" id="like_'; echo$row["username"]; echo'"> Link up</i>
	</ul></div>';}
   }
   }
  ?></br> 
  </ul>
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


.hmm {
    display: flex; 
    background-color: #57b846;
}

.hmm {
     height: 20px; 
     align-items: center; 
    padding: 110 110px;
     border-radius: 5px; 
     color: #fff; 
     cursor: pointer; 
     min-width: auto; 
    font-size: 0.9em;
    border: 0;
    background: #57b846;
    color: #fff;
    border-radius: 5px;
}



h6{color:#000;}


twit li button a{
  color: #fff;
  text-decoration: none;

}

.twit > button a {
    color: #ffffff;
    text-decoration: none;
}

a {

    text-decoration: none;
}

postWraper {
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

a {
    color: #57b846;
    text-decoration: none;
    background-color: transparent;
}

a:hover{
    color: #57b846;
    text-decoration: none;
    background-color: transparent;
}
</style>
  <ul class="liink" role="navigation">
	
 
    <?php
$un=$_GET['un'];



	$query = "SELECT * FROM users WHERE username='$un' ";


$result = mysqli_query($link, $query);

$row = mysqli_fetch_array($result);



if(!empty($row["linkedup"])){
echo"<li> <br><button><a href='linkedup.php?un=$un";  echo"'>&nbsp"; print_r(count(unserialize($row["linkedup"]))); echo'</a></button></br>Linkedup </li>';}else{echo"None linkedup";}
	
	
	if(!empty($row["linkups"])){
	echo"<li> <br><button><a href='linkups.php?un=$un'>"; print_r(count(unserialize($row["linkups"]))); echo'</a></button></br>Linkups </li>';}else{echo"No linkups";}

?>
  </ul>
  
  
  
  <ul class="liink" role="navigation">
    <?php
	$un=$_GET['un'];
	$query = "
	SELECT * FROM users WHERE username='$un' ";


$result = mysqli_query($link, $query);

$row = mysqli_fetch_array($result);
	
	
	/////

	?>
  </ul>
  
   <ul class="liink" role="navigation">
   <?php
   $un=$_GET['un'];
	$query = "
	SELECT * FROM users WHERE username='$un' ";


$result = mysqli_query($link, $query);

$row = mysqli_fetch_array($result);
   
   if($row['bio']!= ""){
 echo' <postWraper><h6 align= "center" >';
 
 
 
 
  //////////////


 

  
	  
$reg_exUrl = "/(http|https|ftp|ftps)\:\/\/[a-zA-Z0-9\-\.]+\.[a-zA-Z]{2,3}(\/\S*)?/"; //
$reg_exUr="/#+([a-zA-Z0-9_]+)/";//for hash tags
$reg_exU="/(#)[a-z A-Z0-9.]+[A-Za-z.]+(#)/i";//for letter boldness
$reg="/@+([a-zA-Z0-9-]+)/";//for username reference

   
   
 if(preg_match($reg, $row['bio'], $url)){ // Username @ tag..

 echo preg_replace($reg, "<a href='/info.php?un=$1'><font color='57b846'>$0</font></a>", $row['bio']);  echo '</br>';}
 
   /////////////
 elseif(preg_match($reg_exU, $row['bio'], $url)){ // for text boldness

 echo preg_replace($reg_exU, "<b>$0</b>", $row['bio']);  echo '</br>';}
 
  ///////////////
 elseif(preg_match($reg_exUr, $row['bio'], $url) ){ // For Hashtag recognition
 
 echo preg_replace($reg_exUr, "<a href='/hashtags.php?query=$1'><font color='57b846'>$0</font></a>", $row['bio']);  echo '</br>';
 }
 
/////////////////
  elseif(preg_match($reg_exUrl, $row['bio'], $url)) { // make the urls hyper links

 echo preg_replace($reg_exUrl, "<a href='$0'><font color='57b846'>$0</font></a>", $row['bio']);  echo '</br>';}
 
 else { // if no urls/foreign symbols in the text just return the text
  echo $row['bio']; }
 
  
  
  //////////// 
 
 
 
 
  echo'</h6> </postWraper>';}
  
  echo"</ul><br>";
   
   /////////// For profession
   
   	if(!empty($row['pro'])){
	echo'<p><h6>Profession/skill:&nbsp';

	echo'<postWraper>';
	
	echo$row['pro']; 
	
	echo'</postWraper>';
	
	echo'</br></h6></p>';}
   
   //////////
   
   
   
   
///////////////For location
if($row['location']!= ""){echo"<p> <h6><i class='fa fa-map-marker'></i> Location:&nbsp";
	
	echo'<postWraper>';
	
	echo$row['location']; 
	
	echo'</postWraper>';
	
	echo'</br></h6></p>';}
///////////////
	
	
			 if(!empty($row['website'])){	  
 $reg_exUrl = "/(http|https|ftp|ftps)\:\/\/[a-zA-Z0-9\-\.]+\.[a-zA-Z]{2,3}(\/\S*)?/"; 

if(preg_match($reg_exUrl, $row['website'], $url)) { // make the urls hyper links
echo"<p><h6> website:&nbsp<postWraper>";
 echo preg_replace($reg_exUrl, "<a href='$url[0]'><font color='57b846'>$url[0]</font></a>", $row['website']);
echo"</postWraper></h6></p>";

 } else { // if no urls in the text just return the text
 echo"<p><h6> website:&nbsp";
 
  echo $row['website'];

  echo"</p></h6>";
  } 
  }
	
	//////////////
	
	
	
	
	 if($row['date/time of signup'] != ""){
   echo'<p><h6>Connected:<br>';echo$row['date/time of signup']; echo'.</h6> </p>
	 </ul> ';}
	 
	 if($row['status'] == 'show'){	 echo'<h6>Phone:&nbsp'; echo$row['phone']; echo'</h6>';}

	 
	 
	 ///////
	  //echo'</div>	';
	 //////
  ?>
  

</fieldset>




<?php

$un=$_GET['un'];
					$allowed= array('video/avi','video/flv','video/wmv','video/mov','video/mp4','video/webm','video/mkv','video/vob','video/ogv','video/ogg','video/drc','video/gifv','video/mng','video/mpeg','video/svi','video/3gp','video/3g2','video/mxf','video/roq','video/nsv','video/amv','video/asf','audio/3gp','audio/aa','audio/aac','audio/aax','audio/act','audio/aiff','audio/alac','audio/amr','audio/ape','audio/au','audio/awb','audio/dct','audio/dss','audio/dvf','audio/flac','audio/gsm','audio/iklax','audio/ivs','audio/m4a','audio/m4b','audio/m4p','audio/mmf','audio/mp3','audio/mpc','audio/msv','audio/nmf','audio/nsf','audio/ogg','audio/oga','audio/mog','audio/opus','audio/ra','audio/rm','audio/raw','audio/sln','audio/tta','audio/voc','audio/vox','audio/wav','audio/wma','audio/wv','audio/webm','audio/8svx', 'audio/3gpp','image/jpg','image/jpeg','image/png','image/gif','image/webp','image/tiff','image/psd','image/raw','image/bmp','image/heif','image/indd','image/svg','image/ai','image/eps');
				
				$allowedimage= array('image/jpg','image/jpeg','image/png','image/gif','image/webp','image/tiff','image/psd','image/raw','image/bmp','image/heif','image/indd','image/svg','image/ai','image/eps');
				
				$allowedvideo= array('video/avi','video/flv','video/wmv','video/mov','video/mp4','video/webm','video/mkv','video/vob','video/ogv','video/ogg','video/drc','video/gifv','video/mng','video/mpeg','video/svi','video/3gp','video/3g2','video/mxf','video/roq','video/nsv','video/amv','video/asf');
				
				$allowedaudio= array('audio/3gp','audio/aa','audio/aac','audio/aax','audio/act','audio/aiff','audio/alac','audio/amr','audio/ape','audio/au','audio/awb','audio/dct','audio/dss','audio/dvf','audio/flac','audio/gsm','audio/iklax','audio/ivs','audio/m4a','audio/m4b','audio/m4p','audio/mmf','audio/mp3','audio/mpc','audio/msv','audio/nmf','audio/nsf','audio/ogg','audio/oga','audio/mog','audio/opus','audio/ra','audio/rm','audio/raw','audio/sln','audio/tta','audio/voc','audio/vox','audio/wav','audio/wma','audio/wv','audio/webm','audio/8svx', 'audio/3gpp');
				
				$alloweddocument= array('0','1st','600','602','abw','acl','afp','ami','ans','asc','aww','ccf','csv','cwk','dbk','dita','doc','docm','docx','dot','dotx','dwd','egt','epub','ezw','fdx','ftm','ftx','gdoc','html','hwp','hwpml','hwpml','log','lwp','mbp','md','me','mcw','mobi','nb','nbp','neis','odm','odoc','odt','osheet','ott','omm','pages','pap','pdax','pdf','quox','radix','rtf','rpt','sdw','se','stw','sxw','tex','info','troff','txt','uof','uoml','via','wpd','wps','wpt','wrd','wrf','wri','xhtml','xml','xps', 'ppt');
				
	
			
				$limit=10;
		$query = "SELECT * FROM linkupdates WHERE username='$un' ORDER  BY TIME DESC LIMIT $limit OFFSET 0; ";
$query1 = "SELECT * FROM linkupdates WHERE username='$un' ORDER  BY TIME DESC";
		
		
$result = mysqli_query($link, $query);
$result1=mysqli_query($link, $query1);		


echo'<fieldset><ul class="liink" role="navigation">
 <li><b>'; print_r(mysqli_num_rows($result1)); echo'&nbsp Linkupdates &nbsp</b><i class="fa fa-arrow-circle-o-down"></i></li>
</ul>';
if($user == $un){echo'<div class="postWraper"><p>Post your first linkupdate</p></div>';}

echo'</fieldset>';


$no = mysqli_num_rows( $result1);

	if(mysqli_num_rows($result1)>0){





		while($row = mysqli_fetch_array($result)){
		
	echo'   <form role="form"  class="registration-form">';

  
 echo' <fieldset>';

	 
	 
  
 
 
 
 
 
 
 
  
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
							  
							  }else{	  echo substr("$row[username]","0", "10"); echo'...';} echo'<br/></a></li>';   
   
   
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


 $half= nl2br(substr("$row[caption]","0", "450"));



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
 </div>';
 
 //echo'<div class="link_'; print_r($ui); echo'">www.linksxup.com/remarks.php?pid='; echo$row['uniqueid']; echo'</div>';
 
		}
			
				
		echo'<h6>'; echo$row['time'];
		
		if($row['username']=="$user")
		{echo'&nbsp
	
	<a href="editpost.php?un=';echo$row['username']; echo'&pid='; echo$row['uniqueid'];
	
	echo'"><font color="#57b846"><i class="fa fa-pencil"></i>Edit</font></a>';}
		
		
		echo'</h6>';
		
	echo'</fieldset>';
	
	
	
	

}
			
			}else{echo"This user hasn't made any linkupdates yet...";}
			
			
			

			
							if($limit < $no){$hide=0;}else{$hide=1;}	
			
			if($hide==0){
	$un=$_GET['un'];
	echo'
	<div class="post">

</div>
	
	<fieldset class="liinkkk">

	<ul class="liinkk" role="navigation">
	<li class="load-more"><h5><i class="fa fa-caret-down"></i>&nbspLoad More</li></h5>';

	 
	echo"<input type='hidden' id='all' value='$no'>";
   echo"<input type='hidden' id='row' value='0'></ul>";
   echo"<input type='hidden' id='key' value='$un'></fieldset>";
 
			}
			
	
			
		//echo"$no";	
	//echo"$limit";
		

?>

</form>


 
<style type="text/css">


 .liink postWraper{
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

 .postWraper{
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


.liinkk {
    height: 70px;
    align-items: center;
    padding: 110 110px;
    border-radius: 5px;
    color: #fff;
    cursor: pointer;
    min-width: 200px;
    position: :;
}
.liinkk {
    display: flex;
    background-color: #57b846;
}

.twit li a {
    text-decoration: none;
    color: #57b846;
}


.postWraper a {
    color: #000000;
    text-decoration: none;
}


audio {
    width: 100%;
}


#menu li {
    display: block;
    position: relative;
    float: left;
	
}
li ul {
    display: none;
	
}
#menu li a {
    display: absolute;
    text-decoration: none;
    color: #000000;
    border-top: 1px solid #ffffff;
    padding: -1 em;
    background: #ffff;
    margin-left: 1px;
    white-space: nowrap;
	border-radius: 10px;
}
#menu li a:hover {
background: #57b846;
}
li:hover ul {
    display: block;
    position: absolute;

li:hover li {
    float: none;
    font-size: 11px;
}
li:hover a { background: #57b846; }
li:hover li a:hover {
    background: #fff;
}

</style>









<style>

.liinkk {
  display: flex;
   background-color:  #57b846; 
 
}


.liinkk:hover {
  background-color:  #57b846; 
}



.liinkk {
  height: 70px;
  align-items: center;
  padding: 110 110px;
  border-radius: 5px;
  color: #fff;
 cursor: pointer;
  min-width: 200px;
  position: 
}
.liinkk li {
  cursor: pointer;
   margin-left: auto;
  margin-right: auto;
font-size: 20px;
}





.login11-form-avatar{
	  display: flex;
    min-width: 500px;
  max-width: 600px;
  max-height: 500px;
  border-radius: 2px;
  s-resize:500px;
  overflow: hidden;
  margin-left: 0px; 
  margin-top: 0px;
margin-bottom: 0px;
	
}

.login11-form-avatar img {
  width: 100%;
}


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
	







.login-form-avatar {
  display: flex;
    min-width: 500 px;
  max-width: 500 px;
  max-height: 600px;
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
    min-width: 400px;
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
	
	top: 70px;

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
  height: 70px;
  align-items: center;
  padding: 110 110px;
  border: 1px solid rgba(238,238,238 ,1);
  border-radius: 5px;
  color: rgba(117,117,117 ,1);
 
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



.liink li > button {
  font-size: 1em;
  border: 0;
  background: #57b846;
  color: #fff;
  border-radius: 20%;
  
}


.liink {
  display: flex;
  
 
}

.liink {
  height: 70px;
  align-items: center;
  padding: 110 110px;
  border-radius: 5px;
  color: rgba(117,117,117 ,1);
 
  min-width: 200px;
  position: 
}
.liink li {
  cursor: pointer;
   margin-left: auto;
  margin-right: auto;
font-size: 22px;
}

.liink li b {
 color: black;
}

.liink li:hover{
  color: #57b846;
}


.liink article{
 color: black;

}

.liink a{
 color: #57b846;
 text-decoration: none;
}

.liink button a{
 color: #fff;
 text-decoration: none;
}

.twit li b {
 color: black;
}



.twit > button{
background-color: #57b846;
font-size: 1.2em;
color: #fff;
border-radius: 5px;
cursor: pointer;
}

.twit > button a{
color: #ffffff;

}

/***** Media queries *****/

@media (min-width: 992px) and (max-width: 1199px) {}

@media (min-width: 768px) and (max-width: 991px) {}

@media (max-width: 767px) {
	
	
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
		
	
	
		  .login11-form-avatar {
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
    max-width: 80;
    padding: 20px 20px;
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