<?php

    $dbHost = "localhost";
    $dbUsername = 'root';
    $dbPassword = '123victorpr';
    $dbName = 'formulario_banco';
    $SERVIDOR = "mysql:host=localhost;dbname=".$dbName.";charset=utf8"; 

    $conexao = new PDO($SERVIDOR, $dbUsername, $dbPassword);

    
?>