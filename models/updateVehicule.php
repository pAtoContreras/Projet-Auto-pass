<?php

require ("models/connexion.php");



if (isset($_POST['km_entretien']) && $_POST['date_entretien'] && $_POST['details_maintenance']) {
    $km_entretien = htmlspecialchars($_POST['km_entretien']);
    $date_entretien = htmlspecialchars($_POST['date_entretien']);
    $details_maintenance = htmlspecialchars($_POST['details_maintenance']);
    
    if(isset($_POST['MettreAjour'])){
        $immatriculation = $_SESSION['numero_de_plaque'];

        $ajoutDb = "Update vehicule set km_entretien = '$km_entretien', date_entretien = '$date_entretien', details_maintenance = '$details_maintenance' WHERE numero_de_plaque='$immatriculation'";
        $resultat_ajout = mysqli_query($conn, $ajoutDb);
        header('location: index.php?action=updateValid');
    }
    
        
     
}