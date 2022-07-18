<?php 
ob_start();
if(isset($_SESSION['numero_de_plaque']) == 'numero_de_plaque' ) {
  require ("models/connexion.php");
  $ajoutMarque = "SELECT nom, prenom from client ";
  $resultado = $conn->query($ajoutMarque);
  while($row = $resultado->fetch_assoc()){
    
    $nom_client = $row['nom'];
    $prenom_client = $row['prenom'];
}

  ?>

 
<style>

  #bodyCard1:hover{
  color: #0fa824 !important;
    transform: translateX(3px);
    transition: .2s ease;}
  #bodyCard2:hover{
    color: #f78011 !important;
    transform: translateX(3px);
    transition: .2s ease;}
    #bodyCard3:hover{
    color: #c7122a !important;
    transform: translateX(3px);
    transition: .2s ease;}
    #bodyCard4:hover{
    color: #123cc7 !important;
    transform: translateX(3px);
    transition: .2s ease;}
</style> 

<section class="py-5 bg-light">
   <div class="container px-2 text-dark" id="head2" >
       <div class="row justify-content-center">
           <div class="col-lg-12 col-xxl-12">
                   <div class="text-center my-3">
                    <!-- aqui comienza el contenido -->
                       <h1 class="fw-bolder mb-4 text-dark" id="h1">Bienvenue <?php echo  $prenom_client ?>&nbsp;dans l'espace client</h1>
                       <h2 class="fw-bolder fst-italic mb-4 text-success">Vous êtes connecté en tant que client!</h2><br>
                       
                   </div>
                   <!-- fin del contenido#6c5178; -->
           </div>
       </div>
   </div>
</section>    

  <section class="py-5"  style="background-color: #f2fcf6;">
          <div class="container px-5 py-5 text-dark">     
            <div class="row justify-content-center">
           
             
                                                              
                          <div class="col-lg-5 mb-5" style="width:500px; height:300px;">
                              <div class="card h-100 shadow border-0 text-white" id="bodyCard3" style="background-color: #080808; background: linear-gradient(to right, #04c75f, #080808);">

                                <div class="card-body p-4">
                                    <a class="text-decoration-none link-dark stretched-link" href="index.php?action=codeQr"></a>
                                    <h3 class="card-title mb-3"><i class="fa-solid fa-1 "></i> - Troisième étape</h3>
                                    <p class="lead fw-normal text-bold mb-2">
                                    Après avoir saisi toutes les données, générez votre code QR.
                                    </p>
                                </div>
                              
                               
                                    <a class="nav-link"  href="index.php?action=codeQr" >
                                          <button class="btn btn-danger" style=""> 
                                            Generar votre code QR&nbsp;&nbsp;
                                          </button>
                                      </a>
                                    <br>
                              

                            </div>
                          </div>

                                                                  

                          <div class="col-lg-5 mb-5" style="width:500px; height:300px;"> 
                                  <div class="card h-100 shadow border-0 text-white" id="bodyCard4" style="background-color: #080808; background: linear-gradient(to right, #f0320c, #080808);">
                                      
                                      <div class="card-body p-4">
                                          <a class="text-decoration-none link-dark stretched-link" href="index.php?action=pdf" target="_blank"  ></a>
                                          <h3 class="card-title mb-3"><i class="fa-solid fa-2 "></i> - Étape finale</h3>
                                          <p class="lead fw-normal text-bold mb-2">
                                          Et voilà, votre PDF est prêt avec toutes les données du véhicule, les réparations et l'entretien, ainsi que l'intégration de votre code QR.
                                          </p>
                                      </div>

                                      
                                          <a class="nav-link"  href="index.php?action=pdf"  target="_blank" >
                                            <button class="btn btn-primary"> 
                                              PDF de votre Vehicule
                                            </button>
                                          </a>
                                          <br>         
                             

                                </div>
                          </div>
                      </div> 
                  </div>   
                         
</section>  

  


<?php } ?>

  <?php require_once ("views/footer.php");