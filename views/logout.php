
<?php
if(isset($_SESSION['role'])== 'Admin' || isset($_SESSION['role'])== 'Partenaire'   || isset($_SESSION['numero_de_plaque'])== 'numero_de_plaque' ) {
session_start();
session_unset();
session_destroy();
header("location: index.php?action=accueil");
}
?>