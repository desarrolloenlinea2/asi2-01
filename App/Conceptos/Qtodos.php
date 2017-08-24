<?php
Function Imprimir0 (){
require '../php/connect.php';
print '<table class="table table-hover">';
print '<thead>
      <tr aling="center">
        <td>Caso</td><td>Fecha</td><td>Asunto</td><td>Usuario</td><td>Responsable</td><td>Estatus</td>
      </tr>
      </thead>';
print'<tbody>
      </tr>';    
$q= mysqli_query($con,"SELECT IdTiket,FInicial,Asunto,NReporta,Tecnico,IdEstado FROM Tikets WHERE IdEstado='Activo' OR IdEstado=''");

while ($row=  mysqli_fetch_assoc($q)) {
    print '<tr><td aling="center"><form action="../pages/Change.php" method="GET">
              <input name="IdTiket" type="submit" class="btn btn-default btn-circle" value="'.$row['IdTiket'].'"</button>
              </form>
              </td>
              <td>'.$row['FInicial'].'</td>
              <td>'.$row['Asunto'].'</a></td>
              <td>'.$row['NReporta'].'</td>';
                  $h= mysqli_query($con,"SELECT IdUsuario,Nom,Apel FROM Usuarios");
                  while ($row2= mysqli_fetch_assoc($h)){
                    if ($row['Tecnico']==$row2['IdUsuario']){
                      print '<td>'.$row2['Nom'].' '.$row2['Apel'].'</td>';           
                    }
              }
               print '<td>'.$row['IdEstado'].'</td></tr>';
        }
print'</tbody>
      </table>';
require '../php/close.php';
}

Function Imprimir1 (){
require '../php/connect.php';
print '<table class="table table-hover">';
print '<tr aling="center">
    <td>Caso</td><td>Fecha</td><td>Asunto</td><td>Usuario</td><td>Responsable</td><td>Estatus</td>
</tr>';
print '</tr>';    
$q= mysqli_query($con,"SELECT IdTiket,FInicial,Asunto,NReporta,Tecnico,IdEstado FROM Tikets ");

while ($row=  mysqli_fetch_assoc($q)) {
    print '<tr><td aling="center"><form action="../pages/Change.php" method="GET">
              <input name="IdTiket" type="submit" class="btn btn-default btn-circle" value="'.$row['IdTiket'].'"</button>
              </form>
              </td>
              <td>'.$row['FInicial'].'</td>
              <td>'.$row['Asunto'].'</a></td>
              <td>'.$row['NReporta'].'</td>';    
              $h= mysqli_query($con,"SELECT IdUsuario,Nom,Apel FROM Usuarios");
                  while ($row2= mysqli_fetch_assoc($h)){
                    if ($row['Tecnico']==$row2['IdUsuario']){
                      print '<td>'.$row2['Nom'].' '.$row2['Apel'].'</td>';           
                    }
              }
               print '<td>'.$row['IdEstado'].'</td></tr>';
        }
print '</table>';
require '../php/close.php';
}

Function Imprimir2 (){
require '../php/connect.php';
print '<table class="table table-hover">';
print '<tr aling="center">
    <td>Caso</td><td>Fecha</td><td>Asunto</td><td>Usuario</td><td>Responsable</td><td>Estatus</td>
</tr>';
print '</tr>';    
$q= mysqli_query($con,"SELECT IdTiket,FInicial,Asunto,NReporta,Tecnico,IdEstado FROM Tikets WHERE IdEstado='Pendiente Proveedor'");

while ($row=  mysqli_fetch_assoc($q)) {
    print '<tr><td aling="center"><form action="../pages/Change.php" method="GET">
              <input name="IdTiket" type="submit" class="btn btn-default btn-circle" value="'.$row['IdTiket'].'"</button>
              </form>
              </td>
              <td>'.$row['FInicial'].'</td>
              <td>'.$row['Asunto'].'</a></td>
              <td>'.$row['NReporta'].'</td>';
                  $h= mysqli_query($con,"SELECT IdUsuario,Nom,Apel FROM Usuarios");
                  while ($row2= mysqli_fetch_assoc($h)){
                    if ($row['Tecnico']==$row2['IdUsuario']){
                      print '<td>'.$row2['Nom'].' '.$row2['Apel'].'</td>';           
                    }
              }
               print '<td>'.$row['IdEstado'].'</td></tr>';
        }
print '</table>';
require '../php/close.php';
}

