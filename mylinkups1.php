<!DOCTYPE html>

<html>
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		    <link rel="shortcut icon" href="icon.png" />
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>



 <script src="js/jquery-1.12.0.min.js" type="text/javascript"></script>


<script src="js/jquery-3.3.1.js" type="text/javascript"></script>
	  
	     <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>

 <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'>

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
		
		
		
		<script>

$(document).ready(function(){

    // Load more data
    $('.liinkk').click(function(){
        var row = Number($('#row').val());
        var allcount = Number($('#all').val());
        row = row + 100;

        if(row <= allcount){
            $('#row').val(row);

            $.ajax({
                url: 'mylinkups11.php',
                type: 'get',
                data: {row:row},
                beforeSend:function(){
                    $('.load-more').text('Fetching more ...');
                },
                success: function(response){

                    // Setting little delay while displaying new content
                    setTimeout(function() {
                        // appending posts after last post with class='post'
                        $('.post:last').after(response).show().fadeIn('slow');

                        var rowno = row + 100;

                        // checking row value is greater than allcount or not
                        if(rowno > allcount){

                            // Change the text and background
                            $('.load-more').text('Hide');
                            $('.load-more').css('display','none');
							$('.liinkkk').css('display','none');
                        }else{
                            $('.load-more').text('See more');
                        }
                    }, 1000);


                }
            });
        }else{
            $('.load-more').text('fetching more...');

            // Setting little delay while removing contents
            setTimeout(function() {

                // When row is greater than allcount then remove all class='post' element after 3 element
                $('.post:nth-child(3)').nextAll('.post').remove().fadeIn('slow');

                // Reset the value of row
                $('#row').val(0);

                // Change the text and background
                $('.load-more').text('See more');
                $('.load-more').css('background','#15a9ce');

            }, 1000);


        }

    });

});

</script>
		
    </head>
	<body>
	
	

<style type="text/css">
ul {
    padding: 0;
    list-style: none;
}

.liinkk {
    height: 70px;
    align-items: center;
    padding: 110 110px;
    border-radius: 5px;
    color: #fff;
    cursor: pointer;
    min-width: 200px;
    position: ;
}

.liinkk {
    display: flex;
    background-color: #57b846;
}
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
		</style>

		
			
	



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
$('h3').css('color','#fff');
$('name').css('background','#333');


	  });
	  
    </script>";
	
}
	 
	 
 echo'<fieldset>';
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

	$search = $_GET["query"];

			$query1 = "SELECT * FROM users  WHERE username='$user'";
		$result1 = mysqli_query($link, $query1);

