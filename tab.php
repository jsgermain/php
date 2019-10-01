<?php
/*
clé  
*/
$madame = ['nom' => 'Jean', 
'prenom' => 'Faby', 
'notes' => [10,15,14]
];

/*
pour ajouter une note à madame
on réupère la valeur de la variable note, on ajoute la position et la nouvelle note
*/
$madame['notes'][3] = 8;
// Pour  afficher son prenom
echo $madame['notes'][3];


?>