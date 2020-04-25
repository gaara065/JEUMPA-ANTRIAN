<?php 
error_reporting(0);

include '../apps/mysql_connect.php';

	$result = $mysqli->query('SELECT * FROM data_antrian WHERE ida=1 and status=2 and (counter=1 or counter=0)'); // execution
$r = $result->fetch_array();

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