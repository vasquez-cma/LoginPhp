<?php 

$localhost = "localhost";
$user = "root";
$database = "login";
$password = "";

try {
    $base = new PDO("mysql:host=$localhost;dbname=$database",$user,$password);
    $base->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    $sql = "SELECT USER,PASSWORD FROM users WHERE USER = :login AND PASSWORD = :password";
    $resultado = $base->prepare($sql);

    $login = htmlentities(addslashes($_POST["login"]));
    $password = htmlentities(addslashes($_POST["password"]));

    $resultado->bindValue(":login",$login);
    $resultado->bindValue(":password",$password);

    $resultado->execute();

    $numeroRegistro = $resultado->rowCount();

    if($numeroRegistro != 0){
        session_start();

        $_SESSION["user"] = $_POST["login"];

        header("Location: usuarios.php");
    }else{
        echo "Ha habido un error";
    }


} catch (Exception $e) {
    die("Error " . $e->getLine());
}
