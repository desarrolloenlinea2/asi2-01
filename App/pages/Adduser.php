<?php
session_start();
if (!$_SESSION['usuario']){
    header("Location: ../pages/login.php");
}
//print $_SESSION['Rol'];
require '../php/QProgress.php';
require '../php/Fecha.php';

$last=date(m)-1;
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
                                    <a href="Consult.php">Buscar/Moficar</a>
                                </li>
                            </ul>
                        </li>
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
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Forms</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Informacion de Usuario
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            Datos de Acceso
                                        </div>
                                        <div class="panel-body">
                                            <?php
                                                if ($_POST['_submit_check']) { 
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

                                                if ($_POST['_submit_check']) { 
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
                                                        <label>Nombre</label>
                                                        <input name="Nombre" class="form-control" placeholder="Nombre">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Apellido</label>
                                                        <input name="Apell" class="form-control" placeholder="Apellido">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Alias</label>
                                                        <input name="Alias" class="form-control" placeholder="Alias">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Password</label>
                                                        <input name="Pass" class="form-control" type="password" placeholder="Password">
                                                    </div>
                                                    <?php
                                                        if ($_SESSION['Rol']==1){
                                                        print '<div class="form-group">
                                                            <label>Empresa</label>
                                                            <select name="Empresas" class="form-control">';
                                                                print '<option value="0">Todas</option>';
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
                                                        <label>Tipo de acceso</label>
                                                        <select name="Rol" class="form-control">
                                                            <?php
                                                            require '../php/connect.php';
                                                                $get_user = mysqli_query($con,"SELECT IdRol, Rol FROM Rol ORDER BY IdRol ASC ");
                                                                    While ($row = mysqli_fetch_assoc($get_user)) {
                                                                        print '<option value="'.$row['IdRol'].' ">'.$row['Rol'].'</option>'; }
                                                            require '../php/close.php';
                                                            ?>
                                                        </select>
                                                    </div>
                                                    <div class="form-gorup">
                                                        <label>Fecha de nacimiento</label>
                                                        <?php    
                                                            fechaform();
                                                        ?>
                                                    </div>
                                                    <div>
                                                <!--    <button type="submit" class="btn btn-default" value="">Submit Button</button>
                                                    <button type="reset" class="btn btn-default">Reset Button</button>-->
                                                    <input type="hidden" name="_submit_check" value="1"/>

                                            <?php 
                                            } 
                                            ?>
                                                    </div>
                                        <!--
                                        <div class="panel-footer">
                                            Panel Footer
                                        </div>
                                        -->
                                        </div>
                                    </div>
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                                <div class="col-lg-6">
                                    <!-- /.panel-heading -->
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            Datos Generales
                                        </div>
                                        <div class="panel-body">
                                            <div class="form-group">
                                                <label>Email</label>
                                                <input name="Email" class="form-control" placeholder="Correo Electronico">
                                            </div>
                                            <div class="form-group">
                                                <label>Telefono</label>
                                                <input name="Tel" class="form-control" placeholder="Correo Electronico">
                                            </div>
                                            <div class="form-group">
                                                <label>Celular</label>
                                                <input name="Cel" class="form-control" placeholder="Correo Electronico">
                                            </div>
                                            <div class="form-group">
                                                <label>DUI</label>
                                                <input name="Dui" class="form-control" placeholder="Enter text">
                                            </div>
                                            <div class="form-group">
                                                <label>NIT</label>
                                                <input name="Nit" class="form-control" placeholder="Enter text">
                                            </div>
                                            <div class="form-group">
                                                <label>NUP</label>
                                                <input name="Nup" class="form-control" placeholder="Enter text">
                                            </div>
                                            <div class="form-group">
                                                <label>Salario</label>
                                                <input name="Sal" class="form-control" placeholder="Enter text">
                                            </div>
                                        </div>
                                        <!--
                                        <div class="panel-footer">
                                            Panel Footer
                                        </div>
                                        -->
                                    </div>
                                </div>
                                    <!--/.panel-body -->
                                <!-- /.col-lg-6 (nested) -->
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div>
                                        <div class="panel panel-default">
                                            <div class="panel-body">
                                                <button type="submit" class="btn btn-default" value="">Submit Button</button>
                                                <button type="reset" class="btn btn-default">Reset Button</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
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
    <!-- Funciones PHP -->
    <?php
        function validate_form( ) { 
            $errors = array( ); 
                // Validacion Informacion basica de caso
                // Usuario es requerido 
                if (! strlen(trim($_POST['Nombre']))) { 
                    $errors[ ] = 'Debe indicar un nombre.'; 
                } 
                // Asunto es requerido
                if (! strlen(trim($_POST['Apell']))) { 
                    $errors[ ] = 'Debe indicar un apellido.'; 
                } 
                // El caso debe tener alguna descripcion
                if (! strlen(trim($_POST['Alias']))) { 
                    $errors[ ] = ' Debe crear un usuario.'; 
                } else {
                    require '../php/connect.php';
                    $duplicado = $_POST['Alias'];
                       $get_alias = mysqli_query($con,"SELECT Alias FROM Usuarios WHERE Alias='$duplicado' ");
                            if (mysqli_num_rows($get_alias)!=0){ 
                                $errors[ ] = 'Usuario ya existe.';
                            }
                    require '../php/close.php';
                }
                if (! strlen(trim($_POST['Pass']))) { 
                    $errors[ ] = 'Ingrese el password.'; 
                } 
                if (! strlen(trim($_POST['Email']))) { 
                    $errors[ ] = 'Ingrese el correo electronico.'; 
                } 
                // Validacion de Telefono
                if ((strlen(trim($_POST['Tel'])) < 8) || (strlen(trim($_POST['tel'])) > 8)) { 
                    $errors[ ] = 'Debe ingresar un numero valido sin guiones o espacios.'; 
                } 
                // Validacion de Celular
                if ((strlen(trim($_POST['Cel'])) < 8) || (strlen(trim($_POST['cel'])) > 8)) { 
                    $errors[ ] = 'Debe ingresar un numero valido sin guiones o espacios.'; 
                } 
                // Dirreccion de correo electronico
                if (strlen($_POST['Email']) == 0) { 
                    $errors[ ] = "You must enter an email address."; 
                }
                // Validacion de correo bien escrito
                elseif (! preg_match('/^[^@\s]+@([-a-z0-9]+\.)+[a-z]{2,}$/i', $_POST['Email'])) { 
                    $errors[ ] = 'Please enter a valid e-mail address'; 
                }
                //Validacion fecha
                if (($_POST['ianio'] == 1965)){
                    $errors[ ] = 'Por favor debe de colocar su fecha de nacimiento'; 
                } 
            return $errors; 
        } 

        function process_form( ) { 
            //Conexion DB
            require '../php/connect.php';
            if (!$con) {
                die('No se pudo conectar: ' . mysqli_error());
            }
            $stM = ($_POST['idia']);
            $stD = ($_POST['imes']);
            $stY = ($_POST['ianio']);
            if($stM<10){
                $sM='0'.$stM;
            }else{
                $sM=$stM;
            }
            //Tratatiemto de datos dia
            if($stD<10){
                $sD='0'.$stD;
            }else{
                $sD=$stD;
            }
            $nac=strtotime($stY.'-'.$sM.'-'.$sD);
            $nac1=date('Y-m-d',$nac);
            $nacimiento = mysqli_real_escape_string($con,$nac);
            $nombre = mysqli_real_escape_string($con,$_POST['Nombre']);
            $apell = mysqli_real_escape_string($con,$_POST['Apell']);
            $dui = mysqli_real_escape_string($con,$_POST['Dui']);
            $nit = mysqli_real_escape_string($con,$_POST['Nit']);
            $nup = mysqli_real_escape_string($con,$_POST['Nup']);
            $tel = mysqli_real_escape_string($con,$_POST['Tel']);
            $cel = mysqli_real_escape_string($con,$_POST['Cel']);
            $rol = mysqli_real_escape_string($con,$_POST['Rol']);
            $nominal = mysqli_real_escape_string($con,$_POST['Sal']);
            $alias = mysqli_real_escape_string($con,$_POST['Alias']);
            $pass = mysqli_real_escape_string($con,$_POST['Pass']);
            $mail = mysqli_real_escape_string($con,$_POST['Email']);
            $miembro = mysqli_real_escape_string($con,$_POST['Empresas']);
                                              
            $get_uid=mysqli_query($con,"SELECT IdUsuario, Alias FROM Usuarios WHERE Alias='$Creador'");
            While ($row = mysqli_fetch_assoc($get_uid)) {
                $user=$row['Alias'];
                    if($user==$Creador){
                        $uid=$row['IdUsuario'];
                    }
                }
            $q = "INSERT INTO Usuarios (Nom, Apel, Dui, Nit, Nup, Tel, Cel, FNac, FCre, Rol, SNominal, Alias, Pass, Mail, MIdEmp) VALUES ('$nombre','$apell','$dui','$nit','$nup','$tel','$cel','$nac1',NOW(),'$rol','$nominal','$alias','$pass','$mail','$miembro')";              
                mysqli_query($con,$q)or die (mysqli_error($con));

            $_POST = array();
            show_form( ); 
            require '../php/close.php';
            //mysqli_close($con);
        }
    ?>
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
