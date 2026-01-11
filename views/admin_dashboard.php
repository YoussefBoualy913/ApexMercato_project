<?php
session_start();

if ($_SESSION['username'] !== "admin" && $_SESSION['password'] !== "admin") {

    header('location:login.php');
    exit;
}
require_once('../header.php');
require_once('../Repository/RepositoryContract.php');


$repocontrat = new  RepositoryContract();
$result = $repocontrat->getAll();
?>

<div class="container">
    <section class="hero fade-in">
        <h1> Dashboard Administrateur</h1>
        <p>Contrôle total du système de gestion</p>
    </section>

    <div class="section-header">
        <h2>📊 Vue d'ensemble</h2>
    </div>

    <div class="stats-grid fade-in">
        <div class="stat-card">
            <div class="stat-icon">👥</div>
            <div class="stat-value">127</div>
            <div class="stat-label">Joueurs Gérés</div>
        </div>

        <div class="stat-card">
            <div class="stat-icon">🎯</div>
            <div class="stat-value">24</div>
            <div class="stat-label">Coachs Actifs</div>
        </div>

        <div class="stat-card">
            <div class="stat-icon">📄</div>
            <div class="stat-value">89</div>
            <div class="stat-label">Contrats Actifs</div>
        </div>

        <div class="stat-card">
            <div class="stat-icon">💸</div>
            <div class="stat-value">15</div>
            <div class="stat-label">Transferts en cours</div>
        </div>
    </div>




    <div class="section-header mt-2">
        <h2>📋 Contrats Actifs</h2>
    </div>

    <div class="table-container fade-in">
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Personne</th>
                    <th>Type</th>
                    <th>Équipe</th>
                    <th>Salaire</th>
                    <th>Clause</th>
                    <th>Fin</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
               <?php foreach($result as $itme){ ?>
                <tr>
                    <td style="color: #64748b;"><?=$itme['id'];  ?></td>
                    <td><?=$itme['Nom'];  ?></td>
                    <td><span class="card-badge <?php if ($itme['Type'] == "coatch"){echo "badge-coach" ;}else{ echo " badge-player";}  ?>"><?=$itme['Type'];  ?></span></td>
                    <td><?=$itme['nomequipe'];  ?></td>
                    <td style="color: var(--success);">€<?=$itme['Salaire'];  ?>K/an</td>
                    <td style="color: var(--accent);">€<?=$itme['Clause_de_rachat']; ?>K</td>
                    <td><?=$itme['Date_de_fin'];  ?></td>
                    <td>
                        <button class="btn btn-secondary" style="padding: 0.4rem 0.8rem; font-size: 0.85rem;">✏️ Modifier</button>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>

<?php
require_once('../footer.php');
?>