<?php
session_start();
setcookie("tempCookie",0,time()+3000);
header('Location:bookLogin.html');
?>