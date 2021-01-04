
<script>

	
	
      $(document).ready(function(){

		    // like and unlike click
    $(".fa-comment, .fa-heart").click(function(){
        var id = this.id;   // Getting Button id
        var split_id = id.split("_");

        var text = split_id[0];
        var postid = split_id[1];  // postid
		  
	if(text == "like"){
		  
        // Set trigger and container variables
        var trigger = $(".fa fa-heart"),
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

if(isset($user)){
	
	
	$limit="100";
	$start= $_GET["row"] ;

	
	
	
		require'database.php';
		
		$query1 = "SELECT * FROM users  WHERE username='$user'";
		$result1 = mysqli_query($link, $query1);
	
	$row = mysqli_fetch_array($result1);
	
		if(empty($row['linkups'])){echo"You aren't linkedup to anyone";}
		
		else{
		
		$u=unserialize($row['linkups']);
		//print_r(($u[0]));
		
		$a=array_slice($u,$start,$limit);
		
		
	
	for($j=0;$j<count($a);++$j)
{$x="$user";
if($a[$j]==$x)
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
 
     echo'<li><a href="info.php?un='; echo $row["username"]; echo'"><b>'; echo'My linkupdate'; echo'</b>';  
	 echo'<br/>';
	 
	 	
	echo' </a></li>
    ';
  echo'</ul><hr>';

	
//echo'</fieldset> ';

	
		
		
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
 
     echo'<li><a href="info.php?un='; echo $ro["username"]; echo'"><b>';   if (strlen($ro['firstname']) < 9){
							  
							  echo $ro['firstname']; 
							  
							  }else{	  echo substr("$ro[firstname]","0", "8"); echo'...';} echo'&nbsp'; if (strlen($ro['lastname']) < 9){
							  
							  echo $ro['lastname']; 
							  
							  }else{	  echo substr("$ro[lastname]","0", "8"); echo'...';} echo'</b><br>Un@'; echo $ro["username"]; 
	 echo'<br/>';
	 
	 	
	echo' </a></li></ul>
    ';
	

	
	
	
}}}}else{
	header("location: log in.html");
	exit();
}

?>
  
