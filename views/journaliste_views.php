<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Journaliste - Apex Management</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <nav class="navbar">
        <div class="nav-container">
            <a href="index.html" class="logo">⚡ APEX Management</a>
            <ul class="nav-links">
                <li><a href="index.html">Accueil</a></li>
                <li><a href="admin.html">Admin</a></li>
                <li><a href="journaliste.html" class="active">Journaliste</a></li>
                <li><a href="visiteur.html">Public</a></li>
            </ul>
        </div>
    </nav>

    <div class="container">
        <section class="hero fade-in">
            <h1>📊 Espace Journaliste</h1>
            <p>Accès aux données avancées et analyses du mercato eSport</p>
        </section>

        <div class="section-header">
            <h2>📈 Tableau de Bord Mercato</h2>
        </div>

        <div class="stats-grid fade-in">
            <div class="stat-card">
                <div class="stat-icon">💸</div>
                <div class="stat-value">€42M</div>
                <div class="stat-label">Valeur Totale du Marché</div>
            </div>

            <div class="stat-card">
                <div class="stat-icon">🔄</div>
                <div class="stat-value">23</div>
                <div class="stat-label">Transferts ce mois</div>
            </div>

            <div class="stat-card">
                <div class="stat-icon">📊</div>
                <div class="stat-value">€7.2M</div>
                <div class="stat-label">Volume Transferts</div>
            </div>

            <div class="stat-card">
                <div class="stat-icon">⭐</div>
                <div class="stat-value">€1.2M</div>
                <div class="stat-label">Transfert le plus élevé</div>
            </div>
        </div>

        <div class="section-header mt-2">
            <h2>🔍 Filtres Dynamiques</h2>
        </div>

        <div class="filters fade-in">
            <button class="filter-btn active" data-filter="all">Tous</button>
            <button class="filter-btn" data-filter="high">Valeur > €800K</button>
            <button class="filter-btn" data-filter="mid">€300K - €800K</button>
            <button class="filter-btn" data-filter="low">< €300K</button>
            <button class="filter-btn" data-filter="top">Top Laners</button>
            <button class="filter-btn" data-filter="jungle">Junglers</button>
            <button class="filter-btn" data-filter="mid">Mid Laners</button>
        </div>

        <div class="section-header">
            <h2>💰 Analyse des Joueurs</h2>
        </div>

        <div class="table-container fade-in">
            <table id="playersTable">
                <thead>
                    <tr>
                        <th>Joueur</th>
                        <th>Rôle</th>
                        <th>Équipe</th>
                        <th>Nationalité</th>
                        <th>Valeur Marchande</th>
                        <th>Salaire Annuel</th>
                        <th>Clause de Rachat</th>
                        <th>Coût Total Annuel</th>
                    </tr>
                </thead>
                <tbody>
                    <tr data-value="850000" data-role="jungle">
                        <td style="font-weight: 600;">🎮 Cinkrof</td>
                        <td>Jungle</td>
                        <td>Karmine Corp</td>
                        <td>🇫🇷 France</td>
                        <td style="color: var(--accent);">€850K</td>
                        <td style="color: var(--success);">€180K/an</td>
                        <td style="color: var(--warning);">€850K</td>
                        <td><strong style="color: var(--primary);">€198K</strong></td>
                    </tr>
                    <tr data-value="1200000" data-role="adc">
                        <td style="font-weight: 600;">🎮 Rekkles</td>
                        <td>ADC</td>
                        <td>G2 Esports</td>
                        <td>🇸🇪 Suède</td>
                        <td style="color: var(--accent);">€1.2M</td>
                        <td style="color: var(--success);">€250K/an</td>
                        <td style="color: var(--warning);">€1.2M</td>
                        <td><strong style="color: var(--primary);">€275K</strong></td>
                    </tr>
                    <tr data-value="950000" data-role="mid">
                        <td style="font-weight: 600;">🎮 Caps</td>
                        <td>Mid</td>
                        <td>Team Vitality</td>
                        <td>🇩🇰 Danemark</td>
                        <td style="color: var(--accent);">€950K</td>
                        <td style="color: var(--success);">€220K/an</td>
                        <td style="color: var(--warning);">€950K</td>
                        <td><strong style="color: var(--primary);">€242K</strong></td>
                    </tr>
                    <tr data-value="720000" data-role="top">
                        <td style="font-weight: 600;">🎮 Cabochard</td>
                        <td>Top</td>
                        <td>BDS</td>
                        <td>🇫🇷 France</td>
                        <td style="color: var(--accent);">€720K</td>
                        <td style="color: var(--success);">€160K/an</td>
                        <td style="color: var(--warning);">€720K</td>
                        <td><strong style="color: var(--primary);">€176K</strong></td>
                    </tr>
                    <tr data-value="420000" data-role="support">
                        <td style="font-weight: 600;">🎮 Targamas</td>
                        <td>Support</td>
                        <td>Team Vitality</td>
                        <td>🇫🇷 France</td>
                        <td style="color: var(--accent);">€420K</td>
                        <td style="color: var(--success);">€95K/an</td>
                        <td style="color: var(--warning);">€420K</td>
                        <td><strong style="color: var(--primary);">€104.5K</strong></td>
                    </tr>
                    <tr data-value="580000" data-role="jungle">
                        <td style="font-weight: 600;">🎮 Elyoya</td>
                        <td>Jungle</td>
                        <td>MAD Lions</td>
                        <td>🇪🇸 Espagne</td>
                        <td style="color: var(--accent);">€580K</td>
                        <td style="color: var(--success);">€135K/an</td>
                        <td style="color: var(--warning);">€580K</td>
                        <td><strong style="color: var(--primary);">€148.5K</strong></td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="section-header mt-2">
            <h2>⚖️ Outil de Comparaison</h2>
        </div>

        <div style="background: rgba(6, 182, 212, 0.1); border: 1px solid var(--secondary); border-radius: 10px; padding: 1rem; margin-bottom: 2rem;">
            <p style="color: var(--secondary);">💡 Sélectionnez jusqu'à 3 joueurs ou coachs pour comparer leurs coûts annuels</p>
        </div>

        <div class="comparison-container fade-in">
            <div class="comparison-card selected">
                <div class="card-header">
                    <h3 class="card-title">🎮 Cinkrof</h3>
                    <span class="card-badge badge-player">Joueur</span>
                </div>
                <div class="card-info">
                    <div class="info-row">
                        <span class="info-label">Rôle</span>
                        <span class="info-value">Jungle</span>
                    </div>
                    <div class="info-row">
                        <span class="info-label">Équipe</span>
                        <span class="info-value">Karmine Corp</span>
                    </div>
                    <div class="info-row">
                        <span class="info-label">Salaire</span>
                        <span class="info-value">€180K/an</span>
                    </div>
                    <div class="info-row">
                        <span class="info-label">Bonus Performance</span>
                        <span class="info-value">€18K</span>
                    </div>
                    <div class="info-row" style="border-top: 2px solid var(--primary); margin-top: 1rem; padding-top: 1rem;">
                        <span class="info-label" style="color: var(--accent); font-weight: 600;">Coût Total Annuel</span>
                        <span class="value-highlight">€198K</span>
                    </div>
                </div>
            </div>

            <div class="comparison-card selected">
                <div class="card-header">
                    <h3 class="card-title">🎮 Rekkles</h3>
                    <span class="card-badge badge-player">Joueur</span>
                </div>
                <div class="card-info">
                    <div class="info-row">
                        <span class="info-label">Rôle</span>
                        <span class="info-value">ADC</span>
                    </div>
                    <div class="info-row">
                        <span class="info-label">Équipe</span>
                        <span class="info-value">G2 Esports</span>
                    </div>
                    <div class="info-row">
                        <span class="info-label">Salaire</span>
                        <span class="info-value">€250K/an</span>
                    </div>
                    <div class="info-row">
                        <span class="info-label">Bonus Performance</span>
                        <span class="info-value">€25K</span>
                    </div>
                    <div class="info-row" style="border-top: 2px solid var(--primary); margin-top: 1rem; padding-top: 1rem;">
                        <span class="info-label" style="color: var(--accent); font-weight: 600;">Coût Total Annuel</span>
                        <span class="value-highlight">€275K</span>
                    </div>
                </div>
            </div>

            <div class="comparison-card selected">
                <div class="card-header">
                    <h3 class="card-title">🎯 Dylan Falco</h3>
                    <span class="card-badge badge-coach">Coach</span>
                </div>
                <div class="card-info">
                    <div class="info-row">
                        <span class="info-label">Spécialité</span>
                        <span class="info-value">Stratégique</span>
                    </div>
                    <div class="info-row">
                        <span class="info-label">Équipe</span>
                        <span class="info-value">Team Vitality</span>
                    </div>
                    <div class="info-row">
                        <span class="info-label">Salaire Fixe</span>
                        <span class="info-value">€95K/an</span>
                    </div>
                    <div class="info-row">
                        <span class="info-label">Bonus Performance</span>
                        <span class="info-value">-</span>
                    </div>
                    <div class="info-row" style="border-top: 2px solid var(--primary); margin-top: 1rem; padding-top: 1rem;">
                        <span class="info-label" style="color: var(--accent); font-weight: 600;">Coût Total Annuel</span>
                        <span class="value-highlight">€95K</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="section-header mt-2">
            <h2>📰 Flux Chronologique des Transactions</h2>
        </div>

        <div class="timeline fade-in">
            <div class="timeline-item">
                <div class="timeline-content">
                    <div class="timeline-date">02 Janvier 2026 - 14:30</div>
                    <h4 style="color: var(--light); margin-bottom: 0.5rem;">🔄 Transfert Complété</h4>
                    <p style="color: #94a3b8;">
                        <strong style="color: var(--primary);">Cinkrof</strong> a été transféré de 
                        <strong>BDS</strong> vers <strong style="color: var(--accent);">Karmine Corp</strong> 
                        pour un montant de <strong style="color: var(--success);">€850,000</strong>
                    </p>
                    <div style="margin-top: 0.5rem; color: #64748b; font-size: 0.9rem;">
                        Référence: TR-2026-001 | Clause: €850K
                    </div>
                </div>
            </div>

            <div class="timeline-item">
                <div class="timeline-content">
                    <div class="timeline-date">28 Décembre 2025 - 16:45</div>
                    <h4 style="color: var(--light); margin-bottom: 0.5rem;">🔄 Transfert Complété</h4>
                    <p style="color: #94a3b8;">
                        <strong style="color: var(--primary);">Rekkles</strong> rejoint 
                        <strong style="color: var(--accent);">G2 Esports</strong> en provenance de 
                        <strong>Fnatic</strong> pour <strong style="color: var(--success);">€1,200,000</strong>
                    </p>
                    <div style="margin-top: 0.5rem; color: #64748b; font-size: 0.9rem;">
                        Référence: TR-2025-187 | Clause: €1.2M
                    </div>
                </div>
            </div>

            <div class="timeline-item">
                <div class="timeline-content">
                    <div class="timeline-date">20 Décembre 2025 - 11:20</div>
                    <h4 style="color: var(--light); margin-bottom: 0.5rem;">⏳ Transfert en Cours</h4>
                    <p style="color: #94a3b8;">
                        <strong style="color: var(--primary);">Caps</strong> en négociation avec 
                        <strong style="color: var(--accent);">Team Vitality</strong> 
                        (Montant estimé: <strong style="color: var(--warning);">€950,000</strong>)
                    </p>
                    <div style="margin-top: 0.5rem; color: #64748b; font-size: 0.9rem;">
                        Référence: TR-2025-172 | Statut: En attente validation
                    </div>
                </div>
            </div>

            <div class="timeline-item">
                <div class="timeline-content">
                    <div class="timeline-date">15 Décembre 2025 - 09:15</div>
                    <h4 style="color: var(--light); margin-bottom: 0.5rem;">📄 Nouveau Contrat</h4>
                    <p style="color: #94a3b8;">
                        <strong style="color: var(--primary);">Dylan Falco</strong> signe un contrat de coaching avec 
                        <strong style="color: var(--accent);">Team Vitality</strong> 
                        (Salaire: <strong style="color: var(--success);">€95K/an</strong>)
                    </p>
                    <div style="margin-top: 0.5rem; color: #64748b; font-size: 0.9rem;">
                        Contrat: CNT-2025-043 | Durée: 2 ans
                    </div>
                </div>
            </div>

            <div class="timeline-item">
                <div class="timeline-content">
                    <div class="timeline-date">10 Décembre 2025 - 17:00</div>
                    <h4 style="color: var(--light); margin-bottom: 0.5rem;">🔄 Transfert Complété</h4>
                    <p style="color: #94a3b8;">
                        <strong style="color: var(--primary);">Targamas</strong> transferé vers 
                        <strong style="color: var(--accent);">Team Vitality</strong> 
                        pour <strong style="color: var(--success);">€420,000</strong>
                    </p>
                    <div style="margin-top: 0.5rem; color: #64748b; font-size: 0.9rem;">
                        Référence: TR-2025-156 | Clause: €420K
                    </div>
                </div>
            </div>
        </div>

        <div class="section-header mt-2">
            <h2>📊 Statistiques par Équipe</h2>
        </div>

        <div class="cards-grid fade-in">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">🔵 Karmine Corp</h3>
                    <span class="card-badge badge-team">Elite</span>
                </div>
                <div class="card-info">
                    <div class="info-row">
                        <span class="info-label">Budget Restant</span>
                        <span class="info-value">€7.6M / €8.5M</span>
                    </div>
                    <div class="info-row">
                        <span class="info-label">Dépenses Transferts</span>
                        <span class="info-value">€2.8M</span>
                    </div>
                    <div class="info-row">
                        <span class="info-label">Mass Salariale</span>
                        <span class="info-value">€1.2M/an</span>
                    </div>
                    <div class="info-row">
                        <span class="info-label">Joueurs</span>
                        <span class="info-value">12</span>
                    </div>
                    <div class="info-row">
                        <span class="info-label">Valeur Moyenne</span>
                        <span class="value-highlight">€650K</span>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">⚫ G2 Esports</h3>
                    <span class="card-badge badge-team">Elite</span>
                </div>
                <div class="card-info">
                    <div class="info-row">
                        <span class="info-label">Budget Restant</span>
                        <span class="info-value">€9.5M / €12M</span>
                    </div>
                    <div class="info-row">
                        <span class="info-label">Dépenses Transferts</span>
                        <span class="info-value">€4.2M</span>
                    </div>
                    <div class="info-row">
                        <span class="info-label">Mass Salariale</span>
                        <span class="info-value">€1.8M/an</span>
                    </div>
                    <div class="info-row">
                        <span class="info-label">Joueurs</span>
                        <span class="info-value">15</span>
                    </div>
                    <div class="info-row">
                        <span class="info-label">Valeur Moyenne</span>
                        <span class="value-highlight">€780K</span>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">🟡 Team Vitality</h3>
                    <span class="card-badge badge-team">Elite</span>
                </div>
                <div class="card-info">
                    <div class="info-row">
                        <span class="info-label">Budget Restant</span>
                        <span class="info-value">€7.8M / €10M</span>
                    </div>
                    <div class="info-row">
                        <span class="info-label">Dépenses Transferts</span>
                        <span class="info-value">€3.5M</span>
                    </div>
                    <div class="info-row">
                        <span class="info-label">Mass Salariale</span>
                        <span class="info-value">€1.5M/an</span>
                    </div>
                    <div class="info-row">
                        <span class="info-label">Joueurs</span>
                        <span class="info-value">14</span>
                    </div>
                    <div class="info-row">
                        <span class="info-label">Valeur Moyenne</span>
                        <span class="value-highlight">€720K</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
       
    </script>
</body>
</html>