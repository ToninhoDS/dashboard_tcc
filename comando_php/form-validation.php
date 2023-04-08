<?php
session_start(); // iniciar a sessao
include('crud_php/body.php');
?> 
<!doctype html>
<html lang="en"> 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <link rel="stylesheet" href="../css_dash/bootstrap.min.css"> 
    <link href="../css_dash/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="../css_dash/caixa_estilo.css"> 
    <link rel="stylesheet" href="../css_dash/fonts/fontawesome/css/fontawesome-all.css">
    <link rel="stylesheet" href="../css_dash/morris.css">
    <link rel="stylesheet" href="../css_dash/fonts/material-design-iconic-font/css/materialdesignicons.min.css">
    <link rel="icon" href="img/vagas.ico" type="image/png">
    <title>VAGASPARK</title>
</head>

<body>
     <!-- GUIA DO MENU -->
        <div class="dashboard-wrapper">
            <div class="container-fluid  dashboard-content">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-header">
                            <h2 class="pageheader-title">Formulario Cliente</h2>
                            <p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet vestibulum mi. Morbi lobortis pulvinar quam.</p>
                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Área Cliente</a></li>
                                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Cadastro</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Formulário</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
<?php   // iniciar a sessao depois de feito o cadastro ou erro
if(isset($_SESSION['msg'])){
        echo $_SESSION['msg'];
        unset($_SESSION['msg']); 
        // é para destruir a mensagem  global para nao reproduzir de novo
    }  

