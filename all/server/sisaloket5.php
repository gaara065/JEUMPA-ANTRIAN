<?php 
error_reporting(0);

include '../apps/mysql_connect.php';

	  
	  	$results = $mysqli->query("SELECT count(*) as no_loket FROM data_antrian where counter='5'");	
		$r = $results->fetch_array();
		
		
      if($r == null){
         
			  echo "<p align='right' style='font-family:SimHei; font-size: 25px; font-weight:bold; color:#100e85;'>
		0&nbsp;</p>";
      }else{
        echo "<p align='right' style='font-family:SimHei; font-size: 25px; font-weight:bold; color:#100e85;'>
		$r[no_loket]&nbsp;</p>";
      }
?>