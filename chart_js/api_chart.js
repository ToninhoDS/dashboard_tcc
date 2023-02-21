
//teste de api aleatoria
// var http = resquire('http');
// http.createServer(function(req,res){
//     res.serHeader('Access-Control-Allow-Origin','*');
//     res.writeHead(200,{'content-Type':'application/json'});


// let apiTeste ={
//     disponibilidade: Math.round(Math.random()*100),
//     qualidade: Math.round(Math.random()*100),
//     performance: Math.round(Math.random()*100)
   
// }
//     res.end(JSON.stringify(apiTeste));
// }).listen(8080);    
//fim do teste


// api com dados aleatorio teste e exemplo
 
        const ctx10 = document.getElementById('apiAleatoria');
        let labelsX = ['Vagas', 'Ocupadas','Resevada', 'Desistêcia']
        let valores = [0,0,0] 

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
                        // dar update na varivael com as informções da variavel -> array
                        graficoTcc.update()
                    })
                    .catch(erro=>{
                       console.log("Erro" +erro) 
                    })                 
        }
        // intervalor de atualizar
        let intervalos = setInterval(upDados_Atualizar,3000);


        // aqui sera usado para tratar as api 

