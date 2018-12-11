<?php 

class RegisterManager
{
	private function db_connect()
    {
        $db = new PDO('mysql:host=localhost;dbname=govfcdb;charset=utf8', 'root', 'poney');
        return $db;
    }

    public function register()
    {
        $db = $this->db_connect();

        $errors = array();

        if(!isset($_GET['json'])){
            return;
        }

        $email = $_POST["email"];
        $nom = $_POST["nom"];
        $prenom = $_POST["prenom"];
        $pass1 = $_POST["pass1"];
        $pass2 = $_POST["pass2"];




        if (!preg_match("/^[a-zA-Z0-9]*$/",$nom)) {
          $errors[] = "Le nom doit seulement contenir des lettres et des chiffres"; 
      }

      if (!preg_match("/^[a-zA-Z0-9]*$/",$prenom)) {
          $errors[] = "Le prenom doit seulement contenir des lettres et des chiffres"; 
      }

      if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
          $errors[] = "L'email entrée est incorrecte"; 
      }

      if($pass1 != $pass2){
        $errors[] = "Les mots de passes ne sont pas les mêmes !";
    }

    if($pass1 == $pass2 && mb_strlen($pass1) < 8){
        $errors[] = "Le mot de passe doit faire au moins 8 caractères";
    }



    $req = $db->prepare("SELECT COUNT(*) AS cpt FROM Membre WHERE email = ? ;");

    $req->execute(array($email));

    $existe = $req->fetch(PDO::FETCH_ASSOC)["cpt"];

    if($existe){
        $errors[] = "L'utilisateur ". $email . " existe déjà.";
    }


    if(sizeof($errors) == 0){
        //insert
        $ins = $db->prepare("INSERT INTO Membre (email, nom, prenom, password,salt,codePostal,adresse,role,Cagnotte) VALUES (:email,:nom,:prenom,:pass,:salt,:cp,:adr,:role,:cagnotte) ;");
        $ins->bindParam(':email',$email);
        $ins->bindParam(':nom',$nom);
        $ins->bindParam(':prenom',$prenom);
        $ins->bindParam(':pass',$pass);
        $ins->bindParam(':cp',$cp);
        $ins->bindParam(':adr',$adr);
        $ins->bindParam(':role',$role);
        $ins->bindParam(':cagnotte',$cagnotte);
        $ins->bindParam(':salt',$salt);

        //Adresse à gérer plus tard dans le formulaire
        $cp = 34999;
        $adr = '8 rue des poneys verts';

        //Cagnotte avec valeur par défaut
        $cagnotte = MONEY_ON_JOIN;
        
        //Un utilisateur qui s'inscrit a le rang de base
        $role = 'USER';
        

        //Hashage du mot de passe + génération du salt (idéalement) unique
        $pass = password_hash($pass1, PASSWORD_DEFAULT);
        $salt = uniqid(mt_rand(), true);

        $b = $ins->execute();

        $tableRendu = array();

        if($b == 1){
            $tableRendu['result'] = 'success';
            $tableRendu['message'] = "Votre compte à été crée avec succès !";
        }else{
            $tableRendu['result'] = 'failure';
            $tableRendu['message'] = "Une erreur est survenue lors de la création de votre compte";
        }

         echo json_encode($tableRendu, JSON_UNESCAPED_UNICODE);

        //echo "Création de l'entrée : " . $b;
    }else{
        //Si une erreur existe, on renvoie la liste en JSON
        echo json_encode($errors, JSON_UNESCAPED_UNICODE);
    }

        //autologin

        //envoieEmail()

        //creer session
        //rediriger

}


}