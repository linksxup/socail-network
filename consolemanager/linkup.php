

<script>

	
	
      $(document).ready(function(){

		    // like and unlike click
    $(".fa-comment").click(function(){
        var id = this.id;   // Getting Button id
        var split_id = id.split("_");

        var text = split_id[0];
        var postid = split_id[1];  // postid
		  
	if(text == "like"){
		  
        // Set trigger and container variables
        var trigger = $(".fa fa-comment"),
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

               <script async src="https://www.googletagmanager.com/gtag/js?id=UA-117749332-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-117749332-1');
</script>

<?php
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
		//echo'<fieldset>'; 

	echo'<ul class="twit" role="navigation">';
	echo'<li>';
	
	echo'<a href="index.html"><h4>Log in</h4></button></a>';

	echo'</li>';
	echo'</ul>';
	//echo'</fieldset>';
        exit();
		}
 
 
if(isset($user))
{
	$un=$_GET["un"];
	$status=$_GET['status'];
	
		require'database.php';

		
		
		if(!empty($status)){
			$un=$_GET["un"];
	$status=$_GET["status"];
	
			
			
			
			
			
			
		require'database.php';
		
	
			
			if($status == 'suspend'){
			
				$querry = "UPDATE users SET mode='suspended' WHERE username='$_GET[un]'";
					
			$res = mysqli_query($link, $querry);
			
			if($res){	echo'
					<i class= "fa fa-check">&nbsp suspended</i>
					';}
			
			}
			
		else{
			
			//if its to unsuspend an account
			
			if($status == 'unsuspend'){
			
				$querry = "UPDATE users SET mode='' WHERE username='$_GET[un]'";
					
			$res = mysqli_query($link, $querry);
			
			if($res){	echo'
					<i class= "fa fa-check">&nbsp unsuspended</i>
					';}
			
			}
				}
if($status == 'unverify'){
			
				$querry = "UPDATE users SET verification='unverified' WHERE username='$_GET[un]'";
					
			$res = mysqli_query($link, $querry);
			
			if($res){	echo'
					<i class= "fa fa-check">&nbsp unverified</i>
					';}
			
			}
			
			
			
// To verify a user

if($status == 'verify'){
			
				$querry = "UPDATE users SET verification='verified' WHERE username='$_GET[un]'";
					
			$res = mysqli_query($link, $querry);
			
			if($res){	echo'
					<i class= "fa fa-check">&nbsp verified</i>
					';}
			
			}
			
			
				
			}else{echo'status string not stated';}
		
		
	
	
}else{
	header("location: log in.html");
	
}

?>