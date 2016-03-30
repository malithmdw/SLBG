<?php

require_once 'DB/dbconfig.php';

class PASSANGER{	
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
			$stmt = $this->conn->prepare("SELECT s.sec_id,s.route_id,s.section_name,s.sub_id 
					FROM sections s WHERE s.section_name=:place1");					
			$stmt->bindparam(":place1",$place1);
			$stmt->execute();
			$array2d=array();
			
			$startOfRout="";
			$destOfRout="";
			$i=0;
			if($stmt->rowCount() > 0){
				while($row=$stmt->FETCH(PDO::FETCH_ASSOC)){
					
					$availablerouts=$row['route_id'];
					$subid=$row['sub_id'];
					$dest_sub_id="";
					
					$innerarr=PASSANGER::get_route_helper($place2,$availablerouts);
					if($innerarr['sub_id']>$subid){
						$destOfRout=(PASSANGER::get_dst_helper($availablerouts));
						$startOfRout=(PASSANGER::get_start_helper($availablerouts));
					}else{
						$destOfRout=(PASSANGER::get_start_helper($availablerouts));
						$startOfRout=(PASSANGER::get_dst_helper($availablerouts));
					}
					$innerarr['my_direction_start_of_rout']=$startOfRout;
					$innerarr['my_direction_end_of_rout']=$destOfRout;
					
					$array2d[$i]=$innerarr;
					$i=$i+1;
				}
				return $array2d;
			}else{
				print("No routs");
			}		
		}catch(PDOException $ex){
			echo $ex->getMessage();
		}
	}
	
	public function get_route_helper($place,$routeid){//Inner function for get_all_routs_extended($place1,$place2);
		try{
			$innerarray=array();
			
			$stmt2 = $this->conn->prepare("
					SELECT *
					FROM route
					INNER JOIN sections ON route.rou_id = sections.route_id
					WHERE sections.route_id = :routeid
					AND sections.section_name = :place
					");		
			$stmt2->bindparam(":place",$place);
			$stmt2->bindparam(":routeid",$routeid);
			$stmt2->execute();
			if($stmt2->rowCount() > 0){
				while($row2=$stmt2->FETCH(PDO::FETCH_ASSOC)){
					$innerarray['sec_2_id']=$row2['sec_2_id'];
					$innerarray['rou_id']=$row2['rou_id'];
					$innerarray['route_no']=$row2['route_no'];
					$innerarray['start']=$row2['start'];
					$innerarray['destination']=$row2['destination'];
					$innerarray['through']=$row2['through'];
					$innerarray['sub_id']=$row2['sub_id'];
				}
				return $innerarray;
			}else{
				$innerarray['sec_2_id']=0;
				$innerarray['rou_id']=0;
				$innerarray['route_no']="";
				$innerarray['start']="";
				$innerarray['destination']="";
				$innerarray['through']="";
				$innerarray['sub_id']=0;
				
				return $innerarray;
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

	public function select_available_booking_bus_by_route_id($routeid){
		try{
			$stmt = $this->conn->prepare("SELECT * FROM bus_register 
					WHERE route_no=:routeid AND activate_or_cancel=1 AND booking_activate=1 ORDER BY (likes -dislikes)  DESC");					
			$stmt->bindparam(":routeid",$routeid);
			$stmt->execute();			
			return $stmt;		
		}catch(PDOException $ex){
			echo $ex->getMessage();
		}
	}
	public function select_available_booking_bus($busid,$fromSectionId,$toSectionId,$dest){
		try{						
			$stmt = $this->conn->prepare("SELECT * FROM route_time 
					WHERE section_id=:fromSectionId AND bus_id=:busid AND direction=:dest ");					
			$stmt->bindparam(":busid",$busid);
			$stmt->bindparam(":fromSectionId",$fromSectionId);
			$stmt->bindparam(":toSectionId",$toSectionId);
			$stmt->bindparam(":dest",$dest);
			$stmt->execute();			
			return $stmt;		
		}catch(PDOException $ex){
			echo $ex->getMessage();
		}
	}
	
	public function bus_list_booking_view($place1,$place2){
		try{						
			$stmt = $this->conn->prepare("SELECT * FROM bus_register b ,sections s WHERE b.route_no=s.route_id 
				AND s.section_name=:place1 AND activate_or_cancel=1 
				AND booking_activate=1 ORDER BY (likes -dislikes)  DESC");					
			$stmt->bindparam(":place1",$place1);
			$stmt->execute();
			$array2d=array();
			$startOfRout="";
			$destOfRout="";
			$i=0;
			if($stmt->rowCount() > 0){
				while($row=$stmt->FETCH(PDO::FETCH_ASSOC)){
					$innerarr=$row;
					$availablerouts=$row['route_id'];
					$subid=$row['sub_id'];
					$dest_sub_id="";
					
					$res=PASSANGER::blbv_helper($place2,$availablerouts);
					if($res!=""){
						$innerarr["dest_sec_id"]=$res['dest_sec_id'];
						if($res['sub_id_2']>$subid){
							$destOfRout=(PASSANGER::get_dst_helper($availablerouts));
							$startOfRout=(PASSANGER::get_start_helper($availablerouts));
						}else{
							$destOfRout=(PASSANGER::get_start_helper($availablerouts));
							$startOfRout=(PASSANGER::get_dst_helper($availablerouts));
						}
						$innerarr['my_direction_start_of_rout']=$startOfRout;
						$innerarr['my_direction_end_of_rout']=$destOfRout;
												
						$resarr2=PASSANGER::get_route_times($row['sec_id'],$res['dest_sec_id'],$row['bus_id'],$destOfRout);
						if($resarr2 != ""){
							$innerarr['time_1']=$resarr2['time_1'];
							$innerarr['time_2']=$resarr2['time_2'];
							$innerarr['time_3']=$resarr2['time_3'];
							$innerarr['time_4']=$resarr2['time_4'];
							$innerarr['time_5']=$resarr2['time_5'];
							$innerarr['dest_time_1']=$resarr2['dest_time_1'];
							$innerarr['dest_time_2']=$resarr2['dest_time_2'];
							$innerarr['dest_time_3']=$resarr2['dest_time_3'];
							$innerarr['dest_time_4']=$resarr2['dest_time_4'];
							$innerarr['dest_time_5']=$resarr2['dest_time_5'];							
						}
					}					
					$array2d[$i]=$innerarr;
					$i=$i+1;
				}
				return $array2d;
			}else{
				print("No routs");
			}		
		}catch(PDOException $ex){
			echo $ex->getMessage();
		}
	}
	
	private function blbv_helper($place2,$availablerouts){
		$stmt2 = $this->conn->prepare("
				SELECT * FROM sections
				WHERE sections.section_name =:place AND route_id=:routeid
				");		
		$stmt2->bindparam(":place",$place);
		$stmt2->bindparam(":routeid",$routeid);
		$stmt2->execute();
		if($stmt2->rowCount() > 0){
			while($row=$stmt->FETCH(PDO::FETCH_ASSOC)){
				$retarray=array();
				$retarray['dest_sec_id']=$row['sec_id'];
				$retarray['sub_id_2']=$row['sub_id'];
				return $retarray;
			}
		}
		return "";		
	}
	
	public function get_route_times($sectionid_1,$sectionid_2,$busid,$direction){
		try{	
			$innerarray=array();
			
			$stmt = $this->conn->prepare("SELECT * FROM route_time t,bus_register b 
					WHERE b.bus_id=t.bus_id 
					AND t.section_id=:sectionid1 AND t.bus_id=:busid AND t.direction=:direction");					
			$stmt->bindparam(":sectionid1",$sectionid_1);
			$stmt->bindparam(":busid",$busid);
			$stmt->bindparam(":direction",$direction);
			$stmt->execute();
			
			if($stmt->rowCount() > 0){
				while($row=$stmt->FETCH(PDO::FETCH_ASSOC)){
					$innerarray=$row;
					
					$stmt = $this->conn->prepare("SELECT * FROM route_time  
							WHERE section_id=:sectionid2 AND bus_id=:busid AND direction=:direction");	
					$stmt->bindparam(":sectionid2",$sectionid_2);
					$stmt->bindparam(":busid",$busid);
					$stmt->bindparam(":direction",$direction);
					$stmt->execute();
					$innerarray['dest_time_1']="";
					$innerarray['dest_time_2']="";
					$innerarray['dest_time_3']="";
					$innerarray['dest_time_4']="";
					$innerarray['dest_time_5']="";
					
					if($stmt->rowCount() > 0){
						while($row=$stmt->FETCH(PDO::FETCH_ASSOC)){
							$innerarray['dest_time_1']=$row['time_1'];
							$innerarray['dest_time_2']=$row['time_2'];
							$innerarray['dest_time_3']=$row['time_3'];
							$innerarray['dest_time_4']=$row['time_4'];
							$innerarray['dest_time_5']=$row['time_5'];
						}
					}
					break;
				}
				return $innerarray;
			}else{
				return "";
			}		
		}catch(PDOException $ex){
			echo $ex->getMessage();
		}
	}
	
	
	
	
	
	
	
	
	
	
	
	
	
	/*
1.	get_all_routs_by_route_no($route_no);
	input -> route_number or part of route_number
	output-> all data of route TABLE

2.	get_all_routs($place);
	input -> place (your current position)
	output-> all data of route TABLE
	
3.	get_all_routs_extended($place1,$place2);
	input -> current place & Destination
	output-> all data of route TABLE & 
	
4.	get_route_time($sectionid_1,$sectionid_2,$busid,$direction);
	input -> $sectionid_1(= place 1 id),$sectionid_2 (= place 2 id),$busid,$direction
	output-> all data of bus TABLE and bus TIMES of place 1 and TIMES of place 2
	
5.	get_all_routs_by_route_no($route_no);
	input -> route_number or part of route_number
	output-> all data of route TABLE



	
	*/
	
}