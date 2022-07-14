<?php
	$mysqli = @new mysqli('localhost', 'root', '', 'sik');
	if ($mysqli->connect_errno) {
	    die('Connect Error: ' . $mysqli->connect_errno);
	}

	date_default_timezone_set('Asia/Jakarta');
$tgl_ini=date("Y-m-d");
$jam_ini=date("H:i:s");
	?>