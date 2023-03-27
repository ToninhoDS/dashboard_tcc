

/* Inicio listar os registros do banco de dados */
const tbody = document.querySelector(".listar-usuarios");

// Funcao para listar os registros do banco de dados
const listarUsuarios = async (pagina) => {

    // Fazer a requisicao para o arquivo PHP responsavel em recuperar os registros do banco de dados
    const dados = await fetch("./list_vagas.php?pagina=" + pagina);

    // Ler o objeto retornado pelo arquivo PHP
    const resposta = await dados.json();

    // Acessa o IF quando nao encontrar nenhum registro no banco de dados
    if (!resposta['status']) {
        // Envia a mensagem de erro para o arquivo HTML que deve ser apresentada para o usuario
        document.getElementById("msgAlerta").innerHTML = resposta['msg'];
    } else {
        // Recuperar o SELETOR do HTML que deve receber os registros
        const conteudo = document.querySelector(".listar-usuarios");

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
//   ocultar o Botao editar
    document.getElementById("botao_salvar" +id ).style.display = "block";
    document.getElementById("Select_Option" +id ).style.display = "block";
    document.getElementById("cancelarRG_salvar" +id ).style.display = "block";
    document.getElementById("img_Option" +id ).style.display = "block";


    document.getElementById("botao_editar" +id ).style.display = "none";
    document.getElementById("status_cores" +id ).style.display = "none";
    document.getElementById("img_status_vagas" +id ).style.display = "none";


//   recuperar o registro

   var nome = document.getElementById("valor_nome" + id);
   var placa= document.getElementById("valor_placa" + id);
   var entrada = document.getElementById("valor_entrada" + id);
   var Option_vagas = document.getElementById("Select_Option" + id);
   var img_Option = document.getElementById("img_Option" + id);

//    subistituir o texto em input

nome.innerHTML = "<input type='text' id='nome_text" + id + "' value='"+ nome.innerHTML +"' size='10' maxlength='50'>";
placa.innerHTML = "<input type='text' id='placa_text"  + id + "' value='"+ placa.innerHTML +"' size='20' maxlength='50'>";
entrada.innerHTML = "<input type='time' id='entrada_text" + id + "' value='"+ entrada.innerHTML +"' size='10' maxlength='50'>";
Option_vagas.innerHTML = "<option name='livre' value='livre'selected>" + Option_vagas.Option_vagas.innerHTML + "</option><option name='reserva' value='reserva'>Reserva</option><option name='ocupado' value='ocupado'>Ocupado</option></select></div><h3><span class='badge-dot  mr-1' id='status'></span >$nm_status</h3></div></td>";
img_Option.innerHTML = "<option name='livre' value='livre'selected>Livre</option><option name='carro' value='carro'>Carro</option><option name='moto' value='moto'>Moto</option><option name='bicicleta' value='bicicleta'>Bicicleta</option><option name='patins' value='patins'>Patins</option><option name='outros' value='outros'>Outros</option>";


                               
}


// substituir o texto e salvar

async function salvar_registro(id){
    // recuperar o valor do camppo
    var nome_valor = document.getElementById("nome_text" +id).value;
    var placa_valor = document.getElementById("placa_text" +id).value;
    var entrada_valor = document.getElementById("entrada_text" +id).value;
    var Option_vagas_valor = document.getElementById("Select_Option" +id).value;
    var img_Option_valor = document.getElementById("img_Option" +id).value;
   
    //validação se a vaga for livra apagar tudo
    if(Option_vagas_valor == 'livre'){

       let text;
        if (confirm("Deseja Apagar o Status da Vaga? \n Pressione o button!") == true) {
            nome_valor = '';
            placa_valor = '';
            entrada_valor = 0;  
        } else {
            window.location.reload(10); // carrega a pagina
        text = "You canceled!";

        }
    }else{
        
    }
        
  
   
    document.getElementById("valor_nome" + id).innerHTML = nome_valor;
    document.getElementById("valor_placa" + id).innerHTML = placa_valor;
    document.getElementById("valor_entrada" + id).innerHTML = entrada_valor;
    document.getElementById("Select_Option" + id).innerHTML = Option_vagas_valor;
    document.getElementById("img_Option" + id).innerHTML = img_Option_valor;
   
    
    

    // salvar dados para enviar em uma string e mandar para banco de dados

    var dadosForm = "id=" + id + "&nome_vagas=" + nome_valor + "&placa_vagas=" + placa_valor 
    + "&entrada_vagas=" + entrada_valor + "&status_vagas=" + Option_vagas_valor + "&img_vagas=" + img_Option_valor ;

    // fazer requisicao com FEtch para um arquivo php e enviar patravez do metodo POST dados do formulario
   console.log(dadosForm);
    const dados = await fetch("comando_php/editar_tabela_vagas.php",{
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
   document.getElementById("status_cores" +id ).style.display = "block";
   document.getElementById("img_status_vagas" +id ).style.display = "block";
   // ocultar o Botao salvar
   
   document.getElementById("botao_salvar" +id ).style.display = "none";
   document.getElementById("cancelarRG_salvar" +id ).style.display = "none";
   document.getElementById("Select_Option" +id ).style.display = "none";
   
    //   apresentar o Botao excluir
    

     window.location.reload(10); // carrega a pagina
    }
    
}



// cancelar a edição
function cancelar_registro(id){
    //   ocultar o Botao confirmar e de cancelar e cancelar excluir
       
       document.getElementById("botao_salvar" +id ).style.display = "none";
       document.getElementById("cancelarRG_salvar" +id ).style.display = "none";
       document.getElementById("Select_Option" +id ).style.display = "none";
       document.getElementById("img_Option" +id ).style.display = "none";
    
    // apresentar o Botao excluir e de editar
   
    document.getElementById("botao_editar" +id ).style.display = "block";
   document.getElementById("status_cores" +id ).style.display = "block";
   document.getElementById("img_status_vagas" +id ).style.display = "block";
    

}
// fim do editar o banco de dados


// iniciar função de remoção de mensagem
function removerMsgALerta(){
    setTimeout(function(){
        // substituir a mensagem 
        document.getElementById("msgAlerta").innerHTML = "";
        // colocar o milisegundos que precisa 2000
   
    }, 3000);
   
} 

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


