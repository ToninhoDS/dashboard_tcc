

/* Inicio listar os registros do banco de dados */
const tbody = document.querySelector(".listar-usuarios");

// Funcao para listar os registros do banco de dados
const listarUsuarios = async (pagina) => {

    // Fazer a requisicao para o arquivo PHP responsavel em recuperar os registros do banco de dados
    const dados = await fetch("./list.php?pagina=" + pagina);

    // Ler o objeto retornado pelo arquivo PHP
    const resposta = await dados.json();

    // Acessa o IF quando nao encontrar nenhum registro no banco de dados
    if (!resposta['status']) {
        // Envia a mensagem de erro para o arquivo HTML que deve ser apresentada para o usuario
        document.getElementById("msgAlerta").innerHTML = resposta['msg'];
    } else {
        // Recuperar o SELETOR do HTML que deve receber os registros
        const conteudo = document.querySelector(".listar-clientes");

        // Somente acessa o IF quando existir o SELETOR ".listar-usuarios"
        if (conteudo) {

            // Enviar os dados para o arquivo HTML
            conteudo.innerHTML = resposta['dados'];
        }
    }
}

// Chamar a funcao para listar os registro do banco de dados
listarUsuarios(1);

/* Fim listar os registros do banco de dados */

// vamos substiuir o tewxto do campo

function editar_registro(id){
    console.log(id);
//   ocultar o Botao editar
   document.getElementById("botao_editar" +id ).style.display = "none";

// apresentar o Botao salvar
document.getElementById("botao_salvar" +id ).style.display = "block";


//   ocultar o Botao excluir
document.getElementById("botao_excluir" +id ).style.display = "none";
document.getElementById("cancelarRG_salvar" +id ).style.display = "block";
//   recuperar o registro

   var nome = document.getElementById("valor_nome" + id);
   var cpf = document.getElementById("valor_cpf" + id);
   var placa= document.getElementById("valor_placa" + id);
   var email = document.getElementById("valor_email" + id);
   var telefone= document.getElementById("valor_telefone" + id);
    console.log(email);
// controle do input 
   
//    subistituir o texto em input

nome.innerHTML = "<input type='text' id='nome_text" + id + "' value='"+ nome.innerHTML +"' size='10' maxlength='50'>";
cpf.innerHTML = "<input type='text' id='cpf_text" + id + "' value='"+ cpf.innerHTML +"' size='10' maxlength='50'>";
placa.innerHTML = "<input type='text' id='placa_text" + id + "' value='"+ placa.innerHTML +"' size='10' maxlength='50'>";
email.innerHTML = "<input type='text' id='email_text"  + id + "' value='"+ email.innerHTML +"' size='20' maxlength='50'>";
telefone.innerHTML = "<input type='text' id='telefone_text" + id + "' value='"+ telefone.innerHTML +"' size='10' maxlength='50'>";


}

// cancelar a pagar
function cancelar_excluir(id){
    //   ocultar o Botao confirmar e de cancelar e cancelar excluir
       document.getElementById("botao_confirma" +id ).style.display = "none";
       document.getElementById("botao_excluir_cancelar" +id ).style.display = "none";
    
    // apresentar o Botao excluir e de editar
    document.getElementById("botao_excluir" +id ).style.display = "block";
    document.getElementById("botao_editar" +id ).style.display = "block";
    

}

// substituir o texto e salvar

async function salvar_registro(id){
    // recuperar o valor do camppo
    var nome_valor = document.getElementById("nome_text" +id).value;
    var cpf_valor = document.getElementById("cpf_text" +id).value;
    var placa_valor = document.getElementById("placa_text" +id).value;
    var email_valor = document.getElementById("email_text" +id).value;
    var telefone_valor = document.getElementById("telefone_text" +id).value;
   
    document.getElementById("valor_nome" + id).innerHTML = nome_valor;
    document.getElementById("valor_cpf" + id).innerHTML = cpf_valor;
    document.getElementById("valor_placa" + id).innerHTML = placa_valor;
    document.getElementById("valor_email" + id).innerHTML = email_valor;
    document.getElementById("valor_telefone" + id).innerHTML = telefone_valor;

    // salvar dados para enviar em uma string e mandar para banco de dados

    var dadosForm = "id=" + id + "&nome=" + nome_valor + "&cpf=" + cpf_valor 
    + "&placa=" + placa_valor + "&email=" + email_valor + "&telefone=" + telefone_valor;

    // fazer requisicao com FEtch para um arquivo php e enviar patravez do metodo POST dados do formulario
   
    const dados = await fetch("editar.php",{
        method: "POST",
        headers: {'Content-Type': 'application/x-www-form-urlencoded'},
        body: dadosForm
    });

    // ler o objeto a respota do arquivo php

    const resposta = await dados.json();
    console.log(resposta);

        // acessa o if quando nao conseguir editar no banco
        if(!resposta['status']){
            // aviso de mensagem de erro caso de erro

    document.getElementById("msgAlerta").innerHTML = resposta['msg'];
        
    }else{
          // aviso de mensagem de sucesso caso de sucesso
          document.getElementById("msgAlerta").innerHTML = resposta['msg'];

        //   chamar uma função para remover a mensagem apos alguns segundos
        removerMsgALerta();

        // agora ocultar e inverter o botão

        //   apresentar o Botao editar
   document.getElementById("botao_editar" +id ).style.display = "block";
   // ocultar o Botao salvar
   document.getElementById("cancelarRG_salvar" +id ).style.display = "none";
   document.getElementById("botao_salvar" +id ).style.display = "none";
   
    //   apresentar o Botao excluir
    document.getElementById("botao_excluir" +id ).style.display = "block";
        
    }
    
}

