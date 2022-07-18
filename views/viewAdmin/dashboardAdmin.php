<?php 



if(isset($_SESSION['role'])== 'Admin') {
  ?>



<section class="py-5 bg-light" >
          <div class="container px-5 py-5 text-dark">     
            <div class="row justify-content-center">
            <div class="text-center my-3">
                    <!-- aqui comienza el contenido -->
                       <h1 class="fw-bolder mb-4 text-dark" id="h1">Bienvenue <?php echo $_SESSION['usuario'];?>  sur votre espace administrateur !</h1>
                       <h2 class="fw-bolder fst-italic mb-4 text-success">Vous êtes connecté en tant que Professionnel!</h2><br>
                       
                   </div>
                    <!--premier bodycard-->
                    <div class="col-lg-5 mb-5" style="width:500px; height:300px;">
                              <div class="card h-100 shadow border-0 text-white" id="bodyCard1" style="background-color: #080808; background: linear-gradient(to right, #9e210b, #080808);">

                                            <div class="card-body p-4" >
                                            <div class="col-sm-12">
                                                <a class="stretched-link" href="index.php?action=inscription" ></a>
                                                
                                                <h3 class="card-title mb-3" ><i class="fa-duotone fa-1" ></i> - Premier etape</h3>
                                                <p class="lead fw-normal text-bold mb-2" >
                                                La première étape commence par l'enregistrement de toutes les données du client.
                                                </p>
                                                </div>
                                            </div>
                                          
                                                <a class="nav-link"  href="index.php?action=inscription"><button style=""class="btn btn-primary">
                                                  Enregistrer Client
                                                </button>
                                              </a><br>
                              </div>
                          </div>
                      <!--premier bodycard-->
                      <div class="col-lg-5 mb-5" style="width:500px; height:300px;">
                              <div class="card h-100 shadow border-0 text-white" id="bodyCard1" style="background-color: #080808; background: linear-gradient(to right, #130f38, #080808);">

                                            <div class="card-body p-4" >
                                            <div class="col-sm-12">
                                                <a class="stretched-link" href="index.php?action=ajoutVehicule" ></a>
                                                
                                                <h3 class="card-title mb-3" ><i class="fa-duotone fa-2" ></i> - Deuxieme etape</h3>
                                                <p class="lead fw-normal text-bold mb-2" >
                                                le deuxième étape de la démarche pour créer votre Auto-Pass est d'enregistrer tous les donnes de votre véhicule.
                                                </p>
                                                </div>
                                            </div>
                                          
                                                <a class="nav-link"  href="index.php?action=ajoutVehicule"><button style=""class="btn btn-success">
                                                  Enregistrer Votre vehicule
                                                </button>
                                              </a><br>
                              </div>
                          </div>

                    <!--deuxieme bodycard-->
                    
                          <div class="col-lg-5 mb-5" style="width:500px; height:300px;">
                                    <div class="card h-100 shadow border-0 text-white" id="bodyCard2" style="background-color: #080808; background: linear-gradient(to right, #0c54f0, #080808);">
                                  
                                        <div class="card-body p-4">
                                            <div class="col-sm-11">
                                              <a class="text-decoration-none link-dark stretched-link" href="index.php?action=mettrejourVehicule"></a>
                                              <h3 class="card-title mb-3"><i class="fa-solid fa-3 "></i> - Troisième  etape</h3>
                                              <p class="lead fw-normal text-bold mb-2">
                                              le troisième étape consiste à enregistrer toutes les réparations et l'entretien du véhicule. 
                                                </p>
                                          </div>
                                        </div>

                                            <a class="nav-link"  href="index.php?action=mettrejourVehicule"><button class="btn text-dark"  style="background-color: #f78011;">
                                                Mettre à jour Votre Vehicule
                                              </button>
                                            </a><br>

                                    </div>
                          </div>
<!-- fin deuxieme div-->
                                      </section>

  <?php } else{
    header("location: index.php?action=accueil");
  
  
}?>
<?php require_once ("views/footer.php");