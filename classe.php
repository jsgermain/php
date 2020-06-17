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
$infoDateRenseigner1 = new InfoDateRenseigner('Lundi',05,'Septembre', 1992);
$infoDateRenseigner2 = new InfoDateRenseigner('Lundi',07,'Novembre', 1992);
var_dump(
    $infoDateRenseigner1,
    $infoDateRenseigner2 
);



/*https://www.youtube.com/watch?v=HUhjN12HZR0&list=PLjwdMgw5TTLVDv-ceONHM_C19dPW1MAMD&index=25&t=0s */
?>
