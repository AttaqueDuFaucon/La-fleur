<?php
session_start();
require_once("util/fonctions.inc.php");
require_once("util/class.pdoLafleur.inc.php");

if(!isset($_REQUEST['uc']))
     $uc = 'accueil';
else
	$uc = $_REQUEST['uc'];

$pdo = PdoLafleur::getPdoLafleur();	 
ob_start();
switch($uc)
{
	case 'accueil':
		{
			include('vues/v_accueil.php');
		break;}
		
	case 'voirProduits' :
		{include("controleurs/c_voirProduits.php");
		break;}
		
	case 'gestionPanier' :
		{ include("controleurs/c_gestionPanier.php");
		break; }
		
	case 'administrer' :
	  { include("controleurs/c_gestionProduits.php");
	  break;  }
}
$contenue = ob_get_clean();

require('vues/v_propre.php') ;
?>

