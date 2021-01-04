
<!DOCTYPE html>

<html lang="en">

<head>





   <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- icons -->
    <link rel="shortcut icon" href="icon.png"/>
  <meta charset="UTF-8">
  <title>home</title>
  
  
  
  <!-- FOR THE FONT CHANGE EFFECT -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">

  
  
  

  

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
	  
	
		   
 <script src="js/jquery-1.12.0.min.js" type="text/javascript"></script>

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
	
 
	
	
	<style>


.gallery {
  position: relative;
   max-width: 800px;
 
  padding: 0 10;
}

.gallery_scroller {
   /* snap mandatory on horizontal axis  */
  scroll-snap-type: x mandatory;

  overflow-x: scroll;
  overflow-y: hidden;

  display: flex;
  align-items: center;

  height: 90px;
  
  /* Enable Safari touch scrolling physics which is needed for scroll snap */
  -webkit-overflow-scrolling: touch;
}


.gallery_scroller div {
   /* snap align center  */
  scroll-snap-align: center;
  margin: 10px;
  position: relative;
}

.gallery_scroller img {
  border-radius: 10px;
}

.gallery_scroller div.colored_card {
  min-width: 20%;
  min-height: 100%;
  border-radius: 10px;
 }
 
.gallery_scroller img {
  min-width: 20%;
  min-height: 95%;
  border-radius: 10px;
}
 
 



.gallery .btn {
  position: absolute;

  top: 50%;
  transform: translateY(-50%);

  height: 30px;
  width: 30px;

  border-radius: 2px;
  background-color: rgba(0,0,0,0.5);
  background-position: 50% 50%;
  background-repeat: no-repeat;

  z-index: 1;
}

.gallery .btn.next {
  background-image: url('data:image/svg+xml;charset=utf-8,<svg width="18" height="18" viewBox="0 0 34 34" xmlns="http://www.w3.org/2000/svg"><title>Shape</title><path d="M25.557 14.7L13.818 2.961 16.8 0l16.8 16.8-16.8 16.8-2.961-2.961L25.557 18.9H0v-4.2z" fill="%23FFF" fill-rule="evenodd"/></svg>');
  right: 10px;
}

.gallery .btn.prev {
  background-image: url('data:image/svg+xml;charset=utf-8,<svg width="18" height="18" viewBox="0 0 34 34" xmlns="http://www.w3.org/2000/svg"><title>Shape</title><path d="M33.6 14.7H8.043L19.782 2.961 16.8 0 0 16.8l16.8 16.8 2.961-2.961L8.043 18.9H33.6z" fill="%23FFF" fill-rule="evenodd"/></svg>');
  left: 10px;
}

