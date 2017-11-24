
<?php
$myfile = fopen("record.txt", "r") or die("Unable to open file!");


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



while($c=fgets($myfile)){
	//echo $c;
	$a=explode(" ",$c);
	//print_r($a);
	if(($a[0]==$username)&& ($a[1]==$password))
	{
		echo "Login Success ".$a[0];
	$temp=1;
	echo "<br>";
	}
}
fclose($myfile);
	


if($temp!=1)
	{
		echo "Login Failed!";
	}

?>