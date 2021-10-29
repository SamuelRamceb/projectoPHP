<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuevo Usuario</title>
</head>
<body>
    <form action="validarUsuario.php" method="post">
        <p><label for="fName">Nombre</label><input type="text" id="fName" name="fName"></p>
        <p><label for="lName">Apellidos</label><input type="text" id="lName" name="lName"></p>
        <p><label for="mail">Correo</label><input type="email" name="mail" id="mail"></p>
        <p><label for="user">Usuario</label><input type="text" name="user" id="user"></p>
        <p><label for="passwd">Contraseña</label><input type="password" name="passwd" id="passwd"></p>
        <p><label for="phone">Telefono</label><input type="number" name="phone" id="phone"></p>
        <input type="submit" value="Agregar Usuario">
    </form>
</body>
</html>