// cancelar a edição
function cancelar_registro(id){
    //   ocultar o Botao confirmar e de cancelar e cancelar excluir
       document.getElementById("cancelarRG_salvar" +id ).style.display = "none";
       document.getElementById("botao_salvar" +id ).style.display = "none";
    
    // apresentar o Botao excluir e de editar
    document.getElementById("botao_excluir" +id ).style.display = "block";
    document.getElementById("botao_editar" +id ).style.display = "block";
    

}
// fim do editar o banco de dados


// iniciar função de remoção de mensagem
function removerMsgALerta(){
    setTimeout(function(){
        // substituir a mensagem 
        document.getElementById("msgAlerta").innerHTML = "";
        // colocar o milisegundos que precisa 2000
   
    }, 1000);
   
} 
// fim da mensaggem em 2s apos apresentação da mensagem

// excluir registro

async function excluir_registro(id){
    
    //   ocultar o Botao excluir
   document.getElementById("botao_excluir" +id ).style.display = "none";
   // apresentar o Botao confirmar
   document.getElementById("botao_confirma" +id ).style.display = "block";

   document.getElementById("botao_excluir_cancelar" +id ).style.display = "block";

    //   ocultar o Botao Editar
    document.getElementById("botao_editar" +id ).style.display = "none";

   //   chamar uma função para remover a mensagem apos alguns segundos
   
}

// confirmar exclusao

async function confirma_registro(id){

var  $id_valor = document.getElementById("valor_id" + id).innerHTML;
console.log("js id> " +id); // olhar se chamou a função


// fazer requisicao com FEtch para um arquivo php e enviar patravez do metodo POST dados do formulario
const dados = await fetch('excluir_restricao.php?id=' + id); // atribuir a uma constante

const retorna = await dados.json();
if(retorna['erro']){
    msgAlerta.innerHTML = retorna['msg'];
  

    }else{
        msgAlerta.innerHTML =retorna['msg'];
        //  atualizar a pagina 
        removerMsgALerta();

        listarUsuarios(1);

    }
}

// criar uma função que  reseta os botoes de editar e excluir


// criando função que visualizar as informaçoes

async  function visualizar(id){
    //console.log(id);
    const dados = await fetch('visualizar.php?id=' + id);
    const resposta = await dados.json();
    //console.log(resposta);
    //await espera terminar processamento de cima para continuar
   

    //validação

    if(!resposta['status']){
        document.getElementById('msgAlerta').innerHTML = resposta['msg'];
    }else{
        document.getElementById('msgAlerta').innerHTML = "";
        const visModal = new bootstrap.Modal(document.getElementById('visUsuarioModal'));
        visModal.show();

        document.getElementById("idUsuario").innerHTML = resposta['dados'].id;
        document.getElementById("nomeUsuario").innerHTML = resposta['dados'].nome;
        document.getElementById("emailUsuario").innerHTML = resposta['dados'].email;
        document.getElementById("logradouroUsuario").innerHTML = resposta['dados'].logradouro;
        document.getElementById("numeroUsuario").innerHTML = resposta['dados'].numero;
    }
    
}

// mandar dropdawn aberto 

// limpar quando selecionar na option bicicleta
function mostraAlerta(elemento)
    {
       
        if(elemento.value == 'Bicicleta'){
            console.log(elemento.value);
            
        }else{}
    }
    // INPUT de pesquisa vagas
    $('#search-input').on('keyup', function() {
        var searchTerm = $(this).val().toLowerCase();
        $('#my-table tbody tr').each(function() {
          var N_vaga_pesquisa = $(this).find('td:nth-child(2)').text().toLowerCase();
          var nome_vaga_pesquisa = $(this).find('td:nth-child(3)').text().toLowerCase();
          var placa_vaga_pesquisa = $(this).find('td:nth-child(4)').text().toLowerCase();
          var status_vagas_pesquisa = $(this).find('td:nth-child(6)').text().toLowerCase();
          if (N_vaga_pesquisa.indexOf(searchTerm) !== -1 || nome_vaga_pesquisa.indexOf(searchTerm) !== -1 || placa_vaga_pesquisa.indexOf(searchTerm) !== -1 || status_vagas_pesquisa.indexOf(searchTerm) !== -1) {
            $(this).show();
          } else {
            $(this).hide();
          }
        });
      });
