<?php



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $titulo ?></title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
    <div class="container">
        <div class="left">
            <h1>Hola</h1>
        </div>
        <div class="main">
            <div class="box">
            <h1>Iniciar Sesión</h1>
            <form action="modulos/login.php" method="POST">
                <div>
                <label for="usuario">Usuario:</label>
                <input type="text" name="usuario">
                </div><div>
                <label for="password">Contraseña:</label>
                <input type="password" name="password">
                </div>
                <div>
                <input type="submit" value="Iniciar Sesión">
                </div>
            </form>
            </div>
            </div>
        </div>
        <div class="right">
            <h1>Hola</h1>
        </div>

    </div>
</body>
</html>