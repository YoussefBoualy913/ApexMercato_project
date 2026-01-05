<?php 
if (isset($_POST['Style_de_coaching'])){
       require_once('../db_connect.php');
       require_once('../classes/Coach.php');
       require_once('../classes/RepositoryCoach.php');

       $Coach = new  Coach() ;
       $db = Dtabese::getInstnce();
       $repoCoach = new  RepositoryCoach($db->getConnexion()) ;
       $Coach_id = $_GET['Coach_id'];
        $Coach->setId($Coach_id);
        $Coach->setNom($_POST['Nom']);
       $Coach->setEmail($_POST['Email']);
       $Coach->setNationalité($_POST['Nationalité']);
       $Coach->setAnnées_dexpérience($_POST['Années_dexpérience']);
       $Coach->setStyle_de_coaching($_POST['Style_de_coaching']);

       $id = $repoCoach->updete($Coach);
       header("location:../views/views_Coach.php? ");
       exit;
    }

?>