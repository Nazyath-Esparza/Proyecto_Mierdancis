<!DOCTYPE html>
<html>
<head>
	<title>CONSULTA 5</title>

<style type="text/css">
	
table{background: white;
	text-align: center;
	border-collapse: collapse;
	width: 70%;
	color: black;
	margin-top: 5%;
	margin-left: 5%;

}

thead{
	background: black;
	border-bottom: solid 5px black ;
	color: white;
}

th,td{padding: 1%;}

tr:nth-child(even){background: #ddd; }

tr:hover td{background: #9c3c27; 
color: white;}


</style>



</head>
<body>

<?php

$host="localhost";
$username="root";
$password="";
$db_name="triple_baka_corporation";
$conexion=mysqli_connect($host,$username,$password,$db_name)
or die("Problemas con la conexion");

$consulta= "UPDATE discos SET Nombre_album = 'Persona 3 Fes OST', precio = 2387.6,Id_Formato=3 WHERE ID_Discos=1";
$resultados = mysqli_query($conexion, $consulta);
$consulta2= "SELECT * FROM  discos";
$result = mysqli_query($conexion, $consulta2);

echo
"<h1> Cambia el Nombre a Persona 3 Fes OST,su precio a 2387.6 y su formato a cassette del disco con ID=1
 </h1>";
echo "<br>";

echo "<table>";
echo "<thead>";
echo "<tr>";
echo "<th>"."ID_Discos"."</th>";
echo "<th>"."Nombre_album"."</th>";
echo "<th>"."Id_compositores"."</th>";
echo "<th>"."precio"."</th>";
echo "<th>"."Id_Formato"."</th>";
echo "</tr>";
echo "</thead>";

while ($fila = mysqli_fetch_array($result) ) {
	echo "<tr>;
<td>". $fila['ID_Discos']."</td>
<td>". $fila["Nombre_album"]."</td>
<td>". $fila['Id_compositores']."</td>
<td>". $fila["precio"]."</td>
<td>". $fila['Id_Formato']."</td>
	</tr>";

}

echo "</table>";


mysqli_close($conexion);

?>

</body>
</html>