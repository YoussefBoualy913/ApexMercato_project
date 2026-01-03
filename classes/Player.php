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
        $this ->salaire = $salaire;
    }
    
     public function getId(){
       return  $this ->id;
    }

    public function setId($id){
        $this ->id = $id;
    }

     public function getEquipe_id(){
       return  $this ->Equipe_id;
    }

    public function setEquipe_Equipe_id($Equipe_id){
        $this ->Equipe_id = $Equipe_id;
    }

     public function getPseudo(){
       return  $this ->Pseudo;
    }

    public function setPseudo($Pseudo){
        $this ->Pseudo = $Pseudo;
    }

     public function getRôle(){
       return  $this ->Rôle;
    }

    public function setRôle($Rôle){
        $this ->Rôle = $Rôle;
    }

     public function getValeur_Marchande(){
       return  $this ->Valeur_Marchande;
    }

    public function setValeur_Marchande($Valeur_Marchande){
        $this ->Valeur_Marchande = $Valeur_Marchande;
    }
   

}