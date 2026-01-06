
<?php
session_start() ;
if ($_SESSION['username'] !=="admin" && $_SESSION['password'] !=="admin"){

            header('location:login.php');
            exit;
    }
require_once ('../header.php');

if (isset($_GET['equipe_id'])){
$Equipe_id =$_GET['equipe_id'];
}

if (isset($_GET['player_id'])){

require_once('../classes/RepositoryPlayer.php');


$repoPlayer = new  RepositoryPlayer();
$result = $repoPlayer->findById($_GET['player_id']);
}
?>
    <div class="container">
        <div class="section-header mt-2">
            <h2>➕ Ajouter un Joueur</h2>
        </div>
     
        <div class="form-container fade-in">
            <form id="playerForm" action="<?php if(isset($_GET['player_id'])){$id = $_GET['player_id']; echo"../actions/updete_player.php? player_id=$id";}
            else{echo "../actions/add_player.php? Equipe_id=$Equipe_id";}?>" method="POST">
                <div class="form-grid">
                    <div class="form-group">
                        <label for="playerName">Nom complet *</label>
                        <input type="text" name="Nom" <?php if(isset($_GET['player_id'])){ echo "value='".$result['Nom']."'";} ?> id="playerName" placeholder="Ex: Martin Larsson" required>
                    </div>

                    <div class="form-group">
                        <label for="playerPseudo">Pseudo *</label>
                        <input type="text" name="Pseudo" <?php if(isset($_GET['player_id'])){ echo "value='".$result['Pseudo']."'";} ?> id="playerPseudo" placeholder="Ex: Rekkles" required>
                    </div>

                    <div class="form-group">
                        <label for="playerEmail">Email *</label>
                        <input type="email" name="Email" <?php if(isset($_GET['player_id'])){ echo "value='".$result['Email']."'";} ?>  id="playerEmail" placeholder="player@example.com" required>
                    </div>

                    <div class="form-group">
                        <label for="playerNationality">Nationalité *</label>
                         <input type="text" <?php if(isset($_GET['player_id'])){ echo "value='".$result['Nationalité']."'";} ?>  name="Nationalité" id="playerNationality" placeholder="Ex: marocaine" required>
                       
                    </div>

                    <div class="form-group">
                        <label for="playerRole">Rôle *</label>
                        <select id="playerRole" <?php if(isset($_GET['player_id'])){ echo "value='".$result['Rôle']."'";} ?>  name="Rôle" required>
                            <option value="">Sélectionner...</option>
                            <option value="Top">Top Laner</option>
                            <option value="Jungle">Jungler</option>
                            <option value="Mid">Mid Laner</option>
                            <option value="ADC">ADC</option>
                            <option value="Support">Support</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="playerValue">Valeur Marchande (€) *</label>
                        <input type="number" name="Valeur_Marchande" <?php if(isset($_GET['player_id'])){ echo "value='".$result['Valeur_Marchande']."'";} ?> id="playerValue" placeholder="Ex: 500000" required>
                    </div>
                </div>

                <button type="submit" name="submit" class="btn btn-primary mt-2">✅ Créer le Joueur</button>
            </form>
        </div>            
       
    </div>
<?php
require_once ('../footer.php');
?>