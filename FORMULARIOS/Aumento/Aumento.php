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
$Porcentaje="";
$año="";
$Descripcion="";
$Aplicado="";

?>

<?php
$db_host="localhost";
$db_usuario="root";
$db_contra="";
$db_nombre="nominas";

$conexion=mysqli_connect($db_host,$db_usuario,$db_contra,$db_nombre);

if (isset($_POST["crs"])){
$CA=$_POST['CA'];
$PA=$_POST['PA'];
$ANNO=$_POST['ANNO'];
$D=$_POST['D'];
$A=$_POST['A'];


$consulta="INSERT INTO aumento (Cod_Aumento,Porcentaje_aumento,Año,Descripcion,aplicado)
 VALUES($CA,'$PA','$ANNO','$D','$A')";
 
 if (mysqli_query($conexion, $consulta)) {
     echo "<script>
     
	     alert ('Registro Ingresado Correctamente!!!');
	  window.location='Aumento1.php';
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

$CA=$_POST["CA"];

$registros=mysqli_query($conexion,"SELECT * FROM  aumento WHERE Cod_Aumento='$CA'");


while ($registro= mysqli_fetch_array($registros)){

$codigo=$registro['Cod_Aumento'];
$Porcentaje=$registro['Porcentaje_aumento'];
$año=$registro['Año'];
$Descripcion=$registro['Descripcion'];
$Aplicado=$registro['aplicado'];

mysqli_close($conexion);
}
}
 ?>


<form class="from"  id="form1" action= "" method="POST" >
<center>
<?php
if (isset($_POST["limpiar"])){
$codigo="";
$Porcentaje="";
$año="";
$Descripcion="";
$Aplicado="";


}

?>
<?php
if (isset($_POST["Regresar"])){
header("location:Aumento1.php");
}
?>
<?php
if (isset($_POST["BD"])){
header("location:http://localhost:801/phpmyadmin/");
}
?>

<form class="from"  id="form1" action="" method="POST">
<center>
<h1>Formulario Aumento</h1>
<div class="form-group">
<table class="table table-condensed" style="width: 100%" ><!--style="width: 100%;*/-->

<tr><td><label>Codigo Aumento:</label></td>
<td><input type="text" name="CA" size="5" maxlength="5" value="<?php echo $codigo?>"></td></tr>

<tr><td><label>Porcentage Aumento:</label></td>
<td><input type="text" name="PA" size="15" maxlength="15" value="<?php echo $Porcentaje?>"></td></tr>

<tr><td><label>Año:</label></td>
<td><input type="date" id="date" name="ANNO" size="20" maxlength="20" value="<?php echo $año?>"></td></tr>

<tr><td><label>Descripcion:</label></td>
<td><input type="text" name="D" size="20" maxlength="20"  value="<?php echo $Descripcion?>"></td></tr>

<tr><td><label>Aplicado:</label></td>
<td><input type="text" name="A" size="20" maxlength="30" value="<?php echo $Aplicado?>"></td></tr>
<br/>
<br/>
</table>
<br/>
<br/>
<center>
<button name="Regresar" class="Boton-Regresar"><i class="fas fa-reply"></i></button>
<button name="crs"><i class="fas fa-save"></i></button>
<button name="limpiar"><i class="fas fa-times"></i></button>
<button name="BD"><i class="fas fa-database"></i></button>
<button name="buscar"><i class="fas fa-search"></i></button>
<br/><br/></center>

</div>
</form>
</body>
</html>