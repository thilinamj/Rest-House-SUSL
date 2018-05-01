<?php
session_start();


if(isset($_COOKIE[session_name("userid")])){

	setcookie(session_name("userid"),'',time()-86400,'/');
}

session_destroy();
header('location:login.php');

?>