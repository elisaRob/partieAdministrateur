<?php

require('header.php');
require('bdd.php');

if(isset($_GET['id'])){
    $id=$_GET['id'];
    
    $bddPDO=connexionBDD();

    $requeteSupprimerUtilisateur='DELETE FROM famille_tbl WHERE id=:id';
    $requete=$bddPDO->prepare($requeteSupprimerUtilisateur);
    $requete->bindvalue(':id',$id);
    $requete->execute();
}
?>

<div class="containerSuppressionDeUtilisateur">
    <h2>Votre personne a bien été supprimer</h2>
    <p>pour revenir au menu : <a href="index.php">cliquez ici</a></p>
</div>


<?php
require_once('footer.php');