<?php 
require_once("config.php");


class Connection{
//making it global
public $conn; 	

//autostarting the connection
public function __construct(){
	$this->conn();
}

//making function for connection
public function conn() {
//making connection
// $this->conn = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);

//object oriented form of connection
$this->conn = new mysqli(DB_HOST,DB_USER,DB_PASS,DB_NAME);

//checking errors if any
// if(mysqli_connect_errno()){
// 	die("Failed to connect becoz:".mysqli_connect_error());
// }

//object oriented error checking
//here we are using mysqli property
if($this->conn->connect_errno){
	die("Failed to connect becoz:".$this->conn->connect_error);
}

}

public function query($sql){
	//here we are using method
	$result = $this->conn->query($sql);
	//using another method of this class in this method
	$this->confirm_query($result);
	return $result;
}

private function confirm_query($result){
	if(!$result){
		die("Failed".$this->conn->error);
	}
}

public function escape_string($string){
	//here we are using mysqli method
    $escape_string = $this->conn->real_escape_string($string);
    return $escape_string;
}

public function the_insert_id(){
	//this method returns the last inserted id
	return $this->conn->insert_id;
}

}// end of class

$connection=new Connection();
?>