<?php
//session_start();
//if (!$_SESSION['usuario']){
//    header("Location: ../pages/login.php");
//}
//print $_SESSION['Rol'];
//print $_SESSION['empresa'];
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
                                //TiketsF();
                                ?>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <?php 
                                //TiketsPP();
                                ?>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <?php 
                                //TiketsPR();
                                ?>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <?php 
                                //TiketsA();
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
                 <!--/.dropdown -->
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
                <!-- Menu Lateral -->
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
                    <h1 class="page-header">Registro de Ticke</h1>
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
                                <div class="col-lg-3">
                                    <!-- /.panel-heading 
                                        /.panel-body -->
                                </div>
                                <div class="col-lg-6">
                                    <?php
                                    if (isset($_POST['_submit_check'])) { 
                                        //Verificacion de errore
                                        if ($form_errors = validate_form( )) { 
                                            show_form($form_errors); 
                                    }    else { 
                                        // Guarda los datos en la base de datos
                                        process_form( ); 
                                        }
                                    }else{ 
                                        // Carga el Formulario
                                        show_form( ); 
                                    } 

                                    function show_form($errors = '') { 

                                    if (isset($_POST['_submit_check'])) { 
                                        $defaults = $_POST; 
                                    }
                                     
                                     // If errors were passed in, put them in $error_text (with HTML markup) 
                                    if ($errors) { 
                                        $error_text = '<tr><td>Necesita corregir los siguientes errores:'; 
                                        $error_text .= '</td><td><ul><li>'; 
                                        $error_text .= implode('</li><li>',$errors); 
                                        $error_text .= '</li></ul></td></tr>'; 
                                    } else { 
                                        // No errors? Then $error_text is blank 
                                        $error_text = ''; 
                                    } 
                                    ?>
                                        <form form method="POST" action="<?php print $_SERVER['PHP_SELF']; ?>" role="form">
                                            <?php print $error_text ?>
                                            <div class="form-group">
                                                <label>Usuario que reporta</label>
                                                <input name="Usuario" class="form-control" placeholder="Nombre de la presona que reporta">
                                            </div>
                                            <?php
                                            if ($_SESSION['Rol']==1 or $_SESSION['Rol']==0){
                                            print '<div class="form-group">
                                                <label>Empresa</label>
                                                <select name="Empresas" class="form-control">';
                                                    
                                                    require '../php/connect.php';
                                                        $get_user = mysqli_query($con,"SELECT IdEmp, NComer FROM Empresa ORDER BY NComer ASC ");
                                                            While ($row = mysqli_fetch_assoc($get_user)) {
                                                                print '<option value="'.$row['IdEmp'].' ">'.$row['NComer'].'</option>'; }
                                                    require '../php/close.php';
                                                    
                                                print '</select>
                                            </div>';
                                            }
                                            ?>
                                            <div class="form-group">
                                                <label>Categoria</label>
                                                <select name="Categoria" class="form-control">
                                                    <?php
                                                    require '../php/connect.php';
                                                        $get_user = mysqli_query($con,"SELECT IdCategoria, Categoria FROM Categoria ORDER BY IdCategoria DESC ");
                                                            While ($row = mysqli_fetch_assoc($get_user)) {
                                                                print '<option value="'.$row['Categoria'].' ">'.$row['IdCategoria'].' '.$row['Categoria'].'</option>'; }
                                                    require '../php/close.php';
                                                    ?>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label>Tipo</label>
                                                <select name="Tipo" class="form-control">
                                                    <?php
                                                    require '../php/connect.php';
                                                        $get_user = mysqli_query($con,"SELECT IdTipo, Tipo FROM Tipo ORDER BY IdTipo ASC ");
                                                            While ($row = mysqli_fetch_assoc($get_user)) {
                                                                print '<option value="'.$row['Tipo'].' ">'.$row['IdTipo'].' '.$row['Tipo'].'</option>'; }
                                                    require '../php/close.php';
                                                    ?>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label>Titulo del Caso</label>
                                                <input name="Asunto" class="form-control" placeholder="Enter text">
                                            </div>
                                            <div class="form-group">
                                                <label>Descripcion</label>
                                                <textarea name="Descrip" class="form-control" rows="3"></textarea>
                                            </div>
                                            <?php
                                            if($_SESSION['Rol'] == 1){
                                            print '<div class="form-group">
                                                <label>Estado</label>
                                                <select name="Estado" class="form-control">';
                                                    require '../php/connect.php';
                                                        $get_user = mysqli_query($con,"SELECT IdEstado, Estado FROM Estado ORDER BY IdEstado ASC ");
                                                            While ($row = mysqli_fetch_assoc($get_user)) {
                                                                print '<option value="'.$row['Estado'].' ">'.$row['Estado'].'</option>'; }
                                                    require '../php/close.php';
                                            print   '</select>
                                            </div>';
                                            }else{
                                            print '<div class="form-group">
                                                <label>Estado</label>
                                                <select name="Estado" class="form-control" >';
                                                    require '../php/connect.php';
                                                        $get_user = mysqli_query($con,"SELECT IdEstado, Estado FROM Estado WHERE Estado='Activo' ");
                                                            While ($row = mysqli_fetch_assoc($get_user)) {
                                                                print '<option value="'.$row['Estado'].' ">'.$row['Estado'].'</option>'; }
                                                    require '../php/close.php';
                                            print   '</select>
                                            </div>';
                                            }
                                            ?>
                                            <button type="submit" class="btn btn-default" value="">Submit Button</button>
                                            <button type="reset" class="btn btn-default">Reset Button</button>
                                            <input type="hidden" name="_submit_check" value="1"/>
                                        </form>
                                    <?php 
                                    } 

                                    function validate_form( ) { 
                                    $errors = array( ); 
                                    // Validacion Informacion basica de caso
                                        // Usuario es requerido 
                                        if (! strlen(trim($_POST['Usuario']))) { 
                                            $errors[ ] = 'Ingrese el nombre del usuario que reporta.'; 
                                        } 
                                        // Asunto es requerido
                                        if (! strlen(trim($_POST['Asunto']))) { 
                                            $errors[ ] = 'Ingrese el titulo del caso.'; 
                                        } 
                                              // El caso debe tener alguna descripcion
                                        if (! strlen(trim($_POST['Descrip']))) { 
                                            $errors[ ] = 'Ingrese la descripcion del caso.'; 
                                        } 
                                    return $errors; 
                                    } 

                                    function process_form( ) { 
                                        //Conexion DB
                                        require '../php/connect.php';

                                        if (!$con) {
                                            die('No se pudo conectar: ' . mysqli_error());
                                        }
                                        $usuario = mysqli_real_escape_string($con,$_POST['Usuario']);
                                        $Categoria = mysqli_real_escape_string($con,$_POST['Categoria']);
                                        $Tipo = mysqli_real_escape_string($con,$_POST['Tipo']);
                                        $Asunto = mysqli_real_escape_string($con,$_POST['Asunto']);
                                        $Descrip = mysqli_real_escape_string($con,$_POST['Descrip']);
                                        $Estado = mysqli_real_escape_string($con,$_POST['Estado']);
                                        $Empresa = mysqli_real_escape_string($con,$_POST['Empresas']);
                                        if ($_SESSION['usuario'] == 0){
                                            $Creador = mysqli_real_escape_string($con,$_SESSION['usuario']);
                                            $get_uid=mysqli_query($con,"SELECT IdUsuario, Alias FROM Usuarios WHERE Alias='$Creador'");
                                            While ($row = mysqli_fetch_assoc($get_uid)) {
                                                    $user=$row['Alias'];
                                                    if($user==$Creador){
                                                        $uid=$row['IdUsuario'];
                                                    }
                                                }
                                        } else {
                                            $get_uid=mysqli_query($con,"SELECT Tecnico FROM Empresa WHERE IdEmp='$Empresa'");
                                            While ($row = mysqli_fetch_assoc($get_uid)) {
                                                        $uid=$row['Tecnico'];
                                                }
                                        }

                                        $q = "INSERT INTO Tikets (IdEmp,FInicial,Hora,NReporta,IdCategoria,IdTipo,Asunto,Descrip,IdEstado,Tecnico) VALUES ($Empresa,Now(),CURTIME(),'$usuario','$Categoria','$Tipo','$Asunto','$Descrip','$Estado','$uid')";              
                                        mysqli_query($con,$q)or die (mysqli_error($con));

                                        $_POST = array();
                                        //show_form( ); 
                                        require '../php/close.php';
                                        echo '<script type="text/javascript">', 'location.href = "../pages/Consult.php";', '</script>';
                                        //mysqli_close($con);
                                        }
                                    ?>
                                </div>
                                <!-- /.col-lg-6 (nested) -->

                                <div class="col-lg-3">
                                    <!-- /.panel-heading 
                                        /.panel-body -->
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
