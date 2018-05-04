<?php
session_start();
try

{

  $bdd = new PDO('mysql:host=localhost;dbname=projet_piscine_bdd;charset=utf8', 'root', '');

}

catch (Exception $e)

{

        die('Erreur : ' . $e->getMessage());

}
$i=0;
$idAuteur=$_SESSION['id_auteur'];
$requeterecherche="SELECT * FROM `ami` WHERE `ami`.`id_auteur1`='$idAuteur';"; 
// On récupère tout le contenu de la table auteur selon la recherche de l'utilisateur
$sqlrecherche=$bdd->query($requeterecherche);
while ($donnees = $sqlrecherche->fetch())
{
	
	$i=$i+1;
	$idAmi=$donnees['id_auteur2'];
	$requeterecherche2="SELECT * FROM `auteur` WHERE `auteur`.`id_auteur`='$idAmi';";
// On récupère tout le contenu de la table auteur selon la recherche de l'utilisateur
$sqlrecherche2=$bdd->query($requeterecherche2);
while ($donnees2 = $sqlrecherche2->fetch())
{
?>

    <p>
    <?php echo $donnees2['prenom']; ?>  <?php echo $donnees2['nom']; ?><br />
   </p>
	   
	  
   
	
	
<?php
}
}

if($i==0)
{
	echo "pas d'ami";
}
$sqlrecherche->closeCursor(); // Termine le traitement de la requête
	
?>
