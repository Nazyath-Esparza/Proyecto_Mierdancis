<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>LISTADO DE VENTAS REALIZADAS</title>

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
// Aquí estamos pasando los valores de los
// cuadros de texto a variable
$fecha= $_POST['txtfecha'];
$id_discos= $_POST['txtiddiscos'];
$cantidad= $_POST['txtcantidad'];
$total= $_POST['txttotal'];
// Aquí estamos imprimiendo las variables
echo"Fecha: ".$fecha."<br>";
echo "ID_Discos: ".$id_discos."<br>";
echo "Cantidad: ".$cantidad."<br>";
echo "Total: ".$total."<br>";
// Primero realizamos la conexión
// entre subline y mysql
$host="localhost";
$username="root";
$password="";
$db_name="triple_baka_corporation";
$tbl_name="ventas";
$conexion=mysqli_connect($host,$username,$password,$db_name)
or die("Problemas con la conexion");
echo "<h1> La base de datos se conectó correctamente </h1>";
// Aquí pasamos los valores de las variables
// a los campos de la base de datos
mysqli_query($conexion, "insert into ventas(Fecha, ID_Discos,
Cantidad, Total) values ('$fecha','$id_discos','$cantidad','$total')")
or die ("Problemas en el select".mysqLi_error($conexion));

echo
"<h1> El usuario fue dado de alta </h1>";
echo "<br>";

echo "<h1>LISTADO DE VENTAS</h1>";
$consulta= "SELECT * FROM ventas ";
$resultados= mysqli_query($conexion, $consulta);

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