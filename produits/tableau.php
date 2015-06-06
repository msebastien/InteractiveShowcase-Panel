<?php
                    try
                    {
                        $bdd = new PDO('mysql:host=localhost;dbname=vitrine_produits;charset=utf8', 'root', '');
						
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
                    
					$bdd->beginTransaction();
						
					$reponse = $bdd->query('SELECT * FROM produits') or die(print_r($bdd->errorInfo()));
		  
            ?>
                    
            <table border="1" class='responsive-table striped'>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nom du produit</th>
                        <th>Catégorie</th>
                        <th>Description</th>
                        <th>Quantité</th>
                        <th>Prix</th>
						<th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
// On affiche chaque entrée une à une
					
                    while ($donnees = $reponse->fetch())
                    { 
                        echo "<tr>";        
                                        echo ("
										<td>". htmlspecialchars($donnees['id']) . "</td>
										<td>" . htmlspecialchars($donnees['nom']) . "</td>
										<td>" . htmlspecialchars($donnees['categorie']) . "</td>
										<td>" . htmlspecialchars($donnees['description']) . "</td>
										<td>" . htmlspecialchars($donnees['quantite']) . "</td>
										<td>" . htmlspecialchars($donnees['prix']) . "</td>
										
										<td>
											<form method='POST' action='../produits/supprimer.php'>
												<input type='hidden' name='id' value='" . $donnees['id'] . "' />
												<button type='submit' name='btnSupprimer' class='btn-floating waves-effect waves-light red'><i class='mdi-content-clear'></i></button>
											</form>
										</td>
										");
                        echo "</tr>";
                                       
                    }
                    ?>           
                </tbody>
            </table>
                    <?php            
                    $reponse->closeCursor(); // Termine le traitement de la requête
               ?>