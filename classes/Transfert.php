<?php

 class  Transfert {

    private int $id ;
    private int $Joueur_id ;
    private int $Equipe_départ_id ;
    private string $Equipe_arrivée_id ;
    private string $Montante ;
    private int  $Statut ;
   

   

    public function getJoueur_id(){
       return  $this ->Joueur_id;
    }

    public function setJoueur_id($Joueur_id){
        $this ->Joueur_id = $Joueur_id;
    }
    
     public function getId(){
       return  $this ->id;
    }

    public function setId($id){
        $this ->id = $id;
    }

     public function getEquipe_départ_id(){
       return  $this ->Equipe_départ_id;
    }

    public function setEquipe_départ_id($Equipe_départ_id){
        $this ->Equipe_départ_id = $Equipe_départ_id;
    }

     public function getEquipe_arrivée_id(){
       return  $this ->Equipe_arrivée_id;
    }

    public function setEquipe_arrivée_id($Equipe_arrivée_id){
        $this ->Equipe_arrivée_id = $Equipe_arrivée_id;
    }

     public function getMontante(){
       return  $this ->Montante;
    }

    public function setMontante($Montante){
        $this ->Montante = $Montante;
    }
     public function getStatut(){
       return  $this ->Statut;
    }

    public function setStatut($Statut){
        $this ->Statut = $Statut;
    }

    
   

}