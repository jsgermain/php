<?php
/*  Demander à l'utilisateur de rentrer une note ou taper fin pour terminer
chaque note est saugardée dans un tableau du style $notes[]
on affiche le tableau de note sous forme de liste

ALGO
TANT QUE l'utilsateur ne tape pas 'fin'
    On ajoute la note tapée au tableau
POUR CHAQUE note DANS notes 
    on affiche "- $note \n";
*/

$notes = [];
$action = null;

//TANT QUE l'utilsateur ne tape pas 'fin'
while($action !== 'fin')
{
    $action = readline("Entrer une nouvelle note ou 'fin' pour terminer ");
    // On ajoute la note tapée au tableau
    if($action !== 'fin')
    {
        $notes[]= (int)$action;
    }

    // POUR CHAQUE note DANS notes 

    foreach($notes as $note)
    {
        //on affiche "- $note \n";
        echo " - $note \n";
    }
  

}





?>