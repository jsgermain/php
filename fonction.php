<?php

    $insultes=['merde', 'pute', 'con','moche'];

    $phrase=readline("Entrez une phrase :\n");

    foreach($insultes as $insulte)
    {
        $taille = strlen($insulte);
        $asterisque = str_repeat('*', $taille); 
        $phrase = str_replace($insulte,$asterisque, $phrase);
    }
    echo $phrase;
/*
https://www.youtube.com/watch?v=UXdvpKRQsx8&list=PLjwdMgw5TTLVDv-ceONHM_C19dPW1MAMD&index=9
*/
?>
