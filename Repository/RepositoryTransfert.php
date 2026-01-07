<?php

require_once('../Dtabese.php');

class RepositoryTransfert {

    private PDO $pdo;
    private int $ValeurMarchande;
    private int $BudgetB;

    public function __construct(){
        $this ->pdo = Dtabese::getInstnce()->getConnexion();
    }
  
    
    public function getValeurMarchande(int $id):int {
        $sql = "SELECT Valeur_Marchande
                FROM joueur
                where id = ?";
               
        $stmt = $this->pdo ->prepare($sql);
        $stmt->execute([$id]);
        return $stmt->fetchColumn();
    }
    public function getBudget(int $id):int{
        $sql = "SELECT Budget
                FROM Equipe
               where id =?";
               
        $stmt = $this->pdo ->prepare($sql);
        $stmt->execute([$id]);
        
        return  $stmt->fetchColumn();
    }

     public function trensfertPlayer(object $transfert,object $Contrat,int $eA_id ,$eB_id,$J_id ):void{

        $this->pdo->beginTransaction();
        try{

            $this->BudgetB = $this->getBudget($eB_id);
            $this->ValeurMarchande = $this->getValeurMarchande($J_id);

            if ($this->BudgetB < ($this->ValeurMarchande + FinancialEngine::calculateTax($this->ValeurMarchande) + FinancialEngine::commissionAgent($this->ValeurMarchande) )){
                throw new PDOException('le Bedget de lequipe insufisant pour trensfére le joueur ');
            }
             $sql1 =" UPDATE `equipe` SET `Budget`=? WHERE ?";
             $stmt = $this->pdo ->prepare($sql1);
             $stmt->execute([FinancialEngine::newBedgetEquipeDbute($this->getBudget($eA_id),$this->getValeurMarchande($J_id)),$eA_id]);
             
              $sql3 =" UPDATE `equipe` SET `Budget`=? WHERE ?";
             $stmt = $this->pdo ->prepare($sql3);
             $stmt->execute([FinancialEngine::newBedgetEquipeDbute($this->getBudget($eB_id),$this->getValeurMarchande($J_id)),$eB_id]);
             
             $sql4 ="UPDATE `joueur` SET Equipe_id`= ? WHERE ?";
             $stmt = $this->pdo ->prepare($sql4);
             $stmt->execute([$eB_id,$J_id]);

             $sql2 = "INSERT INTO `contrat`( `Personnes_id`, `Equipe_id`, `Salaire`, `Clause_de_rachat`, `Date_de_fin`) 
             VALUES ('?','?','?','?','?')";
              $stmt = $this->pdo ->prepare($sql2);
              $stmt->execute([$Contrat->getPersonnes_id(),$Contrat->getEquipe_id()
              ,$Contrat->getSalaire(),$Contrat->getClause_de_rachat(),$Contrat->getDate_de_fin()]);
            
               $sql5 = "INSERT INTO `transfert`( `Joueur_id`, `Equipe_départ_id`, `Equipe_arrivée_id`, `Montant`, `Statut`) 
               VALUES (?,?,?,?,?)";
              $stmt = $this->pdo ->prepare($sql5);
              $stmt->execute([$transfert->getJoueur_id(),$transfert->getEquipe_départ_id()
              ,$transfert->getEquipe_arrivée_id(),$transfert->getMontant(),$transfert->getStatut()]);
               
               $this->pdo->commit();
        }catch(PDOException){
              $this->pdo->rollBack(); 
        }
       
               
        
    }


}
?>