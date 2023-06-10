<?php
    require('header.php');
?>

<div class="containerFormulaireInscription">
    <!-- <h1 class='h1FormulaireAjoutUtilisateur'>Rajoutez un utilisateur à votre base de données</h1> -->

    <form action="recuperation.php" method='POST'>
        <h2>Nouvelle Utilisateur</h2>
        <label for="nom">Nom</label>
        <input type="text" id='nom' name='nom'>

        <label for="prenom">Prénom</label>
        <input type="text" id="prenom" name='prenom'>

        <label for="status">Status</label>
        <input type="status" name="status">

        <label for="dateDeNaissance">Date de Naissance</label>
        <input type="text" id='dateDeNaissance' name='dateDeNaissance'>

        <button type="submit">Inscription</button>
        <p>pour revenir au menu : <a href="index.php">cliquez ici</a></p>
    </form>
   
</div>

<?php
    require('footer.php')
?>

