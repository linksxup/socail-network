

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

      

<?php
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
		echo'<ul class="twit" role="navigation">';
	echo'<li>';
	
	echo'<a href="log in.html"><h4>Log in</h4></button></a>';

	echo'</li>';

	echo'<li>';
	echo'<a href="sign up.html"><h4>Sign up</h4></a>';

	echo'</li>';
	echo'</ul>';
        exit();
		}
 
 
if(isset($user))
{
	$uniqueid=$_GET['pid'];
	if(isset($uniqueid)){
		require'database.php';
		
		$query1 = "SELECT * FROM linkupdates  WHERE uniqueid='$uniqueid'";
		$result1 = mysqli_query($link, $query1);
		$resultt1=mysqli_fetch_array($result1);
		

		
				
		
		
		$queryyy = "SELECT * FROM notifications  WHERE uniqueid='$uniqueid' AND format='likes'";
		$result = mysqli_query($link, $queryyy); 
	   if(mysqli_num_rows($result) <= 0){
		  $queryy = "SELECT * FROM linkupdates  WHERE uniqueid='$uniqueid'";
		  $resultt = mysqli_query($link, $queryy);
		$fetch=mysqli_fetch_array($resultt);
			
		  
		 $stm=mysqli_query($link, "INSERT INTO notifications (username, status, url, achieve, format, uniqueid,message) VALUES ('$fetch[username]', 'regular', 'liked.php?pid=$uniqueid', 'unread', 'likes', '$uniqueid','')");
		
	   
	   }
		
	/////////////////////
	
		  $queryy = "SELECT * FROM linkupdates  WHERE uniqueid='$uniqueid'";
		  $resultt = mysqli_query($link, $queryy);
		$fetch=mysqli_fetch_array($resultt);

		 
		 if($user != $fetch['username'])
		 {
		//////////
		 	//Sending a push notification to the user that owns the linkupdate if such user has fcm token in the db
				require'database.php';
				$request= "SELECT * FROM users WHERE username='$fetch[username]'";	
$next= mysqli_query($link, $request);
$gotten= mysqli_fetch_array($next);	
				
				/////////////
				if(!empty($gotten['token'])){
					
						if($gotten["profilepic"] != "")
	
	{  $image= $gotten["profilepic"]; }else{if($gotten["gender"] == "male")
		{$image='/gender/male.jpg'; }else{$image='/gender/female.jpg';}}
					
					
					
					
					
					
					
					define('SERVER_API_KEY', 'AAAAvZ4y-FE:APA91bFHqOSBx3mjYnakQEnqoTnjSASoqJuqYw-wWryFcyD9gOQCd1VgkeRUnsG4FLJMDP1s0K6O8nexaz8eU9ykErPjXDSFe7bHowF9_Hj69fugJr_gpCeDQ2lsZBmyhVCLu4m760QZ');

//$tokens = mysqli_fetch_array($result);

		$registrationIds[] = $gotten['token'];

//print_r($registrationIds);
	
	$header = [
		'Authorization: Key=' . SERVER_API_KEY,
		'Content-Type: Application/json'
	];

	$msg = [
		'title' => 'Linksxup',
		'body' => "$user likes your linkupdate",
		'icon' => '/icon.png',
		'click_action'=> "/liked.php?pid=$uniqueid",
	];

	$payload = [
		'registration_ids' 	=> $registrationIds,
		'data'				=> $msg
	];

	$curl = curl_init();

	curl_setopt_array($curl, array(
	  CURLOPT_URL => "https://fcm.googleapis.com/fcm/send",
	  CURLOPT_RETURNTRANSFER => true,
	  CURLOPT_CUSTOMREQUEST => "POST",
	  CURLOPT_POSTFIELDS => json_encode( $payload ),
	  CURLOPT_HTTPHEADER => $header
	));

	$response = curl_exec($curl);
	$err = curl_error($curl);

	curl_close($curl);

	//if ($err) {
	//  echo "cURL Error #:" . $err;
	//} else {
	  //echo $response;
	//}	
					
				}
		//////////
		 }
	
	/////////////////////	
		
		
		if($resultt1){
			if(empty($resultt1['likes'])){
				
				$likes[]="$user";
				$likess=serialize($likes);
				
				$querry = "UPDATE linkupdates SET likes='$likess' WHERE uniqueid='$uniqueid'";
			$res = mysqli_query($link, $querry);
			if($res){
				$query1 = "SELECT * FROM linkupdates  WHERE uniqueid='$uniqueid'";
		$result1 = mysqli_query($link, $query1);
		$resultt=mysqli_fetch_array($result1);

		
		//This is what i'm trying
		
	$fileext = explode('.',$resultt['uniqueid']);
	$ui = strtolower(end($fileext));
			echo'<div id="cont_'; print_r($ui); echo'">';		

echo'<ul class="twit" role="navigation">';
			if(empty($resultt['remarks'])){
				
				echo'<li><font color=""><i class="fa fa-comment" id="remark_un=';echo$resultt['username']; echo'&pid='; echo$resultt['uniqueid']; echo'"></i></font></li>';
			}else{
				$r=unserialize($resultt['remarks']);
				if(in_array($user,$r)){
					
					echo'<li><font color="57b846"><i class="fa fa-comment" id="remark_un=';echo$resultt['username']; echo'&pid='; echo$resultt['uniqueid']; echo'"></i>&nbsp'; print_r(count($r)); echo'</font></li>';
					
			}else{echo'<li><font color=""><i class="fa fa-comment" id="remark_un=';echo$resultt['username']; echo'&pid='; echo$resultt['uniqueid']; echo'"></i>&nbsp'; print_r(count($r)); echo'</font></li>';}}
				
				
					// For awards gotten
			
				if(empty($resultt['awards1'])){
				echo'<li><font color="darkgoldenrod"><i class="fa fa-star" data-target="stars.php?un=';echo$resultt['username']; echo'&pid='; echo$resultt['uniqueid']; echo'" id="like_'; print_r($ui); echo'">&nbsp';  echo'</i></font></li>';}
				else{//check if my username is in the array of awarders
					$r=unserialize($resultt['awards1']);
				if(in_array($user,$r)){
					
					echo'<li><font color="gold"><i class="fa fa-star" data-target="stars.php?un=';echo$resultt['username']; echo'&pid='; echo$resultt['uniqueid']; echo'" id="like_'; print_r($ui); echo'">&nbsp'; echo	$resultt['awards']; echo'</i></font></li>';
				}else{
					
					echo'<li><font color="darkgoldenrod"><i class="fa fa-star" data-target="stars.php?un=';echo$resultt['username']; echo'&pid='; echo$resultt['uniqueid']; echo'" id="like_'; print_r($ui); echo'">&nbsp'; echo	$resultt['awards']; echo'</i></font></li>';
					
				}
				
				
					}
				
				
				
				
				if(empty($resultt['likes'])){
				
				echo'<li><font color=""><i class="fa fa-heart" data-target="likes.php?un=';echo$resultt['username']; echo'&pid='; echo$resultt['uniqueid']; echo'" id="like_'; print_r($uniqueid); echo'"></i></font></li>';
			}if(!empty($resultt['likes'])){
				
				$l=unserialize($resultt['likes']);
				if(in_array($user,$l)){	
				echo'<li><font color="red"><i class="fa fa-heart" data-target="likes.php?un=';echo$resultt['username']; echo'&pid='; echo$resultt['uniqueid']; echo'" id="like_'; print_r($uniqueid); echo'">&nbsp'; print_r(count($l)); echo'</i></font></li>';
				}else{
					
				echo'<li><font color=""><i class="fa fa-heart" data-target="likes.php?un=';echo$resultt['username']; echo'&pid='; echo$resultt['uniqueid']; echo'" id="like_'; print_r($uniqueid); echo'">&nbsp'; print_r(count($l)); echo'</i></font></li>';	
					
				}
				
			}
			
			echo'</ul></div>';
		}
			
		}else{
			
		$query1 = "SELECT * FROM linkupdates  WHERE uniqueid='$uniqueid'";
		$result1 = mysqli_query($link, $query1);
		$resultt1=mysqli_fetch_array($result1);
		
		$u=unserialize($resultt1['likes']);
		
		
if(in_array($user,$u)){
	
	for($j=0;$j<count($u);++$j)
{$x="$user";
if($u[$j]==$x)
{unset($u[$j]);
$ui=array_values($u);
$uii=serialize($ui);

$querry = "UPDATE linkupdates SET likes='$uii' WHERE uniqueid='$uniqueid'";
			$res = mysqli_query($link, $querry);
			if($res){
				
				$query1 = "SELECT * FROM linkupdates  WHERE uniqueid='$uniqueid'";
		$result1 = mysqli_query($link, $query1);
		$resultt=mysqli_fetch_array($result1);
				
			
//This is what i'm trying
		
	$fileext = explode('.',$resultt['uniqueid']);
	$ui = strtolower(end($fileext));
			echo'<div id="cont_'; print_r($ui); echo'">';
			
echo'<ul class="twit" role="navigation">';
			if(empty($resultt['remarks'])){
				
				echo'<li><font color=""><i class="fa fa-comment" id="remark_un=';echo$resultt['username']; echo'&pid='; echo$resultt['uniqueid']; echo'"></i></font></li>';
			}else{
				$r=unserialize($resultt['remarks']);
				if(in_array($user,$r)){
					
					echo'<li><font color="57b846"><i class="fa fa-comment" id="remark_un=';echo$resultt['username']; echo'&pid='; echo$resultt['uniqueid']; echo'"></i>&nbsp'; print_r(count($r)); echo'</font></li>';
					
			}else{echo'<li><font color=""><i class="fa fa-comment" id="remark_un=';echo$resultt['username']; echo'&pid='; echo$resultt['uniqueid']; echo'"></i>&nbsp'; print_r(count($r)); echo'</font></li>';}}
				
				
				
					// For awards gotten
			
				if(empty($resultt['awards1'])){
				echo'<li><font color="darkgoldenrod"><i class="fa fa-star" data-target="stars.php?un=';echo$resultt['username']; echo'&pid='; echo$resultt['uniqueid']; echo'" id="like_'; print_r($ui); echo'">&nbsp';  echo'</i></font></li>';}
				else{//check if my username is in the array of awarders
					$r=unserialize($resultt['awards1']);
				if(in_array($user,$r)){
					
					echo'<li><font color="gold"><i class="fa fa-star" data-target="stars.php?un=';echo$resultt['username']; echo'&pid='; echo$resultt['uniqueid']; echo'" id="like_'; print_r($ui); echo'">&nbsp'; echo	$resultt['awards']; echo'</i></font></li>';
				}else{
					
					echo'<li><font color="darkgoldenrod"><i class="fa fa-star" data-target="stars.php?un=';echo$resultt['username']; echo'&pid='; echo$resultt['uniqueid']; echo'" id="like_'; print_r($ui); echo'">&nbsp'; echo	$resultt['awards']; echo'</i></font></li>';
					
				}
				
				
					}
				
				
				
				if(empty($resultt['likes'])){
				
				echo'<li><font color=""><i class="fa fa-heart" data-target="likes.php?un=';echo$resultt['username']; echo'&pid='; echo$resultt['uniqueid']; echo'" id="like_'; print_r($uniqueid); echo'"></i></font></li>';
			}if(!empty($resultt['likes'])){
				
				$l=unserialize($resultt['likes']);
				if(in_array($user,$l)){	
				echo'<li><font color="red"><i class="fa fa-heart" data-target="likes.php?un=';echo$resultt['username']; echo'&pid='; echo$resultt['uniqueid']; echo'" id="like_'; print_r($uniqueid); echo'">&nbsp'; print_r(count($l)); echo'</i></font></li>';
				}else{
					
				echo'<li><font color=""><i class="fa fa-heart" data-target="likes.php?un=';echo$resultt['username']; echo'&pid='; echo$resultt['uniqueid']; echo'" id="like_'; print_r($uniqueid); echo'">&nbsp'; print_r(count($l)); echo'</i></font></li>';	
					
				}
				
			}
			
			echo'</ul></div>';
				
				
				
				
				
				
				
				
			}

}}
	
}else{$query1 = "SELECT * FROM linkupdates  WHERE uniqueid='$uniqueid'";
		$result1 = mysqli_query($link, $query1);
		$resultt1=mysqli_fetch_array($result1);
		
		$u=unserialize($resultt1['likes']);
		
		$u[]="$user";
				$likess=serialize($u);
		
		$querry = "UPDATE linkupdates SET likes='$likess' WHERE uniqueid='$uniqueid'";
			$res = mysqli_query($link, $querry);
			
			if($res){
				
				$query1 = "SELECT * FROM linkupdates  WHERE uniqueid='$uniqueid'";
		$result1 = mysqli_query($link, $query1);
		$resultt=mysqli_fetch_array($result1);
				
//This is what i'm trying
		
	$fileext = explode('.',$resultt['uniqueid']);
	$ui = strtolower(end($fileext));
			echo'<div id="cont_'; print_r($ui); echo'">';
			
echo'<ul class="twit" role="navigation">';
			if(empty($resultt['remarks'])){
				
				echo'<li><font color=""><i class="fa fa-comment" id="remark_un=';echo$resultt['username']; echo'&pid='; echo$resultt['uniqueid']; echo'"></i></font></li>';
			}else{
				$r=unserialize($resultt['remarks']);
				if(in_array($user,$r)){
					
					echo'<li><font color="57b846"><i class="fa fa-comment" id="remark_un=';echo$resultt['username']; echo'&pid='; echo$resultt['uniqueid']; echo'"></i>&nbsp'; print_r(count($r)); echo'</font></li>';
					
			}else{echo'<li><font color=""><i class="fa fa-comment" id="remark_un=';echo$resultt['username']; echo'&pid='; echo$resultt['uniqueid']; echo'"></i>&nbsp'; print_r(count($r)); echo'</font></li>';}}
				
				
				
					// For awards gotten
			
				if(empty($resultt['awards1'])){
				echo'<li><font color="darkgoldenrod"><i class="fa fa-star" data-target="stars.php?un=';echo$resultt['username']; echo'&pid='; echo$resultt['uniqueid']; echo'" id="like_'; print_r($ui); echo'">&nbsp';  echo'</i></font></li>';}
				else{//check if my username is in the array of awarders
					$r=unserialize($resultt['awards1']);
				if(in_array($user,$r)){
					
					echo'<li><font color="gold"><i class="fa fa-star" data-target="stars.php?un=';echo$resultt['username']; echo'&pid='; echo$resultt['uniqueid']; echo'" id="like_'; print_r($ui); echo'">&nbsp'; echo	$resultt['awards']; echo'</i></font></li>';
				}else{
					
					echo'<li><font color="darkgoldenrod"><i class="fa fa-star" data-target="stars.php?un=';echo$resultt['username']; echo'&pid='; echo$resultt['uniqueid']; echo'" id="like_'; print_r($ui); echo'">&nbsp'; echo	$resultt['awards']; echo'</i></font></li>';
					
				}
				
				
					}
				
				
				
				if(empty($resultt['likes'])){
				
				echo'<li><font color=""><i class="fa fa-heart" data-target="likes.php?un=';echo$resultt['username']; echo'&pid='; echo$resultt['uniqueid']; echo'" id="like_'; print_r($uniqueid); echo'"></i></font></li>';
			}if(!empty($resultt['likes'])){
				
				$l=unserialize($resultt['likes']);
				if(in_array($user,$l)){	
				echo'<li><font color="red"><i class="fa fa-heart" data-target="likes.php?un=';echo$resultt['username']; echo'&pid='; echo$resultt['uniqueid']; echo'" id="like_'; print_r($uniqueid); echo'">&nbsp'; print_r(count($l)); echo'</i></font></li>';
				}else{
					
				echo'<li><font color=""><i class="fa fa-heart" data-target="likes.php?un=';echo$resultt['username']; echo'&pid='; echo$resultt['uniqueid']; echo'" id="like_'; print_r($uniqueid); echo'">&nbsp'; print_r(count($l)); echo'</i></font></li>';	
					
				}
				
			}
			
			echo'</ul></div>';
				
				
				
				
				
				
			}
		
		
		
		}
		
		
		}
		
			
			}
				
			
			}
			
		}else{
	header("location: log in.html");
	
}

?>