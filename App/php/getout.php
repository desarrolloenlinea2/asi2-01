<?php
session_start();
session_destroy(); // Is Used To Destroy All Sessions
header("Location: ../pages/login.php");
//Or
/*if(isset($_SESSION['usuario'])){
		unset($_SESSION['usuario'];
		header("Location: ../pages/login.php");
}*/
?>