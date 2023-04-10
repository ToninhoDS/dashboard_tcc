<?php
include_once "crud_php/conexao_cadastro.php";

$dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);


if(empty($dados['id'])){
    $retorna = ['status' => false, 'msg' => "<div class='alert alert-danger' role='alert'>Alera esta com ERRRO Enviar o ID!</div>"];
}elseif (empty($dados['nome'])){
    $retorna = ['status' => false, 'msg' => "<div class='alert alert-danger' role='alert'>Alera esta com ERRRO Enviar o Nome!</div>"];
}elseif (empty($dados['cpf'])){
    $retorna = ['status' => false, 'msg' => "<div class='alert alert-danger' role='alert'>Alera esta com ERRRO Enviar o CPF!</div>"];

}elseif (empty($dados['placa'])){
    $retorna = ['status' => false, 'msg' => "<div class='alert alert-danger' role='alert'>Alera esta com ERRRO Enviar a placa!</div>"];

}elseif (empty($dados['email'])){
    $retorna = ['status' => false, 'msg' => "<div class='alert alert-danger' role='alert'>Alera esta com ERRRO Enviar o EMAIL!</div>"];
}elseif (empty($dados['telefone'])){
    $retorna = ['status' => false, 'msg' => "<div class='alert alert-danger' role='alert'>Alera esta com ERRRO Enviar o TELEFONE!</div>"];
}else{
    // depois da avalidação sera add no banco de dados 
    $query_telefone = "UPDATE tb_telefone SET cd_numero1=:telefone 
    WHERE cd_telefone=:id";
    $edit_telefone = $conn->prepare($query_telefone);
    $edit_telefone->bindParam(':telefone', $dados['telefone']);
    $edit_telefone->bindParam(':id', $dados['id']);

    if($edit_telefone->execute()){
    $query_usuario = "UPDATE tb_cliente SET nm_cliente=:nome, cd_email_cliente=:email 
    WHERE cd_cliente=:id";
    $edit_usuario = $conn->prepare($query_usuario);
    $edit_usuario->bindParam(':nome', $dados['nome']);
    $edit_usuario->bindParam(':email', $dados['email']);
    $edit_usuario->bindParam(':id', $dados['id']);
        
    if($edit_usuario->execute()){
        $query_pessoa_fisica = "UPDATE tb_pessoa_fisica SET cd_cpf=:cpf
        WHERE cd_pessoa_fisica=:id";
        $edit_pessoa_fisica = $conn->prepare($query_pessoa_fisica);
        $edit_pessoa_fisica->bindParam(':cpf', $dados['cpf']);
        $edit_pessoa_fisica->bindParam(':id', $dados['id']);

        if($edit_pessoa_fisica->execute()){
            $query_veiculo = "UPDATE tb_veiculo SET cd_placa=:placa
            WHERE tb_veiculo=:id";
            $edit_veiculo = $conn->prepare($query_veiculo);
            $edit_veiculo->bindParam(':cpf', $dados['placa']);
            $edit_veiculo->bindParam(':id', $dados['id']);
        
                if($edit_veiculo->execute()){
                    $retorna = ['status' => true, 'msg' => "<div class='alert alert-success' role='alert'>Atualizado com Sucesso!</div>"];
            
                }else{
                    $retorna = ['status' => false, 'msg' => "<div class='alert alert-danger' role='alert'>Erro na Atualização</div>"];
            
                }
            if($edit_veiculo->execute()){
                $retorna = ['status' => true, 'msg' => "<div class='alert alert-success' role='alert'>Atualizado com Sucesso!</div>"];
        
            }else{
                $retorna = ['status' => false, 'msg' => "<div class='alert alert-danger' role='alert'>Erro na Atualização</div>"];
        
            }
        if($edit_veiculo->execute()){
            $retorna = ['status' => true, 'msg' => "<div class='alert alert-success' role='alert'>Atualizado com Sucesso!</div>"];
    
        }else{
            $retorna = ['status' => false, 'msg' => "<div class='alert alert-danger' role='alert'>Erro na Atualização</div>"];
    
        }
        
    }    // avalidar se foi registrado no banco de dados com sucesso
    if($edit_veiculo->execute()){
        $retorna = ['status' => true, 'msg' => "<div class='alert alert-success' role='alert'>Atualizado com Sucesso!</div>"];

    }else{
        $retorna = ['status' => false, 'msg' => "<div class='alert alert-danger' role='alert'>Erro na Atualização</div>"];

    

    }
}
    }   
}

    


echo json_encode($retorna);