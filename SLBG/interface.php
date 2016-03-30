<?php
require_once 'classes/class.passanger.php';
$passanger = new PASSANGER();

require_once 'classes/class.passangersearch.php';
$ps = new PassengerSearch();

//"SELECT * FROM monthly_bill INNER JOIN suppliers ON suppliers.supplier_code = monthly_bill.supp_code WHERE date BETWEEN {$startDate}



/*
$place="awissawella";
//get all route id,route no,start,destination WHEN give your current position
$getdata=$passanger->get_all_routs($place);
if($getdata->rowCount() > 0){
    while($row=$getdata->FETCH(PDO::FETCH_ASSOC)){
		print($row['route_no']."\n");
	}
}else{
	print("No data");
}
*/


/*
$place2="awissawella";
$place1="colombo";
//get all route id,route no,start,destination WHEN give your current position AND your destination
$getdata=$passanger->get_all_routs_extended($place1,$place2);//get_all_routs_extended($place1,$place2);
print_r($getdata);
*/


/*
//get all data of bus WHEN give route_ID(not route number)
$getdata=$passanger->select_available_booking_bus(1);
while($row=$getdata->FETCH(PDO::FETCH_ASSOC)){
	print_r($row);
}
*/
$place1="awissawella";
$place2="maharagama";


$preres=$ps->get_all_routs_extended($place1,$place2);
if($preres!="" && $preres!=0){
	foreach($preres as $row){
		$str=$row['route_num']."-".$row['start']."  ".$row['destination'];
		if($row['through'] != ""){
			$str=$str."(through ".$row['through'].")";
		}
		print($str."<br>");
	}
}


$res=$ps->get_booking_view($place1,$place2);
if($res!="" && $res!=0){
	foreach($res as $row){
		print($row['bus_name']."<br>");
		print($row['route_num']."-".$row['start']." ".$row['destination']."<br>");
		print($row['mf_type_of_bus']."<br>");
		print($row['no_of_seats']."<br>");
		print($row['condition']."<br>");
		print("From {$place1} ".$row['time_1']." To {$place2} ".$row['dest_time_1']."<br>");
		print($row['booking_price']);
		print("<br><br>");
	}
}
//print_r($res);






?>