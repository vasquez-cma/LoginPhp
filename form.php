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
    <form action="login.php" method="post">
        <h1>Login</h1>
        <table>
            <tr><td><input type="text" name="user" placeholder="user"></td></tr>
            <tr><td><input type="password" name="password" placeholder="password"></td></tr>
            <tr><td><input type="submit" value="Login" name="enviar"></td></tr>
        </table>
    </form>
</body>
</html>