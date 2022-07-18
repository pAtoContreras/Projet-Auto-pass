<?php

require ("models/connexion.php");


    if(isset($_POST['immatriculation']) && isset($_POST['mdp_client'])) {
        $immatriculation = htmlspecialchars($_POST['immatriculation']);
        $immatriculation = mysqli_real_escape_string($conn, $immatriculation);
        $mdp_util = htmlspecialchars($_POST['mdp_client']);
        $mdp_util = mysqli_real_escape_string($conn, $mdp_util);
        $query = "SELECT c.role from Vehicule v, Client c where v.client_id = c.client_id and v.numero_de_plaque = '$immatriculation' and c.mot_de_passe = '$mdp_util'";
        $result = mysqli_query($conn,$query);
    
        if (mysqli_num_rows($result) == 1) {
            $user = mysqli_fetch_assoc($result);
            if ($user['role'] == 'Client') {
                header('location: index.php?action=dashboardClient');
                $_SESSION['numero_de_plaque'] = $immatriculation;
            }
        }
        else{
            
            header('location: index.php?action=authenClient');
          
        } 
            
        
      

    
    
    }
