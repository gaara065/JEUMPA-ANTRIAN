<?php 
error_reporting(0);

include '../apps/mysql_connect.php';

	  
	  	$results = $mysqli->query("SELECT * FROM data_antrian WHERE counter=4 ORDER BY id ASC");	
		$r = $results->fetch_array();
		
		
if ($r['gru']=='1')
{
	$grupnya='A';
}	
if ($r['gru']=='2')
{
	$grupnya='B';
}	
if ($r['gru']=='3')
{
	$grupnya='C';
}	
	
	

      if($r == null){
         
		  echo "0";
      }
	  else{
        echo "$grupnya$r[urutan]";
      }
?>