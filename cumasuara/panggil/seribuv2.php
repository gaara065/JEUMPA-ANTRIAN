<?php
include "../mysql_connect.php";
$result = $mysqli->query('SELECT * FROM antriloket'); // execution
$rowsg = $result->fetch_array();
if ($rowsg['loket']=='')
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
else
{
?>
<script src="js/jquery.min.js" type="text/javascript"></script>
<audio id="antrian" src="suara/antrian.wav"></audio>
<audio id="notif" src="suara/notification.wav"></audio>
<audio id="counter" src="suara/counter.wav"  ></audio>
<audio id="nol" src="suara/nol.wav"  ></audio>
<audio id="belas" src="suara/belas.wav"  ></audio>
<audio id="sebelas" src="suara/sebelas.wav"  ></audio>
<audio id="puluh" src="suara/puluh.wav"  ></audio>
<audio id="sepuluh" src="suara/sepuluh.wav"  ></audio>
<audio id="ratus" src="suara/ratus.wav"  ></audio>
<audio id="seratus" src="suara/seratus.wav"  ></audio>
<?php 
$loket=["$rowsg[loket]"];
foreach($loket as $value){ ?>
<audio id="suarabelloket<?php echo $value; ?>" src="suara/<?php echo $value; ?>.wav"  ></audio>
<?php } ?>
<?php
//  $get_antrian = fetch_assoc(query("SELECT antrian FROM antriloket"));
 $tcounter = $rowsg['antrian'];
 $_tcounter = $tcounter + 1;
//  if(isset($_GET['loket'])) {
// 	 query("UPDATE antrian_loket SET end_time = CURRENT_TIME() WHERE type = 'Loket' AND noantrian = '{$tcounter}'");
// 	 query("UPDATE antriloket SET loket = '{$_GET['loket']}', antrian = '{$_tcounter}'");
//  }
$panjang=strlen($tcounter);
$antrian=$tcounter;
for($i=0;$i<$panjang;$i++){
?>
	<audio id="suarabel<?php echo $i; ?>" src="suara/<?php echo substr($tcounter,$i,1); ?>.wav" ></audio>
<?php
}
?>
<?php
// if($_SERVER['REQUEST_METHOD'] == "POST") {
//   if(empty($_POST['antrian'])) {
//     query("DELETE FROM `antriloket`");
//     query("INSERT INTO `antriloket` (`loket`, `antrian`) VALUES ('0', '0')");
//   } else {
//     query("UPDATE antriloket SET loket = '{$_GET['loket']}', antrian = '{$_POST['antrian']}'");
//   }
// }
?>


<?php foreach($loket as $value){ ?>
<script>


$(document).ready(function(){
    mulai<?php echo $value; ?>();
});

function mulai<?php echo $value; ?>(){
	$("#antrian")[0].play()
	totalwaktu=document.getElementById('antrian').duration*1200;
	
	<?php if($antrian<10){ ?>
		setTimeout(function() { $("#suarabel0")[0].play() }, totalwaktu);
		totalwaktu=totalwaktu+950;
	<?php } else if($antrian ==10){ ?>
		setTimeout(function() { $("#sepuluh")[0].play() }, totalwaktu);
		totalwaktu=totalwaktu+950;
	<?php } else if($antrian ==11){ ?>
		setTimeout(function() { $("#sebelas")[0].play() }, totalwaktu);
		totalwaktu=totalwaktu+950;
	<?php } else if($antrian < 20){ ?>
		setTimeout(function() { $("#suarabel1")[0].play() }, totalwaktu);
		totalwaktu=totalwaktu+950;
		setTimeout(function() { $("#belas")[0].play() }, totalwaktu);
		totalwaktu=totalwaktu+950;
	<?php } else if($antrian ==20){ ?>
		setTimeout(function() { $("#suarabel0")[0].play() }, totalwaktu);
		totalwaktu=totalwaktu+950;
		setTimeout(function() { $("#puluh")[0].play() }, totalwaktu);
		totalwaktu=totalwaktu+950;
	<?php } else if($antrian <= 99){ ?>
		setTimeout(function() { $("#suarabel0")[0].play() }, totalwaktu);
		totalwaktu=totalwaktu+950;
		setTimeout(function() { $("#puluh")[0].play() }, totalwaktu);
		totalwaktu=totalwaktu+950;
		setTimeout(function() { $("#suarabel1")[0].play() }, totalwaktu);
		totalwaktu=totalwaktu+900;
	<?php } else if($antrian ==100){ ?>
		setTimeout(function() { $("#seratus")[0].play() }, totalwaktu);
		totalwaktu=totalwaktu+950;
	<?php } else if($antrian <= 109){ ?>
		setTimeout(function() { $("#seratus")[0].play() }, totalwaktu);
		totalwaktu=totalwaktu+950;
		setTimeout(function() { $("#suarabel2")[0].play() }, totalwaktu);
		totalwaktu=totalwaktu+950;
	<?php } else if($antrian ==110){ ?>
		setTimeout(function() { $("#seratus")[0].play() }, totalwaktu);
		totalwaktu=totalwaktu+950;
		setTimeout(function() { $("#sepuluh")[0].play() }, totalwaktu);
		totalwaktu=totalwaktu+950;
	<?php } else if($antrian ==111){ ?>
		setTimeout(function() { $("#seratus")[0].play() }, totalwaktu);
		totalwaktu=totalwaktu+950;
		setTimeout(function() { $("#sebelas")[0].play() }, totalwaktu);
		totalwaktu=totalwaktu+950;
	<?php } else if($antrian <= 119){ ?>
		setTimeout(function() { $("#seratus")[0].play() }, totalwaktu);
		totalwaktu=totalwaktu+950;
		setTimeout(function() { $("#suarabel2")[0].play() }, totalwaktu);
		totalwaktu=totalwaktu+950;
		setTimeout(function() { $("#belas")[0].play() }, totalwaktu);
		totalwaktu=totalwaktu+950;
	<?php } else if($antrian ==120 or $antrian ==130 or $antrian ==140 or $antrian ==150 or $antrian ==160 or $antrian ==170 or $antrian ==180 or $antrian ==190){ ?>
		setTimeout(function() { $("#seratus")[0].play() }, totalwaktu);
		totalwaktu=totalwaktu+950;
		setTimeout(function() { $("#suarabel1")[0].play() }, totalwaktu);
		totalwaktu=totalwaktu+950;
		setTimeout(function() { $("#puluh")[0].play() }, totalwaktu);
		totalwaktu=totalwaktu+950;
	<?php } else if($antrian <= 199){ ?>
		setTimeout(function() { $("#seratus")[0].play() }, totalwaktu);
		totalwaktu=totalwaktu+950;
		setTimeout(function() { $("#suarabel1")[0].play() }, totalwaktu);
		totalwaktu=totalwaktu+950;
		setTimeout(function() { $("#puluh")[0].play() }, totalwaktu);
		totalwaktu=totalwaktu+950;
		setTimeout(function() { $("#suarabel2")[0].play() }, totalwaktu);
		totalwaktu=totalwaktu+950;
  <?php } else if($antrian ==200){ ?>
		setTimeout(function() { $("#suarabel0")[0].play() }, totalwaktu);
		totalwaktu=totalwaktu+950;
		setTimeout(function() { $("#ratus")[0].play() }, totalwaktu);
		totalwaktu=totalwaktu+950;
	<?php } else if($antrian <= 209){ ?>
		setTimeout(function() { $("#suarabel0")[0].play() }, totalwaktu);
		totalwaktu=totalwaktu+950;
		setTimeout(function() { $("#ratus")[0].play() }, totalwaktu);
		totalwaktu=totalwaktu+950;
		setTimeout(function() { $("#suarabel2")[0].play() }, totalwaktu);
		totalwaktu=totalwaktu+950
	<?php } else if($antrian ==210){ ?>
		setTimeout(function() { $("#suarabel0")[0].play() }, totalwaktu);
		totalwaktu=totalwaktu+950;
		setTimeout(function() { $("#ratus")[0].play() }, totalwaktu);
		totalwaktu=totalwaktu+950;
		setTimeout(function() { $("#sepuluh")[0].play() }, totalwaktu);
		totalwaktu=totalwaktu+950;
  <?php } else if($antrian ==211 ){ ?>
		setTimeout(function() { $("#suarabel0")[0].play() }, totalwaktu);
		totalwaktu=totalwaktu+950;
		setTimeout(function() { $("#ratus")[0].play() }, totalwaktu);
		totalwaktu=totalwaktu+950;
		setTimeout(function() { $("#sebelas")[0].play() }, totalwaktu);
		totalwaktu=totalwaktu+950;
	<?php } else if($antrian ==220 or $antrian ==230 or $antrian ==240 or $antrian ==250 or $antrian ==260 or $antrian ==270 or $antrian ==280 or $antrian ==290){ ?>
		setTimeout(function() { $("#suarabel0")[0].play() }, totalwaktu);
		totalwaktu=totalwaktu+950;
		setTimeout(function() { $("#suarabel1")[0].play() }, totalwaktu);
		totalwaktu=totalwaktu+950;
		setTimeout(function() { $("#puluh")[0].play() }, totalwaktu);
		totalwaktu=totalwaktu+950;
	<?php } else if($antrian <= 299){ ?>
		setTimeout(function() { $("#suarabel0")[0].play() }, totalwaktu);
		totalwaktu=totalwaktu+950;
		setTimeout(function() { $("#ratus")[0].play() }, totalwaktu);
		totalwaktu=totalwaktu+950;
		setTimeout(function() { $("#suarabel1")[0].play() }, totalwaktu);
		totalwaktu=totalwaktu+950;
		setTimeout(function() { $("#puluh")[0].play() }, totalwaktu);
		totalwaktu=totalwaktu+950;
		setTimeout(function() { $("#suarabel2")[0].play() }, totalwaktu);
		totalwaktu=totalwaktu+950;
	<?php } else if($antrian ==300){ ?>
		setTimeout(function() { $("#suarabel0")[0].play() }, totalwaktu);
		totalwaktu=totalwaktu+950;
		setTimeout(function() { $("#ratus")[0].play() }, totalwaktu);
		totalwaktu=totalwaktu+950;
	<?php } ?>
		
		setTimeout(function() { $("#counter")[0].play() }, totalwaktu);
		totalwaktu=totalwaktu+950;
		setTimeout(function() { $("#suarabelloket<?php echo $value; ?>")[0].play() }, totalwaktu);
		totalwaktu=totalwaktu+950;
		setTimeout(function() { $("#notif")[0].play() }, totalwaktu);
}
</script>
<?php 
$result = $mysqli->query('TRUNCATE antriloket'); // execution

}

$page = $_SERVER['PHP_SELF'];
$sec = "12";
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


<?php
		 include '../mysql_close.php';
?>