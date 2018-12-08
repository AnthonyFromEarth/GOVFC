<?php 
//Routeur : Permet d'aiguiller le traffic sur différents controlleurs(qui gèrent différents modules)


//Par défaut : index (home/recherche)
if(!isset($_GET['module']) || $_GET['module'] == 'index'){
	include_once('controller/index.php');
}else if ($_GET['module'] == 'profile'){

}else{
	//include page 404
}

?>