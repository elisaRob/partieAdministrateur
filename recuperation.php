<?php

require ('bdd.php');
require ('header.php');


if(isset($_POST['prenom'],$_POST['nom'],$_POST['status'],$_POST['dateDeNaissance'])){
    $prenom=htmlspecialchars($_POST["prenom"]);
    $nom=htmlspecialchars($_POST['nom']);
    $status=htmlspecialchars($_POST['status']);
    $dateDeNaissance=htmlspecialchars($_POST['dateDeNaissance']);

    $bddPDO=connexionBDD();
    $requete1=$bddPDO->prepare('INSERT INTO famille_tbl(nom,prenom,statut,dateNaissance) VALUES(:nom,:prenom,:statut,:dateNaissance)');
    $requete1->bindvalue(':nom',$nom);
    $requete1->bindvalue(':prenom',$prenom);
    $requete1->bindvalue(':statut',$status);
    $requete1->bindvalue(':dateNaissance',$dateDeNaissance);
    $requete1->execute();
}



?>

<div class="containerRecuperation">
    
    <h2>Votre Nouveau Utilisateur a bien été rajouter à la base de données</h2>
    <p>pour revenir au menu : <a href="index.php">cliquez ici</a></p>

</div>


<?php
require('footer.php');




