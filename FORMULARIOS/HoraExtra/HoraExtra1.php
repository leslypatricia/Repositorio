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
   /* background:black;*/
    height:100%;
	width:100%;
	background-image: url("../../IMG/Fondo10.jpg");
	background-repeat: no-repeat;
	background-size:cover;
	background-attachment: fixed;
}

th, td {
	border:none;
	padding:10px;
	text-align:center;
}
tr:nth-child(even){

	background:#F5F5F5;
}
 
.from{
	margin:auto;
	margin-top:-10PX;
	border-radius:4px;
	font-family:"Arial Black", Gadget, sans-serif;
	color:black;
}
h1{
	font-size:40px;
	margin-bottom:35px;	
	color: blanchedalmond;
	font-family:Times New Roman;
	}
	
.form-group{
	padding:50px;
	border-radius:6px;
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

.boton_Añadir:hover{
	margin-left:10%;
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
</style>
</head>

<body>
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
header("location:HoraExtra.php");
}
?>
  <div class="Container">
	<center>
  <div class="form-group">
	 <center>
	 <h1>Hora Extra</h1>
	  <div class="form">
	  <form class="from"  id="form1" action= "" method="POST" >
		   <label for="caja"> </label>
		  <input type="text" name="caja" id="caja" aling="center" >   <i class="fas fa-search-plus" class="boton-Buscar"> </i> </input>
		</div>
	</center><br/><br/>
	<button name="Insertar"  class="boton_Añadir">Añadir Aumento  <i class="fas fa-plus"></i></button>
	<div class="container-table">
	<center>
	
<table border="1" class="color-Tabla">

    <tr class="Estilo-tabla">
       <td>Cod_HE</td> 
       <td>Cod_Jornada</td>
	   <td>Cod_Empleado</td>
	   <td>Sueldo_Ordinario</td>
	   <td>Sueldo_Diario</td>
	   <td>Sueldo_Hora</td>
	   <td>Porce_HE</td>
	   <td>Pago_Hora</td>
	   <td>Numero_Horas</td>
       <td>Total_HE</td>
	   <td>Fecha</td>
	   <td>Eliminar</td>
	   <td>Actualizar</td>
	</tr>
	
	<?php
$sql="SELECT ex.Cod_HExtra,j.Cod_Jornada,ep.Cod_empleados
,ex.Sueldo_Ordinario,ex.Sueldo_Diario,ex.Sueldo_Hora,
ex.Porce_Hora_Extra,ex.Pago_Hora,ex.Numero_Horas,ex.Total_HE,ex.fecha from horaextra as ex 
JOIN jornada as j on ex.Cod_Jornada=j.Cod_Jornada
JOIN empleados as ep on ex.Cod_empleados=ep.Cod_empleados " ;

	$res=mysqli_query($conexion,$sql);
	while($mostrar=mysqli_fetch_array($res)){
		echo "<tr>";
		echo "<td>";echo $mostrar['Cod_HExtra']; echo"</td>";
		echo "<td>";echo $mostrar['Cod_Jornada']; echo"</td>";
		echo "<td>";echo $mostrar['Cod_empleados']; echo"</td>";
		echo "<td>";echo $mostrar['Sueldo_Ordinario']; echo"</td>";
		echo "<td>";echo $mostrar['Sueldo_Diario']; echo"</td>";
		echo "<td>";echo $mostrar['Sueldo_Hora']; echo"</td>";
		echo "<td>";echo $mostrar['Porce_Hora_Extra']; echo"</td>";
		echo "<td>";echo $mostrar['Pago_Hora']; echo"</td>";
		echo "<td>";echo $mostrar['Numero_Horas']; echo"</td>";
		echo "<td>";echo $mostrar['Total_HE']; echo"</td>";
		echo "<td>";echo $mostrar['fecha']; echo"</td>";
		echo "<td><a href='Eliminar.php?HE=".$mostrar['Cod_HExtra']."'><button name='Eliminar'  class='boton-eliminar'><i class='far fa-trash-alt'></a></i></button></td>";
	    echo "<td><a href='Actualizar.php?HE=".$mostrar['Cod_HExtra']."'><button name='Actualizar' class='boton-actualizar'><i class='fas fa-edit'></a></i></button></td>";
	   echo "<tr>";
		

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
