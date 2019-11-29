<?php

    $insultes=['merde', 'pute', 'con','moche'];

    $phrase=readline("Entrez une phrase :\n");

    foreach($insultes as $insulte)
    {
        $lettre = substr($insulte, 0, 1); /*sert à soustraire la ou les lettre d'un mot */
        $taille = strlen($insulte) -1; /* on soustraire le nb de mot enlevé dans la (strlen) */
        $asterisque = $lettre.str_repeat('*', $taille); /* on concatène la var de la lettre soustrait dans la (str_repeat) */
        $phrase = str_replace($insulte,$asterisque, $phrase);
    }
    echo $phrase;
/*
https://www.youtube.com/watch?v=UXdvpKRQsx8&list=PLjwdMgw5TTLVDv-ceONHM_C19dPW1MAMD&index=9
*/
?>
