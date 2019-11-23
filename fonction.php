<?php

while(true)
{
    $mot = readline("Entrez votre mot : \n");
    if($mot=='')
    {
        exit("Fin de programme"); // exit permet de forcer la sortie du programme
    }
    $motreverse = strtolower(strrev($mot));
    if(strtolower($mot) === $motreverse)
    {
        echo " Ce mot est un palindrome \n";
    }
    else
    {
        echo " Ce mot n'est pas un palindrome\n";
    }
    
}


?>
