<?php 
ob_start();
if(isset($_SESSION['numero_de_plaque'])== 'numero_de_plaque' ) {
   
    require ("models/connexion.php");
    $ajoutMarque = ("SELECT nom, prenom from client ");
    $resultado = $conn->query($ajoutMarque);
    while($row = $resultado->fetch_assoc()){
      
      $nom_client = $row['nom'];
      $prenom_client = $row['prenom'];
  }

    ?>
  

<section class="py-5" style="background-color: #e3e3e3;" >
        <div class="container px-5 text-dark">
            <!-- Heading Row-->
            <div class="row gx-4 gx-lg-5 align-items-center my-5">
                <div class="col-lg-5">
                    <h2 class="font-weight-light">Bienvenue <?php echo $nom_client; ?> <?php echo $prenom_client; ?> a Carmeter <i class="fa-solid fa-face-grin"></i></h2>
                    <p class="lead fw-normal text-muted mb-0">Votre compte a été créé avec succès!</p><br>
                    <a href="index.php?action=dashboardAdmin"><button class="btn btn-success">Cliquez ici pour aller à l'espace Professionnel  </button></a>

                </div>
            </div>
            
              <!-- Heading Row-->
              <div class="row gx-4 gx-lg-5 align-items-center my-5">
                <div class="col-lg-7">
                <div class="col-lg-5">
                   
                </div>
            </div>
            <!-- Call to Action-->
            <div class="card text-dark bg-secondary my-5 py-4 text-center">
                <div class="card-body"><p class="text-dark m-0"></p></div>
            </div>
           <!-- footer-->
                
            </div>
        </div>
         
    </div>  
</section>   


<?php } ?>

  <?php require_once ("views/footer.php");