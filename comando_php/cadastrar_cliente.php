<?php

session_start();
ob_start();
include_once "crud_php/conexao_cadastro.php";

$dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);
//avaliar se recebir os dados
var_dump($dados);

// criar uma variavel fazia para não da erro, corrigir no banco
 $null = '';

if(empty($dados['id'])){
    
    // depois da avalidação sera add no banco de dados 
    $query_cliente =    "INSERT INTO tb_cliente (cd_email_cliente, cd_senha_cliente, nm_cliente) 
                        VALUES (:cd_email_cliente, :cd_senha_cliente, :nm_cliente)";

    $cadastrar_cliente = $conn->prepare($query_cliente);
    $cadastrar_cliente->bindParam(':cd_email_cliente', $dados['cd_email_cliente'], PDO::PARAM_STR);
    $cadastrar_cliente->bindParam(':cd_senha_cliente', $dados['cd_senha_cliente']);
    $cadastrar_cliente->bindParam(':nm_cliente', $dados['nm_cliente'], PDO::PARAM_STR);
    $cadastrar_cliente->execute(); // para execultar 
    var_dump($conn->lastInsertId()); //puxar o id
    $id_cliente = $conn->lastInsertId();

    $query_telefone = "INSERT INTO tb_telefone (cd_numero1, cd_cliente)
    VALUES (:cd_numero1, :cd_cliente)";
    $cadastrar_telefone= $conn->prepare($query_telefone);
    $cadastrar_telefone->bindParam(':cd_numero1', $dados['cd_numero1'], PDO::PARAM_STR);
    $cadastrar_telefone->bindParam(':cd_cliente', $id_cliente, PDO::PARAM_INT);
    $cadastrar_telefone->execute();
    $id_telefone = $conn->lastInsertId();

    // vou precisar puxar outros insert para fazer da pessoa fisica
    $query_bairro = "INSERT INTO tb_bairro (nm_bairro, cd_cidade)
    VALUES (:nm_bairro, :cd_cidade)";
    $cadastrar_bairro= $conn->prepare($query_bairro);
    $cadastrar_bairro->bindParam(':nm_bairro',  $null, PDO::PARAM_STR);
    $cadastrar_bairro->bindParam(':cd_cidade', $cd_cidade, PDO::PARAM_INT);
    $cadastrar_bairro->execute();
    $id_bairro = $conn->lastInsertId();
    
    $query_cidade = "INSERT INTO tb_cidade (nm_cidade, cd_uf)
    VALUES (:nm_cidade, :cd_uf)";
    $cadastrar_cidade= $conn->prepare($query_cidade);
    $cadastrar_cidade->bindParam(':nm_cidade',  $null, PDO::PARAM_STR);
    $cadastrar_cidade->bindParam(':cd_uf', $id_sg_uf, PDO::PARAM_INT);
    $cadastrar_cidade->execute();
    $id_cidade = $conn->lastInsertId();

    $query_sg_uf = "INSERT INTO tb_uf (sg_uf)
    VALUES (:sg_uf)";
    $cadastrar_sg_uf= $conn->prepare($query_sg_uf);
    $cadastrar_sg_uf->bindParam(':sg_uf',  $null, PDO::PARAM_STR);
    $cadastrar_cidade->execute();
    $id_sg_uf = $conn->lastInsertId();

    $query_pessoa_fisica = "INSERT INTO tb_pessoa_fisica (cd_cpf, cd_cliente, cd_bairro)
    VALUES (:cd_cpf, :cd_cliente, :cd_bairro )";
    $cadastrar_pessoa_fisica= $conn->prepare($query_pessoa_fisica);
    $cadastrar_pessoa_fisica->bindParam(':cd_cpf', $dados['cd_cpf'], PDO::PARAM_STR);
    $cadastrar_pessoa_fisica->bindParam(':cd_cliente', $id_cliente, PDO::PARAM_INT);
    $cadastrar_pessoa_fisica->bindParam(':cd_bairro', $id_bairro, PDO::PARAM_INT);
    $cadastrar_pessoa_fisica->execute();
    $id_pessoa_fisica = $conn->lastInsertId();




    }else{
        echo 'erro';

    }

    














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


 




