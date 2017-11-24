<?php
session_start();
if($_SESSION["sessFlag"]==1)
{
	
}

else
{
		header('Location:bookLogin.html');
		
}
?>

<html>
	<head></head>
	
	<body bgcolor="#E6E6FA">
	<center><h1><p>BookBro's</p></h1></center>
	<center><h1>Profile Picture</h1>

 <center><h3><form action="picUpload.php" method="post" enctype="multipart/form-data" name="mfm"><pre>
  

  Select file to upload : <input type="file" name="fileToUpload">
		<input type="submit" value="Upload File" name="submit">
  </pre>
  
  <img src="aiub.jpg" alt="Picture" style="width:200;height:200;">
 </form></h3></center>
 
 
 <form action="logout.php" method="post">

  <input type="Submit" name="sbt" value="Logout" size ="40">
 </form>

	
</center>

	</body>
</html>