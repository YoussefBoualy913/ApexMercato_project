<?php
// use  classes\Equipe;
// use  Repository\RepositoryEquipe;


// spl_autoload_register(function(string $className){
//     $path = "../" . str_replace("\\","/",$className) . ".php";
//     require $path;
// });
if (isset($_POST['submit'])) {
    require_once('../classes/Equipe.php');
    require_once('../Repository/RepositoryEquipe.php');


    $eq = new  Equipe();
    $repoequipe = new  RepositoryEquipe();

    $eq->setId($_GET['equipe_id']);
    $eq->setNom($_POST['Nom']);
    $eq->setBudget($_POST['Budget']);
    $eq->setManager($_POST['Manager']);

    $repoequipe->updete($eq);
    header('location:../views/views_equipe.php');
}
