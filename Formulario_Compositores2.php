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
$compositores= $_POST['txtnombre'];
$debut= $_POST['txtdebut'];
$nacionalidad= $_POST['txtnacionalidad'];
$genero= $_POST['txtgenero'];
// Aquí estamos imprimiendo las variables
echo"Compositor: ".$compositores."<br>";
echo "Debut: ".$debut."<br>";
echo "Nacionalidad: ".$nacionalidad."<br>";
echo "Genero musical: ".$genero."<br>";
// Primero realizamos la conexión
// entre subline y mysql
$host="localhost";
$username="root";
$password="";
$db_name="triple_baka_corporation";
$tbl_name="compositores";
$conexion=mysqli_connect($host,$username,$password,$db_name)
or die("Problemas con la conexion");
echo "<h1> La base de datos se conectó correctamente </h1>";
// Aquí pasamos los valores de las variables
// a los campos de la base de datos
mysqli_query($conexion, "insert into compositores(Nombre, Fecha_debut,
Nacionalidad, Genero_musical) values ('$compositores','$debut','$nacionalidad','$genero')")
or die ("Problemas en el select".mysqLi_error($conexion));

echo
"<h1> El usuario fue dado de alta </h1>";
echo "<br>";

echo "<h1>LISTADO DE COMPOSITORES</h1>";
$consulta= "SELECT * FROM compositores ";
$resultados= mysqli_query($conexion, $consulta);

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

while ($fila = $resultados->fetch_assoc()) {
	echo "<tr>;
<td>". $fila["Id_compositores"]."</td>
<td>". $fila['Nombre']."</td>
<td>". $fila["Fecha_debut"]."</td>
<td>". $fila['Nacionalidad']."</td>
<td>". $fila["Genero_musical"]."</td>
	</tr>";

}

echo "</table>";


mysqli_close($conexion);


?>
</body>
</html>