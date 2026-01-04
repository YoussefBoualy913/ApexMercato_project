
<?php
 session_start() ;
if ($_SESSION['username'] !=="admin" && $_SESSION['password'] !=="admin"){

            header('location:login.php');
            exit;
    }

require_once ('../header.php');
?>

    <div class="container">
        <section class="hero fade-in">
            <h1>🔑 Dashboard Administrateur</h1>
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
            <h2>📄 Création de Contrat</h2>
        </div>

        <div class="form-container fade-in">
            <form id="contractForm">
                <div class="form-grid">
                    <div class="form-group">
                        <label for="contractPlayer">Joueur / Coach *</label>
                        <select id="contractPlayer" required>
                            <option value="">Sélectionner...</option>
                            <option value="Cinkrof">🎮 Cinkrof (Joueur)</option>
                            <option value="Rekkles">🎮 Rekkles (Joueur)</option>
                            <option value="Caps">🎮 Caps (Joueur)</option>
                            <option value="Dylan">🎯 Dylan Falco (Coach)</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="contractTeam">Équipe *</label>
                        <select id="contractTeam" required>
                            <option value="">Sélectionner...</option>
                            <option value="KC">Karmine Corp</option>
                            <option value="G2">G2 Esports</option>
                            <option value="VIT">Team Vitality</option>
                            <option value="FNC">Fnatic</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="contractSalary">Salaire Annuel (€) *</label>
                        <input type="number" id="contractSalary" placeholder="Ex: 150000" required>
                    </div>

                    <div class="form-group">
                        <label for="contractClause">Clause de Rachat (€) *</label>
                        <input type="number" id="contractClause" placeholder="Ex: 500000" required>
                    </div>

                    <div class="form-group">
                        <label for="contractStart">Date de Début *</label>
                        <input type="date" id="contractStart" required>
                    </div>

                    <div class="form-group">
                        <label for="contractEnd">Date de Fin *</label>
                        <input type="date" id="contractEnd" required>
                    </div>
                </div>

                <div class="form-group mt-2">
                    <label for="contractNotes">Notes additionnelles</label>
                    <textarea id="contractNotes" rows="3" placeholder="Conditions spéciales, bonus de performance..."></textarea>
                </div>

                <button type="submit" class="btn btn-primary mt-2">✅ Générer le Contrat</button>
            </form>
        </div>

        <div class="section-header mt-2">
            <h2>💸 Exécution de Transfert</h2>
        </div>

        <div class="form-container fade-in">
            <div style="background: rgba(249, 115, 22, 0.1); border: 1px solid var(--accent); border-radius: 10px; padding: 1rem; margin-bottom: 2rem;">
                <p style="color: var(--accent); font-weight: 600;">⚠️ Attention: Les transferts sont des transactions financières irréversibles</p>
            </div>

            <form id="transferForm">
                <div class="form-grid">
                    <div class="form-group">
                        <label for="transferPlayer">Joueur à Transférer *</label>
                        <select id="transferPlayer" required>
                            <option value="">Sélectionner...</option>
                            <option value="Cinkrof">🎮 Cinkrof (BDS) - €850K</option>
                            <option value="Targamas">🎮 Targamas (Vitality) - €420K</option>
                            <option value="Upset">🎮 Upset (Fnatic) - €750K</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="transferFrom">Équipe Actuelle</label>
                        <input type="text" id="transferFrom" value="BDS" readonly style="background: rgba(30, 41, 59, 0.5);">
                    </div>

                    <div class="form-group">
                        <label for="transferTo">Équipe de Destination *</label>
                        <select id="transferTo" required>
                            <option value="">Sélectionner...</option>
                            <option value="KC">Karmine Corp (Budget: €8.5M)</option>
                            <option value="G2">G2 Esports (Budget: €12M)</option>
                            <option value="VIT">Team Vitality (Budget: €10M)</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="transferAmount">Montant du Transfert (€) *</label>
                        <input type="number" id="transferAmount" placeholder="Ex: 850000" required>
                    </div>

                    <div class="form-group">
                        <label for="transferDate">Date du Transfert *</label>
                        <input type="date" id="transferDate" required>
                    </div>

                    <div class="form-group">
                        <label for="transferRef">Référence Unique</label>
                        <input type="text" id="transferRef" value="TR-2026-001" readonly style="background: rgba(30, 41, 59, 0.5);">
                    </div>
                </div>

                <div class="mt-2" style="background: rgba(30, 41, 59, 0.5); padding: 1.5rem; border-radius: 10px; border: 1px solid rgba(139, 92, 246, 0.3);">
                    <h3 style="margin-bottom: 1rem; color: var(--primary);">💰 Calcul Financier</h3>
                    <div class="info-row">
                        <span class="info-label">Montant du Transfert</span>
                        <span class="info-value">€850,000</span>
                    </div>
                    <div class="info-row">
                        <span class="info-label">Taxes (10%)</span>
                        <span class="info-value">€85,000</span>
                    </div>
                    <div class="info-row">
                        <span class="info-label">Commission Agent (5%)</span>
                        <span class="info-value">€42,500</span>
                    </div>
                    <div class="info-row" style="border-top: 2px solid var(--primary); margin-top: 1rem; padding-top: 1rem;">
                        <span class="info-label" style="font-size: 1.1rem; color: var(--accent);">TOTAL</span>
                        <span class="value-highlight">€977,500</span>
                    </div>
                    <div style="margin-top: 1rem; padding: 1rem; background: rgba(16, 185, 129, 0.1); border-radius: 8px; border: 1px solid var(--success);">
                        <p style="color: var(--success); font-weight: 600;">✓ Budget Karmine Corp suffisant (€8.5M disponibles)</p>
                    </div>
                </div>

                <div class="flex gap-1 mt-2">
                    <button type="submit" class="btn btn-success" style="flex: 1;">✅ Exécuter le Transfert</button>
                    <button type="button" class="btn btn-danger" style="flex: 1;">❌ Annuler</button>
                </div>
            </form>
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
require_once ('../footer.php');
?>