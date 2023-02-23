$(function graficoPizza() {
    "use strict";
 let valorPizzar =  Math.floor(33.3* Math.random())
 let valorPizzar2 =  Math.floor(33.3* Math.random())
 let valorPizzar3 =  Math.floor(33.3* Math.random())
 let valorNaoParticiparam =  Math.floor(15* Math.random())
 
 //passar valor
 document.getElementById('graficoPizzaP').innerHTML = valorPizzar + valorPizzar2;
 document.getElementById('graficoPizzaN').innerHTML = valorNaoParticiparam;
// vagas dimoniveis
    Morris.Donut({
        element: 'gender_donut',
        data: [
            { value: valorPizzar, label: 'Ótimo' },
            { value: valorPizzar2, label: 'Bom' },
            { value: valorPizzar3, label: 'regular' }

        ],

        labelColor: '#5969ff',
        colors: [
            '#228B22',
            '#5969ff', 
            '#ff407b',
            
        ],



        formatter: function(x) { return x + "%" }
    });

    
    

  
});
  const upDadosGraficoBarra=()=>{
   // ============================================================== 
    //  chart bar horizontal
    // ============================================================== 

    var ctxReceita = document.getElementById("chartjs_bar_horizontal").getContext('2d');
    var graficoBarra =[0,0,0,0,0,0,0,0,0,0,0,0]
    var somaBarra = 0
    var chartBarra = new Chart(ctxReceita, {
        type: 'horizontalBar',
       
        data: {
            labels: ["Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho", "Julho", "Agosto", "Setembro", "Outubro", "Novembro", "Dezembro"],
            datasets: [{
                label: 'Country',
                data: graficoBarra,
                backgroundColor: [
                'rgba(255, 99, 132, 0.1)',
                'rgba(255, 159, 64)',
                'rgba(255, 205, 86, 0.1)',
                'rgba(75, 192, 192)',
                'rgba(54, 162, 235, 0.1)',
                'rgba(153, 102, 255)',
                'rgba(201, 203, 207, 0.1)',
                'rgba(255, 99, 132, 0.1)',
                'rgba(255, 159, 64)',
                'rgba(255, 205, 86, 0.1)',
                'rgba(75, 192, 192)',
                'rgba(54, 162, 235, 0.1)'],
      borderColor: [
        'rgb(255, 99, 132)',
        'rgb(255, 159, 64)',
        'rgb(255, 205, 86)',
        'rgb(75, 192, 192)',
        'rgb(54, 162, 235)',
        'rgb(153, 102, 255)',
        'rgb(201, 203, 207)',
        'rgb(255, 99, 132)',
        'rgb(255, 159, 64)',
        'rgb(255, 205, 86)',
        'rgb(75, 192, 192)'
      ],
            borderWidth: 1
            }]
        },
        options: {
            responsive: true,
            hover: false,
            legend: {
                display: true,
                position: 'bottom',

                labels: {
                    fontColor: '#71748d',
                    fontFamily: 'Circular Std Book',
                    fontSize: 14,
                }
            },
            scales: {

                legend: {
                    display: false

                },
                yAxes: [{
                    gridLines: {
                        drawOnChartArea: false
                    },
                    ticks: {
                        fontSize: 14,
                        fontFamily: 'Circular Std Book',
                        fontColor: '#71748d',
                    }
                }],
                xAxes: [{
                    gridLines: {
                        drawOnChartArea: false
                    },
                    ticks: {
                        fontSize: 14,
                        fontFamily: 'Circular Std Book',
                        fontColor: '#71748d',
                    }
                }]



            }
        }
    });
        graficoBarra[0] = Math.floor(1000* Math.random()) //Janeiro
        graficoBarra[1] = Math.floor(1500* Math.random()) //Fevereiro
        graficoBarra[2] = Math.floor(2300* Math.random()) // Março
        graficoBarra[3] = Math.floor(2300* Math.random()) // Abril
        graficoBarra[4] = Math.floor(3300* Math.random()) // Maio
        graficoBarra[5] = Math.floor(5300* Math.random()) // Junho
        graficoBarra[6] = Math.floor(8300* Math.random()) // Julho
        graficoBarra[7] = Math.floor(3300* Math.random()) // Agosto
        graficoBarra[8] = Math.floor(3300* Math.random()) // Setembro
        graficoBarra[9] = Math.floor(5000* Math.random()) // Outubro
        graficoBarra[10] = Math.floor(7000* Math.random()) // Novembro
        graficoBarra[11] = Math.floor(9300* Math.random()) // Dezembro
        chartBarra.update()
        
       
        for(var i =1; i <graficoBarra.length;i++){
            somaBarra += graficoBarra[1];
            }
            document.getElementById("lucroAnual").innerHTML = "$"+somaBarra;
            document.getElementById("lucroMensal").innerHTML = "$"+somaBarra;
            


};
let intervalosPizza = setInterval(upDadosGraficoBarra,3000);