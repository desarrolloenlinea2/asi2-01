<?php

require 'connect.php';

$stat=$_POST['estatuss'];
$id=$_POST['cid'];
$coment = 'El ticket ha cambiado de estado a '.$stat; 
$q =mysqli_query($con,"UPDATE Tikets SET IdEstado='$stat' WHERE IdTiket='$id'");

$q2 =mysqli_query($con,"INSERT INTO Tiketcoment (FComent,Coment,IdTiket) values (Now(),'$coment','$id')");

header( 'Location: ../pages/Consult.php' ) ;

require 'close.php';
?>