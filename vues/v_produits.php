<div class="container">
<?php
	
	foreach($lesProduits as $unProduit) 
{
	$id = $unProduit['id'];
	$description = $unProduit['description'];
	$prix=$unProduit['prix'];
	$image = $unProduit['image'];

	?>	
	
			<div class="col-lg-4" style="width:200px;height:250px;">
		    <img src="<?php echo $image ;?>" alt="image" style="width:150px;height:160px" /></br>
			<?php echo $description ;?><?php echo " : ".$prix." Euros" ;?>
			<a href="index.php?uc=voirProduits&categorie=<?php echo $categorie ?>&produit=<?php echo $id ;?>&action=ajouterAuPanier"> 
			<img src="images/mettrepanier.png" TITLE="Ajouter au panier"></a>
			</div>
<?php	
}		
?>
</div>