Function Imprimir3 (){
require '../php/connect.php';
print '<table class="table table-hover">';
print '<tr aling="center">
    <td>Caso</td><td>Fecha</td><td>Asunto</td><td>Usuario</td><td>Responsable</td><td>Estatus</td>
</tr>';
print '</tr>';    
$q= mysqli_query($con,"SELECT IdTiket,FInicial,Asunto,NReporta,Tecnico,IdEstado FROM Tikets WHERE IdEstado='Pendiente Recursos'");

while ($row=  mysqli_fetch_assoc($q)) {
    print '<tr><td aling="center"><form action="../pages/Change.php" method="GET">
              <input name="IdTiket" type="submit" class="btn btn-default btn-circle" value="'.$row['IdTiket'].'"</button>
              </form>
              </td>
              <td>'.$row['FInicial'].'</td>
              <td>'.$row['Asunto'].'</a></td>
              <td>'.$row['NReporta'].'</td>';
                  $h= mysqli_query($con,"SELECT IdUsuario,Nom,Apel FROM Usuarios");
                  while ($row2= mysqli_fetch_assoc($h)){
                    if ($row['Tecnico']==$row2['IdUsuario']){
                      print '<td>'.$row2['Nom'].' '.$row2['Apel'].'</td>';           
                    }
              }
               print '<td>'.$row['IdEstado'].'</td></tr>';
        }
print '</table>';
require '../php/close.php';
}

Function Imprimir4 (){
require '../php/connect.php';
print '<table class="table table-hover">';
print '<tr aling="center">
    <td>Caso</td><td>Fecha</td><td>Asunto</td><td>Usuario</td><td>Responsable</td><td>Estatus</td>
</tr>';
print '</tr>';    
$q= mysqli_query($con,"SELECT IdTiket,FInicial,Asunto,NReporta,Tecnico,IdEstado FROM Tikets WHERE IdEstado='Finalizado'");

while ($row=  mysqli_fetch_assoc($q)) {
    print '<tr><td aling="center"><form action="../pages/Change.php" method="GET">
              <input name="IdTiket" type="submit" class="btn btn-default btn-circle" value="'.$row['IdTiket'].'"</button>
              </form>
              </td>
              <td>'.$row['FInicial'].'</td>
              <td>'.$row['Asunto'].'</a></td>
              <td>'.$row['NReporta'].'</td>';
                  $h= mysqli_query($con,"SELECT IdUsuario,Nom,Apel FROM Usuarios");
                  while ($row2= mysqli_fetch_assoc($h)){
                    if ($row['Tecnico']==$row2['IdUsuario']){
                      print '<td>'.$row2['Nom'].' '.$row2['Apel'].'</td>';           
                    }
              }
               print '<td>'.$row['IdEstado'].'</td></tr>';
        }
print '</table>';
require '../php/close.php';
}

Function Imprimir5 (){
require '../php/connect.php';
$last=date("m")-1;
if($last<=10){
    $start=date("Y-").'0'.$last.'-01';
    $end=date("Y-").'0'.$last.'-30';
}else{
    $start=date("Y-").$last.'-01';
    $end=date("Y-").$last.'-30';
}
print '<table class="table table-hover">';
print '<tr aling="center">
    <td>Caso</td><td>Fecha</td><td>Asunto</td><td>Usuario</td><td>Responsable</td><td>Estatus</td>
</tr>';
print '</tr>';    
$q= mysqli_query($con,"SELECT IdTiket,FInicial,Asunto,NReporta,Tecnico,IdEstado FROM Tikets WHERE (FInicial BETWEEN '$start' AND '$end')");
while ($row=  mysqli_fetch_assoc($q)) {
    print '<tr><td aling="center"><form action="../pages/Change.php" method="GET">
              <input name="IdTiket" type="submit" class="btn btn-default btn-circle" value="'.$row['IdTiket'].'"</button>
              </form>
              </td>
              <td>'.$row['FInicial'].'</td>
              <td>'.$row['Asunto'].'</a></td>
              <td>'.$row['NReporta'].'</td>';
                  $h= mysqli_query($con,"SELECT IdUsuario,Nom,Apel FROM Usuarios");
                  while ($row2= mysqli_fetch_assoc($h)){
                    if ($row['Tecnico']==$row2['IdUsuario']){
                      print '<td>'.$row2['Nom'].' '.$row2['Apel'].'</td>';           
                    }
              }
               print '<td>'.$row['IdEstado'].'</td></tr>';
        }
print '</table>';
require '../php/close.php';
}

