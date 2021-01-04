<?php
$paper[]="copier";
$paper[]="inkjet";
print_r($paper);
		
		echo count($paper);
	for($j=0;$j<count($paper);++$j)
	{echo" $paper[$j] ";}

$e=serialize($paper);
echo"$e";
$r=unserialize($e);
print_r($r);
$paper[]="caaaaaar";
print_r($paper);
echo count($paper);
for($j=0;$j<count($paper);++$j)
{echo" $paper[$j] ";}
for($j=0;$j<count($paper);++$j)
{$x="copier";
if($paper[$j]==$x)
{unset($paper[$j]);
$paper=array_values($paper);
print_r($paper);
}
}

require_once 'database.php';
$website1=mysqli_query($link, "SELECT file_type FROM linkupdates WHERE username='mr linksxup' 	AND time='2020-01-10 19:09:10' ");
$ti=mysqli_fetch_row($website1);

print_r(unserialize($ti[0]));
$d= unserialize($ti[0]);
echo $d[5];


		
?>
