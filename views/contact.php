 <!-- Page content-->
 <section class="py-5 bg-light">
  
                <div class="container px-5" >
                        <div class="text-center text-darkt mb-5">
                            
                            <div class="feature bg-primary bg-gradient text-darkt rounded-3 mb-3">
                                <i class="bi bi-envelope"></i>
                            </div>
                                <h1 class="fw-bolder text-dark">Contactez nous</h1>
                                <p class="lead fw-normal text-bold mb-0 text-dark">Vous n’avez pas trouvé de réponse à votre question dans notre FAQ?
                                Contactez-nous. Nous sommes toujours heureux de vous aider.</p>
                        </div>
</section>

 <section class="py-5" style="background-color: #f2fcf6;">
                <div class="container px-5" >
                        <div class="row gx-5 py-5 "><style>#aMail{  color: #000000;
                                                        text-decoration: none;
                                                        box-shadow: inset 0 -3px 0 0 #bdb;} </style>
                                                     <div class="col-lg-6" >
                                                                <div class="col-lg-6  py-4" id="divQuestions1">
                                                                    <a href="#" id="aMail"><h3 class="fw-bolded   text-dark h4" ><i class="fa-solid fa-envelope fa-2x" ></i> &nbsp;&nbsp;info@Auto-pass.be</h3></a>
                                                                        <p class="lead fw-normal  mb-0"><hr>
                                                                    </p>
                                                                </div>

                                                                <div class="col-lg-6 py-4" id="divQuestions1">
                                                                
                                                                        <p class="lead fw-normal fw-bolder text-darkt mb-0">
                                                                        <i class="fa-solid fa-phone fa-2x"></i>&nbsp;&nbsp;&nbsp;02 773 50 56<br>
                                                                        <p class="lead text-darkt fw-bolder mb-0">Disponible par téléphone:
                                                                        de 8h à 12h30 et
                                                                        de 14h à 17h30 (vendredi à 16h30).</p></p><hr>
                                                                </div>

                                                                <div class="col-lg-6  py-4" id="divQuestions1">
                                                                        <p class="lead fw-normal text-darkt fw-bolder mb-0">
                                                                        <i class="fa-solid fa-building fa-2x"></i>&nbsp;&nbsp;&nbsp; Car-Pass asbl
                                                                        Bd. de la Woluwe 46/2
                                                                        1200 Bruxelles
                                                                        BE.0880.498.395.</p>
                                                                </div>
                                                    </div>
                               

                            <div class="col-lg-8 col-xl-6">
                            <?php 
                                    include("models/connexion.php");
                                    if (isset($_POST['nom']) && $_POST['prenom'] && $_POST['email']&& $_POST['telephone'] && $_POST['message']) {
                                    $nom= htmlspecialchars($_POST['nom']);
                                    $prenom = htmlspecialchars($_POST['prenom']);
                                    $email= htmlspecialchars($_POST['email']);
                                    $telephone = htmlspecialchars($_POST['telephone']);
                                    $message= htmlspecialchars($_POST['message']);

                                    if (isset($_POST['envoye'])) {
                                        $ajoutDb = "INSERT into contact(Nom,Prenom,email,telephone,message) values ('$nom','$prenom','$email','$telephone','$message')";
                                        $resultat_ajout = mysqli_query($conn, $ajoutDb);
                                        echo '<script type="text/javascript">
                                        $(document).ready(function(){
                                           
                                                alertify.success("Votre message ete envoye avec succes ");
                                            })
                                      
                                    </script>';
                                        
                                        }
                                        } 
                                ?>
                                
                    

                       
                                <form method="post" action="">
                                    <!-- input et label pour numero de chassis -->
                                    <label for="nom" class="req"><p class="lead fw-normal text-darkt mb-0">Nom*</p></label>
                                    <input name="nom" placeholder="Entrez votre Nom" class="form-control" type="text" required>
                                     <!-- input et label pour numero de marque -->
                                     <label for="prenom" class="req"><p class="lead fw-normal text-darkt mb-0">Prenom*</p></label>
                                    <input name="prenom" placeholder="Entrez votre Prenom*"  class="form-control"  required>
                                     <!-- input et label pour numero de marque -->
                                     <label for="email" class="req"><p class="lead fw-normal text-darkt mb-0">Adresse mail*</p></label>
                                    <input name="email" placeholder="Entrez votre Adresse Mail"  class="form-control"  required>
                                     <!-- input et label pour numero de marque -->
                                     <label for="telephone" class="req"><p class="lead fw-normal text-darkt mb-0">Tehephone*</p></label>
                                    <input name="telephone" placeholder="Entrez votre Telephone"  class="form-control"  required>
                                     <!-- input et label pour numero de marque -->
                                     <label for="message" class="req"><p class="lead fw-normal text-darkt mb-0">Message*</p></label>
                                    <input name="message" placeholder=""  class="form-control"  required style="height:250px;"><br>
                                    
                                    <div class="submit">
                                        <input type="submit" style="width:200px;" class="btn btn-danger" id="envoye" value="envoye" name="envoye">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                   
                   
                       
</section>
<section class="py-5" style="background-color: #f2fcf6;"> >   
                    <div class="container px-0" >         
                    <!-- Contact cards-->
                    <div class="row gx-5 row-cols-3 row-cols-lg-4 py-5">
                        <div class="col-lg-3">
                            <div class="feature bg-primary bg-gradient text-darkt rounded-3 mb-3"><i class="bi bi-chat-dots"></i></div>
                            <div class="h5 mb-2 text-dark">Venez discuter avec nous</div>
                            <p class="text-muted mb-0">Vous pouvez contacter notre support en direct.</p>
                        </div>
                        <div class="col-lg-3">
                            <div class="feature bg-primary bg-gradient text-darkt rounded-3 mb-3"><i class="bi bi-people"></i></div>
                            <div class="h5 text-dark">Demandez à la communauté</div>
                            <p class="text-muted mb-0">Venez discuter avec d'autres utilisateurs.</p>
                        </div>
                        <div class="col-lg-3">
                            <div class="feature bg-primary bg-gradient text-darkt rounded-3 mb-3"><i class="bi bi-question-circle"></i></div>
                            <div class="h5 text-dark">Centre de support technique</div>
                            <p class="text-muted mb-0">Parcourez notre FAQ pour trouvez des solutions.</p>
                        </div>
                        <div class="col-lg-3">
                            <div class="feature bg-primary bg-gradient text-darkt rounded-3 mb-3"><i class="bi bi-telephone"></i></div>
                            <div class="h5 text-dark">Appellez-nous</div>
                            <p class="text-muted mb-0">Vous pouvez nous joindre 7 jour sur 7 et 24 heure sur 24</p>
                        </div>
                    </div>
                </div>
                </div>
</section>
       

<?php require_once ("views/footer.php");?>