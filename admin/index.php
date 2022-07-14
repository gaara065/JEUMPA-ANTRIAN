<?php
 include "../apps/mysql_connect.php";
 
 
 	$resultst = $mysqli->query("SELECT date(waktu) as tgl FROM data_antrian order by id desc");	
		$aat = $resultst->fetch_array();
		$aat = $aat['tgl'];
 
 $tglskrng=date("Y-m-d");
 
 if ($aat<> $tglskrng)
 {
	 $rstClient = $mysqli->query('TRUNCATE TABLE data_antrian');
 }

	
	
	
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

 background-image:  url(b.jpg);
  background-position: left top;
  background-repeat:  no-repeat;
   background-size:  1600px ;
  

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

	<tbody>
		
		<tr>
			
			<td height="100px" >
				<br>
			</td>
			<td class="et1" height="19"></td>
			<td height="19">
				<br>
			</td>
			<td height="19" align="center top">



			</td>
			<td height="19">
				<br>
			</td>
			<td height="19">
				<br>
			</td>		<td >
				<br>
			</td>
			
		</tr>
		
		
		
	<tr >
			<td height="10px">
				<br>
			</td>
			<td >
				<br>
			</td>
			<td >
				<br>
			</td>
			<td>
				<br>
			</td>
			<td >
				<br>
			</td>
			<td >
				<br>
			</td>
					<td >
				<br>
			</td>
		</tr>
		
		
		<tr >
			<td height="50px">
				<br>
			</td>
			<td width="200px">
	<span id="sisaloket1" ></span>
			</td>
			<td width="200px">
			<span id="sisaloket2" ></span>
			</td>
			<td width="200px">
			<span id="sisaloket3" ></span>
			</td>
				<td width="200px">
			<span id="sisaloket4" ></span>
			</td>
			<td width="200px">
			<span id="sisaloket5" ></span>
			</td>
					<td >
				<br>
			</td>
		</tr>
			<tr>
			<td height="19">
				<br>
			</td>
			<td align="center" class="et1" height="100px">
				<div class="loket1" style="font-family:SimHei; font-size: 60px; font-weight:bold; color:BLACK;">
</div>
</td>
			<td align="center" class="et1" height="">
			<div class="loket2" style="font-family:SimHei; font-size: 60px; font-weight:bold; color:BLACK;" >
</div>
			</td>
			<td align="center"  class="et1" height="">
			<div class="loket3" style="font-family:SimHei; font-size: 60px; font-weight:bold; color:BLACK;">
</div>
			</td>
			<td align="center"  class="et1" height="">
			<div class="loket4" style="font-family:SimHei; font-size: 60px; font-weight:bold; color:BLACK;">
</div>
			</td>
			<td align="center"  class="et1" height="">
			<div class="loket5" style="font-family:SimHei; font-size: 60px; font-weight:bold; color:BLACK;">
</div>
			</td>
					<td >
				<br>
			</td>
		</tr>	
		
		<tr>
			<td height="19">
				<br>
			</td>
			<td class="et2" colspan="3" height="350px" align="center">
			
			
			
			
			
			
			
			</td>
			<td class="et2" colspan="2" height="" valign="top">
			
			
			
			<form>
    	 <h1 class="next" hidden>
	        	
	        </h1>
		
<button type="button" style="border: 0; background: transparent" class="next_getway" onclick="openWin()">
    <img src="tombol1.png" width="350"  alt="submit" />
</button>

<button type="button" style="border: 0; background: transparent" class="next_getway2" onclick="openWin1()">
    <img src="tombol2.png" width="350"  alt="submit" />
</button>

<button type="button" style="border: 0; background: transparent" class="next_getway3" onclick="openWin2()">
    <img src="tombol3.png" width="350"  alt="submit" />
</button>
	      
        	
			
    	</form>
		
		

		
			</td>
					<td>
				<br>
			</td>
		</tr>
		
	
	
		
		
		
		
		<tr>
			<td  width="5px">
				<br>
			</td>
			<td class="et1" height="40px"></td>
			<td class="et1" height=""></td>
			<td class="et1" height=""></td>
			<td class="et1" height=""></td>
			<td class="et1" height=""></td>
					<td >
				<br>
			</td>
		</tr>
		
		
		<tr >
			<td height="10px">
				<br>
			</td>
			<td >
				<br>
			</td>
			<td >
				<br>
			</td>
			<td>
				<br>
			</td>
			<td >
				<br>
			</td>
			<td >
				<br>
			</td>
					<td >
				<br>
			</td>
		</tr>
		
		
		<tr>
			<td height="19">
				<br>
			</td>
			<td class="et1" height="30px">
		&nbsp;	
			</td>
			<td class="et2" colspan="4" height="">
			<font size='6px' color='BLACK'>
<marquee behavior="scroll" direction="left"><?php  echo "$bb"; ?></marquee></font>
			</td>
					<td >
				<br>
			</td>
		</tr>
		
		
		<tr >
			<td >
				<br>
			</td>
			<td >
				<br>
			</td>
			<td >
				<br>
			</td>
			<td>
				<br>
			</td>
			<td >
				<br>
			</td>
			<td >
				<br>
			</td>
					<td >
				<br>
			</td>
		</tr>
	</tbody>
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
		
				$(".next_getway2").click(function(){
			var next_current = $(".next").text();
			$.post( "../apps/admin_getway2.php", {"next_current": next_current}, function( data ) {
				$(".next").html(data['next']);
			},"json");
		});
		
						$(".next_getway3").click(function(){
			var next_current = $(".next").text();
			$.post( "../apps/admin_getway3.php", {"next_current": next_current}, function( data ) {
				$(".next").html(data['next']);
			},"json");
		});

	});
	</script>
	
		<script>
var myWindow;

function openWin() {
  myWindow = window.open("tesprint.php", "_blank", "width=300, height=400");
    myWindow = window.open("tesprint.php", "_blank", "width=300, height=400");

}

function openWin1() {
  myWindow = window.open("tesprint2.php", "_blank", "width=300, height=400");
    myWindow = window.open("tesprint2.php", "_blank", "width=300, height=400");

}

function openWin2() {
  myWindow = window.open("tesprint3.php", "_blank", "width=300, height=400");
    myWindow = window.open("tesprint3.php", "_blank", "width=300, height=400");

}


</script>