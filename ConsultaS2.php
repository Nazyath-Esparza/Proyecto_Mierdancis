<!DOCTYPE html>
<html>
<head>
	<title>CONSULTA S 2</title>

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

$consulta= "SELECT discos.Nombre_album, discos.Id_compositores FROM discos INNER JOIN compositores ON discos.Id_compositores = compositores.Id_compositores WHERE discos.Id_compositores='2' OR discos.Id_compositores='3'; ";
$resultados= mysqli_query($conexion, $consulta);

echo
"<h1> MUESTRA EL NOMBRE DEL ÁLBUM CUYOS COMPOSITORES CORRESPONDAN
<BR>AL ID 2 O 3</h1>";
echo "<br>";

echo "<table>";
echo "<thead>";
echo "<tr>";
echo "<th>"."Nombre_album"."</th>";
echo "<th>"."Id_compositores"."</th>";
echo "</tr>";
echo "</thead>";

while ($fila = $resultados->fetch_assoc()) {
	echo "<tr>;
<td>". $fila['Nombre_album']."</td>
<td>". $fila["Id_compositores"]."</td>
	</tr>";

}

echo "</table>";


mysqli_close($conexion);

?>

</body>
</html>