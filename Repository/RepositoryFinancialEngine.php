<?php

require_once('../Dtabese.php');

class RepositoryFinancialEngine {
    private PDO $pdo;

    public function __construct(){
        $this ->pdo = Dtabese::getInstnce()->getConnexion();
    }
  
    
    public function getValeurMarchande(int $id):array{
        $sql = "SELECT joueur.Valeur_Marchande,Equipe.Budget
                FROM joueur
                JOIN equipe on equipe.id = joueur.Equipe_id";
               
        $stmt = $this->pdo ->prepare($sql);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }


}
?>