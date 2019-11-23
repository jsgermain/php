<?php
class InfoDateRenseigner
{
    public $jour;
    public $dateJour;
    public $mois;
    public $annee;
/* La methode ou la fonction de la classe */
    public function __construct (string $jour, int $dateJour,string $mois,int $annee) 
    {
        $this->jour=$jour;
        $this->dateJour=$dateJour;
        $this->mois=$mois;
        $this->annee=$annee;
    }
}
/*
test 
$InfoDateRenseigner est une nouvelle intance de InfoDateRenseigner()
*/
$InfoDateRenseigner = new InfoDateRenseigner('Lundi',5,'Septembre', 1988);
var_dump($InfoDateRenseigner);

?>
/*https://www.youtube.com/watch?v=HUhjN12HZR0&list=PLjwdMgw5TTLVDv-ceONHM_C19dPW1MAMD&index=25&t=0s */