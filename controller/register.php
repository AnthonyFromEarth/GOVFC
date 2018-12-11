<?php 

$title = "Créer un compte";
$page_id = "register";

include_once('model/register.model.php');

$registerManager = new RegisterManager();
$registerManager->register();


	//Traitement

if(isset($_GET['json'])){
	//echo json_encode($_POST);
}else{
	include_once('view/register.view.php');
}