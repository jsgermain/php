<?php
/*
clé  
*/
$enfant=
[
    [
        'nom' => 'Saint Germain',
        'prenom' => 'Sun John',
        'num' => [13,04,2010]
    ],
    [
        'nom' => 'Saint Germain',
        'prenom' => 'Johnsky',
        'num' => [5, 1, 2014]
    ],
    [
        'nom' => 'Saint Germain',
        'prenom' => 'Nordelyne',
        'num' => [30, 12, 2015]
    ],

    [
        'nom' => 'Saint Germain',
        'prenom' => 'Simon-Johns',
        'num' => [22, 6, 2019]
    ]
    ];
// pour afficher le 22 dans le num de la quatrème enfant
    echo $enfant[3]['num'][0];


?>