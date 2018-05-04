<?php
try

{

  $bdd = new PDO('mysql:host=localhost;dbname=projet_piscine_bdd;charset=utf8', 'root', '');

}

catch (Exception $e)

{

        die('Erreur : ' . $e->getMessage());

}

$Email=isset($_POST["email"])?$_POST["email"]:"";
$Pseudo=isset($_POST["pseudo"])?$_POST["pseudo"]:"";
$Nom=isset($_POST["nom"])?$_POST["nom"]:"";
$Prenom=isset($_POST["prenom"])?$_POST["prenom"]:"";
$DateDeNaissance=isset($_POST["date_de_naissance"])?$_POST["date_de_naissance"]:"";
$Statut=isset($_POST["statut"])?$_POST["statut"]:"";
$ChercheStage=isset($_POST["cherche_stage"])?$_POST["cherche_stage"]:"";
$CherchePartenaire=isset($_POST["cherche_partenaire"])?$_POST["cherche_partenaire"]:"";
$Admin=isset($_POST["admin"])?$_POST["admin"]:"";




 
try

{
	$requete="INSERT INTO `auteur` (`id_auteur`, `email`, `pseudo`, `nom`, `prenom`, `date_de_naissance`, `date_de_creation`, `statut`, `cherche_stage`, `cherche_partenaire`, `id_cv`, `admin`) VALUES (NULL,'$Email', '$Pseudo', '$Nom', '$Prenom', '$DateDeNaissance', '2018-05-01 00:00:00' , '$Statut', '$ChercheStage', '$CherchePartenaire',NULL, '$Admin')";

$sql=$bdd->prepare($requete);
$sql->execute();
header('Location: http://localhost/piscine/doc_piscine/connexion.php');
exit();
}
catch (Exception $e)
{

        die('Erreur : ' . $e->getMessage());

}
 
?>

