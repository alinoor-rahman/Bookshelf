<?php
session_start();
if($_COOKIE["tempCookie"]==1)
{
	echo "Login Success";
}
else
{
	header('Location:bookLogin.html');
}

?>

<html>
	<head></head>
<body>
 <center><h3><form action="logout.php" method="post">

  <input type="Submit" name="sbt" value="Logout" size ="40">
 </form></h3></center>

	
</center>

	</body>
</html>