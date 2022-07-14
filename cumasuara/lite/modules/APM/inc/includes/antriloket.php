<?php
include('../../../../config.php');
$tgl_ini=date("Y-m-d");
$antriloket = fetch_assoc(query("SELECT noantrian FROM antrian_loket where status='1' and counter='1' and postdate='$tgl_ini' order by noantrian asc limit 1"));
$antriloket = $antriloket['noantrian'];
if($antriloket == '-1') {
  echo '0';
} else {
  echo $antriloket;
}
?>
