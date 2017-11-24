
<?php

$file=fopen('record.txt','a') or die("fle open error");

if(strlen($_POST["username"])==0){
	echo "No Input On Username field!";
}
echo "<br>";


	if(strlen($_POST["pass"])==0){
	echo "No Input On Password field!";
	}
	
	if(strlen($_POST["email"])==0){
	echo "No Input On email field!";
}
echo "<br>";
	

		$username = $_POST["username"];
		$password = $_POST["pass"];	
		$email = $_POST["email"];	

fwrite($file,"\r\n");
fwrite($file,$username." ".$password." ".$email."\n\r");

echo "Successful";




?>