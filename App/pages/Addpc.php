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
                    <h1 class="page-header">Inventario</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Informacion de PCs
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            Datos Generales
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
                                                    <?php
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
                                                    ?>
                                                    <div class="form-group">
                                                        <label>Usuario Asignado</label>
                                                        <input name="Asignacion" class="form-control" placeholder="Nombre">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Departamento</label>
                                                        <input name="Dpto" class="form-control" placeholder="Departamento">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Cargo</label>
                                                        <input name="Cargo" class="form-control" placeholder="Cargo a desempeñar">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Email</label>
                                                        <input name="Email" class="form-control" placeholder="Correo Electronico">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Telefono</label>
                                                        <input name="Tel" class="form-control" placeholder="Correo Electronico">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Marca</label>
                                                            <select name="Marca" class="form-control">
                                                                <option>HP</option>
                                                                <option>Compaq</option>
                                                                <option>LG</option>
                                                                <option>Apple</option>
                                                                <option>Lenovo</option>
                                                                <option>Acer</option>
                                                                <option>Vaio</option>
                                                                <option>Dell</option>
                                                                <option>Sony</option>
                                                                <option>Samsung</option>
                                                                <option>Toshiba</option>
                                                                <option>Panasonic</option>
                                                                <option>Gateway</option>
                                                                <option>Systemax</option>
                                                                <option>Alienware</option>
                                                                <option>Otro</option>
                                                            </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Modelo</label>
                                                        <input name="Modelo" class="form-control" placeholder="Modelo">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Monitor</label>
                                                        <input name="Monitor" class="form-control" placeholder="Marca y modelo de monitor">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Teclado</label>
                                                        <input name="Teclado" class="form-control" placeholder="Marca y modelo de teclado">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Mause</label>
                                                        <input name="Mause" class="form-control" placeholder="Marca y modelo de mause">
                                                    </div>
                                                    <div class="form-gorup">
                                                        <label>Fecha de compra</label>
                                                        <?php    
                                                            fechaform();
                                                        ?>
                                                    </div>
                                                    <div class="form-group">
                                                    <label>Cuenta con UPS</label>
                                                        <select name="Ups" class="form-control">
                                                            <option>SI</option>
                                                            <option>NO</option>
                                                        </select>
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
                                            Hardware
                                        </div>
                                        <div class="panel-body">
                                            <div class="form-group">
                                                <label>Mother Board</label>
                                                <input name="Mb" class="form-control" placeholder="MOdelo de Mother Board">
                                            </div>
                                            <div class="form-group">
                                                <label>Capacidad de HDD</label>
                                                <input name="Hdd" class="form-control" placeholder="Disco Duro">
                                            </div>
                                            <div class="form-group">
                                            <label>Memorioa RAM</label>
                                                <select name="Ram" class="form-control">
                                                    <option value="2">2 Gigas</option>
                                                    <option value="3">3 Gigas</option>
                                                    <option value="4">4 Gigas</option>
                                                    <option value="6">6 Gigas</option>
                                                    <option value="8">8 Gigas</option>
                                                    <option value="12">12 Gigas</option>
                                                    <option value="16">16 Gigas</option>
                                                    <option value="32">32 Gigas</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label>Procesador</label>
                                                <input name="Proc" class="form-control" placeholder="Tipo de procesador">
                                            </div>
                                            <div class="form-group">
                                                <label>MAC Address</label>
                                                <input name="Mac" class="form-control" placeholder="Direcione MAC">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                    <!--/.panel-body -->
                                <!-- /.col-lg-6 (nested) -->
                                <div class="col-lg-6">
                                    <!-- /.panel-heading -->
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            SoftWare
                                        </div>
                                        <div class="panel-body">
                                            <div class="form-group">
                                            <label>Sistema Operativo</label>
                                                <select name="Os" class="form-control">
                                                    <option>Windows 7 Pro 32 bits</option>
                                                    <option>Windows 7 Pro 64 bits</option>
                                                    <option>Windows 8</option>
                                                    <option>Windows 8.1</option>
                                                    <option>Windows 10</option>
                                                    <option>Apple MAC</option>
                                                    <option>Linux</option>
                                                    <option>Windows Server 2003 32 bits</option>
                                                    <option>Windows Server 2003 64 bits</option>
                                                    <option>Windows Server 2008 32 bits</option>
                                                    <option>Windows Server 2008 64 bits</option>
                                                    <option>Windows Server 2012 64 bits</option>
                                                    <option>Otro</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label>Numero de serie de OS</label>
                                                <input name="SOs" class="form-control" placeholder="Serial key">
                                            </div>
                                            <div class="form-group">
                                            <label>Version de Office</label>
                                                <select name="Office" class="form-control">
                                                    <option>Microsoft Office 97</option>
                                                    <option>Microsoft Office 2000</option>
                                                    <option>Microsoft Office XP</option>
                                                    <option>Microsoft Office 2003</option>
                                                    <option>Microsoft Office 2013</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                            <label>Edicion de Office</label>
                                                <select name="EOffice" class="form-control">
                                                    <option>Home Student</option>
                                                    <option>Home Business</option>
                                                    <option>Standard</option>
                                                    <option>Professional</option>
                                                    <option>Professional Plus</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label>Numero de serie de Office</label>
                                                <input name="SOffice" class="form-control" placeholder="Serial Office">
                                            </div>
                                            <div class="form-group">
                                            <label>Masrca de Antivirus</label>
                                                <select name="AV" class="form-control">
                                                    <option>avast</option>
                                                    <option>AVG</option>
                                                    <option>ESET NOD32 </option>
                                                    <option>Avira AntiVir Personal</option>
                                                    <option>Kaspersky</option>
                                                    <option>Norton AntiVirus</option>
                                                    <option>Panda Antivirus</option>
                                                    <option>MSNCleaner</option>
                                                    <option>Microsoft Security Essentials</option>
                                                    <option>Symantec</option>
                                                    <option>Otro</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                            <label>Tipo de licencia</label>
                                                <select name="Tipo" class="form-control">
                                                    <option>Corporativa</option>
                                                    <option>Unica x PC</option>
                                                </select>
                                            </div>
                                        </div>
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
                if (! strlen(trim($_POST['Asignacion']))) { 
                    $errors[ ] = 'Debe indicar un nombre.'; 
                } 
                // Asunto es requerido
                if (! strlen(trim($_POST['Dpto']))) { 
                    $errors[ ] = 'Debe indicar un apellido.'; 
                } 
                // Validacion de Telefono
                if ((strlen(trim($_POST['Tel'])) < 8) || (strlen(trim($_POST['tel'])) > 8)) { 
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
                $sD='0'.$stM;
            }else{
                $sD=$stM;
            }
            $compra=$stY.'-'.$sM.'-'.$sD;
            $fcompra = mysqli_real_escape_string($compra);
            $empresa = mysqli_real_escape_string($_POST['Empresas']);
            $marca = mysqli_real_escape_string($_POST['Marca']);
            $asignacion = mysqli_real_escape_string($_POST['Asignacion']);
            $dpto = mysqli_real_escape_string($_POST['Dpto']);
            $cargo = mysqli_real_escape_string($_POST['Cargo']);
            $email = mysqli_real_escape_string($_POST['Email']);
            $tel = mysqli_real_escape_string($_POST['Tel']);
            $modelo = mysqli_real_escape_string($_POST['Modelo']);
            $monitor = mysqli_real_escape_string($_POST['Monitor']);
            $teclado = mysqli_real_escape_string($_POST['Teclado']);
            $mause = mysqli_real_escape_string($_POST['Mause']);
            $ups = mysqli_real_escape_string($_POST['Ups']);
            $mb = mysqli_real_escape_string($_POST['Mb']);
            $hdd = mysqli_real_escape_string($_POST['Hdd']);
            $ram = mysqli_real_escape_string($_POST['Ram']);
            $proc = mysqli_real_escape_string($_POST['Proc']);
            $mac = mysqli_real_escape_string($_POST['Mac']);
            $os = mysqli_real_escape_string($_POST['Os']);
            $sos = mysqli_real_escape_string($_POST['SOs']);
            $office = mysqli_real_escape_string($_POST['Office']);
            $eoffice = mysqli_real_escape_string($_POST['EOffice']);
            $soffice = mysqli_real_escape_string($_POST['SOffice']);
            $av = mysqli_real_escape_string($_POST['AV']);
            $tipo = mysqli_real_escape_string($_POST['Tipo']);
                                              
            $get_uid=mysqli_query($con,"SELECT IdUsuario, Alias FROM Usuarios WHERE Alias='$Creador'");
            While ($row = mysqli_fetch_assoc($get_uid)) {
                $user=$row['Alias'];
                    if($user==$Creador){
                        $uid=$row['IdUsuario'];
                    }
                }
            $q ="INSERT INTO PcInvet (Asignacion, Dpto, Cargo, Email, Tel, Modelo, Monitor, Teclado, Mause, Ups, Mb, Hdd, Ram, Proc, Mac, Os, SOs, Office, EOffice, SOffice, Marca, AV, Tipo, FCompra, FCreacion, IdEmp)
                  VALUES ('$asignacion','$dpto','$cargo','$email','$tel','$modelo','$monitor','$teclado','$mause','$ups','$mb','$hdd','$ram','$proc','$mac','$os','$sos','$office','$eoffice','$soffice','$marca','$av','$tipo','$fcompra',NOW(),'$empresa')";              
                mysqli_query($q,$con)or die (mysqli_error());

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
