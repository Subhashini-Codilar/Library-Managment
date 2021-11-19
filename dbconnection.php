<?php

class DbConnection{
    public $servername;
    public $username;
    public $password;
    public $databasename;

    public function db_connect()
    {
        $this->servername="localhost";
        $this->username="root1";
        $this->password="P4ssw0rd@";
        $this->databasename="library";

        try{
        $db_connect = new PDO("mysql:host=$this->servername;dbname=$this->databasename",$this->username,$this->password);
        $db_connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //echo "successfull";
        }	
		catch (PDOException $e) {
		echo "Connection failed: " . $e->getMessage();
		}
        return $db_connect;
	}
}
$a=new DbConnection();
$a->db_connect();
?>