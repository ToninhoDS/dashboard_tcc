<?php
include("comando_php/crud_php/body.php");
include("comando_php/crud_php/conexao_cadastro.php");
?>
<!doctype html>
<html lang="pt-BR">
 
<head>
    
    <meta charset="utf-8">
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
                    <!-- ============================================================== -->
                    <!-- pageheader  -->
                    <!-- ============================================================== -->
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="page-header">
                                <h2 class="pageheader-title">Tela Inicial do Sistema </h2>
                                <p class="pageheader-text">Nulla euismod urna eros, sit amet scelerisque torton lectus vel mauris facilisis faucibus at enim quis massa lobortis rutrum.</p>
                                <div class="page-breadcrumb">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Home</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">Tela Inicial do Sistema</li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- end pageheader  -->
                    <!-- ============================================================== -->
                    <div class="ecommerce-widget">

                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="text-muted">Vagas Em uso</h5>
                                        <div class="metric-value d-inline-block">
                                            <h1 class="mb-1"><h1 id="vagasLivesOcupadas"></h1></h1>
                                        </div>
                                        <div class="metric-label d-inline-block float-right text-danger font-weight-bold">
                                            <h2><span class="ml-1"><i class="fa fa-fw fa-arrow-down text-danger"></i></span><span class="text-danger" id="reservasCanceladas">0%</span></h2>
                                        </div>
                                    </div>
                                    
                                    <canvas id="apiAleatoria"  width="415" height="100"></canvas>
                                </div>
                            </div>
                          
                            <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="text-muted">Total de Carros no Estacionamento 24h</h5>
                                        <div class="metric-value d-inline-block">
                                            <h1 class="mb-1" id="vagasOcupadas">0.00</h1>
                                        </div>
                                        <div class="metric-label d-inline-block float-right text-primary font-weight-bold">
                                            <span>N/A</span>
                                        </div>
                                    </div>
                                    <canvas id="apiAleatoriaLinha"  width="380" height="100"></canvas>
                                </div>
                            </div>
                            
                        </div>
                        <div class="row">
                            <!-- ============================================================== -->
                                <!-- tabela financeira -->
             <!-- SELETOR "msgAlerta" responsavel em receber a mensagem de sucesso ou erro -->
             <span id="msgAlerta"></span>

                    
<div class="col-lg-9">
    <!-- SELETOR "listar-usuarios" responsavel em receber os registros do banco de dados -->
    <span class="listar-usuarios"></span>
