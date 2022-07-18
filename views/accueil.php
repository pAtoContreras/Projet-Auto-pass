
<!-- accueil-->
<script> 
  $(document).ready(()=> {
  $(".card").animate({ left: "-20px",}, 3000)
	});
</script>
<style>
.center 
{
  align-items: center;
  display: flex;
  flex-direction:row-reverse;
  height: 100%;
  justify-content: center;
  background-color:#ebebed;
}
.card 
{
  border-radius: 0.5em;
  box-shadow: 1px 1px 10px rgba(0, 0, 0, 0.5);
  width:150px;
  left:300px;
}
.inner
{
    display: flex;
    grid-gap: 1em;
    transition: all 1s ease-in-out;
}
.map
{
  margin-top: 1em;
  background-color:#193175;
}
#idImagen:hover
{
    transform: scale(1.1);
    transition: .2s;
        z-index: 1000;
}
#h1
{color: #f79e45
} 
#head2{
  border-radius: 0.5em;
  height: 230px;
  width:100%;
}
</style>

<section class="py-2" >
        <div class="container px-5 " >
                    <div class="carousel-inner">
                        <div class="carousel-item active" >
                        <img class="d-block w-100 "  id="idImagen" src="public/img/banner3.jpg" alt="First slide">
                    </div>
                   
                    
             
        </div>
</section>



<section class="py-5 "style="background-color: #f2fcf6;">
              <div class="container px-5 " >
                                        <div class="center">
                                                <div class="wrapper">
                                                      <div class="inner">
                                                          <a class="card" href=""><img src="public/img/sponsor1.jpg"id="idImagen"></a>
                
                                                          <a class="card" href=""><img src="public/img/sponsor2.jpg" id="idImagen"></a>
                                  
                                                          <a class="card" href=""><img src="public/img/sponsor3.png" id="idImagen"></a>
                                                              
                                                          <a class="card" href=""><img src="public/img/sponsor4.png" id="idImagen"></a>
                                                              
                                                          <a class="card" href=""><img src="public/img/sponsor5.png" id="idImagen"></a>

                                                          <a class="card" href=""><img src="public/img/sponsor1.jpg"id="idImagen"></a>
                                                          
                                                          <a class="card" href=""><img src="public/img/sponsor2.jpg" id="idImagen"></a>

                                                          <a class="card" href=""><img src="public/img/sponsor3.png" id="idImagen"></a>
                                                              
                                                          <a class="card" href=""><img src="public/img/sponsor4.png" id="idImagen"></a>
                                                              
                                                          <a class="card" href=""><img src="public/img/sponsor5.png" id="idImagen"></a>

                                                        </div>
                                                </div>
                                        </div>
              </div>
        

                <div class="container px-5 py-3 my-5 text-center text-bold" id="section1" >
                    <div class="row gx-8 ">
                            <div class="col-lg-12 mb-5 mb-lg-1  text-center text-success py-5">
                                <h3 class="fst-monospace mb-2" >En luttant contre la fraude aux compteurs kilométriques, l’asbl Auto-Pass vise à protéger
                                    l'acheteur et les pratiques légales du commerce de véhicules d'occasion.</h3>
                            </div>
          
<!-- premier div-->         
                            <div class="col-lg-6 px-5 py-5 text-light"> 
                                <a href="index.php?action=acheterOcasion" id="b">
                                    <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3 py-4">
                                        <h2 class="h4 text-center fst-italic" >Je veux acheter une occasion</h2>
                                    </div>
                                </a>
                                <h3 class="h5 text-dark">
                                    Exigez votre Auto-Pass auprès du vendeur! C'est un document légalement obligatoire.
                                </h3><br>
                                <p class="lead fw-normal text-dark mb-4">
                                    Vérifiez si les kilométrages affichés suivent une évolution logique dans le temps et si le dernier kilométrage 
                                    mentionné sur le Auto-Pass correspond à la valeur affichée au compteur.
                                </p>
                                <style> #a{ pointer-events: auto;text-decoration:none;}</style>
                             </div>
<!-- fin premier div-->

