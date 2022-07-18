
   
        
<section class="py-2"  style="background-color: #e3e3e3;" >
   <div class="container px-4">
      <div class="bg-light rounded-3 py-2 px-4 px-md-5 mb-5">
        <div class="resetMdp">
        <div class="container py-3 h-100">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12 col-md-8 col-lg-6 col-xl-5">
              <div class="card shadow-2-strong" style="border-radius: 1rem;">
                <div class="card-body p-5 text-center">

        <form method="post" action="index.php?action=resetMdp">

            <!-- input pour la matriculation-->
            <div class="form-outline mb-4">
                <label for="plaque_recup"><h5 class="fw-bolder">Saisissez votre plaque d'immatriculation:</h5></label>
                <input type="text" name="plaque_recup" class="form-control form-control-l" required>
            </div>

            <!-- input pour le button-->
            <div class="submit">
                <input type="submit" class="btn btn-success" value="Valider">
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





    <?php require_once ("views/footer.php");?>
