<?php
include 'insercao_de_dados_na_tabela.php';
$serrvername = "localhost";
$username = "root";
$password = "RFRC04111994";
$dbname = "ipvx";

try{
    $conn = new PDO("mysql:host=$serrvername;dbname=$dbname",$username,$password);
    $conn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conn -> exec($sql);
}catch(PDOException $e){
    $sql."<br>".$e->getMessage();
}
$conn = null;
?>