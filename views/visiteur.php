<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Public - Apex Management</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <nav class="navbar">
        <div class="nav-container">
            <a href="index.html" class="logo">⚡ APEX Management</a>
            <ul class="nav-links">
               
                <li><a href="#">Admin</a></li>
                <li><a href="#">Journaliste</a></li>
                <li><a href="#" class="active">Public</a></li>
            </ul>
        </div>
    </nav>

    <div class="container">
        <section class="hero fade-in">
            <h1>👁️ Marché Public eSport</h1>
            <p>Découvrez les joueurs, équipes et transferts de l'écosystème compétitif</p>
        </section>

        <div class="section-header">
            <h2>🔍 Recherche Rapide</h2>
        </div>

        <div class="search-container fade-in">
            <input 
                type="text" 
                class="search-bar" 
                id="searchInput"
                placeholder="🔎 Rechercher un joueur, une équipe ou un coach..."
            >
        </div>

        <div class="section-header mt-2">
            <h2>⭐ Joueurs Vedettes</h2>
        </div>

        <div class="cards-grid fade-in" id="playersGrid">
            <div class="card player-card" data-search="cinkrof karmine corp jungle france">
                <div class="card-header">
                    <h3 class="card-title">🎮 Cinkrof</h3>
                    <span class="card-badge badge-player">Jungle</span>
                </div>
                <div class="card-info">
                    <div class="info-row">
                        <span class="info-label">Équipe Actuelle</span>
                        <span class="info-value">Karmine Corp</span>
                    </div>
                    <div class="info-row">
                        <span class="info-label">Nationalité</span>
                        <span class="info-value">🇫🇷 France</span>
                    </div>
                    <div class="info-row">
                        <span class="info-label">Rôle</span>
                        <span class="info-value">Jungler</span>
                    </div>
                    <div class="info-row">
                        <span class="info-label">Valeur Marchande</span>
                        <span class="value-highlight">€850K</span>
                    </div>
                </div>
                <button class="btn btn-secondary mt-2" style="width: 100%;" onclick="showProfile('Cinkrof')">Voir le Profil</button>
            </div>

            <div class="card player-card" data-search="rekkles g2 esports adc suède sweden">
                <div class="card-header">
                    <h3 class="card-title">🎮 Rekkles</h3>
                    <span class="card-badge badge-player">ADC</span>
                </div>
                <div class="card-info">
                    <div class="info-row">
                        <span class="info-label">Équipe Actuelle</span>
                        <span class="info-value">G2 Esports</span>
                    </div>
                    <div class="info-row">
                        <span class="info-label">Nationalité</span>
                        <span class="info-value">🇸🇪 Suède</span>
                    </div>
                    <div class="info-row">
                        <span class="info-label">Rôle</span>
                        <span class="info-value">ADC</span>
                    </div>
                    <div class="info-row">
                        <span class="info-label">Valeur Marchande</span>
                        <span class="value-highlight">€1.2M</span>
                    </div>
                </div>
                <button class="btn btn-secondary mt-2" style="width: 100%;" onclick="showProfile('Rekkles')">Voir le Profil</button>
            </div>

            <div class="card player-card" data-search="caps vitality team mid danemark denmark">
                <div class="card-header">
                    <h3 class="card-title">🎮 Caps</h3>
                    <span class="card-badge badge-player">Mid</span>
                </div>
                <div class="card-info">
                    <div class="info-row">
                        <span class="info-label">Équipe Actuelle</span>
                        <span class="info-value">Team Vitality</span>
                    </div>
                    <div class="info-row">
                        <span class="info-label">Nationalité</span>
                        <span class="info-value">🇩🇰 Danemark</span>
                    </div>
                    <div class="info-row">
                        <span class="info-label">Rôle</span>
                        <span class="info-value">Mid Laner</span>
                    </div>
                    <div class="info-row">
                        <span class="info-label">Valeur Marchande</span>
                        <span class="value-highlight">€950K</span>
                    </div>
                </div>
                <button class="btn btn-secondary mt-2" style="width: 100%;" onclick="showProfile('Caps')">Voir le Profil</button>
            </div>

            <div class="card player-card" data-search="cabochard bds top france">
                <div class="card-header">
                    <h3 class="card-title">🎮 Cabochard</h3>
                    <span class="card-badge badge-player">Top</span>
                </div>
                <div class="card-info">
                    <div class="info-row">
                        <span class="info-label">Équipe Actuelle</span>
                        <span class="info-value">BDS</span>
                    </div>
                    <div class="info-row">
                        <span class="info-label">Nationalité</span>
                        <span class="info-value">🇫🇷 France</span>
                    </div>
                    <div class="info-row">
                        <span class="info-label">Rôle</span>
                        <span class="info-value">Top Laner</span>
                    </div>
                    <div class="info-row">
                        <span class="info-label">Valeur Marchande</span>
                        <span class="value-highlight">€720K</span>
                    </div>
                </div>
                <button class="btn btn-secondary mt-2" style="width: 100%;" onclick="showProfile('Cabochard')">Voir le Profil</button>
            </div>

            <div class="card player-card" data-search="targamas vitality team support france">
                <div class="card-header">
                    <h3 class="card-title">🎮 Targamas</h3>
                    <span class="card-badge badge-player">Support</span>
                </div>
                <div class="card-info">
                    <div class="info-row">
                        <span class="info-label">Équipe Actuelle</span>
                        <span class="info-value">Team Vitality</span>
                    </div>
                    <div class="info-row">
                        <span class="info-label">Nationalité</span>
                        <span class="info-value">🇫🇷 France</span>
                    </div>
                    <div class="info-row">
                        <span class="info-label">Rôle</span>
                        <span class="info-value">Support</span>
                    </div>
                    <div class="info-row">
                        <span class="info-label">Valeur Marchande</span>
                        <span class="value-highlight">€420K</span>
                    </div>
                </div>
                <button class="btn btn-secondary mt-2" style="width: 100%;" onclick="showProfile('Targamas')">Voir le Profil</button>
            </div>

            <div class="card player-card" data-search="elyoya mad lions jungle espagne spain">
                <div class="card-header">
                    <h3 class="card-title">🎮 Elyoya</h3>
                    <span class="card-badge badge-player">Jungle</span>
                </div>
                <div class="card-info">
                    <div class="info-row">
                        <span class="info-label">Équipe Actuelle</span>
                        <span class="info-value">MAD Lions</span>
                    </div>
                    <div class="info-row">
                        <span class="info-label">Nationalité</span>
                        <span class="info-value">🇪🇸 Espagne</span>
                    </div>
                    <div class="info-row">
                        <span class="info-label">Rôle</span>
                        <span class="info-value">Jungler</span>
                    </div>
                    <div class="info-row">
                        <span class="info-label">Valeur Marchande</span>
                        <span class="value-highlight">€580K</span>
                    </div>
                </div>
                <button class="btn btn-secondary mt-2" style="width: 100%;" onclick="showProfile('Elyoya')">Voir le Profil</button>
            </div>

            <div class="card player-card" data-search="upset fnatic fnatic adc allemagne germany">
                <div class="card-header">
                    <h3 class="card-title">🎮 Upset</h3>
                    <span class="card-badge badge-player">ADC</span>
                </div>
                <div class="card-info">
                    <div class="info-row">
                        <span class="info-label">Équipe Actuelle</span>
                        <span class="info-value">Fnatic</span>
                    </div>
                    <div class="info-row">
                        <span class="info-label">Nationalité</span>
                        <span class="info-value">🇩🇪 Allemagne</span>
                    </div>
                    <div class="info-row">
                        <span class="info-label">Rôle</span>
                        <span class="info-value">ADC</span>
                    </div>
                    <div class="info-row">
                        <span class="info-label">Valeur Marchande</span>
                        <span class="value-highlight">€750K</span>
                    </div>
                </div>
                <button class="btn btn-secondary mt-2" style="width: 100%;" onclick="showProfile('Upset')">Voir le Profil</button>
            </div>

            <div class="card player-card" data-search="humanoid fnatic mid tchèque czech">
                <div class="card-header">
                    <h3 class="card-title">🎮 Humanoid</h3>
                    <span class="card-badge badge-player">Mid</span>
                </div>
                <div class="card-info">
                    <div class="info-row">
                        <span class="info-label">Équipe Actuelle</span>
                        <span class="info-value">Fnatic</span>
                    </div>
                    <div class="info-row">
                        <span class="info-label">Nationalité</span>
                        <span class="info-value">🇨🇿 Tchéquie</span>
                    </div>
                    <div class="info-row">
                        <span class="info-label">Rôle</span>
                        <span class="info-value">Mid Laner</span>
                    </div>
                    <div class="info-row">
                        <span class="info-label">Valeur Marchande</span>
                        <span class="value-highlight">€680K</span>
                    </div>
                </div>
                <button class="btn btn-secondary mt-2" style="width: 100%;" onclick="showProfile('Humanoid')">Voir le Profil</button>
            </div>

            <div class="card player-card" data-search="hans sama rogue adc france">
                <div class="card-header">
                    <h3 class="card-title">🎮 Hans Sama</h3>
                    <span class="card-badge badge-player">ADC</span>
                </div>
                <div class="card-info">
                    <div class="info-row">
                        <span class="info-label">Équipe Actuelle</span>
                        <span class="info-value">Rogue</span>
                    </div>
                    <div class="info-row">
                        <span class="info-label">Nationalité</span>
                        <span class="info-value">🇫🇷 France</span>
                    </div>
                    <div class="info-row">
                        <span class="info-label">Rôle</span>
                        <span class="info-value">ADC</span>
                    </div>
                    <div class="info-row">
                        <span class="info-label">Valeur Marchande</span>
                        <span class="value-highlight">€620K</span>
                    </div>
                </div>
                <button class="btn btn-secondary mt-2" style="width: 100%;" onclick="showProfile('Hans Sama')">Voir le Profil</button>
            </div>
        </div>

        <div class="section-header mt-2">
            <h2>📜 Historique des Transferts Publics</h2>
        </div>

        <div class="table-container fade-in">
            <table>
                <thead>
                    <tr>
                        <th>Date</th>
                        <th>Joueur</th>
                        <th>Équipe de Départ</th>
                        <th>Équipe d'Arrivée</th>
                        <th>Montant</th>
                        <th>Statut</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>02/01/2026</td>
                        <td style="font-weight: 600;">🎮 Cinkrof</td>
                        <td>BDS</td>
                        <td style="color: var(--primary);">Karmine Corp</td>
                        <td style="color: var(--accent); font-weight: 600;">€850K</td>
                        <td><span class="status-badge status-completed">✓ Complété</span></td>
                    </tr>
                    <tr>
                        <td>28/12/2025</td>
                        <td style="font-weight: 600;">🎮 Rekkles</td>
                        <td>Fnatic</td>
                        <td style="color: var(--primary);">G2 Esports</td>
                        <td style="color: var(--accent); font-weight: 600;">€1.2M</td>
                        <td><span class="status-badge status-completed">✓ Complété</span></td>
                    </tr>
                    <tr>
                        <td>20/12/2025</td>
                        <td style="font-weight: 600;">🎮 Caps</td>
                        <td>G2 Esports</td>
                        <td style="color: var(--primary);">Team Vitality</td>
                        <td style="color: var(--accent); font-weight: 600;">€950K</td>
                        <td><span class="status-badge status-pending">⏳ En cours</span></td>
                    </tr>
                    <tr>
                        <td>10/12/2025</td>
                        <td style="font-weight: 600;">🎮 Targamas</td>
                        <td>G2 Esports</td>
                        <td style="color: var(--primary);">Team Vitality</td>
                        <td style="color: var(--accent); font-weight: 600;">€420K</td>
                        <td><span class="status-badge status-completed">✓ Complété</span></td>
                    </tr>
                    <tr>
                        <td>05/12/2025</td>
                        <td style="font-weight: 600;">🎮 Elyoya</td>
                        <td>G2 Esports</td>
                        <td style="color: var(--primary);">MAD Lions</td>
                        <td style="color: var(--accent); font-weight: 600;">€580K</td>
                        <td><span class="status-badge status-completed">✓ Complété</span></td>
                    </tr>
                    <tr>
                        <td>01/12/2025</td>
                        <td style="font-weight: 600;">🎮 Upset</td>
                        <td>Team Vitality</td>
                        <td style="color: var(--primary);">Fnatic</td>
                        <td style="color: var(--accent); font-weight: 600;">€750K</td>
                        <td><span class="status-badge status-completed">✓ Complété</span></td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="section-header mt-2">
            <h2>🏆 Équipes Principales</h2>
        </div>

        <div class="cards-grid fade-in">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">🔵 Karmine Corp</h3>
                    <span class="card-badge badge-team">LFL</span>
                </div>
                <div class="card-info">
                    <div class="info-row">
                        <span class="info-label">Région</span>
                        <span class="info-value">Europe</span>
                    </div>
                    <div class="info-row">
                        <span class="info-label">Joueurs Actifs</span>
                        <span class="info-value">12</span>
                    </div>
                    <div class="info-row">
                        <span class="info-label">Manager</span>
                        <span class="info-value">Kameto</span>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">⚫ G2 Esports</h3>
                    <span class="card-badge badge-team">LEC</span>
                </div>
                <div class="card-info">
                    <div class="info-row">
                        <span class="info-label">Région</span>
                        <span class="info-value">Europe</span>
                    </div>
                    <div class="info-row">
                        <span class="info-label">Joueurs Actifs</span>
                        <span class="info-value">15</span>
                    </div>
                    <div class="info-row">
                        <span class="info-label">Manager</span>
                        <span class="info-value">Carlos Rodriguez</span>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">🟡 Team Vitality</h3>
                    <span class="card-badge badge-team">LEC</span>
                </div>
                <div class="card-info">
                    <div class="info-row">
                        <span class="info-label">Région</span>
                        <span class="info-value">Europe</span>
                    </div>
                    <div class="info-row">
                        <span class="info-label">Joueurs Actifs</span>
                        <span class="info-value">14</span>
                    </div>
                    <div class="info-row">
                        <span class="info-label">Manager</span>
                        <span class="info-value">Fabien Devide</span>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">🟠 Fnatic</h3>
                    <span class="card-badge badge-team">LEC</span>
                </div>
                <div class="card-info">
                    <div class="info-row">
                        <span class="info-label">Région</span>
                        <span class="info-value">Europe</span>
                    </div>
                    <div class="info-row">
                        <span class="info-label">Joueurs Actifs</span>
                        <span class="info-value">13</span>
                    </div>
                    <div class="info-row">
                        <span class="info-label">Manager</span>
                        <span class="info-value">Sam Mathews</span>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">🔴 MAD Lions</h3>
                    <span class="card-badge badge-team">LEC</span>
                </div>
                <div class="card-info">
                    <div class="info-row">
                        <span class="info-label">Région</span>
                        <span class="info-value">Europe</span>
                    </div>
                    <div class="info-row">
                        <span class="info-label">Joueurs Actifs</span>
                        <span class="info-value">11</span>
                    </div>
                    <div class="info-row">
                        <span class="info-label">Manager</span>
                        <span class="info-value">Jorge Schnell</span>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">⚪ BDS</h3>
                    <span class="card-badge badge-team">LFL</span>
                </div>
                <div class="card-info">
                    <div class="info-row">
                        <span class="info-label">Région</span>
                        <span class="info-value">Europe</span>
                    </div>
                    <div class="info-row">
                        <span class="info-label">Joueurs Actifs</span>
                        <span class="info-value">10</span>
                    </div>
                    <div class="info-row">
                        <span class="info-label">Manager</span>
                        <span class="info-value">Patrice Bailo De Spoelberch</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal pour afficher le profil -->
    <div class="modal-overlay" id="profileModal">
        <div class="modal-content">
            <span class="modal-close" onclick="closeProfile()">×</span>
            <h2 id="modalTitle" style="color: var(--primary); margin-bottom: 1rem;">Profil Joueur</h2>
            <div id="modalContent" style="color: var(--light);">
                <!-- Contenu dynamique -->
            </div>
            <button class="btn btn-secondary mt-2" onclick="closeProfile()">Fermer</button>
        </div>
    </div>

    <footer style="text-align: center; padding: 2rem; color: #64748b; margin-top: 4rem;">
        <p>© 2026 APEX Management - Découvrez le monde de l'eSport professionnel</p>
    </footer>

    <script>
      
    </script>
</body>
</html>