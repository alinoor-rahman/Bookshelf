
<?php
$xml=simplexml_load_file("cred.xml") or die("Error: Cannot create object");


if(strlen($_POST["username"])==0){
	echo "No Input On Username field!";
}
echo "<br>";

if(strlen($_POST["pass"])==0){
	echo "No Input On Password field!";
}

	
echo "<br>";

		$username = $_POST["username"];
		$password = $_POST["pass"];	
		
$temp=0;
foreach($xml->user as $st){
	if(($st->uname == $username)&&($st->pass == $password)){
		//echo "Hello ".$st->uname;
		echo "Login Success";
		$temp=1;
		
	}
	
}

if($temp!=1)
	{
		echo "Login Failed!";
	}

?>