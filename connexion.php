<DOCTYPE html>
<meta charset=”utf-8”>

<html>
	<head>
		<title>se connecter au site </title>
        <link rel="stylesheet" href="accueil.css" />

	</head>
	<body>
        
         
    
        <div id="div_central_co">
            
            <center>
            
        <h1>Vous connecter</h1>
            
            <form method="post" action="connexion1.php">
                
                    <label for="email">email:</label><input type="text" name="email"/>
                    
                    
                    <br><br><br><br>

                    <label for="pseudo">pseudo:</label><input type="text" name="pseudo"/>
                    
                    
                    <br><br>
                        
                    <input type ="submit" class="gbutton" value="valider"/>
                    <br><br><br><br><br>
            
                </form>
            
            
            <h1>Créer un compte</h1>
                
                <button type="button" class="gbutton" onclick="loadAj()">Ajout</button>
                <p id="ajout"></p>
                
                </center>
        
        </div>
        
        <footer>
            <p>Copyright Trucs<br />
            <a href="#">Me contacter !</a>
            </p>
        </footer>
        
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.js"></script>
        
        <script>
            
            
            function loadAj() {
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
              document.getElementById("ajout").innerHTML = this.responseText;
            }
            };
                xhttp.open("GET", "ajout_auteur.php", true);                
                xhttp.send();
                }
        </script>
        
            

	
	</body>
</html>