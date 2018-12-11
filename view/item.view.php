<?php include_once('view/parts/header.php');?>



  <div class="container">


    <section class="row">
      <h2 class ="col-lg-12 Titre"><?= $result[0]['titre'] ?></h2>
    </section>

    <section class="row">

      <div class="col-xs-12 col-sm-4"><img src="https://previews.123rf.com/images/kurhan/kurhan1011/kurhan101100235/8255788-plombier-mature-fixant-un-%C3%A9vier-de-cuisine-.jpg" class=img-responsive width="100%" ></div>


      <div class="col-xs-12 col-sm-8">
        <section class="row">
          <div class="col-xs-6 col-sm-12 col-md-8 Membre "> <p > <?= $result[0]['nom'] ?> , <?= $result[0]['prenom'] ?>  </p> </div>
          <div class="col-xs-6 col-sm-12 col-md-4 Date"> <p > <?= $result[0]['dateDepot'] ?> </p> </div>
          <div class="col-xs-6 col-sm-12 col-md-8 Adresse"> <p> Adresse </p> </div>
          <div class="col-xs-6 col-sm-12 col-md-4 Prix"> <p> Respect/jour : <?= $result[0]['montant'] ?> FR </p> </div>

        </section>


      </div>
      <div class="col-xs-12 col-sm-12">
       <section class="row">
         <div class="col-sm-6 col-md-8 Description"> <p> <?= $result[0]['description'] ?> </p> </div>
         <div class="col-sm-6 col-md-4 Calendrier"> <p> Calendrier des dispos </p> </div>
       </section>
     </div>




   </section>
   <section class="row">
     <div class="col-md-5">
       <button type="button" class="btn btn-success btn-block">Je reserve</button>
     </div>
     <div class="col-md-4">
       <button type="button" class="btn btn-info btn-block">Contacter</button>
     </div>
     <div class="col-md-3">
       <button type="button" class="btn btn-warning btn-block">Signaler</button>
     </div>
   </section>





 </div>


<?php include_once('view/parts/footer.php');?>

