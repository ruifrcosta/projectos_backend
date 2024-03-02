<?php
include 'criaca_de_tabela.php';
$servername = "localhost";
$username = "root";
$password = "RFRC04111994";
$dbname = "ipvx";

try{
    $conn = new PDO("mysql:host=$servername;dbname=$dbname",$username,$password);
    $conn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conn -> exec($sql);
}catch(PDOException $e){
    echo $sql."<br>".$e -> getMessage();
}
$conn = null;
?>