<?php
include("comando_php/crud_php/body.php");
?>
<!doctype html>
<html lang="pt-BR">
 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/libs/css/style.css">
    <link rel="stylesheet" href="assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <link rel="stylesheet" href="assets/vendor/charts/morris-bundle/morris.css">
    <link rel="stylesheet" href="assets/vendor/fonts/material-design-iconic-font/css/materialdesignicons.min.css">
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
                                    
                                    <canvas id="myChart"  width="415" height="100"></canvas>
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
                                    <canvas id="myChart_maior"  width="415" height="100"></canvas>
                                </div>
                            </div>
                            
                        </div>
                        <div class="row">
                            <!-- ============================================================== -->
                                <!-- tabela financeira -->
                            <div class="col-xl-9 col-lg-12 col-md-6 col-sm-12 col-12">
                                <div class="card">
                                    <h5 class="card-header">Recent Orders</h5>
                                    <div class="card-body p-0">
                                        <div class="table-responsive">
                                            <table class="table">
                                                <thead class="bg-light">
                                                    <tr class="border-0">
                                                        <th class="border-0">#</th>
                                                        <th class="border-0">Image</th>
                                                        <th class="border-0">Product Name</th>
                                                        <th class="border-0">Product Id</th>
                                                        <th class="border-0">Quantity</th>
                                                        <th class="border-0">Price</th>
                                                        <th class="border-0">Order Time</th>
                                                        <th class="border-0">Customer</th>
                                                        <th class="border-0">Status</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>
                                                            <div class="m-r-10"><img src="assets/images/product-pic.jpg" alt="user" class="rounded" width="45"></div>
                                                        </td>
                                                        <td>Product #1 </td>
                                                        <td>id000001 </td>
                                                        <td>20</td>
                                                        <td>$80.00</td>
                                                        <td>27-08-2018 01:22:12</td>
                                                        <td>Patricia J. King </td>
                                                        <td><span class="badge-dot badge-brand mr-1"></span>InTransit </td>
                                                    </tr>
                                                    <tr>
                                                        <td>2</td>
                                                        <td>
                                                            <div class="m-r-10"><img src="assets/images/product-pic-2.jpg" alt="user" class="rounded" width="45"></div>
                                                        </td>
                                                        <td>Product #2 </td>
                                                        <td>id000002 </td>
                                                        <td>12</td>
                                                        <td>$180.00</td>
                                                        <td>25-08-2018 21:12:56</td>
                                                        <td>Rachel J. Wicker </td>
                                                        <td><span class="badge-dot badge-success mr-1"></span>Delivered </td>
                                                    </tr>
                                                    <tr>
                                                        <td>3</td>
                                                        <td>
                                                            <div class="m-r-10"><img src="assets/images/product-pic-3.jpg" alt="user" class="rounded" width="45"></div>
                                                        </td>
                                                        <td>Product #3 </td>
                                                        <td>id000003 </td>
                                                        <td>23</td>
                                                        <td>$820.00</td>
                                                        <td>24-08-2018 14:12:77</td>
                                                        <td>Michael K. Ledford </td>
                                                        <td><span class="badge-dot badge-success mr-1"></span>Delivered </td>
                                                    </tr>
                                                    <tr>
                                                        <td>4</td>
                                                        <td>
                                                            <div class="m-r-10"><img src="assets/images/product-pic-4.jpg" alt="user" class="rounded" width="45"></div>
                                                        </td>
                                                        <td>Product #4 </td>
                                                        <td>id000004 </td>
                                                        <td>34</td>
                                                        <td>$340.00</td>
                                                        <td>23-08-2018 09:12:35</td>
                                                        <td>Michael K. Ledford </td>
                                                        <td><span class="badge-dot badge-success mr-1"></span>Delivered </td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="9"><a href="#" class="btn btn-outline-light float-right">View Details</a></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- fim da tabela financeira -->
                            <div class="col-xl-3 col-lg-12 col-md-6 col-sm-12 col-12">
                                <!-- ============================================================== -->
                                <!-- Tabela Afilias  -->
                        
                                <div class="card">
                                    <h5 class="card-header">Tabelas de  afiliais</h5>
                                    <div class="card-body p-0">
                                        <div class="table-responsive">
                                            <table class="table no-wrap p-table">
                                                <thead class="bg-light">
                                                    <tr class="border-0">
                                                        <th class="border-0">Estacionamento</th>
                                                        <th class="border-0">Dono</th>
                                                        <th class="border-0">Detalhes</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>Vagas  Park</td>
                                                        <td>98,789 </td>
                                                        <td>$4563</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Vagas  Park</td>
                                                        <td>2,789 </td>
                                                        <td>$325</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Vagas  Park</td>
                                                        <td>1,459 </td>
                                                        <td>$225</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Vagas  Park</td>
                                                        <td>5,035 </td>
                                                        <td>$856</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Vagas  Park</td>
                                                        <td>10,000 </td>
                                                        <td>$1000</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Vagas  Park</td>
                                                        <td>10,000 </td>
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
	                                        <h2 class="mb-0"> 10</h2>
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
	                                        <h2 class="mb-0"> 24</h2>
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
	                                        <h2 class="mb-0">20</h2>
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
	                                        <h5 class="text-muted">Lucro do Dia</h5>
	                                        <h2 class="mb-0"> $1.049.00</h2>
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
	                                <h5 class="card-header">Followers by Gender</h5>
	                                <div class="card-body">
	                                    <div id="gender_donut" style="height: 230px;"></div>
	                                </div>
	                                <div class="card-footer p-0 bg-white d-flex">
	                                    <div class="card-footer-item card-footer-item-bordered w-50">
	                                        <h2 class="mb-0"> 50% </h2>
	                                        <p>Vagas</p>
	                                    </div>
	                                    <div class="card-footer-item card-footer-item-bordered">
	                                        <h2 class="mb-0">40% </h2>
	                                        <p>Ocupado</p>
	                                    </div>
	                                </div>
	                            </div>
	                        </div>
						<div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
							<div class="card">
								<h5 class="card-header">Followers by Age</h5>
								<div class="card-body">
									<div class="mb-3">
										<div class="d-inline-block">
											<h4 class="mb-0">15 - 20</h4>
										</div>
										<div class="progress mt-2 float-right progress-md">
											<div class="progress-bar bg-secondary" role="progressbar" style="width: 60%;" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
										</div>
									</div>
									<div class="mb-3">
										<div class="d-inline-block">
											<h4 class="mb-0">20 - 25</h4>
										</div>
										<div class="progress mt-2 float-right progress-md">
											<div class="progress-bar bg-secondary" role="progressbar" style="width: 55%;" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
										</div>
									</div>
									<div class="mb-3">
										<div class="d-inline-block">
											<h4 class="mb-0">25 - 30</h4>
										</div>
										<div class="progress mt-2 float-right progress-md">
											<div class="progress-bar bg-secondary" role="progressbar" style="width: 65%;" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
										</div>
									</div>
									<div class="mb-3">
										<div class="d-inline-block">
											<h4 class="mb-0">30 - 35</h4>
										</div>
										<div class="progress mt-2 float-right progress-md">
											<div class="progress-bar bg-secondary" role="progressbar" style="width: 35%;" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
										</div>
									</div>
									<div class="mb-3">
										<div class="d-inline-block">
											<h4 class="mb-0">35 - 40</h4>
										</div>
										<div class="progress mt-2 float-right progress-md">
											<div class="progress-bar bg-secondary" role="progressbar" style="width: 21%;" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
										</div>
									</div>
									<div class="mb-3">
										<div class="d-inline-block">
											<h4 class="mb-0">45 - 50</h4>
										</div>
										<div class="progress mt-2 float-right progress-md">
											<div class="progress-bar bg-secondary" role="progressbar" style="width: 85%;" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
										</div>
									</div>
									<div class="mb-3">
										<div class="d-inline-block">
											<h4 class="mb-0">50 - 55</h4>
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
	                                <h5 class="card-header">Top Folllowes by Locations </h5>
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
     <!-- jquery 3.3.1 js-->
     <script  src="assets/vendor/jquery/jquery-3.3.1.min.js"></script>
     <!-- bootstrap bundle js-->
     <script src="assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
     <!-- slimscroll js-->
     <script src="assets/vendor/slimscroll/jquery.slimscroll.js"></script>
    <script src="assets/libs/js/main-js.js"></script>
    <!-- chart chartist js -->
    <script src="assets/vendor/charts/chartist-bundle/chartist.min.js"></script>
    <!-- sparkline js -->
    <script src="assets/vendor/charts/sparkline/jquery.sparkline.js"></script>
    <!-- morris js -->
    <script src="assets/vendor/charts/morris-bundle/raphael.min.js"></script>
    <script src="assets/vendor/charts/morris-bundle/morris.js"></script>
    <!-- chart c3 js -->
    <script src="assets/vendor/charts/c3charts/c3.min.js"></script>
    <script src="assets/vendor/charts/c3charts/d3-5.4.0.min.js"></script>
    <script src="assets/vendor/charts/c3charts/C3chartjs.js"></script>
    <script src="assets/libs/js/dashboard-ecommerce.js"></script>

   <!-- java do Chats js Antonio  Graficos -->
   <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.2.1/chart.js" integrity="sha512-Cv3WnEz5uGwmTnA48999hgbYV1ImGjsDWyYQakowKw+skDXEYYSU+rlm9tTflyXc8DbbKamcLFF80Cf89f+vOQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
      <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
      <script src="chart_js/chart.js"></script>
      <script src="assets/vendor/jquery/jquery-3.3.1.min.js"></script>
	<script src="assets/vendor/charts/morris-bundle/morris.js"></script>
	                    <!-- chart js -->
	                    <script src="assets/vendor/charts/charts-bundle/Chart.bundle.js"></script>
	                    <script src="assets/vendor/charts/charts-bundle/chartjs.js"></script>
	                    <!-- dashboard js Antonio -->
	                    <script src="chart_js/dashboard-influencer.js"></script>
    <!-- fim -->
</body>
 
</html>
                        
