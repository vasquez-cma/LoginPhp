<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&display=swap" rel="stylesheet">
    <title>Formulario</title>
</head>
<body>
    <form action="suscribe.php" method="post">
        <h1>Suscribe</h1>
        <table>
            <tr><td><input type="text" name="login" placeholder="login"></td></tr>
            <tr><td><input type="password" name="password" placeholder="password"></td></tr>
            <tr><td><input type="submit" value="Create" name="enviar"></td></tr>
            
        </table>      
    </form>

    <p><a href="form.php">Si quieres iniciar sesion haz click aqui</a></p>

</body>
</html>