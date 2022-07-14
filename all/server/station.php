<?php 
error_reporting(0);

include '../apps/mysql_connect.php';

	  
	  	$client = $mysqli->query("SELECT * FROM data_antrian where counter='0' or counter='1'
                                        limit 5");	
										
while ($row = $client->fetch_array()) {

echo "<p id='blink1'  align='center' style='margin-top:10px; font-family:SimHei; font-size: 98px; font-weight:bold; color:#100e85;'>$row[id]  $row[counter]</p>";
   
    }
	
	?>