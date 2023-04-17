<?php
include_once "crud_php/conexao_cadastro.php";
session_start();
$dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);
//$id = $dados['id'];
if(empty($dados['cd_cliente'])){
    $retorna = ['status' => false, 'msg' => "<div class='alert alert-danger' role='alert'>Alera esta com ERRRO Enviar o ID!</div>"];
}elseif (empty($dados['nm_cliente'])){
    $retorna = ['status' => false, 'msg' => "<div class='alert alert-danger' role='alert'>Alera esta com ERRRO Enviar o Nome!</div>"];
}elseif (empty($dados['cd_cpf'])){
    $retorna = ['status' => false, 'msg' => "<div class='alert alert-danger' role='alert'>Alera esta com ERRRO Enviar o CPF!</div>"];

}elseif (empty($dados['cd_numero1'])){
    $retorna = ['status' => false, 'msg' => "<div class='alert alert-danger' role='alert'>Alera esta com ERRRO Enviar o TELEFONE!</div>"];

}elseif (empty($dados['cd_email_cliente'])){
    $retorna = ['status' => false, 'msg' => "<div class='alert alert-danger' role='alert'>Alera esta com ERRRO Enviar o EMAIL!</div>"];

}elseif (empty($dados['nm_bairro'])){
    $retorna = ['status' => false, 'msg' => "<div class='alert alert-danger' role='alert'>Alera esta com ERRRO Enviar o BAIRRO!</div>"];

}elseif (empty($dados['nm_cidade'])){
    $retorna = ['status' => false, 'msg' => "<div class='alert alert-danger' role='alert'>Alera esta com ERRRO Enviar a CIDADE!</div>"];

}elseif (empty($dados['sg_uf'])){
    $retorna = ['status' => false, 'msg' => "<div class='alert alert-danger' role='alert'>Alera esta com ERRRO Enviar o ESTADO!</div>"];

}elseif (empty($dados['cd_placa'])){
    $retorna = ['status' => false, 'msg' => "<div class='alert alert-danger' role='alert'>Alera esta com ERRRO Enviar a PLACA!</div>"];
    
}elseif (empty($dados['nm_modelo'])){
    $retorna = ['status' => false, 'msg' => "<div class='alert alert-danger' role='alert'>Alera esta com ERRRO Enviar o MODELO</div>"];

}elseif (empty($dados['nm_marca'])){
    $retorna = ['status' => false, 'msg' => "<div class='alert alert-danger' role='alert'>Alera esta com ERRRO Enviar a MARCA!</div>"];

}elseif (empty($dados['nm_cor'])){
    $retorna = ['status' => false, 'msg' => "<div class='alert alert-danger' role='alert'>Alera esta com ERRRO Enviar a COR!</div>"];
}else{
    // depois da avalidação sera add no banco de dados 
    $query_cliente = " UPDATE tb_cliente SET nm_cliente=:nome, cd_email_cliente=:email WHERE cd_cliente=:id";
    $edit_cliente = $conn->prepare($query_cliente);
    $edit_cliente->bindParam(':nome', $dados['nm_cliente']);
    $edit_cliente->bindParam(':email', $dados['cd_email_cliente']);
    $edit_cliente->bindParam(':id', $dados['cd_cliente']);
    $edit_cliente->execute();

    $query_telefone = "UPDATE tb_telefone SET cd_numero1=:telefone  WHERE cd_telefone=:id";   
    $cadastrar_telefone= $conn->prepare($query_telefone);
    $cadastrar_telefone->bindParam(':telefone', $dados['cd_numero1']);
    $cadastrar_telefone->bindParam(':id', $dados['cd_cliente']);
    $cadastrar_telefone->execute();

    $query_sg_uf = "UPDATE tb_uf SET sg_uf=:uf  WHERE cd_uf=:id";
    $cadastrar_sg_uf= $conn->prepare($query_sg_uf);
    $cadastrar_sg_uf->bindParam(':uf',$dados['sg_uf']);
    $cadastrar_sg_uf->bindParam(':id', $dados['cd_cliente']);
    $cadastrar_sg_uf->execute();
    

    $query_cidade = "UPDATE tb_cidade SET nm_cidade=:cidade WHERE cd_cidade=:id";
    $cadastrar_cidade= $conn->prepare($query_cidade);
    $cadastrar_cidade->bindParam(':cidade',  $dados['nm_cidade']); 
    $cadastrar_cidade->bindParam(':id', $dados['cd_cliente']);
    $cadastrar_cidade->execute();
 
    $query_bairro = "UPDATE tb_bairro SET nm_bairro=:bairro WHERE cd_bairro=:id";
    $cadastrar_bairro= $conn->prepare($query_bairro);
    $cadastrar_bairro->bindParam(':bairro', $dados['nm_bairro']);
    $cadastrar_bairro->bindParam(':id', $dados['cd_cliente']);
    $cadastrar_bairro->execute();
   // DADOS DO CARRO
    $query_marca = "UPDATE tb_marca SET nm_marca=:marca WHERE cd_marca=:id";
    $cadastrar_marca = $conn->prepare($query_marca);
    $cadastrar_marca->bindParam(':marca', $dados['nm_marca']);
    $cadastrar_marca->bindParam(':id', $dados['cd_cliente']);
    $cadastrar_marca->execute();
   
    
    $query_modelo = "UPDATE tb_modelo SET nm_modelo=:modelo WHERE cd_modelo=:id";
    $cadastrar_modelo = $conn->prepare($query_modelo);
    $cadastrar_modelo->bindParam(':modelo', $dados['nm_modelo']);
    $cadastrar_modelo->bindParam(':id', $dados['cd_cliente']);
    $cadastrar_modelo->execute();
    
    $query_veiculo = "UPDATE tb_veiculo SET cd_placa=:placa WHERE cd_veiculo=:id";
    $cadastrar_veiculo = $conn->prepare($query_veiculo);
    $cadastrar_veiculo->bindParam(':placa', $dados['cd_placa']);
    $cadastrar_veiculo->bindParam(':id', $dados['cd_cliente']);
    $cadastrar_veiculo->execute();
    
    $query_pessoa_fisica = "UPDATE tb_pessoa_fisica SET cd_cpf=:cpf WHERE cd_pessoa_fisica=:id";
    $cadastrar_pessoa_fisica= $conn->prepare($query_pessoa_fisica);
    $cadastrar_pessoa_fisica->bindParam(':cpf', $dados['cd_cpf']);
    $cadastrar_pessoa_fisica->bindParam(':id', $dados['cd_cliente']);
    $cadastrar_pessoa_fisica->execute();

    $query_cor = "UPDATE tb_cor SET nm_cor=:cor WHERE cd_cor=:id";
    $cadastrar_cor = $conn->prepare($query_cor);
    $cadastrar_cor->bindParam(':cor', $dados['nm_cor']);
    $cadastrar_cor->bindParam(':id', $dados['cd_cliente']);
    
    if($cadastrar_cor->execute()){
        $retorna = ['status' => true, 'msg' => "<div class='alert alert-success' role='alert'>Atualizado com Sucesso!</div>"];
        
            }else{
                $retorna = ['status' => false, 'msg' => "<div class='alert alert-danger' role='alert'>Erro na Atualização</div>"];
        
            }
           
    }

echo json_encode($retorna);