while($row = mysqli_fetch_array($result1))
	{if(empty($row['linkups'])){echo"You aren't linkedup to anyone yet";}else{
		
		$u=unserialize($row['linkups']);
		
		$result= array_search($search, $u);
		
		
		if($result == null){echo"<h3>No results found for '$search'</h3>";}else{
			
			
			require'database.php';
			
				$query = "SELECT * FROM users  WHERE username='$u[$result]'";
				
		$resul= mysqli_query($link, $query);
		
	$r= mysqli_fetch_array($resul);
				
		echo'<ul class="twit" role="navigation">
	<li>';
	
	if($r["profilepic"] != "")
	{
	echo'<a href="'; echo $r["profilepic"]; echo'">
	<span class="login100-form-avatar">';}else{ echo'
	<span class="login100-form-avatar">';}
	
	if($r["profilepic"] != "")
	{
	echo'<img src="'; echo $r["profilepic"]; 


	}else{
		if($r["gender"] == "male")
		{echo'<img src="';echo'gender/male.jpg';}else{
		echo'<img src="';echo'gender/female.jpg';
	
	}
	}
	
	echo'"alt="AVATAR"> 
	</span>
	<a/>
	</li>'; if($r["verification"] == "verified" ){echo'<span class="login10-form-avatar">
	<img src="verified.jpeg" alt="AVATAR"> 
	</span>';}
 
     echo'<li><a href="linkupdates.php?un='; echo $r["username"]; echo'"><b>';   if (strlen($r['firstname']) < 9){
							  
							  echo $r['firstname']; 
							  
							  }else{	  echo substr("$r[firstname]","0", "8"); echo'...';} echo'&nbsp';  if (strlen($r['lastname']) < 9){echo $r['lastname']; 
							  
							  }else{	  echo substr("$r[lastname]","0", "8"); echo'...';}  echo'</b><br>Un@'; echo $r["lastname"]; 
	 echo'<br/>';
	 
	 	
	echo' </a></li>
    ';


  echo'</ul><hr>';
		


	
		
		
		}
	}



}

	}
	
}else{
	
	$user=$_COOKIE['username'];
	
	if(isset($user)){
	require'database.php';
		
		$query1 = "SELECT * FROM users  WHERE username='$user'";
		$result1 = mysqli_query($link, $query1);
	
	$row = mysqli_fetch_array($result1);
	
		if(empty($row['linkups'])){echo"You aren't linkedup to anyone";}
		else{
		$u=unserialize($row['linkups']);
	
		if(count($u)<99){$count=count($u);}else{$count= 100;}
		
	
	for($j=0;$j<$count;$j++)
{$x="$user";


if($u[$j]==$x)
{
		

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
 
     echo'<li><a href="linkupdates.php?un='; echo $row["username"]; echo'"><b>'; echo'My linkupdate'; echo'</b>';  
	 echo'<br/>';
	 
	 	
	echo' </a></li>
    ';
  echo'</ul><hr>';

	


	
		
		
		}else{
		
			require'database.php';
		
		$query = "SELECT * FROM users  WHERE username='$u[$j]'";
		$result = mysqli_query($link, $query);
	$ro= mysqli_fetch_array($result);
echo'<ul class="twit" role="navigation">
	<li>';
	
	if($ro["profilepic"] != "")
	{
	echo'<a href="'; echo $ro["profilepic"]; echo'">
	<span class="login100-form-avatar">';}else{ echo'
	<span class="login100-form-avatar">';}
	
	if($ro["profilepic"] != "")
	{
	echo'<img src="'; echo $ro["profilepic"]; 


	}else{
		if($ro["gender"] == "male")
		{echo'<img src="';echo'gender/male.jpg';}else{
		echo'<img src="';echo'gender/female.jpg';
	
	}
	}
	
	echo'"alt="AVATAR"> 
	</span>
	<a/>
	</li>'; if($ro["verification"] == "verified" ){echo'<span class="login10-form-avatar">
	<img src="verified.jpeg" alt="AVATAR"> 
	</span>';}
 
     echo'<li><a href="linkupdates.php?un='; echo $ro["username"]; echo'"><b>';   if (strlen($ro['firstname']) < 9){
							  
							  echo $ro['firstname']; 
							  
							  }else{	  echo substr("$ro[firstname]","0", "8"); echo'...';} echo'&nbsp'; if (strlen($ro['lastname']) < 9){
							  
							  echo $ro['lastname']; 
							  
							  }else{	  echo substr("$ro[lastname]","0", "8"); echo'...';}  echo'</b><br>Un@'; echo $ro["username"]; 
	 echo'<br/>';
	 
	 	
	echo' </a></li>
    ';


  echo'</ul>';
   
					
echo'<div class="post">

</div>';	

		}

		}

	
	
	
	}	
}else{header('location: log in.html');
exit();}
 echo'</fieldset>';


if(count($u) > 99){
				
				
				
				
				$no=count($u);
				//$no= 4;
					echo'
	
	
	<fieldset class="liinkkk">

	<ul class="liinkk" role="navigation">
	<li class="load-more"><h5><i class="fa fa-caret-down"></i>&nbspSee More</li></h5>';

	 
	echo"<input type='hidden' id='all' value='$no'>";
   echo"<input type='hidden' id='row' value='0'></ul></fieldset>";
   
				
				
		}
			
			

}

		
	
	
	

			
	
	?>
	
	
	

  
  
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


.liinkk li {
    cursor: pointer;
    margin-left: auto;
    margin-right: auto;
    font-size: 20px;
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


.twit {
  margin-bottom: 40px;
  
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


body {
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100%;
    background-color: #ddd;
}



/***** Media queries *****/

@media (min-width: 992px) and (max-width: 1199px) {}

@media (min-width: 768px) and (max-width: 991px) {}

@media (max-width: 767px) {
	
	audio {
    width: 100%;
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

}
	
	</style>

	</body>
</html>
