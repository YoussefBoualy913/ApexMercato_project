<?php
session_start();
if ($_SESSION['username'] !== "admin" && $_SESSION['password'] !== "admin") {

    header('location:login.php');
    exit;
}
require_once('../header.php');

if (isset($_GET['equipe_id'])) {
    require_once('../Repository/RepositoryEquipe.php');

    $repoequipe = new  RepositoryEquipe();
    $result = $repoequipe->findById($_GET['equipe_id']);
}
?>
<div class="container">
    <div class="section-header mt-2">
        <h2>➕ Ajouter un Équipes</h2>
    </div>

    <div class="form-container fade-in">
        <form id="teamForm" action="<?php if (isset($_GET['equipe_id'])) {
                                        $id = $_GET['equipe_id'];
                                        echo "../actions/updete_equipe.php? equipe_id=$id";
                                    } else {
                                        echo "../actions/add_equipe.php";
                                    } ?>" method="POST">
            <div class="form-grid">
                <div class="form-group">
                    <label for="teamName">Nom de l'équipe *</label>
                    <input type="text" id="teamName" name="Nom" <?php if (isset($_GET['equipe_id'])) {
                                                                    echo "value='" . $result['Nom'] . "'";
                                                                } ?> placeholder="Ex: Karmine Corp" require>
                </div>

                <div class="form-group">
                    <label for="teamBudget">Budget (€) *</label>
                    <input type="number" id="teamBudget" name="Budget" <?php if (isset($_GET['equipe_id'])) {
                                                                            echo "value='" . $result['Budget'] . "'";
                                                                        } ?> placeholder="Ex: 5000000" require>
                </div>

                <div class="form-group">
                    <label for="teamManager">Manager *</label>
                    <input type="text" id="teamManager" name="Manager" <?php if (isset($_GET['equipe_id'])) {
                                                                            echo "value='" . $result['Manager'] . "'";
                                                                        } ?> placeholder="Ex: Kameto" require>
                </div>


            </div>

            <button type="submit" name="submit" class="btn btn-primary mt-2">✅ Créer l'Équipe</button>
        </form>
    </div>

</div>

<?php
require_once('../footer.php');
?>