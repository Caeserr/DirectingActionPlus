<?php

/* PAGE D'ACCUEIL DE L'UTILISATEUR */

include('Dbconfig.php');
include('Session.php');
$userDetails=$userClass->userDetails($session_uid);


/* Signup Form */
if (!empty($_POST['signupSubmit'])) {
    $username=$_POST['usernameReg'];
    $Nom=$_POST['NomReg'];
    $Prenom=$_POST['PrenomReg'];
    $password=$_POST['passwordReg'];


    $id=$userClass->userRegistration($username, $Nom, $Prenom, $password);
    if ($id) {
        $url=BASE_URL.'home.php';
        header("Location: $url"); // Page redirecting to home.php
    } else {
        $errorMsgReg="Username already exists.";
    }
}

?>



<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Directing Template">
    <meta name="keywords" content="Directing, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Action | Plus </title>

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
    <link rel="stylesheet" href="css-register.css" type="text/css">

    
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
                        <a href="./home.html"><img src="img/logo.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-9 col-md-9">
                    <div class="header__nav">
                        <nav class="header__menu mobile-menu">
                            <ul>
                                <li class="active"><a href="index.php">Accueil</a></li>
                                <li><a href="listing.html">Produits</a></li>
                                <li><a href="#">Discussions</a></li>
                                <li><a href="<?php echo BASE_URL; ?>logout.php">Deconnexion</a></h4>
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
                        <br>
                        <br>

                        <form method="post" action="" name="signup">
				   
                   <h4 class="text-warning text-center pt-5">Ajouter un article</h4>  
       
                   <label>     
                         <input type="text" class="input" name="nomArticleReg"placeholder="Nom de l'article"/>        
                   <div class="line-box">         
                       <div class="line"></div>        
                   </div>    
                   </label>    
       
                   <label>     
                     <input type="text" class="input" name="prixArticleReg" placeholder="Prix de l'article/>                   
                     <div class="line-box">          
                         <div class="line"></div>        
                     </div>    
                   </label>    
       
                   <label>     
                     <input type="text" class="input" name="descriptionArticlereg" placeholder="Description de l'article/>                   
                     <div class="line-box">          
                         <div class="line"></div>        
                     </div>    
             </label>     
              
               <label>     
                     <input type="password" class="input"name="passwordReg" placeholder="Password"/>        
                    <div class="line-box">          
                       <div class="line"></div>        
                     </div>   
               </label>     
       
                <input type="submit" class="button" name="signupSubmit" value="Signup"> 
                 </form> 
             </div> 
    </section>
    <!-- Hero Section End -->

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
