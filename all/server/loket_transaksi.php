<?php 
error_reporting(0);

include '../apps/mysql_connect.php';

	  
	  	$results = $mysqli->query("SELECT counter as no_loket FROM data_antrian
                                        WHERE status='1' or status='0'");	
		$r = $results->fetch_array();
		
		
      if($r == null){
          //echo '<p align="center" style="margin-top:10px; font-family:SimHei; font-size: 98px; font-weight:bold; color:red;">OFF</p>';
      }else{
        echo "<p align='center' style='margin-top:10px; font-family:SimHei; font-size: 98px; font-weight:bold; color:#100e85;'>$r[no_loket]</p>";
      }
?>