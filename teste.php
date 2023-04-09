
<?php
include_once "comando_php/crud_php/conexao_cadastro.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="chart_js/teste.js">
  
</script>
<?php

$query_Ocupado  = "SELECT COUNT(nm_status) as count_ocupado FROM tb_status_vagas WHERE nm_status = 'Ocupado' ";
    $result_Ocupado = $conn->prepare($query_Ocupado);
    $result_Ocupado->execute();
    $row_Ocupado = $result_Ocupado->fetch(PDO::FETCH_ASSOC);
    extract($row_Ocupado);

$query_Livre  = "SELECT COUNT(nm_status) as count_livre FROM tb_status_vagas WHERE nm_status = 'Livre' ";
    $result_Livre = $conn->prepare($query_Livre);
    $result_Livre->execute();
    $row_Livre = $result_Livre->fetch(PDO::FETCH_ASSOC);
    extract($row_Livre);

$query_reservado = "SELECT COUNT(nm_status) as count_reservado FROM tb_status_vagas WHERE nm_status = 'Reserva' ";
    $result_reservado = $conn->prepare($query_reservado);
    $result_reservado->execute();
    $row_reservado = $result_reservado->fetch(PDO::FETCH_ASSOC);
    extract($row_reservado);

?>


<div>
  <canvas id="myChart"></canvas>
</div>



</body>
</html>




