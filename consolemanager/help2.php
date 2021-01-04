



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
	
	
	$limit="10";
	$start= $_GET["row"] ;
	
require_once 'database.php';

			
		$query = "SELECT * FROM help LIMIT $limit OFFSET $start;";
		
		$query11 = "SELECT * FROM help";
		
		
$result = mysqli_query($link, $query);
$result11 = mysqli_query($link, $query11);		
$result2=mysqli_num_rows($result11);

	if(mysqli_num_rows($result)>0){

		while($row = mysqli_fetch_array($result)){

	//echo'   <form role="form"  class="registration-form">';

  
echo' <fieldset>';

	 


 
  
	echo'<ul class="twit" role="navigation">';
	echo'<li>';

//the accuser username
	
   echo '<li><b>'; 


			   if (strlen($row['name']) < 12){
							  
							  echo $row['name']; 
							  
							  }else{	  echo substr("$row[name]","0", "11"); 
							  echo'...';}
 echo'&nbsp is reporting';

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
	
	
	echo'<div class="post">

</div>';
	
	if($start == $result2){echo"<style> .liinkk {
  display: none;
 
}</style>";}

}
			
			}
			
			
			
		//echo"$no";	
	//echo"$limit";
		


	
		
		
	
			
		
		}
	
	
	
else{
	header("location: log in.html");
}

?>
  
