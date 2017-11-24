
<?php

print_r($GLOBALS);


if(strlen($_POST["firstname"])==0){
	echo "No Input On firstname field!";
}
echo "<br>";

if(strlen($_POST["lastname"])==0){
	echo "No Input On lastname field!";
}
echo "<br>";

$gender=$_POST["gender"];

if(($gender!="Male")&& ($gender!="Female")){
	echo "Gender not selected";
}
echo "<br>";


if(strlen($_POST["mobileno"])==0){
	echo "No Input On mobileno field!";
	
}
if(strlen($_POST["mobileno"])!=11)
	{
		echo "Invaild Number!";
	}
	
echo "<br>";

if(strlen($_POST["email"])==0){
	echo "No Input On email field!";
}

echo "<br>";

if(strlen($_POST["pass"])==0){
	echo "No Input On pass field!";
}

if(strlen($_POST["pass"])<=8&& strlen($_POST["pass"])>0){
	echo "Password must contain atleast 8 characters";
}

echo "<br>";

if(strlen($_POST["confirmpass"])==0){
	echo "No Input On confirmpass field!";
}

if($_POST["confirmpass"]!=$_POST["pass"]){
	echo "Password & Confirm password missmatch";
}

if (($_POST["chkbox"]!="Agree")) {
echo "Agreement not accepted!";
}
	
echo "<br>";

$firstName = $_POST["firstname"];
		$lastName = $_POST["lastname"];	
		$phone = $_POST["mobileno"];
		$email = $_POST["email"];
		$password = $_POST["pass"];
		$cpassword = $_POST["confirmpass"];
		$gender = $_POST["gender"];
		$day = $_POST["date"];
		$month= $_POST["month"];
		$year = $_POST["year"];

echo "insert into table values(".$firstName."".$lastName.",".$email.",".$date."-".$month."-".$year.")";

?>

