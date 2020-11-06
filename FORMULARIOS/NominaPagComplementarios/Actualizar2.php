
<?php
Modificar($_POST['CNPC'],$_POST['CN'],$_POST['CC']);
function Modificar($cod,$CN,$CC){
	$db_host="localhost";
	$db_usuario="root";
	$db_contra="";
	$db_nombre="nominas";
	
	$conexion=mysqli_connect($db_host,$db_usuario,$db_contra,$db_nombre);

$sentencia="UPDATE nominaspagoscomplementarios SET Cod_Nomina='".$CN."',Cod_Complementario='".$CC."'
WHERE Cod_N_PAGOS_C='".$cod."'";
$conexion->query($sentencia) or die ("error ak actualizar". mysqli_error($conexion));
}

?>
<script type="text/javascript">
alert("Datos Actualizados del Empleado ");
window.location="NominaPagComplementarios1.php";
</script>