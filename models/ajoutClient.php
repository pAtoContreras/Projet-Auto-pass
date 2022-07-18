<?php

require ("models/connexion.php");
require "phpqrcode/qrlib.php";    



if (isset($_POST['nom_client']) && $_POST['prenom_client'] && $_POST['adresse_client'] && $_POST['immatriculation'] && $_POST['mdp_client'] && $_POST['telephone'] && $_POST['confirmer_mdp']) {
    $nom_client = htmlspecialchars($_POST['nom_client']);
    $prenom_client = htmlspecialchars($_POST['prenom_client']);
    $adresse_client = htmlspecialchars($_POST['adresse_client']);
    $telephone = htmlspecialchars($_POST['telephone']);
    $immatriculation = htmlspecialchars($_POST['immatriculation']);
    $mdp_client = md5($_POST['mdp_client']);
    $confirmer_mdp = md5($_POST['confirmer_mdp']);

    if ($mdp_client == $confirmer_mdp) {
        $ajoutDb = "INSERT into client(Nom,Prenom,Mail,telephone,Mot_de_passe,Role) values ('$nom_client','$prenom_client','$adresse_client','$telephone','$mdp_client','Client')";
        $resultat_ajout = mysqli_query($conn, $ajoutDb);
        $ajoutDb2 = "Insert into vehicule(numero_de_plaque) values ('$immatriculation')";
        $resultat_ajout2 = mysqli_query($conn, $ajoutDb2); 
        $res = mysqli_query($conn,"Select client_id from client where mail = '$adresse_client'");
            $data = mysqli_fetch_assoc($res);
            $IdClient = $data['client_id'];
            $majId = "Update vehicule set client_id = '$IdClient' where numero_de_plaque = '$immatriculation'";
            $resultat_update = mysqli_query($conn, $majId);
            $query = "SELECT c.role from Vehicule v, Client c where v.client_id = c.client_id and v.numero_de_plaque = '$immatriculation' and c.mot_de_passe = '$mdp_client'";
            $result = mysqli_query($conn,$query);
        
            if (mysqli_num_rows($result) == 1) {
                $user = mysqli_fetch_assoc($result);
                if ($user['role'] == 'Client') {
                    header('location: index.php?action=dashboardInscription');
                    $_SESSION['numero_de_plaque'] = $immatriculation;
                }
            }
            else{
                
                header('location: index.php?action=inscription');
              
            } 
            if (!$resultat_update) die('Erreur de requête' . mysqli_error($conn));
         
   
            

           
            //Agregamos la libreria para genera códigos QR
           
            
            //Declaramos una carpeta temporal para guardar la imagenes generadas
            $dir = 'temp/';
            
            //Si no existe la carpeta la creamos
            if (!file_exists($dir))
                mkdir($dir);
            
                //Declaramos la ruta y nombre del archivo a generar
            $filename = $dir.'cliente.png';
        
                //Parametros de Condiguración
            
            $tamaño = 10; //Tamaño de Pixel
            $level = 'L'; //Precisión Baja
            $framSize = 3; //Tamaño en blanco
            $contenido = "$immatriculation"; //Texto
            
                //Enviamos los parametros a la Función para generar código QR 
            QRcode::png($contenido, $filename, $level, $tamaño, $framSize); 
            
                //Mostramos la imagen generada
            echo '<img src="'.$dir.basename($filename).'" /><hr/>';  

       

    }
    
        
     
}
