<?php 

class ItemViewer
{
	private function db_connect()
    {
        $db = new PDO('mysql:host=localhost;dbname=govfcdb;charset=utf8', 'root', 'poney');
        return $db;
    }

        public function connect($idItem)
    {
        $db = $this->db_connect();

        //check login
        //creer session
        //rediriger

    }

    public function getItemView($id)
    {
        $db = $this->db_connect();

        $req = $db->prepare("SELECT titre,description, montant,dateDepot,type,nom , prenom FROM Item,Membre WHERE Item.id=? AND Membre.id = Item.idMembre ;");

        $result = array();

        if ($req->execute(array($id))) {
          while ($row = $req->fetch(PDO::FETCH_ASSOC)) {
            array_push($result, $row);
            }
        }
      //  echo sizeof($row); 
      // echo sizeof($result);
      // echo json_encode($result);

        return $result;
}
}