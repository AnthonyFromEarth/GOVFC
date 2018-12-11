<?php 

class LoginManager
{
	private function db_connect()
    {
        $db = new PDO('mysql:host=localhost;dbname=govfcdb;charset=utf8', 'root', 'poney');
        return $db;
    }

    public function connect($email,$password)
    {
        $db = $this->db_connect();

        //check login
        //creer session
        //rediriger

    }
}