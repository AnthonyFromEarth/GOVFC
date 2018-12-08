<?php 

class ItemManager
{
	private function db_onnect()
    {
        $db = new PDO('mysql:host=localhost;dbname=govfcdb;charset=utf8', 'root', 'poney');
        return $db;
    }

    public function getItems($offset = 0,$count = 20)
    {
        $db = $this->dbConnect();
        //$req = requete préparée
        //$res = $req->execute($,$)

        return $res;
    }
}