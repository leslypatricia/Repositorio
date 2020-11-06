
<?php
Modificar($_POST['CD'],$_POST['D'],$_POST['CJ']);
function Modificar($CD,$D,$CJ){
	$db_host="localhost";
	$db_usuario="root";
	$db_contra="";
	$db_nombre="nominas";
	
	$conexion=mysqli_connect($db_host,$db_usuario,$db_contra,$db_nombre);

$sentencia="UPDATE departamento SET Descripcion='".$D."',Cod_Jefe='".$CJ."'
 WHERE Cod_Depto='".$CD."'";
$conexion->query($sentencia) or die ("error ak actualizar". mysqli_error($conexion));
}

?>
<script type="text/javascript">
alert("Datos Actualizados del Empleado ");
window.location="Departamento1.php";
</script>