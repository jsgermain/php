<?php

$mot=readline("Voulez-vous savoir si votre mot est un palyndrome, ben veuillez l'entrer ici :\n");

$motInverser=strrev($mot);

if(strtolower($mot) === strtolower($motInverser))
{
    echo "Ce mot est bien un palindrome";
}
else
{
    echo "ce mot n'est pas un palindrome";
}

?>
