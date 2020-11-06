
<?php
Modificar($_POST['CA'],$_POST['PA'],$_POST['ANNO'],$_POST['D'],$_POST['A']);
function Modificar($CA,$P,$AN,$D,$A){
	$db_host="localhost";
	$db_usuario="root";
	$db_contra="";
	$db_nombre="nominas";
	
	$conexion=mysqli_connect($db_host,$db_usuario,$db_contra,$db_nombre);

$sentencia="UPDATE aumento SET Porcentaje_aumento='".$P."',
Año='".$AN."',Descripcion='".$D."',aplicado='".$A."' WHERE Cod_Aumento='".$CA."'";
$conexion->query($sentencia) or die ("error ak actualizar". mysqli_error($conexion));
}

?>
<script type="text/javascript">
alert("Datos Actualizados del Empleado ");
window.location="Aumento1.php";
</script>