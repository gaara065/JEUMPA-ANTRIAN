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
	    <title>SAMSAT </title>
	    <link href="assert/css/bootstrap.min.css" rel="stylesheet">
	    <link href="assert/css/jumbotron-narrow.css" rel="stylesheet">
		<script src="assert/js/jquery.min.js"></script>
	</head>
  	<body>
    <div class="container">
       
        <div class="jumbotron">
      
        <p>
	        <a class="btn btn-lg btn-info next_queue" href="#" role="button" onclick="openWin1()">
	        	DISPLAY  VIDEO&nbsp;<span class="glyphicon glyphicon-chevron-right"></span>
	        </a>
	      </p>
			
			
			<p><a class="btn btn-lg btn-info next_queue"  href="#" role="button" onclick="openWin2()">
	        	TOUCHSCREEN  &nbsp;<span class="glyphicon glyphicon-chevron-right"></span>
	        </a></p>
			<p><a class="btn btn-lg btn-info next_queue"  href="#" role="button" onclick="openWin3()">
	        	RESET NO  &nbsp;<span class="glyphicon glyphicon-chevron-right"></span>
	        </a></p>
				<p><a class="btn btn-lg btn-info next_queue"  href="#" role="button" onclick="openWin4()">
	        	PENGATURAN  TEKS&nbsp;<span class="glyphicon glyphicon-chevron-right"></span>
	        </a>
			<a class="btn btn-lg btn-info next_queue"  href="#" role="button" onclick="openWin6()">
	        	PENGATURAN  VIDEO&nbsp;<span class="glyphicon glyphicon-chevron-right"></span>
	        </a></p>
			
      	</div>
    
      	<footer class="footer">
       
      	</footer>
    </div>
  	</body>
  
</html>


		<script>
var myWindow;



function openWin1() {
		    myWindow = window.open("server/seribu.php", "_blank", "width=50, height=50");

  myWindow = window.open("server/index.php", "_blank", "width=1050, height=710");

}

function openWin2() {
  myWindow = window.open("admin/index.php", "_blank", "width=1050, height=900");

}


function openWin3() {
  myWindow = window.open("admin/admin.php", "_blank", "width=900, height=600");

}

function openWin4() {
  myWindow = window.open("admin/pengaturan.php", "_blank", "width=900, height=600");

}

function openWin5() {
  myWindow = window.open("server/index_tv.php", "_blank", "width=1050, height=710");

}

function openWin6() {
  myWindow = window.open("admin/pengaturan_video.php", "_blank", "width=900, height=600");

}
</script>
