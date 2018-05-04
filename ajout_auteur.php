<DOCTYPE html>
<meta charset=”utf-8”>

<html>
	<head>
		<title>Ajouter un auteur </title>
	</head>
	<body>
        
		<form method="post" action="ajout_auteur1.php">
            
            <label for="email">Email:</label> <input type="text" name="email"/><br><br>
            <label for="pseudo">Pseudo:</label> <input type="text" name="pseudo"/><br><br>
            <label for="nom">Nom:</label> <input type="text" name="nom"/><br><br>
            <label for="prenom">prénom:</label> <input type="text" name="prenom"/><br><br>
            <label for="date_de_naissance">Date de naissance:</label> <input type="date" name="date_de_naissance"/><br><br>
            <label for="statut">Statut:</label> <input type="number" name="statut"/><br><br>
            <label for="cherche_stage">Cherche stage ? 1 pour oui, 0 pour non :</label><input type="number" name="cherche_stage"/><br><br>
            <label for="cherche_partenaire">Cherche partenaire ? 1 pour oui, 0 pour non :</label><input type="number" name="cherche_partenaire"/><br><br>
            <label for="admin">Admin ? 1 pour oui, 0 pour non:</label> <input type="number" name="admin"/><br><br>
		<input type ="submit" class="gbutton" value="valider"/>
            
            
	</form>
	</body>
</html>