Function Imprimir6 (){
require '../php/connect.php';
$last=date("m");
if($last<=10){
    $start=date("Y-").'0'.$last.'-01';
    $end=date("Y-").'0'.$last.'-30';
}else{
    $start=date("Y-").$last.'-01';
    $end=date("Y-").$last.'-30';
}
print '<table class="table table-hover">';
print '<tr aling="center">
    <td>Caso</td><td>Fecha</td><td>Asunto</td><td>Usuario</td><td>Responsable</td><td>Estatus</td>
</tr>';
print '</tr>';    
$q= mysqli_query($con,"SELECT IdTiket,FInicial,Asunto,NReporta,Tecnico,IdEstado FROM Tikets WHERE (FInicial BETWEEN '$start' AND '$end')");
while ($row=  mysqli_fetch_assoc($q)) {
    print '<tr><td aling="center"><form action="../pages/Change.php" method="GET">
              <input name="IdTiket" type="submit" class="btn btn-default btn-circle" value="'.$row['IdTiket'].'"</button>
              </form>
              </td>
              <td>'.$row['FInicial'].'</td>
              <td>'.$row['Asunto'].'</a></td>
              <td>'.$row['NReporta'].'</td>';
                  $h= mysqli_query($con,"SELECT IdUsuario,Nom,Apel FROM Usuarios");
                  while ($row2= mysqli_fetch_assoc($h)){
                    if ($row['Tecnico']==$row2['IdUsuario']){
                      print '<td>'.$row2['Nom'].' '.$row2['Apel'].'</td>';           
                    }
              }
               print '<td>'.$row['IdEstado'].'</td></tr>';
        }
print '</table>';
require '../php/close.php';
}

Function Imprimir7 (){
require '../php/connect.php';
$thisW=date(l);
print '<br>';
if ($thisW=='Sunday'){
    $start=date("Y-m-d");
}elseif ($thisW=='Monday') {
    $d=date("d")-1;
    $start= date("Y-m-").$d;
}elseif ($thisW=='Tuesday') {
    $d=date("d")-2;
    $start= date("Y-m-").$d;  
}elseif ($thisW=='Wednesday') {
    $d=date("d")-3;
    $start= date("Y-m-").$d;
}elseif ($thisW=='Thursday') {
    $d=date("d")-4;
    $start= date("Y-m-").$d;
}elseif ($thisW=='Friday') {
    $d=date("d")-5;
    $start= date("Y-m-").$d;
}elseif ($thisW=='Saturday') {
    $d=date("d")-6;
    $start= date("Y-m-").$d;
}
print '<table class="table table-hover">';
print '<tr aling="center">
    <td>Caso</td><td>Fecha</td><td>Asunto</td><td>Usuario</td><td>Responsable</td><td>Estatus</td>
</tr>';
print '</tr>';    
$q= mysqli_query($con,"SELECT IdTiket,FInicial,Asunto,NReporta,Tecnico,IdEstado FROM Tikets WHERE (FInicial BETWEEN '$start' AND NOW())");
while ($row=  mysqli_fetch_assoc($q)) {
    print '<tr><td aling="center"><form action="../pages/Change.php" method="GET">
              <input name="IdTiket" type="submit" class="btn btn-default btn-circle" value="'.$row['IdTiket'].'"</button>
              </form>
              </td>
              <td>'.$row['FInicial'].'</td>
              <td>'.$row['Asunto'].'</a></td>
              <td>'.$row['NReporta'].'</td>';
                  $h= mysqli_query($con,"SELECT IdUsuario,Nom,Apel FROM Usuarios");
                  while ($row2= mysqli_fetch_assoc($h)){
                    if ($row['Tecnico']==$row2['IdUsuario']){
                      print '<td>'.$row2['Nom'].' '.$row2['Apel'].'</td>';           
                    }
              }
               print '<td>'.$row['IdEstado'].'</td></tr>';
        }
print '</table>';
require '../php/close.php';
}