.gallery_scroller > div.colored_card:nth-of-type(1) { background-color: #e8eaf6; }
.gallery_scroller > div.colored_card:nth-of-type(2) { background-color: #000; }
.gallery_scroller > div.colored_card:nth-of-type(3) { background-color: #9fa8da; }
.gallery_scroller > div.colored_card:nth-of-type(4) { background-color: #7986cb; }
.gallery_scroller > div.colored_card:nth-of-type(5) { background-color: #5c6bc0; }
.gallery_scroller > div.colored_card:nth-of-type(6) { background-color: #3f51b5; }
.gallery_scroller > div.colored_card:nth-of-type(7) { background-color: #3949ab; }
.gallery_scroller > div.colored_card:nth-of-type(8) { background-color: #303f9f; }
.gallery_scroller > div.colored_card:nth-of-type(9) { background-color: #283593; }
.gallery_scroller > div.colored_card:nth-of-type(10) { background-color: #1a237e; }

</style>
</head>


<style>
	.link{
	opacity: 0;
	}
	
	</style>




  
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

.twit li a{
 
  text-decoration: none;
  color: #57b846;
}

a{
	color: #57b846;
	background: 57b846;
	color: #000000;
  text-decoration: none;
  
}

button{
	
	
    font-size: 0.9em;
  border: 0;
  background: #57b846;
  color: #fff;
  border-radius: 10px;
	
}
</style> 
  
  
  <style type="text/css">

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

  
  
  
  <script>
	
$(document).ready(function(){

    // Load more data
    $('.liinkk').click(function(){
        var row = Number($('#row').val());
        var allcount = Number($('#all').val());
        row = row + 20;

        if(row <= allcount){
            $('#row').val(row);

            $.ajax({
                url: 'testt22.php',
                type: 'get',
                data: {row:row},
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

  
  
  
  
  

  
  
  <script>
  //SCROLL SNAP SCRIPT
$(document).ready(function(){
const gallery = document.querySelector('#paginated_gallery');
const gallery_scroller = gallery.querySelector('.gallery_scroller');
const gallery_item_size = gallery_scroller.querySelector('div').clientWidth;

gallery.querySelector('.btn.next').addEventListener('click', scrollToNextPage);
gallery.querySelector('.btn.prev').addEventListener('click', scrollToPrevPage);

// For paginated scrolling, simply scroll the gallery one item in the given
// direction and let css scroll snaping handle the specific alignment.
function scrollToNextPage() {
  gallery_scroller.scrollBy(gallery_item_size, 0);
}
function scrollToPrevPage() {
  gallery_scroller.scrollBy(-gallery_item_size, 0);
}

function updateAlignment(event) {
  const alignment = event.target.value;
  for (item of gallery.querySelectorAll('.gallery_scroller > div'))
    item.style.scrollSnapAlign = alignment;

  // Currently changing scroll alignment does not force a re-snap in Chrome.
  // This is a bug: http://crbug.com/866127
  // In meantime, if desired a scroll snap can be triggered using a small 
  // scripted scroll e.g.: `gallery_scroller.scrollBy(1, 0);`
}

});

</script>
  
  
  
  
  
<body>
<?php


	if(isset($_COOKIE['darkmode'])){
	
	  echo"<script>
	  $(document).ready(function(){

$('body').css('background-color','#333');
$('fieldset').css('background-color','#121212');
$('.postWraper a').css('color','#fff');
$('.postWraper').css('color','#fff');
$('nav').css('background','#333');
$('main').css('background','#333');
$('.twit li b').css('color','#fff');
$('h6').css('color','#fff');
	  });
	  
    </script>";
	
}
//To link up users directly
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

require'database.php';

	$user=$_COOKIE['username'];
	

//Confirm if mode isset!!!
$mode=mysqli_query($link, "SELECT mode FROM users WHERE username='$user'");
	$modes=mysqli_fetch_row($mode);



//////////


//////////


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

	$limit= "20";
	
require_once 'database.php';


//Confirm if mode isset!!!
$mode=mysqli_query($link, "SELECT mode FROM users WHERE username='$user'");
	$modes=mysqli_fetch_row($mode);
if($modes[0] == "" || $modes[0]=="deactivated"){









//Confirm users to set profile pic!!!
$profile=mysqli_query($link, "SELECT profilepic FROM users WHERE username='$user'");
	$profiles=mysqli_fetch_row($profile);
if($profiles[0] == ""){
	echo'<form><fieldset>';
		echo'<div class="postWraper">';
		echo'<h4 align= "center" >Upload your profile photo!</h4>';
		echo'<p align= "center">Please <a href="edit profile.php"><font 
		color="#57b846"><b> set</b></font> </a>
		your profile picture and 
		update your Bio
		data. So that people can easily find and link up to you.</p>';
		echo'</div>';
	
	echo'</fieldset></form>';
	
}


//Confirm if user has no linkups yet!!!
$linkup1=mysqli_query($link, "SELECT linkups FROM users WHERE username='$user'");
	$linkup=mysqli_fetch_row($linkup1);
	
	if($linkup[0] == ""){
		$linkups[]="$user";
		//$linkups[]="Theteamtv";
		
		
			$e=serialize($linkups);
			
			$ee=mysqli_query($link, "UPDATE users SET linkups = '$e' WHERE username='$user'");
	if($ee){echo "<form action='autosearch.php'><fieldset>
	<h4 align= 'center' >You aren't linked up to any user yet</h4>
	Get started by linking up with other amazing linkups/users to establish a network that enables you to see their linkupdates in your xup timeline.
<div  align= 'center'><button id='alert'><b>Get started now</b></button></div>	
	</fieldset></form>";
	
	
	
	}
	
	}else{
				$allowed= array('video/avi','video/flv','video/wmv','video/mov','video/mp4','video/webm','video/mkv','video/vob','video/ogv','video/ogg','video/drc','video/gifv','video/mng','video/mpeg','video/svi','video/3gp','video/3g2','video/mxf','video/roq','video/nsv','video/amv','video/asf','audio/3gp','audio/aa','audio/aac','audio/aax','audio/act','audio/aiff','audio/alac','audio/amr','audio/ape','audio/au','audio/awb','audio/dct','audio/dss','audio/dvf','audio/flac','audio/gsm','audio/iklax','audio/ivs','audio/m4a','audio/m4b','audio/m4p','audio/mmf','audio/mp3','audio/mpc','audio/msv','audio/nmf','audio/nsf','audio/ogg','audio/oga','audio/mog','audio/opus','audio/ra','audio/rm','audio/raw','audio/sln','audio/tta','audio/voc','audio/vox','audio/wav','audio/wma','audio/wv','audio/webm','audio/8svx', 'audio/3gpp','image/jpg','image/jpeg','image/png','image/gif','image/webp','image/tiff','image/psd','image/raw','image/bmp','image/heif','image/indd','image/svg','image/ai','image/eps');
				
				$allowedimage= array('image/jpg','image/jpeg','image/png','image/gif','image/webp','image/tiff','image/psd','image/raw','image/bmp','image/heif','image/indd','image/svg','image/ai','image/eps');
				
				$allowedvideo= array('video/avi','video/flv','video/wmv','video/mov','video/mp4','video/webm','video/mkv','video/vob','video/ogv','video/ogg','video/drc','video/gifv','video/mng','video/mpeg','video/svi','video/3gp','video/3g2','video/mxf','video/roq','video/nsv','video/amv','video/asf');
				
				$allowedaudio= array('audio/3gp','audio/aa','audio/aac','audio/aax','audio/act','audio/aiff','audio/alac','audio/amr','audio/ape','audio/au','audio/awb','audio/dct','audio/dss','audio/dvf','audio/flac','audio/gsm','audio/iklax','audio/ivs','audio/m4a','audio/m4b','audio/m4p','audio/mmf','audio/mp3','audio/mpc','audio/msv','audio/nmf','audio/nsf','audio/ogg','audio/oga','audio/mog','audio/opus','audio/ra','audio/rm','audio/raw','audio/sln','audio/tta','audio/voc','audio/vox','audio/wav','audio/wma','audio/wv','audio/webm','audio/8svx', 'audio/3gpp');
				
				$alloweddocument= array('0','1st','600','602','abw','acl','afp','ami','ans','asc','aww','ccf','csv','cwk','dbk','dita','doc','docm','docx','dot','dotx','dwd','egt','epub','ezw','fdx','ftm','ftx','gdoc','html','hwp','hwpml','hwpml','log','lwp','mbp','md','me','mcw','mobi','nb','nbp','neis','odm','odoc','odt','osheet','ott','omm','pages','pap','pdax','pdf','quox','radix','rtf','rpt','sdw','se','stw','sxw','tex','info','troff','txt','uof','uoml','via','wpd','wps','wpt','wrd','wrf','wri','xhtml','xml','xps', 'ppt');
			
		$query = "SELECT * FROM linkupdates  ORDER  BY TIME DESC LIMIT $limit OFFSET 0;";
		$query1 = "SELECT * FROM linkupdates  ORDER  BY TIME DESC";
		
		
$result = mysqli_query($link, $query);
$result1=mysqli_query($link, $query1);		
$no = mysqli_num_rows( $result1);

	if(mysqli_num_rows($result) > 0){





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


   echo'<br/></a></li>
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

 echo preg_replace($reg_exUrl, "<a href='$0'><font color='57b846'>$0</font></a>", $row['caption']);  echo '</br>';}
 
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
 

		}
			
				
		echo'<h6>'; echo$row['time'];
		
		if($row['username']=="$user")
		{echo'&nbsp
	
	<a href="editpost.php?un=';echo$row['username']; echo'&pid='; echo$row['uniqueid'];
	
	echo'"><font color="#57b846"><i class="fa fa-pencil"></i>Edit</font></a>';}
		
		
		echo'</h6>';	
			
			
			
			
 $link=unserialize($linkup[0]);   			
			
 if(!in_array($row['username'],$link))
 { echo'<div id="cont_'; echo$row["username"]; echo'">
<button>
	<i class= "fa fa-link" data-target="linkup.php?un='; echo$row["username"]; echo"&status=linkup"; echo'" id="like_'; echo$row["username"]; echo'"> link up</i>
</button>	
	</div>';}
		   			
		
		
	echo'</fieldset>';
	
	
	
	

}
			
			}else{echo"<fieldset>
			<div class='postWraper'>	
			No linkupdate has been updated yet. But you can post a linkupdate
			for everyone to see and as well share their views/remarks
			on your linkupdate!!
			</div>
			</fieldset>";}
			
			
			

			
							if($limit < $no){$hide = 0;}else{$hide = 1;}	
			
			if($hide == 0){
	
	echo'
	<div class="post">

	</div>
	
	<fieldset class="liinkkk">

	<ul class="liinkk" role="navigation">
	<li class="load-more"><h5><i class="fa fa-caret-down"></i>&nbspLoad More</li></h5>';

	 
	echo"<input type='hidden' id='all' value='$no'>";
   echo"<input type='hidden' id='row' value='0'></ul></fieldset>";
   
 
			}
			
	
			
		//echo"$no";	
	//echo"$limit";
		
	
		}
echo"</form>";
//for if the mode is not set closed bracket
}

//else if it's set, enabled or activated!!!
else{
	/////////////////////////////////////////////////////////////////
	
	//Confirm users to set profile pic!!!
$profile=mysqli_query($link, "SELECT profilepic FROM users WHERE username='$user'");
	$profiles=mysqli_fetch_row($profile);
if($profiles[0] == ""){
	echo'<form><fieldset>';
		echo'<div class="postWraper">';
		echo'<h4 align= "center" >Upload your profile photo!</h4>';
		echo'<p align= "center">Please <a href="edit profile.php"><font 
		color="#57b846"><b> set</b></font> </a>
		your profile picture and 
		update your Bio
		data. So that people can easily find and link up to you.</p>';
		echo'</div>';
	
	echo'</fieldset></form>';
	
}


//Confirm if user has no linkups yet!!!
$linkup1=mysqli_query($link, "SELECT linkups FROM users WHERE username='$user'");
	$linkup=mysqli_fetch_row($linkup1);
	
	if($linkup[0] == ""){
		$linkups[]="$user";
		//$linkups[]="Theteamtv";
		
		
			$e=serialize($linkups);
			
			$ee=mysqli_query($link, "UPDATE users SET linkups = '$e' WHERE username='$user'");
	if($ee){echo "<form action='autosearch.php'><fieldset>
	<h4 align= 'center' >You aren't linked up to any user yet</h4>
	Get started by linking up with other amazing linkups/users to establish a network that enables you to see their linkupdates in your xup timeline.
<div  align= 'center'><button id='alert'><b>Get started now</b></button></div>	
	</fieldset></form>";
	
	
	
	}
	
	}else{
				$allowed= array('video/avi','video/flv','video/wmv','video/mov','video/mp4','video/webm','video/mkv','video/vob','video/ogv','video/ogg','video/drc','video/gifv','video/mng','video/mpeg','video/svi','video/3gp','video/3g2','video/mxf','video/roq','video/nsv','video/amv','video/asf','audio/3gp','audio/aa','audio/aac','audio/aax','audio/act','audio/aiff','audio/alac','audio/amr','audio/ape','audio/au','audio/awb','audio/dct','audio/dss','audio/dvf','audio/flac','audio/gsm','audio/iklax','audio/ivs','audio/m4a','audio/m4b','audio/m4p','audio/mmf','audio/mp3','audio/mpc','audio/msv','audio/nmf','audio/nsf','audio/ogg','audio/oga','audio/mog','audio/opus','audio/ra','audio/rm','audio/raw','audio/sln','audio/tta','audio/voc','audio/vox','audio/wav','audio/wma','audio/wv','audio/webm','audio/8svx', 'audio/3gpp','image/jpg','image/jpeg','image/png','image/gif','image/webp','image/tiff','image/psd','image/raw','image/bmp','image/heif','image/indd','image/svg','image/ai','image/eps');
				
				$allowedimage= array('image/jpg','image/jpeg','image/png','image/gif','image/webp','image/tiff','image/psd','image/raw','image/bmp','image/heif','image/indd','image/svg','image/ai','image/eps');
				
				$allowedvideo= array('video/avi','video/flv','video/wmv','video/mov','video/mp4','video/webm','video/mkv','video/vob','video/ogv','video/ogg','video/drc','video/gifv','video/mng','video/mpeg','video/svi','video/3gp','video/3g2','video/mxf','video/roq','video/nsv','video/amv','video/asf');
				
				$allowedaudio= array('audio/3gp','audio/aa','audio/aac','audio/aax','audio/act','audio/aiff','audio/alac','audio/amr','audio/ape','audio/au','audio/awb','audio/dct','audio/dss','audio/dvf','audio/flac','audio/gsm','audio/iklax','audio/ivs','audio/m4a','audio/m4b','audio/m4p','audio/mmf','audio/mp3','audio/mpc','audio/msv','audio/nmf','audio/nsf','audio/ogg','audio/oga','audio/mog','audio/opus','audio/ra','audio/rm','audio/raw','audio/sln','audio/tta','audio/voc','audio/vox','audio/wav','audio/wma','audio/wv','audio/webm','audio/8svx', 'audio/3gpp');
				
				$alloweddocument= array('0','1st','600','602','abw','acl','afp','ami','ans','asc','aww','ccf','csv','cwk','dbk','dita','doc','docm','docx','dot','dotx','dwd','egt','epub','ezw','fdx','ftm','ftx','gdoc','html','hwp','hwpml','hwpml','log','lwp','mbp','md','me','mcw','mobi','nb','nbp','neis','odm','odoc','odt','osheet','ott','omm','pages','pap','pdax','pdf','quox','radix','rtf','rpt','sdw','se','stw','sxw','tex','info','troff','txt','uof','uoml','via','wpd','wps','wpt','wrd','wrf','wri','xhtml','xml','xps', 'ppt');
			
		$query = "SELECT * FROM linkupdates  ORDER  BY TIME DESC";
		$query1 = "SELECT * FROM linkupdates  ORDER  BY TIME DESC";
		
		
$result = mysqli_query($link, $query);
$result1=mysqli_query($link, $query1);		
$no = mysqli_num_rows( $result1);

	if(mysqli_num_rows($result) > 0){




	$content[]="0";
$count=count($content);


		while($row = mysqli_fetch_array($result)){
			
if($count < 11)		
{			
	require'database.php';		
			
$linkup1=mysqli_query($link, "SELECT linkups FROM users WHERE username='$user' ");
	$linkup=mysqli_fetch_row($linkup1);
		if(!empty($linkup[0]))
		{
		$e=unserialize($linkup[0]);	
			
	echo'   <form role="form"  class="registration-form">';

  
	//if the username of the linkupdates are in the array
			if(in_array($row['username'], $e))
			{
	
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


   echo'<br/></a></li>
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

 echo preg_replace($reg_exUrl, "<a href='$0'><font color='57b846'>$0</font></a>", $row['caption']);  echo '</br>';}
 
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
 

		}
			
				
		echo'<h6>'; echo$row['time'];
		
		if($row['username']=="$user")
		{echo'&nbsp
	
	<a href="editpost.php?un=';echo$row['username']; echo'&pid='; echo$row['uniqueid'];
	
	echo'"><font color="#57b846"><i class="fa fa-pencil"></i>Edit</font></a>';}
		
		
		echo'</h6>';	
			
 $link=unserialize($linkup[0]);   			
			
 if(!in_array($row['username'],$link))
 { echo'<div id="cont_'; echo$row["username"]; echo'">
<button>
	<i class= "fa fa-link" data-target="linkup.php?un='; echo$row["username"]; echo"&status=linkup"; echo'" id="like_'; echo$row["username"]; echo'"> link up</i>
</button>	
	</div>';}
		   			
		
		
	echo'</fieldset>';
	
		$content[]=$row['numbering'];
$count=count($content);
		
		
		

		
	
	//closing bracket for if usernameis in array
		}
	
			

	
	
	
		}
	
		}

				
	
		}

		
		//print_r(end($content));	
			$row=end($content);
		//print_r(count($content));
				
							if($count < 11){$hide = 1;}else{$hide = 0;}	
			
			if($hide == 0){
	
	echo'
	<div class="post">

</div>
	
	<fieldset class="liinkkk">

	<ul class="liinkk" role="navigation">
	<li class="load-more"><h5><i class="fa fa-caret-down"></i>&nbspLoad More</li></h5>';

	 
	echo"<input type='hidden' id='all' value='$no'>";
   echo"<input type='hidden' id='row' value='0'></ul></fieldset>";
   
 
			}	
			
			}else{echo"<fieldset>
			<div class='postWraper'>	
			No linkupdate has been updated yet. But you can post a linkupdate
			for everyone to see and as well share their views/remarks
			on your linkupdate!!
			</div>
			</fieldset>";}
			
			
			

	
			
		//echo"$no";	
	//echo"$limit";
		
	
		}

//for if the mode is not set closed bracket
}
	
	////////////////////////////////////////////////////////////////
}






		else{
	header("location: log in.html");
}

?>
  
    

<style>


.login300-form-avatar img {
    padding: 5px 5px;
	width: 100%;
    display: flex;
    width: 60px;
    height: 60px;
    border-radius: 100%;
    border-line: 50px;
    border-color: #57b846;
    overflow: hidden;
    margin-left: 0px;
    margin-top: 0px;
    margin-bottom: 0px;
    align-items: center;
}







.liinkk li > button {
  font-size: 1em;
  border: 0;
  background: #57b846;
  color: #fff;
  border-radius: 100px;
 
     margin-left: 0px; 
  margin-right: 0px;
}


.liinkk li > button:hover {
background-color:#57b846;
color:#57b846;
cursor:pointer;
}


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



.login-form-avatar {
  display: flex;
    min-width: 60px;
  max-width: 600px;
  max-height: auto;
  border-radius: 2px;
  s-resize:500px;
  overflow: hidden;
  margin-left: 0px; 
  margin-top: 0px;
margin-bottom: 0px;
}



 audio {
  	width: 100%;
	 min-width: 60px;
	 max-width: 550px;

  
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
align-items:center;
}





.login200-form-avatar img{
  display: flex;
  
  height: auto;
  border-radius: 100%;
 border-line:50px;
 border-color:#57b846;
  overflow: hidden;
  margin-left: 0px; 
  margin-top: 0px;
margin-bottom: 0px;
align-items:center;
}

.login200-form-avatar img {
  width: 100%;
  border-radius: 10%;
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
    min-width: 60px;
    max-width: 600px;
    max-height: 500px;
    border-radius: 70px;
    s-resize: 500px;
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
	







ul {
  padding: 0;
  list-style: none;
}
fieldset{
	
	top: 190px;
	
  justify-content: center;
  align-items: center;
   background: #fff;
       border-radius: 5px;
	width: 100%;
	 min-width: 600px;
	 max-width: 600px;
	 

	 
 padding: 50px 20px;
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
 color: black;
}




.twit li a:hover{
  color: #57b846;
}






}
.twit li > button {
  font-size: 0.8em;
  border: 0;
  background: #57b846;
  color: #fff;
  border-radius: 100px;
  
}








/***** Media queries *****/

	

@media (min-width:100px) and (max-width: 259px) {
	
	.gallery {
  position: relative;
   max-width: 100px;
   margin-left: auto;
  margin-right: auto;
  padding: 0 10;
}
	
}


@media (min-width:260px) and (max-width: 399px) {
	
	.gallery {
  position: relative;
   max-width: 255px;
   margin-left: auto;
  margin-right: auto;
  padding: 0 10;
}
	
}

@media(min-width: 400px) and (max-width: 549px) {
	
	.gallery {
  position: relative;
   max-width: 390px;
  margin-left: auto;
  margin-right: auto;
  padding: 0 10;
}
	
}

@media(min-width: 550px) and (max-width: 767px) {
.gallery {
  position: relative;
   max-width: 540px;
  margin-left: auto;
  margin-right: auto;
  padding: 0 10;
}
	
.loginvideo-form-avatar {
  display: flex;
    min-width: 200px;
  max-width: 600px;
  max-height: 300px;
  border-radius: 30px;
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
  border-radius: 10%;
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
	 min-width: 10px;
	 max-width: auto;
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
</form>

</body>

</html>