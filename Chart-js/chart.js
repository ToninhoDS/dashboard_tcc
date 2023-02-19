// grafico linha 

$Lbarra1 = '2';
$Lbarra2 = '1';

const ctx = document.getElementById('myChart');
      
new Chart(ctx, {
  type: 'bar',
  data: {
    labels: ['Vagas', 'Blue'],
    datasets: [{
      label: '',
      data: [$Lbarra1, $Lbarra2, 3, 5, 2, 3],
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
// fim do grafico linha
// grafico linha 



$LL1 = '9';
$LL2 = '4';

const ctx2 = document.getElementById('myChart2');
      
new Chart(ctx2, {
  type: 'bar',
  data: {
    labels: ['Vagas', 'Blue'],
    datasets: [{
      label: '',
      data: [$LL1, $LL2, 3, 5, 2, 3],
      borderColor: 'black',
      backgroundColor: '#FFB1C9',
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
// fim do grafico linha
$Ltorta1 = '15';
$Ltorta2 = '4';

const ctx3 = document.getElementById('myChart3');
      
new Chart(ctx3, {
  type: 'line',
  data: {
    labels: ['Vagas', 'Blue'],
    datasets: [{
      label: '',
      data: [$Ltorta1, $Ltorta2],
      borderColor: 'black',
      backgroundColor: '#FFB1C9',
    }]
  },
  options: {
    scales: {
      y: {
        beginAtZero: 1
      }
    }
  }
});
// fim do grafico linha

const ctx4 = document.getElementById('myChart4');
new Chart(ctx4, {
    type: 'line',
    data: {
        labels: ['6h-12h', '12h-18h','18h-0h'],
        datasets: [{
            label: 'My First Dataset',
            data: [65, 59, 10],
            fill: false,
            borderColor: 'rgb(75, 192, 192)',
            borderWidth: 1
          }]  
    },
    
});

