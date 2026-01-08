<?php

require_once('../classes/Transfert.php');
require_once('../classes/TransferHelper.php');
require_once('../classes/Contract.php');
require_once('../Repository/RepositoryTransfert.php');

$Player_id = $_GET['player_id'];
$equipe_debut_id = $_GET['equipe_debut_id'];
$equipe_fin_id = $_GET['equipe_fin_id'];

$contrat = new Contract();
$transfert = new Transfert();
$repotransfert = new RepositoryTransfert();

$contrat->setPersonnes_id($Player_id);
$contrat->setEquipe_id($equipe_fin_id);
$contrat->setSalaire($_POST['Salaire']);
$contrat->setClause_de_rachat($_POST['Clause_de_rachat']);
$contrat->setDate_de_fin($_POST['Date_de_fin']);

$transfert->setJoueur_id($Player_id);
$transfert->setEquipe_arrivée_id($equipe_fin_id);
$transfert->setEquipe_départ_id($equipe_debut_id);
$transfert->setMontante($repotransfert->getValeurMarchande($Player_id));
$transfert->setTransfert_code(TransferHelper::generateReference());


$repotransfert->trensfertPlayer($transfert, $contrat, $equipe_debut_id, $equipe_fin_id, $Player_id);

header('location:../views/views_player.php');
