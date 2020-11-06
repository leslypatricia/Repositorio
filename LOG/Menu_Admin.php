
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8">
<title>Menu de navegacion</title>
<link rel="stylesheet" type="text/css" href="">
<script src="bd/jquery-3.5.1.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<link rel="stylesheet" href=https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="../codigo.js"></script>
<style>

*{
	margin: 0;
	padding: 0;
	box-sizing: border-box;
}

body{
	font-family: 'Open sans';
	background: #E8E8E8;
	background-image: url("../IMG/Fondo10.jpg");
	background-repeat: no-repeat;
	background-size:cover;
	background-attachment: fixed;
}

header{
	position: fixed;
	width: 100%;
	top: 0;
	left: 0;

	padding: 20px;
	background: #34495E;
}

header #button-menu{
	font-size: 30px;
	color: #fff;
	cursor: pointer;
}

.navegacion{
	position: absolute;
	top: 100%;
	left: 0;
	width: 0%;
	height: 100vh;
	background: rgba(0,0,0,.0);

}

.navegacion ul{
	width: 320px;
	height: 100%;
	background: #fff;
	list-style: none;

	position: absolute;
	top: 0;
	left: -320px;

	transition: left .3s;
}

.navegacion .menu li.title-menu{
	padding: 20px;
	background: #5F6F81;
	color: #fff;
	text-align: center;
	font-size: 22px;
}

.navegacion .menu a{
	display: block;
	padding: 20px;
	border-bottom: 1px solid #C6D0DA;

	font-size: 22px;
	font-weight: 200;
	text-decoration: none;
	color: #575D69;
}

.navegacion .menu a:hover{
	background: #798DA3;
	color: #fff;
}

.navegacion .menu li span.icon-menu{
	margin-right: 12px;
}

.navegacion .menu .item-submenu > a::after{
	font: normal normal normal 14px/1 FontAwesome;
  	font-size: inherit;
  	text-rendering: auto;
  	-webkit-font-smoothing: antialiased;
  	-moz-osx-font-smoothing: grayscale;
	content: '\f105';

	float: right;
	color: #C5C5C5;
}

/* Submenu ============*/

.navegacion .submenu li.title-menu{
	background: #fff;
	color: #575D69;
}

.navegacion .submenu li.go-back{
	padding: 10px 20px;
	background: #5F6F81;
	color: #fff;
	font-size: 18px;
	cursor: pointer;
}

.navegacion .submenu li.go-back::before{
	font: normal normal normal 14px/1 FontAwesome;
  	font-size: inherit;
  	text-rendering: auto;
  	-webkit-font-smoothing: antialiased;
  	-moz-osx-font-smoothing: grayscale;
	content: '\f0d9';
	margin-right: 10px;
}

@media screen and (max-width: 320px){
	.navegacion ul{
		width: 100%;
	}
}
</style>


</head>
<body>
<header>
		<span id="button-menu" class="fa fa-bars"></span>

		<nav class="navegacion">
		<?php  
		$db_host="localhost";
		$db_usuario="root";
		$db_contra="";
		$db_nombre="nominas";
		
		$conexion=mysqli_connect($db_host,$db_usuario,$db_contra,$db_nombre);
		
		$sql=mysqli_query($conexion,"SELECT COUNT(*) as Usuario FROM usuario" );
			$resul=mysqli_fetch_array($sql);
			$total=$resul['Usuario'];	
		?>
			<ul class="menu">
				<!-- TITULAR -->
				<li class="title-menu">Menú  de Administrador</li>
				<!-- TITULAR -->
				<a href="../FORMULARIOS/Estructura.php">Formularios</a></li>
				<li><a href="Generar_Planilla.php">Generar Planilla</a></li>
               <li><a href="">Derechos Reservados</a></li>
                <li><p><a href="../index.php">Cerrar sesión</a></p></li>
				<!--<li class="item-submenu" menu="1">
					<a href="#"><span class="fa fa-suitcase icon-menu"></span>Estrucrura</a>
					<ul class="submenu">
						<li class="title-menu"><span class="fa fa-suitcase icon-menu"></span>Usuario</li>
						<li class="go-back">Atras</li>
						<li><a href="../FORMULARIOS/Usuario.php">Usuarios</a></li>
                       <li><a href="../FORMULARIOS/rol.php">Rol</a></li>
                       <li><a href="../FORMULARIOS/Privilegios.php">Privilegios</a></li>
                       <li><a href="../FORMULARIOS/RolPrivilegios.php">Rol_Privilegios</a></li>
					</ul></li>-->
				

			<!--	<li class="item-submenu" menu="2">
					<a href="#"><span class="fa fa-shopping-bag icon-menu"></span>Ingresar</a>
					<ul class="submenu">
						<li class="title-menu"><span class="fa fa-shopping-bag icon-menu"></span>Ingresar</li>
						<li class="go-back">Atras</li>

						<li><a href="../FORMULARIOS/Empleados.php">Empleados</a></li>
<li><a href="../FORMULARIOS/Departamento.php">Departamentos</a></li>
<li><a href="../FORMULARIOS/Jornada.php">Jornada</a></li>
<li><a href="../FORMULARIOS/FormaPago.php">Formas de Pago</a></li>
<li><a href="../FORMULARIOS/Aumento.php">Aumento</a></li>
					</ul>
				</li>
				<li class="item-submenu" menu="3">
					<a href="#"><span class="fa fa-shopping-bag icon-menu"></span>Nomina_Deducciones</a>
					<ul class="submenu">
						<li class="title-menu"><span class="fa fa-shopping-bag icon-menu"></span>Ingresar</li>
						<li class="go-back">Atras</li>

						<li><a href="../FORMULARIOS/NominaGeneral.php">Nomina General</a></li>
<li><a href="../FORMULARIOS/NominaDeduccion.php">Nomina Deducciones</a></li>
<li><a href="../FORMULARIOS/Deducciones.php">Deducciones</a></li>
<li><a href="../FORMULARIOS/PagosComplementarios.php">Pagos Complementarios</a></li>
<li><a href="../FORMULARIOS/NominaPagComplementarios.php">Nomina Pagos Complementarios</a></li>
					</ul>
				</li>
				<li><a href="../Index.php"><i class="icono izquierda"></i>Cerrar sesion</a></li>
				<li role="presentation"><a href="../Informacion/quienes_somos.html"><i class="icono izquierda"></i>Quienes Somos?</a></li>-->
			
			</ul>
		</nav>
	</header>

	

</body>
</html>
