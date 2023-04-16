<?php
session_start(); // iniciar a sessao
include('crud_php/body.php');
?> 
<!doctype html>
<html lang="en">
 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="../css_dash/bootstrap.min.css"> 
    <link href="../css_dash/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="../css_dash/fonts/fontawesome/css/fontawesome-all.css">
    <link rel="stylesheet" href="../css_dash/morris.css">
    <link rel="stylesheet" href="../css_dash/fonts/material-design-iconic-font/css/materialdesignicons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../css_dash/caixa_estilo.css"> <!-- esta dando confrito com a dicima-->
    <link rel="icon" href="img/vagas.ico" type="image/png">
    <title>VAGASPARK</title>
</head>

<body> 
   
                 <!-- navbar e lateral do menu -->
         <!-- ============================================================== -->
        <div class="dashboard-wrapper">
            <div class="container-fluid  dashboard-content">
                <!-- ============================================================== -->
                <!-- pageheader -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-header">
                            <h2 class="pageheader-title">Tabelas dos Clientes</h2>
                            <p class="pageheader-text">.</p>
                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Área Cliente</a></li>
                                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Tabela</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Informações de Cadastro</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- end pageheader -->
                <!-- ============================================================== -->
                <!-- tabela do cadastro do cliente -->
                <div class="row">					       
        	<div class='col-xl-12 col-lg-12 col-md-6 col-sm-12 col-12'>
        		<div class="card">
            	<h3 class="card-header"  style='font-size: 40px;'id="msgAlerta" ><strong>Status de Vagas</strong></h3>         
                	<div style="padding: 5px 5px ;" class="col-md-3">                                       
                    <input id="search-input" type="text" class="form-control"  placeholder="Pesquisar Vaga" value="" required="">
                 	</div>
                    <span class="listar-clientes"></span>
			</div>
    </div>
<!-- fim -->
<!-- inicio do Modal -->
<!-- Modal -->
<div class="modal fade" id="visualiza_status_vaga" tabindex="-1" role="dialog" aria-labelledby="visualiza_status_vaga" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="visualiza_status_vaga_Title">Detalhes do Cliente</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <dl class="row">
            <dt class="col-sm-3">ID</dt>
            <dd class="col-sm-9"><span id="id_cliente_modal"></span></dd>
            <dt class="col-sm-3">Nome:</dt>
            <dd class="col-sm-9"><span id="nm_cliente_modal"></span></dd>
            <dt class="col-sm-3">CPF:</dt>
            <dd class="col-sm-9"><h5 id="cpf_cliente_modal"></h5></dd>
            <dt class="col-sm-3">Email:</dt></dt>
            <dd class="col-sm-9"><span id="email_cliente_modal"></span></dd>
            <dt class="col-sm-3">Bairro:</dt></dt>
            <dd class="col-sm-9"><span id="bairro_cliente_modal"></span></dd>
            <dt class="col-sm-3">Cidade:</dt></dt>
            <dd class="col-sm-9"><span id="cidade_cliente_modal"></span></dd>
            <dt class="col-sm-3">UF-Estado:</dt></dt>
            <dd class="col-sm-9"><span id="sg_uf_cliente_modal"></span></dd>
            <dt class="col-sm-3">Telefone:</dt></dt>
            <dd class="col-sm-9"><span id="telefone_cliente_modal"></span></dd>
        </dl>
      </div>
      <div class="modal-header">
        <h5 class="modal-title" id="visualiza_status_vaga_Title">Detalhes do Veiculo</h5>
      </div>
      <div class="modal-body">
        <dl class="row">
            <dt class="col-sm-3">Placa:</dt>
            <dd class="col-sm-9"><span id="placa_cliente_modal">u</span></dd>
            <dt class="col-sm-3">Modelo:</dt>
            <dd class="col-sm-9"><span id="modelo_cliente_modal">u</span>u</dd>
            <dt class="col-sm-3">Marca:</dt>
            <dd class="col-sm-9"><span id="marca_cliente_modal">u</span></dd>
            <dt class="col-sm-3">Cor:</dt></dt>
            <dd class="col-sm-9"><span id="cor_cliente_modal">u</span></dd>
        
        </dl>
      </div>
      
    </div>
  </div>
</div>
</div>  
 </div>
  
<!-- fim Modal -->

       
    <script src="../chart_js/jquery-3.3.1.min.js"></script>
<script src="../chart_js/bootstrap.bundle.js"></script>
<script src="../chart_js/jquery.slimscroll.js"></script>
<script src="../chart_js/jquery.multi-select.js"></script>
<script src="../chart_js/main-js.js"></script>
<script src="../chart_js/dataTables.bootstrap4.min.js"></script>
<script src="../chart_js/buttons.bootstrap4.min.js"></script>
 <script src="../chart_js/data-table.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
 <script src="js/custom.js"></script> 

  

   
</body>

</html>