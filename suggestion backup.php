echo"<fieldset>";
			echo"<font color='#57b846'>Linkup suggestion</font>
	<hr>		
			<table class='table table-striped table-hover'>

                <tbody>";	
		require'database.php';
	
		$quer = "SELECT * FROM users  WHERE username='$user';";

$fetch = mysqli_query($link, $quer);
	
$data = mysqli_fetch_array($fetch);	
	
	if(empty($data['linkups'])){
		require'database.php';
	
		$que = "SELECT * FROM users ORDER  BY RAND()  LIMIT 5 OFFSET 0;";

$fetc = mysqli_query($link, $que);

				while($dat = mysqli_fetch_array($fetc)){
					
					if($dat['username'] != $user){
                    echo"<tr>
					
					<td>";
					
					if($dat["profilepic"] !== "")
	{
	echo'<a href="'; echo $dat["profilepic"]; echo'">
	<span class="login100-form-avatar">';}else{ echo'
	<span class="login100-form-avatar">';}
	
	if($dat["profilepic"] !== "")
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
						echo"<a href='info.php?un="; echo$dat['username']; echo"'><h5><br>";echo$dat['firstname']; echo$dat['lastname']; echo"</br></h5>
						<h5><br>Un@"; echo$dat['username']; echo"</br></h5></a>
						</td>";
						
						 echo"<td><br><i class='fa fa-map-marker' placeholder='location'></i></br>
						<h5><br>"; echo$dat['location']; echo"</br></h5>
						<hr>";
						
						if($dat["username"] != $user){
						echo'<div id="cont_'; echo$dat["username"]; echo'">
	<button class= "fa fa-link" data-target="linkup.php?un=';echo $dat["username"]; echo"&status=linkup"; echo'" id="like_'; echo$dat["username"]; echo'"> Linkup</button>
					</div>';}
	
	
					echo'</td>
                        <td><h5><br>Skill/pro</br></h5>
						<h5><br>'; echo$dat["pro"]; echo'</br></h5>
						
						</td>
						
                    </tr>';
					
				
				
		}
		
	
		

	
	
		}
		 
	}else{
		if(count(unserialize($data['linkups'])) <= 1){
		
		require'database.php';
	
		$que = "SELECT * FROM users ORDER  BY TIME DESC, RAND()  LIMIT 5 OFFSET 0;";

$fetc = mysqli_query($link, $que);

		echo"<table class='table table-striped table-hover'>

                <tbody>";
	
		
		
				
				while($dat = mysqli_fetch_array($fetc)){
					if(!in_array($dat["username"], $u)){
					if($dat['username'] != $user){
                    echo"<tr>
					
					<td>";
					
					if($dat["profilepic"] !== "")
	{
	echo'<a href="'; echo $dat["profilepic"]; echo'">
	<span class="login100-form-avatar">';}else{ echo'
	<span class="login100-form-avatar">';}
	
	if($dat["profilepic"] !== "")
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
						echo"<a href='info.php?un="; echo$dat['username']; echo"'><h5><br>";echo$dat['firstname']; echo$dat['lastname']; echo"</br></h5>
						<h5><br>Un@"; echo$dat['username']; echo"</br></h5></a>
						</td>";
						
						 echo"<td><br><i class='fa fa-map-marker' placeholder='location'></i></br>
						<h5><br>"; echo$dat['location']; echo"</br></h5>
						<hr>";
						
						if($dat["username"] != $user){
						echo'<div id="cont_'; echo$dat["username"]; echo'">
	<button class= "fa fa-link" data-target="linkup.php?un=';echo $dat["username"]; echo"&status=linkup"; echo'" id="like_'; echo$dat["username"]; echo'"> Linkup</button>
	</div>';}
	
	
					echo'</td>
                        <td><h5><br>Skill/pro</br></h5>
						<h5><br>'; echo$dat["pro"]; echo'</br></h5>
						
						</td>
						
                    </tr>';
					
				
				
		}
		
	
				}

	
	
		}
		
		
	}if(count(unserialize($data['linkups'])) > 1){
		$u= unserialize($data['linkups']);
		
		$otp=mt_rand(1,count($u) - 1);
		
		
		require'database.php';
	
		$que = "SELECT * FROM users  WHERE username='$u[$otp]'";

$fet = mysqli_query($link, $que);
	
$da = mysqli_fetch_array($fet);	

if(!empty($da['linkups']))

{$a=unserialize($da['linkups']);}else{$a= array();}
	
	print_r($a);
	
	$diff= array_diff($u, $a);
	 
	 if(!empty($diff)){
		 if(count($diff)<5){$coun=count($diff);}else{$coun= 5;}
		 for($j=0;$j<$coun;$j++){
			 
			 	require'database.php';
		
		$query = "SELECT * FROM users  WHERE username='$diff[$j]'";
		$result = mysqli_query($link, $query);
	$ro= mysqli_fetch_array($result);
	
	
				if(!in_array($ro["username"], $u)){
                    echo"<tr>
					
					<td>";
					
					if($ro["profilepic"] !== "")
	{
	echo'<a href="'; echo $ro["profilepic"]; echo'">
	<span class="login100-form-avatar">';}else{ echo'
	<span class="login100-form-avatar">';}
	
	if($ro["profilepic"] !== "")
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
	
	</td>
                        <td>';
						echo"<a href='info.php?un="; echo$ro['username']; echo"'><h5><br>";echo$ro['firstname']; echo$ro['lastname']; echo"</br></h5>
						<h5><br>Un@"; echo$ro['username']; echo"</br></h5></a>
						</td>";
						
						 echo"<td><br><i class='fa fa-map-marker' placeholder='location'></i></br>
						<h5><br>"; echo$ro['location']; echo"</br></h5>
						<hr>";
						if(!in_array($ro["username"], $u)){
						echo'<div id="cont_'; echo$ro["username"]; echo'">
	<button class= "fa fa-link" data-target="linkup.php?un=';echo $ro["username"]; echo"&status=linkup"; echo'" id="like_'; echo$ro["username"]; echo'"> Linkup</button>
				</div>';}
	
	
					echo'</td>
                        <td><h5><br>Skill/pro</br></h5>
						<h5><br>'; echo$ro["pro"]; echo'</br></h5>
						
						</td>
						
                    </tr>';
					
				
				
		}
			 
		 }
		 
	 }else{
		 echo"<table class='table table-striped table-hover'>

                <tbody>";
		 	require'database.php';
	
		$qu = "SELECT * FROM users ORDER  BY TIME DESC, RAND()  LIMIT 5 OFFSET 0;";

$fet = mysqli_query($link, $qu);

				while($da = mysqli_fetch_array($fet)){
					
                    echo"<tr>
					
					<td>";
					
					if($da["profilepic"] !== "")
	{
	echo'<a href="'; echo $da["profilepic"]; echo'">
	<span class="login100-form-avatar">';}else{ echo'
	<span class="login100-form-avatar">';}
	
	if($da["profilepic"] !== "")
	{
	echo'<img src="'; echo $da["profilepic"]; 


	}else{
		if($da["gender"] == "male")
		{echo'<img src="';echo'gender/male.jpg';}else{
		echo'<img src="';echo'gender/female.jpg';
	
	}
	}
	
	echo'"alt="AVATAR"> 
	</span>
	<a/>
	
	</td>
                        <td>';
						echo"<a href='info.php?un="; echo$da['username']; echo"'><h5><br>";echo$da['firstname']; echo$da['lastname']; echo"</br></h5>
						<h5><br>Un@"; echo$da['username']; echo"</br></h5></a>
						</td>";
						
						 echo"<td><br><i class='fa fa-map-marker' placeholder='location'></i></br>
						<h5><br>"; echo$da['location']; echo"</br></h5>
						<hr>";
						
						if($da['username'] != $user){
						echo'<div id="cont_'; echo$da["username"]; echo'">
	<button class= "fa fa-link" data-target="linkup.php?un=';echo $da["username"]; echo"&status=linkup"; echo'" id="like_'; echo$da["username"]; echo'"> Linkup</button>
				</div>';}
	
	
					echo'</td>
                        <td><h5><br>Skill/pro</br></h5>
						<h5><br>'; echo$da["pro"]; echo'</br></h5>
						
						</td>
						
                    </tr>';
					
				
				
		
		
	
		

	
	
		}
		 
	 }
	
	
	//print_r(count($diff));
	}

	
	}
	
		echo" </tbody>
            </table>
			<hr>
			  <a href='suggestions.php'>see more</a>";
	
	echo"</fieldset>";
				   