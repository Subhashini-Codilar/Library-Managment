<?php
ini_set('display_errors', true);
require_once __DIR__ . '/dbconnection.php';
class Insert{
    public $id;
    public $book_name;
    public $author_name;
	public $book_image;
    public $published_date;
	public $conn;
	public $data;

    public function insert(){
		$data = $_POST;
          $connection = new DbConnection();                                   
          $this->conn=$connection->db_connect();
          $this->id = $data['id'];
          $this->book_name = $data['book_name'];
          $this->author_name = $data['author_name'];
          $this->published_date = $data['published_date'];
          $this->book_image = $data['book_image'];
          $sql=$this->conn->prepare("INSERT INTO books VALUES ('$this->id','$this->book_name','$this->author_name','$this->book_image','$this->published_date')");
          $sql->execute();
          header('LOCATION:display.php');
			
    }
}

$b=new Insert();
$b->insert();
?>