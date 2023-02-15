<?php
session_start(); // iniciar a sessao
?> 
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link="">
    <link rel="stylesheet" href="fonts-icones.css"> <!--fonte icones-->
    <link rel="stylesheet" href="css/css.css"> <!--fonte icones-->
    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    
    
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
    <title>Estacionamento</title>
</head>
<body>
    
    <div class="container " style="text-align: center ; font-size: center;"><!--container agrupa tudo e deixar com margem das bordas-->

        <form class="well form-horizontal" action="processaF.php" method="GET"  id="contact_form">
               <!-- well form-h deixa tudo no container separado em estilizado--> 
    <fieldset>
    
    <!-- Form Name -->
    <legend>Cadastro do Cliente - Estacionamento</legend>
    <?php   // iniciar a sessao depois de feito o cadastro ou erro
    if(isset($_SESSION['msg'])){
        echo $_SESSION['msg'];
        unset($_SESSION['msg']); // é para destruir a mensagem  global para nao reproduzir de novo
    }  

?>
    
    <!-- Text input-->
    
    <div class="form-group">
       
      <label class="col-md-3 control-label">Nome</label>  
      <div class="col-md-3 inputGroupContainer">
      <div class="input-group">
      <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
      <input  name="nm_cliente" id="nm_cliente" required="" placeholder="Digite o nome" class="form-control"  type="text">
        </div>
      </div>
       <div class="col-md-3 inputGroupContainer">
      <div class="input-group">
      <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
      <input  name="cd_cpf" id="cd_cpf" placeholder="Digite o CPF" class="form-control"  type="text">
        </div>
      </div>
       <div class="col-md-3 inputGroupContainer">
      <div class="input-group">
      <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
      <input  name="cd_cnpj" id="cd_cnpj" placeholder="Digite o CNPJ" class="form-control"  type="text">
        </div>
      </div>
      
      
    </div>
    
    <!-- Text input-->
    
    <div class="form-group">
      <label class="col-md-3 control-label" >Dados</label> 
        <div class="col-md-3 inputGroupContainer">
        <div class="input-group">
      <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
      <input name="cd_email_cliente" id="cd_email_cliente" placeholder="Email" class="form-control"  type="text">
        </div>
      </div>
      
        <div class="col-md-3 inputGroupContainer">
        <div class="input-group">
      <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
      <input name="nm_endereco" id="nm_endereco" placeholder="Endereço" required="" class="form-control"  type="text">
        </div>
      </div>
        <div class="col-md-3 inputGroupContainer">
        <div class="input-group">
      <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
      <input name="nm_cidade" id="nm_cidade" placeholder="Sua cidade" required="" class="form-control"  type="text">
        </div>
      </div>
    </div>
    
    <!-- Text input-->
           <div class="form-group">
      <label class="col-md-3 control-label">Dados</label>  
        <div class="col-md-5 inputGroupContainer">
        <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
      <input name="nm_bairro" id="nm_bairro" placeholder="Seu Bairro " required="" class="form-control"  type="text">
        </div>
      </div>
             <div class="col-md-4 inputGroupContainer">
        <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
      <input name="sg_uf" id="sg_uf" placeholder="UF " required="" class="form-control"  type="text">
        </div>
      </div>
             
    </div>
    
    
    <!-- Text input-->
           
    <div class="form-group">
      <label class="col-md-3 control-label">Dados</label>
      <div class="col-md-5 inputGroupContainer">
        <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
      <input name="cd_numero1" id="cd_numero1" placeholder="Digite o numero" required="" class="form-control"  type="text">
        </div>
      </div>  
        <div class="col-md-4 inputGroupContainer">
        <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
      <input name="cd_numero2" id="cd_numero2" placeholder="Outro telefone" required="" class="form-control" type="text">
        </div>
      </div>
      
       
    </div>
    <legend>Cadastro de Login</legend>
    
    <!-- Text input-->
          
    <div class="form-group">
      <label class="col-md-3 control-label">Address</label>  
        <div class="col-md-5 inputGroupContainer">
        <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon glyphicon-pencil"></i></span>
      <input name="cd_email_login" id="cd_email_login" placeholder="Email" required="" class="form-control" type="text">
        </div>
      </div>
        <div class="col-md-4 inputGroupContainer">
        <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon 
              glyphicon glyphicon-asterisk"></i></span>
      <input name="cd_senha_login" id="cd_senha_login" placeholder="Senha" required="" class="form-control" type="password">
        </div>
      </div>
        
    </div>
    
    <!-- Text input-->
    <legend>Cadastro do Carro</legend>
     
    <div class="form-group">
      <label class="col-md-3 control-label">Dados</label>  
        <div class="col-md-2 inputGroupContainer">
        <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon glyphicon-list-alt"></i></span>
      <input type="text" name="nm_marca" id="nm_marca" placeholder="marca" required="" class="form-control"  type="text">
        </div>
      </div>
        <div class="col-md-3 inputGroupContainer">
        <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon glyphicon-list-alt"></i></span>
      <input type="text" name="nm_modelo" id="nm_modelo" placeholder="Modelo" required="" class="form-control"  type="text">
        </div>
      </div>
        <div class="col-md-2 inputGroupContainer">
        <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon glyphicon-list-alt"></i></span>
      <input type="text" name="nm_cor" id="nm_cor" placeholder="Cor" required="" class="form-control"  type="text">
        </div>
      </div>
        <div class="col-md-2 inputGroupContainer">
        <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon glyphicon-list-alt"></i></span>
      <input type="text" name="cd_placa" id="cd_placa" placeholder="Placa" required="" class="form-control"  type="text">
        </div>
      </div>
    </div>
    
    <!-- Select cidade -->
       
    <!-- <div class="form-group"> 
      <label class="col-md-3 control-label">State</label>
        <div class="col-md-3 selectContainer">
         <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
        <select name="state" class="form-control selectpicker" >
          <option value=" " >Please select your state</option>
          <option>Alabama</option>
          <option>Alaska</option>
          <option >Arizona</option>
          <option >Arkansas</option>
          <option >California</option>
          <option >Colorado</option>
          <option >Connecticut</option>
          <option >Delaware</option>
          <option >District of Columbia</option>
          <option> Florida</option>
          <option >Georgia</option>
          <option >Hawaii</option>
          <option >daho</option>
          <option >Illinois</option>
          <option >Indiana</option>
          <option >Iowa</option>
          <option> Kansas</option>
          <option >Kentucky</option>
          <option >Louisiana</option>
          <option>Maine</option>
          <option >Maryland</option>
          <option> Mass</option>
          <option >Michigan</option>
          <option >Minnesota</option>
          <option>Mississippi</option>
          <option>Missouri</option>
          <option>Montana</option>
          <option>Nebraska</option>
          <option>Nevada</option>
          <option>New Hampshire</option>
          <option>New Jersey</option>
          <option>New Mexico</option>
          <option>New York</option>
          <option>North Carolina</option>
          <option>North Dakota</option>
          <option>Ohio</option>
          <option>Oklahoma</option>
          <option>Oregon</option>
          <option>Pennsylvania</option>
          <option>Rhode Island</option>
          <option>South Carolina</option>
          <option>South Dakota</option>
          <option>Tennessee</option>
          <option>Texas</option>
          <option> Uttah</option>
          <option>Vermont</option>
          <option>Virginia</option>
          <option >Washington</option>
          <option >West Virginia</option>
          <option>Wisconsin</option>
          <option >Wyoming</option>
        </select>
      </div> 
    </div>
    </div> -->
    
    <!-- entrada e saida carro cadastro-->
    
    <div class="form-group">
      <label class="col-md-3 control-label">Entrada</label>  
        <div class="col-md-2 inputGroupContainer">
        <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon gglyphicon glyphicon-transfer"></i></span>
      <input type="time" name="hr_entrada" id="hr_entrada" placeholder="Entrada" required="" class="form-control"  type="text">
        </div>
    </div>
    <label class="col-md-1 control-label">Saida</label>
        <div class="col-md-2 inputGroupContainer">
        <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon glyphicon-transfer"></i></span>
      <input type="time" name="hr_saida" id="hr_saida" placeholder="saida" required="" class="form-control"  type="text">
        </div>
    </div>
    <label class="col-md-1 control-label">Localização</label>
        <div class="col-md-3 inputGroupContainer">
        <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon glyphicon-map-marker"></i></span>
      <input type="text" name="ds_patio" id="ds_patio" placeholder="Localização" required="" class="form-control"  type="text">
        </div>
    </div>
    </div>
    
    <!-- entrada e saida de carro-->
    <legend>Controle do Estacionamento</legend>
    <div class="form-group">
      <label class="col-md-3 control-label">Entrada</label>  
       <div class="col-md-4 inputGroupContainer">
        <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-globe"></i></span>
      <input name="dt_entrada" id="dt_entrada" placeholder="Entrada" required="" class="form-control" type="date">
        </div>
      </div>
      <label class="col-md-1 control-label">Saída</label> 
       <div class="col-md-4 inputGroupContainer">
        <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-globe"></i></span>
      <input name="dt_saida" id="dt_saida" placeholder="Saida" class="form-control" type="date">
        </div>
      </div>
    </div>

    <!-- controle de vagas -->
    <legend>Controle de Vagas</legend>
    <div class="form-group">
      <label class="col-md-3 control-label">Num. Vagas</label>  
       <div class="col-md-4 inputGroupContainer">
        <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-globe"></i></span>
      <input type="text" name="cd_numero" id="cd_numero" placeholder="Numero" required="" required="" class="form-control" type="date">
        </div>
      </div>
      <label class="col-md-1 control-label">Indisponiveis</label> 
       <div class="col-md-4 inputGroupContainer">
        <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-globe"></i></span>
      <input type="text" name="ds_status" id="ds_status" placeholder="Vaga disponive?" required="" class="form-control" type="date">
        </div>
      </div>
    </div>
      
    
    

  
    <!-- Button -->
    <div class="form-group">
      <label class="col-md-4 control-label"></label>
      <div class="col-md-12">
        <button type="submit" style="font-size: 30px; width: 100%;text-align: center" class="btn btn-warning" >Enviar <span class="glyphicon glyphicon-send"></span></button>
      </div>
    </div>
    
    </fieldset>
    </form>
    </div>
        </div><!-- /.container -->
        <link rel="stylesheet" href="js.js"> <!--fonte icones-->
</body>
</html>