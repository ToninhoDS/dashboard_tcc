<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

<label for="cpf">CPF</label>
<input id="cpf" type="text" placeholder="insira seu CPF">
<input id="btn-enviar" type="submit" value="enviar">


<br>
<input id="cpf" type="text" placeholder="insira seu CPF (somente números)" pattern="[0-9]{11}">
<input id="btn-enviar" type="submit" value="enviar">
<br>
<input id="cpf" type="text" placeholder="insira seu CPF (somente números)" onblur="formataCPF(this)" pattern="[0-9]{11}">
<input id="btn-enviar" type="submit" value="enviar">

<script>
  
  function formataCPF(cpf) {
const elementoAlvo = cpf
const cpfAtual = cpf.value   

let cpfAtualizado;

cpfAtualizado = cpfAtual.replace(/(\d{3})(\d{3})(\d{3})(\d{2})/, 
 function( regex, argumento1, argumento2, argumento3, argumento4 ) {
        return argumento1 + '.' + argumento2 + '.' + argumento3 + '-' + argumento4;
})  
elementoAlvo.value = cpfAtualizado; 
}  
 
const cpf = document.querySelector("cpf");
cpf.addEventListener("input", function(event){
 if (cpf.validity.patternMismatch) {
   cpf.setCustomValidity("Deveria ter apenas números aqui =) ");
   btnEnviar.disabled = true;
   } else {
     cpf.setCustomValidity("");
     btnEnviar.disabled = false;
   }
 })
}
</script>
</body>
</html>
