<?php
	$loket = $_POST['loket'];

		include "mysql_connect.php";
		$rstClient = $mysqli->query("SELECT * FROM data_antrian WHERE counter='2' AND status=2 LIMIT 1");
		$rowClient = $rstClient->fetch_array();
		if(count($rowClient)>0){
			$id = $rowClient['id'];
			$results = $mysqli->query('UPDATE data_antrian SET counter='.$loket.', status=2 WHERE id='.$id.'');
			$next_counter = $id;
			//update
		}else{
			//insert
	
		}
		//$results = $mysqli->query('INSERT INTO data_antrian (counter,waktu,status) VALUES ('.$loket.',"'.date("Y-m-d H:i:s").'",0)');
	    $data['next'] = $next_counter;
	    echo json_encode($data);
	    include 'mysql_close.php';
	
?>