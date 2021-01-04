

<?php
 echo'<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
		';
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
$('h4').css('color','#fff');
$('name').css('background','#333');


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
	
	
	

	
	
	


echo'

	     <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script>
      $(document).ready(function(){
        // Set trigger and container variables
        var trigger = $(":button"),
            container = $("#content");
        
        // Fire on click
        trigger.on("click", function(){
          // Set $this for re-use. Set target from data attribute
          var $this = $(this),
            target = $this.data("target");       
          
          // Load target page into container
          container.load(target);
          
          // Stop normal link behavior
          return false;
        });
      });
    </script>

';



require_once 'database.php';


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
 
	
	$limit="10";
	$start=$_GET["row"];
	//echo"$start";
		
		//print_r($_COOKIE['start']+5);
if(isset($_GET["query"]))
{
	$search = mysqli_real_escape_string($link, $_POST["query"]);
	$query = "
	SELECT * FROM users 
	WHERE username LIKE '%".$search."%'
	OR lastname LIKE '%".$search."%'
	OR firstname LIKE '%".$search."%'
	OR phone LIKE '%".$search."%' 
	OR pro LIKE '%".$search."%' 
	OR location LIKE '%".$search."%'
	OR gender LIKE '%".$search."%'
	
	ORDER BY verification DESC, Linkups DESC LIMIT $limit OFFSET $start;
	";
	
	$query1 = "
	SELECT * FROM users 
	WHERE username LIKE '%".$search."%'
	OR lastname LIKE '%".$search."%'
	OR firstname LIKE '%".$search."%'
	OR phone LIKE '%".$search."%' 
	OR pro LIKE '%".$search."%' 
	OR location LIKE '%".$search."%'
	OR gender LIKE '%".$search."%'
	
		ORDER BY verification DESC, Linkups DESC
	";
	
	
}
else
{


	$query = "
	SELECT * FROM users ORDER BY verification DESC, Linkups DESC LIMIT $limit OFFSET $start;";
	
		$query1 = "
	SELECT * FROM users ORDER BY verification DESC, Linkups DESC";
}
$result = mysqli_query($link, $query);

$result1 = mysqli_query($link, $query1);



if(mysqli_num_rows($result) > 0 )
{

	while($row = mysqli_fetch_array($result))
	{
	//if(count(mysqli_num_rows($result)) < $limit ){echo'reachedMax';}
		
		
	//echo $limit;
	//echo $start;
	
	echo'<ul class="liinkk" role="navigation">
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

		   if (strlen($row['firstname']) < 10){
							  
							  echo $row['firstname']; 
							  
							  }else{	  echo substr("$row[firstname]","0", "9"); echo'...';}


	 echo'&nbsp'; 

if (strlen($row['lastname']) < 9){
							  
							  echo $row['lastname']; 
							  
							  }else{	  echo substr("$row[lastname]","0", "8"); echo'...';}

	 echo'</b><br>Un@'; 
	 
	 if (strlen($row['username']) < 11){
							  
							  echo $row['username']; 
							  
							  }else{	  echo substr("$row[username]","0", "10"); echo'...';}
	 
	 echo'<br/>';
	 
	 	
	echo' </a></li>';
	
	

	
 echo'</ul>';
 
 
 
 
	 if(!empty($row["bio"])){
  echo'<ul class="twit">';
  
	echo'<li>&nbsp'; echo substr("$row[bio]","0", "50"); echo'.....</br></h5>
						</li>
	</ul>';}
	
	
	
	if($row["username"] != $user){
		 echo'<ul class="twit">';
		
    echo'<li> <br>';
	
				echo'<div id="cont_'; echo$row["username"]; echo'">
	<button class= "fa fa-link" data-target="linkup.php?un=';echo $row["username"]; echo"&status=linkup"; echo'" id="like_'; echo$row["username"]; echo'"> Linkup</button>
	</div>';
	
	echo'</br></li></ul>';
	}else{}
	
	echo'<hr>';
	}
}


else
{
	
}





		

	
	


// to cut short so much lengthy text. 
//$a="abcdef haha mad oh";
//$t=substr("$a", 0, 9);
//echo"$t.........";
?>


<style>

.liinkk {
    height: 70px;
    align-items: center;
    padding: 110 110px;
    border-radius: 5px;
    color: rgba(117,117,117 ,1);
    min-width: 200px;
    position: ;
}

.liinkk {
    display: flex;
}
ul {
    padding: 0;
    list-style: none;
}


</style>
