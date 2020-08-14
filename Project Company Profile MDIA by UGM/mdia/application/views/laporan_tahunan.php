<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>PT. INTERMEDIA CAPITAL TBK.</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />

<script src="<?=base_url()?>inc/jquery-1.11.2.min.js" type="text/javascript"></script>
<link rel="shortcut icon" href="<?=base_url()?>favicon.ico" type="image/x-icon">
<link rel="stylesheet" href="<?=base_url()?>inc/mdia2.css">
<link rel="stylesheet" href="<?=base_url()?>inc/responsive.css">
<link rel="stylesheet" type="text/css" href="<?=base_url()?>inc/popupmenu.css" />
<script type="text/javascript" src="<?=base_url()?>http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
<script type="text/javascript" src="<?=base_url()?>inc/popupmenu2.js"></script>

    <style>
    div.img {
      margin: 5px;
      border: 1px solid #ccc;
      float: left;
      width: 180px;
    }
    
    div.img:hover {
      border: 1px solid #777;
      background:#eee;
    }
    
    div.img img {
      width: 100%;
      height: auto;
    }
    
    div.desc {
      padding: 15px;
      text-align: center;
    }
    </style>
        
</head>
  
<body>
<div id="responsive1">
      <?php include("head.php"); ?>
    
      <?php
      foreach ($laptah->result_array() as $row) {
          $foto = $row['gambar']; 
            echo"<img src='".base_url()."asset/foto_banner/".$foto."'>";
        }
      ?>    
<div id="content">
<div id="isi">
        
    <div style="padding-bottom:25px;">
      <img src="<?=base_url()?>images/dot.jpg" width="17" height="14" align="left" style="padding-right:20px;padding-top:8px;"/>
      <?php
        foreach ($laptah->result_array() as $row) {
          echo "<h1 class='judul'> $row[judul_halaman]</h1>";
        }
      ?>
    </div>
        
    <div id="posting2">
          <?php
          foreach ($laptah2->result_array() as $row) {
            $foto = $row['gambar']; 
            echo "<div class='img'>";
            foreach ($ambildokumen->result_array() as $dok) {
              if($row['id_berita']==$dok['idberita']){
                $dokum = $dok['dokumen'];
                echo "<a href='".base_url()."asset/dokumen/$dokum'>";
              }
            }
            echo "<img src='".base_url()."asset/foto_berita/".$foto."' width='180' height='255'>";
            echo "</a>";
            echo "<div class='desc'>$row[judul_berita]</div>
            </div>";
          }
          ?>
     </div>
     
     
        
</div><!--end isi -->        
</div><!-- end content-->        
        
<div id="footer1">
    <div id="footer2">
        <div id="footer3">
            <p class="copy">COPYRIGHT &COPY; <?PHP ECHO DATE('Y'); ?> PT. CAKRAWALA ANDALAS TELEVISI
            </p>
        </div>
    </div>
</div>
                
</div>   
</body>
</html>