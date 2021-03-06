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

.from{
	margin:auto;
	margin-top:-10PX;
	border-radius:4px;
	font-family:Times New Roman ;
	/*font-family:"Arial Black", Gadget, sans-serif;*/
	color:black;
	/*box-shadow:7px 13px 37px #000;*/
}
h1{
	font-size:50px;
	margin-bottom:35px;	
	color: blanchedalmond;
	font-family:Times New Roman;
	}
	
	th, td {
	border:none;
	padding:10px;
	text-align:center;
	
}
tr:nth-child(even){

background:#F5F5F5;
}
.form-group{
	width:1350px;
	/*background:#00ced1;*/
	padding:50px;
	border-radius:6px;
	margin-bottom:16px;
	border:1px solid #1f53c5;
	font-family:"Arial Black", Gadget, sans-serif;
	font-size:18px;
	
	}
.body {

margin:0;
padding:0;
box-sizing:border-box;
background-image: url("../../IMG/Fondo10.jpg");
background-repeat: no-repeat;
background-size:cover;
background-attachment: fixed;
}


.button{
	width:80PX;
		background:#1f53c5;
		padding:10px;
		color:white;
		font-size:10px;}
.form-group1 {	width:750px;
	background:#00ced1;
	padding:10px;
	border-radius:4px;
	margin-bottom:16px;
	border:1px solid #1f53c5;
	font-family:"Arial Black", Gadget, sans-serif;
	font-size:18px;
}
.color-Tabla {
	background:#ffffff;
	border-collapse:collapse;
	/*border-top-left-radius:100px !important;*/
	/*border-spacing: 0.5rem;  rem unidad de medida*/
	font-family:Times New Roman ;


}
/*iconos*/
.fa-trash-alt{
color:red;
background:white;
border:none;
font-weight:bold;

}
.fa-search-plus
{
color:#009999;
background:white;
border:none;
font-weight:bold;

}

.boton-eliminar{

background:white;
border:none;
font-weight:bold;

}

.boton-actualizar{

background:white;
border:none;
font-weight:bold;

}

.fa-edit{
color:green;


}
.boton_Añadir{
	margin-left:10%;
	margin-right:36.5%;
	
	margin-bottom:1.5%;
	color: white;
	padding-left:1.5%;
	padding-right:1.5%;
	padding-top:0.5%;
	padding-bottom:0.5%;
	background:#346BFB;
	border:solid 1px #346BFB ;
	text-transform:uppercase;
	font-weight:bold;
	letter-spacing:0.06em;

}
.boton_Añadir:hover{
	margin-left:10%;
	margin-right:36.5%;
	margin-bottom:1.5%;
	color: white;
	padding-left:1.5%;
	padding-right:1.5%;
	padding-top:0.5%;
	padding-bottom:0.5%;
	background:#173687;
	border:solid 1px #346BFB ;
	text-transform:uppercase;
	font-weight:bold;
	letter-spacing:0.06em;
	cursor:pointer;

}

.Boton-Regresar
{
	margin-left:90%;
	margin-bottom:1.5%;
	color: white;
	padding-left:1.5%;
	padding-right:1.5%;
	padding-top:0.5%;
	padding-bottom:0.5%;
	align:center;
    background:#346BFB;
	/* */
	border:solid 1px #346BFB ;
	text-transform:uppercase;
	font-weight:bold;
	letter-spacing:0.06em;

}
.Estilo-tabla{
   background:#346BFB;
   color:white;
}
</style>
</head>

<body  class="body">
<?php

$conexion=mysqli_connect('localhost','root','','nominas')
?>

<input type="hidden" id="CE" value="<?php echo $codigo;?>">

<?php
if (isset($_POST["Regresar"])){
header("location:../estructura.php");
}
?>
<?php
if (isset($_POST["Insertar"])){
header("location:Departamento.php");
}
?>

<div class="Container">
	<center>
  <div class="form-group">
	 <center>
	 <h1>Aumento</h1>
	  <div class="form">
	  <form class="from"  id="form1" action= "" method="POST" >
		   <label for="caja"> </label>
		  <input type="text" name="caja" id="caja" aling="center" >   <i class="fas fa-search-plus" class="boton-Buscar"> </i> </input>
		</div>
	
	</center><br/><br/>
	<button name="Insertar"  class="boton_Añadir">Añadir Departamento  <i class="fas fa-plus"></i></button>
	<div class="container-table">
	<center>
	
<table border="1" class="color-Tabla">

    <tr class="Estilo-tabla">
       <td>Código Departamento</td> 
       <td>Descripción</td>
       <td>Código Jefe</td>
	   <td>Eliminar</td>
	   <td>Actualizar</td>
	</tr>
	
	<?php
$sql="SELECT * from departamento" ;

	$res=mysqli_query($conexion,$sql);
	while($mostrar=mysqli_fetch_array($res)){
		echo "<tr>";
		echo "<td>";echo $mostrar['Cod_Depto']; echo"</td>";
		echo "<td>";echo $mostrar['Descripcion']; echo"</td>";
		echo "<td>";echo $mostrar['Cod_Jefe']; echo"</td>";
		echo "<td><a href='Eliminar.php?CD=".$mostrar['Cod_Depto']."'><button name='Eliminar'  class='boton-eliminar'><i class='far fa-trash-alt'></a></i></button></td>";
		echo "<td><a href='Actualizar.php?CD=".$mostrar['Cod_Depto']."'><button name='Actualizar' class='boton-actualizar'><i class='fas fa-edit'></a></i></button></td>";
		echo "</td>";
	?>

<?php
}
?>
 </div class="color-Tabla">
</center>
   </table> 

	</center>
	<td><button name="Regresar" class="Boton-Regresar" ><i class="fas fa-reply"></i></button>
	</div>
	</div>
    </form>
</div>
<br>
    </body>
    </html>