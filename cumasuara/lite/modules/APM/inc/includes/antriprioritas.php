<?php
include('../../../../config.php');

$antriloket = fetch_assoc(query("SELECT antrian FROM antriapotek"));
$antriloket = $antriloket['antrian'];
if($antriloket == '') {
  echo '0';
} else {
  echo $antriloket;
}

?>
