<?php
include_once "crud_php/conexao_cadastro.php";

$dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);

// avalidar
//editar esse conteudo hj 
// var dadosForm = "id=" + id + "&nome=" + nome_valor + "&cpf=" + cpf_valor 
// + "&placa=" + placa_valor + "&email=" + email_valor + "&telefone=" + telefone_valor;
//fim
if(empty($dados['id'])){
    $retorna = ['status' => false, 'msg' => "<div class='alert alert-danger' role='alert'>Alera esta com ERRRO Enviar o ID!</div>"];
}elseif (empty($dados['nome'])){
    $retorna = ['status' => false, 'msg' => "<div class='alert alert-danger' role='alert'>Alera esta com ERRRO Enviar o Nome!</div>"];
}elseif (empty($dados['email'])){
    $retorna = ['status' => false, 'msg' => "<div class='alert alert-danger' role='alert'>Alera esta com ERRRO Enviar o Email!</div>"];

}elseif (empty($dados['senha'])){
    $retorna = ['status' => false, 'msg' => "<div class='alert alert-danger' role='alert'>Alera esta com ERRRO Enviar a Senha!</div>"];

}elseif (empty($dados['telefone'])){
    $retorna = ['status' => false, 'msg' => "<div class='alert alert-danger' role='alert'>Alera esta com ERRRO Enviar o Telefone!</div>"];
}else{
    // depois da avalidação sera add no banco de dados 
    $query_telefone = "UPDATE tb_telefone SET cd_numero1=:telefone 
    WHERE cd_telefone=:id";
    $edit_telefone = $conn->prepare($query_telefone);
    $edit_telefone->bindParam(':telefone', $dados['telefone']);
    $edit_telefone->bindParam(':id', $dados['id']);

    if($edit_telefone->execute()){
    $query_usuario = "UPDATE tb_cliente SET nm_cliente=:nome, cd_email_cliente=:email, cd_senha_cliente=:senha 
    WHERE cd_cliente=:id";
    $edit_usuario = $conn->prepare($query_usuario);
    $edit_usuario->bindParam(':nome', $dados['nome']);
    $edit_usuario->bindParam(':email', $dados['email']);
    $edit_usuario->bindParam(':senha', $dados['senha']);
    $edit_usuario->bindParam(':id', $dados['id']);

        if($edit_usuario->execute()){
            $retorna = ['status' => true, 'msg' => "<div class='alert alert-success' role='alert'>Atualizado com Sucesso!</div>"];
    
        }else{
            $retorna = ['status' => false, 'msg' => "<div class='alert alert-danger' role='alert'>Erro na Atualização</div>"];
    
        }
        
    }    // avalidar se foi registrado no banco de dados com sucesso
    if($edit_usuario->execute()){
        $retorna = ['status' => true, 'msg' => "<div class='alert alert-success' role='alert'>Atualizado com Sucesso!</div>"];

    }else{
        $retorna = ['status' => false, 'msg' => "<div class='alert alert-danger' role='alert'>Erro na Atualização</div>"];

    }

    

}



echo json_encode($retorna);