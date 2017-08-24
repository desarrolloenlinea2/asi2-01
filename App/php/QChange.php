<?php
session_start();

function info($id){
$rol=$_SESSION['Rol'];
require 'connect.php';
$q =mysqli_query($con,"SELECT IdTiket,IdEmp,FInicial,NReporta,IdTipo,Asunto,Descrip,IdEstado,Tecnico FROM Tikets WHERE IdTiket='$id' ");

while ($row=  mysqli_fetch_assoc($q)) {

Print'<table class="table table-hover">
      <tr>
      <td align="left" colspan="2" >
          Caso: '.$row['IdTiket'].'
      </td>';
      $nada=$row['IdTiket'];
      $stat=$row['IdEstado'];
            if (!$row['IdEstado'] and $rol!=2 ){
              print'<td align="Right" colspan="2">Estatus: 
                    <form action="../php/Estado.php" method="POST">
                    <select name="estatuss" class="form-control">';
                    $get = mysqli_query($con,"SELECT Estado FROM Estado WHERE Estado != 'Finalizado' ");
                         While ($row1 = mysqli_fetch_assoc($get)) {
                         print '<option value="'.$row1['Estado'].'">'.$row1['Estado'].'</option>'; 
                         }
              print'</select>';
              print'</select>';
              print'<button name="Modificar" type="submit" value="" class="btn btn-primary btn-xs">Cambiar</button>
                    <input type="hidden" name="cid" value="'.$nada.'">
                    </td></form>';
            }elseif (mysqli_real_escape_string($con,$row['IdEstado'])!='Finalizado' and $rol==0){
              print'<td align="Right" colspan="2">Estatus: 
                    <form action="../php/Estado.php" method="POST">
                    <select name="estatuss" class="form-control">';
                    $get = mysqli_query($con,"SELECT Estado FROM Estado WHERE Estado != 'Finalizado' and Estado != 'Activo'");
                         While ($row1 = mysqli_fetch_assoc($get)) {
                         print '<option value="'.$row1['Estado'].'">'.$row1['Estado'].'</option>'; 
                         }
              print'</select>';
              print'</select>';
              print'<button name="Modificar" type="submit" value="" class="btn btn-primary btn-xs">Cambiar</button>
                    <input type="hidden" name="cid" value="'.$nada.'">
                    </td></form>';
            }elseif (mysqli_real_escape_string($con,$row['IdEstado'])!='Finalizado' and $rol==1) {
              print'<td align="Right" colspan="2">Estatus: 
                    <form action="../php/Estado.php" method="POST">
                    <select name="estatuss" class="form-control">';
                    $get = mysqli_query($con,"SELECT Estado FROM Estado WHERE Estado != 'Finalizado'");
                         While ($row1 = mysqli_fetch_assoc($get)) {
                         print '<option value="'.$row1['Estado'].'">'.$row1['Estado'].'</option>'; 
                         }
              print'</select>';
              print'</select>';
              print'<button name="Modificar" type="submit" value="" class="btn btn-primary btn-xs">Cambiar</button>
                    <input type="hidden" name="cid" value="'.$nada.'">
                    </td></form>';
            }else{
              print'<td align="Right"  colspan="2">
                    Estatus: '.$row['IdEstado'].'
                    </td>';
            }
            print'</tr>
                  <tr align="left">
                    <td>
                    Asunto
                  </td>
                  <td>
                  '.$row['Asunto'].'
                  </td>';
            print '<td>Ingresado por: </td>';
          if (!$row['Tecnico'] or $rol==1 and mysqli_real_escape_string($con,$row['IdEstado'])!='Finalizado') {
            print'<td align="Right"><form action="../php/Tecnico.php" method="POST">
                 <select name="Tecnicos" class="form-control">';
                 $get_user = mysqli_query($con,"SELECT IdUsuario,Nom, Apel FROM Usuarios WHERE Rol='0'");
                     While ($row3 = mysqli_fetch_assoc($get_user)) {
                           print '<option value="'.$row3['IdUsuario'].'">'.$row3['Nom'].' '.$row3['Apel'].'</option>';  
                     }
            print'</select>';
            print'<button name="asignar" type="submit" value="" class="btn btn-primary btn-xs">Asignar</button>
                  <input type="hidden" name="cid" value="'.$nada.'">
                  </td></form>';
          }else{
              $h= mysqli_query($con,"SELECT IdUsuario,Nom,Apel FROM Usuarios");
                  while ($row2= mysqli_fetch_assoc($h)){
                    if ($row['Tecnico']==$row2['IdUsuario']){
                      print '<td>'.$row2['Nom'].' '.$row2['Apel'].'</td>';           
                    }
              }
          }
        print '</tr>
                    <td>
                        Tipo
                    </td>
                    <td>
                        '.$row['IdTipo'].'
                    </td>
                    <td>
                        Reportado por:
                    </td>
                    <td>
                        '.$row['NReporta'].'
                    </td>
              </tr>';
        print '<tr><td align="Center" colspan="4"> Infomracion de Contacto </td><tr>';
        $usr=$row['Tecnico'];
        $cli=$row['IdEmp'];
        //$get_usr_inf=mysqli_query($con,"SELECT Nom,Apel,Tel,Cel,Mail FROM Usuarios WHERE Tecnico LIKE '$usr' ");
        if ($rol==1 or $rol==0){
          $get_usr_inf=mysqli_query($con,"SELECT Nom,Apel,Tel,Cel,Mail FROM Usuarios WHERE MidEmp LIKE '$cli' ");
              while ($row2 = mysqli_fetch_assoc($get_usr_inf)){
                  print '<tr><td>Nombre de Contacto:</td><td>'.$row2['Nom'].' '.$row2['Apel'].'</td>';
                  print '<td>Tel:</td><td>'.$row2['Tel'].'</td></tr>';
                  print '<tr><td></td><td></td><td>Cel:</td><td>'.$row2['Cel'].'</td></tr>';
                  print '<tr><td></td><td></td><td>Mail:</td><td>'.$row2['Mail'].'</td></tr>';
              }
        } else {
            $get_usr_inf=mysqli_query($con,"SELECT Nom,Apel,Tel,Cel,Mail FROM Usuarios WHERE IdUsuario LIKE '$usr' ");
              while ($row2 = mysqli_fetch_assoc($get_usr_inf)){
                  print '<td>Tecnico asignado:</td><td>'.$row2['Nom'].' '.$row2['Apel'].'</td>';
                  print '<td>Tel:</td><td>'.$row2['Tel'].'</td></tr>';
                  print '<tr><td></td><td></td><td>Cel:</td><td>'.$row2['Cel'].'</td></tr>';
                  print '<tr><td></td><td></td><td>Mail:</td><td>'.$row2['Mail'].'</td></tr>';
              }
        }

print'</table>
      <table class="table table-hover">
        </tr>
        <tr align="Center">
          <td colspan="2">Descrip del caso:</td>
        </tr><tr>
          <td colspan="2">
          '.$row['Descrip'].'
          </td>   
        </tr>';
print'</table>';
    
}
if($stat!='Finalizado'){
    modificar($nada);   
  }else{
    solucion($nada); 
  }
}

