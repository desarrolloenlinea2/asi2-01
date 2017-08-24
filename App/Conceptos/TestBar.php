<?php

Function GraficaBarra(){
require '../php/connect.php';

$q2= mysqli_query($con,"SELECT IdTipo, count(IdTipo) from Tikets WHERE MONTH(FInicial) = MONTH(now()) and YEAR(FInicial) = YEAR(now()) group by IdTipo");
$q3= mysqli_query($con,"SELECT count(IdTipo) from Tikets");
$contador = $q3->fetch_assoc()['count(IdTipo)'];

//print $contador;
while ($row2=  mysqli_fetch_assoc($q2)) {
    print '{x: \''.$row2['IdTipo'].'\', y: '.$row2['count(IdTipo)'].'}';
        if ($row2['count(IdTipo)'] < $contador) {
          print ',';
        }
    //print '<br>';
    }
//print '],';
require '../php/close.php';
}
//Imprimir1();

Function GraficaArea(){
require '../php/connect.php';

$q2= mysqli_query($con,"SELECT YEAR(FInicial), MONTH(FInicial) FROM Tikets GROUP BY YEAR(FInicial),MONTH(FInicial)");

//print $contador;
while ($row2=  mysqli_fetch_assoc($q2)) {

    print '{period: \''.$row2['YEAR(FInicial)'].'-'.$row2['MONTH(FInicial)'].'\'';
    $Year=$row2['YEAR(FInicial)'];
    $Mes=$row2['MONTH(FInicial)'];
    $q3= mysqli_query($con,"SELECT IdCategoria, COUNT(IdCategoria) FROM Tikets WHERE YEAR(FInicial)='$Year' and MONTH(FInicial)='$Mes' GROUP BY IdCategoria ORDER BY IdCategoria ASC");
        while ($row3= mysqli_fetch_assoc($q3)){
            print ', '.$row3['IdCategoria'].': '.$row3['COUNT(IdCategoria)'];
        }
    print '},';
    }
require '../php/close.php';
}

Function GraficaDona(){
require '../php/connect.php';

$q2= mysqli_query($con,"SELECT IdCategoria, Count(IdCategoria) FROM Tikets GROUP BY IdCategoria");

//print $contador;
while ($row2=  mysqli_fetch_assoc($q2)) {
    print '{label: "'.$row2['IdCategoria'].'", value: '.$row2['Count(IdCategoria)'].'},';
    //print '<br>';
    }
//print '],';
require '../php/close.php';
}

Function GraficaBMes(){
require '../php/connect.php';

$last=date(m);
if($last<10){
    $start=date("Y-").$last.'-01';
    $end=date("Y-").$last.'-30';
}else{
    $start=date("Y-").$last.'-01';
    $end=date("Y-").$last.'-30';
}
    
$q2= mysqli_query($con,"SELECT IdTipo, count(IdTipo) from Tikets where (FInicial BETWEEN '$start' AND '$end') group by IdTipo");
$q3= mysqli_query($con,"SELECT count(IdTipo) from Tikets where (FInicial BETWEEN '$start' AND '$end')");
$contador = $q3->fetch_assoc()['count(IdTipo)'];

//print $contador;
while ($row2=  mysqli_fetch_assoc($q2)) {
    print '{x: \''.$row2['IdTipo'].'\', y: '.$row2['count(IdTipo)'].'}';
        if ($row2['count(IdTipo)'] < $contador) {
          print ',';
        }
    //print '<br>';
    }
//print '],';
require '../php/close.php';
}

Function GraficaBLastMes(){
require '../php/connect.php';

$last=date(m)-1;
if($last<10){
    $start=date("Y-").$last.'-01';
    $end=date("Y-").$last.'-30';
}else{
    $start=date("Y-").$last.'-01';
    $end=date("Y-").$last.'-30';
}
    
$q2= mysqli_query($con,"SELECT IdTipo, count(IdTipo) from Tikets where (FInicial BETWEEN '$start' AND '$end') group by IdTipo");
$q3= mysqli_query($con,"SELECT count(IdTipo) from Tikets where (FInicial BETWEEN '$start' AND '$end')");
$contador = $q3->fetch_assoc()['count(IdTipo)'];

//print $contador;
while ($row2=  mysqli_fetch_assoc($q2)) {
    print '{x: \''.$row2['IdTipo'].'\', y: '.$row2['count(IdTipo)'].'}';
        if ($row2['count(IdTipo)'] < $contador) {
          print ',';
        }
    //print '<br>';
    }
//print '],';
require '../php/close.php';
}

