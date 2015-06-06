<!DOCTYPE html>
<html>
    <head>
        <title>Showcase Management - Gérez votre vitrine en toute simplicité</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../css/management.css" />
		<link rel="stylesheet" href="../css/materialize.css" />
    </head>
    <body>
  
        <nav class="light-blue">
			<div class="nav-wrapper">
			<a href="../index.php" class="brand-logo">Interactive <strong>Show</strong>case</a>
				<ul id="nav-mobile" class="right hide-on-med-and-down">
					<li><a href="../index.php"><i class="mdi-action-home"></i></a></li>
					<li><a href="inventaire.php"><i class="mdi-action-assignment"></i></a></li>
					<li><a href="ajout-produit.php"><i class="mdi-action-add-shopping-cart"></i></a></li>
				</ul>
			</div>
        </nav>
			
		<div class="card-panel">
			<div class="page"><span class="blue-text text-darken-2"><h4>Inventaire des produits</h4></span></div>
		</div>

        <div id="conteneur"> <!-- DEBUT du conteneur -->
			<section>
				<?php include("tableau.php"); ?>
			</section>
		</div>    <!-- FIN du conteneur -->
		
		<footer class="page-footer light-blue">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text">Interactive <strong>Show</strong>case</h5>
                <p class="grey-text text-lighten-4">Interactive Showcase vous permet de mettre en place et gérer une vitrine interactive très facilement.</p>
              </div>
              <div class="col l4 offset-l2 s12">
                <h5 class="white-text">Liens</h5>
                <ul>
                  <li><a class="grey-text text-lighten-3" href="#!">Facebook</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Twitter</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Google+</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Instagram</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container">
				&copy 2015 Interactive Showcase - Créé par Maes Sébastien
				<a class="grey-text text-lighten-4 right" href="mailto://nautilissebastien@gmail.com">Contactez-nous</a>
            </div>
          </div>
        </footer>
        
        <script src="../js/jquery.js" type="text/javascript"></script>
		<script src="../js/materialize.js" type="text/javascript"></script>
		<script src="../js/showcase.js" type="text/javascript"></script>
		
    </body>
</html>
