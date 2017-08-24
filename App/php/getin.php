<?php
require "connect.php";

$Usuario = mysqli_real_escape_string($con,$_POST['Usuario']);
$Password = mysqli_real_escape_string($con,$_POST['Password']);
$Empresa=(int)($_POST['Empresas']);

$get_user = mysqli_query($con,"SELECT Alias, Pass, Rol, MIdEmp FROM Usuarios WHERE Alias='$Usuario' and Pass='$Password' ");

if (mysqli_num_rows($get_user)!=0){ 
	session_start();
		While ($row = mysqli_fetch_assoc($get_user)) {
        	$_SESSION['Rol']=$row['Rol'];
        	$IdEmpresa=(int)($row['MIdEmp']);
        	switch ($row['Rol']){
        		case 0:
	        		$_SESSION['usuario']=$Usuario;
					$_SESSION['clave']=$Password;
					$_SESSION['empresa']=$Empresa;
					header("Location: ../pages/index.php");
					break;
				case 1:
	        		$_SESSION['usuario']=$Usuario;
					$_SESSION['clave']=$Password;
					$_SESSION['empresa']=$Empresa;
					header("Location: ../pages/index.php");
					break;
				case 2:
					if($Empresa == $IdEmpresa){
	        			$_SESSION['usuario']=$Usuario;
						$_SESSION['clave']=$Password;
						$_SESSION['empresa']=$Empresa;
						header("Location: ../pages/index.php");
					} else {
						//print gettype ( $IdEmpresa );
						//print gettype ( $Empresa );
						//print $IdEmpresa;
						//print $Empresa;
						header("Location: ../pages/loginclient.php");
					}
					break;
				default:
					header("Location: ../pages/login.php");

        	}
		} 
	} else {
    	header("Location: ../pages/login.php");
    }


require "close.php";

?>