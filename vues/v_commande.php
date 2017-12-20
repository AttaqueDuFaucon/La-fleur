<div class="container" >
<form method="POST" action="index.php?uc=gererPanier&action=confirmerCommande">
   <fieldset>
     <legend>Commande</legend>
	 <?php //$quantite = $_REQUEST['quantite']; 
			//var_dump($quantite);?>
		<p>
			<label for="nom">Nom Prénom*</label>
			<input id="nom" type="text" name="nom" value="" required size="30" maxlength="45">
		</p>
		<p>
			<label for="rue">rue*</label>
			 <input id="rue" type="text" name="rue" value="" required size="30" maxlength="45">
		</p>
		<p>
         <label for="cp">code postal* </label>
         <input id="cp" type="text" name="cp" value="" size="10" required  maxlength="10">
      </p>
      <p>
         <label for="ville">ville* </label>
         <input id="ville" type="text" name="ville"  value="" required size="5" maxlength="5">
      </p>
      <p>
         <label for="mail">mail* </label>
         <input id="mail" type="text"  name="mail" value="" required size ="25" maxlength="25">
      </p> 
	  	<p>
         <input type="submit" value="Valider" name="valider">
         <input type="reset" value="Annuler" name="annuler"> 
      </p>
</form>
</div>






