<?php
session_start();
function TiketsF(){
    require 'connect.php';
    $User = $_SESSION['usuario'];
    $Empresa=$_SESSION['empresa'];
    $getid = mysqli_query($con,"SELECT IdUsuario, Rol FROM Usuarios WHERE Alias='$User'");
        While ($row = mysqli_fetch_assoc($getid)) {
            $IdUser=$row['IdUsuario'];
            $URol=$row['Rol'];
        }
    
    if ($Empresa==0 and $URol == 0){
        $getall = mysqli_query($con,"SELECT * FROM Tikets WHERE Tecnico='$IdUser'");
        $Total = mysqli_num_rows($getall);
    } elseif($Empresa==0 and $URol == 1){
        $getall = mysqli_query($con,"SELECT * FROM Tikets ");
        $Total = mysqli_num_rows($getall);
    } else {
            $getall = mysqli_query($con,"SELECT * FROM Tikets WHERE IdEmp='$Empresa'");
            $Total = mysqli_num_rows($getall);
    }
    
    if($_SESSION['empresa']==0 and $URol ==1){
        $getfin = mysqli_query($con,"SELECT * FROM Tikets WHERE IdEstado='Finalizado'" );
	    $Finalizado = mysqli_num_rows($getfin);
    } elseif ($_SESSION['empresa']!=0 and $URol ==2){
        $getfin = mysqli_query($con,"SELECT * FROM Tikets WHERE IdEstado='Finalizado' AND IdEmp='$Empresa'" );
	    $Finalizado = mysqli_num_rows($getfin);
    } else {
	    $getfin = mysqli_query($con,"SELECT * FROM Tikets WHERE IdEstado='Finalizado' AND Tecnico='$IdUser'" );
	    $Finalizado = mysqli_num_rows($getfin);
    }
	//print $Finalizado.' ';
	$PRfn = round(($Finalizado*100)/$Total);
	//print($PRfn.'%');
    print'<div>
    		<p>
                <strong>Casos Finalizados</strong>
                    <span class="pull-right text-muted">'.$PRfn.'% Completado</span>
            </p>
            <div class="progress progress-striped active">
                <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="'.$PRfn.'" aria-valuemin="0" aria-valuemax="100" style="width: '.$PRfn.'%">
                    <span class="sr-only">'.$PRfn.'% Completado (success)</span>
                </div>
            </div>
         </div>';
    require 'close.php';
}
function TiketsPP(){
    require 'connect.php';
    $User = $_SESSION['usuario'];
    $Empresa=$_SESSION['empresa'];
    $getid = mysqli_query($con,"SELECT IdUsuario, Rol FROM Usuarios WHERE Alias='$User'");
        While ($row = mysqli_fetch_assoc($getid)) {
            $IdUser=$row['IdUsuario'];
            $URol=$row['Rol'];
        }
    if ($Empresa==0 and $URol == 0){
        $getall = mysqli_query($con,"SELECT * FROM Tikets WHERE Tecnico='$IdUser'");
        $Total = mysqli_num_rows($getall);
    } elseif($Empresa==0 and $URol == 1){
        $getall = mysqli_query($con,"SELECT * FROM Tikets ");
        $Total = mysqli_num_rows($getall);
    } else {
        $getall = mysqli_query($con,"SELECT * FROM Tikets WHERE IdEmp='$Empresa'");
        $Total = mysqli_num_rows($getall);
    }
    
    if($_SESSION['empresa']==0 and $URol ==1){
        $getfin = mysqli_query($con,"SELECT * FROM Tikets WHERE IdEstado='Pendiente Proveedor'" );
	    $Proveedor = mysqli_num_rows($getfin);
    } elseif ($_SESSION['empresa']!=0 and $URol ==2){
        $getfin = mysqli_query($con,"SELECT * FROM Tikets WHERE IdEstado='Pendiente Proveedor' AND IdEmp='$Empresa'" );
	    $Proveedor = mysqli_num_rows($getfin);
    } else {
	    $getfin = mysqli_query($con,"SELECT * FROM Tikets WHERE IdEstado='Pendiente Proveedor' AND Tecnico='$IdUser'" );
	    $Proveedor = mysqli_num_rows($getfin);
    }
    //print $Finalizado.' ';
    $PRpp = round(($Proveedor*100)/$Total);
    //print($PRpp.'%');
    print'<div>
            <p>
                <strong>Pendiente P</strong>
                    <span class="pull-right text-muted">'.$PRpp.'% Pendiente Proveedor</span>
            </p>
            <div class="progress progress-striped active">
                <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="'.$PRpp.'" aria-valuemin="0" aria-valuemax="100" style="width: '.$PRpp.'%">
                    <span class="sr-only">'.$PRpp.'% Pendiente Proveedor</span>
                </div>
            </div>
        </div>';
    require 'close.php';
}
function TiketsPR(){
    require 'connect.php';
    $User = $_SESSION['usuario'];
    $Empresa=$_SESSION['empresa'];
    $getid = mysqli_query($con,"SELECT IdUsuario, Rol FROM Usuarios WHERE Alias='$User'");
        While ($row = mysqli_fetch_assoc($getid)) {
            $IdUser=$row['IdUsuario'];
            $URol=$row['Rol'];
        }
    
    if ($Empresa==0 and $URol == 0){
        $getall = mysqli_query($con,"SELECT * FROM Tikets WHERE Tecnico='$IdUser'");
        $Total = mysqli_num_rows($getall);
    } elseif($Empresa==0 and $URol == 1){
        $getall = mysqli_query($con,"SELECT * FROM Tikets ");
        $Total = mysqli_num_rows($getall);
    } else {
        $getall = mysqli_query($con,"SELECT * FROM Tikets WHERE IdEmp='$Empresa'");
        $Total = mysqli_num_rows($getall);
    }
    
    if($_SESSION['empresa']==0 and $URol ==1){
        $getfin = mysqli_query($con,"SELECT * FROM Tikets WHERE IdEstado='Pendiente Recursos'" );
	    $Recursos = mysqli_num_rows($getfin);
    } elseif ($_SESSION['empresa']!=0 and $URol ==2){
        $getfin = mysqli_query($con,"SELECT * FROM Tikets WHERE IdEstado='Pendiente Recursos' AND IdEmp='$Empresa'" );
	    $Recursos = mysqli_num_rows($getfin);
    } else {
	    $getfin = mysqli_query($con,"SELECT * FROM Tikets WHERE IdEstado='Pendiente Recursos' AND Tecnico='$IdUser'" );
	    $Recursos = mysqli_num_rows($getfin);
    }
    //print $Finalizado.' ';
    $PRpr = round(($Recursos*100)/$Total);
    //print($PRpp.'%');
    print'<div>
            <p>
                <strong>Pendiente R</strong>
                    <span class="pull-right text-muted">'.$PRpr.'% Pendiente Recursos</span>
            </p>
            <div class="progress progress-striped active">
                <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="'.$PRpr.'" aria-valuemin="0" aria-valuemax="100" style="width: '.$PRpr.'%">
                    <span class="sr-only">'.$PRpr.'% Pendiente Recursos</span>
                </div>
            </div>
        </div>';
    require 'close.php';
}
function TiketsA(){
    require 'connect.php';
    $User = $_SESSION['usuario'];
    $Empresa=$_SESSION['empresa'];    
    $getid = mysqli_query($con,"SELECT IdUsuario, Rol FROM Usuarios WHERE Alias='$User'");
        While ($row = mysqli_fetch_assoc($getid)) {
            $IdUser=$row['IdUsuario'];
            $URol=$row['Rol'];
        }
    
    if ($Empresa==0 and $URol == 0){
        $getall = mysqli_query($con,"SELECT * FROM Tikets WHERE Tecnico='$IdUser'");
        $Total = mysqli_num_rows($getall);
    } elseif($Empresa==0 and $URol == 1){
        $getall = mysqli_query($con,"SELECT * FROM Tikets ");
        $Total = mysqli_num_rows($getall);
    } else {
        $getall = mysqli_query($con,"SELECT * FROM Tikets WHERE IdEmp='$Empresa'");
        $Total = mysqli_num_rows($getall);
    }
    
    if($_SESSION['empresa']==0 and $URol ==1){
        $getfin = mysqli_query($con,"SELECT * FROM Tikets WHERE IdEstado='Activo'" );
	    $Activo = mysqli_num_rows($getfin);
    } elseif ($_SESSION['empresa']!=0 and $URol ==2){
        $getfin = mysqli_query($con,"SELECT * FROM Tikets WHERE IdEstado='Activo' AND IdEmp='$Empresa'" );
	    $Activo = mysqli_num_rows($getfin);
    } else {
	    $getfin = mysqli_query($con,"SELECT * FROM Tikets WHERE IdEstado='Activo' AND Tecnico='$IdUser'" );
	    $Activo = mysqli_num_rows($getfin);
    }
    //print $Finalizado.' ';
    $PRac = round(($Activo*100)/$Total);
    //print($PRpp.'%');
    print'<div>
            <p>
                <strong>Activos</strong>
                    <span class="pull-right text-muted">'.$PRac.'% Activos (No Diagnosticado)</span>
            </p>
            <div class="progress progress-striped active">
                <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="'.$PRac.'" aria-valuemin="0" aria-valuemax="100" style="width: '.$PRac.'%">
                    <span class="sr-only">'.$PRac.'% Activos (No Diagnosticado)</span>
                </div>
            </div>
        </div>';
    require 'close.php';
}
function adminoption(){
    $last=date("m")-1;
    $mes=nombremes($last);
    $thism=date("m");
    $thismes=nombremes($thism);
    
                    print'
                        <li>
                            <a href="#"><i class="fa fa-edit fa-fw"></i> Ajustes de Admnistrador <span class="fa arrow"></span></a>
                            <ul class="nav nav-secon-level">
                                <li>
                                    <a href="#"><i class="fa fa-edit fa-fw"></i>Gestor de Usuarios <span class="fa arrow"></span></a>
                                    <ul class="nav nav-third-level">
                                        <li>
                                            <a href="Listusers.php">Listar</a>
                                        </li>
                                        <li>
                                            <a href="Adduser.php">Crear</a>
                                        </li>
                                        <li>
                                            <a href="#">Third Level Item</a>
                                        </li>
                                    </ul>
                                    <!-- /.nav-third-level -->
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-edit fa-fw"></i>Gestor de Cliente <span class="fa arrow"></span></a>
                                    <ul class="nav nav-third-level">
                                        <li>
                                            <a href="Listusers.php">Listar</a>
                                        </li>
                                        <li>
                                            <a href="Addclient.php">Crear</a>
                                        </li>
                                        <li>
                                            <a href="#">Third Level Item</a>
                                        </li>
                                    </ul>
                                    <!-- /.nav-third-level -->
                                </li>
                            </ul>
                        </li>';
                 print '<li>
                            <a href="#"><i class="fa fa-edit fa-fw"></i> Reportes <span class="fa arrow"></span></a>
                            <ul class="nav nav-secon-level">
                                        <li>
                                            <a href="reportes.php">Reportes '.$mes.'</a>
                                        </li>
                                        <li>
                                            <a href="reportthisM.php">Reportes '.$thismes.'</a>
                                        </li>
                            </ul>
                        </li>';
}
function tecoption(){
                    print'
                        <li>
                            <a href="#"><i class="fa fa-edit fa-fw"></i> Inventario <span class="fa arrow"></span></a>
                            <ul class="nav nav-secon-level">
                                <li>
                                    <a href="Inventory.php">Listar Inventarios</a>
                                </li>
                                <li>
                                    <a href="Addpc.php">Ingresar PC</a>
                                </li>
                                <li>
                                    <a href="Addpc.php">Ingresar Impresora</a>
                                </li>
                                <li>
                                    <a href="Addpc.php">Ingresar Infraestructura</a>
                                </li>
                                <li>
                                    <a href="Addpc.php">Otro</a>
                                </li>
                            </ul>
                        </li>';
}
function clientopt(){
    $last=date(m)-1;
    $mes=nombremes($last);
    $thism=date(m);
    $thismes=nombremes($thism);
                     print '<li>
                            <a href="#"><i class="fa fa-edit fa-fw"></i> Reportes <span class="fa arrow"></span></a>
                            <ul class="nav nav-secon-level">
                                        <li>
                                            <a href="reportes.php">Reportes '.$mes.'</a>
                                        </li>
                                        <li>
                                            <a href="reportthisM.php">Reportes '.$thismes.'</a>
                                        </li>
                            </ul>
                        </li>';

}

