<?php

    $insultes=['merde', 'pute', 'con','moche'];

    $phrase=readline("Entrez une phrase :\n");

    foreach($insultes as $insulte)
    {
        if(stristr($phrase, $insulte)) /*sert à chercher la presence d'une var defini ou une lettre*/
        {
            $phrase= "Ce message contient des insultes";
            //echo "Ce message contient des insultes";

        }
    }
    echo $phrase;
/*
https://www.youtube.com/watch?v=UXdvpKRQsx8&list=PLjwdMgw5TTLVDv-ceONHM_C19dPW1MAMD&index=9
*/
?>
