<?php include('php/conexion.php'); ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="">
    <title>Ejercicio 7</title>
</head>
<body>
    <form action="php/agregarUsuario.php">
    <?php
    mostrarUsuarios($conexion);
    ?>
    <input type="submit" value="Agregar">
    </form>
    <!-- <a href="php/agregarUsuario.php">Agregar Usuario</a> -->
</body>
</html>