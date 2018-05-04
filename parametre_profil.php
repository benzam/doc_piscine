<?php
session_start();
?>


<!DOCTYPE html>
<html>
    
 <head> 
    <META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=utf-8" /> 
    <link rel="stylesheet" href="accueil.css" />

    <title> FortBoyardProfessionnel </title> 
  </head> 
  
  <body> 
  <h2>Gérez vos informations personnelles en quelques clics</h2>
    
      <ul>
                <button type="button" class="gbutton" onclick="loadAfficherAmi()">Amis</button>
          
                <button type="button" class="gbutton" onclick="loadVoir()">Voir son profil</button>
                <button type="button" class="gbutton" onclick="loadModif()">Modifier son profil</button>
                
                <button type="button" class="sbutton" onclick="loadDeco()">Se déconnecterr</button>
                
        </ul>
      
      <section>
                  <p id="accueil_profil"></p>

      </section>
                              
      
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.js"></script>
      
  </body>


</html>