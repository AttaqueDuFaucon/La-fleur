<div id="produits">

      <div class="container">
        <div class="row">
		
		
		<div class="table-responsive">
			<table class="table table-striped">
				<thead>
					<tr>
						<th>Id</th>
						<th>Description</th>
						<th>Prix</th>
						<th>Image</th>
					</tr>
				</thead>
				<tbody>
<?php

	foreach($lesProduits as $unProduit) 
{
	$id = $unProduit['id'];
	$description = $unProduit['description'];
	$prix=$unProduit['prix'];
	$image = $unProduit['image'];

	?>	
					<tr>
						<td><?php echo $id ;?></td>
						<td><?php echo $description ;?></td>
						<td><?php echo $prix ;?></td>
						<td><?php echo $image ;?></td>
						<td><a class="btn btn-default" href="index.php?uc=administrer&action=DemandeModification&id=<?php echo $id ?>&description=<?php echo $description ?>&prix=<?php echo $prix ?>&image=<?php echo $image ?>" role="button">Modifier</a></td>
						<td><a class="btn btn-default" href="index.php?uc=administrer&action=Supprimer&id=<?php echo $id ?>&categorie=<?php echo $categorie ?>" onclick="return confirm('Etes vous sûr de vouloir supprimer ce produit ?')" role="button">Supprimer </a></td>
					</tr>
<?php	} ?>	



 

				</tbody>
			</table>
			<a class="btn btn-default" href="index.php?uc=administrer&action=DemandeCreation&categorie=<?php echo $categorie ?>" role="button">Ajouter un produit de cette catégorie</a>
			</br>
			</br>
			</br>
		</div>
</div>
</div>
</div>