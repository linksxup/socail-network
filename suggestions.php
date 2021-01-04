
<!DOCTYPE html>
<html>
    <head>
        <title>Linksxup suggestions</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
				<!-- icons -->
    <link rel="shortcut icon" href="icon.png" />
	
	
	  <!-- FOR THE FONT CHANGE EFFECT -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">

	
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
<script src="js/jquery-1.12.0.min.js" type="text/javascript"></script>
<script src="js/jquery-3.3.1.js" type="text/javascript"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
	
	<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-117749332-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-117749332-1');
</script>
  
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
body {
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100%;
    background-color: #ddd;
}

button {
    font-size: 0.9em;
    border: 0;
    background: #57b846;
    color: #fff;
    border-radius: 10px;
}

a {
    text-decoration: none;
    color: #57b846;
}


a:hover {
    text-decoration: none;
    color: #57b846;
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
		</style>

		<script type="text/javascript">
			window.addEventListener("load", function () {
		    const loader = document.querySelector(".loader");
		    loader.className += " hidden"; // class "loader hidden"
		});
		</script>
		<div class="loader">
	    	<img src="img/Preloader_.gif" alt="Loading..." />
		</div>
			
	
  <name>
  
 
   <ul class="twitter" role="navigation">
   <li><a href='search.php'><i class="fa fa-arrow-left"></a></i></li>
   
    <li><button>Link up suggestions</button></li>
    
   
  </ul>
</name>



							   

		                   
				
	
 
			<form>



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


echo"<fieldset>";
			echo"<font color='#57b846'>Linkup suggestion</font>
	<hr>		
			<table class='table table-striped table-hover'>

                <tbody>";	
		require'database.php';
	
		$quer = "SELECT * FROM users  WHERE username='$user';";

$fetch = mysqli_query($link, $quer);
	
$data = mysqli_fetch_array($fetch);	
	if(!empty($data['linkups'])){$u=unserialize($data['linkups']);}else{$u= array();}
	
		require'database.php';
	
		$que = "SELECT * FROM users ORDER  BY RAND()  LIMIT 50 OFFSET 0;";

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


 if (strlen($dat['username']) < 7){
							  
							  echo $dat['username']; 
							  
							  }else{	  echo substr("$dat[username]","0", "6"); echo'..';}


						echo"</br></h5></a>
						</td>";
						
						 echo"<td><br><i class='fa fa-map-marker' placeholder='location'></i></br>
						<h5><br>"; echo substr("$dat[location]","0", "8"); echo"..</br></h5>
						<hr>";
						
						if($dat["username"] != $user){
						echo'<div id="cont_'; echo$dat["username"]; echo'">
	<button class= "fa fa-link" data-target="linkup.php?un=';echo $dat["username"]; echo"&status=linkup"; echo'" id="like_'; echo$dat["username"]; echo'">Link up</button>
					</div>';}
	
	
					echo'</td>
                        <td><h5><br>Skill/pro</br></h5>
						<h5><br>'; echo substr("$dat[pro]","0", "6"); echo'..</br></h5>
						
						</td>
						
                    </tr>';
					
				
				
		}
		
	
		
				}
	
	
		}
		 
	
echo" </tbody>
            </table>";
			
	
	echo"</fieldset>";
		
}else{header('location: testt.php');}
			
	
	

?>
</form>		
	
	
	
	
	
	<style>
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
	
	top: 70px;

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
 padding: 40px 20px;

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



body {
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100%;
    background-color: #ddd;
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
