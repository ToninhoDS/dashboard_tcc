<?php

session_start();
ob_start();

include_once "crud_php/conexao_cadastro.php";

$dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);

 //echo var_dump($dados);

//deixar o nome tudo maiuscula
$nm_cargo = $dados['nm_cargo'];
$nm_cargo =strtoupper($nm_cargo );
$nm_nomeFuncionario = $dados['nm_nome'];
$nm_cargo =strtoupper($nm_cargo );
$sg_uf = $dados['sg_uf'];
$sg_uf =strtoupper($sg_uf );
// $nome_Funcionario = $dados['nm_nome'];
// $nome_Funcionario =strtoupper($nome_Funcionario );

// teste da tabela "Relatorio atividade criando uma variavel"
$acao_Relatorio_Atividade = 'INSERT';

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

    $nm_origem ='CADASTRO DE FUNCIONARIO';
    // depois da avalidação sera add no banco de dados 
    $query_telefone = "INSERT INTO tb_telefone (cd_numero1, cd_cliente)
    VALUES (:cd_numero1, :cd_cliente)";
    $cadastrar_telefone= $conn->prepare($query_telefone);
    $cadastrar_telefone->bindParam(':cd_numero1', $dados['cd_numero1'], PDO::PARAM_STR);
    $cadastrar_telefone->bindParam(':cd_cliente', $id_cliente, PDO::PARAM_INT);
    $cadastrar_telefone->execute();
    $id_telefone = $conn->lastInsertId();

    $query_sg_uf_empresa = "INSERT INTO tb_uf (sg_uf)
    VALUES (:sg_uf)";
    $cadastrar_sg_uf_empresa= $conn->prepare($query_sg_uf_empresa);
    $cadastrar_sg_uf_empresa->bindParam(':sg_uf',$sg_uf , PDO::PARAM_STR);
    $cadastrar_sg_uf_empresa->execute();
    $id_sg_uf = $conn->lastInsertId();

    $query_cidade_empresa = "INSERT INTO tb_cidade (nm_cidade, cd_uf)
    VALUES (:nm_cidade, :cd_uf)";
    $cadastrar_cidade_empresa= $conn->prepare($query_cidade_empresa);
    $cadastrar_cidade_empresa->bindParam(':nm_cidade',  $dados['nm_cidade'], PDO::PARAM_STR);
    $cadastrar_cidade_empresa->bindParam(':cd_uf', $id_sg_uf, PDO::PARAM_INT);
    $cadastrar_cidade_empresa->execute();
    $id_cidade = $conn->lastInsertId();

    $query_bairro_empresa = "INSERT INTO tb_bairro (nm_bairro, cd_cidade)
    VALUES (:nm_bairro, :cd_cidade)";
    $cadastrar_bairro_empresa= $conn->prepare($query_bairro_empresa);
    $cadastrar_bairro_empresa->bindParam(':nm_bairro', $dados['nm_bairro'], PDO::PARAM_STR);
    $cadastrar_bairro_empresa->bindParam(':cd_cidade', $id_cidade, PDO::PARAM_INT);
    $cadastrar_bairro_empresa->execute();
    $id_bairro = $conn->lastInsertId();

    $query_funcionario =    "INSERT INTO tb_funcionario (nm_nome, nm_cargo, nm_formacao, dt_emissao_contratual, nm_sexo, nm_maternidade, nm_estado_civil, cd_data_nascimento,  cd_idade, cd_cpf, cd_rg, cd_credencial, cd_email_funcionario, cd_senha_funcionario, cd_telefone, img_imagem, cd_bairro, cd_gerente)
    
    VALUES (:cd_email_cliente, :cd_senha_cliente, :nm_cliente)";

    $cadastrar_funcionario = $conn->prepare($query_funcionario);
    $cadastrar_funcionario->bindParam(':cd_email_cliente', $dados['cd_email_cliente'], PDO::PARAM_STR);
    $cadastrar_funcionario->bindParam(':cd_senha_cliente', $dados['cd_senha_cliente']);
    $cadastrar_funcionario->bindParam(':nm_cliente', $cliente, PDO::PARAM_STR);
    $cadastrar_funcionario->execute(); // para execultar 
    var_dump($conn->lastInsertId()); //puxar o id
    $id_cliente = $conn->lastInsertId();
    
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
    $id_relatorio_atividade = $conn->lastInsertId();
    //fim

    if($cadastrar_relatorio_atividade->execute()){
        $_SESSION['msg'] = "<div class='alert alert-success' role='alert'><p style='font-size: 20px;' >Cadastro do Funcionário <string>$nm_nomeFuncionario</string> concluido com Sucesso!</p></div>";
        header("Location: adm.php");
    
    }else{
        $_SESSION['msg'] = "<div class='alert alert-danger' role='alert' ><p style='font-size: 15px;'>ERRO! Funcionário não Cadastrado!</p></div>";
        header("Location: adm.php");
    }
    
    // }
    
    
    echo json_encode($retorna);