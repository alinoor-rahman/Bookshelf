
<?php

session_start();
$tmp=1;
if(strlen($_POST["username"])==0){
	echo "No Input On Username field!";
	$tmp=0;
}
echo "<br>";

if(strlen($_POST["pass"])==0){
	echo "No Input On Password field!";
	$tmp=0;
}

	
echo "<br>";

		$_SESSION["username"] = $_POST["username"];
		$_SESSION["password"] = $_POST["pass"];	
		

if($tmp==1)
{
	header('Location:Authentication.php');
}

?>