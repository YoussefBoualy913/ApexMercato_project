<?php
session_start();
if ($_SESSION['username'] !== "admin" && $_SESSION['password'] !== "admin") {

    header('location:login.php');
    exit;
}

require_once('../header.php');
require_once('../classes/RepositoryCoach.php');


$repoCoach = new  RepositoryCoach();
$result = $repoCoach->getAll();
?>
<div class="container">
    <div class="section-header mt-2">
        <h2>👥 Coach</h2>
        <a href="views_equipe.php" class="btn btn-primary mt-2"> Créer </a>

    </div>

    <div class="table-container fade-in">
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Coach</th>
                    <th>Style de coaching</th>
                    <th>Années d'experience</th>
                    <th>Équipe</th>
                    <th>Salaire</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($result as $Coach) {
                    $id = $Coach['id'];
                    echo "
                    <tr>
                        <td style='color: #64748b;'>$id</td>
                        <td>" . $Coach['Nom'] . "</td>
                        <td><span class='card-badge badge-player'>" . $Coach['Style_de_coaching'] . "</span></td>
                        <td>" . $Coach['Années_dexpérience'] . "</td>
                        <td>" . $Coach['nomequipe'] . "</td>
                        <td style='color: var(--success);'>€" . $Coach['Salaire'] . "K/an</td>
                        <td>
                            <a href='form_create_Coach.php? Coach_id=$id' class='btn btn-secondary' style='padding: 0.4rem 0.8rem; font-size: 0.85rem;'>✏️ Modifier</a>
                            <a href='../actions/dellet_Coach.php? Coach_id=$id' class='btn btn-secondary' style='padding: 0.4rem 0.8rem; font-size: 0.85rem;'>✏️ supprimer</a>
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