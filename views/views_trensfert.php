<?php
session_start();
if ($_SESSION['username'] !== "admin" && $_SESSION['password'] !== "admin") {

    header('location:login.php');
    exit;
}

require_once('../header.php');
require_once('../Repository/RepositoryTransfert.php');


$repoTransfert = new  RepositoryTransfert();
$result = $repoTransfert ->getAll();
?>
<div class="container">
    <div class="section-header mt-2">
        <h2>💰🔁 Tranferts</h2>
    </div>

    <div class="table-container fade-in">
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nom</th>
                    <th>Equipe de departe</th>
                    <th>Equpe d'arrivée</th>
                    <th>Montant</th>
                    <th>Statut</th>
                    <th>transfert code</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($result as $item) {?>
                  
                    <tr>
                        <td style='color: #64748b;'><?=$item['id']  ?></td>
                        <td><?=$item['Nom']  ?></td>
                        <td><span class='card-badge badge-player'><?=$item['equipedeparte']  ?></span></td>
                        <td><span class='card-badge badge-coach'><?=$item['equipearrivee']  ?></span></td>
                        <td style='color: var(--success);'>€<?=$item['Montant']  ?>K/an</td>
                        <td style='color: <?php if($item['Statut'] == "Completed"){echo "var(--success)";}else{echo "var(--accent)";}?>;'>
                            <?php if($item['Statut'] == "Pending"){echo "⏳";} echo $item['Statut']  ?></td>
                        <td><?=$item['transfert_code']  ?></td>
                     
                        <td>
                            <a href='#' class='btn btn-secondary' style='padding: 0.4rem 0.8rem; font-size: 0.85rem;'>✏️ Modifier</a>
                            <a href='#' class='btn btn-secondary' style='padding: 0.4rem 0.8rem; font-size: 0.85rem;'>✏️ supprimer</a>
                        </td>
                    </tr>
                <?php }?>
            </tbody>
        </table>
    </div>


</div>

<?php
require_once('../footer.php');
?>