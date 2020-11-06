
<?php
Modificar($_POST['CC'],$_POST['D'],$_POST['P'],$_POST['F'],$_POST['V']);
function Modificar($CC,$D,$P,$F,$V){
	$db_host="localhost";
	$db_usuario="root";
	$db_contra="";
	$db_nombre="nominas";
	
	$conexion=mysqli_connect($db_host,$db_usuario,$db_contra,$db_nombre);

$sentencia="UPDATE pagocomplementario SET Descripcion='".$D."',Porcentaje='".$P."',
fijo='".$F."',valor='".$V."' WHERE Cod_Complementario='".$CC."'";
$conexion->query($sentencia) or die ("error ak actualizar". mysqli_error($conexion));
}

?>
<script type="text/javascript">
alert("Datos Actualizados del Empleado ");
window.location="PagosComplementarios1.php";
</script>