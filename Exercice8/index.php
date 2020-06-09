<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice8</title>
</head>
<body>

<p>En allant de 200 à 0 avec un pas de 12, afficher le message Enfin !!!!.</p>

<?php
 
 for ($firstNumber = 200; $firstNumber >= 0; $firstNumber-=12) 
  echo $firstNumber . " On tient le bon bout", '<br>';

?>

</body>
</html>