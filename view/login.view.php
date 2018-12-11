<?php include('view/parts/header.php');?>

<div class="container">

 <form method="post" class="form-signin">
     
      <h1 style="text-align: center;" class="h3 mb-3 font-weight-normal">Connectez vous:</h1>
      <label for="email" class="sr-only">Adresse Email</label>
      <input type="email" id="email" class="form-control" placeholder="Adresse email" required autofocus>
      <label for="password" class="sr-only">Password</label>
      <input type="password" id="password" class="form-control" placeholder="Mot de passe" required>

      <button class="btn btn-lg btn-primary btn-block" type="submit">Se connecter</button>
      <p class="mt-5 mb-3 text-muted">&copy; 2018-2019</p>
    </form>
</div>

<?php include('view/parts/footer.php');?>