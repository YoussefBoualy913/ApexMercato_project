<?php 
if(isset($_POST['submit'])){
    if (isset($_POST['Pseudo'])){
       require_once('../classes/Player.php');
       require_once('../classes/RepositoryPlayer.php');

       $player = new  Player() ;
       $repoplayer = new  RepositoryPlayer() ;
       $Equipe_id = $_GET['Equipe_id'];
       $player->setNom($_POST['Nom']);
       $player->setEmail($_POST['Email']);
       $player->setNationalité($_POST['Nationalité']);
       $player->setEquipe_id($Equipe_id);
       $player->setPseudo($_POST['Pseudo']);
       $player->setRôle($_POST['Rôle']);
       $player->setValeur_Marchande($_POST['Valeur_Marchande']);

       $id = $repoplayer->save($player);
       header("location:../views/form_creat_contrat.php? Equipe_id=$Equipe_id & Personne_id=$id & player_contrat=1");
       exit;
    }

     if (isset($_POST['Salaire'])){
       require_once('../classes/Contract.php');
       require_once('../classes/RepositoryContract.php');

       $contract = new  Contract() ;
       $repocontract = new  RepositoryContract() ;
       
       $contract->setPersonnes_id($_GET['Personne_id']);
       $contract->setEquipe_id($_GET['Equipe_id']);
       $contract->setsalaire($_POST['Salaire']);
       $contract->setClause_de_rachat($_POST['Clause_de_rachat']);
       $contract->setDate_de_fin($_POST['Date_de_fin']);
      

       $repocontract->save($contract);
       header("location:../views/views_player.php? ");
        exit;
    }
}

?>