<?php
$notes=[15,20,13];

$eleves =
[
    'grande section' => 'Johnsky',
    'moyenne section' => 'Nordelyne',
    'ecole elementaire' => 'Sun John'
];

// Si on veut récupérer la clé (classe)
foreach($eleves as $class => $eleve)
{
    echo "$eleve est dans la classe $class \n";
}


?>