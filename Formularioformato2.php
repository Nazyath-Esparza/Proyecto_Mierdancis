<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title></title>

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

$username="root";
$password="";
$db_name="triple_baka_corporation";
$tbl_name="formato_discos";
$conexion=mysqli_connect($host,$username,$password,$db_name)
or die ("Problemas en el select".mysqLi_error($conexion));

echo "<h1>LISTADO DE Formatos</h1>";
$consulta= "SELECT * FROM  formato_discos";
$resultados= mysqli_query($conexion, $consulta);

echo "<table>";
echo "<thead>";
echo "<tr>";
echo "<th>"."Id_Formato "."</th>";
echo "<th>"."Nombre_formato"."</th>";
echo "</tr>";
echo "</thead>";

while ($fila = $resultados->fetch_assoc()) {
	echo "<tr>;
<td>". $fila["Id_Formato"]."</td>
<td>". $fila['Nombre_formato']."</td>
	</tr>";

}

echo "</table>";


mysqli_close($conexion);


?>
</body>
</html>