<?php
session_start();
unset($_SESSION["sessFlag"]);
header('Location:bookLogin.html');
?>