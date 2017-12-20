


<?php

foreach($lesCategories as $uneCategorie) 
{
	$idCategorie = $uneCategorie['id'];
	$libCategorie = $uneCategorie['libelle'];
	?>
			<?php if (!isset($_SESSION['nom'])) { ?><li><a  href=index.php?uc=voirProduits&categorie=<?php echo $idCategorie ?>&action=voirProduits><?php echo $libCategorie ?></a></li><?php } ?>
			<?php if (isset($_SESSION['nom'])) { ?><li><a  href=index.php?uc=administrer&categorie=<?php echo $idCategorie ?>&action=voirProduits><?php echo $libCategorie ?></a></li><?php } ?>
  <!--<a  href=index.php?uc=voirProduits&categorie=<?php echo $idCategorie ?>&action=voirProduits><button type="button" class="btn btn-sm btn-primary"><?php echo $libCategorie ?></button></a>-->
	
	
<?php
}

?>
			