<?php
	include "../mysql_connect.php";
	$rstClient = $mysqli->query("DELETE FROM antrian_loket where postdate='$tgl_ini'");
    echo json_encode( array('status'=> "Data Berhasil di Reset") );
	include 'mysql_close.php';
