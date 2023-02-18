<?php
//iniciar a sessao
session_start();
// incluir variavel global


//limpar o buffer de saida
ob_start();
//conexao com banco de dados
include_once "conexao_cadastro.php";


// vai receber os dados
$nm_cliente = $_GET['nm_cliente'];
$cd_email_cliente = $_GET['cd_email_cliente'];
$cd_cpf	= $_GET['cd_cpf'];

//    tabela cliente

// fim

    // tabela UF
    
      $sql= 'INSERT INTO teste01 (cd_email, cd_login, nm_cliente) 
      VALUES ('. "'" . $nm_cliente ."'" . ',' ."'" . $cd_email_cliente . "'" . ',' ."'" . $cd_cpf. "'" . ')';
      //finalizar insert nessa tabela
      
     
      // iniciar codigo que vai pegar Id dessa tabela
      
       
  





if($conn->query($sql) === TRUE){
    //criar a variavel global para salvar a mensagem de sucesso    
    $_SESSION['msg'] = '<div class="alert alert-success" style="text-align: center;font-size:40px" role="alert">
    "Usuário Cadastrado com sucesso!!!
  </div>';
    //Redirecionar o Usuário
    header("Location: index.php");
  
 }else{
 //criar a variavel global para salvar a mensagem de sucesso    
 $_SESSION['msg'] = '<div class="alert alert-danger" style="text-align: center;font-size:40px" role="alert">
 "Usuário Cadastrado com sucesso!!!
</div>';
 //Redirecionar o Usuário
 header("Location: form-validation.php").$sql . "<br>" . $conn->error;
}


$conn->close();

