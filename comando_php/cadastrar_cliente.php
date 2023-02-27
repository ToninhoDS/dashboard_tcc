<?php

session_start();
ob_start();
include_once "crud_php/conexao_cadastro.php";

$dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);
//avaliar se recebir os dados
var_dump($dados);

   








// if($conn->query($sql) === TRUE){
//     //criar a variavel global para salvar a mensagem de sucesso    
//     $_SESSION['msg'] = '<div class="alert alert-success" style="text-align: center;font-size:40px" role="alert">
//     "Usuário Cadastrado com sucesso!!!
//   </div>';
//     //Redirecionar o Usuário
//     header("Location: form-validation.php");
  
//  }else{
//  //criar a variavel global para salvar a mensagem de sucesso    
//  $_SESSION['msg'] = '<div class="alert alert-danger" style="text-align: center;font-size:40px" role="alert">
//  "Usuário Cadastrado com sucesso!!!
// </div>';
//  //Redirecionar o Usuário
//  header("Location: form-validation.php").$sql . "<br>" . $conn->error;
// }


// $conn->close();


 




