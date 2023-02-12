 
<?php
include_once "conexao.php";
?>
<!doctype html>
<html lang="en">
 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="../assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/libs/css/style.css">
    <link rel="stylesheet" href="../assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <link rel="stylesheet" type="text/css" href="../assets/vendor/datatables/css/dataTables.bootstrap4.css">
    <link rel="stylesheet" type="text/css" href="../assets/vendor/datatables/css/buttons.bootstrap4.css">
    <link rel="stylesheet" type="text/css" href="../assets/vendor/datatables/css/select.bootstrap4.css">
    <link rel="stylesheet" type="text/css" href="../assets/vendor/datatables/css/fixedHeader.bootstrap4.css">
    <link rel="stylesheet" href="css/css.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="icon" href="img/vagas.ico" type="image/png">
    <title>VAGASPARK</title>
</head>

<body>
    <!-- ============================================================== -->
    <!-- main wrapper -->
    <!-- ============================================================== -->
    <div class="dashboard-main-wrapper">
         <!-- ============================================================== -->
        <!-- navbar -->
        <!-- ============================================================== -->
        <div class="dashboard-header">
            <nav class="navbar navbar-expand-lg bg-white fixed-top">
                <a class="navbar-brand" href="index.html">Vagas Park</a>
                
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse " id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto navbar-right-top">
                        <li class="nav-item">
                            <div id="custom-search" class="top-search-bar">
                                <input class="form-control" type="text" placeholder="Search..">
                            </div>
                        </li>
                        <li class="nav-item dropdown notification">
                            <a class="nav-link nav-icons"  id="navbarDropdownMenuLink1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-fw fa-bell"></i> <span class="indicator"></span></a>
                            <ul class="dropdown-menu dropdown-menu-right notification-dropdown">
                                <li>
                                    <div class="notification-title"> Notification</div>
                                    <div class="notification-list">
                                        <div class="list-group">
                                            <a  class="list-group-item list-group-item-action active">
                                                <div class="notification-info">
                                                    <div class="notification-list-user-img"><img src="assets/images/avatar-2.jpg" alt="" class="user-avatar-md rounded-circle"></div>
                                                    <div class="notification-list-user-block"><span class="notification-list-user-name">Jeremy Rakestraw</span>accepted your invitation to join the team.
                                                        <div class="notification-date">2 min ago</div>
                                                    </div>
                                                </div>
                                            </a>
                                            <a  class="list-group-item list-group-item-action">
                                                <div class="notification-info">
                                                    <div class="notification-list-user-img"><img src="assets/images/avatar-3.jpg" alt="" class="user-avatar-md rounded-circle"></div>
                                                    <div class="notification-list-user-block"><span class="notification-list-user-name">John Abraham </span>is now following you
                                                        <div class="notification-date">2 days ago</div>
                                                    </div>
                                                </div>
                                            </a>
                                            <a  class="list-group-item list-group-item-action">
                                                <div class="notification-info">
                                                    <div class="notification-list-user-img"><img src="assets/images/avatar-4.jpg" alt="" class="user-avatar-md rounded-circle"></div>
                                                    <div class="notification-list-user-block"><span class="notification-list-user-name">Monaan Pechi</span> is watching your main repository
                                                        <div class="notification-date">2 min ago</div>
                                                    </div>
                                                </div>
                                            </a>
                                            <a  class="list-group-item list-group-item-action">
                                                <div class="notification-info">
                                                    <div class="notification-list-user-img"><img src="assets/images/avatar-5.jpg" alt="" class="user-avatar-md rounded-circle"></div>
                                                    <div class="notification-list-user-block"><span class="notification-list-user-name">Jessica Caruso</span>accepted your invitation to join the team.
                                                        <div class="notification-date">2 min ago</div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="list-footer"> <a >View all notifications</a></div>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown connection">
                            <a class="nav-link"  id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="fas fa-fw fa-th"></i> </a>
                            <ul class="dropdown-menu dropdown-menu-right connection-dropdown">
                                <li class="connection-list">
                                    <div class="row">
                                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 ">
                                            <a  class="connection-item"><img src="assets/images/github.png" alt="" > <span>Github</span></a>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 ">
                                            <a  class="connection-item"><img src="assets/images/dribbble.png" alt="" > <span>Dribbble</span></a>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 ">
                                            <a  class="connection-item"><img src="assets/images/dropbox.png" alt="" > <span>Dropbox</span></a>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 ">
                                            <a  class="connection-item"><img src="assets/images/bitbucket.png" alt=""> <span>Bitbucket</span></a>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 ">
                                            <a  class="connection-item"><img src="assets/images/mail_chimp.png" alt="" ><span>Mail chimp</span></a>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 ">
                                            <a  class="connection-item"><img src="assets/images/slack.png" alt="" > <span>Slack</span></a>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="conntection-footer"><a >More</a></div>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown nav-user">
                            <a class="nav-link nav-user-img"  id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="assets/images/avatar-1.jpg" alt="" class="user-avatar-md rounded-circle"></a>
                            <div class="dropdown-menu dropdown-menu-right nav-user-dropdown" aria-labelledby="navbarDropdownMenuLink2">
                                <div class="nav-user-info">
                                    <h5 class="mb-0 text-white nav-user-name">John Abraham </h5>
                                    <span class="status"></span><span class="ml-2">Available</span>
                                </div>
                                <a class="dropdown-item" ><i class="fas fa-user mr-2"></i>Account</a>
                                <a class="dropdown-item" ><i class="fas fa-cog mr-2"></i>Setting</a>
                                <a class="dropdown-item" ><i class="fas fa-power-off mr-2"></i>Logout</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <!-- ============================================================== -->
        <!-- end navbar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- left sidebar -->
        <!-- ============================================================== -->
        <div class="nav-left-sidebar sidebar-dark">
            <div class="menu-list">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="d-xl-none d-lg-none" >Dashboard</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav flex-column">
                            <li class="nav-divider">
                                Menu
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link active"  data-toggle="collapse" aria-expanded="false" data-target="#submenu-1" aria-controls="submenu-1"><i class="fa fa-fw fa-user-circle"></i>Vagas Park<span class="badge badge-success">6</span></a>
                                <div id="submenu-1" class="collapse submenu">
                                    <ul class="nav flex-column">
                                         
                                        <li class="nav-item">
                                            <a class="nav-link"  data-toggle="collapse" aria-expanded="false" data-target="#submenu-1-2" aria-controls="submenu-1-2"><i class="fas fa-users"></i>Área Clientes</a>
                                            <div id="submenu-1-2" class="collapse submenu">
                                                <ul class="nav flex-column">
                                                    <li class="nav-item">
                                                        <!-- cadastro de cliente -->
                                                        <a class="nav-link"  data-toggle="collapse" aria-expanded="false" data-target="#submenu-1-5" aria-controls="submenu-1-5">Tabela Clientes</a>
                                                        <div id="submenu-1-5" class="collapse submenu">
                                                            <ul class="nav flex-column">
                                                                <li class="nav-item">
                                                                    <a class="nav-link" href="/dashboard_tcc/comando_php/data-tables.php">Lista de Clientes</a>
                                                                </li>
                                                                <li class="nav-item">
                                                                    <a class="nav-link" href="/dashboard_tcc/pages/general-table.html">Listas de Planos</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </li>  
                                                   
                                                    <li class="nav-item">
                                                        
                                                        <a class="nav-link" href="/dashboard_tcc/ecommerce-product-single.html">Detalhamento Cliente</a>
                                                    </li>
                                                    
                                                    <li class="nav-item">
                                                        <!-- cadastro de cliente -->
                                                        <a class="nav-link active"  data-toggle="collapse" aria-expanded="false" data-target="#submenu-1-1" aria-controls="submenu-1-1"><i class="fa fa-fw fa-user-circle"></i>Cadastro<span class="badge badge-success">6</span></a>
                                                       
                                                        <div id="submenu-1-1" class="collapse submenu">
                                                            <ul class="nav flex-column">
                                                                <li class="nav-item">
                                                                    <a class="nav-link" href="/dashboard_tcc/pages/form-elements.html">Carro</a>
                                                                </li>
                                                                <li class="nav-item">
                                                                    <a class="nav-link" href="/dashboard_tcc/ecommerce-product-checkout.html">Moto</a>
                                                                </li>
                                                                <li class="nav-item">
                                                                    <a class="nav-link" href="/dashboard_tcc/pages/form-validation.html">Bicicleta</a>
                                                                </li>
                                                                <li class="nav-item">
                                                                    <a class="nav-link" href="/dashboard_tcc/influencer-profile.html">Outros</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </li>  
                                                    <!-- fim do cadastro cliente -->
                                                    
                                                </ul>
                                            </div>
                                        </li>
                                        <!-- detalhamento financeiro -->
                                        
                            <li class="nav-item">
                                <a class="nav-link"  data-toggle="collapse" aria-expanded="false" data-target="#submenu-16" aria-controls="submenu-16"><i class="fas fa-building"></i>Detalhes Empresa</a>
                                <div id="submenu-16" class="collapse submenu">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="/dashboard_tcc/dashboard-sales.html">Graficos</a>
                                        </li>
                                        
                                        <li class="nav-item">
                                            <a class="nav-link" href="/dashboard_tcc/pages/invoice.html">Planilha</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" >vazio </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <!-- fim do comercio -->
                                       
                                        
                                        <!-- Feedback  -->
                                        <li class="nav-item">
                                            <a class="nav-link"  data-toggle="collapse" aria-expanded="false" data-target="#submenu-1-4" aria-controls="submenu-1-4"><i class=" fas fa-star-half"></i>Feedback</a>
	                                        <div id="submenu-1-4" class="collapse submenu">
	                                            <ul class="nav flex-column">
	                                                <li class="nav-item">
	                                                    <a class="nav-link" href="/dashboard_tcc/dashboard-influencer.html">Meu Feedback</a>
	                                                </li>
	                                                <li class="nav-item">
	                                                    <a class="nav-link" href="/dashboard_tcc/influencer-finder.html">Feedback Cliente</a>
	                                                </li>
	                                                <li class="nav-item">
	                                                    <a class="nav-link" href="/dashboard_tcc/influencer-profile.html">Feedback Empresa</a>
	                                                </li>
	                                            </ul>
	                                        </div>
	                                    </li>
	                                </ul>
	                            </div>
	                        </li>
                            <li class="nav-item">
                                <a class="nav-link"  data-toggle="collapse" aria-expanded="false" data-target="#submenu-2" aria-controls="submenu-2"><i class="fa fa-fw fa-rocket"></i>Avisos</a>
                                <div id="submenu-2" class="collapse submenu">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="/dashboard_tcc/pages/cards.html">Cards <span class="badge badge-secondary">New</span></a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="/dashboard_tcc/pages/general.html">General</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="/dashboard_tcc/pages/carousel.html">Carousel</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="/dashboard_tcc/pages/listgroup.html">List Group</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="/dashboard_tcc/pages/typography.html">Typography</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="/dashboard_tcc/pages/accordions.html">Accordions</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="/dashboard_tcc/pages/tabs.html">Tabs</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            
                            <li class="nav-item ">
                                <a class="nav-link"  data-toggle="collapse" aria-expanded="false" data-target="#submenu-4" aria-controls="submenu-4"><i class="fab fa-fw fa-wpforms"></i>Reservas</a>
                                <div id="submenu-4" class="collapse submenu">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="/dashboard_tcc/pages/multiselect.html">Reservas Avulso</a>
                                        </li>
                                        
                                    </ul>
                                </div>
                            </li>
                            <!-- comercio e vendas de produtos e plano -->
                            <li class="nav-item">
                                <a class="nav-link"  data-toggle="collapse" aria-expanded="false" data-target="#submenu-11" aria-controls="submenu-11"><i class="fas fa-shopping-cart"></i>Produtos & Planos</a>
                                <div id="submenu-11" class="collapse submenu">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="/dashboard_tcc/ecommerce-product.html">Nossos Produtos</a>
                                        </li>
                                        
                                        <li class="nav-item">
                                            <a class="nav-link" href="/dashboard_tcc/pages/pricing.html">Planos</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" >vazio </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <!-- fim do comercio -->
                            <li class="nav-divider">
                                Suporte Empresa
                            </li>
                            <li class="nav-item">
                                <a class="nav-link"  data-toggle="collapse" aria-expanded="false" data-target="#submenu-6" aria-controls="submenu-6"><i class="fas fa-fw fa-file"></i> Pages </a>
                                <div id="submenu-6" class="collapse submenu">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="/dashboard_tcc/pages/blank-page-header.html">Área em Branco</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="/dashboard_tcc/pages/login.html">Login</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="/dashboard_tcc/pages/404-page.html">404 página</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="/dashboard_tcc/pages/sign-up.html">Registro</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="/dashboard_tcc/pages/forgot-password.html">Esqueci o Password</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="/dashboard_tcc/pages/pricing.html">Tabela de Preços</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="/dashboard_tcc/pages/timeline.html">Linha do Tempo</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="/dashboard_tcc/pages/calendar.html">Calendario</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="/dashboard_tcc/pages/sortable-nestable-lists.html">Listas encaixáveis ​​ordenáveis</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="/dashboard_tcc/pages/widgets.html">Gráfico Dinâmico</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="/dashboard_tcc/pages/media-object.html">Objetos de mídia</a>
                                        </li>
                                        
                                        <li class="nav-item">
                                            <a class="nav-link" href="/dashboard_tcc/pages/color-picker.html">Seletor de cores</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link"  data-toggle="collapse" aria-expanded="false" data-target="#submenu-7" aria-controls="submenu-7"><i class="fas fa-fw fa-inbox"></i>Email Corporativo <span class="badge badge-secondary">New</span></a>
                                <div id="submenu-7" class="collapse submenu">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="/dashboard_tcc/pages/inbox.html">Caixa de Entrada</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="/dashboard_tcc/pages/email-details.html">Serviço de correio</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="/dashboard_tcc/pages/email-compose.html">Enviar Email</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="/dashboard_tcc/pages/message-chat.html">Mensagem Chat</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link"  data-toggle="collapse" aria-expanded="false" data-target="#submenu-8" aria-controls="submenu-8"><i class="fas fa-fw fa-columns"></i>Icons</a>
                                <div id="submenu-8" class="collapse submenu">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="/dashboard_tcc/pages/icon-fontawesome.html">FontAwesome Icons</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="/dashboard_tcc/pages/icon-material.html">Material Icons</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="/dashboard_tcc/pages/icon-simple-lineicon.html">Simpleline Icon</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="/dashboard_tcc/pages/icon-themify.html">Themify Icon</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="/dashboard_tcc/pages/icon-flag.html">Flag Icons</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="/dashboard_tcc/pages/icon-weather.html">Weather Icon</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link"  data-toggle="collapse" aria-expanded="false" data-target="#submenu-9" aria-controls="submenu-9"><i class="fas fa-fw fa-map-marker-alt"></i>Maps</a>
                                <div id="submenu-9" class="collapse submenu">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="/dashboard_tcc/pages/map-google.html">Google Maps</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="/dashboard_tcc/pages/map-vector.html">Vector Maps</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <!-- vazio esse menu -->
                            <li class="nav-item">
                                <a class="nav-link"  data-toggle="collapse" aria-expanded="false" data-target="#submenu-10" aria-controls="submenu-10"><i class="fas fa-f fa-folder"></i>Menu Vazio</a>
                                <div id="submenu-10" class="collapse submenu">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" >vazio 1</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link"  data-toggle="collapse" aria-expanded="false" data-target="#submenu-11" aria-controls="submenu-11">vazio 2</a>
                                            <div id="submenu-11" class="collapse submenu">
                                                <ul class="nav flex-column">
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="#">vazio 1</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="#">vazio 2</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">vazio 3</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>

        <!-- FIM DO MENU LATERAL @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ -->
        
        <!-- end left sidebar -->
        
        <div class="dashboard-wrapper">
            <div class="container-fluid  dashboard-content">
                <!-- ============================================================== -->
                <!-- pageheader -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-header">
                            <h2 class="pageheader-title">Data Tables</h2>
                            <p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet vestibulum mi. Morbi lobortis pulvinar quam.</p>
                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Tables</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Data Tables</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- end pageheader -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="container">
        

        <!-- SELETOR "msgAlerta" responsavel em receber a mensagem de sucesso ou erro -->
                    <span id="msgAlerta"></span>

                    <div class="row">
                        <div class="col-lg-12">
                            <!-- SELETOR "listar-usuarios" responsavel em receber os registros do banco de dados -->
                            <span class="listar-usuarios"></span>
                        </div>
                    </div>
                </div>
    <!-- Inicio Modal visualizar usuario -->
    <div class="modal fade" id="visUsuarioModal" tabindex="-1" aria-labelledby="visUsuarioModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="visUsuarioModalLabel">Visualizar Usuário</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                 </div>
                            <div class="modal-body">
                                <span id="msgAlertaErroVis"></span>
                                <dl class="row">
                                    <dt class="col-sm-3">ID</dt>
                                    <dd class="col-sm-9"><span id="idUsuario"></span></dd>
                                    
                                    <dt class="col-sm-3">Nome</dt>
                                    <dd class="col-sm-9"><span id="nomeUsuario"></span></dd>
                                    
                                    <dt class="col-sm-3">E-mail</dt>
                                    <dd class="col-sm-9"><span id="emailUsuario"></span></dd>
                                    
                                    <dt class="col-sm-3">Logradouro</dt>
                                    <dd class="col-sm-9"><span id="logradouroUsuario"></span></dd>
                                    
                                    <dt class="col-sm-3">Número</dt>
                                    <dd class="col-sm-9"><span id="numeroUsuario"></span></dd>

                            </dl>
                     </div>
                 </div>
             </div>
         </div>
    </div>
 </div>  
                    
                
            
                    
           
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <div class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                            Copyright © 2018 Concept. All rights reserved. Dashboard by <a href="https://colorlib.com/wp/">Colorlib</a>.
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
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
            <!-- end footer -->
            <!-- ============================================================== -->
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- end main wrapper -->
    <!-- ============================================================== -->
    <!-- Optional JavaScript -->
    <script src="../assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
    <script src="../assets/vendor/slimscroll/jquery.slimscroll.js"></script>
    <script src="../assets/vendor/multi-select/js/jquery.multi-select.js"></script>
    <script src="../assets/libs/js/main-js.js"></script>
    <script src="../../../../../cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="../assets/vendor/datatables/js/dataTables.bootstrap4.min.js"></script>
    <script src="../../../../../cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js"></script>
    <script src="../assets/vendor/datatables/js/buttons.bootstrap4.min.js"></script>
     <script src="../assets/vendor/datatables/js/data-table.js"></script>
    <script src="../../../../../cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="../../../../../cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
    <script src="../../../../../cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
    <script src="../../../../../cdn.datatables.net/buttons/1.5.2/js/buttons.html5.min.js"></script>
    <script src="../../../../../cdn.datatables.net/buttons/1.5.2/js/buttons.print.min.js"></script>
    <script src="../../../../../cdn.datatables.net/buttons/1.5.2/js/buttons.colVis.min.js"></script>
    <script src="../../../../../cdn.datatables.net/rowgroup/1.0.4/js/dataTables.rowGroup.min.js"></script>
    <script src="../../../../../cdn.datatables.net/select/1.2.7/js/dataTables.select.min.js"></script>
    <script src="../../../../../cdn.datatables.net/fixedheader/3.1.5/js/dataTables.fixedHeader.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="js/custom.js"></script>
    
</body>
 
</html>


  

   
</body>

</html>