<?php
include_once "crud_php/conexao_cadastro.php";

$dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);
// $dados['id'] = '2';
// $dados['nome'] = 'teste';
// $dados['email'] = '123456';
// $dados['senha'] = '18:08';
//  $dados['status_vagas'] = 'ocupado';

// testes para retorna os dados se foi
//$retorna = ['status' => false, 'id' => $dados['id']];
 //var_dump('ddd',$dados);
//avalidar

        
        $query_vagas_livres = "UPDATE tb_status_vagas SET nm_nome=:nome_vaga, img_icon=:img_vaga, dt_entrada=:entrada_vaga, sg_placa=:placa_vaga, cd_cpf=:cpf_vaga, nm_status=:status_vaga
        WHERE cd_status_vagas=:id";
        $edit_vagas_livres = $conn->prepare($query_vagas_livres);
        $edit_vagas_livres->bindParam(':nome_vaga', $dados['nome_vagas']);
        $edit_vagas_livres->bindParam(':cpf_vaga', $dados['cpf_vagas']);
        $edit_vagas_livres->bindParam(':img_vaga', $dados['img_vagas']);
        $edit_vagas_livres->bindParam(':placa_vaga', $dados['placa_vagas']);
        $edit_vagas_livres->bindParam(':entrada_vaga', $dados['entrada_vagas']);
        $edit_vagas_livres->bindParam(':status_vaga', $dados['status_vagas']);
        $edit_vagas_livres->bindParam(':id', $dados['id']);
    
            if($edit_vagas_livres->execute()){
                $retorna = ['status' => true, 'msg' => "<div class='alert alert-success' role='alert'>Atualizado com Sucesso!</div>"];
        
            }else{
                $retorna = ['status' => false, 'msg' => "<div class='alert alert-danger' role='alert'>Erro na Atualização</div>"];
        
            }
            
            // avalidar se foi registrado no banco de dados com sucesso
    




echo json_encode($retorna);