<?php

require_once('../classes/RepositoryPlayer.php');


$repoplayer = new  RepositoryPlayer();
$id = $_GET['player_id'];
$repoplayer->delete($id);
header('location:../views/views_player.php');
