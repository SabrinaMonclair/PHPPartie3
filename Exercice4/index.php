<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice4</title>
</head>
<body>

<p>Créer une variable et l'initialiser à 1.  
Tant que cette variable n'atteint pas 10, il faut :
- l'afficher
- l'incrementer de la moitié de sa valeur</p>

<?php
 $number = 1;
    
while ($number <= 10){  
    echo '<br>';
    echo $number += $number /2;
  } 
 
?>
</body>
</html>



