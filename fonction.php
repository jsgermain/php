<?php

    $insultes=['merde', 'pute'];
    $phrase=readline("Entrez une phrase :\n");

    foreach($insultes as $insulte)
    {
        $phrase = str_replace($insulte,'****', $phrase);
    }
    echo $phrase;
/*
https://www.youtube.com/watch?v=UXdvpKRQsx8&list=PLjwdMgw5TTLVDv-ceONHM_C19dPW1MAMD&index=9
*/
?>