<!-- deuxieme div-->
                            <div class="col-lg-6 px-5 py-5 text-light"  >           
                                    <a href="index.php?action=vendreOcasion" id="b">
                                            <div class="feature bg-danger bg-gradient text-white rounded-3 mb-3 py-4"> 
                                                <h2 class="h4 text-center fst-italic" >Je veux vendre une occasion</h2>
                                            </div>
                                    </a>
                                        <h3 class="h5 text-dark">
                                        Présentez-la au contrôle technique d'occasion.</h3><br>
                                        <p class="lead fw-normal text-dark mb-4">
                                        Demandez le Auto-Pass en arrivant au contrôle technique. Il coûte ... EUR TVA comprise.
                                        Remettez le Auto-Pass à l'acheteur. C'est un document légalement obligatoire. Si l’acheteur n’a pas reçu le Auto-Pass, il a le droit d’annuler la vente.	
                                        </p> 
                                        <style> #b{pointer-events: auto;text-decoration:none;}</style>
                             </div>
<!-- fin deuxieme div-->
                            
<!-- troisième  div-->
                        <div class="col-lg-5 px-5 py-5">   
                            <div class="fs-4 mb-4 fst-italic ">
                                <h3 style=" color:#f26d1b;">Vous êtes un client chez nous ?</h3>
                                <br> 
                                <p style=" color:#f26d1b;">Vérifier si votre numéro d'identifiant est bien enregistré dans notre site....</p></div>
                                    <div class="d-flex align-items-center justify-content-center">
                               
                                        <div class="fw-bold">
                                        
                                    </div>
                            </div>
                            <i class="fa-solid fa-angle-down fa-4x "></i>
                        </div>
                        
<!-- fin troisième  div-->
                        <div class="col-lg-7 px-5 py-5 text-light"  >                    
                                    <a href="index.php?action=inscription" id="b">
                                            <div class="feature bg-success bg-gradient text-white rounded-3 mb-3 py-4"> 
                                                <h2 class="h4 text-center fst-italic" >Inscrivez-vous</h2>
                                            </div>
                                    </a>
                                    
                                        <h3 class="h5 text-dark">
                                        Si vous n'êtes pas encore inscrit sur notre site, cliquez ici pour vous inscrire en tant que client.</h3>
                                        <p class="lead fw-normal text-dark mb-4"  style="position:relative; top:5px;">
                                        Pour obtenir votre auto pass, vous devez vous inscrire en tant que client et suivre les étapes de l'espace client. 
                                        Une fois que vous avez terminé toutes les étapes, vous pouvez obtenir votre Auto-Pass en format PDF avec votre QR code..	
                                        </p> 
                                        <style> #b{pointer-events: auto;text-decoration:none;}</style>
                        </div>
                       
<!-- form pour verifie immatriculation -->
                                    <div class="col-lg-5 py-0">
                                            <div class=" shadow-2-strong" id="form" style="border-radius: 1rem; background-color:tomato;">
                                                <div class="card-body  text-center">
                                                
                                                <h4 class="" style="color:#16225c;">Vérifiez l'authenticité de votre Auto-Pass!</h4><br>
                                                
                                                <form method="POST" action="index.php?action=verifique">
                                                        <div class="form-outline py-2 mb-4">
                                                        <input type="text" placeholder="                          XX - XXX - XX"  name="immatriculation" class="form-control form-control-lg " required /><br>
                                                            
                                                        </div>

                                                        <button class="btn btn-success btn-lg btn-block py-1"  type="submit" name="valide">Vérifiez l’authenticité</button>
                                                </form>

                                                </div>
                                            </div>
                                    </div>
                    </div>
            </div>
