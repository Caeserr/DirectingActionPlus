<?php

/* PAGE D'ACCUEIL DE L'UTILISATEUR */

include('Dbconfig.php');
include('Session.php');
$userDetails=$userClass->userDetails($session_uid);
?>

<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Directing Template">
    <meta name="keywords" content="Directing, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Directing | Website</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700;800&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/flaticon.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/barfiller.css" type="text/css">
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>

<body class="ov-hid">

    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Header Section Begin -->
    <header class="header header--normal">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3 col-md-3">
                    <div class="header__logo">
                        <a href="home"><img src="img/footer-logo.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-9 col-md-9">
                    <div class="header__nav">
                        <nav class="header__menu mobile-menu">
                            <ul>
                                <li><a href="home">Home</a></li>
                                <li class="active"><a href="listarticles">Liste des articles</a></li>
                                <li><a href="deconnexion.php">Deconnexion</a></li>
                            </ul>
                        </nav>
                        <div class="header__menu__right">
                            <a href="ajoutarticle" class="primary-btn"><i class="fa fa-plus">&nbsp;&nbsp;&nbsp;</i>Ajouter un article</a>
                            <a href="profil" class="login-btn"><i class="fa fa-user"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div id="mobile-menu-wrap"></div>
        </div>
    </header>
    <!-- Header Section End -->
    <!-- Listing Section Begin -->

    <section class="listing nice-scroll">
        <div class="listing__text__top">
            <div class="listing__text__top__left">
                <h5>Listes des articles</h5>
                <hr style="border-style: inset;">
            </div>
            <div class="listing__text__top__right">Nearby <i class="fa fa-sort-amount-asc"></i></div>
        </div>

    <!-- Php PDD connec -->
    <?php
      try
      {
          $bdd = new PDO('mysql:host=localhost;dbname=actionplus;charset=utf8', 'root', '');
      }
      catch (Exception $e)
      {
              die('Erreur : ' . $e->getMessage());
      }

      $reponse = $bdd->query('SELECT * FROM articles JOIN users ON articles.idUser = users.id');
      

      while ($donnees = $reponse->fetch())
      {
      ?>
        <div class="listing__list">
                <div class="listing__item__text">
                    <div class="listing__item__text__inside">
                        <h5><?php echo $donnees['NomArticle']; ?></h5> </div>
                        <span> <h6></h6>Vendeur</h6> : <b><?php echo $donnees['username'];?></b></span>
                        
                        <div class="listing__item__text__rating">
                            <div class="listing__item__rating__star">
                                <h6><?php echo $donnees['PrixArticle']; ?> €</h6>
                            </div>
                        </div>
                        <ul>
                            <h7><?php echo $donnees['DescriptionArticle']; ?></h7>
                        </ul>
                        <hr style="border-top: 1px solid red;">
                    </div>
                    </div>
                    <?php
                }
$reponse->closeCursor(); // Termine le traitement de la requête

?>
                </div>
            </div>
        </div>
    </section>
    <!-- Listing Section End -->

    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/jquery.nicescroll.min.js"></script>
    <script src="js/jquery.barfiller.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>