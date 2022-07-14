 <?php
 include "../apps/mysql_connect.php";
 
 if (isset($_POST['submit']))
{
$results = $mysqli->query('INSERT INTO myvid (nama) 
VALUES ("'.$_POST['nama'].'")');

	
}

 if (isset($_GET['act']))
{

 $results = $mysqli->query("DELETE FROM myvid WHERE id='$_GET[id]'");	
	
}	
 
		$results = $mysqli->query("SELECT * FROM mamar where ket='kedip'");	
		$aa = $results->fetch_array();
		$aa = $aa['isi'];
		
			$results = $mysqli->query("SELECT * FROM mamar where ket='jalan'");	
		$bb = $results->fetch_array();
		$bb = $bb['isi'];
		 


		 

		
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
	 <a href='tambahvideo.php'><button type='button' class='btn btn-warning style2'><font color='white'>Tambah Video</font></button></a>
	 <br/>	 <br/>
	<table class="table table-bordered">
                <tr>
                  <th style="width: 10px">#</th>
                  <th>video</th>
             
                  <th style="width: 40px">Label</th>
                </tr>
				
				
					<?php
					$no=1;
		$client = $mysqli->query("SELECT * FROM myvid order by id asc");	
	while ($cl = $client->fetch_array()) {
				?>
				
                <tr>
                  <td><?php echo "$no"; ?></td>
                  <td><?php echo "$cl[nama]"; ?></td>
            
                  <td>
				  <a href="<?php echo "?act=hapus&id=$cl[id]"; ?>" onclick="return confirm('Apakah Anda Yakin Menghapus notifikasi Ini?')"><button type='button' class='btn btn-danger style2'><font color='white'>Hapus</font></button></a>
				  </td>
                </tr>
				
				
				<?php
							$no++;	}
		?>		
		
		
		
              
              </table>
			  
			  
			  

    	<br/>
      	<footer class="footer">
       
      	</footer>
    </div>
  	</body>

  
</html>

<?php
		 include '../apps/mysql_close.php';
?>