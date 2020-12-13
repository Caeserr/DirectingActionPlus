<?php
  session_start();
  include('dbconn.php'); // Fichier PHP contenant la connexion à votre BDD
 

  if(!empty($_POST)){
    extract($_POST);
    $valid = true;
 
    if (isset($_POST['creer-article'])){
      $NomArticle  = (string) htmlentities(trim($NomArticle)); 
      $DescriptionArticle = (string) htmlentities(trim($DescriptionArticle)); 
      $TypeArticle = (string) htmlentities(trim($TypeArticle));
      $PrixArticle = (int) htmlentities(trim($PrixArticle));
 
      if(empty($NomArticle)){
        $valid = false;
        $er_NomArticle = ("Entrez un nom");
      }       
      if(empty($TypeArticle)){
        $valid = false;
        $er_TypeArticle = ("Entrez une catégorie");
      }       
      
      if(empty($DescriptionArticle)){
        $valid = false;
        $er_DescriptionArticle = ("Entrez une categorie");
      }       
  
      if(empty($PrixArticle)){
        $valid = false;
        $er_PrixArticle = ("Entrez  un prix");
      }       
      if($valid){        
        $DB->insert("INSERT INTO  articles (idUser, NomArticle, PrixArticle, DescriptionArticle ,TypeArticle) VALUES 
          (?, ?, ?, ?, ?)", 
          array($_SESSION['id'], $NomArticle, $PrixArticle, $DescriptionArticle, $TypeArticle));
          
          header('Location: /directing-master/listarticles'); // Page redirecting to home.php
        
        exit;
      }
    }
  }
?>
<!DOCTYPE html>
<html lang="fr">
<head>

	<meta name="viewport" content="width=device-width, initial-scale=1.0">    
	<title>Ajouter un article - Directing </title>

	<!-- Css Styles -->
	<link rel="stylesheet" href="css-register.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">


</head>
<body>

    
    <form method="post">
        <h2 class="text-warning text-center pt-5" style="font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;">Ajouter un article</h2>


              <div class="form-group">
                <div class="input-group mb-3">

              <label>     
						 <input type="text" class="input" name="TypeArticle" placeholder="Catégorie :" value="<?php if(isset($TypeArticle)){ echo $TypeArticle; }?>"/>        
				   <div class="line-box">         
					   <div class="line"></div>        
				   </div>    
                   </label>   

                   <!-- Message d'erreur si la catégorie est vide -->	   
                <?php
                if (isset($er_TypeArticle)){
                ?>
                  <div class="er-msg"><?= $er_TypeArticle ?></div>
                <?php   
                }
              ?>
                

                   <label>     
						 <input type="text" class="input" name="NomArticle" placeholder="Nom de l'objet" value="<?php if(isset($NomArticle)){ echo $NomArticle; }?>"/>        
				   <div class="line-box">         
					   <div class="line"></div>        
				   </div>    
                   </label>   
                    
                <!-- Message d'erreur si l'article est vide -->
              <?php
                if (isset($er_NomArticle)){
                    ?>
                    <div class="er-msg"><?= $er_NomArticle ?></div>
                  <?php   
                  }
                  ?>
                  


                   <label>     
                       <input type="text" class="input" name="PrixArticle" placeholder="Prix de l'objet :" value="<?php if(isset($PrixArticle)){ echo $PrixArticle; }?>"/>        
                       <div class="line-box">         
                           <div class="line"></div>        
                        </div>    
                    </label> 

                    <!-- Message d'erreur si le prix est vide -->
                    <?php
                if (isset($er_PrixArticle)){
                    ?>
                    <div class="er-msg"><?= $er_PrixArticle ?></div>
                    <?php   
                  }
                  ?>
                  
                  <label for="exampleTextarea">   
                    
                       <input type="text" class="input" name="DescriptionArticle" placeholder="Décrivez votre article" value="<?php if(isset($DescriptionArticle)){ echo $DescriptionArticle; }?>"/>        
                       <div class="line-box">         
                           <div class="line"></div>        
                        </div>    
                    </label> 

                  <!-- Message d'erreur si la catégorie est vide -->
                  <?php
                    if (isset($er_DescriptionArticle)){
                    ?>
                      <div class="er-msg"><?= $er_DescriptionArticle ?></div>
                    <?php   
                    }
                  ?>
                  <br>
                  <input type="submit" class="button" name="creer-article" value="Ajouter"> 
                
                <br><br><br>

                <a href="listarticles">Page précédente</a>
                <br><br>
                <a href="home">Accueil</a>
                

              </form>
              </div>
          </div>
        </div>
      </div>
    </div>     
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
  </body>
</html>