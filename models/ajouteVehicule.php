<?php

require ("models/connexion.php");



if (isset($_POST['numero_chassis']) && $_POST['kilometrage'] && $_POST['modelo'] && $_POST['marque']  && $_POST['carburant'] && $_POST['date_circulation_debut'] && $_POST['maitenance_vehicule'] ) {
    $chassis = htmlspecialchars($_POST['numero_chassis']);
    $modelo = htmlspecialchars($_POST['modelo']);
    $marque = htmlspecialchars($_POST['marque']);
    $kilometrage = htmlspecialchars($_POST['kilometrage']);
    $carburant = htmlspecialchars($_POST['carburant']);
    $dateCirculation = htmlspecialchars($_POST['date_circulation_debut']);
    $dateCirculation = date('y-m-d H:i:s', $date);
    $etatVehicule = htmlspecialchars($_POST['maitenance_vehicule']);
    $marques = htmlspecialchars($_POST['nom_marque']);

    if(isset($_POST['enregistrer'])){
        $immatriculation = $_SESSION['numero_de_plaque'];

        $ajoutDb = "Update vehicule set numero_chassis = '$chassis', kilometrage = '$kilometrage', carburant='$carburant', modelo='$modelo', marque='$marque', date_circulation_debut='$dateCirculation', maitenance_vehicule='$etatVehicule' WHERE numero_de_plaque='$immatriculation'";
        $resultat_ajout = mysqli_query($conn, $ajoutDb);
        
       
        header('location: index.php?action=validVehicule');
     
     
        
        
    }
    
        
     
}
