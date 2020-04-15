 <?php
 include "../apps/mysql_connect.php";
 
		$results = $mysqli->query("SELECT * FROM mamar where ket='kedip'");	
		$aa = $results->fetch_array();
		$aa = $aa['isi'];
		
			$results = $mysqli->query("SELECT * FROM mamar where ket='jalan'");	
		$bb = $results->fetch_array();
		$bb = $bb['isi'];
		
	
		 
		
		 
	
		
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
		
		
		
		
		
		<tr>
			<td height="19">
				<br>
			</td>
			
			
			
			<td class="et2" colspan="2" height="350px" align="center">
			
			
		<iframe src="https://www.metube.id/embed/219/?type=live&mute=true&autoplay=true" scrolling="no" 
allowfullscreen="" width="80%"  frameborder="0" autostart="true" muted="true"></iframe>
			</td>
			
			
			
			<td class="et2" colspan="3" height="" valign="top">
			
		<table border="0" cellpadding="0" cellspacing="0" >
		<tr>
		<td width="120px"  >
	<br/>
	<br/>	<br/>	
		</td>
		<td width="120px"  >

		</td>
		<td width="120px"  >

		</td>
		<td width="120px"  >

		</td>
		<td width="120px"  >

		</td>
		</tr>
		
		
		<tr>
		<td width="120px"  id="station_data1" valign="top" align="center">

		</td>
		<td width="120px"  id="station_data4"  valign="top" align="center">

		</td>
		<td width="120px"  id="station_data5" valign="top" align="center">

		</td>
		<td width="120px" id="station_data2"  valign="top" align="center">

		</td>
		<td width="120px" id="station_data3"  valign="top" align="center">

		</td>
		</tr>

			</table>
		
			</td>
					<td>
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
			<span id="sisaloket4" ></span>
			</td>
			<td width="200px">
			<span id="sisaloket5" ></span>
			</td>
				<td width="200px">
			<span id="sisaloket2" ></span>
			</td>
			<td width="200px">
			<span id="sisaloket3" ></span>
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
				<div id="live1" style="font-family:SimHei; font-size: 60px; font-weight:bold; color:BLACK;">
</div>
</td>
			<td align="center" class="et1" height="">
			
			<div  id="live4" style="font-family:SimHei; font-size: 60px; font-weight:bold; color:BLACK;" >
</div>
			</td>
			<td align="center"  class="et1" height="">
			<div  id="live5" style="font-family:SimHei; font-size: 60px; font-weight:bold; color:BLACK;">
</div>
			</td>
			<td align="center"  class="et1" height="">
			<div id="live2" style="font-family:SimHei; font-size: 60px; font-weight:bold; color:BLACK;">
</div>
			</td>
			<td align="center"  class="et1" height="">
			<div id="live3" style="font-family:SimHei; font-size: 60px; font-weight:bold; color:BLACK;">
</div>
			</td>
					<td >
				<br>
			</td>
		</tr>
		<div  id="seribu" style="font-family:SimHei; font-size: 60px; font-weight:bold; color:BLACK;">
</div>
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
		&nbsp;	<iframe scrolling="no" frameborder="no" clocktype="html5" style="overflow:hidden;border:0;margin:0;padding:0;width:120px;height:40px;"src="https://www.clocklink.com/html5embed.php?clock=043&timezone=GMT0700&color=black&size=120&Title=&Message=&Target=&From=2019,1,1,0,0,0&Color=black"></iframe>

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



$(document).ready(function(){    
    loadstationa();
});

function loadstationa(){
	
		     $("#sisaloket1").load('sisaloket1.php');
	   $("#sisaloket2").load('sisaloket2.php');
	    $("#sisaloket3").load('sisaloket3.php');
		 $("#sisaloket4").load('sisaloket4.php');
		  $("#sisaloket5").load('sisaloket5.php');
		  
    $("#station_data1").load("station1.php");
	  $("#station_data2").load("station2.php");
	    $("#station_data3").load("station3.php");
		  $("#station_data4").load("station4.php");
		    $("#station_data5").load("station5.php");
		
	
		     $("#live1").load('live1.php');
	   $("#live2").load('live2.php');
	    $("#live3").load('live3.php');
		 $("#live4").load('live4.php');
		  $("#live5").load('live5.php');		
					
					
				
$("#seribu").load("seribu.php");

setTimeout(loadstationa, 10000);
}




</script>





  
  	</body>
 
	
	
	<?php
		 include '../apps/mysql_close.php';
		
		?>