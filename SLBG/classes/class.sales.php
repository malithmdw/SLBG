<?php

require_once 'DB/dbconfig.php';

class Sales{	
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
	
	public function select_all_items($searchInput,$location,$category){
		try{
			$query="SELECT * FROM sales";
			if($searchInput!="" || $location!="" || $category !=""){
				$query="SELECT * FROM sales WHERE (title LIKE '%{$searchInput}%' OR description LIKE '%{$searchInput}%') 
				AND category={$category} AND province={$location} show=1 ORDER BY post_date";
			}else if($searchInput!="" || $location!=""){
				
			}else if($location!="" || $category !=""){
				
			}else if($searchInput!="" || $category !=""){
				
			}
			
			$stmt = $this->conn->prepare();
			$stmt->bindparam(":searchInput",$searchInput);
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
	public function add_views($advertiesmentId){
		try{
			$stmt = $this->conn->prepare();
			$stmt->bindparam(":searchInput",$searchInput);
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
	

	
}







query for index>>

//top routs

SELECT t.route_num,t.start,t.destination,t.through,SUM(seats) FROM booker b,
(SELECT b.bus_id,r.rou_id,r.route_num,r.start,r.destination,r.through 
	FROM route r,bus_register b WHERE b.route_no=r.rou_id) t 
WHERE t.bus_id=b.bus_id AND b.activate_or_cancel=1 
AND b.book_date='2016-01-19' GROUP BY t.rou_id ORDER BY SUM(seats) DESC



//top service providers
SELECT t.route_num, t.start, t.destination, t.through, t.bus_id, t.bus_name, t.condition, t.booking_price,t.image_url
FROM booker b, 
(SELECT b.bus_id, b.bus_name, b.condition, b.booking_price,b.image_url, r.rou_id, r.route_num, r.start, r.destination, r.through
	FROM route r, bus_register b WHERE b.route_no = r.rou_id) t
WHERE t.bus_id = b.bus_id
AND b.activate_or_cancel =1
AND b.book_date = '2016-01-19'
ORDER BY seats DESC

