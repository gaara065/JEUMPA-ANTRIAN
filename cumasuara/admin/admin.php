
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
    	<form>
    		<div class="jumbotron">
	        <h1 class="counter">
	        	<span class="glyphicon glyphicon-user"></span>
	        </h1>
	      	</div>
      
        	<label for="exampleInputEmail1">Reset nomor antrian ke 0 kembali</label>
        	<div class="reset_status">
			</div> 
        	<button type="button" class="btn btn-primary reset">Reset</button>
			<br/>
    	</form>
    	<br/>
      	<footer class="footer">
       
      	</footer>
    </div>
  	</body>

  	<script type="text/javascript">
	$("document").ready(function()
	{
		$('.peringatan').hide();

	    // RESET 
		$(".reset").click(function(){
			$.post( "admin_reset.php", function( data ) {
			var alert = '<div class="alert alert-info alert-dismissible reset_status" role="alert">'+data['status']+'</div>';
			$(".reset_status").html(alert);
			},"json");
		});

	});
	</script>
</html>

