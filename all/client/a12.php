<?php  
$page = $_SERVER['PHP_SELF'];
  $sec = "30";
  ?>
  <html lang="en">
	<head>
	 <meta http-equiv="refresh" content="<?php echo $sec?>;URL='<?php echo $page?>'">
	    <meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <meta name="description" content="">
	    <meta name="author" content="">
	    <title>LOKET 1 </title>
	    <link href="../assert/css/bootstrap.min.css" rel="stylesheet">
	    <link href="../assert/css/jumbotron-narrow.css" rel="stylesheet">
		<script src="../assert/js/jquery.min.js"></script>
		
		<?php 
 include "../apps/mysql_connect.php";

	$id='';
	
 if (isset($_POST['submita1']))
{
 	$idA = $_POST['idnyaa']; //id
	
 
	$results = $mysqli->query('UPDATE data_antrian SET status=0,counter=1 WHERE id='.$idA.'');
	?>
<script>
window.location = 'a12.php';
</script>
<?php
}


 if (isset($_POST['submitb1']))
{
 	$idA = $_POST['idnyab']; //id
	$results = $mysqli->query('UPDATE data_antrian SET status=0,counter=1 WHERE id='.$idA.'');

	?>
<script>
window.location = 'a12.php';
</script>
<?php
}


 if (isset($_POST['submitc1']))
{
 	$idA = $_POST['idnyac']; //id
$results = $mysqli->query('UPDATE data_antrian SET status=0,counter=1 WHERE id='.$idA.'');

	?>
<script>
window.location = 'a12.php';
</script>
<?php
}




 if (isset($_POST['submita2']))
{
 	$idA = $_POST['idnyaa']; //id
	$results = $mysqli->query('UPDATE data_antrian SET counter=4  WHERE id='.$idA.'');
	?>
<script>
window.location = 'a12.php';
</script>
<?php
}


 if (isset($_POST['submitb2']))
{
 	$idA = $_POST['idnyab']; //id
	$results = $mysqli->query('UPDATE data_antrian SET counter=4  WHERE id='.$idA.'');

	?>
<script>
window.location = 'a12.php';
</script>
<?php
}


 if (isset($_POST['submitc2']))
{
 	$idA = $_POST['idnyac']; //id
$results = $mysqli->query('UPDATE data_antrian SET counter=4 WHERE id='.$idA.'');

	?>
<script>
window.location = 'a12.php';
</script>
<?php
}






 if (isset($_POST['submita3']))
{
 	$idA = $_POST['idnyaa']; //id
 
	$results = $mysqli->query('DELETE FROM data_antrian where id='.$idA.'');

	?>
<script>
window.location = 'a12.php';
</script>
<?php
}


 if (isset($_POST['submitb3']))
{
 	$idA = $_POST['idnyab']; //id
 
	$results = $mysqli->query('DELETE FROM data_antrian where id='.$idA.'');

	?>
<script>
window.location = 'a12.php';
</script>
<?php
}


 if (isset($_POST['submitc3']))
{
 	$idA = $_POST['idnyac']; //id
 
$results = $mysqli->query('DELETE FROM data_antrian where id='.$idA.'');


	?>
<script>
window.location = 'a12.php';
</script>
<?php

}





 if (isset($_POST['submita4']))
{
 	$idA = $_POST['idnyaa']; //id
 
	$results = $mysqli->query('UPDATE data_antrian SET grup_temp=1  WHERE id='.$idA.'');

	?>
<script>
window.location = 'a12.php';
</script>
<?php
}


 if (isset($_POST['submitb4']))
{
 	$idA = $_POST['idnyab']; //id
 
	$results = $mysqli->query('UPDATE data_antrian SET grup_temp=1  WHERE id='.$idA.'');

	?>
<script>
window.location = 'a12.php';
</script>
<?php
}



 if (isset($_POST['submitc4']))
{
 	$idA = $_POST['idnyac']; //id
 
	$results = $mysqli->query('UPDATE data_antrian SET grup_temp=1  WHERE id='.$idA.'');

	?>
<script>
window.location = 'a12.php';
</script>
<?php
}




 if (isset($_GET['id']))
{
 	
 
	$results = $mysqli->query('UPDATE data_antrian SET grup_temp=0,counter=4 WHERE id='.$_GET['id'].'');

	?>
<script>
window.location = 'a12.php';
</script>
<?php
}



	$results = $mysqli->query("SELECT * FROM data_antrian where (status='3' or status='2' or status='0') and gru='1' and (counter='0' or counter='1') and grup_temp='0' order by id asc");	
		$aa = $results->fetch_array();
		$ida = $aa['urutan'];
		$idaa = $aa['id'];
	
		
		
			$results = $mysqli->query("SELECT * FROM data_antrian where (status='3' or status='2' or status='0') and gru='2' and (counter='0' or counter='1' )and grup_temp='0' order by id asc");	
		$aa = $results->fetch_array();
		$idb = $aa['urutan'];
		$idab = $aa['id'];
		
		
			$results = $mysqli->query("SELECT * FROM data_antrian where (status='3' or status='2' or status='0') and gru='3' and (counter='0' or counter='1') and grup_temp='0' order by id asc");	
		$aa = $results->fetch_array();
		$idc = $aa['urutan'];
		$idac = $aa['id'];
	

