<?php
ini_set('display_errors', true);
require_once __DIR__ . '/dbconnection.php';

$connection = new DbConnection();                                   
$conn=$connection->db_connect();
$id=$_GET['id'];

$query=$conn->prepare("delete from books where id='$id'");
$query->execute();
header('LOCATION:display.php');

?>

