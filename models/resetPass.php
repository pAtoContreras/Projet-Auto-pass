<?php   
require ("models/connexion.php");


if(isset($_POST['editar'])){
    $mail = $conn->real_escape_string($_POST['mail']); 
    $pass1 = $conn->real_escape_string($_POST['pass1']);
    $pass2 = $conn->real_escape_string($_POST['pass2']);

    $sqla=$conn->query("SELECT mail,mot_de_passe from client where mail= '$mail' and mot_de_passe= '$pass1'");
    $rowa = $sqla->fetch_array();

    if(isset($_POST['mail'])&& isset($_POST['pass1'])){
        

        if($pass1 == $pass2){

            $update = $conn->query("UPDATE client set mot_de_passe= '$pass1' where mail= '$mail'");
            if($update){
                header("location: index.php?action=validmdp");
            }
        }
    }


}
