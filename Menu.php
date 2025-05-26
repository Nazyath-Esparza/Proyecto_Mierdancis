<!DOCTYPE html>
<html lang="es">
<head>
	<title>MENU</title>
	<style type="text/css">
		*{
			margin: 0;
			padding: 0;
			box-sizing: border-box;
		}

		body{
			background: #f4f4f4;
			font-family: 'Arial', sans-serif;
			color: #333;
		}

		.navegation {
			width: 90%;
			max-width: 1200px;
			margin: 30px auto;
			background: #fff;
			padding: 10px;
			border-radius: 8px;
			box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
		}

		.navegation ul {
			list-style: none;
			padding-left: 0;
		}

		.menu > li {
			position: relative;
			display: inline-block;
			padding: 15px;
			margin: 0 10px;
			border-radius: 5px;
			transition: background-color 0.3s ease-in-out;
		}

		.menu > li > a {
			display: block;
			padding: 12px 20px;
			color: #333;
			text-decoration: none;
			font-weight: 600;
			text-transform: uppercase;
			border-radius: 5px;
			transition: background-color 0.3s ease, color 0.3s ease;
		}

		.menu > li > a:hover {
			background-color: #ff5c8e;
			color: #fff;
		}

		.menu li:hover {
			background-color: #e2e2e2;
			border-radius: 8px;
		}

		.submenu {
			position: absolute;
			background: #fff;
			width: 180px;
			visibility: hidden;
			opacity: 0;
			transition: opacity 0.3s ease;
			box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
			border-radius: 8px;
			top: 100%;
			left: 0;
		}

		.submenu li a {
			display: block;
			padding: 10px 15px;
			color: #333;
			text-decoration: none;
			font-weight: 400;
			border-radius: 5px;
			transition: background-color 0.3s ease;
		}

		.submenu li a:hover {
			background-color: #ff5c8e;
			color: #fff;
			box-shadow: 0 4px 10px rgba(255, 92, 142, 0.4);
		}

		.menu li:hover .submenu {
			visibility: visible;
			opacity: 1;
		}

		/* Hover Effect */
		.menu li:hover > a {
			background-color: #ff5c8e;
			color: white;
		}

		/* Responsive Design */
		@media (max-width: 768px) {
			.menu > li {
				display: block;
				width: 100%;
				text-align: center;
			}
			.submenu {
				position: relative;
				width: 100%;
				box-shadow: none;
			}
		}
	</style>
</head>
<body>

<header>
	<nav class="navegation">
		<ul class="menu">
			<li><a href="#">Inicio</a></li>
			<li><a href="#">Nosotros</a>
<ul class="submenu">
					<li><a href="mision.php">Misión</a></li>
				</ul>
			</li>

			<li><a href="#">Formularios</a>
				<ul class="submenu">
					<li><a href="Formularioformato.php">Formato</a></li>
					<li><a href="Formulariodiscos.php">Discos</a></li>
					<li><a href="Formulario_Compositores.php">Compositores</a></li>
					<li><a href="Formularioventas.php">Ventas</a></li>
				</ul>
			</li>
			<li><a href="#">Consultas</a>
				<ul class="submenu">
					<li><a href="ConsultaA1.php">ConsultaA1</a></li>
					<li><a href="ConsultaA2.php">ConsultaA2</a></li>
					<li><a href="ConsultaA3.php">ConsultaA3</a></li>
					<li><a href="ConsultaA4.php">ConsultaA4</a></li>
					<li><a href="ConsultaA5.php">ConsultaA5</a></li>
					<li><a href="ConsultaE1.php">ConsultaE1</a></li>
					<li><a href="ConsultaE2.php">ConsultaE2</a></li>
					<li><a href="ConsultaE3.php">ConsultaE3</a></li>
					<li><a href="ConsultaE4.php">ConsultaE4</a></li>
					<li><a href="ConsultaE5.php">ConsultaE5</a></li>
					<li><a href="ConsultaS1.php">ConsultaS1</a></li>
					<li><a href="ConsultaS2.php">ConsultaS2</a></li>
					<li><a href="ConsultaS3.php">ConsultaS3</a></li>
					<li><a href="ConsultaS4.php">ConsultaS4</a></li>
					<li><a href="ConsultaS5.php">ConsultaS5</a></li>
					<li><a href="ConsultaFB1.php">ConsultaFB1</a></li>
					<li><a href="ConsultaFB2.php">ConsultaFB2</a></li>
					<li><a href="ConsultaFB3.php">ConsultaFB3</a></li>
					<li><a href="ConsultaFB4.php">ConsultaFB4</a></li>
					<li><a href="ConsultaFB5.php">ConsultaFB5</a></li>
				</ul>
			</li>
			<li><a href="Manual1.pdf" target="_blank">Ver Manual de Usuario</a></li>
		</ul>
	</nav>
</header>

</body>
</html>