Function Imprimir8 ($stY,$stM,$stD,$endY,$endM,$endD){
 require '../php/connect.php'; 
//Tratatiemto de datos mes
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
//Tratatiemto de datos mes fin
if($endM<10){
    $eM='0'.$endM;
}else{
    $eM=$endM;
}
//Tratatiemto de datos dia
if($endD<10){
    $eD='0'.$endD;
}else{
    $eD=$endD;
}

$start=$stY.'-'.$sM.'-'.$sD;
$end=$endY.'-'.$eM.'-'.$eD;

print '<table class="table table-hover">';
print '<tr aling="center">
    <td>Caso</td><td>Fecha</td><td>Asunto</td><td>Usuario</td><td>Responsable</td><td>Estatus</td>
</tr>';
print '</tr>';    
$q= mysqli_query($con,"SELECT IdTiket,FInicial,Asunto,NReporta,Tecnico,IdEstado FROM Tikets WHERE (FInicial BETWEEN '$start' AND '$end')");
while ($row=  mysqli_fetch_assoc($q)) {
    print '<tr><td aling="center"><form action="../pages/Change.php" method="GET">
              <input name="IdTiket" type="submit" class="btn btn-default btn-circle" value="'.$row['IdTiket'].'"</button>
              </form>
              </td>
              <td>'.$row['FInicial'].'</td>
              <td>'.$row['Asunto'].'</a></td>
              <td>'.$row['NReporta'].'</td>';
                  $h= mysqli_query($con,"SELECT IdUsuario,Nom,Apel FROM Usuarios");
                  while ($row2= mysqli_fetch_assoc($h)){
                    if ($row['Tecnico']==$row2['IdUsuario']){
                      print '<td>'.$row2['Nom'].' '.$row2['Apel'].'</td>';           
                    }
              }
               print '<td>'.$row['IdEstado'].'</td></tr>';
        }
print '</table>';
require '../php/close.php';
}
Function Imprimir9 (){
require '../php/connect.php';
$thisW=date(l);
print '<br>';
if ($thisW=='Sunday'){
    $start=date("Y-m-d");
}elseif ($thisW=='Monday') {
    $d=date("d")-1;
    $start= date("Y-m-").$d;
}elseif ($thisW=='Tuesday') {
    $d=date("d")-2;
    $start= date("Y-m-").$d;  
}elseif ($thisW=='Wednesday') {
    $d=date("d")-3;
    $start= date("Y-m-").$d;
}elseif ($thisW=='Thursday') {
    $d=date("d")-4;
    $start= date("Y-m-").$d;
}elseif ($thisW=='Friday') {
    $d=date("d")-5;
    $start= date("Y-m-").$d;
}elseif ($thisW=='Saturday') {
    $d=date("d")-6;
    $start= date("Y-m-").$d;
}
print '<table class="table table-hover">';
print '<tr aling="center">
    <td>Caso</td><td>Fecha</td><td>Asunto</td><td>Estatus</td>
</tr>';
print '</tr>';    
$q= mysqli_query($con,"SELECT IdTiket,FInicial,Asunto,IdEstado FROM Tikets WHERE (FInicial BETWEEN '$start' AND NOW())");
while ($row=  mysqli_fetch_assoc($q)) {
    print '<tr><td aling="center"><form action="../pages/Change.php" method="GET">
              <input name="IdTiket" type="submit" class="btn btn-default btn-circle" value="'.$row['IdTiket'].'"</button>
              </form>
              </td>
              <td>'.$row['FInicial'].'</td>
              <td>'.$row['Asunto'].'</a></td>';
              print '<td>'.$row['IdEstado'].'</td></tr>';
        }
print '</table>';
require '../php/close.php';
}

Function Imprimir10(){
    require '../php/connect.php';
    print '<table class="table table-hover">';
    print '<tr aling="center">
           <td>Caso</td><td>Fecha</td><td>Asunto</td><td>Estatus</td>
           </tr>';
    //print '</tr>';    
    $q= mysqli_query($con,"SELECT IdTiket,FInicial,Asunto,IdEstado FROM Tikets ORDER BY FInicial DESC, IdTiket DESC LIMIT 5");
    while ($row=  mysqli_fetch_assoc($q)) {
        print '<tr><td aling="center"><form action="../pages/Change.php" method="GET">
                  <input name="IdTiket" type="submit" class="btn btn-default btn-circle" value="'.$row['IdTiket'].'"</button>
                  </form>
                  </td>
                  <td>'.$row['FInicial'].'</td>
                  <td>'.$row['Asunto'].'</a></td>';
                  print '<td>'.$row['IdEstado'].'</td></tr>';
            }
    print '</table>';
    require '../php/close.php';
}


