
<center><img src="images/lafleur.gif" alt="Lafleur" title="Lafleur"/></center>

<!--  Menu haut-->
<div class="navbar-wrapper">
      <div class="container">
	<!--<li><a href="index.php?uc=accueil"> Accueil </a></li>
	<li><a href="index.php?uc=voirProduits&action=voirCategories"> Voir le catalogue de fleurs </a></li>
	<li><a href="index.php?uc=gererPanier&action=voirPanier"> Voir son panier </a></li>
	<li><a href="index.php?uc=administrer"> Administrer </a></li>-->
	<nav class="navbar navbar-inverse">
	 <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
				</div>
				<div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
			<?php if (!isset($_SESSION['nom'])) { ?>
			<li class="active"><a href="index.php?uc=accueil">Accueil</a></li><?php } ?>
			
			
			 <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown">Voir le catalogue de fleurs<span class="caret"></span></a>
			<ul class="dropdown-menu">
        <?php $pdo = PdoLafleur::getPdoLafleur(); $lesCategories = $pdo->getLesCategories(); 
		include("vues/v_categories.php"); ?>
        	</ul>
              </li>
			
              <?php if (!isset($_SESSION['nom'])) { ?>
			  <li><a href="index.php?uc=gestionPanier&action=voirPanier">Voir mon panier</a></li><?php } ?>
			  
			  
              <?php if (!isset($_SESSION['nom'])) { ?>
			  <li><a href="index.php?uc=administrer&action=connexion">Administrer</a></li><?php } ?>
			  
			  <?php  if (isset($_SESSION['nom'])) { ?> 
			  <li><a href="index.php?uc=administrer&action=deconnecter">Deconnecter</a></li><?php } ?>
			  
            
            </ul>
          </div>
        </div> 
    </nav>

	

 
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#caro usel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <center><img src="images/fleurs/grenadines.gif" alt=""></center>
      <div class="carousel-caption">
	  
      </div>
    </div>
	
    <div class="item">
     <center><img src="images/fleurs/comores.gif" alt=""></center>
      <div class="carousel-caption">
	  
      </div>
    </div>
	
	<div class="item">
     <center><img src="images/fleurs/pakopoka.gif" alt=""></center>
      <div class="carousel-caption">
	  
      </div>
    </div>
	
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
  </br>
</div>  
  </div>
</div>

<!--<div id="bandeau"> -->
<!-- Images En-tête -->
<!--<img src="images/menuGauche.gif"	alt="Choisir" title="Choisir"/>-->
<!--</div>-->

			
			
			
			
                <!--<a class="navbar-brand" href="index.php?uc=accueil">Accueil</a>
            </div>
			 <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li><a href="index.php?uc=voirProduits&action=voirCategories">Voir le catalogue de fleurs</a>
				
					
                    <li><a href="index.php?uc=gererPanier&action=voirPanier">Voir mon panier</a></li>

					<li><a href="index.php?uc=administrer">Administrer</a></li>
				</ul>
			</div>
	</nav>-->

