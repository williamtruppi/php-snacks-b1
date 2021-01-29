<!-- Creiamo un array 'matches' contenente altri array i quali rappresentano delle partite di basket di un’ipotetica tappa del calendario. 
Ogni array della partita avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite.
Stampiamo a schermo tutte le partite con questo schema:
Olimpia Milano - Cantù | 55 - 60 -->

<?php

  $partite = [
    [
      "squadraCasa" => "Juventus",
      "squadraTrasferta" => "Milan",
      "punteggioCasa" => 3,
      "punteggioTrasferta" => 1
    ],
    [
      "squadraCasa" => "Real Madrid",
      "squadraTrasferta" => "Barcellona",
      "punteggioCasa" => 2,
      "punteggioTrasferta" => 2
    ],
    [
      "squadraCasa" => "Napoli",
      "squadraTrasferta" => "Spezia",
      "punteggioCasa" => 4,
      "punteggioTrasferta" => 2
    ]
  ];


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  
  <h1>
    <?php
       for ($i = 0; $i < count($partite); $i++) {
        echo $partite[$i]['squadraCasa'] . " - " . $partite[$i]['squadraTrasferta'] . " | " .$partite[$i]['punteggioCasa'] . "-" . $partite[$i]['punteggioTrasferta'] . "<br>";
      }   
    ?>
    <br>
  </h1>

</body>
</html>