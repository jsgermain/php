<?php
// demander à l'utilisateur de rentrer des données 
$famille = readline("Combien d'enfant avez-vous ? ");

if($famille>=3)
{
    echo "Vous êtes bien une famille nombreuse";
}
else
echo "Vous n'êtes donc pas une famille nombreuse";

?>