<?php

	$title = "Acceuil";
	
	//Inclusion du modèle
	include_once('model/index.model.php');

	//Traitement

	$itemManager = new ItemManager();
	//$result = $itemManager->getItems();


	//Inclusion de la vue
	include_once('view/index.view.php');
