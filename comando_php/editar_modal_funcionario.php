<?php
session_start();
 // colocar, pq que hora do RELATORIO ATIVIDADE FUNCIONA

include_once "crud_php/conexao_cadastro.php";

$dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);
//$id = $dados['id'];

// teste da tabela "Relatorio atividade criando uma variavel"
$acao_Relatorio_Atividade = 'UPDATE';

if($acao_Relatorio_Atividade  == 'DELETE'){
    $img_icon ="img/relatorio_delete.png";
}else{if($acao_Relatorio_Atividade  == 'UPDATE'){
    $img_icon ="img/relatorio_update.png";
}else{if($acao_Relatorio_Atividade  == 'CADASTRO'){
    $img_icon ="img/relatorio_cadastro.png";
}else{if($acao_Relatorio_Atividade  == 'INSERT'){
    $img_icon ="img/relatorio_insert.png";
}else{}
}}}
$nm_origem ='EDITADO MODAL';

// teste

if(empty($dados['cd_funcionario'])){
    $retorna = ['status' => false, 'msg' => "<div class='alert alert-danger' role='alert'>Alera esta com ERRRO Enviar o ID!</div>"];
}elseif (empty($dados['nm_nome'])){
    $retorna = ['status' => false, 'msg' => "<div class='alert alert-danger' role='alert'>Alera esta com ERRRO Enviar o Nome!</div>"];
// }elseif (empty($dados['cd_cpf'])){
//     $retorna = ['status' => false, 'msg' => "<div class='alert alert-danger' role='alert'>Alera esta com ERRRO Enviar o CPF!</div>"];

// }elseif (empty($dados['cd_numero1'])){
//     $retorna = ['status' => false, 'msg' => "<div class='alert alert-danger' role='alert'>Alera esta com ERRRO Enviar o TELEFONE!</div>"];

// }elseif (empty($dados['cd_email_cliente'])){
//     $retorna = ['status' => false, 'msg' => "<div class='alert alert-danger' role='alert'>Alera esta com ERRRO Enviar o EMAIL!</div>"];

// }elseif (empty($dados['nm_bairro'])){
//     $retorna = ['status' => false, 'msg' => "<div class='alert alert-danger' role='alert'>Alera esta com ERRRO Enviar o BAIRRO!</div>"];

// }elseif (empty($dados['nm_cidade'])){
//     $retorna = ['status' => false, 'msg' => "<div class='alert alert-danger' role='alert'>Alera esta com ERRRO Enviar a CIDADE!</div>"];

// }elseif (empty($dados['sg_uf'])){
//     $retorna = ['status' => false, 'msg' => "<div class='alert alert-danger' role='alert'>Alera esta com ERRRO Enviar o ESTADO!</div>"];

// }elseif (empty($dados['cd_placa'])){
//     $retorna = ['status' => false, 'msg' => "<div class='alert alert-danger' role='alert'>Alera esta com ERRRO Enviar a PLACA!</div>"];
    
// }elseif (empty($dados['nm_modelo'])){
//     $retorna = ['status' => false, 'msg' => "<div class='alert alert-danger' role='alert'>Alera esta com ERRRO Enviar o MODELO</div>"];

// }elseif (empty($dados['nm_marca'])){
//     $retorna = ['status' => false, 'msg' => "<div class='alert alert-danger' role='alert'>Alera esta com ERRRO Enviar a MARCA!</div>"];

// }elseif (empty($dados['nm_cor'])){
//     $retorna = ['status' => false, 'msg' => "<div class='alert alert-danger' role='alert'>Alera esta com ERRRO Enviar a COR!</div>"];
}else{
    // depois da avalidação sera add no banco de dados 
 
     //Relatorio de atividade
     $query_relatorio_atividade = "INSERT INTO tb_relatorio_atividade (nm_nome_acao, nm_origem, nm_funcionario, cd_funcionario, dt_hora, dt_data, img_icon )
     VALUES (:nm_nome_acao, :nm_origem, :nm_funcionario, :cd_funcionario, :dt_hora, :dt_data, :img_icon)";
     $cadastrar_relatorio_atividade = $conn->prepare($query_relatorio_atividade);
     $cadastrar_relatorio_atividade->bindParam(':nm_nome_acao',  $acao_Relatorio_Atividade);
     $cadastrar_relatorio_atividade->bindParam(':nm_origem', $nm_origem);
     $cadastrar_relatorio_atividade->bindParam(':nm_funcionario', $func_Relat_Ativ);
     $cadastrar_relatorio_atividade->bindParam(':cd_funcionario', $cd_funcionario);
     $cadastrar_relatorio_atividade->bindParam(':dt_hora', $horasRelatorio);
     $cadastrar_relatorio_atividade->bindParam(':dt_data', $dataRelatorio);
     $cadastrar_relatorio_atividade->bindParam(':img_icon', $img_icon);
     $cadastrar_relatorio_atividade->execute();
    
     //fim

    $query_funcionario = "UPDATE tb_funcionario SET nm_nome=:nome  WHERE cd_credencial=:id";
    $cadastrar_funcionario = $conn->prepare($query_funcionario);
    $cadastrar_funcionario->bindParam(':nome', $dados['nm_nome']);
    $cadastrar_funcionario->bindParam(':id', $dados['cd_funcionario']);
    
    if($cadastrar_funcionario->execute()){
        $retorna = ['status' => true, 'msg' => "<div class='alert alert-success' role='alert'>Atualizado com Sucesso!</div>"];
        
            }else{
                $retorna = ['status' => false, 'msg' => "<div class='alert alert-danger' role='alert'>Erro na Atualização</div>"];
        
            }
           
    }

echo json_encode($retorna);