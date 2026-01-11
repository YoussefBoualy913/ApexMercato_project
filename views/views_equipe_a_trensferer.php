<?php
session_start();
if ($_SESSION['username'] !== "admin" && $_SESSION['password'] !== "admin") {

    header('location:login.php');
    exit;
}
require_once('../header.php');


spl_autoload_register(
    function (string $className) {

        $path = "../Repository" . "/" . $className . ".php";
        require $path;
    }
);


$equipe_id = $_GET['equipe_debut_id'];
$repoequipe = new  RepositoryEquipe();
$result = $repoequipe->getSauf($equipe_id);
?>
<div class="container">
    <div class="section-header_transfert mt-2">
        <h2>Choisir l' équipe que vous souhait a Transférer le joueur</h2>

    </div>

    <div class="table-container fade-in">
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Équipe</th>
                    <th>Budget</th>
                    <th>Manager</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($result as $equpe) {
                    $id = $equpe['id'];
                    $player_id = $_GET['player_id'];
                    $equipe_debut_id = $_GET['equipe_debut_id'];
                    echo " <tr>
                        <td style='color: #64748b;'> $id</td>
                        <td>🎮 " . $equpe['Nom'] . "</td>
                        <td><span class='card-badge badge-player'>" . $equpe['Budget'] . "</span></td>
                        <td>" . $equpe['Manager'] . "</td>
                        <td>
                            <a href='views_trensfert_execute.php? player_id=$player_id & equipe_debut_id=$equipe_debut_id & equipe_fin_id=$id' class='btn btn-secondary' style='padding: 0.4rem 0.8rem; font-size: 0.85rem;'>choisir</a>
                          
                        </td>
                    </tr>";
                }
                ?>

            </tbody>
        </table>
    </div>


</div>
<?php
require_once('../footer.php');
?>