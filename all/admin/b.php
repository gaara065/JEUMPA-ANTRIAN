<?php
 include "../apps/mysql_connect.php";
 
		$results = $mysqli->query("SELECT * FROM mamar where ket='kedip'");	
		$aa = $results->fetch_array();
		$aa = $aa['isi'];
		
			$results = $mysqli->query("SELECT * FROM mamar where ket='jalan'");	
		$bb = $results->fetch_array();
		$bb = $bb['isi'];
		 
		
		 
		 include '../apps/mysql_close.php';
		
		?>

<link href="../assert/css/bootstrap.min.css" rel="stylesheet">
	    <link href="../assert/css/jumbotron-narrow-monitoring.css" rel="stylesheet">
		<script src="../assert/js/jquery.min.js"></script>
		
		<style>
body  {

 background-image: url(c.jpg), url(b.jpg);
  background-position: bottom, left top;
  background-repeat: no-repeat, no-repeat;
   background-size: 1350px 60px, 1600px ;
  

}
.fontsize {
   font-size:110px;
   color: white;
 }

 .blinking{
	animation:blinkingText 3.8s infinite;
	
}
@keyframes blinkingText{
	0%{		color: #FFFFFF;	}
	49%{	color: transparent;	}
	50%{	color: transparent;	}
	99%{	color:transparent;	}
	100%{	color: #FFFFFF;	}
	100%{	color: #FFFFFF;	}
	100%{	color: #FFFFFF;	}
	100%{	color: #FFFFFF;	}
	100%{	color: #FFFFFF;	}
}
</style>
		
		<table border="0" cellpadding="0" cellspacing="0"  width="100%" height="100%">

<tr height='100px' >
<td colspan='6'>
<img src="d.png" alt="Smiley face"  width="100%">
</td>

</tr>

<tr height='30px'>
<td width='100px'>
</td>
<td width='100px'>
</td>
<td width='100px'>
</td>
<td width='100px'>
</td>
<td width='200px' align="center">


</td>
<td width='100px'>
</td>
</tr>
<tr height='15px' >
<td width='100px'>
</td>
<td width='100px'>
</td>
<td width='100px'>
</td>
<td width='100px'>
</td>
<td colspan='2' width='700px' align="center">

<b><font size='3.5px' color='white'>
<span class="blinking"></span>
</font></b>
</td>

</tr>
<tr height='30px'>
<td width='100px'>
</td>
<td width='100px'>
</td>
<td width='100px'>
</td>
<td width='100px'>
</td>
<td width='200px' align="center">


</td>
<td width='100px'>
</td>
</tr>


<tr height='300px'>
<td width='100px'>
</td>
<td width='100px' colspan='3'>
<form>
    	 <h1 class="next" hidden>
	        	
	        </h1>
			<div class="jumbotron">

        	<button type="button"  class="btn btn-primary next_getway" onclick="openWin()">GRUP 1 <span class="glyphicon glyphicon-chevron-right"></span></button>
	      	<p></p><button type="button"  class="btn btn-primary next_getway" onclick="openWin1()">GRUP 2 <span class="glyphicon glyphicon-chevron-right"></span></button>
	      		<p></p><button type="button"  class="btn btn-primary next_getway" onclick="openWin2()">GRUP 3 <span class="glyphicon glyphicon-chevron-right"></span></button>
	      	
			</div>
    	</form>
</td>


<td width='200px' align="center">


</td>
<td width='100px'>
</td>
</tr>




<tr height=''>
<td width='100px'>
</td>
<td width='100px'>
</td>
<td width='100px'>
</td>
<td width='100px'>
</td>
<td width='200px' align="center">


</td>
<td width='100px'>
</td>
</tr>
</table>


<script type="text/javascript">
	$("document").ready(function()
	{

		// GET LAST COUNTER
	    $.post( "../apps/admin_getway.php", function( data ) {
			$(".next").html(data['next']);
		},"json");
		
	
	    // RESET 
		$(".next_getway").click(function(){
			var next_current = $(".next").text();
			$.post( "../apps/admin_getway.php", {"next_current": next_current}, function( data ) {
				$(".next").html(data['next']);
			},"json");
		});

	});
	</script>
	
		<script>
var myWindow;

function openWin() {
  myWindow = window.open("tesprint.php", "_blank", "width=300, height=500");

}

function openWin1() {
  myWindow = window.open("tesprint2.php", "_blank", "width=300, height=500");

}

function openWin2() {
  myWindow = window.open("tesprint3.php", "_blank", "width=300, height=500");

}


</script>