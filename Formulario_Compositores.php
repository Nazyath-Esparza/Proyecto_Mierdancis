<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compositores</title>
    <style>


label{display: block;
        color: #321D3B;
        margin-bottom: 10;
        font-size: 20px;
        font-weight: bold;
        margin: 2px;}

        input[type="text"]{
            width: 20%;
            padding: 10px;
            border: 2px solid #000000;
            border-radius: 5px;
            font-size: 14px;
        }

        form input[type="submit"]{
            width: 10%;
            padding: 5px;
            background-color: #d8cfdc;
            color: black;
            border: 1px solid #000000;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s ease;
        }

        form input[type="submit"]:hover{background-color: #f8eefc}

        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background: linear-gradient(45deg, #6a4c9c, #9b4dff);
            color: white;
        }
        header {
            background-color: #4a2c87;
            padding: 50px;
            text-align: center;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            position: relative;
        }
        header h1 {
            font-size: 3rem;
            margin: 0;
            text-transform: uppercase;
            font-weight: bold;
            letter-spacing: 2px;
        }
        nav {
            text-align: center;
            margin-top: 30px;
        }
        nav a {
            color: white;
            padding: 14px 25px;
            text-decoration: none;
            font-size: 1.2rem;
            background-color: #9b4dff;
            border-radius: 8px;
            margin: 10px;
            transition: background-color 0.3s ease, transform 0.3s ease;
        }
        nav a:hover {
            background-color: #7a3bc4;
            transform: scale(1.1);
        }
        .hero {
            background: url('https://via.placeholder.com/1600x700') no-repeat center center/cover;
            color: white;
            padding: 120px 20px;
            text-align: center;
            position: relative;
        }
        .hero h2 {
            font-size: 3rem;
            text-transform: uppercase;
            letter-spacing: 2px;
            font-weight: bold;
        }
        .hero p {
            font-size: 1.4rem;
            margin: 20px 0;
        }
        form input[type="submit"] {
            background-color: #ff4081;
            padding: 15px;
            font-size: 1.5rem;
            text-decoration: none;
            color: white;
            border-radius: 30px;
            box-shadow: 0 10px 30px rgba(255, 64, 129, 0.4);
            transition: all 0.4s ease;
        }
        form input[type="submit"]:hover {
            background-color: #ff1d5e;
            transform: scale(1.1);
            box-shadow: 0 15px 40px rgba(255, 64, 129, 0.6);
        }
        .container {
            padding: 60px 20px;
        }
        .box {
            background-color: #3a2a6a;
            padding: 30px;
            margin: 30px 0;
            border-radius: 10px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }
        .box:hover {
            background-color: #4a2c87;
            transform: scale(1.05);
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.3);
        }
        .box h3 {
            font-size: 2.2rem;
            color: #ff4081;
            margin-bottom: 15px;
        }
        .box p {
            font-size: 1.2rem;
            color: #ddd;
        }
        footer {
            background-color: #4a2c87;
            color: white;
            padding: 20px 0;
            text-align: center;
            position: relative;
            margin-top: 50px;
        }
        footer p {
            font-size: 1.1rem;
        }
    </style>
</head>
<body>

<header>
    <h1>COMPOSITORES</h1>
</header>

<section class="hero">

<form action="Formulario_Compositores2.php" method="POST">
        <h2>REGISTRO DE LOS COMPOSITORES</h2>
        <br>
        <label>Nombre del compositor</label>
        <input type="text" name="txtnombre" placeholder="Escribe el nombre">
<br>
<br>
        <label>Fecha de debut</label>
        <input type="text" name="txtdebut" placeholder="fecha en que debutaron">
        <br>
<br>
        <label>Nacionalidad</label>
        <input type="text" name="txtnacionalidad" placeholder="Nacionalidad">
        <br>
<br>
        <label>Género musical</label>
        <input type="text" name="txtgenero" placeholder="Escribe el género que toca o canta">
        <br>
<br>
        
        <input type="submit" name="Enviar" value="Enviar">
        <br>

</section>

<footer>
    <p>&copy; 2025 Compositores.
<br>
     Sánchez Zaldivar Teresa del Carmen
<br>
     Jaquez Almaguer David Ricardo
<br>
     Esparza Chávez Nazyath Elianeth.</p>
</footer>

</body>
</html>
