<pre>
<?php
session_start();
if($_SESSION["sessFlag"]==1)
{

$s=$_FILES['fileToUpload']['tmp_name'];
$n="aiub.jpg";
$sz=$_FILES['fileToUpload']['size'];

/*if(file_exists("".$n)){
	echo "file already exists";
}
*/

	move_uploaded_file($s,"".$n);


header('Location:profilePic.php');
}
else
{
	echo "Error!!!";
}

?>
</pre>