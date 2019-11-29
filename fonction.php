<?php
/* ecrire ses propres fonctions */

function bonjour($nom = null) /* rend le paramètre optionnel */
{
    if($nom === null)
    {
        echo "Bonjour \n";
    }
    else
    {
        echo "Bonjour $nom \n";

    }
}

bonjour();
bonjour('Pierre');

/*
https://www.youtube.com/watch?v=wzDjK4rM67c&list=PLjwdMgw5TTLVDv-ceONHM_C19dPW1MAMD&index=10
*/
?>
