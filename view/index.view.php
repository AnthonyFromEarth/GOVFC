<?php include('view/parts/header.php');?>

<main role="main" class="container">
	<form method="get" action="index.php"> 
		

		<div class="input-group-btn search-panel">
			<div class="dropdown">

				<button class="col btn btn-outline-dark dropdown-toggle" style="border-width: 1px;" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					<span id="filtre" class="text-capitalize"> <i id="filtre-logo" class="fa fa-globe"></i>  Tout </span> <span class="caret"></span>
				</button>

				<div class="w-100 dropdown-menu text-center" aria-labelledby="dropdownMenuButton">
					<a v ="biens" l="fa fa-gavel" class="dropdown-item" href="#"><i class="fa fa-gavel"></i> <p>Biens</p></a>
					<a v="services" l="fa fa-handshake-o" class="dropdown-item" href="#"><i class="fa fa-handshake-o"></i> <p>Services</p></a>
					<a v="tout" l="fa fa-globe" class="dropdown-item" href="#"><i class="fa fa-globe"></i> <p>Tout</p></a>
				</div>
			</div>
		</div>

		<div class="col-xs-12">
			<div class="input-group">
				<input type="hidden" name="categ" value="tout" id="categ">   
				<input type="text" class="form-control" name="x" placeholder="Je recherche ...">
				<span class="input-group-btn">
					<button class="btn btn-default" type="submit"><i class="fa fa-search"></i></button>
				</span>
			</div>
		</div>

		<div class="col-xs-12">
			<div class="input-group">
				<input style="text-align: center;" type="text" class="form-control" name="codePostal" placeholder="Code Postal ou ville">
			</div>
		</div>

	</form>



	<div class="container mt-5">
		<div class="row">
			<?php

			$t = file("chat.txt");

			for($i = 0;$i<32;$i++){
				$id = mt_rand(0,16);
				$title = $t[$id];

					/*if(mb_strlen($title) <= 20){
						$title = $title." <br>　";
					}
					*/
					ob_start();
					require('templateCard.php');
					$card = ob_get_clean();
					echo $card;
				}
				?>
			</div>
		</main>

		<?php include('view/parts/footer.php');?>