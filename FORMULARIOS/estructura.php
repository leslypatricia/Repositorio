
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8">
<title>Menu de navegacion</title>
<link rel="stylesheet" type="text/css" href="">
<script src="../Informacion/bd/jquery-3.5.1.min.js"></script>
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
		/*background-repeat: no-repeat;
		background-size:1300px;
		background-position:200px 20px;
		width: 1000px;*/
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
li{
	font-size:40px;
	margin-bottom:35px;	
	color: blanchedalmond;
	font-family:Times New Roman;
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
	<!--	<span id="button-menu" class="fa fa-bars"><?php echo$_SESSION['s_usuario'].'-'.$_SESSION['idRol']; ?></span>-->
		<nav class="navegacion">
			<ul class="menu">
				<!-- TITULAR -->
				<li class="title-menu">Menu</li>
				<!-- TITULAR -->
				<li class="item-submenu" menu="1">
					<a href="#"><span class=" icon-menu"></span>Seguridad</a>
					<ul class="submenu">
						<li class="title-menu"><span class="icon-menu"></span>Seguridad</li>
						<li class="go-back">Atras</li>
						<li><a href="../FORMULARIOS/Usuario/Usuario1.php">Usuarios</a></li>
                       <li><a href="../FORMULARIOS/rol/rol1.php">Rol</a></li>
                       <li><a href="../FORMULARIOS/Privilegios/Privilegios1.php">Privilegios</a></li>
                       <li><a href="../FORMULARIOS/RolPrivilegios.php">Rol_Privilegios</a></li>
					</ul>
				</li>

				<li class="item-submenu" menu="2">
					<a href="#"><span class=" icon-menu"></span>Personal</a>
					<ul class="submenu">
						<li class="title-menu"><span class=" icon-menu"></span>Personal</li>
						<li class="go-back">Atras</li>
						<li><a href="../FORMULARIOS/Empleado/Empleados1.php">Empleados</a></li>
                        <li><a href="../FORMULARIOS/Departamento/Departamento1.php">Departamentos</a></li>
                        <li><a href="../FORMULARIOS/FormaPago/FormaPago1.php">Formas de Pago</a></li>

					</ul>
				</li>
				<li class="item-submenu" menu="3">
					<a href="#"><span class=" icon-menu"></span>Nomina</a>
					<ul class="submenu">
						<li class="title-menu"><span class=" icon-menu"></span>Nomina</li>
						<li class="go-back">Atras</li>

						<li><a href="../FORMULARIOS/NominaGeneral/NominaGeneral1.php">Nomina General</a></li>
						<li><a href="../FORMULARIOS/Deducciones/Deducciones1.php">Deducciones</a></li>
						<li><a href="../FORMULARIOS/NominaDeduccion/NominaDeduccion1.php">Nomina Deducciones</a></li>
					</ul>
				</li>
				<li class="item-submenu" menu="4">
					<a href="#"><span class=" icon-menu"></span>Horas Laborales</a>
					<ul class="submenu">
						<li class="title-menu"><span class=" icon-menu"></span>Horas Laborales</li>
						<li class="go-back">Atras</li>
						<li><a href="../FORMULARIOS/Jornada/Jornada1.php">Jornada</a></li>
						<li><a href="../FORMULARIOS/HoraExtra/HoraExtra1.php">Horas Extras</a></li>
                        <li><a href="../FORMULARIOS/TipoHE/TipoHE1.php">Tipo Hora Extra</a></li>
					</ul>
				</li>
				<li class="item-submenu" menu="5">
					<a href="#"><span class=" icon-menu"></span>Otos Pagos</a>
					<ul class="submenu">
						<li class="title-menu"><span class=" icon-menu"></span>Otos Pagos</li>
						<li class="go-back">Atras</li>

                     <li><a href="../FORMULARIOS/Aumento/Aumento1.php">Aumento</a></li>
                    <li><a href="../FORMULARIOS/PagosComplementarios/PagosComplementarios1.php">Pagos Complementarios</a></li>
                     <li><a href="../FORMULARIOS/NominaPagComplementarios/NominaPagComplementarios1.php">Nomina Pagos Complementarios</a></li>
					</ul>
				</li>
				<li><a href="../../LOG/Menu_Admin.php">ATRAS</a></li>
				<li><a href="../../Index.php"><i class="icono izquierda"></i>Cerrar sesion</a></li>
				<li role="presentation"><a href="../Informacion/quienes_somos.html"><i class="icono izquierda"></i>Quienes Somos?</a></li>
			</ul>
		</nav>
	</header>
</body>
</html>
