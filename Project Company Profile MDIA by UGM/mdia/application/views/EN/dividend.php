<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>PT. INTERMEDIA CAPITAL TBK.</title>
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">

<link rel="stylesheet" href="<?=base_url()?>inc/mdia2.css">
<link rel="stylesheet" href="<?=base_url()?>inc/responsive.css">
<link rel="stylesheet" type="text/css" href="<?=base_url()?>inc/popupmenu.css" />

<meta name="viewport" content="width=device-width, initial-scale=1.0" />
    
<link href="<?=base_url()?>masterslider/style/masterslider.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="<?=base_url()?>masterslider/skins/metro/style.css" />
<script src="<?=base_url()?>inc/jquery-1.11.2.min.js" type="text/javascript"></script>
<script src="<?=base_url()?>masterslider/masterslider.js" type="text/javascript"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
<script type="text/javascript" src="<?=base_url()?>inc/popupmenu.js"></script>

<!--FIGURE -->
<link rel="stylesheet" href="<?=base_url()?>inc/figurecaptions.css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/gsap/latest/TweenMax.min.js"></script>
<script src="<?=base_url()?>inc/figurecaptions.js"></script>

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
        <style>
    table {
      border-collapse: collapse;
      width: 100%;
    }
    
    th, td {
      text-align: left;
      padding: 8px;
    }
    
    tr:nth-child(even){background-color: #f2f2f2}
    
    th {
      background-color: #cc0000;
      color: white;
    }
    </style>
        
</head>
  
<body>
<div id="responsive1">
      <?php include("header-en.php"); ?>
    
    <div id="banner_web_in">
      <?php
            foreach ($gambardividen->result_array() as $row) {
                $foto = $row['gambar'];
                echo "<img src='".base_url()."asset/foto_banner/".$foto."'>";
            }
        ?>
    </div>
    
<div id="content">
<div id="isi">
        
    <div style="padding-bottom:25px;">
      <img src="<?=base_url()?>images/dot.jpg" width="17" height="14" align="left" style="padding-right:20px;padding-top:8px;"/>
        <?php 
        foreach ($juduldividen->result_array() as $row) {
            echo "<h1 class='judul'>$row[judul_halaman]</h1>"; 
        }
        ?>
  </div>
    
    <table>
      <tr>
        <th></th>
        <?php 
        foreach ($tahundividen->result_array() as $row) {
            echo " <th>$row[tahun]</th>"; 
        }
        ?>
      </tr>
      <tr>
        <td>Total dividend distributed</td>
        <?php 
        foreach ($datadividen->result_array() as $row) {
            echo "<td>$row[total_dividen]</td>"; 
        }
        ?>
      </tr>
      <tr>
        <td>Cash dividend per share</td>
        <?php 
        foreach ($datadividen->result_array() as $row) {
            echo "<td>$row[jml_dividen]</td>"; 
        }
        ?>
      </tr>
      <tr>
        <td>Payout ratio</td>
        <?php 
        foreach ($datadividen->result_array() as $row) {
            echo "<td>$row[payout]</td>"; 
        }
        ?>
      </tr>
      <tr>
        <td>Date of announcement</td>
        <?php 
        foreach ($datadividen->result_array() as $row) {
            echo "<td>$row[tgl_pengumuman]</td>"; 
        }
        ?>
    </tr>
    <tr>
        <td>Date of dividend distribution</td>
        <?php 
        foreach ($datadividen->result_array() as $row) {
            echo "<td>$row[tgl_pembagian]</td>"; 
        }
        ?>
    </tr>
    </table>
        
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