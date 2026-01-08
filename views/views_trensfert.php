<?php
session_start();
if ($_SESSION['username'] !== "admin" && $_SESSION['password'] !== "admin") {

    header('location:login.php');
    exit;
}
require_once('../header.php');
require_once('../Repository/RepositoryTransfert.php');
require_once('../classes/FinancialEngine.php');

$player_id = $_GET['player_id'];
$equipe_debut_id = $_GET['equipe_debut_id'];
$equipe_fin_id = $_GET['equipe_fin_id'];

$RepoFinancialEngine = new RepositoryTransfert();

$result1 = $RepoFinancialEngine->getValeurMarchande($player_id);
$result2 = $RepoFinancialEngine->getBudget($equipe_fin_id);



?>

<div class="container">
    <div class="section-header mt-2">
        <h2>💸 Exécution de Transfert</h2>
    </div>

    <div class="form-container fade-in">
        <div style="background: rgba(249, 115, 22, 0.1); border: 1px solid var(--accent); border-radius: 10px; padding: 1rem; margin-bottom: 2rem;">
            <p style="color: var(--accent); font-weight: 600;">⚠️ Attention: Les transferts sont des transactions financières irréversibles</p>
        </div>

        <form id="transferForm" action="../actions/process_transfer.php? player_id=<?= $player_id ?> & equipe_debut_id=<?= $equipe_debut_id ?> & equipe_fin_id=<?= $equipe_fin_id ?>" method="POST">
            <div class="form-container fade-in">
                <h3 style="margin-bottom: 1rem; color: var(--primary);"> 📰 Nouvelle contract</h3>
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
            </div>

            <div class="mt-2" style="background: rgba(30, 41, 59, 0.5); padding: 1.5rem; border-radius: 10px; border: 1px solid rgba(139, 92, 246, 0.3);">
                <h3 style="margin-bottom: 1rem; color: var(--primary);">💰 Calcul Financier</h3>
                <div class="info-row">
                    <span class="info-label">Montant du Transfert</span>
                    <span class="info-value">€<?= $result1; ?></span>
                </div>
                <div class="info-row">
                    <span class="info-label">Taxes (10%)</span>
                    <span class="info-value">€<?php echo $tax = FinancialEngine::calculateTax($result1); ?></span>
                </div>
                <div class="info-row">
                    <span class="info-label">Commission Agent (5%)</span>
                    <span class="info-value">€<?php echo $commissia = FinancialEngine::commissionAgent($result1); ?></span>
                </div>
                <div class="info-row" style="border-top: 2px solid var(--primary); margin-top: 1rem; padding-top: 1rem;">
                    <span class="info-label" style="font-size: 1.1rem; color: var(--accent);">TOTAL</span>
                    <span class="value-highlight">€<?php echo $result1 + $tax +  $commissia; ?></span>
                </div>

                <?php if ($result2 > ($result1 + $tax + $commissia)) {
                    $budget = 'suffisant';
                } else {
                    $budget = 'insuffisant';
                } ?>
                <div style="margin-top: 1rem; padding: 1rem; background: rgba(16, 185, 129, 0.1); border-radius: 8px; border: 1px solid <?php if ($budget === "suffisant") {
                                                                                                                                            echo 'var(--success)';
                                                                                                                                        } else {
                                                                                                                                            echo 'var(--accent)';
                                                                                                                                        } ?>;">
                    <p style="color:<?php if ($budget ===  "suffisant") {
                                        echo 'var(--success)';
                                    } else {
                                        echo 'var(--accent)';
                                    } ?> ; font-weight: 600;">
                        ✓ Budget <?php if ($budget === "suffisant") {
                                        echo $budget;
                                    } else {
                                        echo $budget;
                                    } ?> (€<?= $result2; ?> disponibles)</p>
                </div>
            </div>

            <div class="flex gap-1 mt-2">
                <button href=" type=" submit" name="submit" class="btn btn-success" style="flex: 1;">✅ Exécuter le Transfert</button>
                <a type="button" class="btn btn-danger" style="flex: 1;">❌ Annuler</a>
            </div>
        </form>
    </div>

</div>


<?php
require_once('../footer.php');
?>