function nombremes($mes){
 setlocale(LC_TIME, 'es_ES');  
 $nombre=strftime("%B",mktime(0, 0, 0, $mes, 1, 2000)); 
 return $nombre;
}

function Nuevos(){
    require 'connect.php';
    $User = $_SESSION['usuario'];
    $Empresa=$_SESSION['empresa'];
    $thisY=date("Y");
    $thism=date("m");
    $getdata = mysqli_query($con,"SELECT COUNT(IdTiket) FROM Tikets WHERE YEAR(FInicial)='$thisY' and MONTH(FInicial)='$thism' AND IdEmp = '$Empresa'" );
    While ($row = mysqli_fetch_assoc($getdata)) {
        $Nuevo = $row['COUNT(IdTiket)'];
        }    
    //return $Activos;
    print '<div class="huge">'.$Nuevo.'</div>';
    require 'close.php';
}

function Finiquito(){
    require 'connect.php';
    $User = $_SESSION['usuario'];
    $Empresa=$_SESSION['empresa'];
    $thisY=date("Y");
    $thism=date("m");
    $getdata = mysqli_query($con,"SELECT COUNT(IdTiket) FROM Tikets WHERE YEAR(FInicial)='$thisY' and MONTH(FInicial)='$thism' AND IdEstado = 'Finalizado' AND IdEmp = '$Empresa'" );
    While ($row = mysqli_fetch_assoc($getdata)) {
        $Fin = $row['COUNT(IdTiket)'];
        } 
    //return $Activos;
    print '<div class="huge">'.$Fin.'</div>';
    require 'close.php';
}

