
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<select id='Select_Option$cd_status_vagas' name='$nm_status' value='$nm_status'  class='btn $status dropdown-toggle'>
<option name='$nm_status' value='$nm_status'>$nm_status</option>
  <option name='livre' value='livre'>Livre</option>
  <option name='reserva' value='reserva'>Reserva</option>
  <option name='ocupado' value='ocupado'>Ocupado</option>
</select>

    <script>
     	var select = document.getElementById('language');
	var text = select.options[select.selectedIndex].text;
	console.log(text); // Português
    
    </script>


</body>
</html>