

<?php
initPanier();
$action = $_REQUEST['action'];
switch($action)
{
	case 'voirCategories':
	{
  		$lesCategories = $pdo->getLesCategories();
		include("vues/v_categories.php");
  		break;
	}
	case 'voirProduits' :
	{
		$lesCategories = $pdo->getLesCategories();
		//include("vues/v_categories.php");
  		$categorie = $_REQUEST['categorie'];
		$lesProduits = $pdo->getLesProduitsDeCategorie($categorie);
		$lesContenirs = $pdo->getLesContenirs();
		include("vues/v_produits.php");
		break;
	}
	case 'ajouterAuPanier' :
	{
		$idProduit=$_REQUEST['produit']; // L'id du produit (ex: string 'c01' (length=3))
		$categorie = $_REQUEST['categorie'];
		$ok = ajouterAuPanier($idProduit);
		$lesCategories = $pdo->getLesCategories();
  		$lesProduits = $pdo->getLesProduitsDeCategorie($categorie);
		include("vues/v_produits.php");
		break;
	}
}
?>

