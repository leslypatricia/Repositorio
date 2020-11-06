<?php 
eliminar($_GET["FP"]);
function eliminar($FP){
	$db_host="localhost";
	$db_usuario="root";
	$db_contra="";
	$db_nombre="nominas";
	
	$conexion=mysqli_connect($db_host,$db_usuario,$db_contra,$db_nombre);

$sentencia="DELETE FROM formapago WHERE Cod_FormaPago='".$FP."'";
$conexion->query($sentencia) or die("error al eliminar".mysqli_error($conexion));
}

?>
<script type="text/javascript">
alert("empleado eliminado");
window.location="FormaPago1.php";
</script>

