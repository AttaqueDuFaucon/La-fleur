
<?php
$action = $_REQUEST['action'];

switch($action)
{
	case 'validConnexion' :
	{
		
		$user = $_REQUEST['user'];
		$mdp = $_REQUEST['mdp'];
		
		$nb = $pdo->validco($user,$mdp);

		if($nb['nb'] == 0){
			?>
			<script>alert('Erreur !');</script>
			<?php
			include('vues/v_connexion.php');
		}
		else{
			?>
			<script>alert('Bienvenue');</script>
			<?php
			$_SESSION['nom']=$user;
			header('Location: http://localhost/lafleurbug/index.php?uc=accueil');
			?> 
			<script></script>
			<?php
		}
		break;
	}
	
	case 'DemandeCreation' :
	{
		$categorie = $_REQUEST['categorie'];
		include('vues/v_ajouterProduit.php');
		break;
	}
	
	case 'Creation' :
	{
		$categorie = $_REQUEST['categorie'];
		$id = $_REQUEST['id'];
		$description = $_REQUEST['description'];
		$prix = $_REQUEST['prix'];
		$image = $_REQUEST['image'];
		$pdo->creeProduit($id, $description, $prix, $image, $categorie);
		?><script>alert('Creation effectuer');</script><?php
		$lesProduits = $pdo->getLesProduitsDeCategorie($categorie);
		$lesContenirs = $pdo->getLesContenirs();
		include("vues/v_produitsAdm.php");
		break;
	}
	
	case 'DemandeModification' :
	{
		$id = $_REQUEST['id'];
		$descripstion = $_REQUEST['description'];
		$prix = $_REQUEST['prix'];
		$image = $_REQUEST['image'];
		include('vues/v_modification.php');
		break;
	}
	
	case 'Modification' :
	{
		$oldId = $_REQUEST['oldId'];
		$id = $_REQUEST['idd'];
		$description = $_REQUEST['descriptionn'];
		$prix = $_REQUEST['prixx'];
		$image = $_REQUEST['imagee'];
		$pdo->modifierProduit($id, $description, $prix, $image, $oldId);
		?><script>alert('Modification effectuer');</script><?php
		break;
	}
	
	case 'Supprimer' :
	{
		$id = $_REQUEST['id'];
		$categorie = $_REQUEST['categorie'];
		$pdo->supprimerProduit($id);
		$lesProduits = $pdo->getLesProduitsDeCategorie($categorie);
		$lesContenirs = $pdo->getLesContenirs();
		include("vues/v_produitsAdm.php");
		break;
	}
	
	
	case 'voirProduits' :
	{
		$lesCategories = $pdo->getLesCategories();
  		$categorie = $_REQUEST['categorie'];
		$lesProduits = $pdo->getLesProduitsDeCategorie($categorie);
		$lesContenirs = $pdo->getLesContenirs();
		include("vues/v_produitsAdm.php");
		break;
	}
	
	case 'connexion':
	{
		include('vues/v_connexion.php');
		break;
	}
	
	case 'deconnecter':
	{
		session_destroy();
		?><script>alert('Vous êtes déconnecter');</script><?php
		header('Location: http://localhost/lafleurbug/index.php?uc=accueil');
		break;
	}
	
	case 'Accueil':
	{
		include('vues/v_accueil.php');
		break;
	}
}

?>