
<?php
session_start() ;
if ($_SESSION['username'] !=="admin" && $_SESSION['password'] !=="admin"){

            header('location:login.php');
            exit;
    }
require_once ('../header.php');
require_once('../Repository/RepositoryPlayer.php');


$repojoueour = new  RepositoryPlayer();
$result = $repojoueour->getAll();

?>
    <div class="container">
        <div class="section-header mt-2">
            <h2>👥 Joueur</h2>
             <a href="views_equipe.php" class="btn btn-primary mt-2"> Créer </a>
            
        </div>

       <div class="table-container fade-in">
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Joueur</th>
                        <th>Role</th>
                        <th>Équipe</th>
                        <th>Valeur Marchande</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                     foreach($result as $joueour){
                      $id = $joueour['id'];
                      $equipe_id = $joueour['equipe_id'];
                        echo "
                    <tr>
                        <td style='color: #64748b;'>$id</td>
                        <td>".$joueour['Nom']."</td>
                        <td><span class='card-badge badge-player'>".$joueour['Rôle']."</span></td>
                        <td>".$joueour['nomequipe']."</td>
                        <td style='color: var(--success);'>€".$joueour['Valeur_Marchande']."K/an</td>
                        <td>
                            <a href='form_create_player.php? player_id=$id' class='btn btn-secondary' style='padding: 0.4rem 0.8rem; font-size: 0.85rem;'>✏️ Modifier</a>
                            <a href='../actions/dellet_player.php? player_id=$id' class='btn btn-secondary' style='padding: 0.4rem 0.8rem; font-size: 0.85rem;'>✏️ supprimer</a>
                            <a href='./views_equipe_a_trensferer.php? player_id=$id & equipe_debut_id=$equipe_id' class='btn btn-secondary' style='padding: 0.4rem 0.8rem; font-size: 0.85rem;'>💰🔁 Transférer</a>
                        </td>
                    </tr> ";
                     }
                   ?>
                   
                </tbody>
            </table>
        </div>
                        
       
    </div>

   <?php
require_once ('../footer.php');
?>