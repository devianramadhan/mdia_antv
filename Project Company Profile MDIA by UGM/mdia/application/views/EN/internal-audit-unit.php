<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>PT. INTERMEDIA CAPITAL TBK.</title>
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">

<link rel="stylesheet" href="inc/mdia2.css">
<link rel="stylesheet" href="inc/responsive.css">
<link rel="stylesheet" type="text/css" href="inc/popupmenu.css" />

<meta name="viewport" content="width=device-width, initial-scale=1.0" />
    
<link href="masterslider/style/masterslider.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="masterslider/skins/metro/style.css" />
<script src="inc/jquery-1.11.2.min.js" type="text/javascript"></script>
<script src="masterslider/masterslider.js" type="text/javascript"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
<script type="text/javascript" src="inc/popupmenu.js"></script>

<!--FIGURE -->
<link rel="stylesheet" href="inc/figurecaptions.css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/gsap/latest/TweenMax.min.js"></script>
<script src="inc/figurecaptions.js"></script>

<script>

$(function(){ // on DOM load
 $('#1').addCaption({
  fx: 'dualpanels',
  caption: 'PESBUKERS'
 })
 
 $('#2').addCaption({
  fx: 'dualpanels',
  caption: 'CARI JODOH LAGI'
 })
 
  $('#3').addCaption({
  fx: 'dualpanels',
  caption: 'JODOH WASIAT BAPAK'
 })
  $('#4').addCaption({
  fx: 'dualpanels',
  caption: 'NAKUSHA'
 })
   $('#5').addCaption({
  fx: 'dualpanels',
  caption: 'SELAMAT PAGI NUSANTARA'
 })
   $('#6').addCaption({
  fx: 'dualpanels',
  caption: 'SWARAGINI'
 })
})

</script>
        
</head>
	
<body>
<div id="responsive1">
      <?php include("header-en.php"); ?>
    
    <div id="banner_web_in">
    	<?php
            foreach ($gambarauditinternal_en->result_array() as $row) {
                $foto = $row['gambar'];
                echo "<img src='".base_url()."asset/foto_banner/".$foto."'>";
            }
        ?>
    </div>
    
<div id="content">
<div id="isi">
        
    <div style="padding-bottom:25px;">
    	<img src="images/dot.jpg" width="17" height="14" align="left" style="padding-right:20px;padding-top:8px;"/>
        <?php 
        foreach ($judulauditinternal_en->result_array() as $row) {
            echo "<h1 class='judul'>$row[judul_halaman]</h1>"; 
        }
        ?>
	</div>
    
   <?php 
            foreach ($isiauditinternal_en->result_array() as $row) {
                echo "$row[isi_halaman]"; 
            }
        ?>
    
</div><!--end isi -->        
</div><!-- end content-->        
        
<div id="footer1">
    <div id="footer2">
        <div id="footer3">
            <p class="copy">COPYRIGHT &COPY; <?PHP ECHO DATE('Y'); ?> PT. CAKRAWALA ANDALAS TELEVISI</p>
        </div>
    </div>
</div>
                
</div>   
</body>
</html>
		