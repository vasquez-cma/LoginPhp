<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuarios</title>
</head>
<body>
    <?php
    
        session_start();
    
        if(!isset($_SESSION["user"])){
            header("Location: form.php");
        }
    ?>
    <h1>Bienvenido <?=$_SESSION["user"]?></h1>
    <p><a href="cerrar_sesion.php">Cerrar sesion</a></p>
</body>
</html>