<!DOCTYPE html>
<html>
<head>
	<title>CONSULTA 2</title>

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

$consulta= "Update compositores SET Nombre='METALICA' WHERE Id_compositores=1";
$resultados= mysqli_query($conexion, $consulta);
$consulta2= "SELECT * FROM  compositores";
$result = mysqli_query($conexion, $consulta2);

echo
"<h1> Cambia el nombre de Metallica a METALICA </h1>";
echo "<br>";

echo "<table>";
echo "<thead>";
echo "<tr>";
echo "<th>"."Id_compositores"."</th>";
echo "<th>"."Nombre"."</th>";
echo "<th>"."Fecha_debut"."</th>";
echo "<th>"."Nacionalidad"."</th>";
echo "<th>"."Genero_musical"."</th>";
echo "</tr>";
echo "</thead>";

while ($fila = $result->fetch_assoc()) {
	echo "<tr>;
<td>". $fila['Id_compositores']."</td>
<td>". $fila["Nombre"]."</td>
<td>". $fila['Fecha_debut']."</td>
<td>". $fila["Nacionalidad"]."</td>
<td>". $fila['Genero_musical']."</td>
	</tr>";

}

echo "</table>";


mysqli_close($conexion);

?>

</body>
</html>