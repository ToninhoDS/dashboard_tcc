<?php

$host = "localhost";
$user = "root";
$pass = "acgsB07";
$dbname = "db_tcc_estacionamento1";
$port = 3306;

try{
    //Conexão com a porta
    $conn = new PDO("mysql:host=$host;port=$port;dbname=" . $dbname, $user, $pass);

    //Conexão sem a porta
    //$conn = new PDO("mysql:host=$host;dbname=" . $dbname, $user, $pass);

 //echo "Conexão com banco de dados realizado com sucesso!</br>"; /*tirar // para ver a conexao*/ 
}  catch(PDOException $err){
    echo "Erro: Conexão com banco de dados não foi realizada com sucesso. Erro gerado " . $err->getMessage();
}


