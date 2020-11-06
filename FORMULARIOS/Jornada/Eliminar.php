<?php 
eliminar($_GET["CJ"]);
function eliminar($CJ){
	$db_host="localhost";
	$db_usuario="root";
	$db_contra="";
	$db_nombre="nominas";
	
	$conexion=mysqli_connect($db_host,$db_usuario,$db_contra,$db_nombre);

$sentencia="DELETE FROM jornada WHERE Cod_Jornada='".$CJ."'";
$conexion->query($sentencia) or die("error al eliminar".mysqli_error($conexion));
}

?>
<script type="text/javascript">
alert("empleado eliminado");
window.location="Jornada1.php";
</script>

