 <?php
 include "../apps/mysql_connect.php";
 
 if (isset($_POST['submit']))
{
	$results = $mysqli->query("UPDATE mamar SET isi='$_POST[jalan]' WHERE ket='jalan'");

	
}	
 
		$results = $mysqli->query("SELECT * FROM mamar where ket='kedip'");	
		$aa = $results->fetch_array();
		$aa = $aa['isi'];
		
			$results = $mysqli->query("SELECT * FROM mamar where ket='jalan'");	
		$bb = $results->fetch_array();
		$bb = $bb['isi'];
		 


		 
		 include '../apps/mysql_close.php';
		
		?>
		
		
<!DOCTYPE html>
<html lang="en">
	<head>
	    <meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <meta name="description" content="">
	    <meta name="author" content="">
	    <title>Admin : Queue</title>
	    <link href="../assert/css/bootstrap.min.css" rel="stylesheet">
	    <link href="../assert/css/jumbotron-narrow.css" rel="stylesheet">
		<script src="../assert/js/jquery.min.js"></script>
	</head>
  	<body>
    <div class="container">
    	<form method="POST" action='#'>
    		
        	<label for="exampleInputEmail1">Teks berjalan</label>
     	
<textarea rows="4" class="form-control" name='jalan'><?php  echo "$bb"; ?></textarea>
        	<br/>
       
	   
	
        	<button type="submit" class="btn btn-primary reset" name="submit">Simpan</button>
			<br/>
    	</form>
    	<br/>
      	<footer class="footer">
       
      	</footer>
    </div>
  	</body>

  
</html>

