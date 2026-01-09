<?php
session_start();
if ($_SESSION['username'] !== "admin" && $_SESSION['password'] !== "admin") {

    header('location:login.php');
    exit;
}
require_once('../header.php');
$Personnes_id = $_GET['Personne_id'];
$Equipe_id = $_GET['Equipe_id'];
?>
<div class="container">
    <div class="section-header mt-2">
        <h2>➕ Ajouter un Joueur</h2>
    </div>



    <div class="section-header_contra">
        <h2>📄<span> Création de Contrat</span></h2>
    </div>
    <div class="form-container fade-in">
        <form id="contractForm" action="<?php if (isset($_GET['player_contrat'])) {
                                            echo "../actions/add_player.php? Equipe_id=$Equipe_id & Personne_id=$Personnes_id";
                                        } else {
                                            echo "../actions/add_Coach.php? Equipe_id=$Equipe_id & Personne_id=$Personnes_id";
                                        } ?>" method="POST">
            <div class="form-grid">

                <div class="form-group">
                    <label for="contractSalary">Salaire Annuel (€) *</label>
                    <input type="number" name="Salaire" id="contractSalary" placeholder="Ex: 150000" required>
                </div>

                <div class="form-group">
                    <label for="contractClause">Clause de Rachat (€) *</label>
                    <input type="number" name="Clause_de_rachat" id="contractClause" placeholder="Ex: 500000" required>
                </div>


                <div class="form-group">
                    <label for="contractEnd">Date de Fin *</label>
                    <input type="date" name="Date_de_fin" id="contractEnd" required>
                </div>
            </div>

            <button type="submit" name="submit" class="btn btn-primary mt-2" onclick="validationContrat(event)">✅ Générer le Contrat</button>
        </form>
    </div>


</div>
<?php
require_once('../footer.php');
?>