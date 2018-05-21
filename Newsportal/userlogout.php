<?php
session_start();
$_SESSION=$array;
if(isset($COOKIE["id"]) && isset($_COOKIE["user"]) && isset($_COOKIE["pass"])){
	setcookie("id",'',time('-5days'),'/');
	setcookie("user",'',time('-5days'),'/');
	setcookie("pass",'',time('-5days'),'/');
}
session_destroy();
if(isset($_SESSION['user'])){
	header("location:home.php");
} else{
	header("location: login.php");
	exit();
}
?>