
<?php
session_start() ;
if ($_SESSION['username'] !=="admin" && $_SESSION['password'] !=="admin"){

            header('location:login.php');
            exit;
    }
require_once ('../header.php');
?>
    <div class="container">
        <div class="section-header mt-2">
            <h2>➕ Ajouter un Coach</h2>
        </div>
        <div class="form-container fade-in">
            <form id="coachForm">
                <div class="form-grid">
                    <div class="form-group">
                        <label for="coachName">Nom complet *</label>
                        <input type="text" id="coachName" placeholder="Ex: Dylan Falco" required>
                    </div>

                    <div class="form-group">
                        <label for="coachEmail">Email *</label>
                        <input type="email" id="coachEmail" placeholder="coach@example.com" required>
                    </div>

                    <div class="form-group">
                        <label for="coachNationality">Nationalité *</label>
                        <select id="coachNationality" required>
                            <option value="">Sélectionner...</option>
                            <option value="FR">🇫🇷 France</option>
                            <option value="US">🇺🇸 USA</option>
                            <option value="KR">🇰🇷 Corée du Sud</option>
                            <option value="CN">🇨🇳 Chine</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="coachStyle">Style de Coaching *</label>
                        <select id="coachStyle" required>
                            <option value="">Sélectionner...</option>
                            <option value="Agressif">Agressif</option>
                            <option value="Stratégique">Stratégique</option>
                            <option value="Mental">Mental Coach</option>
                            <option value="Analytique">Analytique</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="coachExperience">Années d'expérience *</label>
                        <input type="number" id="coachExperience" placeholder="Ex: 5" min="0" required>
                    </div>

                    <div class="form-group">
                        <label for="coachSalary">Salaire Annuel (€) *</label>
                        <input type="number" id="coachSalary" placeholder="Ex: 80000" required>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary mt-2">✅ Créer le Coach</button>
            </form>
        </div>
       
       
    </div>

  <?php
require_once ('../footer.php');
?>