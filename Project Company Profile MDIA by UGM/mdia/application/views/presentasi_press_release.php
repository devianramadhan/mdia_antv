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
      <?php include("head.php"); ?>
    
    
    <div id="banner_web_in">
      <?php
            foreach ($gambarpers->result_array() as $row) {
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
        foreach ($judulpers->result_array() as $row) {
            echo "<h1 class='judul'>$row[judul_halaman]</h1>"; 
        }
        ?>
  </div>
    
    <table>
      <tr>
        <th width="20%";>Tanggal</th>
        <th width="70%";>Deskripsi</th>
        <th width="10%";>File</th>
      </tr>
      <?php 
        foreach ($judulberitapers->result_array() as $row) {
          echo "<tr>";
          echo "<td>$row[judul_berita]</td>";
          echo "<td>$row[isi_berita]</td>";

          echo "<td>";
          foreach ($ambildokumen->result_array() as $dok) {
              if($row['id_berita']==$dok['idberita']){
                $dokum = $dok['dokumen'];
                echo "<a href='".base_url()."asset/dokumen/$dokum'>";
              }
            }
            echo "<img src='".base_url()."images/pdficon.png"."' width='50px' height='50px' align='center'/></a></td>";
          echo "</tr>";
        }
        ?>
    </table>
        
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