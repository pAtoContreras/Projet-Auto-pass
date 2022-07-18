
<?php 
ob_start();
if(isset($_SESSION['numero_de_plaque'])== 'numero_de_plaque' ) {
  ?>

<section class="py-5"  style="background-image: url('public/img/fondo5.jpg');  ;background-size: cover;
  background-repeat: no-repeat;
  margin: 0;" > 
      <div class="container px-5 ">
      <h4 class="font-weight-light">Votre code QR a été généré avec succès !</h4><br>
          <div class="row d-flex justify-content-center align-items-center h-100">
       
            <div class="col-12 col-md-8 col-lg-6 col-xl-6">
                <img class="img-fluid rounded mb-4 mb-lg-0" src="temp/client.png" alt="...">

               
          </div>
          <div class="col-lg-6">
                    
                    <a href="index.php?action=dashboardClient" ><button name="btn" class="btn btn-success">Cliquez ici pour retourner à l'espace client</button></a>
    
               </div>
                
        </div>
      </div>
</section>   


<?php } ?>

<?php require_once ("views/footer.php");