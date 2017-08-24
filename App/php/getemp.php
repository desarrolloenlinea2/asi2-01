<?php
session_start();
$Empresa = mysqli_real_escape_string($_POST['Empresas']);


require "connect.php";

$get_user = mysqli_query($con,"SELECT Alias, Pass, Rol, MIdEmp FROM Usuarios WHERE Alias='$Usuario' and Pass='$Password' ");

if (mysqli_num_rows($get_user)!=0){ 
		While ($row = mysqli_fetch_assoc($get_user)) {
			if($row['MIdEmp'] == 'All'){
				$_SESSION['empresa']=$row['MIdEmp'];
				header("Location: ../pages/index.php");
			}elseif ($row['MIdEmp'] == $Empresa) {
				$_SESSION['empresa']=$row['MIdEmp'];
				header("Location: ../pages/index.php");
			}else{
				header("Location: ../pages/Selector.php");
		}
	}
}else{
	header("Location: ../pages/Selector.php");
}

require "close.php";
?>