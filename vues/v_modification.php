<div id="modification">
<div class="container" >
<form action="index.php?uc=administrer&action=Modification"  method="POST" >

	<input type="hidden" size="40" name="oldId" value="<?php echo $id ;?>" >
	<!--<center>ID : <input type="text" size="5" name="idd" value="<?php echo $id ;?>"></center>
	<center>Description : <input type="text" size="40" name="descriptionn" value="<?php echo $_GET['description']; ;?>"></center>
	<center>Prix : <input type="text" size="5" name="prixx" value="<?php echo $prix ;?>"></center>
	<center>Image src : <input type="text" size="40" name="imagee" value="<?php echo $image ;?>"></center>
	</br>
	<center><input type="submit" name="save" value="Enregistrer">
	<input type="reset" name="annul" value="Annuler"></center>
	
</form>-->

        <center>ID : <input type="text" id="inputEmail" class="form-control" style="width : 200px;" name="idd" value="<?php echo $id ;?>"></center>
		</br>
        <center>Description : <input type="text" id="inputPassword" class="form-control" style="width : 200px;" name="descriptionn" value="<?php echo $_GET['description']; ;?>"></center>
		</br>
		<center>Prix : <input type="text" id="inputEmail" class="form-control" style="width : 200px;" name="prixx" value="<?php echo $prix ;?>"></center>
		</br>
        <center>Image src : <input type="text" id="inputPassword" class="form-control" style="width : 200px;" name="imagee" value="<?php echo $image ;?>"></center>
		</br>
        <center><button class="btn btn-lg btn-primary btn-block" type="submit" style="width : 200px;">Enregistrer</button>
		<button class="btn btn-lg btn-primary btn-block" type="reset" style="width : 200px;">Annuler</button></center>
      </form>

    </div> <!-- /container -->
</div>