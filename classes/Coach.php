<?php
 require('Person.php');
 class Coach extends Person{

    private int $salaire ;
    private  int $Années_dexpérience ;
    private string $Style_de_coaching ;
    

   

    public function __construct($Nom,$Email,$Nationalité,$salaire,$Années_dexpérience,$Style_de_coaching)
    {
       parent::__construct($Nom,$Email,$Nationalité);
        $this ->salaire = $salaire;
        $this ->Années_dexpérience = $Années_dexpérience;
        $this ->Style_de_coaching = $Style_de_coaching;
       
    }

    public function getAnnualCost(){
        return $this ->salaire*12;
    }

    public function getSalaire(){
       return  $this ->salaire;
    }

    public function setSalaire($salaire){
        $this ->$salaire = $salaire;
    }

   

}
?>