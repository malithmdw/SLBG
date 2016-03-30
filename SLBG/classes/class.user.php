<?php

require_once 'DB/dbconfig.php';

class USER{	
	private $conn;
	
	public function __construct(){
		$database = new Database();
		$db = $database->dbConnection();
		$this->conn = $db;
    }	
	public function runQuery($sql){
		$stmt = $this->conn->prepare($sql);
		return $stmt;
	}
	
	public function lasdID(){
		$stmt = $this->conn->lastInsertId();
		return $stmt;
	}
	
	public function register($uname,$email,$upass,$code,$name){
		try{							
			$password = md5($upass);
			$stmt = $this->conn->prepare("INSERT INTO users(id,username,password,email,name,nic,joined, token_code) 
			                                         VALUES('',:user_name,:user_pass,:user_mail,:name,'',NOW(),:active_code)");
			$stmt->bindparam(":user_name",$uname);
			$stmt->bindparam(":user_mail",$email);
			$stmt->bindparam(":user_pass",$password);
			$stmt->bindparam(":active_code",$code);
			$stmt->bindparam(":name",$name);
			$stmt->execute();	
			return $stmt;
		}catch(PDOException $ex){
			echo $ex->getMessage();
		}
	}
			
}