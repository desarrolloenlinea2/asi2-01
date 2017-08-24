<?php

require 'connect.php';
//Variables del caso
$coment=$_POST['Coments'];

print $coment;
$id=$_POST['cid'];
print $id;
$q =mysqli_query($con,"INSERT INTO Tiketcoment (FComent,Coment,IdTiket) values (Now(),'$coment','$id')");
	header( 'Location: ../pages/Change.php?IdTiket='.$id.'' ) ;

require 'close.php';

?>