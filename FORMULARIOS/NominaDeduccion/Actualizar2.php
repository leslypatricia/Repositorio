
<?php
Modificar($_POST['CN'],$_POST['CD']);
function Modificar($CN,$CD){
	$db_host="localhost";
	$db_usuario="root";
	$db_contra="";
	$db_nombre="nominas";
	
	$conexion=mysqli_connect($db_host,$db_usuario,$db_contra,$db_nombre);

$sentencia="UPDATE nominadeducciones SET cod_Deducciones='".$CD."'
WHERE Cod_Nomina='".$CN."'";
$conexion->query($sentencia) or die ("error ak actualizar". mysqli_error($conexion));
}

?>
<script type="text/javascript">
alert("Datos Actualizados del Empleado ");
window.location="NominaDeduccion1.php";
</script>