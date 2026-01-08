<?php
require_once('../classes/RepositoryEquipe.php');

$repoequipe = new  RepositoryEquipe();
$id = $_GET['equipe_id'];
$repoequipe->delete($id);
header('location:../views/views_equipe.php');
