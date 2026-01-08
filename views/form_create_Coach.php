<?php
session_start();
if ($_SESSION['username'] !== "admin" && $_SESSION['password'] !== "admin") {

    header('location:login.php');
    exit;
}
require_once('../header.php');

if (isset($_GET['equipe_id'])) {
    $Equipe_id = $_GET['equipe_id'];
}

if (isset($_GET['Coach_id'])) {

    require_once('../classes/RepositoryCoach.php');

    $repoCoach = new  RepositoryCoach();
    $result = $repoCoach->findById($_GET['Coach_id']);
}
?>
<div class="container">
    <div class="section-header mt-2">
        <h2>➕ Ajouter un Coach</h2>
    </div>
    <div class="form-container fade-in">
        <form id="coachForm" action="<?php if (isset($_GET['Coach_id'])) {
                                            $id = $_GET['Coach_id'];
                                            echo "../actions/updete_Coach.php? Coach_id=$id";
                                        } else {
                                            echo "../actions/add_Coach.php? Equipe_id=$Equipe_id";
                                        } ?>" method="POST">
            <div class="form-grid">
                <div class="form-group">
                    <label for="coachName">Nom complet *</label>
                    <input type="text" name="Nom" <?php if (isset($_GET['Coach_id'])) {
                                                        echo "value='" . $result['Nom'] . "'";
                                                    } ?> id="coachName" placeholder="Ex: Dylan Falco" required>
                </div>

                <div class="form-group">
                    <label for="coachEmail">Email *</label>
                    <input type="email" name="Email" <?php if (isset($_GET['Coach_id'])) {
                                                            echo "value='" . $result['Email'] . "'";
                                                        } ?> id="coachEmail" placeholder="coach@example.com" required>
                </div>

                <div class="form-group">
                    <label for="coachNationality">Nationalité *</label>
                    <input type="text" name="Nationalité" <?php if (isset($_GET['Coach_id'])) {
                                                                echo "value='" . $result['Nationalité'] . "'";
                                                            } ?> id="coachNationality" placeholder="Ex: Marocaine" required>

                </div>

                <div class="form-group">
                    <label for="coachStyle">Style de Coaching *</label>
                    <select id="coachStyle" <?php if (isset($_GET['Coach_id'])) {
                                                echo "value='" . $result['Style_de_coaching'] . "'";
                                            } ?> name="Style_de_coaching" required>
                        <option value="">Sélectionner...</option>
                        <option value="Agressif">Agressif</option>
                        <option value="Stratégique">Stratégique</option>
                        <option value="Mental">Mental Coach</option>
                        <option value="Analytique">Analytique</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="coachExperience">Années d'expérience *</label>
                    <input type="number" name="Années_dexpérience" <?php if (isset($_GET['Coach_id'])) {
                                                                        echo "value='" . $result['Années_dexpérience'] . "'";
                                                                    } ?> id="coachExperience" placeholder="Ex: 5" min="0" required>
                </div>


            </div>

            <button type="submit" name="submit" class="btn btn-primary mt-2">✅ Créer le Coach</button>
        </form>
    </div>


</div>

<?php
require_once('../footer.php');
?>