<?php
session_start();
session_destroy();
// setcookie("email",$_SESSION['email'],time()-20);
// setcookie("email",$_SESSION['password'],time()-20);

setcookie('user', "$uname", time()-(15),"/");

header('Location:shi.php');


?>