if ($ida<>'')
{
	$ida='A'.$ida;
}	
else if ($ida=='')
{
	$ida='-';
}
if ($idb<>'')
{
	$idb='B'.$idb;
}	
else 
	if ($idb=='')
{
	$idb='-';
}
if ($idc<>'')
{
	$idc='C'.$idc;
}
else if ($idc=='')
{
	$idc='-';
}
	

			
	$resultsa = $mysqli->query("SELECT count(*) as sisa FROM data_antrian where (status='3' or status='2' or status='0') and gru='1' and (counter='0' or counter='1') ");	
		$ra = $resultsa->fetch_array();	
		
	$resultsb = $mysqli->query("SELECT count(*) as sisa FROM data_antrian where (status='3' or status='2' or status='0') and gru='2' and (counter='0' or counter='1') ");	
		$rb = $resultsb->fetch_array();

$resultsc = $mysqli->query("SELECT count(*) as sisa FROM data_antrian where (status='3' or status='2' or status='0') and gru='3' and (counter='0' or counter='1') ");	
		$rc = $resultsc->fetch_array();		
		
		
		
		
	
	

?>
<!DOCTYPE html>

	</head>
  	<body>
    <div class="container">


 	



      <div class="row">
        <div class="col-md-4">
          <div class="box">



<form method="POST" action='#'>
        	<label for="exampleInputEmail1" style="text-align: left;">
			<span class="glyphicon glyphicon-credit-card">&nbsp;</span>GRUP A  - sisa antrian <?php echo "$ra[sisa]";?></label> 
        	<div class="invoice-title" align="center">
 <font style="font-size:40px"><b><?php  echo "$ida"; ?></font>

</b>
                    </div>
			<input type="hidden" name="idnyaa" value="<?php echo "$idaa";?>" />
			
 
  <script src="jquery.min.js"></script>
  <script type="text/javascript" src="jquery.maskMoney.min.js"></script>
		<script type="text/javascript">
		$(document).ready(function(){
						$('#angka4').maskMoney({thousands:'', decimal:'', precision:0});
		});
       </script>
	   
        <br/>
	
   <button type="submit" id="proceed" class="btn btn-primary" name="submita1">Suara</button>
     <button type="submit" id="proceeda4" class="btn btn-success" name="submita2">Selesai</button>
	   <button type="submit" id="proceeda4" class="btn btn-info" name="submita4">Next</button> 
     <button type="submit" id="proceeda4" class="btn btn-warning" name="submita3">Hapus</button>
<br/>
<br/>

		
    	</form>

</div>
<b>NO PROSES</b>  <br/>


<?php

		$client = $mysqli->query("SELECT * FROM data_antrian where (status='3' or status='2' or status='0') and gru='1' and (counter='0' or counter='1') and grup_temp='1' order by id asc limit 5");	
				while ($cl = $client->fetch_array()) {
			echo "<font size='5px'><b>A$cl[urutan]</b></font> <a href='a12.php?id=$cl[id]'>  <button   class='btn btn-success' name='submita3'>Selesai</button> </a> <br/>"; 
								}
		?>		
		
