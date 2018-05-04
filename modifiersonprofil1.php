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
{$requete="UPDATE `auteur` SET `email` = '$Email', `pseudo`='$Pseudo', `nom`='$Nom',`prenom`='$Prenom', `date_de_naissance`='$DateDeNaissance',`statut`='$Statut',
`cherche_stage`='$ChercheStage',
`cherche_partenaire`='$CherchePartenaire',
`admin`='$Admin' 
WHERE `auteur`.`id_auteur` 
=:id_auteur";

$sql=$bdd->prepare($requete);
$sql->execute(array(

    'id_auteur' => $_SESSION['id_auteur']));
		$requeterecherche="SELECT * FROM `auteur` WHERE `auteur`.`id_auteur` 
=:id_auteur"; 
$sqlrecherche=$bdd->prepare($requeterecherche);
$sqlrecherche->execute(array(

    'id_auteur' => $_SESSION['id_auteur']));
$resultat = $sqlrecherche->fetch();
        $_SESSION['email'] = $resultat['email'];
        $_SESSION['pseudo'] = $resultat['pseudo'];
		$_SESSION['nom'] = $resultat['nom'];
		$_SESSION['prenom'] = $resultat['prenom'];
		$_SESSION['date_de_naissance'] = $resultat['date_de_naissance'];
		$_SESSION['date_de_creation'] = $resultat['date_de_creation'];
		$_SESSION['statut'] = $resultat['statut'];
		$_SESSION['cherche_stage'] = $resultat['cherche_stage'];
		$_SESSION['cherche_partenaire'] = $resultat['cherche_partenaire'];
		$_SESSION['id_cv'] = $resultat['id_cv'];
		$_SESSION['admin'] = $resultat['admin'];
	header('Location: http://localhost/piscine/doc_piscine/parametre_profil.php');
	exit();
		
}
catch (Exception $e)
{

        die('Erreur : ' . $e->getMessage());

}
 
?>

