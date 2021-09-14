<?php 

$host = "localhost";
$user = "root";
$password = "";
$database = "login";


try {
    $base = new PDO("mysql:host=$host;dbname=$database",$user,$password);
    $base->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO users(user,password)VALUES(:login,:password)";
    $resultado = $base->prepare($sql);

    $login = htmlentities(addslashes($_POST["login"]));
    $password = htmlentities(addslashes($_POST["password"]));

    $resultado->bindValue(":login",$login);
    $resultado->bindValue(":password",$password);

    $resultado->execute();

    $numero_registro = $resultado->rowCount();

    if($numero_registro != 0){
        echo "Usuario creado exitosamente";
    }else {
        echo "Datos erroneos";

    }

    

} catch (Exception $e) {
    die("Error " . $e->getMessage());
}