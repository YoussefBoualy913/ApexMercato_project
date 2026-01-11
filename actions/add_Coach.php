<?php
if (isset($_POST['submit'])) {
    if (isset($_POST['Style_de_coaching'])) {
        require_once('../classes/Coach.php');
        require_once('../Repository/RepositoryCoach.php');

        $Coach = new  Coach();
        $repoCoach = new  RepositoryCoach();
        $Equipe_id = $_GET['Equipe_id'];
        $Coach->setNom($_POST['Nom']);
        $Coach->setEmail($_POST['Email']);
        $Coach->setNationalité($_POST['Nationalité']);
        $Coach->setEquipe_id($Equipe_id);
        $Coach->setAnnées_dexpérience($_POST['Années_dexpérience']);
        $Coach->setStyle_de_coaching($_POST['Style_de_coaching']);


        $id = $repoCoach->save($Coach);
        header("location:../views/form_creat_contrat.php? Equipe_id=$Equipe_id & Personne_id=$id");
        exit;
    }

    if (isset($_POST['Salaire'])) {
        require_once('../classes/Contract.php');
        require_once('../Repository/RepositoryContract.php');

        $contract = new  Contract();
        $repocontract = new  RepositoryContract();

        $contract->setPersonnes_id(($_GET['Personne_id']));
        $contract->setEquipe_id($_GET['Equipe_id']);
        $contract->setsalaire($_POST['Salaire']);
        $contract->setType($_POST['type']);
        $contract->setClause_de_rachat($_POST['Clause_de_rachat']);
        $contract->setDate_de_fin($_POST['Date_de_fin']);


        $repocontract->save($contract);
        header("location:../views/views_Coach.php? ");
        exit;
    }
}
