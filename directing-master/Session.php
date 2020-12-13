<?php

/* Permet de valider et de stocker la valeur de la session de l'utilisateur.*/

if(!empty($_SESSION['id']))
{
$session_uid=$_SESSION['id'];
include('function.php');
$userClass = new userClass();
}
if(empty($session_uid))
{
$url=BASE_URL.'index.php';
header("Location: $url");
}

?>