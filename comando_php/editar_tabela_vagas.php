<?php
include_once "crud_php/conexao_cadastro.php";

$dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);
// $dados['id'] = '2';
// $dados['nome'] = 'teste';
// $dados['email'] = '123456';
// $dados['senha'] = '18:08';
//  $dados['status_vagas'] = 'ocupado';

// testes para retorna os dados se foi
// $retorna = ['status' => false, 'id' => $dados['id']];
// var_dump('ddd',$dados);
//avalidar
if($dados['status_vagas'] == 'ocupado' || $dados['status_vagas'] == 'reserva'){
    if(empty($dados['id'])){
        $retorna = ['status' => false, 'msg' => "<div class='alert alert-danger' role='alert'>Alera esta com ERRRO Enviar o ID!</div>"];
        
    }elseif (empty($dados['nome'])){
        $retorna = ['status' => false, 'msg' => "<div class='alert alert-danger' role='alert'>Alera esta com ERRRO Enviar o Nome!</div>"];
    }elseif (empty($dados['email'])){
        $retorna = ['status' => false, 'msg' => "<div class='alert alert-danger' role='alert'>Alera esta com ERRRO Numero da Placa!</div>"];
    
    }elseif (empty($dados['senha'])){
        $retorna = ['status' => false, 'msg' => "<div class='alert alert-danger' role='alert'>Alera esta com ERRRO Enviar a Senha!</div>"];
    
    }elseif (empty($dados['status_vagas'])){
        $retorna = ['status' => false, 'msg' => "<div class='alert alert-danger' role='alert'>Alera esta com ERRRO Enviar o Telefone!</div>"];
    }else{
        
    
        
        $query_vagas_livres = "UPDATE tb_status_vagas SET nm_nome=:nome_vaga, dt_entrada=:entrada_vaga, sg_placa=:placa_vaga, nm_status=:status_vaga
        WHERE cd_status_vagas=:id";
        $edit_vagas_livres = $conn->prepare($query_vagas_livres);
        $edit_vagas_livres->bindParam(':nome_vaga', $dados['nome']);
        $edit_vagas_livres->bindParam(':placa_vaga', $dados['email']);
        $edit_vagas_livres->bindParam(':entrada_vaga', $dados['senha']);
        $edit_vagas_livres->bindParam(':status_vaga', $dados['status_vagas']);
        $edit_vagas_livres->bindParam(':id', $dados['id']);
    
            if($edit_vagas_livres->execute()){
                $retorna = ['status' => true, 'msg' => "<div class='alert alert-success' role='alert'>Atualizado com Sucesso!</div>"];
        
            }else{
                $retorna = ['status' => false, 'msg' => "<div class='alert alert-danger' role='alert'>Erro na Atualização</div>"];
        
            }
            
            // avalidar se foi registrado no banco de dados com sucesso
        
    
        
    
    }
    // se nao colocar vaga livre vai ter que preencher 
}else{
    $query_vagas_livres = "UPDATE tb_status_vagas SET nm_nome=:nome_vaga, dt_entrada=:entrada_vaga, sg_placa=:placa_vaga, nm_status=:status_vaga
        WHERE cd_status_vagas=:id";
        $edit_vagas_livres = $conn->prepare($query_vagas_livres);
        $edit_vagas_livres->bindParam(':nome_vaga', $dados['nome']);
        $edit_vagas_livres->bindParam(':placa_vaga', $dados['email']);
        $edit_vagas_livres->bindParam(':entrada_vaga', $dados['senha']);
        $edit_vagas_livres->bindParam(':status_vaga', $dados['status_vagas']);
        $edit_vagas_livres->bindParam(':id', $dados['id']);
    
            if($edit_vagas_livres->execute()){
                $retorna = ['status' => true, 'msg' => "<div class='alert alert-success' role='alert'>Atualizado com Sucesso!</div>"];
        
            }else{
                $retorna = ['status' => false, 'msg' => "<div class='alert alert-danger' role='alert'>Erro na Atualização</div>"];
        
            }
            
            // avalidar se foi registrado no banco de dados com sucesso
}




echo json_encode($retorna);