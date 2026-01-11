<?php
require_once('../Dtabese.php');
$pdo = Dtabese::getInstnce()->getConnexion();

$query = $_GET['query'];


$sql = "select personnes.Nom as Nomjoueur,
        joueur.Rôle,
        equipe.Nom as Nomequipe,
        personnes.Nationalité,
        joueur.Valeur_Marchande,
        contrat.Salaire,
        contrat.Clause_de_rachat
        from personnes
        JOIN joueur on personnes.id= joueur.id
        JOIN equipe on equipe.id = joueur.Equipe_id
        JOIN contrat on joueur.id = contrat.Personnes_id
        where personnes.Nom  LIKE ?;";
$stmt = $pdo ->prepare($sql);
$stmt ->execute(['%'.$query.'%']);

$result = $stmt ->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($result);