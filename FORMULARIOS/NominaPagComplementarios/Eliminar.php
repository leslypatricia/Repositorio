<?php 
eliminar($_GET["CNPC"]);
function eliminar($CNPC){
	$db_host="localhost";
	$db_usuario="root";
	$db_contra="";
	$db_nombre="nominas";
	
	$conexion=mysqli_connect($db_host,$db_usuario,$db_contra,$db_nombre);

$sentencia="DELETE FROM nominaspagoscomplementarios WHERE Cod_N_PAGOS_C='".$CNPC."'";
$conexion->query($sentencia) or die("error al eliminar".mysqli_error($conexion));
}

?>
<script type="text/javascript">
alert("empleado eliminado");
window.location="NominaPagComplementarios1.php";
</script>

