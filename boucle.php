<?php
$produits=[];
$scan=null;

while($scan !== 'fin') 
{
    $scan=readline("Scanne ton nouveau produit ou taper 'fin' pour terminer :   ");

    if($scan !== 'fin')
    {
        $produits[]=$scan;
    }
    echo "vous avez achetez \n";
    foreach($produits as $produit)
    {
       
        echo " - $produit \n";
    }
}

?>