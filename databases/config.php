<?php
$bdHost = 'localhost';
$bdName = 'cursophp';
$bdUser = 'root';
$dbPass = '';
//Capturamos si existe una excepcion.
try{
    $pdo = new pdo("mysql:hots=$bdHost;dbname=$bdName",$bdUser,$dbPass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch (Exception $e) {
    echo 'Error :' . $e->getMessage();
}

