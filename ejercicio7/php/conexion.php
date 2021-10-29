<?php
$conexion = mysqli_connect('localhost', 'alumno', 'alumno', 'bd_prueba');

mysqli_set_charset($conexion, "utf8");

function executeQuery($query, $conexion) {
    $result =  $conexion->query($query) or die ($conexion->error);
    return $result;
}


function mostrarUsuarios($conexion) {
    $result = executeQuery("select * from usuarios", $conexion);
    $usuarios = $result->fetch_all(MYSQLI_ASSOC);

    echo '<table border="1"><tr><th colspan="' . sizeof($usuarios[0]) . '">Usuarios</th></tr>';
    echo "<tr>";
    foreach ($usuarios[0] as $clave => $valor) {
        echo '<th>' . $clave . '</th>';
    }
    echo "</tr>";
    foreach ($usuarios as $usuario) {
        echo "<tr>";
        foreach ($usuario as  $valor) {
            echo '<td>' . $valor . '</td>';
        }
        echo "</tr>";
    }
}



