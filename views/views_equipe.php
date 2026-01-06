
<?php
session_start() ;
if ($_SESSION['username'] !=="admin" && $_SESSION['password'] !=="admin"){

            header('location:login.php');
            exit;
    }
require_once ('../header.php');


spl_autoload_register(function(string $className){
    
        $path ="../Repository"."/". $className.".php";
            require $path;
        
    }
);



$repoequipe = new  RepositoryEquipe();
$result = $repoequipe->getAll();
?>
    <div class="container">
        <div class="section-header mt-2">
            <h2>🏢  Équipes</h2>
             <a href="form_create_equipe.php" class="btn btn-primary mt-2"> Créer </a>
            
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
                    foreach($result as $equpe){
                        $id = $equpe['id'];
                   echo" <tr>
                        <td style='color: #64748b;'> $id</td>
                        <td>🎮 ".$equpe['Nom']."</td>
                        <td><span class='card-badge badge-player'>".$equpe['Budget']."</span></td>
                        <td>".$equpe['Manager']."</td>
                        <td>
                            <a href='form_create_equipe.php? equipe_id=$id' class='btn ' style='padding: 0.4rem 0.8rem; font-size: 0.85rem;'>✏️ Modifier</a>
                            <a href='../actions/dellet_equipe.php? equipe_id=$id' class='btn ' style='padding: 0.4rem 0.8rem; font-size: 0.85rem;'>✖️ supprimer</a>
                            <a href='form_create_player.php? equipe_id=$id' class='btn btn-secondary' style='padding: 0.4rem 0.8rem; font-size: 0.85rem;'>➕ add Joueour</a>
                            <a href='form_create_Coach.php? equipe_id=$id' class='btn btn-secondary' style='padding: 0.4rem 0.8rem; font-size: 0.85rem;'>➕ add Coach</a>
                        </td>
                    </tr>";
                    }
                   ?>
                   
                </tbody>
            </table>
        </div>
                        
       
    </div>
<?php
require_once ('../footer.php');
?>
  