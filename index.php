<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calendário</title>

</head>
<html>
<body>
    <h1>Calendário em php</h1>
    <table border='1'> 
    <tr>
    <?php echo date('F') ?>
    </tr>
    <tr>
    <?php

$diasemana = array('Domingo', 'Segunda', 'Terça', 'Quarta', 'Quinta', 'Sexta', 'Sabado');
$data=date('y-m-d');
$diasemana_numero=date('w', strtotime($data));
    for ($i=0; $i < 7; $i++) { 
        echo "
        <td>".$diasemana[($diasemana_numero + $i)%7]." </td>
      ";
         };
    ?>
      </tr>
      <tr>
      <?php
    for ($n=0; $n <200 ; $n = $n+7) {  
        # code...
   

      for ($j=0+$n; $j < 7+$n ; $j++) { 
          # code...
          $temp=date('d/m', strtotime('+'.$j.' days'));
          echo "<td>".$temp." </td>";

        

      }
      echo "</tr>";
    }
     ?>
     
     
    </table>

    
</body>
</html>