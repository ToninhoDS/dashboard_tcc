<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<select id="language">
	<option value="pt">Português</option>
	<option value="en">English</option>
	<option value="es">Español</option>
</select>


    <script>
     	var select = document.getElementById('language');
	var text = select.options[select.selectedIndex].text;
	console.log(text); // Português
    
    </script>


</body>
</html>