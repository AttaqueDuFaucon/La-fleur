<div id="modification">
<div class="container" >
<form action="index.php?uc=administrer&action=Creation"  method="POST" >

	<input type="hidden" size="40" name="categorie" value="<?php echo $categorie ;?>" >

        <center>ID : <input type="text" id="inputEmail" class="form-control" style="width : 200px;" name="id" value=""></center>
		</br>
        <center>Description : <input type="text" id="inputPassword" class="form-control" style="width : 200px;" name="description" value=""></center>
		</br>
		<center>Prix : <input type="text" id="inputEmail" class="form-control" style="width : 200px;" name="prix" value=""></center>
		</br>
        <center>Image src : <input type="text" id="inputPassword" class="form-control" style="width : 200px;" name="image" value=""></center>
		</br>
        <center><button class="btn btn-lg btn-primary btn-block" type="submit" style="width : 200px;">Enregistrer</button>
		<button class="btn btn-lg btn-primary btn-block" type="reset" style="width : 200px;">Annuler</button></center>
      </form>

    </div> <!-- /container -->
</div>