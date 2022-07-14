<!DOCTYPE html>
<html lang="en">
	<head>
	    <meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <meta name="description" content="">
	    <meta name="author" content="">
	    <title>ANTRIAN - RSB JEUMPA </title>
	    <link href="assert/css/bootstrap.min.css" rel="stylesheet">
	    <link href="assert/css/jumbotron-narrow.css" rel="stylesheet">
		<script src="assert/js/jquery.min.js"></script>
	</head>
  	<body>
    <div class="container">
       
        <div class="jumbotron">
      
        <p>
	        <a class="btn btn-lg btn-info next_queue" href="#" role="button" onclick="openWin1()">
	        	DISPLAY&nbsp;<span class="glyphicon glyphicon-chevron-right"></span>
	        </a>
	      </p>
			
			
			<p><a class="btn btn-lg btn-info next_queue"  href="#" role="button" onclick="openWin2()">
	        	HALAMAN SUARA  &nbsp;<span class="glyphicon glyphicon-chevron-right"></span>
	        </a></p>
			<p><a class="btn btn-lg btn-info next_queue"  href="#" role="button" onclick="openWin3()">
	        	RESET NO  &nbsp;<span class="glyphicon glyphicon-chevron-right"></span>
	        </a></p>
				<p><a class="btn btn-lg btn-info next_queue"  href="#" role="button" onclick="openWin4()">
	        	LOKET 1&nbsp;<span class="glyphicon glyphicon-chevron-right"></span>
	        </a>
			<a class="btn btn-lg btn-info next_queue"  href="#" role="button" onclick="openWin5()">
	        	LOKET 2&nbsp;<span class="glyphicon glyphicon-chevron-right"></span>
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
		  

  myWindow = window.open("lite/modules/APM/inc/antrian.php", "_blank", "width=1200, height=710");

}

function openWin2() {
	myWindow = window.open("panggil/seribuv2.php", "_blank", "width=50, height=50");

}


function openWin3() {
  myWindow = window.open("admin/admin.php", "_blank", "width=900, height=600");

}

function openWin4() {
  myWindow = window.open("loket/a12.php", "_blank","width=250, height=400");

}

function openWin5() {
	myWindow = window.open("loket/a22.php", "_blank", "width=250, height=400");
}


</script>
