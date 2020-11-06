<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8">
<title>Menu de navegacion</title>
<link rel="stylesheet" type="text/css" href="">
<script src="bd/jquery-3.5.1.min.js"></script>
<style>
*{
	box-sizing:border-box;
	margin:0;
	padding:0;
	}
	body{
		overflow:hidden;
	}
.barra{
	position:absolute;
	width:300px;
	height:100vh;
	background:#069;
	z-index:1;
}
.barra a{
	text-align:center;
	text-decoration:none;
	display:block;
	padding:15px;
	color:white;
	font-size:20px;
}
h2{
	text-align:center;
	background:#059;
	color:white;
	padding:10px;
}
li{
	outline:1px solid #059;
	transition:all .3s;
}
li:hover{
	background:#059;
	border-left:3px solid white;
}
.contenido{
	width:100%;
	height:100$;
	background:#ide;
	position:absolute;
	transition:all .3s;
}
.abrir{
	position:absolute;
	top:30px;
	left:30px;
	font-size:40px;
	cursor:pointer;
	color:#069;
}
.texto{
	width:1024px;
	margin:100px auto;
	background:white;
}
.mostrar{
	transform:translateX(300px);
}
</style>


</head>
<body>
<div class="barra">
<h2>Menu</h2>
<ul>
<li><a href="">Rol</a></li>
<li><a href="">Privilegios</a></li>
<li><a href="">Rol_Privilegios</a></li>
<li><a href="">Departamentos</a></li>
<li><a href="">Formas de Pago</a></li>
<li><a href="">Empleados</a></li>
<li><a href="">Usuarios</a></li>




<li><a href=""> Departamentos</a></li>
<li><a href=""> Empleados</a></li>
<li><a href=""> </a></li>


<li><a href="">MODIFICAR</a></li>
<li><a href="Actualizar.php">ELIMINAR</a></li>
<p><a href="bd/Administrador.php">Cerrar sesion</a></p>
</ul>

<ul class="nav nav-pills">
								<li role="presentation"><a href="../Informacion/quienes_somos.html">�Qui�nes Somos?</a></li>
		
							</ul>
</div>
<div class="contenido">
<span class="icon-menu abri"></span>
</div>
<script src="bd/main.js"></script>

</body>
</html>
