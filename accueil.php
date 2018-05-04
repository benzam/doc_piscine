<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="accueil.css" />
        <title>Michel Drucker</title>
    </head>

    <body>
        <div id="deco">

        <header>
            <h1>Site trop cool</h1>
        </header>
        
        
        <div class="div_page">
        <nav>
            <ul>
            
                <button type="button" class="gbutton" onclick="loadActu()">Fil d'actu</button>
                
                <button type="button" class="gbutton" onclick="loadNotif()">Notif</button>
                
                <button type="button" class="gbutton" onclick="loadRecherche()">Recherche</button>

                <button type="button" class="gbutton" onclick="loadParamProf()">Vous</button>
                
                
            </ul>
            
        </nav>
            
            
 <!-- 
       <div class = "div_section">
        <section>
            <aside>
                <h1>Debut du aside</h1>
                <p>C'est moi, Zozor ! Je suis né un 23 novembre 2005.</p>
            </aside>
            <article>                
                <h1>Debut de l'artcicle</h1>
                <p>Bla bla bla bla (texte de l'article)</p>
            </article>
        </section>
        <br>       
            
        </div>    
            --> 
            
            
            <div class id= "div_section">
                
            <p id="acceuil"></p>
        
                <center>

                </center>
                
                
                  
            </div>
            
            
    </div>
            <footer>
            <p>Copyright Trucs<br />
            <a href="#">Me contacter !</a>
            </p>
        </footer>
            
            </div>
                
            
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.js"></script>
        
        <script>
            function bindFormRecherche() {
                $('#formrecherche').submit( function( event ) {
        event.preventDefault();
        event.stopImmediatePropagation();
        var nomprenom = $('#formrecherche input[name="nomprenom"]').val();
      $.post( 'chercherami1.php', {
          nomprenom: nomprenom
      }, function( result ) {
          $('#resultatformrecherche').html(result);
      });
    });
            }
            
            
            function loadActu() {
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
              document.getElementById("acceuil").innerHTML = this.responseText;
            }
            };
                xhttp.open("GET", "actu.php", true);                
                xhttp.send();
                }
            
            function loadNotif() {
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
              document.getElementById("acceuil").innerHTML = this.responseText;
            }
            };
                xhttp.open("GET", "voirsesnotifs.php", true);                
                xhttp.send();
                }
            
            function loadRecherche() {
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
              document.getElementById("acceuil").innerHTML = this.responseText;
                bindFormRecherche();
            }
            };
                xhttp.open("GET", "chercherami.php", true);                
                xhttp.send();
                }
            
            
            
            function loadParamProf() {
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
              document.getElementById("acceuil").innerHTML = this.responseText;
            }
            };
                xhttp.open("GET", "parametre_profil.php", true);                
                xhttp.send();
                }
            
            
            
            function loadChercherAmi() {
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
              document.getElementById("acceuil_chercher").innerHTML = this.responseText;
            }
            };
                xhttp.open("GET", "chercherami1.php", true);                
                xhttp.send();
                }
            
            
            
            
            
            
            
            
            
            
            
            
            
            function loadAj() {
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
              document.getElementById("acceuil").innerHTML = this.responseText;
            }
            };
                xhttp.open("GET", "ajout_auteur.php", true);                
                xhttp.send();
                }
            
            
            function loadAfficherAmi() {
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
              document.getElementById("accueil_profil").innerHTML = this.responseText;
            }
            };
                xhttp.open("GET", "recherchesesamis.php", true);                
                xhttp.send();
                }
            
            function loadVoir() {
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
              document.getElementById("accueil_profil").innerHTML = this.responseText;
            }
            };
                xhttp.open("GET", "voirsonprofil.php", true);                
                xhttp.send();
                }
          
          function loadModif() {
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
              document.getElementById("accueil_profil").innerHTML = this.responseText;
            }
            };
                xhttp.open("GET", "modifiersonprofil.php", true);                
                xhttp.send();
                }
          
          function loadDeco() {
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
              document.getElementById("deco").innerHTML = this.responseText;
            }
            };
                xhttp.open("GET", "deconnexion.php", true);                
                xhttp.send();

                }
            
         
            
            
        </script>
        
        
        
    </body>
</html>