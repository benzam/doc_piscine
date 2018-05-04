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
?>

<!DOCTYPE html>
<html>
<head>
<meta charset=utf-8/>
</head>

<body>

	
<?php
$Ami=isset($_POST["id_ami"])?$_POST["id_ami"]:"";
$_SESSION['ami1']=$Ami;
$requete="INSERT INTO `ami` (`id_ami`, `id_auteur1`, `id_auteur2`, `date_amitie`) VALUES (NULL, :id_auteur, :id_ami, CURTIME());";

$sql=$bdd->prepare($requete);
$sql->execute(array(

    'id_auteur' => $_SESSION['id_auteur'],
	'id_ami' => $_SESSION['ami1']));
	
$Prenom=$_SESSION['prenom'];
$Nom=$_SESSION['nom'];

$requetenotif="INSERT INTO `notification` (`id_notif`, `contenu_notif`, `date_notif`, `id_auteur`) VALUES (NULL, '$Prenom $Nom vous a ajouté', CURTIME(), :id_ami1);";

    
$sqlnotif=$bdd->prepare($requetenotif);
$sqlnotif->execute(array(

	'id_ami1' => $_SESSION['ami1']));
    header('Location: http://localhost/piscine/doc_piscine/accueil.php ');
    ?>
    <script>
        location.reload(true)    
        loadAccueil();

    </script>
    <?php
    
    
		exit();

?>

</body>

</html>