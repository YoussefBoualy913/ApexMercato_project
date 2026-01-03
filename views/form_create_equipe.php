
<?php
require_once ('../header.php');
?>
    <div class="container">
         <div class="section-header mt-2">
            <h2>Ajouter un Équipes</h2>
        </div>

        <div class="form-container fade-in">
            <form id="teamForm" action="../actions/add_equipe.php" method="POST">
                <div class="form-grid">
                    <div class="form-group">
                        <label for="teamName">Nom de l'équipe *</label>
                        <input type="text" id="teamName" name="Nom" placeholder="Ex: Karmine Corp" >
                    </div>

                    <div class="form-group">
                        <label for="teamBudget">Budget (€) *</label>
                        <input type="number" id="teamBudget" name="Budget" placeholder="Ex: 5000000" >
                    </div>

                    <div class="form-group">
                        <label for="teamManager">Manager *</label>
                        <input type="text" id="teamManager" name="Manager" placeholder="Ex: Kameto" >
                    </div>

                   
                </div>

                <button type="submit" name="submit" class="btn btn-primary mt-2">✅ Créer l'Équipe</button>
            </form>
        </div>
                      
   </div>            

  <?php
require_once ('../footer.php');
?>