<?php
// namespace Repository;

// use Repository\RepositoryInterface;
require_once('RepositoryInterface.php');
require_once('../Dtabese.php');

class RepositoryEquipe implements RepositoryInterface{
    private PDO $pdo;

    public function __construct(){
        $this ->pdo = Dtabese::getInstnce()->getConnexion();
    }
  
    
    public function getAll():array{
        $sql = "select * 
               from Equipe ";
        $stmt = $this->pdo ->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function findById(int $id):array{
         $sql = "select * 
               from Equipe
               where id = ?";
        $stmt = $this->pdo ->prepare($sql);
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function save(object $Equipe):void{
       

         $sql = "INSERT INTO Equipe(Nom,Budget,Manager) VALUES(?,?,?)";
        $stmt = $this->pdo ->prepare($sql);
        $stmt->execute([$Equipe->getNom(),$Equipe->getBudget(),$Equipe->getManager()]);

    }

    public function updete(object $Equipe):void{
         
         $sql = "UPDATE Equipe set Nom = ?,Budget = ?,Manager = ? where id = ?";
        $stmt = $this->pdo ->prepare($sql);
        $stmt->execute([$Equipe->getNom(),$Equipe->getBudget(),$Equipe->getManager(),$Equipe->getId()]);

    }

    public function delete(int $id):void{
       $sql = "DELETE 
               from Equipe
               where id = ?";
        $stmt = $this->pdo ->prepare($sql);
        $stmt->execute([$id]);
    }
}
?>