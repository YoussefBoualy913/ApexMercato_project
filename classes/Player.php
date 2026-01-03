<?php
 require_once ('Person.php');
 class  Player extends Person{

    private int $id ;
    private int $Equipe_id ;
    private int $salaire ;
    private string $Pseudo ;
    private string $Rôle ;
    private int  $Valeur_Marchande ;
   

    public function __construct()
    {
      
      
    }

    public function getAnnualCost(){
       
    }

    public function getSalaire(){
       return  $this ->salaire;
    }

    public function setSalaire($salaire){
        $this ->$salaire = $salaire;
    }
    
     public function getId(){
       return  $this ->id;
    }

    public function setId($id){
        $this ->$id = $id;
    }
   

}