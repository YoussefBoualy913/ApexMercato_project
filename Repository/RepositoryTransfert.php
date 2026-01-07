<?php

require_once('../Dtabese.php');

class RepositoryTransfert {
    private PDO $pdo;

    public function __construct(){
        $this ->pdo = Dtabese::getInstnce()->getConnexion();
    }
  
    
    public function getValeurMarchande(int $id):array{
        $sql = "SELECT Valeur_Marchande
                FROM joueur
                where id = ?";
               
        $stmt = $this->pdo ->prepare($sql);
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
    public function getBudget(int $id):array{
        $sql = "SELECT Budget,Nom
                FROM Equipe
               where id =?";
               
        $stmt = $this->pdo ->prepare($sql);
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

     public function trensfertPlayer(object $transfert):array{
        $sql = "SELECT Budget,Nom
                FROM Equipe
               where id =?";
               
        $stmt = $this->pdo ->prepare($sql);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }


}
?>