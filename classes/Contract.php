<?php

 class Contract{

    private int $id ;
    private int $Personnes_id ;
    private int $Equipe_id ;
    private int $salaire ;
    private  float $Clause_de_rachat ;
    private DateTime $Date_de_fin ;
    private readonly DateTime $Date_de_création  ;
    
 
    
     public function getId(){
       return  $this ->id;
    }

    public function setId($id){
        $this ->id = $id;
    }

     public function getPersonnes_id(){
       return  $this ->Personnes_id;
    }

    public function setPersonnes_id($Personnes_id){
        $this ->Personnes_id = (int)$Personnes_id;
    }

     public function getEquipe_id(){
       return  $this ->Equipe_id;
    }

    public function setEquipe_id($Equipe_id){
        $this ->Equipe_id = $Equipe_id;
    }

    public function getSalaire(){
       return  $this ->salaire;
    }

    public function setSalaire($salaire){
        $this ->salaire = $salaire;
    }

     public function getClause_de_rachat(){
       return  $this ->Clause_de_rachat;
    }

    public function setClause_de_rachat($Clause_de_rachat){
        $this ->Clause_de_rachat = $Clause_de_rachat;
    }

     public function getDate_de_fin(){
       return  $this ->Date_de_fin->format('Y-m-d');
    }

    public function setDate_de_fin($Date_de_fin){
        $datef = new DateTime($Date_de_fin);
        $this ->Date_de_fin = $datef;
    }

     public function getDate_de_création(){
       return  $this ->Date_de_création;
    }

    public function setDate_de_création($Date_de_création){
        $this ->Date_de_création = $Date_de_création;
    }

   

}
?>