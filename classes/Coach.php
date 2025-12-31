<?php
 require('Person.php');
 class Coach extends Person{

    private int $salaire ;
   

    public function __construct($Nom,$Email,$Nationalité,$salaire)
    {
       parent::__construct($Nom,$Email,$Nationalité);
        $this ->$salaire = $salaire;
      
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