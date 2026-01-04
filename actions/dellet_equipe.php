<?php 

require_once('../db_connect.php');
require_once('../classes/RepositoryEquipe.php');

$db = Dtabese::getInstnce();
$repoequipe = new  RepositoryEquipe($db->getConnexion()) ;
$id = $_GET['equipe_id'];
$repoequipe->delete($id);
header('location:../views/views_equipe.php');



?>