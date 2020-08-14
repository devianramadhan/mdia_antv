<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>PT. INTERMEDIA CAPITAL Tbk.</title>
		<link href="inc/mdia.css" rel="stylesheet" type="text/css" />
        <style>
		button.accordion {
			background-color: #eee;
			color: #444;
			cursor: pointer;
			padding: 18px;
			width: 100%;
			border: none;
			text-align: left;
			outline: none;
			font-size: 15px;
			transition: 0.4s;
		}
		
		button.accordion.active, button.accordion:hover {
			background-color: #cc0000;
			color:#fff;
		}
		
		button.accordion:after {
			content: '\02795';
			font-size: 12px;
			color: #777;
			float: right;
			margin-left: 5px;
		}
		
		button.accordion.active:after {
			content: "\2796";
		}
		
		div.panel {
			padding: 0 18px;
			background-color: white;
			max-height: 0;
			overflow: hidden;
			transition: 0.6s ease-in-out;
			opacity: 0;
		}
		
		div.panel.show {
			opacity: 1;
			max-height: 500px;  
		}
		</style>
        
</head>
	
<body>
<div id="wrapper">
    <div id="header">
      <?php include("header.txt"); ?>
    </div>
     
    <div id="banner_web_in">
    	<img src="images/banner_mdia_rups.jpg" />
    </div>
   
    
<div id="content">
<div id="isi">
        
    <div style="padding-bottom:25px;">
    	<img src="images/dot.jpg" width="17" height="14" align="left" style="padding-right:20px;padding-top:8px;"/>
        <h1 class="judul">RUPS</h1>
	</div>

    <button class="accordion">RUPS Tahunan dan RUPS Luarbiasa tahun 2016</button>
    <div class="panel">
      <p><a href="rups/Pengumuman RUPST 2016.pdf">Pengumuman RUPST dan RUPSLB</a></p>
      <p><a href="rups/Panggilan RUPST & RUPSLB IMC- Koran Investor Daily - 11 Agustus 2016 IMC.pdf">Pemanggilan RUPST dan RUPSLB</a></p>
    </div>
    
    <button class="accordion">RUPS Tahunan dan RUPS Luarbiasa tahun 2015</button>
    <div class="panel">
      <p><a href="rups/imc_rups.jpg">Pengumuman RUPST dan RUPSLB</a></p>
      <p><a href="rups/pemanggilan.jpg">Pemanggilan RUPST dan RUPSLB</a></p>
      <p><a href="rups/Tata Tertib-IMC_Rev_15 April 2015.pdf">Tata Tertib RUPS Tahunan dan RUPS Luar Biasa MDIA</a></p>
      <p><a href="rups/Extract_of_Minutes_of_AGMS_and_EGMS_MDIA_21April2015.pdf">Ringkasan Risalah RUPST dan RUPSLB 2015</a></p>
    </div>
    
    <button class="accordion">RUPS Tahunan 2014</button>
    <div id="foo" class="panel">
    	<p><a href="Rencana Penyelenggaraan RUPST_IMC_pdf.pdf">Pengumuman RUPST dan RUPSLB</a></p>
        <p><a href="Panggilan RUPST PT IMC Tbk_pdf.pdf">Pemanggilan RUPST dan RUPSLB</a></p>
        <p><a href="Pemberitahuan Hasil RUPST_IMC_pdf.pdf">Ringkasan Risalah RUPST dan RUPSLB</a></p>
    </div>
    
    <script>
    var acc = document.getElementsByClassName("accordion");
    var i;
    
    for (i = 0; i < acc.length; i++) {
        acc[i].onclick = function(){
            this.classList.toggle("active");
            this.nextElementSibling.classList.toggle("show");
      }
    }
    </script>
   
        
</div><!--end isi -->       
</div><!-- end content-->        
        
<div id="footer">
   <div id="footer-dom">
       <p class="copy">COPYRIGHT &COPY; <?PHP ECHO DATE('Y'); ?> PT. CAKRAWALA ANDALAS TELEVISI</p>
   </div>
</div> <!--end footer-->
                
</div>    
<script>
	var acc = document.getElementsByClassName("accordion");
	var i;
	
	for (i = 0; i < acc.length; i++) {
		acc[i].onclick = function(){
			this.classList.toggle("active");
			this.nextElementSibling.classList.toggle("show");
	  }
	}
	</script>
</body>
</html>