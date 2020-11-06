<!DOCTYPE html >
<html lang="es">
<head>
<meta charset="utf-8" />
<title>Menu</title>
<link rel="stylesheet" href="style.css">
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0,maximum-scale=1.0,minimum-scale=1.0">
<script src="https://kit.fontawesome.com/2c36e9b7b1.js"></script>
<style>
body{
	margin:0;
	padding:0;
	box-sizing:border-box;
}
.from{
padding:110px;
background:black;
	/*  background: -webkit-linear-gradient(right, #000000, #ffffff, #000000, #ffffff);
  background: -o-linear-gradient(right, #ffffff, #000000, #ffffff, #000000);
  background: -moz-linear-gradient(right,#ffffff, #ffffff,#000000, #000000);
  background: linear-gradient(right,  #ffffff, #000000,  #ffffff, #000000);*/
	margin:auto;
	margin-top:-10PX;
	border-radius:4px;
	font-family:"Arial Black", Gadget, sans-serif;
	color:black;
	box-shadow:7px 13px 37px #000;
}
h1{
	font-size:50px;
	margin-bottom:35px;	
	color: blanchedalmond;
	}
	
.form-group{
	width:900px;
	background:#00ced1;
	padding:20px;
	border-radius:4px;
	margin-bottom:16px;
	border:1px solid #1f53c5;
	font-family:"Arial Black", Gadget, sans-serif;
	font-size:18px;
	
	}
.btn-btn-primary {
		width:80PX;
		background:#1f53c5;
		padding:10px;
		color:white;
		font-size:10px;
}
.btn-btn-success{
	width:80PX;
		background:#1f53c5;
		padding:10px;
		color:white;
		font-size:10px;}
.btn-btn-info{
	width:80PX;
		background:#1f53c5;
		padding:10px;
		color:white;
		font-size:10px;}
.btn-btn-danger{
	width:80PX;
		background:#1f53c5;
		padding:10px;
		color:white;
		font-size:10px;}
</style>
</head>

<body>
<?php
$codigo="";
$usuario="";
$pass="";
$correo="";
$rol="";
$empleado="";


?>

<?php
$db_host="localhost";
$db_usuario="root";
$db_contra="";
$db_nombre="nominas";

$conexion=mysqli_connect($db_host,$db_usuario,$db_contra,$db_nombre);

if (isset($_POST["crs"])){
$CU=$_POST['CU'];
$U=$_POST['usuario'];
$P=$_POST['P'];
$C=$_POST['correo'];
$crol=$_POST['CR'];
$empleado=$_POST['CE'];



$consulta="insert into usuario(Cod_Usuario,Usuario,Password,Correo,Cod_rol,Cod_empleados)
 VALUES('$CU','$U','$P','$C','$crol','$empleado')";
 
 if (mysqli_query($conexion, $consulta)) {
     echo "<script>
     
	     alert ('Registro Ingresado Correctamente!!!');
	  window.location='Usuario1.php';
	  </script>";
} else {
      echo "Error: " . $consulta . "<br>" . mysqli_error($conexion);
}
 mysqli_close($conexion);

}

?>


<?php
$db_host="localhost";
$db_usuario="root";
$db_contra="";
$db_nombre="nominas";

$conexion=mysqli_connect($db_host,$db_usuario,$db_contra,$db_nombre);


 
if (isset($_POST["buscar"])){

$CU=$_POST["CU"];

$registros=mysqli_query($conexion,"SELECT * FROM  usuario WHERE Cod_Usuario='$CU'");


while ($registro= mysqli_fetch_array($registros)){


$codigo=$registro['Cod_Usuario'];
$usuario=$registro['Usuario'];
$pass=$registro['Password'];
$correo=$registro['Correo'];
$rol=$registro['Cod_rol'];
$empleado=$registro['Cod_empleados'];


mysqli_close($conexion);
}
}
 ?>


<form class="from"  id="form1" action= "" method="POST" >
<center>

<?php
if (isset($_POST["limpiar"])){
	$codigo="";
	$usuario="";
	$pass="";
	$correo="";
	$rol="";
	$empleado="";

}

?>


<?php
if (isset($_POST["Regresar"])){
header("location:Usuario1.php");
}
?>
<?php
if (isset($_POST["BD"])){
header("location:http://localhost:801/phpmyadmin/");
}
?>



<form class="from"  id="form1" action="#" method="POST">
<center>
<h1>Formulario Usuario</h1>
<div class="form-group">

<table class="table table-condensed" style="width: 100%" ><!--style="width: 100%;*/-->


<tr><td><label>Codigo Usuario:</label></td>
<td><input type="text" name="CU" value="<?php echo $codigo?>" size="5" maxlength="5" /></td></tr>

<tr><td><label>Usuario:</label></td>
<td><input type="text" name="usuario" value="<?php echo $usuario?>" size="15" maxlength="15" /></td></tr>

<tr><td><label>Password:</label></td>
<td><input type="Password" id="Password" name="P" value="<?php echo $pass?>" size="20" maxlength="20"/></td></tr>

<tr><td><label>Correo:</label></td>
<td><input type="text"  name="correo" value="<?php echo $correo?>" size="20" maxlength="20"/></td></tr>

<tr><td><label>Codigo Rol:</label></td>
<td><input type="text"  name="CR" value="<?php echo $rol?>" size="20" maxlength="20"/></td></tr>

<tr><td><label>Codigo Empleado:</label></td>
<td><input type="text" name="CE" value="<?php echo $empleado?>" size="20" maxlength="20"/></td></tr>
<br/>
</table>
<center>
<br/><br/>
<button name="Regresar" class="Boton-Regresar"><i class="fas fa-reply"></i></button>
<button name="crs"><i class="fas fa-save"></i></button>
<button name="limpiar"><i class="fas fa-times"></i></button>
<button name="BD"><i class="fas fa-database"></i></button>
<button name="buscar"><i class="fas fa-search"></i></button>
<br/><br/></center>
<br/>

</div>
</center>
</form>
</body>
</html>