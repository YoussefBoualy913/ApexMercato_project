<?php 
if(isset($_POST['submit'])){
require_once('../db_connect.php');
require_once('../classes/Team.php');
require_once('../classes/RepositoryEquipe.php');

$eq = new  Equipe() ;
$db = Dtabese::getInstnce();
$repoequipe = new  RepositoryEquipe($db->getConnexion()) ;

$eq->setNom($_POST['Nom']);
$eq->setBudget($_POST['Budget']);
$eq->setManager($_POST['Manager']);

$repoequipe->save($eq);
header('location:../views/views_equipe.php');
}


?>