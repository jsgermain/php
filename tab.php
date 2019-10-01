<?php
/*
clé  
*/
$madame = ['nom' => 'Jean', 
'prenom' => 'Faby', 
'notes' => [10,15,14]
];

/*
pour ajouter un élément dans le tableau
sache qu'on peut ajouter une note sans donner sa position
*/
$madame[] = 'John';

print_r ($madame);


?>