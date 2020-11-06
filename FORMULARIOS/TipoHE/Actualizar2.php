
<?php
Modificar($_POST['CTHE'],$_POST['D'],$_POST['SH']);
function Modificar($CTHE,$D,$SH){
	$db_host="localhost";
	$db_usuario="root";
	$db_contra="";
	$db_nombre="nominas";
	
	$conexion=mysqli_connect($db_host,$db_usuario,$db_contra,$db_nombre);

$sentencia="UPDATE tipohoraextra SET Descripcion='".$D."',SueldoHora='".$SH."'
WHERE Cod_Tipo_HE='".$CTHE."'";
$conexion->query($sentencia) or die ("error ak actualizar". mysqli_error($conexion));
}

?>
<script type="text/javascript">
alert("Datos Actualizados del Empleado ");
window.location="TipoHE1.php";
</script>