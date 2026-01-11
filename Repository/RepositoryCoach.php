<?php
require_once('RepositoryInterface.php');
require_once('../Dtabese.php');

class RepositoryCoach implements RepositoryInterface
{
    private PDO $pdo;

    public function __construct()
    {
        $this->pdo = Dtabese::getInstnce()->getConnexion();
    }


    public function getAll(): array
    {
        $sql = "SELECT Coach.id ,personnes.Nom,Coach.Style_de_coaching,Coach.Années_dexpérience,Equipe.Nom as nomequipe,contrat.Salaire
                FROM personnes
                JOIN Coach on personnes.id = Coach.id
                JOIN equipe on equipe.id = Coach.Equipe_id
                JOIN contrat on Coach.id = contrat.Personnes_id;";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function findById(int $id): array
    {
        $sql = "select * 
               from Personnes
               join Coach  on Personnes.id = Coach.id 
               where Coach.id = ?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function save(object $coach): int
    {
        $sql = "INSERT INTO Personnes(Nom, Email,Nationalité) VALUES(?,?,?)";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$coach->getNom(), $coach->getEmail(), $coach->getNationalité()]);
        $coach->setId($this->pdo->lastInsertId());

        $sql = "INSERT INTO Coach(id,Equipe_id,Style_de_coaching,Années_dexpérience) VALUES(?,?,?,?)";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$coach->getId(), $coach->getEquipe_id(), $coach->getStyle_de_coaching(), $coach->getAnnées_dexpérience()]);
        return $coach->getId();
    }

    public function updete(object $coach): void
    {
        $sql = "UPDATE  Personnes set Nom = ?, Email = ?,Nationalité = ? where id = ?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$coach->getNom(), $coach->getEmail(), $coach->getNationalité(), $coach->getId()]);

        $sql = "UPDATE Coach set Style_de_coaching = ?,Années_dexpérience = ? where id = ?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$coach->getStyle_de_coaching(), $coach->getAnnées_dexpérience(), $coach->getId()]);
    }

    public function delete(int $id): void
    {
        $sql = "DELETE 
               from Personnes
               where id = $id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
    }
}