?>
                <!-- ============================================================== -->
                <!-- 1 FORMULARIO DE CADASTRO CLIENTE SIMPLE-->
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="card">
                                <h2 class="card-header">Cadastro Cliente</h2>
                                <div class="card-body">
                                    <form class="needs-validation" novalidate action="cadastrar_cliente.php" method="POST"  id="contact_form">


    
                                        <div class="row">
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                                <label for="validationCustom01">Nome completo</label>
                                                <input  name="nm_cliente" id="nm_cliente" required="" placeholder="Digite o nome" class="form-control"  type="text" >
                                                <div class="valid-feedback">
                                                    Correto!
                                                </div>
                                            </div>
                                            <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mb-2">
                                                <label for="validationCustom03">CPF</label>
                                                <input  name="cd_cpf" id="cd_cpf" placeholder="Digite o CPF" required="" class="form-control"  type="text">
                                                <div class="invalid-feedback">
                                                    CPF incorreto!.
                                                </div>
                                            </div>
                                            <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mb-2">
                                                <label for="validationCustom04">CNPJ</label>
                                                <input  name="cd_cnpj" id="cd_cnpj" placeholder="Digite o CNPJ" class="form-control"  type="text">
                                                <div class="invalid-feedback">
                                                    Please provide a valid state.
                                                </div>
                                            </div>
                                            <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mb-2">
                                                <label for="validationCustom05">Celular</label>
                                                <input name="cd_numero1" id="cd_numero1" placeholder="Digite o numero"  class="form-control"  type="text">
                                                <div class="invalid-feedback">
                                                    Numero incorreto!.
                                                </div>
                                            </div>
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                                <label for="validationCustomUsername">Email</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text" id="inputGroupPrepend">📧 </span>
                                                    </div>
                                                    <input name="cd_email_cliente" id="cd_email_cliente" placeholder="Email" class="form-control"  type="text">
                                                    <div class="invalid-feedback">
                                                        Email incorreto!.
                                                    </div>&nbsp;&nbsp;&nbsp;&nbsp;
                                                    
                                                
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text" id="inputGroupPrepend">🔒</span>
                                                    </div>
                                                                                                        
                                                    <input name="cd_senha_cliente" id="cd_senha_cliente" placeholder="Senha" class="form-control"  type="text">
                                                    <div class="invalid-feedback">
                                                        Email incorreto!.
                                                    </div>&nbsp;&nbsp;&nbsp;&nbsp;
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text" id="inputGroupPrepend">🔒👍</span>
                                                    </div>
                                                    <input name="cd_senha_cliente_confirmar" id="cd_senha_cliente_confirmar" placeholder="Confirmar senha" class="form-control"  type="text">
                                                    <div class="invalid-feedback">
                                                        Email incorreto!.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mb-2">
                                                <label for="validationCustom03">Placa do Carro</label>
                                                <input type="text" name="cd_placa" id="cd_placa" placeholder="NUMERO DA PLACA" required="" class="form-control"  type="text">
                                                <div class="invalid-feedback">
                                                    Placa do Carro invalida!.
                                                </div>
                                            </div>
                                            <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mb-2">
                                                <label for="validationCustom03">Modelo</label>
                                                <input type="text" name="nm_modelo" id="nm_modelo" placeholder="Modelo"  class="form-control"  type="text">
                                                <div class="invalid-feedback">
                                                    Modelo do Carro invalido!.
                                                </div>
                                            </div>
                                            <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mb-2">
                                                <label for="validationCustom03">Cor</label>
                                                <input type="text" name="nm_cor" id="nm_cor" placeholder="Cor do carro" class="form-control"  type="text">
                                                <div class="invalid-feedback">
                                                    Cor do Carro invalido!.
                                                </div>
                                            </div>
                                            
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                <div class="form-group">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                                                        <label class="form-check-label" for="invalidCheck">
                                                            As informações estão corretas?
                                                        </label>
                                                        <div class="invalid-feedback">
                                                            Você, precisa confirma, se as informações estão corretas!
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                                <button class="btn btn-primary" type="submit">Cadastrar</button>
                                                
                                            </div>
                                        </div>
                                    </form>
                                         <!-- ir para tabelas cliente cadastrado -->               
                                        <div class="botao-ir-tabela">
                                             <form action="data-tables.php" class="needs-validation">
                                              <button class="btn btn-info" type="submdit">Ir para tabela Cadastro</button>
                                            </form>
                                        </div>
                                        <!-- fim -->
                                </div>
                            </div>
                        </div>
                       
                    </div>
                    <!-- FIM  FORMULARIO 2 DE CADASTRO CLIENTE SIMPLE- -->
                    <!-- ============================================================== -->
                    

                    <!--  FORMULARIO 2-->
                    <!-- ============================================================== -->
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                            <div class="card">
                                <h2 class="card-header">Cadastro Simples de Carro</h2>
                                <div class="card-body">
                                    <form action="#" id="basicform" data-parsley-validate="">
                                        <div class="form-group">
                                            <label for="inputUserName">User Name</label>
                                            <input id="inputUserName" type="text" name="name" data-parsley-trigger="change" required="" placeholder="Enter user name" autocomplete="off" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="inputEmail">Email address</label>
                                            <input id="inputEmail" type="email" name="email" data-parsley-trigger="change" required="" placeholder="Enter email" autocomplete="off" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="inputPassword">Password</label>
                                            <input id="inputPassword" type="password" placeholder="Password" required="" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="inputRepeatPassword">Repeat Password</label>
                                            <input id="inputRepeatPassword" data-parsley-equalto="#inputPassword" type="password" required="" placeholder="Password" class="form-control">
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-6 pb-2 pb-sm-4 pb-lg-0 pr-0">
                                                <label class="be-checkbox custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input"><span class="custom-control-label">Remember me</span>
                                                </label>
                                            </div>
                                            <div class="col-sm-6 pl-0">
                                                <p class="text-right">
                                                    <button type="submit" class="btn btn-space btn-primary">Confirmar</button>
                                                    <button class="btn btn-space btn-secondary">Cancelar</button>
                                                </p>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- ============================================================== -->
                        <!-- end basic form -->
                        <!-- ============================================================== -->
                        <!-- ============================================================== -->
                        <!-- horizontal form -->
                        <!-- ============================================================== -->
                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                            <div class="card">
                                <h2 class="card-header">Cadastro de Bicleta e Outros</h2>
                                <div class="card-body">
                                    <form id="form" novalidate action="cadastrar_bike_outros.php" method="POST"  id="cadastro_bike_outros">
                                    <div class="form-group row">
                                            <label for="inputEmail2" class="col-3 col-lg-2 col-form-label text-right">Transporte</label>
                                            <div class="col-9 col-lg-10">
                                                <input id="cd_transporte" name="cd_transporte" type="text" required="" data-parsley-type="email" placeholder="Qual meio de Transporte?" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputPassword2" class="col-3 col-lg-2 col-form-label text-right">Informação</label>
                                            <div class="col-9 col-lg-10">
                                                <input id="cd_detalhes" name="cd_detalhes" type="text" required="" placeholder="Detalhes" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputPassword2" class="col-3 col-lg-2 col-form-label text-right">Nome do Cliente</label>
                                            <div class="col-9 col-lg-10">
                                                <input id="cd_nome" type="text"  name="cd_nome" required="" placeholder="Nome" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputWebSite" class="col-3 col-lg-2 col-form-label text-right">Observações</label>
                                            <div class="col-9 col-lg-10">
                                                <input id="cd_observacao"  name="cd_observacao" type="text" required="" data-parsley-type="url" placeholder="..." class="form-control">
                                            </div>
                                        </div>
                                        <div class="row pt-2 pt-sm-5 mt-1">
                                            <div class="col-sm-6 pb-2 pb-sm-4 pb-lg-0 pr-0">
                                                <label class="be-checkbox custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input"><span class="custom-control-label">Está tudo correto?</span>
                                                </label>
                                            </div>
                                            <div class="col-sm-6 pl-0">
                                                <p class="text-right">
                                                    <button type="submit" class="btn btn-space btn-primary">Confirmar</button>
                                                    <button class="btn btn-space btn-secondary">Cancelar</button>
                                                </p>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- ============================================================== -->
                        <!-- end horizontal form -->
                        <!-- ============================================================== -->
                    </div>
                    <div class="row">
                        <!-- ============================================================== -->
                        <!-- valifation types -->
                        <!-- ============================================================== -->
                        
                        <!-- ============================================================== -->
                        <!-- end valifation types -->
                        <!-- ============================================================== -->
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
      <script src="chart_js/jquery-3.3.1.min.js"></script>
    <script src="chart_js/bootstrap.bundle.js"></script>
    <script src="chart_js/jquery.slimscroll.js"></script>
    <script src="assets/vendor/parsley/parsley.js"></script>
    <script src="chart_js/main-js.js"></script>
    <script>
    $('#form').parsley();
    </script>
    <script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (function() {
        'use strict';
        window.addEventListener('load', function() {
            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.getElementsByClassName('needs-validation');
            // Loop over them and prevent submission
            var validation = Array.prototype.filter.call(forms, function(form) {
                form.addEventListener('submit', function(event) {
                    if (form.checkValidity() === false) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
            });
        }, false);
    })();
    </script>
</body>
 
</html>