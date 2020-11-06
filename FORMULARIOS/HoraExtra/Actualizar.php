<?php
$con=consulta($_GET['HE']);
function consulta($HE){
		$db_host="localhost";
		$db_usuario="root";
		$db_contra="";
		$db_nombre="nominas";
		
		$conexion=mysqli_connect($db_host,$db_usuario,$db_contra,$db_nombre);

		/*$sentencia="SELECT * FROM horaextra WHERE ex.Cod_HExtra='".$HE."'";*/
	$sentencia="SELECT ex.Cod_HExtra,j.Cod_Jornada,ep.Cod_empleados
,ex.Sueldo_Ordinario,ex.Sueldo_Diario,ex.Sueldo_Hora,
ex.Porce_Hora_Extra,ex.Pago_Hora,ex.Numero_Horas,ex.Total_HE,ex.fecha from horaextra as ex 
JOIN jornada as j on ex.Cod_Jornada=j.Cod_Jornada
JOIN empleados as ep on ex.Cod_empleados=ep.Cod_empleados 
WHERE ex.Cod_HExtra='".$HE."'" ;

$res=$conexion->query($sentencia)or die ("error al consultar ".mysqli_error($conexion));
$mostrar=$res->fetch_assoc();
		return[	
			$mostrar['Cod_HExtra'],
			$mostrar['Cod_Jornada'],
			$mostrar['Cod_empleados'],
			$mostrar['Sueldo_Ordinario'],
			$mostrar['Sueldo_Diario'],
			$mostrar['Sueldo_Hora'],
			$mostrar['Porce_Hora_Extra'],
			$mostrar['Pago_Hora'],
			$mostrar['Numero_Horas'],
			$mostrar['Total_HE'],
			$mostrar['fecha']
		];
	}

/*}*/
?>
<!DOCTYPE html >
<html lang="es">
<head>
<meta charset="utf-8" />
<title>Menu</title>
<link rel="stylesheet" href="style.css">
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0,maximum-scale=1.0,minimum-scale=1.0">
<script src="https://kit.fontawesome.com/2c36e9b7b1.js"></script>
<style>
/*-----------------------------------código_css-------------------------------------------------------------------------------*/
body{
	margin:0;
	padding:0;
	box-sizing:border-box;
	background-image: url("../../IMG/Fondo10.jpg");
	background-repeat: no-repeat;
	background-size:cover;
	background-attachment: fixed;
}
.from{
	margin:auto;
	margin-top:-05PX;
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
	width:750px;
	background:#00ced1;
	padding:20px;
	border-radius:1px;
	margin-bottom:16px;
	border:1px solid #1f53c5;
	font-family:"Arial Black", Gadget, sans-serif;
	font-size:18px;
	
	}
.form-group1 {	width:750px;
	background:#00ced1;
	padding:10px;
	border-radius:4px;
	margin-bottom:16px;
	border:1px solid #1f53c5;
	font-family:"Arial Black", Gadget, sans-serif;
	font-size:18px;
}
 .form-group .form{
	background: rgb(red, green, blue);
	border: none;
	outline: none;
border-bottom: 2px solid #ff851b;
width: 250%;
padding: 05px;
margin-bottom: 08px;
border-radius: 2px;
font-size: 12px;
color: black;
font-family:"Arial Black", Gadget, sans-serif;
width: 100%;
/*style="width: 100%;*/
}

/*Estilos paginador*/
</style>
</head>

<body>
<?php
//---------------------------------------------Código para limpiar -------------------------------------------------------------//

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

//------Código para el botón Limpiar------//
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
header("location:HoraExtra/HoraExtra1.php");
}
?>
<?php
if (isset($_POST["BD"])){
header("location:http://localhost:801/phpmyadmin/");
}
?>


<form class="from"  id="form1" action= "Actualizar2.php" method="POST" >
<center>
<h1>Formulario Hora Extra</h1>
<div class="form-group">
<table class="table table-condensed" style="width: 100%" ><!--style="width: 100%;*/-->
<tr><td><label>Codigo Hora Extra:</label></td>
<td><input type="text" name="HE" value="<?php echo $con[0]; echo $codigo?>" size="5" maxlength="5" />

<tr><td><label>Codigo Jornada:</label>
<td><input type="text" name="CJ" value="<?php echo $con[1];echo $jornada?>" size="15" maxlength="15" />
<tr><td><label>Codigo Empleado:</label>
<td><input type="text" name="CE" value="<?php echo $con[2];echo $empleado?>" size="20" maxlength="20"/>

<tr><td><label>Sueldo Ordinario:</label>
<td><input type="text" name="SO" value="<?php echo $con[3];echo $sueldoo?>" size="20" maxlength="20"/>

<tr><td><label>Sueldo Diario:</label>
<td><input type="text" name="SD" value="<?php echo $con[4];echo $sueldod?>" size="20" maxlength="20"/>

<tr><td><label>Sueldo Hora:</label>
<td><input type="text" name="SH" value="<?php echo $con[5];echo $sueldoh?>" size="20" maxlength="20" />

<tr><td><label>Porcentaje Hora Extra:</label>
<td><input type="text" name="PHE" value="<?php echo $con[6];echo $porcetahe?>" size="20" maxlength="20" />

<tr><td><label>Pago Hora:</label>
<td><input type="text" name="PH" value="<?php echo $con[7];echo $pago?>" size="20" maxlength="20" />

<tr><td><label>Numeros Hora:</label>
<td><input type="text" name="NH" value="<?php echo $con[8];echo $numero?>" size="20" maxlength="20" />

<tr><td><label>Total Hora Extra:</label>
<td><input type="text" name="THE" value="<?php echo $con[9];echo $total?>" size="20" maxlength="20" />

<tr><td><label>Fecha:</label>
<td><input type="date" name="F" value="<?php echo $con[10];echo $fecha?>" size="20" maxlength="30" />

</table>

<button name="Regresar"><i class="fas fa-reply"></i></button>
<button name="limpiar"><i class="fas fa-times"></i></button>
<button type="submit" name="guardar" value="guardar"><i class="fas fa-save"></i></button>
</div>
</form>
</body>

</html>