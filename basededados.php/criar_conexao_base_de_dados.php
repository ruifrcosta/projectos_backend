<?php
$serrvername= "localhost";
$username = "root";
$password = "RFRC04111994";
try{
    $conn = new PDO("mysql:host=$serrvername", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "CREATE DATABASE ipvx";
    $conn -> exec ($sql);
    echo "Base de dados criada com sucesso";
}catch (PDOException $e){
    echo "Falha na conexao:" . $e->getMessage();
}
$conn = null;
?>