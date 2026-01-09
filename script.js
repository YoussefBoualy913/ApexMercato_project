function validationEquipe(e){
   const form = document.getElementById('EquipeForm');

       const  teamName= document.getElementById('teamName');
       const  teamBudget= document.getElementById('teamBudget');
       const teamManager = document.getElementById('teamBudget');
       if (teamName.value.trim() =="" ){
           e.preventDefault();

       }

        if (teamBudget.value.trim() =="" ){
           e.preventDefault();

       }
        if (teamManager.value.trim() =="" ){
           e.preventDefault();

       }
    
}

function validationPlayer(e){
   const form = document.getElementById('playerForm');

       const  playerName= document.getElementById('playerName');
       const  playerPseudo= document.getElementById('playerPseudo');
       const playerEmail = document.getElementById('playerEmail');
       const Nationalité = document.getElementById('Nationalité');
       const playerRole = document.getElementById('playerRole');
       const playerValue = document.getElementById('playerValue');

       if (playerName.value.trim() =="" ){
           e.preventDefault();

       }

        if (playerPseudo.value.trim() =="" ){
           e.preventDefault();

       }
        if (playerEmail.value.trim() =="" ){
           e.preventDefault();

       }
        if (Nationalité.value.trim() =="" ){
           e.preventDefault();

       }

        if (playerRole.value.trim() =="" ){
           e.preventDefault();

       }
        if (playerValue.value.trim() =="" ){
           e.preventDefault();

       }
    
}

function validationContrat(e){
   const form = document.getElementById('contractForm');

       const  contractSalary= document.getElementById('contractSalary');
       const  contractClause= document.getElementById('contractClause');
       const contractEnd = document.getElementById('contractEnd');
       if (contractSalary.value.trim() =="" ){
           e.preventDefault();

       }

        if (contractClause.value.trim() =="" ){
           e.preventDefault();

       }
        if (contractEnd.value.trim() =="" ){
           e.preventDefault();

       }
    
}
