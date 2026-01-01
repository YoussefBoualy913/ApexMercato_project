<?php

 class Contrat{

    private int $salaire ;
    private  float $Clause_de_rachat ;
    private DateTime $Date_de_fin ;
    private readonly DateTime $Date_de_création  ;
    
 
   

    public function __construct($salaire,$Clause_de_rachat,$Date_de_fin,$Date_de_création)
    {
     
        $this ->salaire = $salaire;
        $this ->Clause_de_rachat = $Clause_de_rachat;
        $this ->Date_de_fin = $Date_de_fin;
        $this ->Date_de_création = $Date_de_création;
    
    }
    public function getSalaire(){
       return  $this ->salaire;
    }

    public function setSalaire($salaire){
        $this ->$salaire = $salaire;
    }

   

}
?>