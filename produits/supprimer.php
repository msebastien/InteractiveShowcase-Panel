<?php
if(isset($_POST['btnSupprimer']))
{
	try
	{
    $bdd = new PDO('mysql:host=localhost;dbname=vitrine_produits;charset=utf8', 'root', '');

	$id = $_POST['id'];
	$bdd->exec('DELETE FROM produits WHERE id=\''.$_POST['id'].'\'');

					
	echo 'Le produit a été supprimé';

	
	}                    
	catch (Exception $e)
	{
                        //on annule la transation
						$reponse->rollback();

						//on affiche un message d'erreur ainsi que les erreurs
						echo 'Tout ne s\'est pas bien passé, voir les erreurs ci-dessous<br />';
						echo 'Erreur : '.$e->getMessage().'<br />';
						echo 'N° : '.$e->getCode();

						//on arrête l'exécution s'il y a du code après
						exit();
	}
}else{
	echo 'Le formulaire n\'a pas été validé';
}

header('Location: inventaire.php');
?>