Function GraficaAThisY(){
require '../php/connect.php';

$q2= mysqli_query($con,"SELECT YEAR(FInicial), MONTH(FInicial) FROM Tikets WHERE YEAR(FInicial)='2016' GROUP BY YEAR(FInicial),MONTH(FInicial)");

//print $contador;
while ($row2=  mysqli_fetch_assoc($q2)) {

    print '{period: \''.$row2['YEAR(FInicial)'].'-'.$row2['MONTH(FInicial)'].'\'';
    $Year=$row2['YEAR(FInicial)'];
    $Mes=$row2['MONTH(FInicial)'];
    $q3= mysqli_query($con,"SELECT IdCategoria, COUNT(IdCategoria) FROM Tikets WHERE YEAR(FInicial)='$Year' and MONTH(FInicial)='$Mes' GROUP BY IdCategoria ORDER BY IdCategoria ASC");
        while ($row3= mysqli_fetch_assoc($q3)){
            print ', '.$row3['IdCategoria'].': '.$row3['COUNT(IdCategoria)'];
        }
    print '},';
    }
require '../php/close.php';
}

Function GraficaDlastM(){
require '../php/connect.php';
    
$last=date(m)-1;
if($last<10){
    $start=date("Y-").$last.'-01';
    $end=date("Y-").$last.'-30';
}else{
    $start=date("Y-").$last.'-01';
    $end=date("Y-").$last.'-30';
}

$q2= mysqli_query($con,"SELECT IdCategoria, Count(IdCategoria) FROM Tikets where (FInicial BETWEEN '$start' AND '$end') GROUP BY IdCategoria");

//print $contador;
while ($row2=  mysqli_fetch_assoc($q2)) {
    print '{label: "'.$row2['IdCategoria'].'", value: '.$row2['Count(IdCategoria)'].'},';
    //print '<br>';
    }
//print '],';
require '../php/close.php';
}

Function GraficaDThisM(){
require '../php/connect.php';    
$last=date(m);
if($last<10){
    $start=date("Y-").$last.'-01';
    $end=date("Y-").$last.'-30';
}else{
    $start=date("Y-").$last.'-01';
    $end=date("Y-").$last.'-30';
}

$q2= mysqli_query($con,"SELECT IdCategoria, Count(IdCategoria) FROM Tikets where (FInicial BETWEEN '$start' AND '$end') GROUP BY IdCategoria");
//print $contador;
while ($row2=  mysqli_fetch_assoc($q2)) {
    print '{label: "'.$row2['IdCategoria'].'", value: '.$row2['Count(IdCategoria)'].'},';
    //print '<br>';
    }
//print '],';
require '../php/close.php';
}

Function GraficaBThisMes(){
require '../php/connect.php';

$last=date(m);
if($last<10){
    $start=date("Y-").$last.'-01';
    $end=date("Y-").$last.'-30';
}else{
    $start=date("Y-").$last.'-01';
    $end=date("Y-").$last.'-30';
}
    
$q2= mysqli_query($con,"SELECT IdTipo, count(IdTipo) from Tikets where (FInicial BETWEEN '$start' AND '$end') group by IdTipo");
$q3= mysqli_query($con,"SELECT count(IdTipo) from Tikets where (FInicial BETWEEN '$start' AND '$end')");
$contador = $q3->fetch_assoc()['count(IdTipo)'];

//print $contador;
while ($row2=  mysqli_fetch_assoc($q2)) {
    print '{x: \''.$row2['IdTipo'].'\', y: '.$row2['count(IdTipo)'].'}';
        if ($row2['count(IdTipo)'] < $contador) {
          print ',';
        }
    //print '<br>';
    }
//print '],';
require '../php/close.php';
}

?>
