<?php
session_start();
if (!$_SESSION['usuario']){
    header("Location: ../pages/login.php");
}
//print $_SESSION['Rol'];
require '../php/QProgress.php';

$last=date("m")-1;
$mes=nombremes($last);
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Serap Tiket Manager</title>

    <!-- Bootstrap Core CSS -->
    <link href="../bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
    <div id="wrapper">
        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">STM Admin v1.0</a>
            </div>
            <!-- /.navbar-header -->
            <ul class="nav navbar-top-links navbar-right"> 
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-tasks fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-tasks">
                        <li>
                            <a href="#">
                                <?php 
                                TiketsF();
                                ?>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <?php 
                                TiketsPP();
                                ?>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <?php 
                                TiketsPR();
                                ?>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <?php 
                                TiketsA();
                                ?>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>See All Tasks</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-tasks -->
                </li>
                <!-- /.dropdown -->
                <!--<li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-bell fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-alerts">
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-comment fa-fw"></i> New Comment
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-twitter fa-fw"></i> 3 New Followers
                                    <span class="pull-right text-muted small">12 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-envelope fa-fw"></i> Message Sent
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-tasks fa-fw"></i> New Task
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-upload fa-fw"></i> Server Rebooted
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>See All Alerts</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                     /.dropdown-alerts 
                </li>
                 /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> User <?php echo $_SESSION['usuario']; ?></a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="../php/getout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                        <li>
                            <a href="index.php"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                    <!--
                        <li>
                            <a href="tables.html"><i class="fa fa-table fa-fw"></i> Tables</a>
                        </li>
                    -->
                        <li>
                            <a href="forms.html"><i class="fa fa-edit fa-fw"></i>Tikets<span class="fa arrow"></span></a>
                            <ul class="nav nav-secon-level">
                                <li>
                                    <a href="Create.php">Crear</a>
                                </li>
                                <li>
                                    <a href="Consult.php">Buscar/Modificar</a>
                                </li>
                            </ul>
                        <?php
                            if($_SESSION['Rol'] == 1){
                                tecoption();
                            } elseif ($_SESSION['Rol'] == 0) {
                                tecoption();
                            }
                            if($_SESSION['Rol'] == 1){
                                adminoption($mes);
                            }
                            if($_SESSION['Rol'] == 2){
                                clientopt();
                            }
                        ?>
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Busqueda de Tickets</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Caso de soporte
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-5">
                                    <div class="panel-body">
                                    <form form method="POST" action="Consult.php" role="form">
                                        <?php //print $error_text ?>
                                        <div class="form-group">
                                        <table class="table table-hover">
                                            <tr>
                                                <td>
                                                    Casos Consultados
                                                </td>
                                                <td colspan="3">
                                                    <select name="Estado" class="form-control">
                                                        <option selected value="0"></option>
                                                        <option value="1">Todos</option>
                                                        <option value="2">Pendiente Proveedor</option>
                                                        <option value="3">Pendiente Recursos</option>
                                                        <option value="4">Finalizados</option>
                                                        <option value="5">Mes Anterior</option>
                                                        <option value="6">Mes Actual</option>
                                                        <option value="7">Semana</option>
                                                        <option value="8">Rango de Fechas</option>
                                                    </select>
                                                </td>
                                                </tr>
                                                    <?php if($type=8){
                                                        $disabled='disabled';
                                                    }
                                                    ?>
                                            <tr><td>Inicio</td>
                                                <td>
                                                    <select name="idia" class="form-control" <?php $disabled ?>;>
                                                        <?php
                                                            for($d=1;$d<=31;$d++)
                                                            {
                                                                /*if($d<10)
                                                                    $dd = "0" . $d;
                                                                else*/
                                                                    $dd = $d;
                                                                echo "<option value='$dd'>$dd</option>";
                                                            }
                                                        ?>
                                                    </select>
                                                </td>
                                                <td>
                                                <select name="imes" class="form-control" <?php $disabled ?>;>
                                                    <?php
                                                        for($m = 1; $m<=12; $m++)
                                                        {
                                                            /*if($m<10)
                                                                $me = "0" . $m;
                                                            else*/
                                                                $me = $m;
                                                            switch($me)
                                                            {
                                                                case "01": $mes = "Enero"; break;
                                                                case "02": $mes = "Febrero"; break;
                                                                case "03": $mes = "Marzo"; break;
                                                                case "04": $mes = "Abril"; break;
                                                                case "05": $mes = "Mayo"; break;
                                                                case "06": $mes = "Junio"; break;
                                                                case "07": $mes = "Julio"; break;
                                                                case "08": $mes = "Agosto"; break;
                                                                case "09": $mes = "Septiembre"; break;
                                                                case "10": $mes = "Octubre"; break;
                                                                case "11": $mes = "Noviembre"; break;
                                                                case "12": $mes = "Diciembre"; break;           
                                                            }
                                                            echo "<option value='$me'>$mes</option>";
                                                        }
                                                    ?>
                                                </select>
                                                </td>
                                                <td> 
                                                    <select name="ianio" class="form-control" <?php $disabled ?>;>
                                                        <?php
                                                            $tope = date("Y");
                                                            $edad_max = 10;
                                                            $edad_min = 0;
                                                            for($a= $tope - $edad_max; $a<=$tope - $edad_min; $a++)
                                                                echo "<option value='$a'>$a</option>"; 
                                                        ?>
                                                    </select>
                                                </td>
                                            </tr>
                                            <tr><td>Fin</td>
                                                <td>
                                                    <select name="fdia" class="form-control"<?php $disabled ?>;>
                                                    <?php
                                                        for($d=1;$d<=31;$d++)
                                                        {
                                                            /*if($d<10)
                                                                $dd = "0" . $d;
                                                            else*/
                                                                $dd = $d;
                                                            echo "<option value='$dd'>$dd</option>";
                                                        }
                                                    ?>
                                                </select>
                                                </td>
                                                <td> 
                                                <select name="fmes" class="form-control" <?php $disabled ?>;>
                                                <?php
                                                    for($m = 1; $m<=12; $m++)
                                                    {
                                                        /*if($m<10)
                                                            $me = "0" . $m;
                                                        else*/
                                                            $me = $m;
                                                        switch($me)
                                                        {
                                                            case "01": $mes = "Enero"; break;
                                                            case "02": $mes = "Febrero"; break;
                                                            case "03": $mes = "Marzo"; break;
                                                            case "04": $mes = "Abril"; break;
                                                            case "05": $mes = "Mayo"; break;
                                                            case "06": $mes = "Junio"; break;
                                                            case "07": $mes = "Julio"; break;
                                                            case "08": $mes = "Agosto"; break;
                                                            case "09": $mes = "Septiembre"; break;
                                                            case "10": $mes = "Octubre"; break;
                                                            case "11": $mes = "Noviembre"; break;
                                                            case "12": $mes = "Diciembre"; break;           
                                                        }
                                                        echo "<option value='$me'>$mes</option>";
                                                    }
                                                ?>
                                                </select> 
                                                </td>
                                                <td> 
                                                <select name="fanio" class="form-control" <?php $disabled ?>;>
                                                    <?php
                                                        $tope2 = date("Y");
                                                        $edad_max2 = 10;
                                                        $edad_min2 = 0;
                                                        for($a= $tope2 - $edad_max2; $a<=$tope2 - $edad_min2; $a++)
                                                            echo "<option value='$a'>$a</option>"; 
                                                    ?>
                                                </select>
                                                </td>
                                                </tr>
                                            </table>
                                        </div>
                                       
                                            <button type="submit" class="btn btn-default" value="">Submit Button</button>
                                            <button type="reset" class="btn btn-default">Reset Button</button>
                                            <input type="hidden" name="_submit_check" value="1"/>
                                        
                                        </form>
                                    </div>
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                                <div class="col-lg-7">
                                     <!--/.panel-heading -->
                                    <div class="panel-body">
                                        <div class="table-responsive">
                                            <?php
                                                require '../php/connect.php';
                                                require '../Conceptos/Qtodos.php';
                                                if (isset($_POST['Estado'])){
                                                $tipe = ($_POST['Estado']);
                                                }
                                                if (isset($_POST['ianio'])){
                                                $stY = ($_POST['ianio']);
                                                }
                                                if (isset($_POST['imes'])){
                                                $stM = ($_POST['imes']);
                                                }
                                                if (isset($_POST['idia'])){
                                                $stD = ($_POST['idia']);
                                                }
                                                if (isset($_POST['fanio'])){
                                                $endY = ($_POST['fanio']);
                                                }
                                                if (isset($_POST['fmes'])){
                                                $endM = ($_POST['fmes']);
                                                }
                                                if (isset($_POST['fdia'])){
                                                $endD = ($_POST['fdia']);
                                                }
                                                if ($tipe==0){
                                                    Imprimir0();
                                                }elseif ($tipe==1){
                                                    Imprimir1();
                                                } elseif ($tipe==2) {
                                                    Imprimir2();
                                                } elseif ($tipe==3) {
                                                    Imprimir3();
                                                } elseif ($tipe==4) {
                                                    Imprimir4();
                                                } elseif ($tipe==5) {
                                                    Imprimir5();
                                                } elseif ($tipe==6) {
                                                    Imprimir6();
                                                } elseif ($tipe==7) {
                                                    Imprimir7();
                                                } elseif ($tipe==8) {
                                                    Imprimir8($stY,$stM,$stD,$endY,$endM,$endD);
                                                } 
                                            ?>

                                    </div>
                                    <!-- /.panel-body -->
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>



</body>

</html>
