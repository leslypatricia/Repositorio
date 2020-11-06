
<?php
Modificar($_POST['CR'],$_POST['D']);
function Modificar($CR,$D){
	$db_host="localhost";
	$db_usuario="root";
	$db_contra="";
	$db_nombre="nominas";
	
	$conexion=mysqli_connect($db_host,$db_usuario,$db_contra,$db_nombre);

$sentencia="UPDATE rol SET Descripcion='".$D."'WHERE Cod_rol='".$CR."'";
$conexion->query($sentencia) or die ("error ak actualizar". mysqli_error($conexion));
}

?>
<script type="text/javascript">
alert("Datos Actualizados del Empleado ");
window.location="rol1.php";
</script>