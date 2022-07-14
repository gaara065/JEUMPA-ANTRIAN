   <link href="../assert/css/bootstrap.min.css" rel="stylesheet">
	    <link href="../assert/css/jumbotron-narrow-monitoring.css" rel="stylesheet">
		<script src="../assert/js/jquery.min.js"></script>
		
		<style>
body  {

 background-image: url(c.jpg), url(b.jpg);
  background-position: bottom, left top;
  background-repeat: no-repeat, no-repeat;
   background-size: 1350px 80px, 1600px ;
  

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

<body>
<table border="0" cellpadding="0" cellspacing="0"  width="100%" height="100%">

<tr height='100px' >

<td colspan='6'>
<img src="d.png" alt="Smiley face"  width="100%">
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
<td colspan='2' width='700px' align="">

<b><font size='3.5px' color='white'>
<span class="blinking">.:: Budayakan Antri Untuk Kenyamanan Bersama, Terimakasih Atas Kunjungan Anda ::.</span>
</font></b>
</td>

</tr>


<tr height='160px'>
<td colspan='2' align='center' height='150px' class='fontsize'> 	
<div class="row loket1">
</div>
</td>

<td width='100px' colspan='2' align='center' class='fontsize'>1
</td>

<td rowspan='3' colspan='2'  >

&nbsp;&nbsp;
<video width="90%" height='80%' autoplay="autoplay" controls autoplay loop muted>
  <source src="video/mov_bbb.mp4" type="video/mp4">
</video>
<br/><br/>

</td>

</tr>


<tr height='160px'>
<td colspan='2' align='center'  height='150px' class='fontsize'>
<div class="row loket2">
</div>
</td>
<td width='100px' colspan='2' align='center' class='fontsize'>2
</td>


</tr>





<tr height='160px'>
<td colspan='2' align='center'  height='150px' class='fontsize'>
<div class="row loket3">
</div>
</td>
<td width='100px' colspan='2' align='center' class='fontsize'>3
</td>


</tr>




<tr height='10px'>
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





<tr height='50px'>
<td colspan='2' align="center">

<iframe scrolling="no" frameborder="no" clocktype="html5" style="overflow:hidden;border:0;margin:0;padding:0;width:120px;height:40px;"src="https://www.clocklink.com/html5embed.php?clock=043&timezone=GMT0700&color=black&size=120&Title=&Message=&Target=&From=2019,1,1,0,0,0&Color=black"></iframe>

</td>

<td width='100px'>
</td>
<td  colspan='3'><font size='6px' color='white'>
<marquee behavior="scroll" direction="left">
bayarlah pajak anda sebelum jatuh tempo... !!!!
</marquee></font>
</td>
</tr>


<tr>
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

</tbody></table>




	
	    <div class="audio">
		  	<audio id="in" src="../audio/new/in.wav"></audio>
		  	<audio id="out" src="../audio/new/out.wav"></audio>
		  	<audio id="suarabel" src="../audio/new/Airport_Bell.mp3"></audio>
			<audio id="suarabelnomorurut" src="../audio/new/nomor-urut.MP3"></audio> 
			<audio id="suarabelsuarabelloket" src="../audio/new/konter.MP3"></audio> 
			<audio id="belas" src="../audio/new/belas.MP3"></audio> 
			<audio id="sebelas" src="../audio/new/sebelas.MP3"></audio> 
			<audio id="puluh" src="../audio/new/puluh.MP3"></audio> 
			<audio id="sepuluh" src="../audio/new/sepuluh.MP3"></audio> 
			<audio id="ratus" src="../audio/new/ratus.MP3"></audio> 
			<audio id="seratus" src="../audio/new/seratus.MP3"></audio> 
			<audio id="suarabelloket1" src="../audio/new/1.MP3"></audio> 
			<audio id="suarabelloket2" src="../audio/new/2.MP3"></audio> 
			<audio id="suarabelloket3" src="../audio/new/3.MP3"></audio> 
			<audio id="suarabelloket4" src="../audio/new/4.MP3"></audio> 
			<audio id="suarabelloket5" src="../audio/new/5.MP3"></audio> 
			<audio id="suarabelloket6" src="../audio/new/6.MP3"></audio> 
			<audio id="suarabelloket7" src="../audio/new/7.MP3"></audio> 
			<audio id="suarabelloket8" src="../audio/new/8.MP3"></audio> 
			<audio id="suarabelloket9" src="../audio/new/9.MP3"></audio> 
			<audio id="suarabelloket10" src="../audio/new/sepuluh.MP3"></audio> 
			<audio id="loket" src="../audio/new/loket.MP3"></audio> 
       	</div>
  
  	</body>
  	<script type="text/javascript">
	$("document").ready(function(){
		var tmp_loket=0;
		setInterval(function() {
			$.post("../apps/monitoring-daemon.php", function( data ){
				if(tmp_loket!=data['jumlah_loket']){
					$(".col-md-3").remove();
					tmp_loket=0;
				}
				if (tmp_loket==0) {
					for (var i = 1; i<= data['jumlah_loket']; i++) {
						loket = '<div class="col-md-3">'+
									'<div class="'+ i +
									 ' jumbotron" style="padding-top:20px;padding-bottom:20px;">'+
										'<h1> '+data["init_counter"][i]+' </h1>'+
										'<button class="btn btn-danger" type="button"><span class="glyphicon glyphicon-credit-card">&nbsp;</span>LOKET '+ i +'</button>'+
									'</div>'+
								'</div>';
						$(".loket").append(loket);
					}
					for (var i = 1; i<= 1; i++) {
						loket1 = ''+
									'<div class="'+ i +'">'
									 +'<aa> '+data["init_counter"][i]+' </aa></div>'+
								'';
						$(".loket1").append(loket1);
					}
					
						for (var i = 2; i<= 2; i++) {
						loket2 = ''+
									'<div class="'+ i +'">'
									 +'<aa> '+data["init_counter"][i]+' </aa></div>'+
								'';
						$(".loket2").append(loket2);
					}
					
						for (var i = 3; i<= 3; i++) {
						loket3 = ''+
									'<div class="'+ i +'">'
									 +'<aa> '+data["init_counter"][i]+' </aa></div>'+
								'';
						$(".loket3").append(loket3);
					}

					tmp_loket = data['jumlah_loket'];
				}
				
				for (var i = 1; i <= data['jumlah_loket']; i++) { 					
					if (data["counter"]==i) {
						$("."+i+" aa").html(data["next"]);
					}
				}
				if (data["next"]) {
					var angka = data["next"];
					for (var i = 0 ; i < angka.toString().length; i++) {
						$(".audio").append('<audio id="suarabel'+i+'" src="../audio/new/'+angka.toString().substr(i,1)+'.MP3" ></audio>');
					};
					mulai(data["next"],data["counter"]);
				}else{
					for (var i = 1; i <= data['jumlah_loket']; i++) { 					
						if (data["counter"]==i) {
							$("."+i+" aa").html(data["next"]);
						}
					}
				};

			}, "json"); 
		}, 1000);
		//change
	});
	
	function mulai(urut, loket){
		var totalwaktu = 8568.163;
		document.getElementById('in').pause();
		document.getElementById('in').currentTime=0;
		document.getElementById('in').play();
		totalwaktu=document.getElementById('in').duration*1000;	
		setTimeout(function() {
				document.getElementById('suarabelnomorurut').pause();
				document.getElementById('suarabelnomorurut').currentTime=0;
				document.getElementById('suarabelnomorurut').play();
		}, totalwaktu);
		totalwaktu=totalwaktu+1000;
		if(urut<10){
			setTimeout(function() {
					document.getElementById('suarabel0').pause();
					document.getElementById('suarabel0').currentTime=0;
					document.getElementById('suarabel0').play();
				}, totalwaktu);
			totalwaktu=totalwaktu+1000;
			setTimeout(function() {
					document.getElementById('loket').pause();
					document.getElementById('loket').currentTime=0;
					document.getElementById('loket').play();
				}, totalwaktu);
			totalwaktu=totalwaktu+1000;
			setTimeout(function() {
					document.getElementById('suarabelloket'+loket+'').pause();
					document.getElementById('suarabelloket'+loket+'').currentTime=0;
					document.getElementById('suarabelloket'+loket+'').play();
				}, totalwaktu);
			totalwaktu=totalwaktu+1000;
			setTimeout(function() {
					for (var i = 0 ; i < urut.toString().length; i++) {
						$("#suarabel"+i+"").remove();
					};
				}, totalwaktu);
			totalwaktu=totalwaktu+1000;
		}else if(urut==10){
				setTimeout(function() {
						document.getElementById('sepuluh').pause();
						document.getElementById('sepuluh').currentTime=0;
						document.getElementById('sepuluh').play();
					}, totalwaktu);
				totalwaktu=totalwaktu+1000;
				setTimeout(function() {
						document.getElementById('loket').pause();
						document.getElementById('loket').currentTime=0;
						document.getElementById('loket').play();
					}, totalwaktu);
				totalwaktu=totalwaktu+1000;
				setTimeout(function() {
						document.getElementById('suarabelloket'+loket+'').pause();
						document.getElementById('suarabelloket'+loket+'').currentTime=0;
						document.getElementById('suarabelloket'+loket+'').play();
					}, totalwaktu);
				totalwaktu=totalwaktu+1000;
				setTimeout(function() {
						for (var i = 0 ; i < urut.toString().length; i++) {
							$("#suarabel"+i+"").remove();
						};
					}, totalwaktu);
				totalwaktu=totalwaktu+1000;
		}else if(urut ==11){
				setTimeout(function() {
						document.getElementById('sebelas').pause();
						document.getElementById('sebelas').currentTime=0;
						document.getElementById('sebelas').play();
					}, totalwaktu);
				totalwaktu=totalwaktu+1000;
				setTimeout(function() {
						document.getElementById('loket').pause();
						document.getElementById('loket').currentTime=0;
						document.getElementById('loket').play();
					}, totalwaktu);
				totalwaktu=totalwaktu+1000;
				setTimeout(function() {
						document.getElementById('suarabelloket'+loket+'').pause();
						document.getElementById('suarabelloket'+loket+'').currentTime=0;
						document.getElementById('suarabelloket'+loket+'').play();
					}, totalwaktu);
				totalwaktu=totalwaktu+1000;
				setTimeout(function() {
						for (var i = 0 ; i < urut.toString().length; i++) {
							$("#suarabel"+i+"").remove();
						};
					}, totalwaktu);
				totalwaktu=totalwaktu+1000;
		}else if(urut < 20){
				setTimeout(function() {
						document.getElementById('suarabel1').pause();
						document.getElementById('suarabel1').currentTime=0;
						document.getElementById('suarabel1').play();
					}, totalwaktu);
				totalwaktu=totalwaktu+1000;
				setTimeout(function() {
						document.getElementById('belas').pause();
						document.getElementById('belas').currentTime=0;
						document.getElementById('belas').play();
					}, totalwaktu);
				totalwaktu=totalwaktu+1000;
				setTimeout(function() {
						document.getElementById('loket').pause();
						document.getElementById('loket').currentTime=0;
						document.getElementById('loket').play();
					}, totalwaktu);
				totalwaktu=totalwaktu+1000;
				setTimeout(function() {
						document.getElementById('suarabelloket'+loket+'').pause();
						document.getElementById('suarabelloket'+loket+'').currentTime=0;
						document.getElementById('suarabelloket'+loket+'').play();
					}, totalwaktu);
				totalwaktu=totalwaktu+1000;
				setTimeout(function() {
						for (var i = 0 ; i < urut.toString().length; i++) {
							$("#suarabel"+i+"").remove();
						};
					}, totalwaktu);
				totalwaktu=totalwaktu+1000;
		}else if(urut < 100){
				setTimeout(function() {
						document.getElementById('suarabel0').pause();
						document.getElementById('suarabel0').currentTime=0;
						document.getElementById('suarabel0').play();
					}, totalwaktu);
				totalwaktu=totalwaktu+1000;
				setTimeout(function() {
						document.getElementById('puluh').pause();
						document.getElementById('puluh').currentTime=0;
						document.getElementById('puluh').play();
					}, totalwaktu);
				totalwaktu=totalwaktu+1000;
				setTimeout(function() {
						document.getElementById('suarabel1').pause();
						document.getElementById('suarabel1').currentTime=0;
						document.getElementById('suarabel1').play();
					}, totalwaktu);
				totalwaktu=totalwaktu+1000;
				setTimeout(function() {
						document.getElementById('loket').pause();
						document.getElementById('loket').currentTime=0;
						document.getElementById('loket').play();
					}, totalwaktu);
				totalwaktu=totalwaktu+1000;
				setTimeout(function() {
						document.getElementById('suarabelloket'+loket+'').pause();
						document.getElementById('suarabelloket'+loket+'').currentTime=0;
						document.getElementById('suarabelloket'+loket+'').play();
					}, totalwaktu);
				totalwaktu=totalwaktu+1000;
				setTimeout(function() {
						for (var i = 0 ; i < urut.toString().length; i++) {
							$("#suarabel"+i+"").remove();
						};
					}, totalwaktu);
				totalwaktu=totalwaktu+1000;
		}else if(urut==100){
			setTimeout(function() {
						document.getElementById('seratus').pause();
						document.getElementById('seratus').currentTime=0;
						document.getElementById('seratus').play();
					}, totalwaktu);
				totalwaktu=totalwaktu+1000;
				setTimeout(function() {
						document.getElementById('loket').pause();
						document.getElementById('loket').currentTime=0;
						document.getElementById('loket').play();
					}, totalwaktu);
				totalwaktu=totalwaktu+1000;
				setTimeout(function() {
						document.getElementById('suarabelloket'+loket+'').pause();
						document.getElementById('suarabelloket'+loket+'').currentTime=0;
						document.getElementById('suarabelloket'+loket+'').play();
					}, totalwaktu);
				totalwaktu=totalwaktu+1000;
				setTimeout(function() {
						for (var i = 0 ; i < urut.toString().length; i++) {
							$("#suarabel"+i+"").remove();
						};
					}, totalwaktu);
				totalwaktu=totalwaktu+1000;
		}else if (urut < 110) {
				setTimeout(function() {
						document.getElementById('seratus').pause();
						document.getElementById('seratus').currentTime=0;
						document.getElementById('seratus').play();
					}, totalwaktu);
				totalwaktu=totalwaktu+1000;
				setTimeout(function() {
						document.getElementById('suarabel2').pause();
						document.getElementById('suarabel2').currentTime=0;
						document.getElementById('suarabel2').play();
					}, totalwaktu);
				totalwaktu=totalwaktu+1000;
				setTimeout(function() {
						document.getElementById('loket').pause();
						document.getElementById('loket').currentTime=0;
						document.getElementById('loket').play();
					}, totalwaktu);
				totalwaktu=totalwaktu+1000;
				setTimeout(function() {
						document.getElementById('suarabelloket'+loket+'').pause();
						document.getElementById('suarabelloket'+loket+'').currentTime=0;
						document.getElementById('suarabelloket'+loket+'').play();
					}, totalwaktu);
				totalwaktu=totalwaktu+1000;
				setTimeout(function() {
						for (var i = 0 ; i < urut.toString().length; i++) {
							$("#suarabel"+i+"").remove();
						};
					}, totalwaktu);
				totalwaktu=totalwaktu+1000;
		}else if (urut == 110) {
				setTimeout(function() {
						document.getElementById('seratus').pause();
						document.getElementById('seratus').currentTime=0;
						document.getElementById('seratus').play();
					}, totalwaktu);
				totalwaktu=totalwaktu+1000;
				setTimeout(function() {
						document.getElementById('sepuluh').pause();
						document.getElementById('sepuluh').currentTime=0;
						document.getElementById('sepuluh').play();
					}, totalwaktu);
				totalwaktu=totalwaktu+1000;
				setTimeout(function() {
						document.getElementById('loket').pause();
						document.getElementById('loket').currentTime=0;
						document.getElementById('loket').play();
					}, totalwaktu);
				totalwaktu=totalwaktu+1000;
				setTimeout(function() {
						document.getElementById('suarabelloket'+loket+'').pause();
						document.getElementById('suarabelloket'+loket+'').currentTime=0;
						document.getElementById('suarabelloket'+loket+'').play();
					}, totalwaktu);
				totalwaktu=totalwaktu+1000;
				setTimeout(function() {
						for (var i = 0 ; i < urut.toString().length; i++) {
							$("#suarabel"+i+"").remove();
						};
					}, totalwaktu);
				totalwaktu=totalwaktu+1000;
		}else if (urut == 111) {
				setTimeout(function() {
						document.getElementById('seratus').pause();
						document.getElementById('seratus').currentTime=0;
						document.getElementById('seratus').play();
					}, totalwaktu);
				totalwaktu=totalwaktu+1000;
				setTimeout(function() {
						document.getElementById('sebelas').pause();
						document.getElementById('sebelas').currentTime=0;
						document.getElementById('sebelas').play();
					}, totalwaktu);
				totalwaktu=totalwaktu+1000;
				setTimeout(function() {
						document.getElementById('loket').pause();
						document.getElementById('loket').currentTime=0;
						document.getElementById('loket').play();
					}, totalwaktu);
				totalwaktu=totalwaktu+1000;
				setTimeout(function() {
						document.getElementById('suarabelloket'+loket+'').pause();
						document.getElementById('suarabelloket'+loket+'').currentTime=0;
						document.getElementById('suarabelloket'+loket+'').play();
					}, totalwaktu);
				totalwaktu=totalwaktu+1000;
				setTimeout(function() {
						for (var i = 0 ; i < urut.toString().length; i++) {
							$("#suarabel"+i+"").remove();
						};
					}, totalwaktu);
				totalwaktu=totalwaktu+1000;
		}else if (urut < 120) {
				setTimeout(function() {
						document.getElementById('seratus').pause();
						document.getElementById('seratus').currentTime=0;
						document.getElementById('seratus').play();
					}, totalwaktu);
				totalwaktu=totalwaktu+1000;
				setTimeout(function() {
						document.getElementById('suarabel2').pause();
						document.getElementById('suarabel2').currentTime=0;
						document.getElementById('suarabel2').play();
					}, totalwaktu);
				totalwaktu=totalwaktu+1000;
				setTimeout(function() {
						document.getElementById('belas').pause();
						document.getElementById('belas').currentTime=0;
						document.getElementById('belas').play();
					}, totalwaktu);
				totalwaktu=totalwaktu+1000;
				setTimeout(function() {
						document.getElementById('loket').pause();
						document.getElementById('loket').currentTime=0;
						document.getElementById('loket').play();
					}, totalwaktu);
				totalwaktu=totalwaktu+1000;
				setTimeout(function() {
						document.getElementById('suarabelloket'+loket+'').pause();
						document.getElementById('suarabelloket'+loket+'').currentTime=0;
						document.getElementById('suarabelloket'+loket+'').play();
					}, totalwaktu);
				totalwaktu=totalwaktu+1000;
				setTimeout(function() {
						for (var i = 0 ; i < urut.toString().length; i++) {
							$("#suarabel"+i+"").remove();
						};
					}, totalwaktu);
				totalwaktu=totalwaktu+1000;
		}else if (urut == 120) {
				setTimeout(function() {
						document.getElementById('seratus').pause();
						document.getElementById('seratus').currentTime=0;
						document.getElementById('seratus').play();
					}, totalwaktu);
				totalwaktu=totalwaktu+1000;
				setTimeout(function() {
						document.getElementById('suarabel1').pause();
						document.getElementById('suarabel1').currentTime=0;
						document.getElementById('suarabel1').play();
					}, totalwaktu);
				totalwaktu=totalwaktu+1000;
				setTimeout(function() {
						document.getElementById('puluh').pause();
						document.getElementById('puluh').currentTime=0;
						document.getElementById('puluh').play();
					}, totalwaktu);
				totalwaktu=totalwaktu+1000;
				setTimeout(function() {
						document.getElementById('loket').pause();
						document.getElementById('loket').currentTime=0;
						document.getElementById('loket').play();
					}, totalwaktu);
				totalwaktu=totalwaktu+1000;
				setTimeout(function() {
						document.getElementById('suarabelloket'+loket+'').pause();
						document.getElementById('suarabelloket'+loket+'').currentTime=0;
						document.getElementById('suarabelloket'+loket+'').play();
					}, totalwaktu);
				totalwaktu=totalwaktu+1000;
				setTimeout(function() {
						for (var i = 0 ; i < urut.toString().length; i++) {
							$("#suarabel"+i+"").remove();
						};
					}, totalwaktu);
				totalwaktu=totalwaktu+1000;
		}else if (urut < 200) {
				setTimeout(function() {
						document.getElementById('seratus').pause();
						document.getElementById('seratus').currentTime=0;
						document.getElementById('seratus').play();
					}, totalwaktu);
				totalwaktu=totalwaktu+1000;
				setTimeout(function() {
						document.getElementById('suarabel1').pause();
						document.getElementById('suarabel1').currentTime=0;
						document.getElementById('suarabel1').play();
					}, totalwaktu);
				totalwaktu=totalwaktu+1000;
				setTimeout(function() {
						document.getElementById('puluh').pause();
						document.getElementById('puluh').currentTime=0;
						document.getElementById('puluh').play();
					}, totalwaktu);
				totalwaktu=totalwaktu+1000;
				
				if (urut%10!=0) {
					setTimeout(function() {
							document.getElementById('suarabel2').pause();
							document.getElementById('suarabel2').currentTime=0;
							document.getElementById('suarabel2').play();
						}, totalwaktu);
					totalwaktu=totalwaktu+1000;
				}

				setTimeout(function() {
						document.getElementById('loket').pause();
						document.getElementById('loket').currentTime=0;
						document.getElementById('loket').play();
					}, totalwaktu);
				totalwaktu=totalwaktu+1000;
				setTimeout(function() {
						document.getElementById('suarabelloket'+loket+'').pause();
						document.getElementById('suarabelloket'+loket+'').currentTime=0;
						document.getElementById('suarabelloket'+loket+'').play();
					}, totalwaktu);
				totalwaktu=totalwaktu+1000;
				setTimeout(function() {
						for (var i = 0 ; i < urut.toString().length; i++) {
							$("#suarabel"+i+"").remove();
						};
					}, totalwaktu);
				totalwaktu=totalwaktu+1000;
		}else if (urut == 200) {
				setTimeout(function() {
						document.getElementById('suarabel0').pause();
						document.getElementById('suarabel0').currentTime=0;
						document.getElementById('suarabel0').play();
					}, totalwaktu);
				totalwaktu=totalwaktu+1000;
				setTimeout(function() {
						document.getElementById('ratus').pause();
						document.getElementById('ratus').currentTime=0;
						document.getElementById('ratus').play();
					}, totalwaktu);
				totalwaktu=totalwaktu+1000;
				setTimeout(function() {
						document.getElementById('loket').pause();
						document.getElementById('loket').currentTime=0;
						document.getElementById('loket').play();
					}, totalwaktu);
				totalwaktu=totalwaktu+1000;
				setTimeout(function() {
						document.getElementById('suarabelloket'+loket+'').pause();
						document.getElementById('suarabelloket'+loket+'').currentTime=0;
						document.getElementById('suarabelloket'+loket+'').play();
					}, totalwaktu);
				totalwaktu=totalwaktu+1000;
				setTimeout(function() {
						for (var i = 0 ; i < urut.toString().length; i++) {
							$("#suarabel"+i+"").remove();
						};
					}, totalwaktu);
				totalwaktu=totalwaktu+1000;
		}else if(urut < 999){
				setTimeout(function() {
						document.getElementById('suarabel0').pause();
						document.getElementById('suarabel0').currentTime=0;
						document.getElementById('suarabel0').play();
				}, totalwaktu);
				totalwaktu=totalwaktu+1000;
				if (urut.toString().substr(1,1) == 0 && urut.toString().substr(2,1)==0) { // 200 300 400 ..
					setTimeout(function() {
							document.getElementById('ratus').pause();
							document.getElementById('ratus').currentTime=0;
							document.getElementById('ratus').play();
						}, totalwaktu);
					totalwaktu=totalwaktu+1000;
				} else if(urut.toString().substr(1,1) == 0 && urut.toString().substr(2,1)!=0){ // 201 304 405 506
					setTimeout(function() {
							document.getElementById('ratus').pause();
							document.getElementById('ratus').currentTime=0;
							document.getElementById('ratus').play();
						}, totalwaktu);
					totalwaktu=totalwaktu+1000;
					setTimeout(function() {
							document.getElementById('suarabel2').pause();
							document.getElementById('suarabel2').currentTime=0;
							document.getElementById('suarabel2').play();
						}, totalwaktu);
					totalwaktu=totalwaktu+1000;
				}else if(urut.toString().substr(1,1) != 0 && urut.toString().substr(2,1)==0){ //210 250 230
					if(urut.toString().substr(1,1) == 1){ //210
						setTimeout(function() {
							document.getElementById('ratus').pause();
							document.getElementById('ratus').currentTime=0;
							document.getElementById('ratus').play();
						}, totalwaktu);
						totalwaktu=totalwaktu+1000;
						setTimeout(function() {
							document.getElementById('sepuluh').pause();
							document.getElementById('sepuluh').currentTime=0;
							document.getElementById('sepuluh').play();
						}, totalwaktu);
						totalwaktu=totalwaktu+1000;
					}else{
						setTimeout(function() {
							document.getElementById('ratus').pause();
							document.getElementById('ratus').currentTime=0;
							document.getElementById('ratus').play();
						}, totalwaktu);
						totalwaktu=totalwaktu+1000;
						setTimeout(function() {
							document.getElementById('suarabel1').pause();
							document.getElementById('suarabel1').currentTime=0;
							document.getElementById('suarabel1').play();
						}, totalwaktu);
						totalwaktu=totalwaktu+1000;
						setTimeout(function() {
							document.getElementById('puluh').pause();
							document.getElementById('puluh').currentTime=0;
							document.getElementById('puluh').play();
						}, totalwaktu);
						totalwaktu=totalwaktu+1000;
					}
				}else if(urut.toString().substr(1,1) != 0 && urut.toString().substr(2,1)!=0){
					if (urut.toString().substr(1,1)==1) {
						if (urut.toString().substr(2,1)==1) { // 211 311 411 511
							setTimeout(function() {
									document.getElementById('ratus').pause();
									document.getElementById('ratus').currentTime=0;
									document.getElementById('ratus').play();
								}, totalwaktu);
							totalwaktu=totalwaktu+1000;
							setTimeout(function() {
									document.getElementById('sebelas').pause();
									document.getElementById('sebelas').currentTime=0;
									document.getElementById('sebelas').play();
								}, totalwaktu);
							totalwaktu=totalwaktu+1000;
						}else{ //212 215 219
							setTimeout(function() {
									document.getElementById('ratus').pause();
									document.getElementById('ratus').currentTime=0;
									document.getElementById('ratus').play();
								}, totalwaktu);
							totalwaktu=totalwaktu+1000;
							setTimeout(function() {
									document.getElementById('suarabel2').pause();
									document.getElementById('suarabel2').currentTime=0;
									document.getElementById('suarabel2').play();
								}, totalwaktu);
							totalwaktu=totalwaktu+1000;
							setTimeout(function() {
									document.getElementById('belas').pause();
									document.getElementById('belas').currentTime=0;
									document.getElementById('belas').play();
								}, totalwaktu);
							totalwaktu=totalwaktu+1000;
						}
					}else{
						setTimeout(function() {
								document.getElementById('ratus').pause();
								document.getElementById('ratus').currentTime=0;
								document.getElementById('ratus').play();
							}, totalwaktu);
						totalwaktu=totalwaktu+1000;
						setTimeout(function() {
								document.getElementById('suarabel1').pause();
								document.getElementById('suarabel1').currentTime=0;
								document.getElementById('suarabel1').play();
							}, totalwaktu);
						totalwaktu=totalwaktu+1000;
						setTimeout(function() {
								document.getElementById('puluh').pause();
								document.getElementById('puluh').currentTime=0;
								document.getElementById('puluh').play();
							}, totalwaktu);
						totalwaktu=totalwaktu+1000;
						if (urut%10!=0) {
							setTimeout(function() {
									document.getElementById('suarabel2').pause();
									document.getElementById('suarabel2').currentTime=0;
									document.getElementById('suarabel2').play();
								}, totalwaktu);
							totalwaktu=totalwaktu+1000;
						}
					}
				}

				setTimeout(function() {
						document.getElementById('loket').pause();
						document.getElementById('loket').currentTime=0;
						document.getElementById('loket').play();
					}, totalwaktu);
				totalwaktu=totalwaktu+1000;
				setTimeout(function() {
						document.getElementById('suarabelloket'+loket+'').pause();
						document.getElementById('suarabelloket'+loket+'').currentTime=0;
						document.getElementById('suarabelloket'+loket+'').play();
					}, totalwaktu);
				totalwaktu=totalwaktu+1000;
				setTimeout(function() {
						for (var i = 0 ; i < urut.toString().length; i++) {
							$("#suarabel"+i+"").remove();
						};
					}, totalwaktu);
				totalwaktu=totalwaktu+1000;
		}

		setTimeout(function(){
			document.getElementById('out').pause();
			document.getElementById('out').currentTime=0;
			document.getElementById('out').play();
		}, totalwaktu);
		totalwaktu=totalwaktu+1000;
		setTimeout(function() {
			$.post("../apps/monitoring-daemon-result.php", { id : urut }, function(data){
				if (!data.status) {
					console.log(data.status);		
				}
			}, 'json');
		}, totalwaktu);
		totalwaktu=totalwaktu+1000;
	}
	</script>