function Pend(){
    require 'connect.php';
    $User = $_SESSION['usuario'];
    $Empresa=$_SESSION['empresa'];
    $thisY=date("Y");
    $thism=date("m");
    $getdata = mysqli_query($con,"SELECT COUNT(IdTiket) FROM Tikets WHERE YEAR(FInicial)='$thisY' and MONTH(FInicial)='$thism' AND IdEmp = '$Empresa' AND ( IdEstado = 'Pendiente Proveedor' OR IdEstado = 'Pendiente Recursos')" );
    While ($row = mysqli_fetch_assoc($getdata)) {
        $Pendientes = $row['COUNT(IdTiket)'];
        } 
    //return $Activos;
    print '<div class="huge">'.$Pendientes.'</div>';
    require 'close.php';
}

function Activos(){
    require 'connect.php';
    $User = $_SESSION['usuario'];
    $Empresa=$_SESSION['empresa'];
    $thisY=date("Y");
    $thism=date("m");
    $getdata = mysqli_query($con,"SELECT COUNT(IdTiket) FROM Tikets WHERE YEAR(FInicial)='$thisY' and MONTH(FInicial)='$thism' AND IdEstado = 'Activo' AND IdEmp = '$Empresa'" );
    While ($row = mysqli_fetch_assoc($getdata)) {
        $Activos = $row['COUNT(IdTiket)'];
        } 
    //return $Activos;
    print '<div class="huge">'.$Activos.'</div>';
    require 'close.php';
}
?>