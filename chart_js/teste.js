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