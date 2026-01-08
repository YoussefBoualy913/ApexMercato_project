
<?php

require "../../Classes/Roaster.php";
$players = new Roaster();
$total=$players->count();
Afficher plus
message.txt
7 Ko
﻿
Abdel
qadeemwaghashim
AM

 
 
 
<?php

require "../../Classes/Roaster.php";
$players = new Roaster();
$total=$players->count();

$currentpage = isset($_GET['page']) ? $_GET['page'] : 1;

$results = $players->displayBypage($currentpage);

$nextpage = $currentpage+1;
$prevpage = $currentpage-1;

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Team Roster</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-slate-950 text-slate-100 min-h-screen p-6">

  <!-- Header -->
  <div class="max-w-7xl mx-auto mb-6">
    <h1 class="text-3xl font-bold text-emerald-400">Team Roster</h1>
    <p class="text-slate-400 mt-1">
      All active contracts (Players & Coaches)
    </p>
  </div>

  <!-- Controls -->
  <div class="max-w-7xl mx-auto mb-4 flex flex-wrap gap-4 justify-between items-center">

    <!-- Team Select -->
    <select
      class="bg-slate-900 border border-slate-700 rounded-lg px-4 py-2 text-slate-100 focus:ring-2 focus:ring-emerald-500">
      <option>Select Team</option>
      <option>Team Apex</option>
      <option>Team Phoenix</option>
      <option>Team Nexus</option>
    </select>

    <!-- Buttons -->
    <div class="flex gap-2">
      <a href="../player/add_player.php"
        class="px-4 py-2 bg-emerald-600 hover:bg-emerald-700 rounded-lg text-sm font-medium transition">
        + Contract Player
      </a>

      <a href="../coach/add_coach.php"
        class="px-4 py-2 bg-indigo-600 hover:bg-indigo-700 rounded-lg text-sm font-medium transition">
        + Contract Coach
      </a>
    </div>

  </div>

  <!-- Roster Table -->
  <div class="max-w-7xl mx-auto bg-slate-900 rounded-xl shadow-lg overflow-hidden">
    <table class="w-full text-sm">
      <thead class="bg-slate-800/60">
        <tr>
          <th class="px-6 py-4 text-left uppercase text-slate-400">Name</th>
          <th class="px-6 py-4 text-left uppercase text-slate-400">Type</th>
          <th class="px-6 py-4 text-left uppercase text-slate-400">Role</th>
          <th class="px-6 py-4 text-left uppercase text-slate-400">Pseudo</th>
          <th class="px-6 py-4 text-left uppercase text-slate-400">Salary</th>
          <th class="px-6 py-4 text-left uppercase text-slate-400">Contract End</th>
          <th class="px-6 py-4 text-center uppercase text-slate-400">Status</th>
          <th class="px-6 py-4 text-center uppercase text-slate-400">Actions</th>
        </tr>
      </thead>

      <tbody class="divide-y divide-slate-800">

        <!-- Player Contract -->

        <?php foreach ($results as $player) { ?>
          <tr class="hover:bg-slate-800/40 transition">
            <td class="px-6 py-4">
              <p class="font-medium"><?= $player['nom_J']  ?></p>
              <p class="text-xs text-slate-500"><?= $player['email_J']  ?></p>
            </td>

            <td class="px-6 py-4">
              <span class="px-2 py-1 text-xs rounded-full bg-emerald-600/20 text-emerald-400">
                Player
              </span>
            </td>

            <td class="px-6 py-4 text-slate-300"><?= $player['role_J']  ?></td>
            <td class="px-6 py-4 text-slate-300"><?= $player['pseudo_J']  ?></td>
            <td class="px-6 py-4 font-semibold text-emerald-400"><?= $player['salaire']  ?></td>
            <td class="px-6 py-4 text-slate-300"><?= $player['date_fin']  ?></td>

            <td class="px-6 py-4 text-center">
              <span class="px-2 py-1 text-xs rounded-full bg-green-600/20 text-green-400">
                Active
              </span>
            </td>

            <td class="px-6 py-4 text-center space-x-2">
              <a href="#"
                class="px-3 py-1 rounded-md bg-blue-600/20 text-blue-400 hover:bg-blue-600/30">
                Edit
              </a>
              <a href="#"
                class="px-3 py-1 rounded-md bg-red-600/20 text-red-400 hover:bg-red-600/30">
                End
              </a>
            </td>
          </tr>
        <?php } ?>


        <!-- Coach Contract -->
        <!-- <tr class="hover:bg-slate-800/40 transition">
          <td class="px-6 py-4">
            <p class="font-medium">Youssef Amrani</p>
            <p class="text-xs text-slate-500">coach@mail.com</p>
          </td>

          <td class="px-6 py-4">
            <span class="px-2 py-1 text-xs rounded-full bg-indigo-600/20 text-indigo-400">
              Coach
            </span>
          </td>

          <td class="px-6 py-4 text-slate-300">Head Coach</td>
          <td class="px-6 py-4 text-slate-400">—</td>
          <td class="px-6 py-4 font-semibold text-emerald-400">$6,800</td>
          <td class="px-6 py-4 text-slate-300">2025-12-01</td>

          <td class="px-6 py-4 text-center">
            <span class="px-2 py-1 text-xs rounded-full bg-green-600/20 text-green-400">
              Active
            </span>
          </td>

          <td class="px-6 py-4 text-center space-x-2">
            <a href="#"
              class="px-3 py-1 rounded-md bg-blue-600/20 text-blue-400 hover:bg-blue-600/30">
              Edit
            </a>
            <a href="#"
              class="px-3 py-1 rounded-md bg-red-600/20 text-red-400 hover:bg-red-600/30">
              End
            </a>
          </td>
        </tr> -->

      </tbody>
    </table>
  </div>
  <!-- Pagination -->
  <div class="max-w-7xl mx-auto mt-6 flex justify-between items-center">

    <!-- Previous -->
    <a href="?page=<?= $prevpage ?>"
      class="px-4 py-2 rounded-lg bg-slate-800 text-slate-300 hover:bg-slate-700 transition <?= $currentpage == 1 ? "pointer-events-none":"" ?>"
      
      >
      ← Previous
    </a>

    <!-- Page info -->
    <span class="text-sm text-slate-400">
      Page <span class="text-slate-200 font-medium"><?= $currentpage ?></span>
    </span>

    <!-- Next -->
    <a href="?page=<?= $nextpage ?>"
      class="px-4 py-2 rounded-lg bg-slate-800 text-slate-300 hover:bg-slate-700 transition">
      Next →
    </a> 

  </div>



</body>

</html>
message.txt
7 Ko