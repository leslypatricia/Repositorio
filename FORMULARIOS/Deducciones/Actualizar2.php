
<?php
Modificar($_POST['CD'],$_POST['D'],$_POST['P'],$_POST['V'],$_POST['F']);
function Modificar($CD,$D,$P,$V,$F){
	$db_host="localhost";
	$db_usuario="root";
	$db_contra="";
	$db_nombre="nominas";
	
	$conexion=mysqli_connect($db_host,$db_usuario,$db_contra,$db_nombre);

$sentencia="UPDATE deducciones SET Descripcion='".$D."',Porcentaje='".$P."',
Valor='".$V."',fijo='".$F."' WHERE Cod_Deducciones='".$CD."'";
$conexion->query($sentencia) or die ("error ak actualizar". mysqli_error($conexion));
}

?>
<script type="text/javascript">
alert("Datos Actualizados del Empleado ");
window.location="Deducciones1.php";
</script>