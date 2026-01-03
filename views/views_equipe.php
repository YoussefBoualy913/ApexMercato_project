
<?php
require_once ('../header.php');
?>
    <div class="container">
        <div class="section-header mt-2">
            <h2>🏢  Équipes</h2>
             <a href="form_create_equipe.php" class="btn btn-primary mt-2"> Créer </a>
            
        </div>

       <div class="table-container fade-in">
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Équipe</th>
                        <th>Coach</th>
                        <th>nombre de joueurs</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td style="color: #64748b;">#CNT-2025-089</td>
                        <td>🎮 Cinkrof</td>
                        <td><span class="card-badge badge-player">ahmed</span></td>
                        <td>30</td>
                        <td>
                            <a class="btn btn-secondary" style="padding: 0.4rem 0.8rem; font-size: 0.85rem;">✏️ Modifier</a>
                            <a class="btn btn-secondary" style="padding: 0.4rem 0.8rem; font-size: 0.85rem;">✏️ supprimer</a>
                        </td>
                    </tr>
                   
                   
                </tbody>
            </table>
        </div>
                        
       
    </div>
<?php
require_once ('../footer.php');
?>
  