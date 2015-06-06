<?php
if(isset($_POST['btnAjout']))
{   

    try
   {
    $bdd = new PDO('mysql:host=localhost;dbname=vitrine_produits;charset=utf8', 'root', '');
	$bdd->beginTransaction();
	
	$id = $_POST['idProduit'];
	$nom = $_POST['nomProduit'];
	$categorie = $_POST['catProduit'];
	$description = $_POST['descriptionProduit'];
	$quantite = $_POST['quantiteProduit'];
	$prix = $_POST['prixProduit'];
	$image = $_POST['lienImage'];
	$masse = $_POST['masseProduit'];
	$longueur = $_POST['longueurProduit'];
	$largeur = $_POST['largeurProduit'];
	$hauteur = $_POST['hauteurProduit'];
	$materiaux = $_POST['materiauxProduit'];
	$garantie = $_POST['dureeGarantie'];
	
	
	$req = $bdd->prepare('INSERT INTO produits(id, nom, categorie, description, quantite, prix, image, masse, longueur, largeur, hauteur, materiaux, garantie)' . 'VALUES(:idProduit, :nomProduit, :categorieProduit, :descriptionProduit, :quantiteProduit, :prixProduit, :imageProduit, :masseProduit, :longueurProduit, :largeurProduit, :hauteurProduit, :materiauxProduit, :garantieProduit)');

	$req->execute(array(
		'nomProduit' => $nom,
		'idProduit' => $id,
		'categorieProduit' => $categorie,
		'descriptionProduit' => $description,
		'quantiteProduit' => $quantite,
		'prixProduit' => $prix,
		'imageProduit' => $image,
		'masseProduit' => $masse,
		'longueurProduit' => $longueur,
		'largeurProduit' => $largeur,
		'hauteurProduit' => $hauteur,
		'materiauxProduit' => $materiaux,
		'garantieProduit' => $garantie
			)
		);
	//si jusque là tout se passe bien on valide la transaction
	$bdd->commit();
						
	echo 'Tout s\'est bien passé.';
	
    }
                    
catch (Exception $e)
{
    //on annule la transation
	$bdd->rollback();

	//on affiche un message d'erreur ainsi que les erreurs
	echo 'Tout ne s\'est pas bien passé, voir les erreurs ci-dessous<br />';
	echo 'Erreur : '.$e->getMessage().'<br />';
	echo 'N° : '.$e->getCode();

	//on arrête l'exécution s'il y a du code après
	exit();
}



}
else
{
    echo 'Le formulaire n\'a pas été validé';
}
header('Location: ajout-produit.php');
        /*$fileName = $_FILES["fichier1"]["name"]; // Le nom du fichier
        $fileTmpLoc = $_FILES["fichier1"]["tmp_name"]; // Chemin du fichier
        $fileType = $_FILES["fichier1"]["type"]; // Type de fichier
        $fileSize = $_FILES["fichier1"]["size"]; // Taille du fichier
        $fileErrorMsg = $_FILES["fichier1"]["error"]; // Message d'erreur

        if (!$fileTmpLoc) {
            // Si aucun fichier n'est choisi 
        echo "ERREUR: Veuillez sélectionner un fichier avant de cliquer sur le bouton d'upload"; 
        exit(); 
        }

        if(move_uploaded_file($fileTmpLoc, "../uploads/$fileName")){ 
            echo "L'envoi de " . $fileName . " est terminé"; 
        }
        else{ 
            echo "La fonction move_uploaded_file a échoué"; 
        }*/

?>