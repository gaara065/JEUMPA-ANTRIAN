<?php 
error_reporting(0);

include '../apps/mysql_connect.php';

	  
	  	$results = $mysqli->query("SELECT id as no_loket FROM data_antrian
                                        WHERE status='1' or status='0'");	
		$r = $results->fetch_array();
		
		
      if($r == null){
          //echo '<p align="center" style="margin-top:10px; font-family:SimHei; font-size: 98px; font-weight:bold; color:red;">OFF</p>';
      }else{
        echo "<p id='blink1'  align='center' style='margin-top:10px; font-family:SimHei; font-size: 98px; font-weight:bold; color:#100e85;'>$r[no_loket]</p>";
      }
?>

<script type="text/javascript">
<!--
// blink "on" state
function show()
{
	if (document.getElementById)
	document.getElementById("blink1").style.visibility = "visible";
}
// blink "off" state
function hide()
{
	if (document.getElementById)
	document.getElementById("blink1").style.visibility = "hidden";
}
// toggle "on" and "off" states every 450 ms to achieve a blink effect
// end after 4500 ms (less than five seconds)
for(var i=900; i < 4500; i=i+900)
{
	setTimeout("hide()",i);
	setTimeout("show()",i+450);
}
-->
</script>