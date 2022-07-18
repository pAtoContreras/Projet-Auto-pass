
<?php 
include("models/ajoutClient.php");?>
<section class="py-5"  >
        <div class="container px-5 ">
                <div class="text-center text-dark mb-5">
                    <div class="feature bg-primary bg-gradient text-dark rounded-3 mb-3">
                        <i class="bi bi-envelope"></i>
                    </div>

                        <h1 class="fw-bolder">Inscription</h1>
                        <p class="lead fw-normal text-bold mb-0">enregistrement d'un nouveau client</p>
                </div>
</section>
<section class="py-5" style="background-color: #f2fcf6;" >
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                 <div class="col-md-8 col-lg-10 col-xl-6">   
                    <div class="card shadow-2-strong" style="border-radius: 1rem;">
                        <div class="card-body p-5 text-center">
                        <form method="post" action="index.php?action=InscriptionValid">
                            <label for="nom_client" class="req"></label>
                            <input name="nom_client" placeholder="Nom" class="form-control" type="text" required>
                        
                            <label for="prenom_client" class="req"></label>
                            <input name="prenom_client" placeholder="Prénom" class="form-control" type="text" required>
                        
                            <label for="adresse_client" class="req"></label>
                            <input name="adresse_client" placeholder="Adresse Mail" class="form-control" type="email" required>

                            <label for="telephone" class="req"></label>
                            <input name="telephone" placeholder="telephone" class="form-control" type="text" required>
                        
                            <label for="immatriculation" class="req"><p class="lead fw-normal text-muted mb-0">N° d'immatriculation:</p></label>
                            <input name="immatriculation" placeholder="" class="form-control" type="text" required>
                            
                            <label for="mdp_client" class="req"><p class="lead fw-normal text-muted mb-0">Insérer mot de passe:</p></label>
                            <i class="fa-solid fa-eye" id="eye1"></i>
                            <input name="mdp_client" placeholder="*******" class="form-control" type="password" required>
                            
                            <label for="nom_client" class="req"><p class="lead fw-normal text-muted mb-0">Confirmer mot de passe:</p></label>
                            <i class="fa-solid fa-eye" id="eye"></i>
                            <input name="confirmer_mdp" placeholder="*******" class="form-control" type="password" required><br>
                            
                            <div class="submit">
                                <input type="submit" style="width:200px;" class="btn btn-dark text-light" value="S'inscrire">
                            
                            </div>
                            <hr class="my-4">
                            <style>
                                #eye{
                                    position:relative;
                                    top:40px;
                                    left:140px;
                                    transform: translateY(-50%);
                                    cursor:pointer;
                                    transition: 0.4s ease all;

                                } #eye{
                                    color: steelblue;
                                } #eye1{
                                    position:relative;
                                    top:40px;
                                    left:153px;
                                    transform: translateY(-50%);
                                    cursor:pointer;
                                    transition: 0.4s ease all;

                                } #eye1{
                                    color: steelblue;
                                }



                            </style>
                            <script>
                                const iconEye = document.querySelector("#eye,#eye1");
                            
                                
                                iconEye.addEventListener("click", function (){
                           

                                    if(this.nextElementSibling.type === "password"){
                                        this.nextElementSibling.type = "text";
                                        icon.classlis
                                    }else{
                                        this.nextElementSibling.type = "password";
                                    }
                                });
                                
                                

                            </script>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</section>


<?php require_once ("views/footer.php");?>