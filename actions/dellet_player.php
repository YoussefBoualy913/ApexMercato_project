<?php 

require_once('../db_connect.php');
require_once('../classes/RepositoryPlayer.php');

$db = Dtabese::getInstnce();
$repoplayer = new  RepositoryPlayer($db->getConnexion()) ;
$id = $_GET['player_id'];
$repoplayer->delete($id);
header('location:../views/views_player.php');



?>