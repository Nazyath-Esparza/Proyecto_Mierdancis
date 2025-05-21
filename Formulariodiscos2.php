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
// Aquí estamos pasando los valores de los
// cuadros de texto a variable
$nombreA= $_POST['txtnombreA'];
$IDCompositor= $_POST['txtIDCompositor'];
$precio= $_POST['txtprecio'];
$IDFormato= $_POST['txtIDFormato'];
// Aquí estamos imprimiendo las variables
echo"Nombre del Album: ".$nombreA."<br>";
echo "ID del compositor: ".$IDCompositor."<br>";
echo"Precio del Album: ".$precio."<br>";
echo "ID del formato: ".$IDFormato."<br>";
// Primero realizamos la conexión
// entre subline y mysql
$host="localhost";
$username="root";
$password="";
$db_name="triple_baka_corporation";
$tbl_name="discos";
$conexion=mysqli_connect($host,$username,$password,$db_name)
or die("Problemas con la conexion");
echo "<h1> La base de datos se conectó correctamente </h1>";
// Aquí pasamos los valores de las variables
// a los campos de la base de datos
mysqli_query($conexion, "insert into discos(Nombre_album,Id_compositores,precio,Id_Formato) values ('$nombreA','$IDCompositor','$precio','$IDFormato')")
or die ("Problemas en el select".mysqLi_error($conexion));

echo
"<h1> El usuario fue dado de alta </h1>";
echo "<br>";

echo "<h1>LISTADO DE ALBUMES</h1>";
$consulta= "SELECT * FROM  discos";
$resultados= mysqli_query($conexion, $consulta);

echo "<table>";
echo "<thead>";
echo "<tr>";
echo "<th>"."ID_Discos "."</th>";
echo "<th>"."Nombre_album"."</th>";
echo "<th>"."Id_compositores"."</th>";
echo "<th>"."precio"."</th>";
echo "<th>"."Id_Formato"."</th>";
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