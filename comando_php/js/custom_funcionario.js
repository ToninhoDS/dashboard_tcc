

/* Inicio listar os registros do banco de dados */
const tbody = document.querySelector(".listar-usuarios");

// Funcao para listar os registros do banco de dados
const listarUsuarios = async (pagina) => {

    // Fazer a requisicao para o arquivo PHP responsavel em recuperar os registros do banco de dados
    const dados = await fetch("./list_funcionario.php?pagina=" + pagina);

    // Ler o objeto retornado pelo arquivo PHP
    const resposta = await dados.json();

    // Acessa o IF quando nao encontrar nenhum registro no banco de dados
    if (!resposta['status']) {
        // Envia a mensagem de erro para o arquivo HTML que deve ser apresentada para o usuario
        document.getElementById("msgAlerta").innerHTML = resposta['msg'];
    } else {
        // Recuperar o SELETOR do HTML que deve receber os registros
        const conteudo = document.querySelector(".listar_funcionario");

        // Somente acessa o IF quando existir o SELETOR ".listar-relatorio_atividade"
        if (conteudo) {

            // Enviar os dados para o arquivo HTML
            conteudo.innerHTML = resposta['dados'];
        }
    }
}


listarUsuarios(1);



function resetaPagina(){
    setTimeout(function(){
        // substituir a mensagem 
        window.location.reload(10); 
        
    }, 1000);
   
} 
async function delete_funcionario(id){
console.log("js id> " +id); // olhar se chamou a função
const dados = await fetch('excluir_funcionario.php?id=' + id); 

const retorna = await dados.json();
if(retorna['erro']){
    msgAlerta.innerHTML = retorna['msg'];
    resetaPagina();
    removerMsgALerta();
    
    }else{
        msgAlerta.innerHTML =retorna['msg'];
  
        removerMsgALerta();
        
        listarUsuarios(1);

    }
}



function removerMsgALerta(){
    setTimeout(function(){
      
        document.getElementById("msgAlerta").innerHTML = "";
     
   
    }, 1000);
   
} 
function removerSalvando(){
    setTimeout(function(){
     
        document.getElementById("msgAlertaErroEdit").innerHTML ="";
        $('#visualiza_funcionario_adm').modal('hide');
       
        
    }, 250);
   
} 
function mostrarConfirmação(){
    setTimeout(function(){
       
        document.getElementById('msgCardconfirmacao').innerHTML ="Salvando no Banco de Dados....";
        $('#msgCardSucesso').modal('show');
      
   
    }, 350);
   
} 
function edicaoConcluida(){
    setTimeout(function(){
       
        document.getElementById('msgCardconfirmacao').innerHTML ="<h3 style='font-size:25px'>Dados do Funcionario, <strong>Atualizados!!!</strong></h3>";   
    
   
    }, 2000);
   
} 
// aplicação modal
async  function visualizar(id){
    document.getElementById("msgAlertaErroEdit").innerHTML = "";
    document.getElementById('edit-usuario-btn').value ="Editar";

   var array_credencial = document.getElementById("valor_credencial" + id).innerHTML;
    const dados = await fetch('visualizar_funcionario.php?id=' +array_credencial);
    const resposta = await dados.json();
    if(!resposta['status']){
        document.getElementById('msgAlerta').innerHTML = resposta['msg'];      
    }else{
        
        const visModals = new bootstrap.Modal(document.getElementById('visualiza_funcionario_adm'));
        visModals.show();     
        document.getElementById("id_cliente_modal").value = resposta['dados'].cd_funcionario;
        document.getElementById("nm_nome_modal").value = resposta['dados'].nm_nome;
        document.getElementById("nm_cargo_modal").value = resposta['dados'].nm_cargo;
        document.getElementById("credencial_modal").value = resposta['dados'].cd_credencial;
        document.getElementById("img_imagem_modal").src = resposta['dados'].img_imagem; //para aparecer a imagem tem que indicar qual atributo "src"
        document.getElementById("dt_emissao_contratual_modal").value = resposta['dados'].dt_emissao_contratual;
        document.getElementById("nm_sexo_modal").value = resposta['dados'].nm_sexo;
        document.getElementById("cd_data_nascimento_modal").value = resposta['dados'].cd_data_nascimento;
        document.getElementById("cd_cpf_modal").value = resposta['dados'].cd_cpf;
        document.getElementById("cd_email_funcionario_modal").value = resposta['dados'].cd_email_funcionario;
        document.getElementById("cd_senha_funcionario_modal").value = resposta['dados'].cd_senha_funcionario;
        document.getElementById("cd_telefone_modal").value = resposta['dados'].cd_telefone;
        document.getElementById("cd_bairro_modal").value = resposta['dados'].cd_bairro;
        document.getElementById("cd_gerente_modal").value = resposta['dados'].cd_gerente;
        // document.getElementById("cd_senha_bairro_modal").value = resposta['dados'].nm_bairro;
        // document.getElementById("cd_cidade_modal").value = resposta['dados'].nm_cidade;
        // document.getElementById("cd_estado_modal").value = resposta['dados'].sg_uf;

       //document.getElementById('msgAlerta').innerHTML = ""; // ESTA DANDO ERRO ISSO
    }
    
}

//Editar os dadso do modal
const editForm = document.getElementById("edit_formulario_funcionario");
//console.log(editForm);
if(editForm){
    editForm.addEventListener("submit", async (e)=>{
        e.preventDefault();

        const dadosForm = new FormData(editForm);

        document.getElementById('edit-usuario-btn').value ="Salvando....";
        
        
       const dados = await fetch("editar_modal_funcionario.php",{
            method:"POST",
            body: dadosForm
        });
       
        const resposta = await dados.json();
        console.log(resposta);
       
        if(!resposta['status']){

            document.getElementById("msgAlertaErroEdit").innerHTML = resposta['msg'];
            document.getElementById('msgCardconfirmacao').value ="Salvando....";
           
        
        }else{
            
             removerSalvando();
             mostrarConfirmação();
             edicaoConcluida();
            listarUsuarios(1);
           
         }
         });
         
}

// exibir a previa da imagem 

function previewImagem(){
    var imagemFuncionario = document.querySelector('input[name=img_imagem]').files[0];
    var preview = document.getElementById('imgFuncionario');
    var reader = new FileReader();

    reader.onloadend = function(){
        preview.src = reader.result;
    }
    if(imagemFuncionario){
        reader.readAsDataURL(imagemFuncionario);
    }else{
        preview.src ="";
    }
}
function LimparpreviewImagem(){
    var imagemFuncionario = document.querySelector('input[name=img_imagem]').files[0];
    var preview = document.getElementById('imgFuncionario');
    var reader = new FileReader();

    reader.onloadend = function(){
        preview.src = reader.result;
    }
    if(imagemFuncionario){
        preview.src ="";
       
    }else{
        reader.readAsDataURL(imagemFuncionario);
    }
}


// confirmação de senha antes de ir para banco
const form = document.getElementById('Cadas_funcionario_form');
form.addEventListener('submit', function(event) {
  event.preventDefault();
  const password = document.getElementById("cd_senha_funcionario").value;
  const confirmPassword = document.getElementById("cd_senha_funcionario_conf").value;
  if (password !== confirmPassword) {
    alert('As senhas não correspondem. Tente novamente.');
    return;
  }
  form.submit();
});

