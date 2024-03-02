<?php

$servername = "localhost";
$username = "root";
$password = "RFRC04111994";
$dbname = "ipvx";

try{
$conn = new PDO ("mysql:host=localhost;dbname=ipvx",$username, $password);
$conn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$sql = "SHOW COLUMNS FROM usuarios LIKE 'email'";
$stmt = $conn -> prepare($sql);
$stmt -> execute();
$column = $stmt -> fetch();

if ($column){
    $sql = "ALTER TABLE usuarios ADD CONSTRAINT UNIQUE (email)";
    $conn -> exec($sql);
    echo "Adicionada a restricao a coluna email.";
    }
    else{
    echo "A coluna email nao existe na tabela ipvx.";
    }

}catch(PDOException $e){
    echo "Erro ao adicionar restricao a coluna email". $e-> getMessage();
}
$conn=null;

?>