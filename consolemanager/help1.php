
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

  
  
  
  	<!-- Global site tag (gtag.js) - Google Analytics -->
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

echo"<script>

$(document).ready(function(){

    // Load more data
    $('.liinkk').click(function(){
        var row = Number($('#row').val());
        var allcount = Number($('#all').val());
        row = row + 10;

        if(row <= allcount){
            $('#row').val(row);

            $.ajax({
                url: 'help2.php',
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

</script>";

//////////


//////////


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

if(isset($user)){
	//if the search text bar is undergoing utilisation..
	
	if(isset($_GET['query'])){
	//fetch just 20 query data from db.	
	$limit= "20";
	
require_once 'database.php';
		
			
	$search = mysqli_real_escape_string($link, $_GET["query"]);
	$query = "
	SELECT * FROM help 
	WHERE name LIKE '%".$search."%'
	OR email LIKE '%".$search."%'
	OR message LIKE '%".$search."%'
	 LIMIT $limit OFFSET 0;
	";
		
$result = mysqli_query($link, $query);
		


	if(mysqli_num_rows($result) > 0){

		while($row = mysqli_fetch_array($result)){
			
		
	echo'   <form role="form"  class="registration-form">';

  
 echo' <fieldset>';

	 


 
  
	echo'<ul class="twit" role="navigation">';
	echo'<li>';

//the accuser username
	
   echo '<li>'; echo'<b>'; 


			   if (strlen($row['name']) < 15){
							  
							  echo $row['name']; 
							  
							  }else{	  echo substr("$row[name]","0", "14"); 
							  echo'..';}


   echo'</b></li>';
  
  

  echo'</ul></li>';
  
  
  

  
  
  
  
  
  echo'<div class="postWraper">	';
		
  if(!empty($row['email'])){
	  //////////////
 // if no urls/foreign symbols in the text just return the text
  echo $row['email']; echo'<br>';

  ////////////
  }
  
		
  if(!empty($row['message'])){
	  //////////////
 // if no urls/foreign symbols in the text just return the text
  echo $row['message']; 

  ////////////
  }
  
   
		
	echo'</div>

	</fieldset>';
		
		
		
		
		
		
		
}}}
	//else not searching then do this....
else{	$limit= "10";
	
require_once 'database.php';

		
		$query = "SELECT * FROM help LIMIT $limit OFFSET 0;";
		$query1 = "SELECT * FROM help";
		
		
$result = mysqli_query($link, $query);
$result1=mysqli_query($link, $query1);		


	if(mysqli_num_rows($result) > 0){


$no = mysqli_num_rows( $result1);


		while($row = mysqli_fetch_array($result)){
			
		
	echo'   <form role="form"  class="registration-form">';

  
 echo' <fieldset>';

	 


 
  
	echo'<ul class="twit" role="navigation">';
	echo'<li>';

//the accuser username
	
   echo '<li><b>'; 


			   if (strlen($row['name']) < 15){
							  
							  echo $row['name']; 
							  
							  }else{	  echo substr("$row[name]","0", "14"); 
							  echo'...';}


   echo'</b></li>';

  echo'</ul></li>';
  
  
  

  
  
  
  
  
  echo'<div class="postWraper">	';			
		
   if(!empty($row['email'])){
	  //////////////
 // if no urls/foreign symbols in the text just return the text
  echo $row['email']; echo'<br>';

  ////////////
  }
  
		
  if(!empty($row['message'])){
	  //////////////
 // if no urls/foreign symbols in the text just return the text
  echo $row['message']; 

  ////////////
  }
  
  
		
	echo'</div>';
	
	echo'</fieldset>';
	
	
	
	

}
			
			}
			
			
			

			
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
		
		}else{
	header("location: log in.html");
}

?>
  
    

<style>
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
	
	top: 10px;
	
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
		
	
	
	
	
	  .login-form-avatar {
  display: flex;
  min-width: 200px;
  max-width: 600px;
  min-height: auto;
  max-height: 700px;
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
</form>



</body>

</html>