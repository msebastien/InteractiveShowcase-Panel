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
				<div class="page"><span class="blue-text text-darken-2"><h4>Ajouter un produit</h4></span></div>
			</div>
              
            <div id="conteneur">
            <section>
                <div class="row">
				<form method="POST" action="../produits/upload.php" class="col s12">                  
                        <h5>Informations générales</h5>
						<div class="divider"></div><br />
                            <div>
                                <div class="row">
									<div class="input-field col s6">
											<label for="nomProduit">Nom du produit*</label>
											<input type="text" name="nomProduit" id="nomProduit" autofocus required class="validate" />
									</div>
								
									<div class="input-field col s6">
										<select name="catProduit" id="catProduit">
											<option value="" disabled selected>Choisissez une catégorie*</option>
											<option value="Alimentaire">Alimentaire</option>
											<option value="Bricolage">Bricolage</option>
											<option value="Informatique">Informatique</option>
											<option value="Jeux video">Jeux vidéo</option>
											<option value="Electromenager">Électroménager</option>
											<option value="Sport">Sport</option>
											<option value="Mode">Mode</option>
											<option value="Accessoires">Accessoires</option>
											<option value="Divers">Divers</option>
										</select>	
									</div>
                                </div>
								
								<div class="row">
									<label for="idProduit">Identifiant*</label>
									<p class="range-field">
										<input type="range" name="idProduit" id="idProduit" value="0" min="0" max="1000" required class="validate" />
									</p>
                                </div>
								
								<div class="row">
									<label for="quantiteProduit">Quantité*</label>
									<p class="range-field">
										<input type="range" name="quantiteProduit" id="quantiteProduit" value="0" min="0" max="250" required class="validate"/>
									</p>
                                </div>
								
								<div class="row"> 
									<div class="input-field col s6">
										<label for="prixProduit">Prix <em>(en €)</em>*</label>
										<input type="text" name="prixProduit" id="prixProduit" required class="validate"/>
									</div>
									<div class="input-field col s6">
										<label for="imageProduit">URL de l'image</label>               
										<input type="text" name="lienImage" value="" id ="imageProduit" class="validate"/>
									</div>
								</div>
								
								<div class="row">
									<div class="input-field col s12">
										<i class="mdi-editor-mode-edit prefix"></i>
										<label for="descriptionProduit">Description brève*</label>
										<textarea name="descriptionProduit" id="descriptionProduit" length="150" maxlength="150" rows="4" cols="30" required class="materialize-textarea"></textarea>
									</div>
								</div>
                            </div>
                    
					<div>
                        <h5>Informations techniques</h5>
						<div class="divider"></div><br />
                            <div>
                                <div class="row">
								<label for="masseProduit">Masse <em>(en g)</em></label> :
                                <input type="number" name="masseProduit" id="masseProduit" min="0" max="99999" step="0.1"/>
								</div>
                                
								<div class="row">
									<label for="longueurProduit">Dimensions <em>(en mm)</em></label><br />
									<div class="input-field col s4">
										<input type="number" name="longueurProduit" placeholder="Longueur" id="dimensionsProduit" min="0" max="99999" step="0.1" />
									</div>
									<div class="input-field col s4">
										<input type="number" name="largeurProduit" placeholder="Largeur" id="dimensionsProduit" min="0" max="99999" step="0.1" />
									</div>
									<div class="input-field col s4">
										<input type="number" name="hauteurProduit" placeholder="Hauteur" id="dimensionsProduit" min="0" max="99999" step="0.1" />
									</div>
                                </div>
								
								<div class="row">
									<label for="materiauxProduit">Matériaux constituants</label>
									<input type="text" name="materiauxProduit" placeholder="Par exemple, Aluminium" id="materiauxProduit" />
								</div>
                            </div>
                    <div>
                        <h5>Garantie</h5>
                        <div class="divider"></div><br />
						<div class="garantie">
						<label for="dureeGarantie">Sélectionnez la durée de la garantie*</label>
                            <select name="dureeGarantie" id="dureeGarantie">
                                <option value="2">2 ans</option>
                                <option value="3">3 ans</option>
                                <option value="5">5 ans</option>
                                <option value="7">7 ans</option>
                            </select>
						</div>
                    </div>        
                <div class="boutons">
					<button type="submit" value="Ajouter ce produit" class="btn waves-effect waves-light blue" name="btnAjout"><i class="mdi-content-add left"></i>Ajouter ce produit</button>
					<button type="reset" value="Réinitialiser" class="waves-effect waves-light btn-flat" name="btnReset">Réinitialiser</button>
				</div>
                </form>
				
            </section>
            </div>
            
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
        
        </div>
    </body>
</html>