</div>
                            
                            <!-- fim da tabela financeira -->
                            <div class="col-xl-3 col-lg-12 col-md-6 col-sm-12 col-12">
                                <!-- ============================================================== -->
                                <!-- Tabela Afilias  -->
                        
                                <div class="card">
                                    <h5 class="card-header">Status Biciclita e Outros</h5>
                                    <div class="card-body p-0">
                                        <div class="table-responsive">
                                            <table class="table no-wrap p-table">
                                                <thead class="bg-light">
                                                    <tr class="border-0">
                                                        <th class="border-0">Nº Vagas</th>
                                                        <th class="border-0">Nome</th>
                                                        <th class="border-0">Status</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>1 </td>
                                                        <td>Antonio </td>
                                                        <td>$4563</td>
                                                    </tr>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>Antonio</td>
                                                        <td>$325</td>
                                                    </tr>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>Antonio</td>
                                                        <td>$225</td>
                                                    </tr>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>Antonio</td>
                                                        <td>$856</td>
                                                    </tr>
                                                    <tr>
                                                        <td>1 </td>
                                                        <td>Antonio</td>
                                                        <td>$1000</td>
                                                    </tr>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>Antonio</td>
                                                        <td>$1000</td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="3">
                                                            <a href="#" class="btn btn-outline-light float-right">Detalhes</a>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>                                          
                                        </div> 
                                    </div>                                  
                                </div>                               
                              </div> 
                           </div>
                          <!-- ============================================================== -->
	                        <!-- Total cliente, grafico  -->
	        <div class="dashboard-influence">
	                    <div class="row">
	                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
	                            <div class="card">
	                                <div class="card-body">
	                                    <div class="d-inline-block">
	                                        <h5 class="text-muted">Vagas Livres</h5>
	                                        <h2 class="mb-0" id="cardVagas">0</h2>
	                                    </div>
	                                    <div class="float-right icon-circle-medium  icon-box-lg  bg-info-light mt-1">
	                                        <i class="fa fa-eye fa-fw fa-sm text-info"></i>
	                                    </div>
	                                </div>
	                            </div>
	                        </div>
	                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
	                            <div class="card">
	                                <div class="card-body">
	                                    <div class="d-inline-block">
	                                        <h5 class="text-muted">Vagas Ocupadas</h5>
	                                        <h2 class="mb-0" id="cardOcupado">0</h2>
	                                    </div>
	                                    <div class="float-right icon-circle-medium  icon-box-lg  bg-primary-light mt-1">
	                                        <i class="fa fa-user fa-fw fa-sm text-primary"></i>
	                                    </div>
	                                </div>
	                            </div>
	                        </div>
	                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
	                            <div class="card">
	                                <div class="card-body">
	                                    <div class="d-inline-block">
	                                        <h5 class="text-muted">Quantos usaram o Serviço</h5>
	                                        <h2 class="mb-0" id="lucroMensal">$0.00</h2>
	                                    </div>
	                                    <div class="float-right icon-circle-medium  icon-box-lg  bg-secondary-light mt-1">
	                                        <i class="fa fa-handshake fa-fw fa-sm text-secondary"></i>
	                                    </div>
	                                </div>
	                            </div>
	                        </div>
	                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
	                            <div class="card">
	                                <div class="card-body">
	                                    <div class="d-inline-block">
	                                        <h5 class="text-muted">Lucro anual</h5>
	                                        <h2 class="mb-0" id="lucroAnual"> $0.00</h2>
	                                    </div>
	                                    <div class="float-right icon-circle-medium  icon-box-lg  bg-brand-light mt-1">
	                                        <i class="fa fa-money-bill-alt fa-fw fa-sm text-brand"></i>
	                                    </div>
	                                </div>
	                            </div>
	                        </div>
	                    </div><!-- fim coixa de mensagem -->
	                    <div class="row">
	                        <!-- ============================================================== -->
	                        <!-- Frafico do estacionamento   -->
	                      
	                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
	                            <div class="card">
	                                <h2 class="card-header"><img src="img/feedback-do-cliente.png"  width="35px" height="35px"> Feedback</h2>
	                                <div class="card-body">
	                                    <div id="gender_donut" style="height: 230px;"></div>
	                                </div>
	                                <div class="card-footer p-0 bg-white d-flex">
	                                    <div class="card-footer-item card-footer-item-bordered w-50">
	                                        <h2  id="graficoPizzaP"></h2>
	                                        <p>Votos</p>
	                                    </div>
	                                    <div class="card-footer-item card-footer-item-bordered">
	                                        <h2  id="graficoPizzaN"> </h2>
	                                        <p>Não Voltaram</p></p>
	                                    </div>
	                                </div>
	                            </div>
	                        </div>
						<div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
							<div class="card">
								<h5 class="card-header"><img src="img/registro-de-tempo.png"  width="35px" height="35px"> Tempo por Vaga</h5>
								<div class="card-body">
									<div class="mb-3">
										<div class="d-inline-block">
											<h4 class="mb-0">Vaga - 1</h4>
										</div>
										<div class="progress mt-2 float-right progress-md">
											<div class="progress-bar bg-secondary" role="progressbar" style="width: 60%;" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
										</div>
									</div>
									<div class="mb-3">
										<div class="d-inline-block">
											<h4 class="mb-0">Vaga - 2</h4>
										</div>
										<div class="progress mt-2 float-right progress-md">
											<div class="progress-bar bg-secondary" role="progressbar" style="width: 55%;" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
										</div>
									</div>
									<div class="mb-3">
										<div class="d-inline-block">
											<h4 class="mb-0">Vaga - 3</h4>
										</div>
										<div class="progress mt-2 float-right progress-md">
											<div class="progress-bar bg-secondary" role="progressbar" style="width: 65%;" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
										</div>
									</div>
									<div class="mb-3">
										<div class="d-inline-block">
											<h4 class="mb-0">Vaga - 4</h4>
										</div>
										<div class="progress mt-2 float-right progress-md">
											<div class="progress-bar bg-secondary" role="progressbar" style="width: 35%;" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
										</div>
									</div>
									<div class="mb-3">
										<div class="d-inline-block">
											<h4 class="mb-0">Vaga - 5</h4>
										</div>
										<div class="progress mt-2 float-right progress-md">
											<div class="progress-bar bg-secondary" role="progressbar" style="width: 21%;" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
										</div>
									</div>
									<div class="mb-3">
										<div class="d-inline-block">
											<h4 class="mb-0">Vaga - 6</h4>
										</div>
										<div class="progress mt-2 float-right progress-md">
											<div class="progress-bar bg-secondary" role="progressbar" style="width: 85%;" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
										</div>
									</div>
									<div class="mb-3">
										<div class="d-inline-block">
											<h4 class="mb-0">Vaga - 7</h4>
										</div>
										<div class="progress mt-2 float-right progress-md">
											<div class="progress-bar bg-secondary" role="progressbar" style="width: 25%;" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
										</div>
									</div>
								</div>
							</div>
						</div>
	                        <div class="col-xl-5 col-lg-12 col-md-6 col-sm-12 col-12">
	                            <div class="card">
	                                <h5 class="card-header"><img src="img/dinheiro.png"  width="35px" height="35px"> Receita Mensal </h5>
	                                <div class="card-body">
	                                    <canvas id="chartjs_bar_horizontal"></canvas>
	                                </div>
	                            </div>
	                        </div>
	                    </div>
	                 </div>
	               </div>
                 </div>
             </div>

            <!-- footer -->
            <!-- ============================================================== -->
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
            <!-- ============================================================== -->
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
      <script src="chart_js/custom_vagas.js"></script>
    <!-- fim -->
</body>
 
</html>
                        
