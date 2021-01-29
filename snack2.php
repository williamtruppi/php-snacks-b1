<?php

$name = $_GET["name"];
$email = $_GET["email"];
$age = $_GET["age"];

var_dump($name, $email, $age);

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <!-- URL DI PROVA -->
  <!-- http://localhost/php-snacks-b1/snack2.php/?name=will&email=ginoooo@gmail.it&age=52 -->
  <p>
    <?php
    if (strlen($name) > 3 && is_numeric($age) && strpos($email, "@") !== false && strpos($email, ".") !== false)
      echo "Accesso Riuscito";
    else
      echo "Accesso Negato";
    ?>
  </p>

</body>

</html>