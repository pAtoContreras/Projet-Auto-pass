<?php 

include ("models/login.php");
?>




<section class="py-5 bg-light">
      <div class="container px-5">
                        <div class="text-center text-dark mb-5">
                            <div class="feature bg-primary bg-gradient text-dark rounded-3 mb-3">
                                <i class="bi bi-envelope"></i>
                            </div>
                                <h1 class="fw-bolder">Bienvenu dans l’application Carmeter pour les clients</h1>
                                <p class="lead fw-normal text-bold mb-0">On aime avoir de vos nouvelles</p>
                        </div>
</section>

<section class="py-5 " style="background-color: #f2fcf6;">
      <div class="container px-0 py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                  <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                        <div class="card shadow-2-strong px-0" style="border-radius: 2rem; background-color:tomato;">
                              <div class="card-body p-5 text-center">
                              
                              <h3 class="fw-bolder text-darkt">S'Connecter</h3><br>

                              <form method="POST" action="index.php?action=loginClient">
                                          <div class="form-outline mb-4">
                                          <input type="text" placeholder="xx-xxx-xx"  name="immatriculation" class="form-control form-control-lg" required />
                                          <label class="form-label" for=""><p class="lead fw-normal text-light mb-0" >Numéro d'immatriculation</p></label>
                                          </div>

                                          <div class="form-outline mb-4">
                                          <i class="fa-solid fa-eye" id="eye2"></i>
                                          <input type="password"  name="mdp_client" placeholder="**********"  class="form-control form-control-lg" required/>
                                      
                                          <label class="form-label" for="typePasswordX-2"><p class="lead fw-normal text-light mb-0"><i class="fa-solid fa-key"></i>  Mot de passe </p></label>
                                         
                                          </div>
                               <style>
                                #eye2{
                                    position:relative;
                                    top: 43px;
                                    left:190px;
                                    transform: translateY(-50%);
                                    cursor:pointer;
                                    transition: 0.4s ease all;

                                } #eye2{
                                    color: steelblue;}
                                    </style>
                              <script>
                                const iconEye = document.querySelector("#eye2");
                            
                                
                                iconEye.addEventListener("click", function (){
                           

                                    if(this.nextElementSibling.type === "password"){
                                        this.nextElementSibling.type = "text";
                                        icon.classlis
                                    }else{
                                        this.nextElementSibling.type = "password";
                                    }
                                });
                                

                            </script>
                                          <button class="btn btn-success btn-lg btn-block" type="submit" name="valide">Connecter</button>

                                          <hr class="my-4">
                                          <div class = "infos">
                                                <ul>
                                                  
                                                      <h7><a href = "index.php?action=oubliMdp">Mot de passe oublié ?</a></h7>
                                                </ul>
                                          </div>
                              </form>

                              </div>
                        </div>
                  </div>
            </div>
      </div>
      
</div>
</section>

    

 <?php require_once ("views/footer.php");?>