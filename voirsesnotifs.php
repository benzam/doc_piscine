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
$requeterecherchenotif="SELECT * FROM `notification` WHERE `notification`.`id_auteur`='$idAuteur';"; 
// On récupère tout le contenu de la table notification selon la recherche de l'utilisateur
$sqlrecherchenotif=$bdd->query($requeterecherchenotif);
while ($donnees = $sqlrecherchenotif->fetch())
{
	
	$i=$i+1;
	$idNotif=$donnees['id_notif'];
	$requeterecherchenotif2="SELECT * FROM `notification` WHERE `notification`.`id_notif`='$idNotif';";
// On récupère tout le contenu de la table auteur selon la recherche de l'utilisateur
$sqlrecherchenotif2=$bdd->query($requeterecherchenotif2);
while ($donnees2 = $sqlrecherchenotif2->fetch())
{
?>

    <p>
    <?php echo $donnees2['contenu_notif']; ?> le <?php echo $donnees2['date_notif']; ?><br />
   </p>
	   
	  
   
	
	
<?php
}
}

if($i==0)
{
	echo "pas de notification";
}
$sqlrecherchenotif->closeCursor(); // Termine le traitement de la requête
	
?>
