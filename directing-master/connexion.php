<?php


include("Dbconfig.php");
include('function.php');
$userClass = new userClass();



/* Login Form */
if (!empty($_POST['loginSubmit']))
{
$usernameEmail=$_POST['usernameEmail'];
$password=$_POST['password'];

$id=$userClass->userLogin($usernameEmail,$password);
if ($id) {
    $url=BASE_URL.'home.php';
    header("Location: $url"); // Page redirecting to home.php
}
else
{
    $errorMsgLogin="Please check login details.";
}
}
?>

<!DOCTYPE html> 
  <html lang="fr"> 
    <head>  
      <meta charset="UTF-8">  
	  <meta name="viewport" content="width=device-width, initial-scale=1.0">                
    <title>ActionPlus | Connexion </title>  


      <!-- Css Styles -->
      <link rel="stylesheet" href="css-register.css" type="text/css">
      <link rel="stylesheet" href="css/style.css" type="text/css">

    


      <meta name="viewport" content="width=device-width, initial-scale=1"> 
    </head>
    <style>
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
  .boutton input {
    font-family: 'Titillium Web', sans-serif;
    display: inline-block;
    text-transform: uppercase;
    color: #fff;
    text-decoration: none;
    border: none;
    background: #f03250;
    padding: 12px 40px;
    font-size: 14px;
    font-weight: 700;
    border-radius: 1px;
    margin-top: 15px;
    -webkit-transition: 0.2s all;
    transition: 0.2s all;   
  }
  .boutton input1:hover {
    opacity: 0.8;
  }
      .boutton a:hover {
    opacity: 0.8;
  }

   </style>
    <body> 
   <div>   

      <form method="post" action="" name="login">
              
                <h4 class="text-warning text-center pt-5">Se connecter à son compte</h4>
                <h5><p class="text-center text-muted">Pas de compte ? <a href="inscription.php"><b>Créer un compte</b></a></h5></p>
                <br><br>

            <input type="text" class="input" name="usernameEmail" placeholder="Username" autocomplete="off" />        
          <div class="line-box">         
            <div class="line">



            
            </div>        
          </div>    
          </label>    


            <label>     
                  <input type="password" class="input"name="password" placeholder="Password"/>        
                <div class="line-box">          
                    <div class="line"></div>        
                  </div>   
        </label>     
        
        <div class="boutton">
        <input type="submit" name="loginSubmit" value="Login">
                                <a href="index.php">Retour à l'accueil</button>
                                </div>  
        
              </form> 
          </div> 
          <div>   
          </div> 
        </body> 
    </html>