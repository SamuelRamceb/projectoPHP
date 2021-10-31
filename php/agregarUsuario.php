<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuevo Usuario</title>
</head>
<body>
    <a href="../index.php">Volver al inicio</a>
    <form action="validarUsuario.php" method="post">
        <p>
            <label for="fName">Nombre</label>
            <input type="text" id="fName" name="fName" required minlength="1" maxlength="30" pattern="[A-Za-z\sñÑ]{1,}" title="Solo letras y maximo 30 caracteres">
        </p>
        <p>
            <label for="lName">Apellidos</label>
            <input type="text" id="lName" name="lName" required minlength="1" maxlength="80" pattern="[A-Za-z\sñÑ]{1,}" title="Solo letras y maximo 80 caracteres">
        </p>
        <p>
            <label for="mail">Correo</label>
            <input type="email" name="mail" id="mail" required minlength="1" maxlength="100" pattern="[\w.%+-]+@[a-zA-Z0-9.-]+\.[a-z]{2,}$">
        </p>
        <p>
            <label for="user">Usuario</label>
            <input type="text" name="user" id="user" required minlength="1" maxlength="20" pattern="[a-zA-Z0-9_-ñÑ]{1,}" title="Solo se admiten letras números, - y _">
        </p>
        <p>
            <label for="passwd">Contraseña</label>
            <input type="password" name="passwd" id="passwd" required minlength="5" maxlength="20" pattern="[\wñÑ]{5,}" title="Solo letras números y _"
        </p>
        <p>
            <label for="phone">Telefono</label>
            <input type="number" name="phone" id="phone" required min="1" pattern="[0-9]{1,10}" title="maximo 10 caracteres">
        </p>
        <input type="submit" name="agregar" value="Agregar Usuario">
    </form>
    <?php
        if (isset($_GET['error'])) {
            if ($_GET['error'] == 1) echo '<span style="color: red">Error cadena vacia al enviar el formulario</span>';
            if ($_GET['error'] == 2) echo '<span style="color: red">El correo indicado ya se encuentra registrado</span>';
            if ($_GET['error'] == 3) echo '<span style="color: red">El usuario indicado ya se encuentra en uso</span>';
        }
    ?>
</body>
</html>