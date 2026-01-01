<?php
 require('Person.php');
 class Coach extends Person{

     private int $salaire ;
    private string $Pseudo ;
    private string $Rôle ;
    private int  $Valeur_Marchande ;
   

    public function __construct($Nom,$Email,$Nationalité,$salaire)
    {
       parent::__construct($Nom,$Email,$Nationalité);
        $this ->$salaire = $salaire;
      
    }

    public function getAnnualCost(){
       
    }

    public function getSalaire(){
       return  $this ->salaire;
    }

    public function setSalaire($salaire){
        $this ->$salaire = $salaire;
    }

   

}