<?php
require_once('../Dtabese.php');
class Repositorypagenation 
{
    private PDO $pdo;

    public function __construct()
    {
        $this->pdo = Dtabese::getInstnce()->getConnexion();
    }

    public function singlePage(int $nombrepage){
            $nombrepage =   ($nombrepage * 3)-3;
            $sql = "SELECT joueur.id,equipe.id as equipe_id  ,personnes.Nom,
                   joueur.Rôle,Equipe.Nom as nomequipe,joueur.Valeur_Marchande
                FROM personnes
                JOIN joueur on personnes.id = joueur.id
                JOIN equipe on equipe.id = joueur.Equipe_id
                LIMIT 3 OFFSET $nombrepage;";

        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
     public function totaleJoueur():int{
            $sql = "SELECT count(*) as anombrejoueur FROM joueur";

        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
        return $stmt->fetchColumn();
    }
}

?>