<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>
		<?php 
			if(isset($title)){
				echo "GOVFC - " . $title;
			}else{
				echo "GOVFC - Des voisins meilleurs pour un Monde meilleur";
			} 
		?>
			
	</title>

	<!-- Bootstrap core CSS -->
	<link href="https://stackpath.bootstrapcdn.com/bootswatch/4.1.3/lux/bootstrap.min.css" rel="stylesheet" integrity="sha384-ML9h/UCooefre72ZPxxOHyjbrLT1xKV0AHON1J+OlOV2iwcYemqmWyMfTcfyzLJ1" crossorigin="anonymous">

	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css" integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns" crossorigin="anonymous">


	
	<style type="text/css">
	body {
		min-height: 75rem;
		padding-top: 4.5rem;
	}


	nav{
		padding-top: 3px !important;
		padding-bottom: 3px !important;
	}

	.dropdown-menu a {
		height:3rem;


	}

	.crop-text-1 {
		-webkit-line-clamp: 1;
		overflow : hidden;
		text-overflow: ellipsis;
		display: -webkit-box;
		-webkit-box-orient: vertical;
	}


</style>
</head>
<body>

<?php include_once('view/parts/nav.php');?>