function solucion($id){
require 'connect.php';
$q =mysqli_query($con,"SELECT Solucion FROM Tikets WHERE IdTiket='$id' ");
  while ($row=  mysqli_fetch_assoc($q)) {
    print'</table>
          <table class="table table-hover">
            </tr>
            <tr align="Center">
              <td colspan="2">Solucion</td>
            </tr><tr>
              <td colspan="2">
              '.$row['Solucion'].'
              </td>   
            </tr>';
    print'</table>';
  }
require 'close.php';
}

function modificar($id){
?>
<br>
<table class="table table-hover">
<form method="POST" action="../php/QComent.php">
        <tr>
            <td class="active" colspan="2">
                <textarea name="Coments" class="form-control"></textarea>
            </td>
        </tr>
        <tr aling="center">
            <td>
                <input name="Actualizar" class="btn btn-primary" type="submit" value="Actualizar">
                <?php print'<input type="hidden" name="cid" value="'.$id.'">'?>
            </td>
</form>
<form  method="POST" action="../pages/End.php"> 
            <td align="Right">
                <input name="Finalizar" class="btn btn-primary" type="submit" value="Finalizar">
                <?php print'<input type="hidden" name="cid" value="'.$id.'">'?>
            </td>
        </tr>
</table>
<?php
}

function historial($id){
require 'connect.php';
$Coments =mysqli_query($con,"SELECT FComent,Coment FROM Tiketcoment WHERE IdTiket='$id' ");
?>
      <table class="table table-hover">
          <tr><td align="center" colspan="3">Comentarios</td></tr>
      <?php       
        while ($row4=  mysqli_fetch_assoc($Coments)) {
        Print' <tr>
               <td>'.$row4['FComent'].'</td><td colspan="2">'.$row4['Coment'].'</td></tr>';
      }
      print '</tabel>';
require 'close.php';
}

require 'close.php';
?>
