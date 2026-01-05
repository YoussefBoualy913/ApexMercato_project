<?php
require_once('RepositoryInterface.php');

class RepositoryPlayer implements RepositoryInterface{
    private PDO $pdo;

    public function __construct($pdo){
        $this ->pdo = $pdo;
    }
  
    
    public function getAll():array{
        $sql = "SELECT joueur.id ,personnes.Nom,joueur.Rôle,Equipe.Nom as nomequipe,contrat.Salaire
                FROM personnes
                JOIN joueur on personnes.id = joueur.id
                JOIN equipe on equipe.id = joueur.Equipe_id
                JOIN contrat on joueur.id = contrat.Personnes_id;";
        $stmt = $this->pdo ->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function findById(int $id):array{
         $sql = "select * 
               from Personnes
               join Joueur  on Personnes.id = Joueur.id 
               where Joueur.id = ?";
        $stmt = $this->pdo ->prepare($sql);
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function save(object $player):int{
        $sql = "INSERT INTO Personnes(Nom, Email,Nationalité) VALUES(?,?,?)";
        $stmt = $this->pdo ->prepare($sql);
        $stmt->execute([$player->getNom(),$player->getEmail(),$player->getNationalité()]);
        $player->setId($this->pdo->lastInsertId());

         $sql = "INSERT INTO Joueur(id,Equipe_id,Pseudo,Rôle,Valeur_Marchande) VALUES(?,?,?,?,?)";
        $stmt = $this->pdo ->prepare($sql);
        $stmt->execute([$player->getId(),$player->getEquipe_id(),$player->getPseudo(),$player->getRôle(),$player->getValeur_Marchande()]);
        
        return $player->getId();
    }

    public function updete(object $player):void{
         $sql = "UPDATE  Personnes set Nom = ?, Email = ?,Nationalité = ? where id = ?";
        $stmt = $this->pdo ->prepare($sql);
        $stmt->execute([$player->getNom(),$player->getEmail(),$player->getNationalité(),$player->getId()]);

         $sql = "UPDATE Joueur set Pseudo = ?,Rôle = ?,Valeur_Marchande = ? where id = ?";
        $stmt = $this->pdo ->prepare($sql);
        $stmt->execute([$player->getPseudo(),$player->getRôle(),$player->getValeur_Marchande(),$player->getId()]);

    }

    public function delete(int $id):void{
       $sql = "DELETE 
               from Personnes
               where id = $id";
        $stmt = $this->pdo ->prepare($sql);
        $stmt->execute();
    }
}
?>