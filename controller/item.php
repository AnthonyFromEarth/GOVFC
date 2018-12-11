<?php

	$title = "Location";
	$page_id = "item";
	$id = $_GET['id']; 
	
	//Inclusion du modèle
	include_once('model/item.model.php');

	//Traitement

	$itemViewer = new ItemViewer(); //transmettre l'id de l'objet 
	$result = $itemViewer->getItemView($id);


	//Inclusion de la vue
	include_once('view/item.view.php');
