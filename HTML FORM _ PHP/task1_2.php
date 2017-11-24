<!DOCTYPE html>
<html>
<body>

<?php
$marks=array("raju"=>45,"mina"=>95,"mithu"=>82);

foreach($marks as $x => $x_value)
{


	if($x_value>=90)
	{
		echo "Grade of ".$x." is :A+";
		echo "<br/>";
		
	}
	else if($x_value>=80&&$x_value<90)
	{
		echo "Grade of ".$x." is :B";
		echo "<br/>";
	}
	else if($x_value>=70&&$x_value<80)
	{
		echo "Grade of ".$x." is :C";
		echo "<br/>";
	}
	
	else if($x_value<50)
	{
		echo "Grade of ".$x." is :F";
		echo "<br/>";
	}
	else{}
}
echo "<br/>The Students Who passed In the Exam Are: <br/>";
foreach($marks as $x => $x_value)
{	
	if($x_value>50)
		
		{
			echo $x;
			echo"<br/>";
		}
}

?>

</body>
</html> 