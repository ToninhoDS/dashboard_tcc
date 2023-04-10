

<?php

date_default_timezone_set('America/Sao_Paulo');
//fim
include_once "comando_php/crud_php/conexao_cadastro.php";

$tempo6h =0;
$tempo_hora_0h =0; 
$tempo_hora_2h =0; 
$tempo_hora_4h =0; 
$tempo_hora_6h =0; 
$tempo_hora_8h =0; 
$tempo_hora_10h =0; 
$tempo_hora_12h =0; 
$tempo_hora_14h =0; 
$tempo_hora_16h =0; 
$tempo_hora_18h =0; 
$tempo_hora_20h =0; 
$tempo_hora_22h =0; 
$query_usuarios = "SELECT  dt_entrada FROM tb_status_vagas";
    $result_usuarios = $conn->prepare($query_usuarios);
    $result_usuarios->execute();
    if (($result_usuarios) and ($result_usuarios->rowCount() != 0)) {
     
                        while ($row_usuario = $result_usuarios->fetch(PDO::FETCH_ASSOC)) {
                            extract($row_usuario);
                        
                            $tempo6h = $row_usuario ['dt_entrada']; //hora entrada
                            $hora_min_vaga = $row_usuario ['dt_entrada']; //hora entrada
                           
                            if($tempo6h >='06:00:00' && $tempo6h <= '07:59:59'){
                                $tempo_hora_6h += +1;
                            
                            }if($tempo6h >='08:00:00' && $tempo6h <= '09:59:59'){
                                $tempo_hora_8h += +1;
                            
                            }if($tempo6h >='10:00:00' && $tempo6h <= '11:59:59'){
                                $tempo_hora_10h += +1;
                            
                            }if($tempo6h >='12:00:00' && $tempo6h <= '13:59:59'){
                                $tempo_hora_12h += +1;
                                
                             }if($tempo6h >='14:00:00' && $tempo6h <= '15:59:59'){
                                $tempo_hora_14h += +1;
                            
                            }if($tempo6h >='16:00:00' && $tempo6h <= '17:59:59'){
                                $tempo_hora_16h += +1;
                            
                             }if($tempo6h >='18:00:00' && $tempo6h <= '19:59:59'){
                                $tempo_hora_18h += +1;
                                
                            }if($tempo6h >='20:00:00' && $tempo6h <= '21:59:59'){
                                $tempo_hora_20h += +1;
                                
                            }if($tempo6h >='22:00:00' && $tempo6h <= '23:59:59'){
                                $tempo_hora_22h += +1;
                              
                            }if($tempo6h >='00:00:00' && $tempo6h <= '01:59:59'){
                                $tempo_hora_0h += +1;   
                            
                            }if($tempo6h >='02:00:00' && $tempo6h <= '03:59:59'){
                                $tempo_hora_2h += +1;

                            }if($tempo6h >='04:00:00' && $tempo6h <= '05:59:59'){
                                $tempo_hora_4h += +1;
                               
                            }else{}
                                                   
                                      
        }
        echo $tempo_hora_4h ,'<br>';   
        echo $tempo_hora_6h,'<br>' ;   
        echo $tempo_hora_8h,'<br>' ;   
        echo $tempo_hora_2h ,'<br>';   
        echo $tempo_hora_10h,'<br>' ;   
        echo $tempo_hora_14h,'<br>' ;   
        echo $tempo_hora_16h ,'<br>';   
        echo $tempo_hora_18h,'<br>' ;   
        echo $tempo_hora_20h,'<br>' ;   
        echo $tempo_hora_22h ,'<br>';   
        echo $tempo_hora_12h ,'<br>';   
        
    }

    ?>