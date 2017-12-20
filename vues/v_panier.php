<div class="container">

<?php
$AAA = null;
$pt = null;
foreach( $lesProduitsDuPanier as $unProduit) 
{
	$id = $unProduit['id'];
	$description = $unProduit['description'];
	$image = $unProduit['image'];
	$prix = $unProduit['prix'];
	$quantite = $_SESSION[$id];
	?>
	
	<p>
	<img src="<?php echo $image ?>" alt=image width=100	height=100 />
	<?php
		echo $description."($prix Euros)"." Quantite : " . $quantite." (".$prix*$quantite."€)";
		
		
		$pt += $prix*$_SESSION[$id];

		 $AAA += $_SESSION[$id] * 10;
	?>	
	<a href="index.php?uc=gestionPanier&produit=<?php echo $id ?>&action=supprimerUnProduit">
	<img src="images/retirerpanier.png" TITLE="Retirer du panier" ></a>
	
	
	</p>
	
	<?php
}
		
		
		if(nbProduitsDuPanier() > 0)
		{
		 
		 echo "Vous allez payer au total $pt €";
		?>
		</br>
		</br>
		</br>
		
		
		<div class="col-sm-4">
          <div class="list-group">
            <a class="list-group-item active">
              Menu
            </a>
            <a href="index.php?uc=gestionPanier&action=passerCommande" class="list-group-item">Commander</a>
            <a href="index.php?uc=gestionPanier&action=viderpannier" class="list-group-item">Vider le panier</a>
          </div>
        </div>
		<p> Panier <?php if($AAA < 40) echo "léger"; else if($AAA > 70) echo "chargé"; else echo "moyen"?> <p>
		<div class="progress">
        <div class="progress-bar progress-bar-success" style="width: <?php if ($AAA < 40)echo $AAA; else echo 40;?>%"><span class="sr-only"></span></div>
        <div class="progress-bar progress-bar-warning" style="width: <?php if ($AAA < 70)echo $AAA-40; else echo 30;?>%"><span class="sr-only"></span></div>
        <div class="progress-bar progress-bar-danger" style="width: <?php if ($AAA < 100)echo $AAA-70; else echo 30;?>%"><span class="sr-only"></span></div>
      </div>
		<?php } 
		else
			echo "panier vide !!";
		?>

</div>