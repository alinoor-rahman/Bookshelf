<?php

$xml=simplexml_load_file("cred.xml") or die("Error: Cannot create object");

session_start();


$username=$_SESSION["username"];
$password=$_SESSION["password"];

foreach($xml->user as $st){
	if(($st->uname == $username)&&($st->pass == $password)){
		//echo "Hello ".$st->uname;
		$temp=1;
		
	}
	
}

$_SESSION["sessFlag"] = $temp;	

if($temp==1)
{
	header('Location:home.php');
	
}

else
{
		header('Location:bookLogin.html');
		
}

?>
