<?php 
eliminar($_GET["CTHE"]);
function eliminar($CTHE){
	$db_host="localhost";
	$db_usuario="root";
	$db_contra="";
	$db_nombre="nominas";
	
	$conexion=mysqli_connect($db_host,$db_usuario,$db_contra,$db_nombre);

$sentencia="DELETE FROM tipohoraextra WHERE Cod_Tipo_HE='".$CTHE."'";
$conexion->query($sentencia) or die("error al eliminar".mysqli_error($conexion));
}

?>
<script type="text/javascript">
alert("empleado eliminado");
window.location="TipoHE1.php";
</script>

