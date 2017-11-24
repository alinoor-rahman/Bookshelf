<!DOCTYPE html>
<html>
<body>

<?php
$users=array("bob"=>"123","raju"=>"1234","mina"=>"456");

$t=1234;
foreach($users as $x => $x_value)
{	
	if($x_value==$t)
		
		{	echo"<br/>";
		    echo"The value of t is : ";
			echo $x;
			
		}
}

?>

</body>
</html> 