 <?php
 sleep(1);
 include "../apps/mysql_connect.php";
 

		$results = $mysqli->query("SELECT * FROM data_antrian where gru='3' order by id desc");	
		$results = $results->fetch_array();
		$aa = 'C'.$results['urutan'];
		$bb = $results['waktu'];
		$cc = $results['gru'];
		
	
		  	$resultsa = $mysqli->query("SELECT count(*) as no_loket FROM data_antrian where status='3' and gru='3'  and (counter='0' or counter='1')");	
		$r = $resultsa->fetch_array();
		


		 

		
?>
		





 <style>
@media print
{
  .button
  {
    display: none;
  }
 
}
body,table {
  font-size: 13px;
font-family: Arial;
margin : 0px 10px;

}

 </style>
 <meta http-equiv="Content-Type" content="text/html;charset=ISO-8859-1">
<meta charset="UTF-8"> 
<body >
	







<div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class='print'>
             <div class="invoice-title" align="center">
<img src="print.png" alt="Smiley face"  width="40%">
</div>

                    <div class="invoice-title" align="center">
<b><font style="font-size:14px">UPT PPD  <BR/>
PONTIANAK WILAYAH I</font></b>


                    </div>
		
   <div class="invoice-title" align="center">
                       <?php  echo "$bb"; ?>                    </div>


   	        
                    <div class="invoice-title" align="center">
<b> <font style="font-size:70px"><?php  echo "$aa"; ?></font>
</b>
<br>
<b> <font style="font-size:18px">GRUP   <?php  echo "$cc"; ?>  </font>
</b>
                    </div>
		
                <div class="invoice-title" align="center">
                       <?php  echo "$r[no_loket]"; ?>  antrian menunggu                  </div>
				
  		  
      
       <div class="invoice-title" align="center">

	    Selamat Datang di SAMSAT PONTIANAK I <br/>
	   Silahkan Menunggu Dengan Tertib <br/>
	   Terima Kasih

                    </div>					
					
                </div>
				&nbsp; <br>
						&nbsp; <br>
							&nbsp; <br>
							 <div class="invoice-title" align="center">
    
                <div>
                <div>
                    <div>
                    </div>
					
	</body>				
					
					
	<?php
include '../apps/mysql_close.php';
?>				
					
					<script type="text/javascript"> 
window.print();
window.close();
</script>

					
					
					