<hr>
</div>


       <div class="col-md-4">
          <div class="box">



<form method="POST" action='#'>
        	<label for="exampleInputEmail1" style="text-align: left;">
					<span class="glyphicon glyphicon-credit-card">&nbsp;</span>GRUP B  - sisa antrian <?php echo "$rb[sisa]";?></label> 
        	<div class="invoice-title" align="center">
 <font style="font-size:40px"><b><?php  echo "$idb"; ?></font>

</b>
                    </div>


			<input type="hidden" name="idnyab" value="<?php echo "$idab";?>" />
			
  <script src="jquery.min.js"></script>
  <script type="text/javascript" src="jquery.maskMoney.min.js"></script>
		<script type="text/javascript">
		$(document).ready(function(){
						$('#angka4').maskMoney({thousands:'', decimal:'', precision:0});
		});
       </script>
	   
        <br/>
	
   <button type="submit" id="proceed" class="btn btn-primary" name="submitb1">Suara</button>
     <button type="submit" id="proceeda4" class="btn btn-success" name="submitb2">Selesai</button>
	   <button type="submit" id="proceeda4" class="btn btn-info" name="submitb4">Next</button> 
     <button type="submit" id="proceeda4" class="btn btn-warning" name="submitb3">Hapus</button>
<br/>
<br/>

		
    	</form>

</div>
<b>NO PROSES</b>  <br/>


<?php

		$client = $mysqli->query("SELECT * FROM data_antrian where (status='3' or status='2' or status='0') and gru='2' and (counter='0' or counter='1') and grup_temp='1' order by id asc limit 5");	
				while ($cl = $client->fetch_array()) {
			echo "<font size='5px'><b>B$cl[urutan]</b></font> <a href='a12.php?id=$cl[id]'>  <button   class='btn btn-success' name='submita3'>Selesai</button> </a>  <br/>"; 
								}
		?>		
<hr>		

</div>


       <div class="col-md-4">
          <div class="box">



<form method="POST" action='#'>
        	<label for="exampleInputEmail1" style="text-align: left;">
					<span class="glyphicon glyphicon-credit-card">&nbsp;</span>GRUP C  - sisa antrian <?php echo "$rc[sisa]";?></label> 
        	<div class="invoice-title" align="center">
 <font style="font-size:40px"><b><?php  echo "$idc"; ?></font>

</b>
                    </div>
			
			<input type="hidden" name="idnyac" value="<?php echo "$idac";?>" />
			
			
 
  <script src="jquery.min.js"></script>
  <script type="text/javascript" src="jquery.maskMoney.min.js"></script>
		<script type="text/javascript">
		$(document).ready(function(){
						$('#angka4').maskMoney({thousands:'', decimal:'', precision:0});
		});
       </script>
	   
        <br/>
	
   <button type="submit" id="proceed" class="btn btn-primary" name="submitc1">Suara</button>
     <button type="submit" id="proceeda4" class="btn btn-success" name="submitc2">Selesai</button>
	   <button type="submit" id="proceeda4" class="btn btn-info" name="submitc4">Next</button> 
     <button type="submit" id="proceeda4" class="btn btn-warning" name="submitc3">Hapus</button>
<br/>
<br/>

		
    	</form>

</div>
<b>NO PROSES</b>  <br/>


<?php

		$client = $mysqli->query("SELECT * FROM data_antrian where (status='3' or status='2' or status='0') and gru='3' and (counter='0' or counter='1') and grup_temp='1' order by id asc limit 5");	
				while ($cl = $client->fetch_array()) {
			echo "<font size='5px'><b>C$cl[urutan]</b></font> <a href='a12.php?id=$cl[id]'>  <button   class='btn btn-success' name='submita3'>Selesai</button> </a>  <br/>"; 
								}
		?>		
		
<hr>
</div>


</div>
		
<br/>
      	<footer class="footer">
        
      	</footer>
    </div>
  	</body>
  
</html>


<?php
		 include '../apps/mysql_close.php';
?>
