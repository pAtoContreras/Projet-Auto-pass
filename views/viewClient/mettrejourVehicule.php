<?php 
include("models/ajouteVehicule.php");?>


<section class="py-5"  style="background-image: url('public/img/fondo5.jpg');  ;background-size: cover;
  background-repeat: no-repeat;
  margin: 0;" > 
        <div class="container px-5 ">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12 col-md-8 col-lg-6 col-xl-6">
              <div class="card shadow-2-strong" style="border-radius: 1rem;">
                <div class="card-body p-5 text-center">
                    <h3 class="mb-4">Mettre a jour un véhicule <i class="fa-solid fa-car"></i></h3>
                    <h6 class="mb-3" style="color:green;">Vous pouvez mettre à jour votre véhicule</h6>

                        <form method="post" action="index.php?action=updateVehicule">
                            <label for="km_entretien" class="req"></label>
                            <input name="km_entretien" placeholder="km_entretien" class="form-control" type="text" required>
                   
                            <label for="date_entretien" class="req"><p class="lead fw-normal text-muted mb-0">Date debut de circulation:</p></label>
                            <input name="date_entretien" placeholder="" type="date" class="form-control"  required>
                            <br>
                      
                            <label for="details_maintenance" class="req"></label>
                            <input name="details_maintenance" placeholder="details_maintenance" class="form-control" required><br>
                          
                            
                            <div class="submit" >
                                <input type="submit" style="width:200px;" class="btn btn-primary " value="Mettre à jour" name="MettreAjour" >
                            </div>
                          </form>
                </div>
             </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
    <?php require_once ("views/footer.php");?>