</section>
<!-- fin section-->
<section class="py-5"style="background-image: url('public/img/fondo5.jpg');  height: 100vh;background-size: cover;background-repeat: no-repeat; margin: 0;" > 
                <div class="container px-5 my-5 text-bold">
                    <div class="row gx-5 justify-content-center">
                        <div class="col-lg-8 col-xl-7">
                            <div class="text-center">
                                        <div class="fs-4 mb-4 fst-italic">
                                            <h3>Professionnel?</h3>
                                            <a href="index.php?action=login"><button class="btn btn-danger ">Connexion à l’espace professionnel</button></a>
                                            <br> 
                                            <p>Garages, carrossiers, fast fitters, centrales de pneus, contrôle technique... 
                                                Tout professionel qui effectue une intervention sur une voiture ou une
                                                camionnette est tenu d’en transmettre le kilométrage.
                                                </p>
                                                </a>
                                            </div>
                                            
                                        <div class="d-flex align-items-center justify-content-center">
                                            <img class="rounded-circle me-3" src="public/img/banner1.jpg" />
                                        </div>
                                    <div class="d-flex align-items-center justify-content-center"> 
                                       
                                         
                                    </div> 
                                       
                                </div>
                              
                                    
                            </div>
                        </div>
                    </div>
                </div>
 </section>

 <section class="py-0 " style="background-color: #e3e3e3;" >
        <div class="container-fluid  py-5 px-5 my-0" id="cont1"  style="background-color: tomato;" >
                <div class="row gx-5  text-center text-dark">

                <div class="col-lg-3 py-3">
                        <!-- aqui comienza el contenido -->
                        <h3 class="fw-bolder">Pas reçu le Auto-Pass : quels sont vos droits?</h3>
                        <p class="lead fw-normal text-light mb-0">
                        Auto-Pass est un document obligatoire! La législation prévoit qu'un
                        acheteur privé qui n'a pas reçu de Auto-Pass peut demander la résolution du contrat de vente.
                        S’il s’adresse au juge à cet effet, ce dernier devra prononcer la résolution du contrat.
                        L’achat devra donc être considéré comme inexistant et la somme d’achat devra être restituée.</p>
                       
                    </div>

                    <div class="col-lg-3 py-3">
                        <h3 class="fw-bolder"> Puis-je vérifier l’authenticité d’un Auto-Pass?</h3>
                        <p class="lead fw-normal text-light mb-0">Le Auto-Pass est imprimé sur un papier spécial contenant entre autres un hologramme&nbsp;pour exclure la falsification et la fraude.
                        Doutez-vous encore l'authenticité du document ou des kilométrages ? Alors scannez le code QR ou introduisez le n° d'identification&nbsp;
                        <a href="#popup-form" target="_blank">ici</a>
                        . Les données imprimées sur le Auto-Pass doivent correspondre à ce qui apparait à l'écran. Si ce n'est pas le cas ou si vous obtenez un message d'erreur, 
                        le Auto-Pass est probablement faux ou depuis longtemps périmé.</p>
                    </div>

                    <div class="col-lg-3 py-3">
                        <h3 class="fw-bolder">D’où viennent les données figurant sur un Auto-Pass?</h3>
                        <p class="lead fw-normal text-light mb-0">Lorsqu’un professionnel, p. ex. un garage, une centrale de pneus ou une station du contrôle technique, exécute 
                        des travaux sur votre véhicule, il relève le compteur kilométrique. Il transmet ensuite cette information ainsi que la date des travaux
                        et le numéro de châssis du véhicule à l’asbl Auto-Pass. Par ailleurs, vous retrouverez également ces données sur la facture du garage 
                        ou sur le certificat de visite du contrôle technique.</p>
                        </div>
                    <div class="col-lg-3 py-3">
                        
                        <h3 class="fw-bolder"> Lorsqu’un professionnel</h3> 
                        <p class="lead fw-normal text-light mb-0">p. ex. un garage, une centrale de pneus ou une station du contrôle technique, exécute 
                            des travaux sur votre véhicule, il relève le compteur kilométrique. Il transmet ensuite cette information ainsi que la date des travaux
                            et le numéro de châssis du véhicule à l’asbl Auto-Pass. Par ailleurs, vous retrouverez également ces données sur la facture du garage 
                            ou sur le certificat de visite du contrôle technique.</p>
                    </div>



                        <h4 class="fw-dark">Toujours pas trouvé votre réponse?<h4>
                        <style> .btnA{ 
                            pointer-events: auto;
                            text-decoration:none;
                            color:#16225c}</style>
                        <div class="buttons">
                            <a href="" id="btnA" class="btnA">Toutes les questions &amp; réponses</a>
                            <a href="" id="btnA" class="btnA">Contactez-nous</a>
                        </div>
                        <!-- fin del contenido -->
                    </div>
                </div>
            </div>
</section>

<?php require_once ("views/footer.php");?>

