
<?php
Modificar($_POST['FP'],$_POST['D']);
function Modificar($FP,$D){
	$db_host="localhost";
	$db_usuario="root";
	$db_contra="";
	$db_nombre="nominas";
	
	$conexion=mysqli_connect($db_host,$db_usuario,$db_contra,$db_nombre);

$sentencia="UPDATE formapago SET Descripcion='".$D."' WHERE Cod_FormaPago='".$FP."'";
$conexion->query($sentencia) or die ("error ak actualizar". mysqli_error($conexion));
}

?>
<script type="text/javascript">
alert("Datos Actualizados del Empleado ");
window.location="FormaPago1.php";
</script>