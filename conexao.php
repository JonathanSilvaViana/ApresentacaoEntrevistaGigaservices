<?php

$DB_HOST = 'localhost';
$DB_USER = 'root';
$DB_PASS = '';
$DB_NAME = 'apresentacao';
$sucesso = "sucesso!";
$falha = "falhou";

//o print das variáveis estão comentadas devido serem apenas para finalidade de teste de conexão no banco de dados.

try{



    $DB_con = new PDO("mysql:host={$DB_HOST};dbname={$DB_NAME}",$DB_USER,$DB_PASS);
    $DB_con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    #print $sucesso;
}
catch(PDOException $e){
    #print $falha;
    echo $e->getMessage();
}