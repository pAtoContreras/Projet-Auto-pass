<?php

require ("models/connexion.php");

if(isset($_POST['validar'])){
 if (strlen($_POST['usuario'])>=1 && strlen($_POST['password'])>=1 ) {
     $nombreUsuario=$_POST['usuario'];
     $password=$_POST['password'];

     $conn = mysqli_connect($nomServ,$nomUtil,$mdp,$nomDb);

     $consulta=mysqli_query($conn,"SELECT * FROM partenaire where mail='$nombreUsuario' and mot_de_passe='$password'");
     $detalles=mysqli_fetch_array($consulta);

     $consultaAdmin=mysqli_query($conn,"SELECT * FROM admin where mail='$nombreUsuario' and mot_de_passe='$password'");
     $detallesAdmin=mysqli_fetch_array($consultaAdmin);

    if($detalles)
    {
       
        $_SESSION['usuario'] = $detalles['mail'];
        $_SESSION['role'] = $detalles['role'];
    
        if($_SESSION['role']== 'Partenaire'){
            header("location: index.php?action=dashboardPartenaire");
        }

    }
    if($detallesAdmin)
    {
        
        $_SESSION['usuario'] = $detallesAdmin['mail'];
        $_SESSION['role'] = $detallesAdmin['role'];
        

        if($_SESSION['role']== 'Admin'){
            header("location: index.php?action=dashboardAdmin");
        }

    }

 else
     {
       $to="el usuario no existe";
        echo '<script">alert("Data has been submitted to ' . $to . '");</script>';

     }
    }
else{

    echo "completa los datos";
}


}

