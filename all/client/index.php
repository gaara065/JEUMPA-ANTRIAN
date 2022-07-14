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
	    <link href="../assert/css/bootstrap.min.css" rel="stylesheet">
	    <link href="../assert/css/jumbotron-narrow.css" rel="stylesheet">
		<script src="../assert/js/jquery.min.js"></script>
	</head>
  	<body>
    <div class="container">
       
        <div class="jumbotron">
      
        <p >
	        <a class="btn btn-lg btn-success next_queue" href="#" role="button" onclick="openWin1()">
	        	 LOKET 1 <br/> Pendaftaran<span class="glyphicon glyphicon-chevron-right"></span>
	        </a></p>
			<p><a class="btn btn-lg btn-success next_queue" href="#" role="button" onclick="openWin4()">
	        	Penetapan<span class="glyphicon glyphicon-chevron-right"></span>
	        </a></p>
				<p><a class="btn btn-lg btn-success next_queue" href="#" role="button" onclick="openWin5()">
	        	Asuransi<span class="glyphicon glyphicon-chevron-right"></span>
	        </a></p>
			<p><a class="btn btn-lg btn-success next_queue" href="#" role="button" onclick="openWin2()">
	        	LOKET 2 &nbsp; <br/> Bank<span class="glyphicon glyphicon-chevron-right"></span>
	        </a></p>
			<p><a class="btn btn-lg btn-success next_queue" href="#" role="button" onclick="openWin3()">
	        	LOKET 3 &nbsp; <br/> Penyerahan<span class="glyphicon glyphicon-chevron-right"></span>
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
  myWindow = window.open("a12.php", "_blank", "width=250, height=700");

}

function openWin2() {
  myWindow = window.open("a22.php", "_blank", "width=250, height=700");

}
function openWin3() {
  myWindow = window.open("a32.php", "_blank", "width=250, height=700");

}

function openWin4() {
  myWindow = window.open("a42.php", "_blank", "width=250, height=700");

}
function openWin5() {
  myWindow = window.open("a52.php", "_blank", "width=250, height=700");
}


</script>
