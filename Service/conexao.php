<?php 
// $host = 'sql112.infinityfree.com';
// $data_base = 'if0_37799656_volleyball_center';
// $porta = 3306;
// $user = 'if0_37799656';
// $pass = '0fOZwkvQB8t';

$host = 'localhost';
$data_base = 'volleyball_center';
$porta = 3306;
$user = 'root';
$pass = '';

try {
    $conn = new PDO("mysql:host=$host;port=$porta;dbname=$data_base;charset=utf8", $user, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e){
    echo 'Erro na conexão com o banco de dados: ' . $e->getMessage();
    exit;
}