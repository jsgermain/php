<?php
class InfoDateRenseigner
{
    public $jour;
    public $dateJour;
    public $mois;
    public $annee;

    public function __construct (string $jour, int $dateJour,string $mois,int $annee) 
    {
        $this->jour=$jour;
        $this->dateJour=$dateJour;
        $this->mois=$mois;
        $this->annee=$annee;
    }

}

?>
/*https://www.youtube.com/watch?v=HUhjN12HZR0&list=PLjwdMgw5TTLVDv-ceONHM_C19dPW1MAMD&index=25&t=0s */