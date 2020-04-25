 <?php
	include "../apps/mysql_connect.php";

$result = $mysqli->query('SELECT * FROM data_antrian WHERE status=0 ORDER BY wktureal desc LIMIT 1'); // execution
$rowsg = $result->fetch_array();



if ($rowsg['gru']=='1')
{
	$grupnya='a';
}
if ($rowsg['gru']=='2')
{
	$grupnya='b';
}
if ($rowsg['gru']=='3')
{
	$grupnya='c';
}



if ($rowsg['counter']=='')
{
  $page = $_SERVER['PHP_SELF'];
  $sec = "1";
  ?>
  <html>
      <head>
      <meta http-equiv="refresh" content="<?php echo $sec?>;URL='<?php echo $page?>'">
      </head>
      <body>

      </body>
  </html>


  <?php
}
else if ($rowsg['counter']<>'')
{
 $results = $mysqli->query('UPDATE data_antrian SET ida=0 WHERE counter='.$rowsg['counter'].'');

$result = $mysqli->query('UPDATE data_antrian SET status= 2,ida=1 WHERE id='.$rowsg['id'].''); // wait


$loket=$rowsg['counter'];
$tcounter=$grupnya.$rowsg['urutan'];
?>

	<span id="query8sec" ></span>
<script type="text/javascript" src="jquery-1.7.2.js"></script>

		<audio id="suarabel" src="Airport_Bell.mp3"></audio>
		<audio id="suarabelnomorurut" src="rekaman/nomor-urut.wav"  ></audio>
		<audio id="suarabelsuarabelloket" src="rekaman/loket.wav"  ></audio>

		<audio id="belas" src="rekaman/belas.wav"  ></audio>
		<audio id="sebelas" src="rekaman/sebelas.wav"  ></audio>
        <audio id="puluh" src="rekaman/puluh.wav"  ></audio>
        <audio id="sepuluh" src="rekaman/sepuluh.wav"  ></audio>
        <audio id="ratus" src="rekaman/ratus.wav"  ></audio>
        <audio id="seratus" src="rekaman/seratus.wav"  ></audio>
        <audio id="suarabelloket1" src="rekaman/1.wav"  ></audio>
		 <audio id="suarabelloket2" src="rekaman/2.wav"  ></audio>
		  <audio id="suarabelloket3" src="rekaman/3.wav"  ></audio>
		<?php


			$panjang=strlen($tcounter);
			$antrian=$tcounter;

			for($i=0;$i<$panjang;$i++){
		?>
        		<audio id="suarabel<?php echo $i; ?>" src="rekaman/<?php echo substr($tcounter,$i,1); ?>.wav" ></audio>
        <?php
			}
		?>

<script type="text/javascript">




$(document).ready(function(){
    loadstation();
});

function loadstation(){
	  totalwaktu=0;

	//MAINKAN SUARA NOMOR URUT
	setTimeout(function() {
			document.getElementById('suarabelnomorurut').pause();
			document.getElementById('suarabelnomorurut').currentTime=0;
			document.getElementById('suarabelnomorurut').play();
	}, totalwaktu);
	totalwaktu=totalwaktu+800;


				//JIKA LEBIH DARI 100
				//Karena aplikasi ini masih sederhana maka logina konversi hanya sampai 100
				//Selebihnya akan langsung disebutkan angkanya saja
				//tanpa kata "RATUS", "PULUH", maupun "BELAS"


		<?php
			for($i=0;$i<$panjang;$i++){
		?>

		totalwaktu=totalwaktu+800;
		setTimeout(function() {
						document.getElementById('suarabel<?php echo $i; ?>').pause();
						document.getElementById('suarabel<?php echo $i; ?>').currentTime=0;
						document.getElementById('suarabel<?php echo $i; ?>').play();
					}, totalwaktu);
		<?php
			}

		?>


		totalwaktu=totalwaktu+800;
		setTimeout(function() {
						document.getElementById('suarabelsuarabelloket').pause();
						document.getElementById('suarabelsuarabelloket').currentTime=0;
						document.getElementById('suarabelsuarabelloket').play();
					}, totalwaktu);

		totalwaktu=totalwaktu+800;
		setTimeout(function() {
						document.getElementById('suarabelloket<?php echo $loket; ?>').pause();
						document.getElementById('suarabelloket<?php echo $loket; ?>').currentTime=0;
						document.getElementById('suarabelloket<?php echo $loket; ?>').play();




					}, totalwaktu);



}


</script>


<?php
$page = $_SERVER['PHP_SELF'];
$sec = "9";
?>
<html>
    <head>
    <meta http-equiv="refresh" content="<?php echo $sec?>;URL='<?php echo $page?>'">
    </head>
    <body>

    </body>
</html>


<?php
}
?>

ini adalah halaman suara,<br/>
jangan tutup halaman ini.
