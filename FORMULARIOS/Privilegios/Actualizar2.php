
<?php
Modificar($_POST['CP'],$_POST['D']);
function Modificar($CP,$D){
	$db_host="localhost";
	$db_usuario="root";
	$db_contra="";
	$db_nombre="nominas";
	
	$conexion=mysqli_connect($db_host,$db_usuario,$db_contra,$db_nombre);

$sentencia="UPDATE privilegios SET Descripcion='".$D."' WHERE Cod_privilegios='".$CP."'";
$conexion->query($sentencia) or die ("error ak actualizar". mysqli_error($conexion));
}

?>
<script type="text/javascript">
alert("Datos Actualizados del Empleado ");
window.location="Privilegios1.php";
</script>