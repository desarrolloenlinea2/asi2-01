<?php


$Usuario = mysql_real_escape_string($_POST['Usuario']);
$Password = mysql_real_escape_string($_POST['Password']);
$Empresa=(int)($_POST['Empresas']);


require "connect.php";

$get_user = mysql_query("SELECT Alias, Pass, Rol, MIdEmp FROM Usuarios WHERE Alias='$Usuario' and Pass='$Password' ");

if (mysql_num_rows($get_user)!=0){ 
	session_start();
		While ($row = mysql_fetch_assoc($get_user)) {
        	$_SESSION['Rol']=$row['Rol'];
        	$IdEmpresa=(int)($row['MIdEmp']);
        	switch ($row['Rol']){
        		case 0:
	        		$_SESSION['usuario']=$Usuario;
					$_SESSION['clave']=$Password;
					$_SESSION['empresa']=$Empresa;
					header("Location: ../new_pages/index.php");
					break;
				case 1:
	        		$_SESSION['usuario']=$Usuario;
					$_SESSION['clave']=$Password;
					$_SESSION['empresa']=$Empresa;
					header("Location: ../new_pages/index.php");
					break;
				case 2:
					if($Empresa == $IdEmpresa){
	        			$_SESSION['usuario']=$Usuario;
						$_SESSION['clave']=$Password;
						$_SESSION['empresa']=$Empresa;
						header("Location: ../new_pages/index.php");
					} else {
						//print gettype ( $IdEmpresa );
						//print gettype ( $Empresa );
						//print $IdEmpresa;
						//print $Empresa;
						header("Location: ../new_pages/loginclient.php");
					}
					break;
				default:
					header("Location: ../new_pages/login.php");

        	}
		} 
	} else {
    	header("Location: ../new_pages/login.php");
    }


require "close.php";

?>