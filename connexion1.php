<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="accueil.css" />
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

$email=isset($_POST["email"])?$_POST["email"]:"";
$pseudo=isset($_POST["pseudo"])?$_POST["pseudo"]:"";


 
try

{
	$requete="SELECT *FROM `auteur` WHERE email='$email' AND pseudo = '$pseudo'"; 
$sql=$bdd->prepare($requete);
$sql->execute();
$resultat = $sql->fetch();

if (!$resultat)
{
    
    header('Location: http://localhost/piscine/doc_piscine/connexion.php');
    
        ?>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.js"></script>
        
        <script>
            function mauvais_id() {
            alert("Mauvais identifiant ou mot de passe !");
            }
            
            mauvais_id();
        </script>
        
    <?php
    
    
}
else
{
        session_start();
		$_SESSION['id_auteur'] = $resultat['id_auteur'];	
        $_SESSION['email'] = $email;
        $_SESSION['pseudo'] = $pseudo;
		$_SESSION['nom'] = $resultat['nom'];
		$_SESSION['prenom'] = $resultat['prenom'];
		$_SESSION['date_de_naissance'] = $resultat['date_de_naissance'];
		$_SESSION['date_de_creation'] = $resultat['date_de_creation'];
		$_SESSION['statut'] = $resultat['statut'];
		$_SESSION['cherche_stage'] = $resultat['cherche_stage'];
		$_SESSION['cherche_partenaire'] = $resultat['cherche_partenaire'];
		$_SESSION['id_cv'] = $resultat['id_cv'];
		$_SESSION['admin'] = $resultat['admin'];
		$_SESSION['connecte']=1;
		echo "vous êtes connecté !";
		header('Location: http://localhost/piscine/doc_piscine/accueil.php');
		exit();
}

}
catch (Exception $e)
{

        die('Erreur : ' . $e->getMessage());

}

?>
          </body>
    
    </html>