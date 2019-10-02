<?php
// demander à l'utilisateur de rentrer des données 
$feu = (int)readline("Taper 1: feu vert, 2: feu orange et 3 : feu rouge ");
switch($feu)
{
    case 1: 
        echo  "On peut passer car le feu est vert";
        break; // permet de ne pas éxucuter la suite

    case 2:
        echo "Avancez prudemment, soyez prêt à arrêter car le feu est orange";
        break;

    case 3:
        echo "arretez, danger car le feu est rouge";
        break;

    default;
        echo "Commande eronnée";
}



?>