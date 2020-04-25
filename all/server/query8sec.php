<?php
include "../apps/mysql_connect.php";

$result = $mysqli->query('SELECT * FROM data_antrian WHERE status=0 ORDER BY wktureal ASC LIMIT 1'); // execution
$rowsg = $result->fetch_array();

$result = $mysqli->query('UPDATE data_antrian SET status= 2 WHERE id='.$rowsg['id'].''); // wait

?>