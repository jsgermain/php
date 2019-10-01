<?php
/*
clé  
*/
$madame = ['nom' => 'Jean', 
'prenom' => 'Faby', 
'notes' => [10,15,14]
];

/*
pour changer le nom de la personne
on réupère la valeur de la variable et on assigne la nouvelle valeur
*/
$madame['nom'] = 'Saint Germain';
// Pour  afficher son prenom
echo $madame['prenom']. ' '. $madame['nom'];


?>