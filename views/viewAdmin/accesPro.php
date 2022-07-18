<?php 



include("models/loginPro.php");

?>

<section class="py-5 bg-light">
   <div class="container px-5">

                        <div class="text-center text-dark mb-5">
                            <div class="feature bg-primary bg-gradient text-dark rounded-3 mb-3">
                                <i class="bi bi-envelope"></i>
                            </div>
                                <h1 class="fw-bolder">Bienvenue dans l’application Carmeter pour les professionnelss</h1>
                                <p class="lead fw-normal text-bold mb-0"></p>
                        </div>

</section>
<section class="py-5"  style="background-color: #f2fcf6;">
         <div class="container px-1 py-5 h-100" >
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12 col-md-8 col-lg-6 col-xl-5" >
              <div class="card shadow-2-strong bg-light"  style="background-image: url('public/img/fondo5.jpg'); border-radius: 2rem ;background-size: cover;
  background-repeat: no-repeat;
  margin: 0;" > 
                <div class="card-body p-5 text-center" >
                <h4 class="mb-4 text-dark " >Authentification pour les Professionnels &nbsp;<i class="fa-solid fa-users"></i></h4><br>

                  <form method="POST">

                      <div class="form-outline mb-4">
                        <input type="email"  name="usuario" placeholder="@example.com"  class="form-control form-control-lg" required/>
                        <label class="form-label" for="typeEmailX-2"><p class="lead fw-normal text-dark mb-0"><i class="fa-solid fa-envelope"></i> Adresse Mail</p></label>
                      </div>

                      <div class="form-outline mb-4">
                        <input type="password"  name="password" placeholder="********"  id="typePasswordX-2" class="form-control form-control-lg" required/>
                        <label class="form-label" for="typePasswordX-2"><p class="lead fw-normal text-dark mb-0 "><i class="fa-solid fa-key"></i> Mot de passe</p></label>
                      </div>  
                                
                      <button class="btn btn-primary btn-lg btn-block" type="submit" name="validar">Connecter</button>

                      <hr class="my-4">
                </form>
          </div>
        </div>
    </div>
  </div>
</section>

<?php require_once ("views/footer.php");?>

