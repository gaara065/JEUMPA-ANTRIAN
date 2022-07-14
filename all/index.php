<?php 
	session_start();
	if (!isset($_SESSION["loket_client"])) 
	{
		$_SESSION["loket_client"] = 0;
	}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
	    <meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <meta name="description" content="">
	    <meta name="author" content="">
	    <title>SAMSAT</title>
	    <link href="assert/css/bootstrap.min.css" rel="stylesheet">
	    <link href="assert/css/jumbotron-narrow.css" rel="stylesheet">
		<script src="assert/js/jquery.min.js"></script>
	</head>
  	<body>
    <div class="container">
       
        <div class="jumbotron">
      
        <p>
	        <a class="btn btn-lg btn-success next_queue" href="client" role="button">
	        	LOKET  &nbsp;<span class="glyphicon glyphicon-chevron-right"></span>
	        </a></p>
		
			
      	</div>
    
      	<footer class="footer">
       
      	</footer>
    </div>
  	</body>
  
</html>

