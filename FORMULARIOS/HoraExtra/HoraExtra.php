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
$jornada="";
$empleado="";
$sueldoo="";
$sueldod="";
$sueldoh="";
$porcetahe="";
$pago="";
$numero="";
$total="";
$fecha="";

?>


<?php
$db_host="localhost";
$db_usuario="root";
$db_contra="";
$db_nombre="nominas";

$conexion=mysqli_connect($db_host,$db_usuario,$db_contra,$db_nombre);

if (isset($_POST["crs"])){
$HE=$_POST['HE'];
$CJ=$_POST['CJ'];
$CE=$_POST['CE'];
$SO=$_POST['SO'];
$SD=$_POST['SD'];
$SH=$_POST['SH'];
$PHE=$_POST['PHE'];
$PH=$_POST['PH'];
$NH=$_POST['NH'];
$THE=$_POST['THE'];
$F=$_POST['F'];

$consulta="INSERT INTO horaextra(Cod_HExtra,Cod_Jornada,Cod_empleados,
Sueldo_Ordinario, Sueldo_Diario, Sueldo_Hora, Porce_Hora_Extra, 
Pago_Hora, Numero_horas, Total_HE,fecha)
 VALUES('$HE','$CJ','$CE','$SO','$SD','$SH','$PHE','$PH','$NH','$THE','$F')";
 
 if (mysqli_query($conexion, $consulta)) {
     echo "<script> 
	     alert ('Registro Ingresado Correctamente!!!');
	  window.location='HoraExtra1.php';
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
$HE=$_POST["HE"];

$registros=mysqli_query($conexion,"SELECT * FROM  horaextra WHERE Cod_HExtra='$HE'");


while ($registro= mysqli_fetch_array($registros)){

$codigo=$registro['Cod_HExtra'];
$jornada=$registro['Cod_Jornada'];
$empleado=$registro['Cod_empleados'];
$sueldoo=$registro['Sueldo_Ordinario'];
$sueldod=$registro['Sueldo_Diario'];
$sueldoh=$registro['Sueldo_Hora'];
$porcetahe=$registro['Porce_Hora_Extra'];
$pago=$registro['Pago_Hora'];
$numero=$registro['Numero_horas'];
$total=$registro['Total_HE'];
$fecha=$registro['fecha'];


mysqli_close($conexion);
}
}
 ?>


<form class="from"  id="form1" action= "" method="POST" >
<center>
<?php
if (isset($_POST["limpiar"])){
	$codigo="";
$jornada="";
$empleado="";
$sueldoo="";
$sueldod="";
$sueldoh="";
$porcetahe="";
$pago="";
$numero="";
$total="";
$fecha="";


}

?>
<?php
if (isset($_POST["Regresar"])){
header("location:HoraExtra1.php");
}
?>
<?php
if (isset($_POST["BD"])){
header("location:http://localhost:801/phpmyadmin/");
}
?>

<form class="from"  id="form1" action="#" method="POST">
<center>
<h1>Formulario Hora Extra</h1>
<div class="form-group">
<table class="table table-condensed" style="width: 100%" ><!--style="width: 100%;*/-->
<tr><td><label>Codigo Hora Extra:</label></td>
<td><input type="text" name="HE" value="<?php echo $codigo?>" size="5" maxlength="5" />

<tr><td><label>Codigo Jornada:</label>
<td><input type="text" name="CJ" value="<?php echo $jornada?>" size="15" maxlength="15" />
<tr><td><label>Codigo Empleado:</label>
<td><input type="text" name="CE" value="<?php echo $empleado?>" size="20" maxlength="20"/>

<tr><td><label>Sueldo Ordinario:</label>
<td><input type="text" name="SO" value="<?php echo $sueldoo?>" size="20" maxlength="20"/>

<tr><td><label>Sueldo Diario:</label>
<td><input type="text" name="SD" value="<?php echo $sueldod?>" size="20" maxlength="20"/>

<tr><td><label>Sueldo Hora:</label>
<td><input type="text" name="SH" value="<?php echo $sueldoh?>" size="20" maxlength="20" />

<tr><td><label>Porcentaje Hora Extra:</label>
<td><input type="text" name="PHE" value="<?php echo $porcetahe?>" size="20" maxlength="20" />

<tr><td><label>Pago Hora:</label>
<td><input type="text" name="PH" value="<?php echo $pago?>" size="20" maxlength="20" />

<tr><td><label>Numeros Hora:</label>
<td><input type="text" name="NH" value="<?php echo $numero?>" size="20" maxlength="20" />

<tr><td><label>Total Hora Extra:</label>
<td><input type="text" name="THE" value="<?php echo $total?>" size="20" maxlength="20" />

<tr><td><label>Fecha:</label>
<td><input type="date" name="F" value="<?php echo $fecha?>" size="20" maxlength="30" />

</table>
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