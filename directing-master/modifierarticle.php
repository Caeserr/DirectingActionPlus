<?php
      include("Dbconfig.php");
      include("dbconn.php");
      include("Session.php");
  
      
      $userDetails=$userClass->userDetails($session_uid);
 

  if(!empty($_POST)){
    extract($_POST);
    $valid = true;


 
    if (isset($_POST['modification'])) {
        $NomArticle  = (string) htmlentities(trim($NomArticle));
        $DescriptionArticle = (string) htmlentities(trim($DescriptionArticle));
        $TypeArticle = (string) htmlentities(trim($TypeArticle));
        $PrixArticle = (int) htmlentities(trim($PrixArticle));

        if (empty($NomArticle)) {
            $valid = false;
            $er_NomArticle = ("Entrez un nom");
        }
        if (empty($TypeArticle)) {
            $valid = false;
            $er_TypeArticle = ("Entrez une catégorie");
        }
      
        if (empty($DescriptionArticle)) {
            $valid = false;
            $er_DescriptionArticle = ("Entrez une description");
        }
  
        if (empty($PrixArticle)) {
            $valid = false;
            $er_PrixArticle = ("Entrez  un prix");
        }
        if ($valid) {
            $DB->insert(
                "UPDATE articles SET NomArticle = ?, PrixArticle = ?, DescriptionArticle = ?, TypeArticle = ?
WHERE idUser = ?",
                array($NomArticle, $PrixArticle,$DescriptionArticle, $TypeArticle, $_SESSION['id'])
            );
 
            $_SESSION['NomArticle'] = $NomArticle;
            $_SESSION['PrixArticle'] = $PrixArticle;
            $_SESSION['DescriptionArticle'] = $DescriptionArticle;
            $_SESSION['TypeArticle'] = $TypeArticle;
 
            $url=BASE_URL.'profil.php';
            header("Location: $url");
            exit;
        }
    }
  }
?>



<!DOCTYPE html>
<html lang="fr">
   <head>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Directing | Modification profil </title>
      <!-- Css Styles -->
      <link rel="stylesheet" href="css-register.css" type="text/css">
      <link rel="stylesheet" href="css/style.css" type="text/css">
   </head>
       
   <!-- CSS ahref-->
   <style>
      
      .boutton {
    max-width: 767px;
    width: 100%;
    line-height: 1.4;
    padding: 0px 30px;
  }
      .boutton a {
    font-family: 'Titillium Web', sans-serif;
    display: inline-block;
    text-transform: uppercase;
    color: #fff;
    text-decoration: none;
    border: none;
    background: #f03250;
    padding: 10px 40px;
    font-size: 14px;
    font-weight: 700;
    border-radius: 1px;
    margin-top: 15px;
    -webkit-transition: 0.2s all;
    transition: 0.2s all;
    
  }
  
   .boutton a:hover {
    opacity: 0.8;
  }
   </style>
   <body>
            
              
      <form method="post">
                  
         <h2 class="text-warning text-center pt-5" style="font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;">Mon profil</h2>
         <br>
         <h4>Description de l'article</h4>
         <br>
         <?php
            try
            {
                $bdd = new PDO('mysql:host=localhost;dbname=actionplus;charset=utf8', 'root', '');
            }
            catch (Exception $e)
            {
                    die('Erreur : ' . $e->getMessage());
            }
            
            $reponse = $bdd->query('SELECT * FROM articles');
            
            
              if ($donnees = $reponse->fetch())
            {
            
            ?>
         <?php
            if (isset($er_NomArticle)){
            ?>
             
         <div><?= $er_NomArticle ?></div>
         <?php
            }
            ?>
         <label>
            <h5 style="text-align: left;">Nom de l'article : <input type="text" placeholder="Votre nom" name="NomArticle" value="<?php echo $donnees['NomArticle']; ?>" required></h5>
            <br>
            <hr>
         </label>
         <?php
            if (isset($er_PrixArticle)){
            ?>
             
         <div><?= $er_PrixArticle ?></div>
         <?php
            }
            ?>
         <label>
            <h5 style="text-align: left;">Description de l'article : <input type="text" placeholder="Description de l'article" name="DescriptionArticle" value="<?php echo $donnees['DescriptionArticle']; ?>" required></h5>
            <br>
            <hr>
            <?php
               if (isset($er_DescriptionArticle)){
               ?>
                
            <div><?= $er_DescriptionArticle ?></div>
            <?php
               }
               ?>
         <label>
            <h5 style="text-align: left;">Pseudonyme : <input type="text" placeholder="Categorie :" name="TypeArticle" value="<?php echo $donnees['TypeArticle']; ?>" required></h5>
               
            <br>
            <hr>
             
            <?php
               if (isset($er_TypeArticle)){
               ?>
                
            <div><?= $er_TypeArticle ?></div>
            <?php
               }
               ?>
         <label>
            <h5 style="text-align: left;">Pseudonyme : <input type="text" placeholder="Prix de l'article" name="PrixArticle" value="<?php echo $donnees['PrixArticle']; ?>" required></h5>
               
            <br>
            <hr>
         </label>
         <button type="submit" name="modification">Modifier</button>
         <p></p>
                 
      </form>
      <?php
         }
         $reponse->closeCursor(); // Termine le traitement de la requête
         
         ?>
          <div id="boutton">
          <div class="boutton">
          <a href="profil.php">Page précédente</a>
          </div>
          </div>
   </body>
</html>