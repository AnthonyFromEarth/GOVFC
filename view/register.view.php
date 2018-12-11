<?php include('view/parts/header.php');?>

<div class="container">

	<form class="form-signin" id="registerForm">

		<h1 style="text-align: center;" class="h3 mb-3 font-weight-normal">Enregistrez vous:</h1>
		<label for="email" class="sr-only">Adresse Email</label>
		<input type="email" id="email" class="form-control" placeholder="Adresse email" required autofocus>

		<label for="nom" class="sr-only">Nom</label>
		<input type="text" id="nom" class="form-control" placeholder="Nom" required autofocus>

		<label for="prenom" class="sr-only">Prénom</label>
		<input type="text" id="prenom" class="form-control" placeholder="Prénom" required autofocus>


		<label for="password" class="sr-only">Mot de passe</label>
		<input type="password" id="password" class="form-control" placeholder="Mot de passe" required>
		<label for="password2" class="sr-only">Mot de passe (Confirmation)</label>
		<input type="password" id="password2" class="form-control" placeholder="Mot de passe (Confirmation)" required>





		<button class="btn btn-lg btn-primary btn-block" type="submit">Créer un compte</button>
		<p class="mt-5 mb-3 text-muted">&copy; 2018-2019</p>
	</form>
</div>


<?php include('view/parts/footer.php');?>