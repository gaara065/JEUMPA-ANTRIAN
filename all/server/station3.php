<?php 
error_reporting(0);

include '../apps/mysql_connect.php';

	  
	  	$client = $mysqli->query("SELECT * FROM data_antrian where counter='3'
                                        order by id limit 6");	
										
while ($row = $client->fetch_array()) {

if ($row['gru']=='1')
{
	$grupnya='A';
}	
if ($row['gru']=='2')
{
	$grupnya='B';
}	
if ($row['gru']=='3')
{
	$grupnya='C';
}	
	


echo "<p align='center' style='margin-top:10px; font-family:SimHei; font-size: 30px; font-weight:bold; color:#FFFFFF;'>$grupnya$row[urutan]</p>";
   
    }
	
	?>