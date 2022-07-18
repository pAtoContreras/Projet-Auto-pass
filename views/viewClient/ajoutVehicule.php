<?php 
include("models/ajouteVehicule.php");?>

<section class="py-5"  style="background-color:#f2fcf6">
                  <div class="container px-5 ">
                        <div class="row d-flex justify-content-center align-items-center h-100">
                           <div class="col-12 col-md-8 col-lg-6 col-xl-6">
                             <div class="card shadow-2-strong" style="border-radius: 1rem;">
                               <div class="card-body p-5 text-center">

                                  <h3 class="mb-4">Enregistrer un véhicule <i class="fa-solid fa-car"></i></h3>
                                  <h6 class="mb-3" style="color:green;">Entrez les détails du véhicule </h6>

                                <!-- Formulaire pour enregistrer une vehicule -->
                                <form method="post" action="index.php?action=enregistrerVehicule">
                                    <!-- input et label pour numero de chassis -->
                                    <label for="numero_chassis" class="req"></label>
                                    <input name="numero_chassis" placeholder="N° d'chassis" class="form-control" type="text" required><br>
                                     <!-- input et label pour numero de marque -->

                                    <select class="form-select"  name="marque" aria-label="Default select example" name="carburant">

                                    <option value="" >Marque de Vehicule</option>      
                                    <?php 
                                      require ("models/connexion.php");
                                      $ajoutMarque = ("SELECT * from marques ");
                                      $resultado = $conn->query($ajoutMarque);
                                      while($row = $resultado->fetch_assoc()){
                                        $id = $row['marque_id'];
                                        $marques = $row['nom_marque'];
                                        ?>
                                    
                                      <option   value="<?php echo $marques; ?>"><?php echo $marques; ?> </option>
                                      <?php 
                                    }
                                  
                                      ?>
                                      
                                  </select>
                                     <!-- input et label pour numero de modele -->
                                    <label for="modelo" class="req"></label>
                                    <input name="modelo" placeholder="Model" class="form-control" type="text" required>
                                    <!-- input et label pour numero de kilometreage -->
                                    <label for="kilometrage" class="req"></label>
                                    <input name="kilometrage" placeholder="Kilometrage" class="form-control" required><br>
                                  
                                    <!-- select pour le type de essence -->
                                    <select class="form-select" aria-label="Default select example" name="carburant">
                                                <option selected>Choisir le type de carburant</option>
                                                <option value="Diesel">Diesel</option>
                                                <option value="Essence">Essence</option>
                                                <option value="Electrique">Electrique</option>
                                                <option value="Hybride">Hybride</option>
                                               </select>
                                    <!-- input et label pour le date de circulation  -->
                                    <label for="date_circulation_debut" class="req"><p class="lead fw-normal text-muted mb-0">Date debut de circulation:</p></label>
                                    <input name="date_circulation_debut" placeholder="" type="date" class="form-control"  required>
                                    <br>
                              
                                    <!-- select pour le etat du vechicule -->
                                    <select class="form-select" aria-label="Default select example" name="maitenance_vehicule">
                                                <option selected >Etat du véhicule</option>
                                                <option value="Tres bon etat">Très bon état</option>
                                                <option value="Bon etat">Bon état</option>
                                                <option value="Etat satisfaisant">État satisfaisant</option>
                                            
                                              </select><br>
                                    
                                    <div class="submit">
                                        <input type="submit" style="width:200px;" class="btn btn-primary" value="Enregistrer" name="enregistrer">
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
 
 
     require_once ("views/footer.php");?>