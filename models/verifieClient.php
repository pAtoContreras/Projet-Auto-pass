<?php

require ("models/connexion.php");


    if(isset($_POST['immatriculation']) ) {
        $immatriculation = htmlspecialchars($_POST['immatriculation']);
        $immatriculation = mysqli_real_escape_string($conn, $immatriculation);
        $query = "SELECT c.role from Vehicule v, Client c where v.client_id = c.client_id and v.numero_de_plaque = '$immatriculation'";
        $result = mysqli_query($conn,$query);
    
        if (mysqli_num_rows($result) == 1) {
            $user = mysqli_fetch_assoc($result);
            if ($user['role'] == 'Client') {
                header('location: index.php?action=dashboardClient');
                $_SESSION['numero_de_plaque'] = $immatriculation;
            }
        }
        else{
        header('location: index.php?action=accueil');   
        
          
        } 
            
        
      

    
    
    }