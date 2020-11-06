<?php
$con=consulta($_GET['CNPC']);
function consulta($CNPC){
		$db_host="localhost";
		$db_usuario="root";
		$db_contra="";
		$db_nombre="nominas";
		
		$conexion=mysqli_connect($db_host,$db_usuario,$db_contra,$db_nombre);

		$sentencia="SELECT npc.Cod_N_PAGOS_C,ng.Cod_Nomina,pc.Cod_Complementario 
		from nominaspagoscomplementarios as npc 
		JOIN nominageneral as ng on npc.Cod_Nomina=ng.Cod_Nomina
		JOIN pagocomplementario as pc on npc.Cod_Complementario=pc.Cod_Complementario WHERE npc.Cod_N_PAGOS_C='".$CNPC."' " ;

$res=$conexion->query($sentencia)or die ("error al consultar ".mysqli_error($conexion));
$mostrar=$res->fetch_assoc();
		return[	
			$mostrar['Cod_N_PAGOS_C'],
			$mostrar['Cod_Nomina'],
			$mostrar['Cod_Complementario']

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
$nomina="";
$comple="";


?>
<?php

//------Código para el botón Limpiar------//
if (isset($_POST["limpiar"])){	
$codigo="";
$nomina="";
$comple="";

}

?>
<?php
if (isset($_POST["Regresar"])){
header("location:NominaPagComplementarios/NominaPagComplementarios1.php");
}
?>
<?php
if (isset($_POST["BD"])){
header("location:http://localhost:801/phpmyadmin/");
}
?>


<form class="from"  id="form1" action= "Actualizar2.php" method="POST" >
<center>
<h1>Formulario Nominas,Pagos Y Complementarios</h1>
<div class="form-group">
<table class="table table-condensed" style="width: 100%" ><!--style="width: 100%;*/-->


<tr><td><label>Codigo Nomina Pagos Complementarios:</label></td>
<td><input type="text" name="CNPC" value="<?php echo $con[0];	 echo $codigo?>" size="5" maxlength="5" /></td></tr>

<tr><td><label>Codigo Nomina:</label></td>
<td><input type="text" name="CN" value="<?php echo $con[1]; echo $nomina?>" size="15" maxlength="15" /></td></tr>

<tr><td><label>Codigo Complementario:</label></td>
<td><input type="text" name="CC" value="<?php echo $con[2]; echo $comple?>" size="20" maxlength="20"/></td></tr>
<br/>
</table>

<button name="Regresar"><i class="fas fa-reply"></i></button>
<button name="limpiar"><i class="fas fa-times"></i></button>
<button type="submit" name="guardar" value="guardar"><i class="fas fa-save"></i></button>
</div>
</form>
</body>

</html>