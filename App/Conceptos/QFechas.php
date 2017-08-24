<?php

fechaform();

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
$nacimiento=$stY.'-'.$sM.'-'.$sD;

print $nacimiento;

function fechaform(){
print'
<form action="QFechas.php" method="POST">
<table class="table table-hover">
<tr>
    <td>
        <select name="idia" class="form-control">';
                for($d=1;$d<=31;$d++)
                {
                    /*if($d<10)
                        $dd = "0" . $d;
                    else*/
                    $dd = $d;
                    print '<option value='.$dd.'>'.$dd.'</option>';
                }
print '
        </select>
    </td>
    <td>
        <select name="imes" class="form-control">';
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
                        print '<option value='.$me.'>'.$mes.'</option>';
                    }
print '
        </select>
    </td>
    <td> 
        <select name="ianio" class="form-control">';
                $tope = date(Y);
                $edad_max = 50;
                $edad_min = 0;
                for($a= $tope - $edad_max; $a<=$tope - $edad_min; $a++){
                    print '<option value='.$a.'>'.$a.'</option>'; 
                }
print '
        </select>
    </td>
</tr>
</table>
<button type="submit" class="btn btn-default" value="">Submit Button</button>
</form>';
}
?>