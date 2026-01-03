
<?php
require_once ('../header.php');
?>
    <div class="container">
         <div class="section-header mt-2">
            <h2>Ajouter un Équipes</h2>
        </div>

        <div class="form-container fade-in">
            <form id="teamForm">
                <div class="form-grid">
                    <div class="form-group">
                        <label for="teamName">Nom de l'équipe *</label>
                        <input type="text" id="teamName" placeholder="Ex: Karmine Corp" required>
                    </div>

                    <div class="form-group">
                        <label for="teamBudget">Budget (€) *</label>
                        <input type="number" id="teamBudget" placeholder="Ex: 5000000" required>
                    </div>

                    <div class="form-group">
                        <label for="teamManager">Manager *</label>
                        <input type="text" id="teamManager" placeholder="Ex: Kameto" required>
                    </div>

                    <div class="form-group">
                        <label for="teamRegion">Région *</label>
                        <select id="teamRegion" required>
                            <option value="">Sélectionner...</option>
                            <option value="EU">Europe</option>
                            <option value="NA">Amérique du Nord</option>
                            <option value="KR">Corée</option>
                            <option value="CN">Chine</option>
                        </select>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary mt-2">✅ Créer l'Équipe</button>
            </form>
        </div>
                      
   </div>            

  <?php
require_once ('../footer.php');
?>