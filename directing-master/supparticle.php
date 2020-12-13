<?php
      include("Dbconfig.php");
      include("dbconn.php");
      include("Session.php");
  
      
      $userDetails=$userClass->userDetails($session_uid);
 
      $get_id = $session_uid;
      $req = $DB->query("select * FROM articles LEFT JOIN users ON articles.idUser = users.id
      WHERE users.id = ?", 
      array($get_id));
      $req = $req->fetch();


            
      
  ?>



<!DOCTYPE html>
<html lang="fr">
   <head>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Directing | Supprimer article </title>
      <!-- Css Styles -->
      <link rel="stylesheet" href="css-register.css" type="text/css">
      <link rel="stylesheet" href="css/style.css" type="text/css">
   </head>
       
      <!-- Css spécial tableau -->
      <style>
      #En-Tete {
      font-family: Arial, Helvetica, sans-serif;
      border-collapse: collapse;
      width: 100%;
      }
      #En-Tete td, #En-Tete th {
      border: 1px solid #ddd;
      padding: 8px;
      }
      #En-Tete tr:nth-child(even){background-color: blue;}
      #En-Tete tr:hover {background-color: whitesmoke;}
      #En-Tete th {
      padding-top: 12px;
      padding-bottom: 12px;
      text-align: center;
      background-color: whitesmoke;
      color: black;
      }
      .boutton {
    max-width: 767px;
    width: 100%;
    line-height: 1.4;
    padding: 0px 32px;
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
                  
         <h2 class="text-warning text-center pt-5" style="font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;">Description de l'article</h2>
         <br>
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
?>
                  <table id="En-Tete">
                              <thead>
                                  <tr>
                                  <th scope="col">Nom de l'article</th>
                                  <th scope="col">Description</th>
                                  <th scope="col">Prix</th>
                                  <th></th>
                                  </tr>  
                              </thead>                         
                              <tbody>
                                  <tr>     
                                  <td><?= $req['NomArticle'] ?></td>
                                  <td><?= $req['DescriptionArticle'] ?></td>
                                  <td><?= $req['PrixArticle'] ?></td>                                 
                                 </tr>
                              </tbody>
                           </table>
                           <br>
                           <h5> Nom de l'article à supprimer : <input type="text" name="NomArticle" id="NomArticle" /><input type="submit" value="Supprimer" /><br /></h5><br>
                           
                           <div class="boutton">
                                <a href="profil.php">Page précédente</button>
                                </div>   
                                

         <p></p>
                 
      </form>

          
   </body>
</html>