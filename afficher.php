<?php

require_once('bdd.php');
require_once ('header.php');

$bddPDO=connexionBDD();
$selectionerToutesLesPersonnes="SELECT * FROM famille_tbl";
$requete=$bddPDO->prepare($selectionerToutesLesPersonnes);
$requete->execute();

$recuperationDesUtilisateurs=$requete->fetchAll(PDO::FETCH_ASSOC);

?>
<div class="containerPageAfficher">
    <h2>Liste des personnes de la famille</h2>
    <p>pour revenir au menu : <a href="index.php">cliquez ici</a></p>
<table>
        <thead>
            <th>id</th>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Statut</th>
            <th>Date de Naissance</th>
        </thead>
        <tbody>
  
<?php
if($recuperationDesUtilisateurs){
    foreach($recuperationDesUtilisateurs as $recuperationUnUtilisateur){
        ?>
        <tr>
            <td><?=$recuperationUnUtilisateur['id']?></td>
            <td><?=$recuperationUnUtilisateur['nom']?></td>
            <td><?=$recuperationUnUtilisateur['prenom']?></td>
            <td><?=$recuperationUnUtilisateur['statut']?></td>
            <td><?=$recuperationUnUtilisateur['dateNaissance']?></td>
            <td><a href='afficherModifier.php?id=<?=$recuperationUnUtilisateur['id']?>'>Modifier</a></td>
            <td><a class='supprimer' href="supprimerUtilisateur.php?id=<?=$recuperationUnUtilisateur['id']?>">Supprimer</a></td>
        </tr>

        <?php
    }
    

    ?>


    </tbody>
    </table>

    <?php
}?>
</div>


<?php
require_once('footer.php');
?>

<script>
    
    const elSupprimer=document.querySelectorAll('.supprimer');

    elSupprimer.forEach((element)=>{
        element.addEventListener('click',(e)=>{
            e.preventDefault();
            
            const confirmation = confirm("Êtes-vous sûr de vouloir supprimer cet utilisateur ?");

            if (confirmation) {
                // L'utilisateur a confirmé la suppression, redirigez vers la page de suppression
                window.location.href = element.getAttribute('href');
            } else {
                // L'utilisateur a annulé la suppression, ne faites rien
            }
        })
    })
</script>



   