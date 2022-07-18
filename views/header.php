<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenue a Carmeter</title>
    <link rel="icon" type="image/gif" href="public/img/fotobody.png"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="public/style/fontawesome/css/all.css">
    <link rel="stylesheet" href="public/style/css/styles.css">
    <link rel="stylesheet" type="text/css" href="public/style/alertify/css/alertify.css">
    <link rel="stylesheet" type="text/css" href="public/style/css/themes/default.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body >
<?php
ob_start();
session_start();

if(isset($_SESSION['role'])== 'Admin' || isset($_SESSION['role'])== 'Partenaire'   || isset($_SESSION['numero_de_plaque'])== 'numero_de_plaque' ) {

  ?>



   <section >
            <div class="container px-0">
                <!--primer navbar para cliente admin o partenaire -->     
                <nav class="navbar navbar-expand-lg  navbar-dark" style=" height:135px;">
                    <div class="container px-0">
                        <button class="navbar-toggler bg-dark" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                                <li class="nav-item <?php global $headerActive; if ($_GET['action']=='accueil') : ?> active <?php endif ?>">   <a class="nav-link " id="a1" href="index.php?action=accueil"><i class="fas fa-home " ></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ACCUEIL</a></li>&nbsp;&nbsp;&nbsp;&nbsp;
                                <li class="nav-item <?php global $headerActive; if ($_GET['action']=='nouvelles') : ?> active <?php endif ?>">  <a class="nav-link" id="a2" href="index.php?action=nouvelles">NOUVELLES</a></li>&nbsp;&nbsp;&nbsp;&nbsp;
                                <li class="nav-item <?php global $headerActive; if ($_GET['action']=='faq') : ?> active <?php endif ?>">  <a class="nav-link" id="a3" href="index.php?action=faq">FAQ   </a></li>&nbsp;&nbsp;&nbsp;&nbsp;
                                <li class="nav-item <?php global $headerActive; if ($_GET['action']=='contact') : ?> active <?php endif ?>">   <a class="nav-link" id="a4" href="index.php?action=contact">CONTACT</a></li>&nbsp;&nbsp;&nbsp;&nbsp;
                                    <?php if(isset($_SESSION['numero_de_plaque'])== 'numero_de_plaque'){?>
                                        <li class="nav-item"><a class="nav-link" style="position:relative; bottom:8px;" id="a5" href="index.php?action=dashboardClient"><i class="fas fa-user-circle fa-2x"></i>&nbsp;&nbsp;&nbsp;&nbsp;Espace Client</a></li>&nbsp;&nbsp;&nbsp;&nbsp;
                                        <?php } ?>
                                        <?php if(isset($_SESSION['role'])== 'Partenaire' && (isset($_SESSION['role'])== 'Admin')){?>
                                        <li class="nav-item"><a class="nav-link text-dark"  href="index.php?action=dashboardAdmin"><i class="fas fa-user-circle fa-2x"></i>&nbsp;Espace Pofessionnel</a></li>&nbsp;&nbsp;&nbsp;&nbsp;
                                        <?php } ?>
                                        <li class="nav-item"><a class="nav-link"  style="position:relative; bottom:8px;"  id="a6" href="index.php?action=logout"><i class="fas fa-sign-out-alt fa-2x" style="background-color:;"></i>&nbsp;Déconnexion</a></li>
                                </ul>
                            </div>
                    </div>   
                </nav>
            </div>
 </section>
 <section style="background-image: url('public/img/fondoHeader1.jpg');  background-size: cover;">
            <div class="container px-5" >
                <!--segundo navbar para cliente admin o partenaire -->
                <nav class="menu navbar navbar-expand-lg  " >
                    <div class="container px-0"> 
                    <!--icono -->

                        
                    <img alt="logo a ajouter" style="width:160px; height:120px; position:relative; bottom:150px; left:22px;" src="public/img/fotobody.png"  class="img-fluid">
                        <!--fin icono -->                       
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent"  style="position: relative; right:140px; height:100px;">

                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0" id="ul">
                        
                            <li class="nav-item" id="li1"> <a class="nav-link text-light" id="a"  href="index.php?action=carmeter">TOUT SUR AUTO-PASS</a></li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <li class="nav-item" id="li2"><a class="nav-link text-light" id="a"  href="index.php?action=acheterOcasion"> ACHETER UNE OCASION</button></a></li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <li class="nav-item" id="li3"> <a class="nav-link text-light" id="a"  href="index.php?action=vendreOcasion">VENDRE UNE OCASION</a></li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <li class="nav-item" id="li4"><a class="nav-link text-light" id="a"  href="index.php?action=professionnel">PROFESSIONNEL</a></li>
                        </ul>
                    </div>
                </div>
                </nav>
              
                <nav class="navbar navbar-expand-lg navbar-dark " style="height:8px; background-color: tomato; ">
                    
                </nav>
            </div>
      </div>
</section>
<?php } 

   else{ ?>
 <!-- ---------------------------------------------------------------------------------------------------------------------------------------------------------------------------- ----------->

 <!-- navbar pour le public -->
 <section >
            <div class="container px-5">
                    <!--primer navbar para cliente admin o partenaire -->     
                    <nav class="navbar navbar-expand-lg  navbar-dark" style=" height:135px;">
                            <div class="container px-0">
                        
                            
                                <button class="navbar-toggler bg-dark" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                                    <div class="collapse navbar-collapse" id="navbarSupportedContent" >
                                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                                    <li class="nav-item <?php global $headerActive; if ($_GET['action']=='accueil') : ?> active <?php endif ?>">   <a class="nav-link " id="a1" href="index.php?action=accueil"><i class="fas fa-home " ></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ACCUEIL</a></li>&nbsp;&nbsp;&nbsp;&nbsp;
                                        <li class="nav-item <?php global $headerActive; if ($_GET['action']=='nouvelles') : ?> active <?php endif ?>">  <a class="nav-link" id="a2" href="index.php?action=nouvelles">NOUVELLES</a></li>&nbsp;&nbsp;&nbsp;&nbsp;
                                        <li class="nav-item <?php global $headerActive; if ($_GET['action']=='faq') : ?> active <?php endif ?>">  <a class="nav-link" id="a3" href="index.php?action=faq">FAQ   </a></li>&nbsp;&nbsp;&nbsp;&nbsp;
                                        <li class="nav-item <?php global $headerActive; if ($_GET['action']=='contact') : ?> active <?php endif ?>">   <a class="nav-link" id="a4" href="index.php?action=contact">CONTACT</a></li>&nbsp;&nbsp;&nbsp;&nbsp;
                                        <li class="nav-item ">  <a class="nav-link " href="index.php?action=login">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        <button  class="btn btn-danger " style="position: relative; ">Connexion professionnel</button></a></li>
                                        <li class="nav-item">  <a class="nav-link " href="index.php?action=authenClient">&nbsp;&nbsp;&nbsp;
                                        <button  class="btn  text-light" style="position: relative; background-color:#fa9957;  ">Connexion client</button></a></li>
                                    </ul>
                                </div>
                        </div>
                    </nav>
            </div>
</section>
<section style="background-image: url('public/img/fondoHeader1.jpg');  background-size: cover;">
            <div class="container px-5">
                <!--segundo navbar para cliente admin o partenaire -->
                <nav class="menu navbar navbar-expand-lg ">
                    <div class="container px-0"> 
                        <!--icono -->
                    
                        
                        <img alt="logo a ajouter" style="width:160px; height:120px; position:relative; bottom:150px; left:22px;" src="public/img/fotobody.png"  class="img-fluid">
                        <!--fin icono -->                       
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent"  style="position: relative; right:140px; height:100px;">

                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0" id="ul">
                            
                                <li class="nav-item" id="li1"> <a class="nav-link text-light" id="a"  href="index.php?action=carmeter">TOUT SUR AUTO-PASS</a></li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <li class="nav-item" id="li2"><a class="nav-link text-light" id="a"  href="index.php?action=acheterOcasion"> ACHETER UNE OCASION</button></a></li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <li class="nav-item" id="li3"> <a class="nav-link text-light" id="a"  href="index.php?action=vendreOcasion">VENDRE UNE OCASION</a></li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <li class="nav-item" id="li4"><a class="nav-link text-light" id="a"  href="index.php?action=professionnel">PROFESSIONNEL</a></li>
                            </ul>
                        </div>
                    </div>
                </nav>
         
                <nav class="navbar navbar-expand-lg navbar-dark " style="height:8px; background-color: tomato; ">
                    
                </nav>
            </div>
</section>  
<?php }?>


 
<style>
#a1, #a2, #a3, #a4, #a5, #a6
{
   color:#0c0d0d;
   font-family: Arial, Helvetica, sans-serif;
   font-size: 18px;
}
.menu ul li a{
    
    font-size: 18px;
    color: #e6e7e8;
    font-family: Arial, Helvetica, sans-serif;
}

a:hover{
    color: tomato !important;
    transform: translateX(3px);
    transition: .2s ease;
    transform: scale(1.1);
    transition: .2s;
        z-index: 1000;
    
}
#a{
    font-style:  oblique;
    font-family: Impact,  sans-serif;
    font-size: 24px;
    color:#030101;

   
    
}
#a:hover{
    
    color: tomato !important;
    transform: translateX(3px);
    transition: .2s ease;
    transform: scale(1.1);
    transition: .2s;
        z-index: 1000;
    
}


.dropdown-item:hover
{
    color: #9D6B53 !important;
    transform: translateX(3px) !important;
    transition: .2s ease !important;
    background-color: #E6CCB2 !important;
}

.active a
{
    color: tomato !important;
}


#ul {
margin: 20px;
padding: 0;
list-style-type: decimal;
transition: all 1s;
list-style: none;
}

#li1 #li2 #li3 #li4  {
line-height: 1.6;
background: ;
margin: 0 0 10px 0;
padding: 4px 8px;
transition: all 1s;

}

        


</style>
  
        

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <script src="public/style/js/app.js"></script>
        <script src="public/style/js/jquery-3.6.0.min.js"></script>
        <script src="public/style/alertify/alertify.js"></script>

    </body>

</html>

