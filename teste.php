
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>



    
     <?php
     $minutes = 85; // exemplo de minutos que precisam ser convertidos para horas

     if ($minutes >= 60) {
         $hours = floor($minutes / 60);
         $minutes = $minutes % 60;
     } else {
         $hours = 0;
     }
     
     echo $hours . " hora(s) e " . $minutes . " minuto(s)";
     ?>
    


</body>
</html>