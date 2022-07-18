<?php 
ob_start();
if(isset($_SESSION['numero_de_plaque'])== 'numero_de_plaque' ) {

  
  ?>

<section class="py-3" id="features" >
                <div class="container px-5 ">
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                        <img class="d-block w-100"  src="public/img/banner3.jpg" alt="First slide">
                        </div>
                        <div class="carousel-item">
                        <img class="d-block w-100" src="public/img/banner2.jpg" alt="Second slide">
                        </div>
                    
                    </div>
              
                    </div>
</div>
</section>

    




    <!--
        <script>
        $(document).ready(function() {

        $("#section1").animate({fontSize:'1.3em',width:1500,padding:24, height:550, } , 700);
        });
        </script>-->

<!-- premier section-->
<style>

    #section1{

        width: 1200px;

    }
</style>
<section class="py-5  text-center"  style="background-color:#073657; border: 70px solid #073657">
                <div class="container px-5 py-3 my-5 text-center text-bold" id="section1"  style="border: 1px solid #e2e1eb;  ">
                    <div class="row gx-8">
                                        
                               
                                        
                               
                                                

                            <div class="col-lg-12 mb-5 mb-lg-1 text-center text-white py-1" >
                                <h3 class="fst-monospace mb-2">En luttant contre la fraude aux compteurs kilométriques, l’asbl Auto-Pass vise à protéger
                                    l'acheteur et les pratiques légales du commerce de véhicules d'occasion.</h3>
                            </div>
                            
                            
                                       
<!-- premier div-->
                    <div class="col-lg-5 px-5 py-3">
                            <div class="col mb-5 h-100 py-2" style="">
                                    <style> #a{
                                            pointer-events: auto;
                                            text-decoration:none;
                                        }</style>
                                <a href="index.php?action=acheterOcasion" id="a">
                                    <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3 py-4">
                                        <h2 class="h4 text-center fst-italic" >Je veux acheter une occasion</h2>
                                    </div>
                                </a>
                                
                                <h3 class="h5 text-light">
                                    Exigez votre Car-Pass auprès du vendeur! C'est un document légalement obligatoire.
                                </h3><br>
                                <p class="mb-0 text-light">
                                    Vérifiez si les kilométrages affichés suivent une évolution logique dans le temps et si le dernier kilométrage 
                                    mentionné sur le Car-Pass correspond à la valeur affichée au compteur.
                                </p>
                            </div>
                    </div>
<!-- fin premier div-->
<!-- deuxieme div-->
                        <div class="col-lg-5 px-5 py-3">               
                                <div class="col mb-5 h-100 py-2 " style="">
                                        <style> #b{
                                            pointer-events: auto;
                                            text-decoration:none;
                                        }</style>
                                    <a href="index.php?action=vendreOcasion" id="b">
                                            <div class="feature bg-danger bg-gradient text-white rounded-3 mb-3 py-4"> 
                                                <h2 class="h4 text-center fst-italic" >Je veux vendre une occasion</h2>
                                            </div>
                                    </a>
                                    
                                        <h3 class="h5 text-light">
                                        Présentez-la au contrôle technique d'occasion.</h3><br>
                                        <p class="mb-0 text-light">
                                        Demandez le Car-Pass en arrivant au contrôle technique. Il coûte ... EUR TVA comprise.
                                        Remettez le Car-Pass à l'acheteur. C'est un document légalement obligatoire. Si l’acheteur n’a pas reçu le Car-Pass, il a le droit d’annuler la vente.	
                                        </p> 
                                </div>
                        </div>
<!-- fin deuxieme div-->
<!-- troisième  div-->
                        <div class="col-lg-5 px-5 py-3">               
                                <div class="col mb-5 h-100 py-2 " style="">
                                        <style> #b{
                                            pointer-events: auto;
                                            text-decoration:none;
                                        }</style>
                                    <a href="index.php?action=inscription" id="b">
                                            <div class="feature bg-success bg-gradient text-white rounded-3 mb-3 py-4"> 
                                                <h2 class="h4 text-center fst-italic" >Inscrivez-vous</h2>
                                            </div>
                                    </a>
                                    
                                        <h3 class="h5 text-light">
                                        Si vous n'êtes pas encore inscrit sur notre site, cliquez ici pour vous inscrire en tant que client.</h3>
                                        <p class="mb-0 text-light"  style="position:relative; top:5px;">
                                        Pour obtenir votre auto pass, vous devez vous inscrire en tant que client et suivre les étapes de l'espace client. 
                                        Une fois que vous avez terminé toutes les étapes, vous pouvez obtenir votre Auto-Pass en format PDF avec votre QR code..	
                                        </p> 
                                </div>
                        </div>
<!-- fin troisième  div-->
                                            
                                                   
                          
                    </div>
                </div>
</section>
<!-- fin section-->


<div class="py-3 bg-light"  style="background-color: #e3e3e3;" >
                <div class="container px-5 my-5 text-bold">
                    <div class="row gx-5 justify-content-center">
                        <div class="col-lg-10 col-xl-7">
                            <div class="text-center">
                                <div class="fs-4 mb-4 fst-italic">
                                    <h3>Professionnel?</h3>
                                    <br> 
                                    <p>Garages, carrossiers, fast fitters, centrales de pneus, contrôle technique... Tout professionel qui effectue une intervention sur une voiture ou une camionnette est tenu d’en transmettre le kilométrage.</p></div>
                                        <div class="d-flex align-items-center justify-content-center">
                                            <img class="rounded-circle me-3" src="public/img/banner1.jpg" alt="..." />
                                            <div class="fw-bold">
                                            
                                        </div>
                                </div><br>
                                
                            <a hfer="index.php?action=action=login"><button class="btn btn-danger ">Connexion à l’espace professionnel</button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

 
      
<?php } ?>

<?php require_once ("views/footer.php");
