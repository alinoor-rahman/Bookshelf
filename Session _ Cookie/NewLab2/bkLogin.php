
<?php

setcookie("username",$_POST["username"],time()+5000);
setcookie("password",$_POST["pass"],time()+3000);


$tmp=1;

/*
if(isset($_COOKIE["username"])) {
					setcookie ("username",$_POST["username"]);
				
				}
if(isset($_COOKIE["password"])) {
					setcookie ("password",$_POST["pass"]);
					
				}
				*/


if(strlen($_POST["username"])==0){
	echo "No Input On Username field!";
	$tmp=0;
}
echo "<br>";

if(strlen($_POST["pass"])==0){
	echo "No Input On Password field!";
	$tmp=0;
}
	

if($tmp==1)
{	
	header('Location:Authentication.php');
}

?>