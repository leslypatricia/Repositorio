
<?php
Modificar($_POST['CJ'],$_POST['TJ']);
function Modificar($CJ,$TJ){
	$db_host="localhost";
	$db_usuario="root";
	$db_contra="";
	$db_nombre="nominas";
	
	$conexion=mysqli_connect($db_host,$db_usuario,$db_contra,$db_nombre);

$sentencia="UPDATE jornada SET Tipo_Jornada='".$TJ."' WHERE Cod_Jornada='".$CJ."'";
$conexion->query($sentencia) or die ("error ak actualizar". mysqli_error($conexion));
}

?>
<script type="text/javascript">
alert("Datos Actualizados del Empleado ");
window.location="Jornada1.php";
</script>