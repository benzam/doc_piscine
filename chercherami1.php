<?php
session_start();
?>

<DOCTYPE html>
<html>
<head>
</head>
<body>

<?php
try

{

  $bdd = new PDO('mysql:host=localhost;dbname=projet_piscine_bdd;charset=utf8', 'root', '');

}

catch (Exception $e)

{

        die('Erreur : ' . $e->getMessage());

}

$Recherche=isset($_POST["nomprenom"])?$_POST["nomprenom"]:"";
$RechercheDecoupee = explode(" ", $Recherche);

$result = count($RechercheDecoupee);

if($result==1)
{
$requeterecherche="SELECT * FROM auteur WHERE auteur.`prenom` LIKE '%$RechercheDecoupee[0]%' OR auteur.`nom` LIKE '%$RechercheDecoupee[0]%';"; 
// On récupère tout le contenu de la table auteur selon la recherche de l'utilisateur
$sqlrecherche=$bdd->query($requeterecherche);

// On récupère tout le contenu de la table jeux_video

// On affiche chaque entrée une à une


$i=0;
while ($donnees = $sqlrecherche->fetch())
{
	$i=$i+1;

?>
    <p>
    <strong>Nom et prénom</strong> : <?php echo $donnees['prenom']; ?>  <?php echo $donnees['nom']; ?><br />
   </p>
      <form method="post" action="ajouter_ami.php">
	  <input type="text" name="id_ami" value="<?php echo $donnees['id_auteur']; ?>"style="display:none" />
   <input type ="submit" class="pbutton" value="ajouter"/>   

	</form>
	
<?php
}
if($i==0)
{
	echo "resultat de la recherche nulle";
}

$sqlrecherche->closeCursor(); // Termine le traitement de la requête
}
else if($result>1)
{

	$requeterecherche="SELECT * FROM auteur WHERE (auteur.`prenom` LIKE '%$RechercheDecoupee[0]%' OR auteur.`nom` LIKE '%$RechercheDecoupee[0]%') AND (auteur.`prenom` LIKE '%$RechercheDecoupee[1]%' OR auteur.`nom` LIKE '%$RechercheDecoupee[1]%');"; 
// On récupère tout le contenu de la table auteur selon la recherche de l'utilisateur
$sqlrecherche=$bdd->query($requeterecherche);

// On récupère tout le contenu de la table jeux_video

// On affiche chaque entrée une à une

$i=0;
while ($donnees = $sqlrecherche->fetch())
{
	
	$i=$i+1;
?>
    <p>
    <strong>Nom et prénom :</strong> : <?php echo $donnees['prenom']; ?>  <?php echo $donnees['nom']; ?><br />
   </p>
      <form method="post"  action="ajouter_ami.php">
	   <input type="text" name="id_ami" value="<?php echo $donnees['id_auteur']; ?>"style="display:none" />
	   <input type ="submit" class="pbutton" value="ajouter"/>
	   
	  
   
	</form>
	
	
<?php
}
	

if($i==0)
{
	echo "resultat de la recherche nulle";
}
$sqlrecherche->closeCursor(); // Termine le traitement de la requête
	
}
//echo $ami;
?>

</body>
</html>