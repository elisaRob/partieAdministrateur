<?php

require_once('bdd.php');
require_once('header.php');

$bddPDO=connexionBDD();

if(isset($_GET['id'])){
    $id=$_GET['id'];

    // $selectionnerUnePersonne="SELECT * FROM famille_tbl WHERE id=:id ";
    // $requete=$bddPDO->prepare($selectionnerUnePersonne);
    // $requete->bindvalue(':id',$id,PDO::PARAM_INT);

    $selectionnerUnePersonne="SELECT * FROM famille_tbl WHERE id=:id";
    $requete=$bddPDO->prepare($selectionnerUnePersonne);
    $requete->bindvalue(':id',$id);
    $requete->execute();

    $personne=$requete->fetch(PDO::FETCH_ASSOC);

    if($personne){
        ?>
        <div class="containerPageModifierUnePersonne">
      
            <form action="recuperationModifierPerdonne.php" method='POST'>
                <h2>Modifier la personne</h2>
                <input type="hidden" name='id' value='<?=$personne['id']?>'>
                <label for="nom">Nom</label>
                <input type="text" id='nom' name='nom' value='<?=$personne['nom']?>'>
                <label for="prenom">Prénom</label>
                <input type="text" id="prenom" name='prenom' value='<?=$personne['prenom']?>'>
                <label for="statut">Statut</label>
                <input type="text" id='statut' name='statut' value='<?php echo $personne['statut']?>'>
                <label for="dateDeNaissance">Date de Naissance</label>
                <input type="text" id='dateDeNaissance' name='dateDeNaissance' value='<?=$personne['dateNaissance']?>'>

                <button type=submit>Changez les valeurs</button>
                <p>pour revenir au menu : <a href="index.php">cliquez ici</a></p>
            </form>
        </div>
      

        <?php
    }

}



