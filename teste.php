<?php
include_once "comando_php/crud_php/conexao_cadastro.php";

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

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
  const ctx = document.getElementById('myChart');

  new Chart(ctx, {
    type: 'bar',
    data: {
      labels: ['Ocupado', 'Livre', 'Reserva'],
      datasets: [{
        label: '# of Votes',
        data: [<?php echo $count_ocupado ?>,<?php echo $count_livre ?>,<?php echo $count_reservado ?>],
        backgroundColor: [
      'rgba(201, 203, 207, 0.2)',
      'rgba(75, 192, 192, 0.2)',
      'rgba(255, 99, 132, 0.2)'
        ],
        borderWidth: 1
      }]
    },
    options: {
      scales: {
        y: {
          beginAtZero: true
        }
      }
    }
  });
</script>