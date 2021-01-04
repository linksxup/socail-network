

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
		
		///$query1 = "SELECT * FROM users  WHERE username='$user'";
		//$result1 = mysqli_query($link, $query1);
		//$resultt1=mysqli_fetch_array($result1);
		

		
				
		
		
		//$queryyy = "SELECT * FROM notifications  WHERE uniqueid='$uniqueid' AND format='likes'";
		//$result = mysqli_query($link, $queryyy); 
	   //if(mysqli_num_rows($result) <= 0){
		  //$queryy = "SELECT * FROM linkupdates  WHERE uniqueid='$uniqueid'";
		  //$resultt = mysqli_query($link, $queryy);
			//while($fetch=mysqli_fetch_array($resultt))
			//{
		  
		 //$stm=mysqli_query($link, "INSERT INTO notifications (username, status, url, achieve, format, uniqueid) VALUES ('$fetch[username]', 'regular', 'liked.php?pid=$uniqueid', 'unread', 'likes', '$uniqueid')");
	   //}
	   //}
		
		
		
		
		
		if(!empty($status)){
			$un=$_GET["un"];
	$status=$_GET["status"];
	
			
			
			
			
			
			
		require'database.php';
		
		$query1 = "SELECT * FROM users  WHERE username='$user'";
		$result1 = mysqli_query($link, $query1);
		$resultt1=mysqli_fetch_array($result1);
		
			
			if($status == 'linkup'){
				if(empty($resultt1['linkups'])){
					$linkup[]="$user";
					$linkup[]="$_GET[un]";
				$li=serialize($linkup);
					
		
				$querry = "UPDATE users SET linkups='$li' WHERE username='$user'";
					
			$res = mysqli_query($link, $querry);
			
			if($res){
		require'database.php';
		$result = mysqli_query($link, "SELECT * FROM users  WHERE username='$un'");
		$resul=mysqli_fetch_array($result);
				
					if(empty($resul['linkedup'])){
					$linkedup[]="$user";
				$lin=serialize($linkedup);
				
				
			$re= mysqli_query($link, "UPDATE users SET linkedup='$lin' WHERE username='$un'");
				
				if($re){
				echo'<ul class="hmm">
					<button class= "fa fa-check">&nbsp Linkedup</button>
					</ul>';
					
					require'database.php';
					 $stm=mysqli_query($link, "INSERT INTO notifications (username, status, url, achieve, format, message) VALUES ('$_GET[un]', 'regular', 'info.php?un=$user', 'unread', 'linkup', '$user')");
					}}else{
						
						$linkedup=unserialize($resul['linkedup']);
		
						$linkedup[]="$user";
				$lin=serialize($linkedup);
				
				
			$r= mysqli_query($link, "UPDATE users SET linkedup='$lin' WHERE username='$un'");
				
				if($r){
				echo'<ul class="hmm">
					<i class= "fa fa-check"><h6>Linked up</h6></i>
					</ul>';
					
					require'database.php';
					 $stm=mysqli_query($link, "INSERT INTO notifications (username, status, url, achieve, format, message,uniqueid) VALUES ('$_GET[un]', 'regular', 'info.php?un=$user', 'unread', 'linkup', '$user','')");
					
					}
					}
					
					
					}
					
				}else{
					
					$query1 = "SELECT * FROM users  WHERE username='$user'";
		$result1 = mysqli_query($link, $query1);
		$resultt1=mysqli_fetch_array($result1);
		
		$u=unserialize($resultt1['linkups']);
		
		if(!in_array($_GET['un'], $u)){
		
		$u[]="$_GET[un]";
				$li=serialize($u);
				
					$querry = "UPDATE users SET linkups='$li' WHERE username='$user'";
			$res = mysqli_query($link, $querry);
			
			if($res){
				
				require'database.php';
				
				$resulttt = mysqli_query($link, "SELECT * FROM users  WHERE username='$_GET[un]'");
		$resull=mysqli_fetch_array($resulttt);
				
					if(empty($resull['linkedup'])){
					$linkedup[]="$user";
				$lin=serialize($linkedup);
				
			$re= mysqli_query($link, "UPDATE users SET linkedup='$lin' WHERE username='$_GET[un]'");
					
				
				if($re){
				echo'<ul class="hmm">
					<i class= "fa fa-check">&nbsp Linked up</i>
					</ul>';
					
					require'database.php';
					 $stm=mysqli_query($link, "INSERT INTO notifications (username, status, url, achieve, format, message) VALUES ('$_GET[un]', 'regular', 'info.php?un=$user', 'unread', 'linkup', '$user')");
					
					}}else{
						
						$linkedup=unserialize($resull['linkedup']);
		
						$linkedup[]="$user";
				$lin=serialize($linkedup);
				
				
				
			$r= mysqli_query($link, "UPDATE users SET linkedup='$lin' WHERE username='$_GET[un]'");
				
				if($r){
				echo'<ul class="hmm">
					<i class= "fa fa-check"><h6>Linked up</h6></i>
					</ul>';
					
					require'database.php';
					 $stm=mysqli_query($link, "INSERT INTO notifications (username, status, url, achieve, format, message,uniqueid) VALUES ('$_GET[un]', 'regular', 'info.php?un=$user', 'unread', 'linkup', '$user','')");
					
					}
					}
					
				
				
				
				
				
				
				
			}
			////////
				}
			///////
				}
				//Create in App notification alert
	require'database.php';
	
		
	
	   
	   
		//Sending a push notification to the user that was linkedup to if such user has fcm token in the db
				
				$request= "SELECT token FROM users WHERE username='$_GET[un]'";	
$next= mysqli_query($link, $request);
$gotten= mysqli_fetch_array($next);	
				
				/////////////
				if(!empty($gotten['token'])){
					
						if($resultt1["profilepic"] != "")
	
	{  $image= $resultt1["profilepic"]; }else{if($resultt1["gender"] == "male")
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
		'body' => "$user linkup to you",
		'icon' => '/icon.png',
		'image' => "$image",
		'click_action'=> "/info.php?un=$user",
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
	//  echo $response;
	//}	
			






			
				}
				//////////
				
				
			}
		if($status == 'unlink') {
			require'database.php';
			$query1 = "SELECT * FROM users  WHERE username='$user'";
		$result1 = mysqli_query($link, $query1);
		$resultt1=mysqli_fetch_array($result1);
		
		$u=unserialize($resultt1['linkups']);
		
		$un=$_GET["un"];
if(in_array($un,$u)){
	
	for($j=0;$j<count($u);++$j)
{$x="$_GET[un]";
if($u[$j]==$x)
{unset($u[$j]);
$ui=array_values($u);
$uii=serialize($ui);

$querry = "UPDATE users SET linkups='$uii' WHERE username='$user'";
			$res = mysqli_query($link, $querry);
			
			if($res){
				
				
				
				
				
				
				
				$result = mysqli_query($link, "SELECT * FROM users  WHERE username='$_GET[un]'");
		$resul=mysqli_fetch_array($result);
			
						
						$linkedup=unserialize($resul['linkedup']);
		
						if(in_array($user, $linkedup)){
	
	for($j=0;$j<count($linkedup);++$j)
{$x="$user";
if($linkedup[$j]==$x)
{unset($linkedup[$j]);
$ui=array_values($linkedup);
$lin=serialize($ui);
				
				
				
			$r= mysqli_query($link, "UPDATE users SET linkedup='$lin' WHERE username='$_GET[un]'");
				
				if($r){
					echo'<ul class="hmm">
	<i class= "fa fa-unlink">&nbsp dislinked</i>
						</ul>';}}}}
					
					
				
				
				
				
				
				
				
				
				
				
				
		}
			
		}
		
}
		
		
}	
		
		
		
		}
			
		if($status == 'remove'){
			require'database.php';
					$query1 = "SELECT * FROM users  WHERE username='$user'";
		$result1 = mysqli_query($link, $query1);
		$resultt1=mysqli_fetch_array($result1);
		
		$u=unserialize($resultt1['linkedup']);
		
	$un=$_GET["un"];	
if(in_array($un,$u)){
	
	for($j=0;$j<count($u);++$j)
{$x="$_GET[un]";
if($u[$j]==$x)
{unset($u[$j]);
$ui=array_values($u);
$uii=serialize($ui);

$querry = "UPDATE users SET linkedup='$uii' WHERE username='$user'";
			$res = mysqli_query($link, $querry);
			
			if($res){
				require'database.php';
				
				$result = mysqli_query($link, "SELECT * FROM users  WHERE username='$_GET[un]'");
		$resul=mysqli_fetch_array($result);
			
						
						$linkups=unserialize($resul['linkups']);
		
						if(in_array($user,$linkups)){
	
	for($j=0;$j<count($linkups);++$j)
{$x="$user";
if($linkups[$j]==$x)
{unset($linkups[$j]);
$ui=array_values($linkups);
$lin=serialize($ui);
				
				require'database.php';
				
			$r= mysqli_query($link, "UPDATE users SET linkups='$lin' WHERE username='$_GET[un]'");
				
				if($r){
							echo'<ul class="hmm">
	<i class= "fa fa-unlink">&nbsp removed</i>
	</ul>';}}}}

		}
			
		}
		
}
		
		
}	
		
	
			
		}
			
			
			
			
			
		}else{echo"Status string not stated!!!";}
		
	
	
}else{
	header("location: log in.html");
	
}

?>