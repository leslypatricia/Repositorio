
<?php
Modificar($_POST['CU'],$_POST['U'],$_POST['P'],$_POST['C'],$_POST['CR'],$_POST['CE']);
function Modificar($CU,$U,$P,$C,$CR,$CE){
	$db_host="localhost";
	$db_usuario="root";
	$db_contra="";
	$db_nombre="nominas";
	
	$conexion=mysqli_connect($db_host,$db_usuario,$db_contra,$db_nombre);

$sentencia="UPDATE usuario SET Usuario='".$U."',Password='".$P."',
Correo='".$C."',Cod_rol='".$CR."',Cod_empleados='".$CE."' WHERE Cod_Usuario='".$CU."'";
$conexion->query($sentencia) or die ("error ak actualizar". mysqli_error($conexion));
}

?>
<script type="text/javascript">
alert("Datos Actualizados del Empleado ");
window.location="Usuario1.php";
</script>