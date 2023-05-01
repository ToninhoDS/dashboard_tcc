<?php

session_start(); // Iniciar a sessão

// Limpara o buffer de redirecionamento
ob_start();

// Incluir o arquivo que possui as configurações
include_once './config/config.php';

// Incluir o arquivo com a conexão com banco de dados
include_once './lib/conexao.php';

// Incluir o arquivo para validar e recuperar dados do token
include_once 'validar_token.php';

// Chamar a função validar o token, se a função retornar FALSE significa que o token é inválido e acessa o IF
if(!validarToken()){
    // Criar a mensagem de erro e atribuir para variável global
    $_SESSION['msg'] = "<p style='color: #f00;'>Erro: Necessário realizar o login para acessar a página!</p>";

    // Redireciona o o usuário para o arquivo vagas_park.php
    header("Location: vagas_park.php");

    // Pausar o processamento da página
    exit();
}

echo "<a href='dashboard.php'>Dashbard</a><br>";
echo "<a href='listar-slides.php'>Listar Slides</a><br>";

echo "<h1>Listar Slides</h1>";

// QUERY para recuperar os slides do banco de dados
$query_slides = "SELECT sld.id, sld.titulo_slide, sld.imagem,
                sit.nome_situacao
                FROM slides AS sld
                INNER JOIN situacoes AS sit ON sit.id=sld.situacao_id
                /*WHERE situacao_id = 100*/";

// Preparar a QUERY
$result_slides = $conn->prepare($query_slides);

// Executar a QUERY
$result_slides->execute();

// Acessa o IF quando encontrar slide no banco de dados
if(($result_slides) and ($result_slides->rowCount() != 0)){

    // Ler os registro retornado do banco de dados
    while($row_slide = $result_slides->fetch(PDO::FETCH_ASSOC)){
        //var_dump($row_slide);

        // Extrair o array para imprimir os valores através da chave do array
        extract($row_slide);

        // Imprimir os valores retornado do banco de dados
        echo "ID: $id <br>";
        echo "Título: $titulo_slide <br>";
        echo "Nome da imagem: $imagem <br>";
        echo "Situação: $nome_situacao <br>";
        echo "<hr>";
    }
}else{
    echo "Erro: Nenhum slide encontrado!";
}