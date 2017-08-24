<?php

require 'connect.php';

$tec=$_POST['Tecnicos'];

$id=$_POST['cid'];

$q = mysqli_query($con,"UPDATE Tikets SET Tecnico='$tec' WHERE IdTiket='$id'");

Require 'close.php';

header( 'Location: ../pages/Consult.php' ) ;
?>