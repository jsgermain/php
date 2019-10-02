<?php
// demander à l'utilisateur de rentrer des données 
$feu = (int)readline("Taper 1: feu vert, 2: feu orange et 3 : feu rouge "); // on castre la valeur entrée en entier

if($feu===1)
{
    echo  "On peut passer car le feu est vert";
}
elseif($feu===2)
{
    echo "Avancez prudemment, soyez prêt à arrêter car le feu est orange";
}
elseif($feu===3)
{
    echo "arretez, danger car le feu est rouge";
}
else
{
    echo "Commande eronnée";
}
?>