<?php
require_once("include/fct.inc.php");
require_once ("include/modele.inc.php");
include("vues/v_entete.php") ;
session_start();
$pdo = PdoGsb::getPdoGsb();
<<<<<<< HEAD
if(!isset($_REQUEST['uc']) && (!isset($_SESSION['login']))){
=======
if(!isset($_REQUEST['uc']) || (!isset($_SESSION['login']))){
>>>>>>> 032457b7d4024ede94004110e26e376a80a51558
     $_REQUEST['uc'] = 'connexion';
}else if (!isset($_REQUEST['uc']) && (isset($_SESSION['login']))){
    $_REQUEST['uc']= 'accueil';
}	

$uc = $_REQUEST['uc'];

switch($uc){
	case 'connexion':{
		include("controleurs/c_connexion.php");break;
	}
<<<<<<< HEAD
	case 'accueil' :{
		include("vues/v_accueil.php"); 
                include("vues/v_sommaire.php");
        }
        case 'gererCR' :{
		include("controleurs/c_gererCR.php");break;
=======
	case 'consulterMedicaments' :{
		include("controleurs/c_consulterMedicaments.php");break;
	}
	case 'etatFrais' :{
		include("controleurs/c_etatFrais.php");break; 
>>>>>>> 032457b7d4024ede94004110e26e376a80a51558
	}
          break;
      
}
include("vues/v_pied.php") ;
/*
 * Coucou 
 */
<<<<<<< HEAD
=======

//1236478
?>
>>>>>>> 032457b7d4024ede94004110e26e376a80a51558

//1236478
?>
