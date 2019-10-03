<?php
$notes=[15,20,13];

$eleves =
[
    'CNAM' => ['Maga','Souleymane', 'Johnes' ],
    'Aston' => ['Darry', 'Mathias', 'Clément']
];

// Si on veut afficher chaque école avec le nom de ses élèves
foreach($eleves as $ecole => $lstEleve)
{// on récupère le nom de l'école
    echo "A l'ecole $ecole on y trouve\n"; // saut de ligne entre ecole et élève

    foreach($lstEleve as $eleve)
    {//on récupère le nom de chaque élève dans la liste
        echo "$eleve \n";//saut de ligne entre élève ecole 
    }
    echo "\n"; // saut de ligne entre les blocs
}


?>