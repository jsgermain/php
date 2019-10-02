<?php
// demander à l'utilisateur de rentrer des données 
$heure = (int)readline("Quelle heure est il? ");

if(($heure >=9 && $heure <12) || ($heure>=14 && $heure<17))
{
    echo "Le magasin est ouvert";
}
else
{
    echo "Le magasin est fermé";
}

?>