Function Clientes (){
require '../php/connect.php';
print '<table class="table table-hover">';
print '<tr aling="center">
        <td>ID</td><td>Nombre</td><td>Apellido</td><td>Telefono</td><td>Celular</td><td>Fecha de Ingreso</td><td>Acceso</td><td>Usuario</td><td>Correo</td><td>Empresa</td>
      </tr>';
print '</tr>';
$acceso=2;    
$q= mysqli_query($con,"SELECT IdUsuario, Nom, Apel, Tel, Cel, FCre, Rol, Alias, Mail, MIdEmp FROM Usuarios WHERE Rol='$acceso' ");

while ($row=  mysqli_fetch_assoc($q)) {
    print '<tr><td aling="center"><form action="../pages/Change.php" method="GET">
              <input name="IdTiket" type="submit" class="btn btn-default btn-circle" value="'.$row['IdUsuario'].'"</button>
              </form>
              </td>
              <td>'.$row['Nom'].'</td>
              <td>'.$row['Apel'].'</td>
              <td>'.$row['Tel'].'</td>
              <td>'.$row['Cel'].'</td>
              <td>'.$row['FCre'].'</td>';
                  $h= mysqli_query($con,"SELECT IdRol,Rol FROM Rol");
                  while ($row2= mysqli_fetch_assoc($h)){
                    if ($row['Rol']==$row2['IdRol']){
                      print '<td>'.$row2['Rol'].'</td>';           
                    }
                  }
              print '<td>'.$row['Alias'].'</td>';
              print '<td>'.$row['Mail'].'</td>';
                  $i= mysqli_query($con,"SELECT NComer,IdEmp FROM Empresa");
                  while ($row2= mysqli_fetch_assoc($i)){
                    if ($row['MIdEmp']==$row2['IdEmp']){
                      print '<td>'.$row2['NComer'].'</td>';           
                    }
                  }
        }
print '</table>';
require '../php/close.php';
}
Function Tecnicos (){
require '../php/connect.php';
print '<table class="table table-hover">';
print '<tr aling="center">
        <td>ID</td><td>Nombre</td><td>Apellido</td><td>Telefono</td><td>Celular</td><td>Fecha de Ingreso</td><td>Acceso</td><td>Usuario</td><td>Correo</td><td>Sitios Asignados</td>
      </tr>';
print '</tr>';
$acceso=0;    
$q= mysqli_query($con,"SELECT IdUsuario, Nom, Apel, Tel, Cel, FCre, Rol, Alias, Mail, MIdEmp FROM Usuarios WHERE Rol='$acceso' ");

while ($row=  mysqli_fetch_assoc($q)) {
    print '<tr><td aling="center"><form action="../pages/Change.php" method="GET">
              <input name="IdTiket" type="submit" class="btn btn-default btn-circle" value="'.$row['IdUsuario'].'"</button>
              </form>
              </td>
              <td>'.$row['Nom'].'</td>
              <td>'.$row['Apel'].'</td>
              <td>'.$row['Tel'].'</td>
              <td>'.$row['Cel'].'</td>
              <td>'.$row['FCre'].'</td>';
                  $h= mysqli_query($con,"SELECT IdRol,Rol FROM Rol");
                  while ($row2= mysqli_fetch_assoc($h)){
                    if ($row['Rol']==$row2['IdRol']){
                      print '<td>'.$row2['Rol'].'</td>';           
                    }
                  }
              print '<td>'.$row['Alias'].'</td>';
              print '<td>'.$row['Mail'].'</td>';
              Print '<td>';
                  $i= mysqli_query($con,"SELECT NComer,Tecnico FROM Empresa");
                  while ($row2= mysqli_fetch_assoc($i)){
                    if ($row['IdUsuario']==$row2['Tecnico']){
                      print $row2['NComer'].'<br>';           
                    }
                  }
              print '</td>';
        }
print '</table>';
require '../php/close.php';
}
Function Administradores (){
require '../php/connect.php';
print '<table class="table table-hover">';
print '<tr aling="center">
        <td>ID</td><td>Nombre</td><td>Apellido</td><td>Telefono</td><td>Celular</td><td>Fecha de Ingreso</td><td>Acceso</td><td>Usuario</td><td>Correo</td>
      </tr>';
print '</tr>';
$acceso=1;    
$q= mysqli_query($con,"SELECT IdUsuario, Nom, Apel, Tel, Cel, FCre, Rol, Alias, Mail, MIdEmp FROM Usuarios WHERE Rol='$acceso' ");

while ($row=  mysqli_fetch_assoc($q)) {
    print '<tr><td aling="center"><form action="../pages/Change.php" method="GET">
              <input name="IdTiket" type="submit" class="btn btn-default btn-circle" value="'.$row['IdUsuario'].'"</button>
              </form>
              </td>
              <td>'.$row['Nom'].'</td>
              <td>'.$row['Apel'].'</td>
              <td>'.$row['Tel'].'</td>
              <td>'.$row['Cel'].'</td>
              <td>'.$row['FCre'].'</td>';
                  $h= mysqli_query($con,"SELECT IdRol,Rol FROM Rol");
                  while ($row2= mysqli_fetch_assoc($h)){
                    if ($row['Rol']==$row2['IdRol']){
                      print '<td>'.$row2['Rol'].'</td>';           
                    }
                  }
              print '<td>'.$row['Alias'].'</td>';
              print '<td>'.$row['Mail'].'</td>';
        }
print '</table>';
require '../php/close.php';
}
?>
