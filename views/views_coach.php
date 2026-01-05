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
            <h2>👥 Coach</h2>
             <a href="views_equipe.php" class="btn btn-primary mt-2"> Créer </a>
            
        </div>

       <div class="table-container fade-in">
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Coach</th>
                        <th>Style de coaching</th>
                        <th>Équipe</th>
                        <th>Salaire</th>
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