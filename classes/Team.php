<?php

 class  Equipe {

    private int $id ;
    private string $Nom ;
    private int $Budget ;
    private string  $Manager;
   

    public function __construct()
    {
      
      
    }


    public function getNom(){
       return  $this ->Nom;
    }

    public function setNom($Nom){
        $this ->Nom = $Nom;
    }
    
     public function getId(){
       return  $this ->id;
    }

    public function setId($id){
        $this ->id = $id;
    }

     public function getBudget(){
       return  $this ->Budget;
    }

    public function setBudget($Budget){
        $this ->Budget = $Budget;
    }

     public function getManager(){
       return  $this ->Manager;
    }

    public function setManager($Manager){
        $this ->Manager = $Manager;
    }

    

}