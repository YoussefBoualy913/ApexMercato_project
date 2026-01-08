<?php
session_start();

if ($_SESSION['username'] !== "admin" && $_SESSION['password'] !== "admin") {

    header('location:login.php');
    exit;
}

require_once('../header.php');
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
                <tr>
                    <td style="color: #64748b;">#CNT-2025-089</td>
                    <td>🎮 Cinkrof</td>
                    <td><span class="card-badge badge-player">Joueur</span></td>
                    <td>Karmine Corp</td>
                    <td style="color: var(--success);">€180K/an</td>
                    <td style="color: var(--accent);">€850K</td>
                    <td>31/12/2027</td>
                    <td>
                        <button class="btn btn-secondary" style="padding: 0.4rem 0.8rem; font-size: 0.85rem;">✏️ Modifier</button>
                    </td>
                </tr>
                <tr>
                    <td style="color: #64748b;">#CNT-2025-067</td>
                    <td>🎮 Rekkles</td>
                    <td><span class="card-badge badge-player">Joueur</span></td>
                    <td>G2 Esports</td>
                    <td style="color: var(--success);">€250K/an</td>
                    <td style="color: var(--accent);">€1.2M</td>
                    <td>30/06/2026</td>
                    <td>
                        <button class="btn btn-secondary" style="padding: 0.4rem 0.8rem; font-size: 0.85rem;">✏️ Modifier</button>
                    </td>
                </tr>
                <tr>
                    <td style="color: #64748b;">#CNT-2025-043</td>
                    <td>🎯 Dylan Falco</td>
                    <td><span class="card-badge badge-coach">Coach</span></td>
                    <td>Team Vitality</td>
                    <td style="color: var(--success);">€95K/an</td>
                    <td style="color: var(--accent);">-</td>
                    <td>31/12/2026</td>
                    <td>
                        <button class="btn btn-secondary" style="padding: 0.4rem 0.8rem; font-size: 0.85rem;">✏️ Modifier</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<?php
require_once('../footer.php');
?>