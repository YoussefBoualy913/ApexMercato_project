<?php

class RepositoryCoach implements RepositoryInterface{
    private PDO $pdo;

    public function __construct($pdo){
        $this ->$pdo = $pdo;
    }
  
    
    public function getAll():array{
        $sql = "select * 
               from Personnes
               join Coach  on Personnes.id = Coach.id ";
        $stmt = $this->pdo ->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function findById(int $id):array{
         $sql = "select * 
               from Personnes
               join Coach  on Personnes.id = Coach.id 
               where id = $id";
        $stmt = $this->pdo ->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function save(object $coach):void{
        $sql = "INSERT INTO Personnes(Nom, Email,Nationalité) VALUES(?,?,?)";
        $stmt = $this->pdo ->prepare($sql);
        $stmt->execute([$coach->getNom(),$coach->getEmail(),$coach->getNationalité()]);
        $coach->setId($this->pdo->lastInsertId());

         $sql = "INSERT INTO Coach(id,Equipe_id,Style_de_coaching,Années_dexpérience) VALUES(?,?,?,?)";
        $stmt = $this->pdo ->prepare($sql);
        $stmt->execute([$coach->getId(),$coach->getEquipe_id(),$coach->getStyle_de_coaching(),$coach->getAnnées_dexpérience()]);

    }

    public function updete(object $coach):void{
         $sql = "UPDATE  Personnes set Nom = ?, Email = ?,Nationalité = ? where id = ?";
        $stmt = $this->pdo ->prepare($sql);
        $stmt->execute([$coach->getNom(),$coach->getEmail(),$coach->getNationalité(),$coach->getId()]);

         $sql = "UPDATE Coach set Equipe_id = ?,Style_de_coaching = ?,Années_dexpérience = ? where id = ?";
        $stmt = $this->pdo ->prepare($sql);
        $stmt->execute([$coach->getEquipe_id(),$coach->getStyle_de_coaching(),$coach->getAnnées_dexpérience(),$coach->getId()]);

    }

    public function delete(int $id):void{
       $sql = "select * 
               from Personnes
               where id = $id";
        $stmt = $this->pdo ->prepare($sql);
        $stmt->execute();
    }
}
?>