<?php


include("Dbconfig.php");
include('function.php');
 
$userClass = new userClass();

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

	<meta name="viewport" content="width=device-width, initial-scale=1.0">    
	<title>S'enregistrer - Directing </title>

	<!-- Css Styles -->
	<link rel="stylesheet" href="css-register.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">


</head>
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
  .boutton input:hover {
    opacity: 0.8;
  }
  </style>
<body>
				
					<form method="post" action="" name="login">				   
				   <h4 class="text-warning text-center pt-5">Créer un compte</h4>  	   
				   <label>     
						 <input type="text" class="input" name="usernameReg"placeholder="Username"value="<?php if(isset($username)){ echo $username; }?>" required>        
				   <div class="line-box">         
					   <div class="line"></div>        
				   </div>    
				   </label>    	   
				   <label>     
					 <input type="text" class="input" name="NomReg" placeholder="Nom" value="<?php if(isset($Nom)){ echo $Nom; }?>" required>
                  
					 <div class="line-box">          
						 <div class="line"></div>        
					 </div>    
				   </label>    	   
				   <label>     
					 <input type="text" class="input" name="PrenomReg" placeholder="Prenom" value="<?php if(isset($Prenom)){ echo $Prenom; }?>" required>                   
					 <div class="line-box">          
						 <div class="line"></div>        
					 </div>    
			 </label>     
			  
			 <label>     
					 <input type="password" class="input"name="passwordReg" placeholder="Password" value="<?php if(isset($password)){ echo $password; }?>" required>     
					<div class="line-box">          
					   <div class="line"></div>        
					 </div>   
			 </label>    
			 <div class="boutton"> 
				<input type="submit"  name="signupSubmit" value="S'inscrire">
				<a href="index.php">Retour à l'accueil</button>
                                </div>  
				 </form> 
						</div>
					</div>

				
			</article>


</body>
</html>