<form class="needs-validation"  action="cadastrar_funcionario.php" method="POST"  id="Cadas_funcionario_form>
  <label for="password">Senha:</label>
  <input type="password" id="password" name="password">

  <label for="confirm-password">Confirmar senha:</label>
  <input type="password" id="confirm-password" name="confirm-password">
  
  <button type="submit">Enviar</button>
</form>

<script>
  const form = document.querySelector('form');
  form.addEventListener('submit', function(event) {
    event.preventDefault();
    const password = document.querySelector('#password').value;
    const confirmPassword = document.querySelector('#confirm-password').value;
    if (password !== confirmPassword) {
      alert('As senhas não correspondem. Tente novamente.');
      return;
    }
    form.submit();
  });
</script>
