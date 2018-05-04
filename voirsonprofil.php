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
  <h1>Votre profil</h1>
  <p>Vous vous appelez <?php echo $_SESSION['prenom']," ",$_SESSION['nom']?></p>
  <p>et vous êtes né le <?php echo $_SESSION['date_de_naissance'] ?></p>
  
      
      
      <?php
    try
{
  $bdd = new PDO('mysql:host=localhost;dbname=projet_piscine_bdd;charset=utf8', 'root', '');
}

catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}
          
      
      
      try
{
          
          
          $req="SELECT * FROM `post` WHERE `id_auteur`=:id_auteur";
          $sqlrecherche=$bdd->prepare($req);
        $sqlrecherche->execute(array(

            'id_auteur' => $_SESSION['id_auteur']));          
          
          $i=0;
          
          while ($donnees = $sqlrecherche->fetch())
        {
            $i=$i+1;

        ?>
                <br/>
                <br/>
                <br/>
                <br/>
        
            <section id="forme"> 
                
                
                <?php  
                
              //Photo normale
                if($donnees['type']==1){
                    echo $donnees['nom_post'];
                    ?>
                    <img src="<?php echo $donnees['adresse_post']; ?>" />
                    <?php
                }
              
              //Video
              if($donnees['type']==2){
                  echo $donnees['nom_post'];
                  ?>
                  <video controls src="<?php echo $donnees['adresse_post']; ?>">Ici la description alternative</video>
                
                  <?php
                }
              
              //Texte
              if($donnees['type']==3){
                  echo $donnees['nom_post'];
                    ?>
                    <video controls src="<?php echo $donnees['adresse_post']; ?>">Ici la description alternative</video>
                
                    
                    <?php
                }
              
              //Photo de profil
              if($donnees['type']==4){
                  echo "nouvelle pp: ";
                  ?><br/><?php
                  echo $donnees['nom_post'];
                    ?>
                    <img src="<?php echo $donnees['adresse_post']; ?>" />
                    <?php
                }
                
                
                ?>
                
                
                    
                
                <br/><br/><br/><br/><br/>
            </section> 
            
                
        
              

        <?php
        }

          
          
 
	   exit();
		
}
catch (Exception $e)
{

        die('Erreur : ' . $e->getMessage());

}
      
      
      
      
      
      
    
    ?>
  
  </body>


</html>