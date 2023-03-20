 
<?php

include("crud_php/body.php");
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