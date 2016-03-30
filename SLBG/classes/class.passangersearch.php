<?php

require_once 'DB/dbconfig.php';

class PassengerSearch{	
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
		
	public function get_all_routs_by_route_no($route_no){
		try{						
			$stmt = $this->conn->prepare("SELECT * FROM route WHERE route_no LIKE %:routeno%");
			$stmt->bindparam(":routeno",$route_no);
			$stmt->execute();	
			return $stmt;
		}catch(PDOException $ex){
			echo $ex->getMessage();
		}
	}
	
	public function get_all_routs($place){
		try{						
			$stmt = $this->conn->prepare("SELECT r.route_no, r.start, r.destination, r.through  
					FROM sections s,route r WHERE s.section_name=:place 
					AND r.rou_id=s.route_id
					");
			$stmt->bindparam(":place",$place);
			$stmt->execute();	
			return $stmt;
		}catch(PDOException $ex){
			echo $ex->getMessage();
		}
	}
	

	
	
	
	
	
	public function get_all_routs_extended($place1,$place2){
		try{						
			$stmt = $this->conn->prepare("SELECT * 
					FROM sections s WHERE s.section_name=:place1");					
			$stmt->bindparam(":place1",$place1);
			$stmt->execute();
			$array2d=array();
			
			$startOfRout="";
			$destOfRout="";
			$i=0;
			if($stmt->rowCount() > 0){
				while($row=$stmt->FETCH(PDO::FETCH_ASSOC)){	
					$availablerouts=$row['route_id'];//pass available routs one by one
					$subid=$row['sub_id'];
					$dest_sub_id="";
					
					$innerarr=PassengerSearch::get_route_helper($place2,$availablerouts);
					if($innerarr!=0){
						if($innerarr['sub_id']>$subid){
							$destOfRout=(PassengerSearch::get_dst_helper($availablerouts));
						}else{
							$destOfRout=(PassengerSearch::get_start_helper($availablerouts));
						}
						$innerarr['my_direction_start_of_rout']=$startOfRout;
						$innerarr['my_direction_end_of_rout']=$destOfRout;
						$innerarr['start_sec_id']=$row['sec_id'];
						$array2d[$i]=$innerarr;
						$i=$i+1;
					}					
				}
				return $array2d;
			}else{
				return 0;
			}		
		}catch(PDOException $ex){
			echo $ex->getMessage();
		}
	}
	
	
	
	
	
	public function get_booking_view($place1,$place2){
		try{						
			$stmt = $this->conn->prepare("SELECT * 
					FROM sections s WHERE s.section_name=:place1");					
			$stmt->bindparam(":place1",$place1);
			$stmt->execute();
			$array2d=array();
			
			$startOfRout="";
			$destOfRout="";
			$i=0;
			if($stmt->rowCount() > 0){
				while($row=$stmt->FETCH(PDO::FETCH_ASSOC)){	
					$availablerouts=$row['route_id'];//pass available routs one by one
					$subid=$row['sub_id'];
					$dest_sub_id="";
					
					$resultarray1=PassengerSearch::get_route_helper($place2,$availablerouts);//search start and destination is exist in same route
					if($resultarray1!=0){//if exist
						if($resultarray1['sub_id']>$subid){
							$destOfRout=(PassengerSearch::get_dst_helper($availablerouts));
						}else{
							$destOfRout=(PassengerSearch::get_start_helper($availablerouts));
						}
						
						$r=PassengerSearch::get_view_data($resultarray1['route_id'],$row['sec_id'],$resultarray1['sec_id'],$destOfRout);
						if($r!=0){
							foreach($r as $singlerow){							
								$array2d[$i]=$singlerow;
								$i=$i+1;
							}
						}
					}					
				}
				return $array2d;
			}else{
				return 0;
			}		
		}catch(PDOException $ex){
			echo $ex->getMessage();
		}
	}
	
	public function get_route_helper($place,$routeid){//Inner function for get_all_routs_extended($place1,$place2);
		try{
			$innerarray=array();			
			$stmt2 = $this->conn->prepare("
					SELECT s.sec_id,s.route_id,s.sub_id,s.section_name,r.route_num,r.start,r.destination,r.through 
					FROM sections s,route r 
					WHERE s.route_id=r.rou_id 
					AND s.route_id = :routeid
					AND s.section_name = :place
					");		
			$stmt2->bindparam(":place",$place);
			$stmt2->bindparam(":routeid",$routeid);
			$stmt2->execute();
			if($stmt2->rowCount() > 0){
				while($row2=$stmt2->FETCH(PDO::FETCH_ASSOC)){
					$innerarray=$row2;
					return $innerarray;
				}				
			}else{				
				return 0;
			}
		}catch(PDOException $ex){
			echo $ex->getMessage();
		}		
	}
	
	public function get_start_helper($routeid){
		try{						
			$stmt = $this->conn->prepare("SELECT s.section_name 
					FROM sections s WHERE s.sub_id=1 AND s.route_id=:routeid ORDER BY sub_id");	 				
			$stmt->bindparam(":routeid",$routeid);
			$stmt->execute();			
			if($stmt->rowCount() > 0){
				while($row=$stmt->FETCH(PDO::FETCH_ASSOC)){
					return $row['section_name']; 
				}
			}else{
				print("No routs");
			}		
		}catch(PDOException $ex){
			echo $ex->getMessage();
		}
	}
	
	
	public function get_dst_helper($routeid){
		try{						
			$stmt = $this->conn->prepare("SELECT s.section_name 
					FROM sections s WHERE s.route_id=:routeid ORDER BY sub_id DESC");					
			$stmt->bindparam(":routeid",$routeid);
			$stmt->execute();			
			if($stmt->rowCount() > 0){
				while($row=$stmt->FETCH(PDO::FETCH_ASSOC)){
					return $row['section_name']; 
				}
			}else{
				print("No routs");
			}		
		}catch(PDOException $ex){
			echo $ex->getMessage();
		}
	}	
	
	public function get_view_data($route_id,$start_sec_id,$dest_sec_id,$direction){
		//Print("<br>".$route_id."-".$start_sec_id."-".$dest_sec_id."-".$direction."<br>");//
		try{
			$arrres2D=array();
			$stmt = $this->conn->prepare("
				SELECT *
				FROM route_time t, sections s, 
				(SELECT b.bus_id,b.route_no,r.route_num,r.start,r.destination,r.through,b.mf_type_of_bus,b.condition,
				b.no_of_seats,b.journey_type,b.bus_name ,b.booking_price,b.likes,b.dislikes,b.image_url FROM bus_register b,route r 
				WHERE r.rou_id=b.route_no AND activate_or_cancel=1 AND booking_activate=1) b
				
				WHERE t.section_id = s.sec_id
				AND t.bus_id = b.bus_id
				
				AND t.section_id=:start_sec_id 
				AND b.route_no=:route_id
				AND t.direction=:direction
				ORDER BY (b.likes-b.dislikes)
				");					
			$stmt->bindparam(":route_id",$route_id);
			$stmt->bindparam(":start_sec_id",$start_sec_id);
			$stmt->bindparam(":direction",$direction);
			$stmt->execute();
			if($stmt->rowCount() > 0){
				$i=0;
				while($row=$stmt->FETCH(PDO::FETCH_ASSOC)){
					$innerarray=$row;
					$innerarray['dest_time_1']="0";
					$innerarray['dest_time_2']="0";
					$innerarray['dest_time_3']="0";
					$innerarray['dest_time_4']="0";
					$innerarray['dest_time_5']="0";
					$stmt2 = $this->conn->prepare("
						SELECT *
						FROM route_time t
						WHERE t.bus_id = :bus_id						
						AND t.section_id=:dest_sec_id
						AND t.direction=:direction
						");
					$stmt2->bindparam(":bus_id",$row['bus_id']);
					$stmt2->bindparam(":dest_sec_id",$dest_sec_id);
					$stmt2->bindparam(":direction",$direction);
					$stmt2->execute();
					if($stmt2->rowCount() > 0){
						while($row2=$stmt2->FETCH(PDO::FETCH_ASSOC)){
							$innerarray['dest_time_1']=$row2['time_1'];
							$innerarray['dest_time_2']=$row2['time_2'];
							$innerarray['dest_time_3']=$row2['time_3'];
							$innerarray['dest_time_4']=$row2['time_4'];
							$innerarray['dest_time_5']=$row2['time_5'];
						}
					}	
					$arrres2D[$i]=$innerarray;
					$i=$i+1;
				}
				return $arrres2D;
			}else{
				return 0;
			}		
		}catch(PDOException $ex){
			echo $ex->getMessage();
		}		
	}
	
	
}