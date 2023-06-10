<?php

require('header.php');
require('bdd.php');

$bddPDO=connexionBdd(); 

if(isset($_POST['id'])){
    $id=htmlspecialchars($_POST['id']);
    $nom=htmlspecialchars($_POST['nom']);
    $prenom=htmlspecialchars($_POST['prenom']);
    $statut=htmlspecialchars($_POST['statut']);
    $dateDeNaissance=htmlspecialchars($_POST['dateDeNaissance']);

    $modificationRequete='UPDATE famille_tbl SET nom=:nom , prenom=:prenom , statut=:statut, 
    dateNaissance=:dateDeNaissance WHERE id=:id';

    $requete=$bddPDO->prepare($modificationRequete);
    $requete->bindvalue('id',$id);
    $requete->bindvalue('nom',$nom);
    $requete->bindvalue('prenom',$prenom);
    $requete->bindvalue('statut',$statut);
    $requete->bindvalue('dateDeNaissance',$dateDeNaissance);

    $requete->execute();
}

?>

<div class="containerRecuperationModifierUnePersonne">
    <h2>Votre personne a bien été modifiée</h2>
    <p>pour revenir au menu : <a href="index.php">cliquez ici</a></p>
</div>