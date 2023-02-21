
const ctx10 = document.getElementById('apiAleatoria');
let labelsX = ['Vagas', 'Ocupadas','Resevada', 'Desistêcia']
let valores = [0,0,0,0] 

    let graficoTcc = new Chart(ctx10, {
        type: 'bar',
        data: {
        labels:labelsX,
        datasets: [{
            label: '',
            data: valores,
            borderColor: [
                'rgb(54, 162, 235)',
                'rgb(255, 159, 64)',
                'rgb(255, 205, 86)',
                'rgb(201, 203, 207)'
                
              ],
            backgroundColor: [
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 159, 64, 0.2)',
                'rgba(255, 205, 86, 0.2)',
                'rgba(201, 203, 207, 0.2)'
               
              ],
              borderWidth:1
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
    // vamos criar uma função para atulizar as informações do grafico cada 3 segundo

const upDados_Atualizar=()=>{
    const endpoint = "https://cfbcursosaula128.cfbcursos.repl.co"
            fetch(endpoint)
            .then(res=>res.json())
            .then(res=>{
                // passar o valor tratado na api e passar para um array
                valores[0] = res.disponibilidade
                valores[1] = res.qualidade
                valores[2] = res.performance
                valores[3] = res.performance - res.qualidade
                if(valores[3]<= 0){ // evitar que o valor de negativo criei essa linha
                  valores[3] = 0
                }
                // pegando o valor aleatorio da array e usando ele no calculo
                let ptg ="%"
                var vagasLivres = valores[0]
                var vagasOcupadas = valores[1]
                var vagasResevadas = valores[2]
                var desistencia = valores[3] 
                var totalVagas = 49; // total de vagas no estacionamento
                var totalDesistencia = 0;
                var somaVagasOcupadas = 0;
                somaVagasOcupadas += vagasLivres + vagasOcupadas + vagasResevadas;
                totalDesistencia = (desistencia / 100) * totalVagas;
                document.getElementById('vagasLivesOcupadas').innerHTML = somaVagasOcupadas; // valor total de vagas
                document.getElementById('reservasCanceladas').innerHTML = totalDesistencia.toFixed(2)+ptg; //calcular o resto, concatenar uma string '+' toFixed(2) duas casas depois da virgula
                // dar update na varivael com as informções da variavel -> array
                graficoTcc.update()
            })
            .catch(erro=>{
               console.log("Erro" +erro) 
            })                 
}
// intervalor de atualizar
let intervalos = setInterval(upDados_Atualizar,3000);
// fim
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
// fim