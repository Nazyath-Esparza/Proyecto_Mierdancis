<!DOCTYPE html>
<html>
<head>
	<title>CONSULTA FB 1</title>

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
$tbl_name="ventas";
$conexion=mysqli_connect($host,$username,$password,$db_name)
or die("Problemas con la conexion");

$consulta= "SELECT *
FROM ventas
WHERE YEAR(Fecha)
= YEAR(NOW()); ";
$resultados= mysqli_query($conexion, $consulta);

echo
"<h1> Selecciona las ventas del año actual: </h1>";
echo "<br>";

echo "<table>";
echo "<thead>";
echo "<tr>";
echo "<th>"."ID_Venta"."</th>";
echo "<th>"."Fecha"."</th>";
echo "<th>"."ID_Discos"."</th>";
echo "<th>"."Cantidad"."</th>";
echo "<th>"."Total"."</th>";
echo "</tr>";
echo "</thead>";

while ($fila = $resultados->fetch_assoc()) {
	echo "<tr>;
<td>". $fila["ID_Venta"]."</td>
<td>". $fila['Fecha']."</td>
<td>". $fila["ID_Discos"]."</td>
<td>". $fila['Cantidad']."</td>
<td>". $fila["Total"]."</td>
	</tr>";

}

echo "</table>";


mysqli_close($conexion);

?>

</body>
</html>