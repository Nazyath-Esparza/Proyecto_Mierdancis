<!DOCTYPE html>
<html>
<head>
	<title>CONSULTA E 1</title>

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
$tbl_name="discos";
$conexion=mysqli_connect($host,$username,$password,$db_name)
or die("Problemas con la conexion");

$consulta= "SELECT * FROM discos WHERE precio < 350;";
$resultados= mysqli_query($conexion, $consulta);

echo
"<h1> Elimina todos los artículos que tengan un precio menor a 350 </h1>";
echo "<br>";

echo "<table>";
echo "<thead>";
echo "<tr>";
echo "<th>"."Id_Discos"."</th>";
echo "<th>"."Nombre_album"."</th>";
echo "<th>"."id_compositores"."</th>";
echo "<th>"."precio"."</th>";
echo "<th>"."id_formato"."</th>";
echo "</tr>";
echo "</thead>";

while ($fila = $resultados->fetch_assoc()) {
	echo "<tr>;
<td>". $fila["ID_Discos"]."</td>
<td>". $fila['Nombre_album']."</td>
<td>". $fila["Id_compositores"]."</td>
<td>". $fila['precio']."</td>
<td>". $fila["Id_Formato"]."</td>
	</tr>";

}

echo "</table>";

mysqli_close($conexion);

?>

</body>
</html>