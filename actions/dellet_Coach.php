<?php 

require_once('../db_connect.php');
require_once('../classes/RepositoryCoach.php');

$db = Dtabese::getInstnce();
$repocoach = new  RepositoryCoach($db->getConnexion()) ;
$id = $_GET['Coach_id'];
$repocoach->delete($id);
header('location:../views/views_Coach.php');



?>