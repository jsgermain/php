<?php
// demander à l'utilisateur de rentrer des données 
$famille = (int)readline("Combien d'enfant avez-vous ? "); // on castre la valeur entrée en entier
$res = 3-$famille;

// condition plus élaboré
if($famille > 3)
{
    echo "Vous êtes bien une famille nombreuse";
}
elseif($famille === 3) // triple = pour tester une égalité
{
    echo " Avec 3 enfants, vous êtes juste une famille nombreuse";
}
else
echo "Vous n'êtes donc pas une famille nombreuse, il vous manque $res enfant";

?>