<?php

/***
* SIMRS Khanza Lite from version 0.1 Beta
* About : Porting of SIMRS Khanza by Windiarto a.k.a Mas Elkhanza as web and mobile app.
* Last modified: 08 September 2019
* Author : drg. Faisol Basoro
* Email : dentix.id@gmail.com
*
* File : config.php
* Description : Main config, function and helper
* Licence under GPL
***/

if (preg_match ('/config.php/', basename($_SERVER['PHP_SELF']))) die ('Unable to access this script directly from browser!');

define('VERSION', '2.9');
define('ABSPATH', dirname(__FILE__) . '/');
define('URL', 'http://localhost/lite');
define('URLSIMRS', 'http://localhost/webapps');
define('DIR', 'Khanza-Lite/');
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'sik');
define('PRODUCTION', true);
define('KODERS', '6307012');
define('KODEPROP','63prop');
define('IS_IN_MODULE', true);
define('FKTL', false);
define('WEBAPPS', '../webapps');
define('THEME', 'indigo'); // amber, black, blue, blue-grey, brown, cyan, deep-orange, deep-purple, green, grey, indigo, light-blue, lime, orange, pink, purple, red, teal, yellow
define('PWA', false);

define('BpjsApiUrl', 'https://new-api.bpjs-kesehatan.go.id:8080/new-vclaim-rest/');
define('ConsID', '');
define('SecretKey', '');

$loket=['1','2','3']; // Loket harus angka maksimal 9
$loket_cs=['7','8']; // Loket CS harus angka maximal 9
$loket_prioritas=['9']; // Loket Prioritas harus angka maximal 9
$poli_hari_ini = "'-','IGDK','U0041','U0001','U0003','U0004','U0005','U0036'"; // Kode poli yang mau ditampilkan

$sismadak_username = ''; //Akun untuk login ke SISMADAK
$sismadak_password = ''; //Password untuk login ke SISMADAK
$sismadak_department_id = ''; //Kode Departemen, lihat tabel master_institution_department
$sismadak_url = ''; // Url ke server SISMADAK

// Limit untuk kuota. Misal 2 (50%), 4 (25%) dari kuota dalam jadwal
define ("LIMIT", 2);

$connection = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

// Module configuration
$module = isset($_GET['module'])?$_GET['module']:null;
$module_base_dir = './modules/';
$module_ext = '.module.php';
$module_base_file = $module.$module_ext;


if(isset($_GET['module'])) {
  parse_str(parse_url($_SERVER['REQUEST_URI'])['query'], $params);
}

$db = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
if($db->connect_error){
    die("Unable to connect database: " . $db->connect_error);
}

function escape($string) {
    global $connection;
    return mysqli_real_escape_string($connection, $string);
}

function query($sql) {
    global $connection;
    $query = mysqli_query($connection, $sql);
    confirm($query);
    return $query;
}

function confirm($query) {
    global $connection;
    if(!$query) {
        die('<div class="alert bg-pink alert-dismissible" role="alert">Query failed!</div>' . mysqli_error($connection));
    }
}

function fetch_array($result) {
    return mysqli_fetch_array($result);
}

function fetch_assoc($result) {
    return mysqli_fetch_assoc($result);
}

function num_rows($result) {
    return mysqli_num_rows($result);
}

function insertTable($table_name, $insertvalue="") {
  $query1 = "";
  $query2 = "";
  if($insertvalue != ""){
    $i=0;
    foreach($insertvalue as $key => $item) {
      if($i == 0) {
        $query1 = $key;
        $query2 = "'".$item."'";
      }
      else{
        $query1 = $query1 . ", ".$key;
        $query2 = $query2 . ", '".$item."'";
      }
      $i++;
    }
  }

  $query = "INSERT INTO ".$table_name." (".$query1.") VALUES (".$query2.")";
  query($query);
}

// htmlentities remove #$%#$%@ values
function clean($string) {
    return htmlentities($string);
}

// redirect to another page
function redirect($location) {
    return header("Location: {$location}");
}

// add message to session
function set_message($message) {
    if(!empty($message)) {
        $_SESSION['message'] = $message;
    } else {
        $message = "";
    }
}

// display session message
function display_message() {
    if(isset($_SESSION['message'])) {
        echo '<div class="alert bg-pink alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>'.$_SESSION['message'].'</div>';
        unset($_SESSION['message']);
    }
}

// show errors
function validation_errors($error) {
    $errors = '<div class="alert bg-pink alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>'.$error.'</div>';
    return $errors;
}

// Enum dropdown value
function enumDropdown($table_name, $column_name, $label, $echo = false) {
    $selectDropdown = "<select name=\"$column_name\" id=\"$column_name\" data-width=\"100%\">";
    $result = query("SELECT COLUMN_TYPE FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_NAME = '$table_name' AND COLUMN_NAME = '$column_name'");

    $row = fetch_array($result);
    $enumList = explode(",", str_replace("'", "", substr($row['COLUMN_TYPE'], 5, (strlen($row['COLUMN_TYPE'])-6))));

    foreach($enumList as $value)
         $selectDropdown .= "<option value=\"$value\">$value</option>";
    $selectDropdown .= "</select>";

    if ($echo)
        echo $selectDropdown;

    return $selectDropdown;
}

