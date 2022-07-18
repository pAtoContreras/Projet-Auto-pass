<?php

require ("models/connexion.php");
$plaque = htmlspecialchars($_POST['plaque_recup']);
if(isset($_POST['plaque_recup'])){
    $cherchePlaque = "Select numero_de_plaque from Vehicule where numero_de_plaque = '$plaque' limit 1";
    if(!mysqli_query($conn,$cherchePlaque)) die("Erreur de requête");
    else {
        $data = mysqli_fetch_assoc(mysqli_query($conn, $cherchePlaque));
        if ($plaque == $data['numero_de_plaque']) {
            ?>
                    <section class="py-2">
                    <div class="container px-4">
                        <div class="bg-light rounded-3 py-2 px-4 px-md-5 mb-5">
                            <div class="resetMdp">
                            <div class="container py-3 h-100">
                            <div class="row d-flex justify-content-center align-items-center h-100">
                                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                                <div class="card shadow-2-strong" style="border-radius: 1rem;">
                                    <div class="card-body p-5 text-center">

                                <form method="post" action="index.php?action=resetPass">

                                <!-- input pour le mail-->
                                <div class="form-outline mb-4">
                                    <label for="plaque_recup"><h6 class="fw-bolder">Adresse email</h6></label>
                                    <input  type="mail" name="mail" class="form-control form-control-l" required>
                                <!-- input pour le mot de passe-->
                                <div class="form-outline mb-4">
                                    <label for="plaque_recup"><h6 class="fw-bolder">Saisissez votre nouveau mot de passe</h6></label>
                                    <input  type="password" name="pass1" class="form-control form-control-l" required>
                                </div>
                                <div class="form-outline mb-4">
                                    <label for="plaque_recup"><h6 class="fw-bolder">Confirmez votre nouveau mot de passe</h6></label>
                                    <input  type="password" name="pass2"  class="form-control form-control-l" required>
                                </div>

                                <!-- input pour confirme le mot de passe-->
                                <div class="submit">
                                    <input type="submit" class="btn btn-success" value="editar" name="editar">
                                </div>

                            </form>  
                                </div>
                                </div>
                                </div>
                            </div>
                            </div>
                        </div>
                        </div>
                    </div>
                    </section>
            <?php
           
        }
        else {
            echo "Cette plaque d'immatriculation est incorrecte. Veuillez réessayer avec une immatriculation valide.";
            header("Refresh:","6,oubliMdp.php");
        }
    }
}
else {
    header("Refresh:","oubliMdp.php");
}
