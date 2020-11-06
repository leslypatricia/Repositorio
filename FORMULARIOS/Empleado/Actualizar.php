<?php
$con=consulta($_GET['CE']);
function consulta($CE){
		$db_host="localhost";
		$db_usuario="root";
		$db_contra="";
		$db_nombre="nominas";
		
		$conexion=mysqli_connect($db_host,$db_usuario,$db_contra,$db_nombre);

	/*	$sentencia="SELECT * FROM empleados where Cod_empleados='".$cod."'";*/
		$sentencia="SELECT Cod_empleados,Primer_Nombre,Segundo_Apellido,Telefono,
        Fecha_ingreso,Sueldo_base,Cod_FormaPago,Cod_Depto
        FROM empleados WHERE Cod_empleados='".$CE."' " ;

$res=$conexion->query($sentencia)or die ("error al consultar ".mysqli_error($conexion));
$mostrar=$res->fetch_assoc();
		return[	
			$mostrar['Cod_empleados'],
			/*$mostrar['Identidad'],*/
			$mostrar['Primer_Nombre'],
			/*$mostrar['Segundo_Nombre'],*/
			/*$mostrar ['Primer_Apellido'],*/
			$mostrar['Segundo_Apellido'],
			/*$mostrar['Fecha_nacimiento'],*/
			/*$mostrar['Correo'],*/
			/*$mostrar['Direccion'],*/
			$mostrar['Telefono'],
			/*$mostrar['Sexo'],*/
			/*$mostrar['Cuenta_Bancaria'],*/
			$mostrar['Fecha_ingreso'],
			/*$mostrar['Nacionalidad'],*/
			/*$mostrar['Fecha_Deduccion'],*/
			$mostrar['Sueldo_base'],
			$mostrar['Cod_FormaPago'],
			$mostrar['Cod_Depto']

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
$Identidad="";
$PrimerN="";
$SegundoN="";
$PrimerA="";
$SegundoA="";
$fechan="";
$correo="";
$direccion="";
$tel="";
$sexo="";
$Cuenta="";
$ingreso="";
$nacionalidad="";
$fechad="";
$sueldob="";
$formapago="";
$codigod="";


?>
<?php

//------Código para el botón Limpiar------//
if (isset($_POST["limpiar"])){	
$codigo="";
$Identidad="";
$PrimerN="";
$SegundoN="";
$PrimerA="";
$SegundoA="";
$fechan="";
$correo="";
$direccion="";
$tel="";
$sexo="";
$Cuenta="";
$ingreso="";
$nacionalidad="";
$fechad="";
$sueldob="";
$formapago="";
$codigod="";

}

?>
<?php
if (isset($_POST["Regresar"])){
header("location:Empleado/Empleados1.php");
}
?>
<?php
if (isset($_POST["BD"])){
header("location:http://localhost:801/phpmyadmin/");
}
?>


<form class="from"  id="form1" action= "Actualizar2.php" method="POST" >
<center>
<h1>Formulario Empleado</h1>
<div class="form-group">
<table class="table table-condensed" style="width: 100%" ><!--style="width: 100%;*/-->

	<tr><td><label>Codigo Empleado<br/></label> </td>
	<td><input type="text" class="form" name="CE" value="<?php echo $con[0]; echo $codigo?>"><br/></td></tr>
	<tr><td>Codigo_Depto<br/> </td>
	<td><select name="CD" value="" class="form" >
   <option  class="form"value="<?php echo $con[7]; echo $codigod;?>">1</option>
   <option  class="form" value="<?php echo $con[7]; echo $codigod;?>">2</option>
   <option  class="form" value="<?php echo $con[7]; echo $codigod;?>">3</option>
</select> </td></tr>
<!--<tr><td>Identidad<br/> </td>
<td> <input type="text" class="form"  name="id" value="<?php /*echo $consulta[1];*/ echo $Identidad?>" size="15" maxlength="15" /><br/></td></tr>-->
	<tr><td>Primer Nombre<br/> </td>
<td><input type="text" class="form"  name="PN" value="<?php echo $con[1]; echo $PrimerN?>" size="20" maxlength="20"/><br/></td></tr>
<!--<tr><td>Segundo Nombre<br/> </td>
<td><input type="text" class="form"  name="SN" value="<?php /*echo $consulta[3];*/ echo $SegundoN?>"/></td></tr>
	<tr><td>Pirmer Apellido<br/> </td>
<td> <input type="text" class="form"  name="PA" value="<?php /*echo $consulta[4];*/ echo $PrimerA?>" size="20" maxlength="20"/><br/></td></tr>-->
	<tr><td>Segundo Apellido<br/> </td>
<td> <input type="text" class="form"  name="SA" value="<?php echo $con[2]; echo $SegundoA?>" size="20" maxlength="30"/><br/></td></tr>
<!--
	<tr><td>Fecha Nacimiento<br/> </td>
	<td> <input id="date" class="form"  type="date" name="FN" size="20"  maxlength="30" value="<?php  /*echo $consulta[6];*/ echo $fechan?>"><br/>
</td></tr>-->
<tr><td>Fecha_Ingreso<br/> </td>
	<td> <input id="date" class="form"  type="date" name="FI" size="20" maxlength="30"  value="<?php echo $con[4]; echo $ingreso?>"><br/>
</td></tr>
	<!--<tr><td>Correo<br/> </td>
	<td><input type="email" class="form"  name="correo" value="<?php /*echo $consulta[7];*/ echo $correo?>" size="20" maxlength="30" /><br/> 
 </td></tr>
	<tr><td>Direccion<br/> </td>
	<td><input type="text" class="form"  name="Dire" value="<?php /*echo $consulta[8];*/ echo $direccion?>" size="20" maxlength="30" /><br/>
 </td></tr>-->
	<tr><td>Telefono<br/> </td>
	<td> <input type="number" class="form"  name="tele" size="15" maxlength="15" value="<?php echo $con[3]; echo $tel?>"><br/></td></tr>
	<!--<tr><td>Sexo<br/> </td><td> 
	<input type="radio" checked name="sexo" value="1" id="sexo" <?php /*echo $consulta[10];*/ echo '$sexo';?>>F</>
    <input type="radio" checked   name="sexo" value="0"  id="sexo"<?php /*echo $consulta[10];*/ echo '$sexo';?>>M</><br/></td></tr>

	<tr><td>Nacionalidad<br/> </td>
	<td> <select name="Nac" class="form" ><br/>
   <option value="1" class="form" <?php /*echo $consulta[13];*/ echo '$nacionalidad';?> >Hondureña</option>
   <option value="2" class="form" <?php /*echo $consulta[13];*/ echo '$nacionalidad';?>>Extrajero</option>
</select><br/></td></tr>-->

	<tr><td>Sueldo_Base<br/> </td>
<td><input type="text" name="SB" class="form" size="15" maxlength="15"  value="<?php echo $con[5]; echo $sueldob?>"><br/></td></tr>
	<!--<tr><td>Cuenta Bancaria<br/> </td>
	<td> <input type="text" class="form"  name="CB" value="<?php /*echo $consulta[11];*/ echo  $Cuenta?>" size="20" maxlength="30" /><br/>
</td></tr>
	<tr><td>Fecha Deducciones<br/> </td>
	<td> <input id="date" class="form"  type="date" name="FD" value="<?php /*echo $consulta[14];*/ echo $fechad?>" size="20"  maxlength="30"  /><br/>
</td></tr>-->
	<tr><td>CodFormaPago<br/> </td>
	<td><select name="FP" class="form" >
   <option  class="form" value="1 <?php echo $con[6]; echo $formapago;?>">1</option>
   <option  class="form"  value="1 <?php echo $con[6]; echo $formapago;?>">2</option>
</select><br/> </td></tr>
</table>

<button name="Regresar"><i class="fas fa-reply"></i></button>
<button name="limpiar"><i class="fas fa-times"></i></button>
<button type="submit" name="guardar" value="guardar"><i class="fas fa-save"></i></button>
</div>
</form>
</body>

</html>