// Enum as modal
function enumModal($table_name, $column_name, $label, $echo = false) {
    $result = query("SELECT COLUMN_TYPE FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_NAME = '$table_name' AND COLUMN_NAME = '$column_name'");
    $row = fetch_array($result);
    $enum = "";
    $enumList = explode(",", str_replace("'", "", substr($row['COLUMN_TYPE'], 5, (strlen($row['COLUMN_TYPE'])-6))));
    foreach($enumList as $value)
         $enum .= "<tr><td class=\"pilih_$column_name\" data-$column_name=\"$value\" >$value</td></tr>";
    if ($echo)
        echo $enum;

    return $enum;
}

function remove_directory($directory) {
    if (!is_dir($directory)) return;

    $contents = scandir($directory);
    unset($contents[0], $contents[1]);

    foreach($contents as $object) {
        $current_object = $directory.'/'.$object;
        if (filetype($current_object) === 'dir') {
            remove_directory($current_object);
        } else {
            unlink($current_object);
        }
    }

    rmdir($directory);
}

function foldersize($path) {
  $total_size = 0;
  $files = scandir($path);
  $cleanPath = rtrim($path, '/'). '/';

  foreach($files as $t) {
      if ($t<>"." && $t<>"..") {
          $currentFile = $cleanPath . $t;
          if (is_dir($currentFile)) {
              $size = foldersize($currentFile);
              $total_size += $size;
          }
          else {
              $size = filesize($currentFile);
              $total_size += $size;
          }
      }
  }

  return $total_size;
}

function roundSize($bytes) {
    if ($bytes/1024 < 1) {
        return $bytes.' B';
    }
    if ($bytes/1024/1024 < 1) {
        return round($bytes/1024).' KB';
    }
    if ($bytes/1024/1024/1024 < 1) {
        return round($bytes/1024/1024, 2).' MB';
    } else {
        return round($bytes/1024/1024/1024, 2).' GB';
    }
}

function file_get_contents_curl($url) {
$ch = curl_init();
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); //Set curl to return the data instead of printing it to the browser.
curl_setopt($ch, CURLOPT_URL, $url);
$data = curl_exec($ch);
curl_close($ch);
return $data;
}

// Get date and time
date_default_timezone_set('Asia/Makassar');
$year       = date('Y');
$last_year  = $year-1;
$next_year  = $year+1;
$curr_month = date('m');
$month      = date('Y-m');
$date       = date('Y-m-d');
$time       = date('H:i:s');
$date_time  = date('Y-m-d H:i:s');

$tanggal    = date('d');
$bulan      = date('m');
$tahun      = date('Y');
$time       = date('H:i:s');
$nonbooking = date('His');

// Namahari
$hari=fetch_array(query("SELECT DAYNAME(current_date())"));
$namahari="";
if($hari[0]=="Sunday"){
    $namahari="AKHAD";
}else if($hari[0]=="Monday"){
    $namahari="SENIN";
}else if($hari[0]=="Tuesday"){
   	$namahari="SELASA";
}else if($hari[0]=="Wednesday"){
    $namahari="RABU";
}else if($hari[0]=="Thursday"){
    $namahari="KAMIS";
}else if($hari[0]=="Friday"){
    $namahari="JUMAT";
}else if($hari[0]=="Saturday"){
    $namahari="SABTU";
}

$day = date('D', strtotime($date));
$dayList = array(
	'Sun' => 'Minggu',
	'Mon' => 'Senin',
	'Tue' => 'Selasa',
	'Wed' => 'Rabu',
	'Thu' => 'Kamis',
	'Fri' => 'Jumat',
	'Sat' => 'Sabtu'
);
$bulan = date('m', strtotime($date));
$bulanList = array(
	'01' => 'Januari',
	'02' => 'Pebruari',
	'03' => 'Maret',
	'04' => 'April',
	'05' => 'Mei',
	'06' => 'Juni',
	'07' => 'Juli',
	'08' => 'Agustus',
	'09' => 'September',
	'10' => 'Oktober',
	'11' => 'November',
	'12' => 'Desember'
);

if( basename($_SERVER['PHP_SELF'], '.php') !== 'install' ) {
  if(num_rows(query("SHOW TABLES LIKE 'setting'")) == 1) {
    $getSettings = query("SELECT nama_instansi, alamat_instansi, kabupaten, propinsi, kontak, email, kode_ppk, kode_ppkinhealth, kode_ppkkemenkes, logo FROM setting");
    $dataSettings = fetch_assoc($getSettings);
  }
}
