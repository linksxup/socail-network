
<?php 
	
		setcookie("darkmode","activate",time() + 2500000);
				

	define('SERVER_API_KEY', 'AAAAvZ4y-FE:APA91bFHqOSBx3mjYnakQEnqoTnjSASoqJuqYw-wWryFcyD9gOQCd1VgkeRUnsG4FLJMDP1s0K6O8nexaz8eU9ykErPjXDSFe7bHowF9_Hj69fugJr_gpCeDQ2lsZBmyhVCLu4m760QZ');

	require 'database.php';
	$username= "---Mhiz-bel";
	$query = "SELECT * FROM users WHERE username='$username'";

$result = mysqli_query($link, $query);
	
	
	//$db = new DbConnect;
	//$conn = $db->connect();
	//$stmt = $conn->prepare('SELECT * FROM tokens');
	//$stmt->execute();
	//$tokens = $stmt->fetchAll(PDO::FETCH_ASSOC);
$tokens = mysqli_fetch_array($result);
//print_r($tokens);
	//foreach ($tokens as $token) {
		$registrationIds[] = $tokens['token'];
	//}
print_r($registrationIds);
	// $tokens = ['cCLA1_8Inic:APA91bGhuCksjWEETYWVOh04scsZInxdWmXekEr5F9-1zJuTDZDw3It_tNmpA__PmoxDTISZzplD_ciXvsuw2pMtYSzdfIUAUfcTLnghvJS0CVkYW9sVx2HnF1rqnxsFgSdYmcXpHKLs'];
	
	$header = [
		'Authorization: Key=' . SERVER_API_KEY,
		'Content-Type: Application/json'
	];

	$msg = [
		'title' => 'Linksxup',
		'body' => 'Team tv linkup to you',
		'icon' => '/icon.png',
		'image' => '/female.jpg',
		'action'=> '/info.php',
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

	if ($err) {
	  echo "cURL Error #:" . $err;
	} else {
	  echo $response;
	}
 ?>