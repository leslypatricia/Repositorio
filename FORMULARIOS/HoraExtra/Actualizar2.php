
<?php
Modificar($_POST['HE'],$_POST['CJ'],$_POST['CE'],$_POST['SO'],$_POST['SD'],$_POST['SH'],$_POST['PHE'],$_POST['PH'],$_POST['NH'],$_POST['THE'],$_POST['F']);
function Modificar($HE,$CJ,$CE,$SO,$SD,$SH,$PHE,$PH,$NH,$THE,$F){
	$db_host="localhost";
	$db_usuario="root";
	$db_contra="";
	$db_nombre="nominas";
	
	$conexion=mysqli_connect($db_host,$db_usuario,$db_contra,$db_nombre);

$sentencia="UPDATE horaextra SET Cod_Jornada='".$CJ."',Cod_empleados='".$CE."',
Sueldo_Ordinario='".$SO."',Sueldo_Diario='".$SD."',Sueldo_Hora='".$SH."',Porce_Hora_Extra='".$PHE."',
Pago_Hora='".$PH."',Numero_Horas='".$NH."',Total_HE='".$THE."',fecha='".$F."' WHERE Cod_HExtra='".$HE."'";
$conexion->query($sentencia) or die ("error ak actualizar". mysqli_error($conexion));
}

?>
<script type="text/javascript">
alert("Datos Actualizados del Empleado ");
window.location="HoraExtra1.php";
</script>