
<?php
Modificar($_POST['CE'],$_POST['PN'],$_POST['SA'],$_POST['tele'],$_POST['FI'],$_POST['SB'],$_POST['FP'],$_POST['CD']);
function Modificar($CE,$PN,$SA,$tele,$FI,$SB,$FP,$CD){
	$db_host="localhost";
	$db_usuario="root";
	$db_contra="";
	$db_nombre="nominas";
	
	$conexion=mysqli_connect($db_host,$db_usuario,$db_contra,$db_nombre);

$sentencia="UPDATE empleados SET Primer_Nombre='".$PN."',Segundo_Apellido='".$SA."',
Telefono='".$tele."',Fecha_ingreso='".$FI."',Sueldo_base='".$SB."',Cod_FormaPago='".$FP."',
Cod_Depto='".$CD."' WHERE Cod_empleados='".$CE."'";
$conexion->query($sentencia) or die ("error ak actualizar". mysqli_error($conexion));
}

?>
<script type="text/javascript">
alert("Datos Actualizados del Empleado ");
window.location="empleados1.php";
</script>