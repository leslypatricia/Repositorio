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
</style>
</head>

<body>
<?php
$codigo="";
$tipo="";

?>


<?php
$db_host="localhost";
$db_usuario="root";
$db_contra="";
$db_nombre="nominas";

$conexion=mysqli_connect($db_host,$db_usuario,$db_contra,$db_nombre);

if (isset($_POST["crs"])){
$CJ=$_POST['CJ'];
$TJ=$_POST['TJ'];


$consulta="insert into jornada(Cod_Jornada,Tipo_Jornada)
 VALUES('$CJ','$TJ')";
 
 if (mysqli_query($conexion, $consulta)) {
     echo "<script> 
	     alert ('Registro Ingresado Correctamente!!!');
	  window.location='Jornada1.php';
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

$CJ=$_POST["CJ"];

$registros=mysqli_query($conexion,"SELECT * FROM  jornada WHERE Cod_Jornada='$CJ'");


while ($registro= mysqli_fetch_array($registros)){


$codigo=$registro['Cod_Jornada'];
$tipo=$registro['Tipo_Jornada'];

mysqli_close($conexion);
}
}
 ?>

<form class="from"  id="form1" action= "" method="POST" >
<center>
<?php
if (isset($_POST["limpiar"])){
	$codigo="";
	$tipo="";

}
?>
<?php
if (isset($_POST["Regresar"])){
header("location:Jornada1.php");
}
?>
<?php
if (isset($_POST["BD"])){
header("location:http://localhost:801/phpmyadmin/");
}
?>

<form class="from"  id="form1" action="#" method="POST">
<center>
<h1>Formulario Jornada</h1>
<div class="form-group">

<table class="table table-condensed" style="width: 100%" ><!--style="width: 100%;*/-->
<tr><td><label>Codigo Jornada:</label></td>
<td><input type="text" name="CJ" value="<?php echo $codigo ?>" size="5" maxlength="5" /></td></tr>
<tr><td><label>Tipo Jornada:</label></td>
<td><input type="text" name="TJ" value="<?php echo $tipo?>" size="15" maxlength="15" /></td></tr>
</table>
<br/>
<center>
<br/><br/>
<button name="Regresar" class="Boton-Regresar"><i class="fas fa-reply"></i></button>
<button name="crs"><i class="fas fa-save"></i></button>
<button name="limpiar"><i class="fas fa-times"></i></button>
<button name="BD"><i class="fas fa-database"></i></button>
<button name="buscar"><i class="fas fa-search"></i></button>
<br/><br/></center>

</div>
</center>
</form>
</body>
</html>