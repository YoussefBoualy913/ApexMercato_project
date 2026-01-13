<?php
if (isset($_POST['submit'])) {
    spl_autoload_register(function (string $className) {
        $fields = ["/classes/", "/repository/"];
        foreach ($fields as $field) {
            $path =  ".." . $field . $className . ".php";
            if (file_exists($path)) {
                require $path;
            }
        }
    });
    $eq = new  Equipe();
    $repoequipe = new  RepositoryEquipe();



    $eq->setNom($_POST['Nom']);
    $eq->setBudget($_POST['Budget']);
    $eq->setManager($_POST['Manager']);

    $repoequipe->save($eq);
    header('location:../views/views_equipe.php');
}
