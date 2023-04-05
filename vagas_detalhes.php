<?php
include("comando_php/crud_php/body.php");
include("comando_php/crud_php/conexao_cadastro.php");
?>
<!doctype html>
<html lang="pt-BR">
 
<head>
    
    <meta charset="utf-8">
    <link rel="stylesheet" href="css_dash/rayra.css">
    <link rel="stylesheet" href="css_dash/bootstrap.min.css"> 
    <link href="css_dash/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="css_dash/caixa_estilo.css"> 
    <link rel="stylesheet" href="css_dash/fonts/fontawesome/css/fontawesome-all.css">
    <link rel="stylesheet" href="css_dash/morris.css">
    
    <link rel="stylesheet" href="css_dash/fonts/material-design-iconic-font/css/materialdesignicons.min.css">
    <link rel="icon" href="img/vagas.ico" type="image/png">
    <title>VAGASPARK</title>
	
</head>

<body>

        <div class="dashboard-wrapper">
            <div class="dashboard-ecommerce">
                <div class="container-fluid dashboard-content ">
        
                    <!-- pageheader  -->
					
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="page-header">
							<div id='voltar'></div> <!--voltar -->
                                <h2 class="pageheader-title">Tabela de Vagas</h2>
                                <p class="pageheader-text">Nulla euismod urna eros, sit amet scelerisque torton lectus vel mauris facilisis faucibus at enim quis massa lobortis rutrum.</p>
                                <div class="page-breadcrumb">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Home</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">Detalhamento de Vagas</li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>

 <!-- chama Status Vagas -->
        
<div class="ecommerce-widget">
	<div class="row">					
        <span id="msgAlerta"></span>            
        	<div class='col-xl-12 col-lg-12 col-md-6 col-sm-12 col-12'>
        		<div class="card">
            	<h3 class="card-header"><strong>Status de Vagas</strong></h3>           
                	<div style="padding: 5px 5px ;" class="col-md-3">                   
                    <label class="card-header" for="firstName"></label>
                    <input id="search-input" type="text" class="form-control"  placeholder="Pesquisar Vaga" value="" required="">
                 	</div>
                    	<span class="listar-vagas_detalhes"></span>
				</div>
			</div>                
		</div>
	</div>
</div>
<!-- Button trigger modal -->

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
            <dd class="col-sm-9"><span id="cpf_cliente_modal"></span></dd>
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
<!-- fim Modal -->
<!-- footer -->

            <div class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                             
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                            <div class="text-md-right footer-links d-none d-sm-block">
                                <a href="javascript: void(0);">About</a>
                                <a href="javascript: void(0);">Support</a>
                                <a href="javascript: void(0);">Contact Us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

<!-- fim footer --> 
        </div>  
    </div>
  
    
    <!-- Optional JavaScript -->
    <script src="chart_js/jquery-3.3.1.min.js"></script>
    <script src="chart_js/bootstrap.bundle.js"></script>
    <script src="chart_js/jquery.slimscroll.js"></script>     
    <script src="chart_js/main-js.js"></script>
    <script src="chart_js/chartist.min.js"></script>
    <script src="chart_js/jquery.sparkline.js"></script>
    <script src="chart_js/raphael.min.js"></script>
    <script src="chart_js/morris.js"></script>
    <script src="chart_js/c3.min.js"></script>
    <script src="chart_js/d3-5.4.0.min.js"></script>
    <script src="chart_js/C3chartjs.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.2.1/chart.js" integrity="sha512-Cv3WnEz5uGwmTnA48999hgbYV1ImGjsDWyYQakowKw+skDXEYYSU+rlm9tTflyXc8DbbKamcLFF80Cf89f+vOQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="chart_js/chart.js"></script>
	<script src="chart_js/Chart.bundle.js"></script>
	<script src="chart_js/chartjs.js"></script>
	<script src="chart_js/api_chart.js"></script>
      <script src="chart_js/dashboard-influencer.js"></script>
      <script src="chart_js/custom_vagas_detalhes.js"></script>
	  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- fim -->
</body>
 
</html>
                        
