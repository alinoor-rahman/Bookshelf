<?php

$xml=simplexml_load_file("cred.xml") or die("Error: Cannot create object");


$username=$_COOKIE["username"];
$password=$_COOKIE["password"];

foreach($xml->user as $st){
	if(($st->uname == $username)&&($st->pass == $password)){
		//echo "Hello ".$st->uname;
		$temp=1;
		
	}
	
}

if($temp==1)
{
	setcookie("tempCookie",$temp,time()+3000);
	header('Location:home.php');
	
}

else
{
		header('Location:bookLogin.html');
		
}

?>
