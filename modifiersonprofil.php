<?php 
session_start();
?>
<DOCTYPE html>
<meta charset=”utf-8”>

<html>
	<head>
		<title>modifier son profil: </title>
	</head>
	<body>
        <div id="div_central_co2">
            
		<form method="post" action="modifiersonprofil1.php">
            <label for="email">Email:</label> <input type="text" name="email" value="<?php echo $_SESSION['email']; ?>"/><br><br>
            <label for="pseudo">Pseudo:</label> <input type="text" name="pseudo" value="<?php echo $_SESSION['pseudo']; ?>"/><br><br>
            <label for="nom">Nom:</label> <input type="text" name="nom" value="<?php echo $_SESSION['nom']; ?>"/><br><br>
            <label for="prenom">prénom:</label> <input type="text" name="prenom" value="<?php echo $_SESSION['prenom']; ?>"/><br><br>
            <label for="date">Date de naissance:</label> <input type="date" name="date_de_naissance" value="<?php echo $_SESSION['date_de_naissance']; ?>"/><br><br>
            <label for="statut">Statut:</label> <input type="number" name="statut" value="<?php echo $_SESSION['statut']; ?>"/><br><br>
            <label for="cherche_stage">Cherche stage ? 1 pour oui, 0 pour non :</label><input type="number" name="cherche_stage" value="<?php echo $_SESSION['cherche_stage']; ?>"/><br><br>
            <label for="cherche_partenaire">Cherche partenaire ? 1 pour oui, 0 pour non :</label><input type="number" name="cherche_partenaire" value="<?php echo $_SESSION['cherche_partenaire']; ?>"/><br><br>
            <label for="admin">Admin ? 1 pour oui, 0 pour non: </label><input type="number" name="admin" value="<?php echo $_SESSION['admin']; ?>"/><br><br>
		<input type ="submit" class="pbutton" value="modifier"/>
	</form>
	<form method="post" action="accueil.php">
        </form>
            
        </div>
        
	</body>
</html>