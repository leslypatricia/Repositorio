
<?php
Modificar($_POST['CN'],$_POST['CE'],$_POST['CA'],$_POST['T'],$_POST['F']);
function Modificar($CN,$CE,$CA,$T,$F){
	$db_host="localhost";
	$db_usuario="root";
	$db_contra="";
	$db_nombre="nominas";
	
	$conexion=mysqli_connect($db_host,$db_usuario,$db_contra,$db_nombre);

$sentencia="UPDATE nominageneral SET Cod_empleados='".$CE."',Cod_Aumento='".$CA."',
Total='".$T."',Fecha_Generada='".$F."' WHERE Cod_Nomina='".$CN."'";
$conexion->query($sentencia) or die ("error ak actualizar". mysqli_error($conexion));
}

?>
<script type="text/javascript">
alert("Datos Actualizados del Empleado ");
window.location="NominaGeneral1.php";
</script>