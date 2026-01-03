
<?php
require_once ('../header.php');
?>
    <div class="container">
        <div class="section-header mt-2">
            <h2>➕ Ajouter un Joueur</h2>
        </div>

        <div class="form-container fade-in">
            <form id="playerForm">
                <div class="form-grid">
                    <div class="form-group">
                        <label for="playerName">Nom complet *</label>
                        <input type="text" id="playerName" placeholder="Ex: Martin Larsson" required>
                    </div>

                    <div class="form-group">
                        <label for="playerPseudo">Pseudo *</label>
                        <input type="text" id="playerPseudo" placeholder="Ex: Rekkles" required>
                    </div>

                    <div class="form-group">
                        <label for="playerEmail">Email *</label>
                        <input type="email" id="playerEmail" placeholder="player@example.com" required>
                    </div>

                    <div class="form-group">
                        <label for="playerNationality">Nationalité *</label>
                        <select id="playerNationality" required>
                            <option value="">Sélectionner...</option>
                            <option value="FR">🇫🇷 France</option>
                            <option value="SE">🇸🇪 Suède</option>
                            <option value="DK">🇩🇰 Danemark</option>
                            <option value="DE">🇩🇪 Allemagne</option>
                            <option value="ES">🇪🇸 Espagne</option>
                            <option value="KR">🇰🇷 Corée du Sud</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="playerRole">Rôle *</label>
                        <select id="playerRole" required>
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
                        <input type="number" id="playerValue" placeholder="Ex: 500000" required>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary mt-2">✅ Créer le Joueur</button>
            </form>
        </div>            
       
    </div>
<?php
require_once ('../footer.php');
?>