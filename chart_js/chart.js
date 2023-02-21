// grafico de Barra, vagas e resevas
let ptg ="%"
var vagasLivres = 6; 
var vagasOcupadas = 7; 
var vagasResevadas = 5; 
var desistencia = 4;
var totalVagas = 49; // total de vagas no estacionamento
var totalDesistencia = 0;
var somaVagasOcupadas = 0;
somaVagasOcupadas += vagasLivres + vagasOcupadas + vagasResevadas;
totalDesistencia = (desistencia / 100) * totalVagas;
document.getElementById('vagasLivesOcupadas').innerHTML = somaVagasOcupadas; // valor total de vagas
document.getElementById('reservasCanceladas').innerHTML = totalDesistencia+ptg; //calcular o resto, concatenar uma string '+'
const ctx = document.getElementById('myChart');
new Chart(ctx, {
  type: 'bar',
  data: {
    labels: ['Vagas', 'Ocupadas','Resevada', 'Desistêcia'],
    datasets: [{
      label: 'My First Dataset',
      data: [vagasLivres, vagasOcupadas, vagasResevadas, desistencia],
      backgroundColor: [
        'rgba(54, 162, 235, 0.2)',
        'rgba(255, 159, 64, 0.2)',
        'rgba(255, 205, 86, 0.2)',
        'rgba(201, 203, 207, 0.2)'
       
      ],
      borderColor: [
        'rgb(54, 162, 235)',
        'rgb(255, 159, 64)',
        'rgb(255, 205, 86)',
        'rgb(201, 203, 207)'
        
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
// fim do grafico linha



const ctx2 = document.getElementById('myChart2');
      
new Chart(ctx2, {
  type: 'bar',
  data: {
    labels: ['Vagas', 'Blue'],
    datasets: [{
      label: '',
      data: [1, 2, 2, 3],
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



  
 
// variaveis de vagas ocupadas  
var  array_VagasOcupadas= [
  ocupado8h =2,
  ocupado10 = 4,
  ocupado12h = 7,
  ocupado14h = 1,
  ocupado16h = 10,
  ocupado18h = 1,
  ocupado20h = 6,
  ocupado22h = 2,
  ocupado0h = 1,
  ocupado2h = 7,
  ocupado4h = 8,
]
// soma da array estrutura de repetição
var soma = 0;
for(var i = 0; i < array_VagasOcupadas.length; i++) {
    soma += array_VagasOcupadas[i]; // soma da array
    
  
}
document.getElementById('vagasOcupadas').innerHTML = soma; // apresentar no id 
const ctx4 = document.getElementById('myChart_maior');
new Chart(ctx4, {
    type: 'line',
    data: {
        labels: ['6h-8h','8h-10h','10h-12h','12h-14h','14h-16h','16h-18h','18h-20h','20h-22h','24h-0h','0h-2h','2h-4h'],
        datasets: [{
            label: 'Vagas ocupadas por Hora',
            data: [array_VagasOcupadas[1,1], array_VagasOcupadas[1,2],array_VagasOcupadas[1,3],array_VagasOcupadas[1,4],
            array_VagasOcupadas[1,5],array_VagasOcupadas[1,6],array_VagasOcupadas[1,7],array_VagasOcupadas[1,8],
            array_VagasOcupadas[1,9],array_VagasOcupadas[1,10],array_VagasOcupadas[1,11], ], // chamando a rei  primeira coluna e linha
            fill: false,
            borderColor: 'rgb(75, 192, 192)',
            borderWidth: 1
          }]  
    },
    
});


