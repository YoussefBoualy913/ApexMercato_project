<?php

require_once('../Dtabese.php');
require_once('RepositoryInterface.php');

class RepositoryContract implements RepositoryInterface
{
    private PDO $pdo;

    public function __construct()
    {
        $this->pdo = Dtabese::getInstnce()->getConnexion();
    }


    public function getAll(): array
    {
        $sql = "SELECT contrat.id,
                personnes.Nom,
                contrat.Type,
                equipe.Nom as nomequipe,
                contrat.Salaire,
                contrat.Clause_de_rachat,
                contrat.Date_de_fin
                FROM contrat
                JOIN personnes on personnes.id = contrat.Personnes_id
                JOIN equipe on contrat.Equipe_id = equipe.id
                WHERE contrat.Date_de_fin > NOW();
                ;";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function findById(int $id): array
    {
        $sql = "select * 
               from Contrat
               where id = ?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$id]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function save(object $contract): void
    {

        $sql = "INSERT INTO Contrat(Personnes_id,Equipe_id,Salaire,Date_de_débute,Date_de_fin,Clause_de_rachat,Type) VALUES(?,?,?,?,?,?,?)";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$contract->getPersonnes_id(), $contract->getEquipe_id(), $contract->getSalaire(), $contract->getDate_de_création() ,$contract->getDate_de_fin(), $contract->getClause_de_rachat(), $contract->getType()]);
    }

    public function updete(object $contract): void
    {

        $sql = "UPDATE Joueur set Personnes_id = ? ,Equipe_id = ?,Salaire = ?,Date_de_fin = ?,Clause_de_rachat = ? Type= ? where id = ?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$contract->getPersonnes_id(), $contract->getEquipe_id(), $contract->getSalaire(), $contract->getDate_de_fin(), $contract->getClause_de_rachat(), $contract->getType(), $contract->getId()]);;
    }

    public function delete(int $id): void
    {
        $sql = "DELETE 
               from Contrat
               where id = $id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
    }
}
