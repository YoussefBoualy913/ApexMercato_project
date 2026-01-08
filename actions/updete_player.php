<?php
if (isset($_POST['Pseudo'])) {

    require_once('../classes/Player.php');
    require_once('../classes/RepositoryPlayer.php');

    $player = new  Player();
    $repoplayer = new  RepositoryPlayer();
    $player_id = $_GET['player_id'];
    $player->setId($player_id);
    $player->setNom($_POST['Nom']);
    $player->setEmail($_POST['Email']);
    $player->setNationalité($_POST['Nationalité']);
    $player->setPseudo($_POST['Pseudo']);
    $player->setRôle($_POST['Rôle']);
    $player->setValeur_Marchande($_POST['Valeur_Marchande']);

    $id = $repoplayer->updete($player);
    header("location:../views/views_player.php? ");
    exit;
}
