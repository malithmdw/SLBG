<?php

require_once 'DB/dbconfig.php';

class Booking{	
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
	
	public function count_today_reserved_seats($busid,$date){
		try{						
			$stmt = $this->conn->prepare("
				SELECT SUM(seats) 
				FROM booker 
				WHERE book_date=:bookdate AND bus_id=:busid AND activate_or_cancel=1");
			$stmt->bindparam(":busid",$busid);
			$stmt->bindparam(":bookdate",$date);
			$stmt->execute();
			if($stmt->rowCount() > 0){
				while($row=$stmt->FETCH(PDO::FETCH_ASSOC)){
					if($row['SUM(seats)'] !="" || $row['SUM(seats)']!=0){
						return $row['SUM(seats)'];						
					}
					return 0;
				}
			}else{
				return 0;
			}
			return $stmt;
		}catch(PDOException $ex){
			echo $ex->getMessage();
		}
	}
	
	public function get_data_of_all_booker($date){
		try{						
			$stmt = $this->conn->prepare("SELECT * 
				FROM booker 
				WHERE book_date=:bookdate AND activate_or_cancel=1");
			$stmt->bindparam(":busid",$busid);
			$stmt->bindparam(":bookdate",$date);
			$stmt->execute();	
			return $stmt;
		}catch(PDOException $ex){
			echo $ex->getMessage();
		}
	}
	public function get_sms_data_to_bus($busid,$date){
		try{						
			$stmt = $this->conn->prepare("SELECT COUNT(*) 
				FROM booker 
				WHERE book_date=:bookdate AND bus_id=:busid AND activate_or_cancel=1");
			$stmt->bindparam(":busid",$busid);
			$stmt->bindparam(":bookdate",$date);
			$stmt->execute();	
			return $stmt;
		}catch(PDOException $ex){
			echo $ex->getMessage();
		}
	}
	
	

	
}

