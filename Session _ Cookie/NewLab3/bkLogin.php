<pre>
<?php

$s=$_FILES['fileToUpload']['tmp_name'];
$n="aiub.jpg";
$sz=$_FILES['fileToUpload']['size'];

/*if(file_exists("".$n)){
	echo "file already exists";
}
*/

	move_uploaded_file($s,"".$n);


header('Location:bookLogin.html');

?>
</pre>