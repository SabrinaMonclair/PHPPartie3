<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice7</title>
</head>
<body>

<p>En allant de 1 à 100 avec un pas de 15, afficher le message On tient le bon bout.</p>

<?php
 
 for ($firstNumber = 1; $firstNumber <= 100; $firstNumber +=15) 
  echo $firstNumber . " On tient le bon bout", '<br>';

?>

</body>
</html>