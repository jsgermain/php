<?php
$notes = [20, 10, 13];

$sum = array_sum($notes); // calcule la somme d'un tableau
$taille = sizeof($notes); // calcule la taille d'un tableau 
$count = count($notes); // compter le nombre d'élément d'un tableau 

$moy = round($sum / $count); // arrondir en chiffre rond
//$moy = round($sum / $count, 2); // arrondir avec deux chiffre après la virgule

echo "La moyenne de vos notes est $moy";

?>
