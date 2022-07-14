<?php  
$page = $_SERVER['PHP_SELF'];
  $sec = "30";
  $counter='2';
  ?>
  <html lang="en">
	<head>
	 <meta http-equiv="refresh" >
	    <meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <meta name="description" content="">
	    <meta name="author" content="">
	    <title>LOKET <?php echo $counter; ?> </title>
	    <link href="../assert/css/bootstrap.min.css" rel="stylesheet">
	    <link href="../assert/css/jumbotron-narrow.css" rel="stylesheet">
		<script src="../assert/js/jquery.min.js"></script>
		
		<?php 
 include "../mysql_connect.php";

	$id='';
	
 if (isset($_POST['submita1']))
{
	$idA = $_POST['idnyaa']; //id 
	$asu = $_POST['asu']; //id
	 
	$results = $mysqli->query("UPDATE antrian_loket SET status='2', end_time='$jam_ini'  WHERE noantrian='$idA' and postdate='$tgl_ini'");
    
	 $results = $mysqli->query("SELECT noantrian FROM antrian_loket where noantrian='$asu' and postdate='$tgl_ini'");	
	$aa = $results->fetch_array();
	if ($aa['noantrian']=='')
	{
		$results = $mysqli->query("INSERT INTO antrian_loket (type,noantrian,postdate,start_time,counter,status) VALUES ('loket','$asu','$tgl_ini','$jam_ini','$counter','1')");
	
	}
	else
	{

		$results = $mysqli->query("UPDATE antrian_loket SET counter='$counter', status='1', end_time='$jam_ini'  WHERE noantrian='$asu' and postdate='$tgl_ini'");
	 
	}
	
	$results = $mysqli->query("INSERT INTO antriloket (loket,antrian) VALUES ('$counter','$asu')");
	 
	?>
<script>
window.location = 'a22.php';
</script>
<?php
}





 if (isset($_POST['submita4']))
{
	 $idA = $_POST['idnyaa']; //id
	 $results = $mysqli->query("UPDATE antrian_loket SET status='2', end_time='$jam_ini'  WHERE noantrian='$idA' and postdate='$tgl_ini'");

	 $results = $mysqli->query("SELECT noantrian FROM antrian_loket  WHERE postdate='$tgl_ini' order by cast(noantrian as int) desc limit 1");	
	$aa = $results->fetch_array();
	$idab = $aa['noantrian'];

     $noantriannew=$idab+1;
	 $results = $mysqli->query("INSERT INTO antrian_loket (type,noantrian,postdate,start_time,counter,status) VALUES ('loket','$noantriannew','$tgl_ini','$jam_ini','$counter','1')");
	 $results = $mysqli->query("INSERT INTO antriloket (loket,antrian) VALUES ('$counter','$noantriannew')");
			
	?>
<script>
window.location = 'a22.php';
</script>
<?php
}







	$results = $mysqli->query("SELECT noantrian FROM antrian_loket where status='1' and counter='$counter' and postdate='$tgl_ini' order by noantrian asc limit 1");	
	$aa = $results->fetch_array();
	$idaa = $aa['noantrian'];
	
		


		
		
	
	

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
			<span class="glyphicon glyphicon-credit-card">&nbsp;</span>LOKET <?php echo $counter; ?></label> 
        	<div class="invoice-title" align="center">
 <font style="font-size:40px"><b><?php echo "$idaa";?></font>

</b>
                    </div>
			<input type="hidden" name="idnyaa" value="<?php echo "$idaa";?>" />

			<input type="text" name="asu" class="form-control" value="<?php echo "$idaa";?>" />
			


	   
        <br/>
	
<button type="submit" id="proceed" class="btn btn-primary" name="submita1">Panggil</button>
<button type="submit" id="proceeda4" class="btn btn-warning" name="submita4">No Selanjutnya</button> 
<br/>
<br/>

		
    	</form>

</div>



</div>


     


	 
</div>


</div>
		
<br/>
      	<footer class="footer">
        
      	</footer>
    </div>
  	</body>
  
</html>


<?php
		 include '../mysql_close.php';
?>
