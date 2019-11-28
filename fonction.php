<?php

    $insultes=['merde', 'pute', 'con','moche'];

    $phrase=readline("Entrez une phrase :\n");

    foreach($insultes as $insulte)
    {
        $taille = strlen($insulte); /* sert à calculer la taille d'un mot */
        $replace = str_repeat('*', $taille); /* sert à répeter * autant de la taille du mot */
        $phrase = str_replace($insulte,$replace, $phrase);
    }
    echo $phrase;
/*
https://www.youtube.com/watch?v=UXdvpKRQsx8&list=PLjwdMgw5TTLVDv-ceONHM_C19dPW1MAMD&index=9
*/
?>
