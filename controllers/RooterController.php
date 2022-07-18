<?php 
use PROJET_CARPASS\MainController\MainController;
require('./controllers/MainController.php');
require('./models/connexion.php');



if (isset($_GET['action'])) {


	if ($_GET['action']=='accueil')
	{
		$headerActive = 'accueil';
		MainController::viewPage('./views/accueil.php');
	}
	elseif($_GET['action']=='nouvelles')
	{
		$headerActive = 'nouvelles';
		MainController::viewPage('./views/nouvelles.php');
	}
	elseif($_GET['action']=='funCup')
	{
		$headerActive = 'accueil';
		MainController::viewPage('./views/funCup.php');
	}
	elseif($_GET['action']=='faq')
	{
		$headerActive = 'faq';
		MainController::viewPage('./views/faq.php');
	}
	elseif($_GET['action']=='contact')
	{
		$headerActive = 'contact';
		MainController::viewPage('./views/contact.php');
	}
	elseif($_GET['action']=='login')
	{
		$headerActive = 'login';
		MainController::viewPage('./views/viewAdmin/accesPro.php');
	}
	elseif($_GET['action']=='authenClient')
	{
		$headerActive = 'authenClient';
		MainController::viewPage('./views/viewClient/authentificationClient.php');
	}
	elseif($_GET['action']=='inscription')
	{
		$headerActive = 'inscription';
		MainController::viewPage('./views/viewClient/inscription.php');
	}
	elseif($_GET['action']=='oubliMdp')
	{
		
		MainController::viewPage('./views/viewClient/oubliMdp.php');
	}
	elseif($_GET['action']=='resetMdp')
	{
		MainController::viewPage('./models/resetMdp.php');
	}
	elseif($_GET['action']=='dashboardPartenaire')
	{
		MainController::viewPage('./views/viewPartenaire/dashboardPartenaire.php');
	}
	elseif($_GET['action']=='dashboardAdmin')
	{
		MainController::viewPage('./views/viewAdmin/dashboardAdmin.php');
	}
	
	elseif($_GET['action']=='gestion')
	{
		$footerActive = 'gestion';
		MainController::viewPage('./views/gestion.php');
	}
	elseif($_GET['action']=='dashboardClient')
	{
		MainController::viewPage('./views/viewClient/dashboardClient.php');
	}
	
	elseif($_GET['action']=='logout')
	{
		MainController::viewPage('./views/logout.php');
	}elseif($_GET['action']=='loginClient')
	{
		MainController::viewPage('./models/login.php');
	}elseif($_GET['action']=='dashboardInscription')
	{
		MainController::viewPage('./views/viewClient/dashboardInscription.php');
	}
	elseif($_GET['action']=='InscriptionValid')
	{
		MainController::viewPage('./models/ajoutClient.php');
	}
	elseif($_GET['action']=='resetPass')
	{
		MainController::viewPage('./models/resetPass.php');
	}
	elseif($_GET['action']=='vendreOcasion')
	{
		
		MainController::viewPage('./views/vendreOcasion.php');
	}
	elseif($_GET['action']=='acheterOcasion')
	{
		MainController::viewPage('./views/acheterOcasion.php');
	}
	elseif($_GET['action']=='carmeter')
	{
		MainController::viewPage('./views/carmeter.php');
	}
	elseif($_GET['action']=='professionnel')
	{
		MainController::viewPage('./views/professionnel.php');
	}
	elseif($_GET['action']=='ajoutVehicule')
	{
		MainController::viewPage('./views/viewClient/ajoutVehicule.php');
	}
	elseif($_GET['action']=='enregistrerVehicule')
	{
		MainController::viewPage('./models/ajouteVehicule.php');
	}
	elseif($_GET['action']=='validVehicule')
	{
		MainController::viewPage('./views/viewClient/validVehicule.php');
	}elseif($_GET['action']=='pdf')
	{
		MainController::viewPage('./models/pdf.php');
	}
	elseif($_GET['action']=='mettrejourVehicule')
	{
		MainController::viewPage('./views/viewClient/mettrejourVehicule.php');
	}
	elseif($_GET['action']=='updateVehicule')
	{
		MainController::viewPage('./models/updateVehicule.php');
	}
     elseif($_GET['action']=='validmdp')
	{
		MainController::viewPage('./views/viewclient/validmdp.php');
	}
	elseif($_GET['action']=='codeQr')
	{
		MainController::viewPage('./models/codeQr.php');
	}
	elseif($_GET['action']=='validQr')
	{
		MainController::viewPage('./views/viewClient/validQr.php');
	}elseif($_GET['action']=='verifique')
	{
		MainController::viewPage('./models/verifieClient.php');
	}elseif($_GET['action']=='accueilClient')
	{
		MainController::viewPage('./views/viewClient/accueilClient.php');
	}elseif($_GET['action']=='updateValid')
	{
		MainController::viewPage('./views/viewClient/updateValid.php');
	}elseif($_GET['action']=='validContact')
	{
		MainController::viewPage('./models/validContact.php');
	}
	else {
        $headerActive = 'accueil';
        MainController::viewPage('./views/accueil.php');
    }
	


}else {
	$headerActive = 'accueil';
	MainController::viewPage('./views/accueil.php');
}

 ?>