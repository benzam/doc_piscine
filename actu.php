<?php
session_start();
?>


<!DOCTYPE html>
<html>
 <head> 
    <META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=utf-8" /> 
    <title> Gérez vos informations en quelques clics </title> 
             <link rel="stylesheet" href="accueil.css" />

  </head> 
  
  <body> 
      
      <h1>Que se passe-t-il au FortBoyard </h1>

      
      
      <?php
try

{

  $bdd = new PDO('mysql:host=localhost;dbname=projet_piscine_bdd;charset=utf8', 'root', '');

}

catch (Exception $e)

{

        die('Erreur : ' . $e->getMessage());

}
$i=0;
$idAuteur=$_SESSION['id_auteur'];
$requeterecherche="SELECT * FROM `ami` WHERE `ami`.`id_auteur1`='$idAuteur';"; 
// On récupère tout le contenu de la table auteur selon la recherche de l'utilisateur
$sqlrecherche=$bdd->query($requeterecherche);
while ($donnees = $sqlrecherche->fetch())
{
	
	$i=$i+1;
	$idAmi=$donnees['id_auteur2'];
	$requeterecherche2="SELECT * FROM `auteur` WHERE `auteur`.`id_auteur`='$idAmi';";
// On récupère tout le contenu de la table auteur selon la recherche de l'utilisateur
$sqlrecherche2=$bdd->query($requeterecherche2);
while ($donnees2 = $sqlrecherche2->fetch())
{
?>

    
      
      <?php
      $req_post="SELECT * FROM `post` WHERE `id_auteur`=:id_auteur";
        $sqlrecherchepost=$bdd->prepare($req_post);
        $sqlrecherchepost->execute(array(

            'id_auteur' => $donnees2['id_auteur'])); 
	   
      
      while($donneesamis = $sqlrecherchepost->fetch()){
          
         // echo $donneesamis['adresse_post'];
          
          //Photo normale
                if($donneesamis['type']==1){
                    echo $donnees2['prenom']; echo $donnees2['nom'];
                    echo " a publié une photo"
                        ?>
                            <br/>
                        <?php
                        
                    echo $donneesamis['nom_post'];
                    ?>
                    <img src="<?php echo $donneesamis['adresse_post']; ?>" />
                    <br/><br/><br/>
      
                    <?php
                }
              
              //Video
              if($donneesamis['type']==2){
                  echo $donnees2['prenom']; echo $donnees2['nom'];
                    echo " a publié une vidéo"
                        ?>
                            <br/>
                        <?php
                  
                  echo $donneesamis['nom_post'];
                  ?>
                  <video controls src="<?php echo $donneesamis['adresse_post']; ?>">Ici la description alternative</video>
                    <br/><br/><br/>
                  <?php
                }
              
              //Texte
              if($donneesamis['type']==3){
                  echo $donneesamis['nom_post'];
                    ?>
                    <video controls src="<?php echo $donneesamis['adresse_post']; ?>">Ici la description alternative</video>
                
                    
                    <?php
                }
              
              //Photo de profil
              if($donneesamis['type']==4){
                  
                  echo $donnees2['prenom']; echo $donnees2['nom'];
                    echo " a changé sa photo de profil"
                        ?>
                            <br/>
                        <?php
                        
                  $donneesamis['nom_post']
                  ?><br/><?php
                  echo $donneesamis['nom_post'];
                    ?>
                    <img src="<?php echo $donneesamis['adresse_post']; ?>" />
                    <br/><br/><br/>
                    <?php
                }
                
          
          
          
          ?>
      <br/>
      <?php
          
      }
 
      
      
	  
   ?>
	
	
<?php
}
}

if($i==0)
{
	echo "pas d'ami";
}
$sqlrecherche->closeCursor(); // Termine le traitement de la requête
	
?>

      
      
      
      
      
      
       </body>


</html>