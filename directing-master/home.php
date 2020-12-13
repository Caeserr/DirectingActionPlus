<?php

/* PAGE D'ACCUEIL DE L'UTILISATEUR */

include('Dbconfig.php');
include('Session.php');
$userDetails=$userClass->userDetails($session_uid);
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Directing Template">
    <meta name="keywords" content="Directing, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Directing | Website </title>

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

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Header Section Begin -->
    <header class="header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3 col-md-3">
                    <div class="header__logo">
                        <a href="home"><img src="img/logo.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-9 col-md-9">
                    <div class="header__nav">
                        <nav class="header__menu mobile-menu">
                            <ul>
                                <li class="active"><a href="index">Accueil</a></li>
                                <li><a href="listarticles.php">Articles</a></li>
                                <li><a href="Discussions.html">Discussions</a></li>
                                <li><a href="deconnexion.php">Deconnexion</a></h4>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
            <div id="mobile-menu-wrap"></div>
        </div>
    </header>
    <!-- Header Section End -->

    <!-- Hero Section Begin -->
    <section class="hero set-bg" data-setbg="img/hero/hero-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="hero__text">
                        <div class="section-title">
                        <h2 style="font-family:'Montserrat', sans-serif;">Welcome <?php echo $userDetails->username; ?></h2>

                        <br>
                        <br>
                        <br>


                            <h3 style="color: white;">Hôtels, Restaurant, Voyages.. Au meilleur prix</h3>
                            
                            
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->


    <!-- Categories Section Begin -->
    <section class="categories spad">
        <div class="container">
        <div class="section-title">
                        <h2>Catégorie</h2>
                    </div>
                    <div class="categories__item__list">
                        <div class="categories__item">
                            <img src="img/categories/cat-1.png" alt="">
                            <h5>Fast-Food</h5>
                            
                        </div>
                        <div class="categories__item">
                            <img src="img/categories/cat-2.png" alt="">
                            <h5>Restaurant</h5>
                            
                        </div>
                        <div class="categories__item">
                            <img src="img/categories/cat-3.png" alt="">
                            <h5>Hôtels</h5>
                            
                        </div>
                        <div class="categories__item">
                            <img src="img/categories/cat-4.png" alt="">
                            <h5>Soin</h5>
                            
                        </div>
                        <div class="categories__item">
                            <img src="img/categories/cat-5.png" alt="">
                            <h5>Shopping</h5>
                            
                        </div>

                        
                        <div class="section-title">
                            <hr>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

            

    <!-- Feature Location Section Begin -->
    <section class="feature-location spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Destinations à la une </h2>
                        <p>Restaurant, bars, cafés</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <a href="#" class="feature__location__item large-item set-bg"
                        data-setbg="img/feature-location/fl-1.jpg">
                        <div class="feature__location__item__text">
                            <h5>Washington, D.C</h5>
                            <ul>
                                <li>...</li>
                                <li></li>
                            </ul>
                        </div>
                    </a>
                </div>
                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <a href="#" class="feature__location__item set-bg"
                                data-setbg="img/feature-location/fl-2.jpg">
                                <div class="feature__location__item__text">
                                    <h5>Chicago</h5>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <a href="#" class="feature__location__item set-bg"
                                data-setbg="img/feature-location/fl-3.jpg">
                                <div class="feature__location__item__text">
                                    <h5>San Antonio</h5>
                                </div>
                            </a>
                        </div>
                    </div>
                    <a href="#" class="feature__location__item set-bg" data-setbg="img/feature-location/fl-4.jpg">
                        <div class="feature__location__item__text">
                            <h5>Los Angeles</h5>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- Feature Location Section End -->
    <!-- Footer Section Begin -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="footer__about">
                        <div class="footer__about__logo">
                            <a href="./index.html"><img src="img/footer-logo.png" alt=""></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 offset-lg-1 col-md-6">
                    <div class="footer__address">
                        <ul>
                            <li>
                                <span>Call Us:</span>
                                <p>(+33) 658-589-582</p>
                            </li>
                            <li>
                                <span>Email:</span>
                                <p>bonjour@gmail .com</p>
                            </li>
                            <li>
                                <span>Fax:</span>
                                <p>(+33) 123-456-789</p>
                            </li>
                            <li>
                                <span>Contact :</span>
                                <div class="footer__social">
                                    <a href="facebook.com"><i class="fa fa-facebook"></i></a>
                                    <a href="instagram.com"><i class="fa fa-instagram"></i></a>
                                    <a href="twitter.com"><i class="fa fa-twitter"></i></a>
                                    <a href="skype.com"><i class="fa fa-skype"></i></a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 offset-lg-1 col-md-6">

                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer__copyright">
                        <div class="footer__copyright__text"><p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by  Kenny 
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                        </div>
                        <div class="footer__copyright__links">
                            <a href="#">Terms</a>
                            <a href="#">Privacy Policy</a>
                            <a href="#">Cookie Policy</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

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
