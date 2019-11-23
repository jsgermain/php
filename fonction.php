<?php
$notes = [15, 10, 13, 9];

$sum = array_sum($notes); // calcule la somme d'un tableau
$taille = sizeof($notes); // calcule la taille d'un tableau 
$count = count($notes); // compter le nombre d'élément d'un tableau 

$moy = $sum / $count;

echo "La moyenne de vos notes est $moy";



?>
