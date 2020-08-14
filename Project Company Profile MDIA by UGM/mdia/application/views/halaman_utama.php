<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="https://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>PT. INTERMEDIA CAPITAL TBK.</title>

<!--slider-->
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link href="<?=base_url()?>masterslider/style/masterslider.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="<?=base_url()?>masterslider/skins/metro/style.css" />
<script src="<?=base_url()?>inc/jquery-1.11.2.min.js" type="text/javascript"></script>
<script src="<?=base_url()?>masterslider/masterslider.js" type="text/javascript"></script>

<!--header-->
<link rel="shortcut icon" href="<?=base_url()?>favicon.ico" type="image/x-icon">
<link rel="stylesheet" href="<?=base_url()?>inc/mdia2.css">
<link rel="stylesheet" href="<?=base_url()?>inc/responsive.css">
<link rel="stylesheet" type="text/css" href="<?=base_url()?>inc/popupmenu.css" />
<script type="text/javascript" src="<?=base_url()?>http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
<script type="text/javascript" src="<?=base_url()?>inc/popupmenu2.js"></script>


<!--FIGURE -->
<link rel="stylesheet" href="inc/figurecaptions2.css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/gsap/latest/TweenMax.min.js"></script>
<script src="inc/figurecaptions.js"></script>

<script>

$(function(){ // on DOM load
 $('#1').addCaption({
  fx: 'dualpanels',
  <?php 
  foreach ($program->result_array() as $row) {
    echo "caption:'$row[judul_gambar]'";
  }
  ?>
 })
  $('#2').addCaption({
  fx: 'dualpanels',
  <?php 
  foreach ($program2->result_array() as $row) {
    echo "caption:'$row[judul_gambar]'";
  }
  ?>
 })
  $('#3').addCaption({
  fx: 'dualpanels',
  <?php 
  foreach ($program3->result_array() as $row) {
    echo "caption:'$row[judul_gambar]'";
  }
  ?>
 })
  $('#4').addCaption({
  fx: 'dualpanels',
  <?php 
  foreach ($program4->result_array() as $row) {
    echo "caption:'$row[judul_gambar]'";
  }
  ?>
 })
   $('#5').addCaption({
  fx: 'dualpanels',
  <?php 
  foreach ($program5->result_array() as $row) {
    echo "caption:'$row[judul_gambar]'";
  }
  ?>
 })
   $('#6').addCaption({
  fx: 'dualpanels',
  <?php 
  foreach ($program6->result_array() as $row) {
    echo "caption:'$row[judul_gambar]'";
  }
  ?>
 })
   $('#7').addCaption({
  fx: 'dualpanels',
  <?php 
  foreach ($penghargaan1->result_array() as $row) {
    echo "caption:'$row[judul_penghargaan]'";
  }
  ?>
 })
   $('#8').addCaption({
  fx: 'dualpanels',
  <?php 
  foreach ($penghargaan2->result_array() as $row) {
    echo "caption:'$row[judul_penghargaan]'";
  }
  ?>
 })
   $('#9').addCaption({
  fx: 'dualpanels',
  <?php 
  foreach ($penghargaan3->result_array() as $row) {
    echo "caption:'$row[judul_penghargaan]'";
  }
  ?>
 })
})

</script>

<style>
.button {
    background-color: #4CAF50; /* Green */
    border: none;
    color: white;
    padding: 3px 3px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 10px;
    margin: 4px 3px 0px 0px;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
    cursor: pointer;
  float:right;
}
.button3 {
    background-color: white; 
    color: black; 
    border: 1px solid #cc0000;
}
.button3:hover {
    background-color: #cc0000;
    color: white;
}
.button3.kiri {
    margin-right: 0px !important;
}

.button2 {
    background-color: #cc0000; 
    color: white; 
    border: 1px solid #cc0000;
}

.button2.kiri {
    margin-right: 0px !important;
}


</style>  


</head>

<body>
<div id="responsive1">
      
<?php include("head.php"); ?>
<div id="responsive1">
      <div id="banner_web">
            <div class="ms-gallery-template" id="ms-gallery">
        <?php

              echo "<div class='master-slider ms-fullheight ms-skin-metro' id='masterslider'>";     
              foreach ($slide->result_array() as $row) {
                  if ($slide->result_array() != ''){ 
                    $foto = $row['gambar'];
                    echo "<div class='ms-slide'>";
                    echo "<img src='".base_url()."asset/img_slider/".$foto."'>";
                    echo "<div class='ms-info'></div>"; 
                    echo "</div>";
                  }
              }
              echo "</div>";  

              ?>
            </div>
       
        </div> 

     
    <!--content-->
  <div id="content">	
    <div align="center">
      <div style="padding-top:20px; padding-bottom: 8px;"><h1>PT INTERMEDIA CAPITAL Tbk.</h1>
        <hr width="45%" color="#B02A0D" size="1px">
      </div>
      &quot;Mendukung pengembangan karakter bangsa Indonesia dengan spirit kreativitas dan <br />
      inovasi dengan menyajikan program-program televisi yang menarik dan berkualitas kepada anggota keluarga Indonesia&quot;
    </div>

<?php
    echo "<div align='center'>
      <div style='padding-top:30px; padding-bottom: 20px;'><h1>Program Kami</h1>
        <hr width='45%' color='#B02A0D' size='1px'>
      </div>";

      foreach ($program->result_array() as $row) {
        if ($program->result_array() != ''){
        $foto = $row['gambar']; 
          echo"<img id='1' src='".base_url()."asset/img_galeri/".$foto."' height='151'/>";
        }
      }

      foreach ($program2->result_array() as $row) {
        if ($program2->result_array() != ''){
        $foto = $row['gambar']; 
          echo"<img id='2' src='".base_url()."asset/img_galeri/".$foto."' height='151'/>";
        }
      }

      foreach ($program3->result_array() as $row) {
        if ($program3->result_array() != ''){
        $foto = $row['gambar']; 
          echo"<img id='3' src='".base_url()."asset/img_galeri/".$foto."' height='151'/>";
        }
      }

      foreach ($program4->result_array() as $row) {
        if ($program4->result_array() != ''){
        $foto = $row['gambar']; 
          echo"<img id='4' src='".base_url()."asset/img_galeri/".$foto."' height='151'/>";
        }
      }

      foreach ($program5->result_array() as $row) {
        if ($program5->result_array() != ''){
        $foto = $row['gambar']; 
          echo"<img id='5' src='".base_url()."asset/img_galeri/".$foto."' height='151'/>";
        }
      }

      foreach ($program6->result_array() as $row) {
        if ($program6->result_array() != ''){
        $foto = $row['gambar']; 
          echo"<img id='6' src='".base_url()."asset/img_galeri/".$foto."' height='151'/>";
        }
      }
    echo "</div>";
  ?>

    <div align="center">
      <div style="padding-top:30px;padding-bottom: 20px; "><h1>Penghargaan & Sertifikasi</h1>
        <hr width="45%" color="#B02A0D" size="1px">
      </div>
          <?php 
            foreach ($penghargaan1->result_array() as $row) {
              if ($penghargaan1->result_array() != ''){
              $foto = $row['gambar']; 
                echo"<img id='7' src='".base_url()."asset/foto_berita/".$foto."' width='350' height='450' alt='kpid'>";
              }
            }

            foreach ($penghargaan2->result_array() as $row) {
              if ($penghargaan2->result_array() != ''){
              $foto = $row['gambar']; 
                echo"<img id='8' src='".base_url()."asset/foto_berita/".$foto."' width='350' height='450' alt='kpid'>";
              }
            }

            foreach ($penghargaan3->result_array() as $row) {
              if ($penghargaan3->result_array() != ''){
              $foto = $row['gambar']; 
                echo"<img id='9' src='".base_url()."asset/foto_berita/".$foto."' width='350' height='450' alt='kpid'>";
              }
            }
          ?>
      <p><a style="text-align: center; font-size: 16px;" href="<?php echo base_url('penghargaan_sertifikasi') ?>">Lihat Selengkapnya</a></p>
    </div>
  </div>
   <!--end-->
</div>


<div id="footer1">
    <div id="footer2">
        <div id="footer3">
            <p class="copy">COPYRIGHT &COPY; <?PHP ECHO DATE('Y'); ?> PT. CAKRAWALA ANDALAS TELEVISI</p>
        </div>
    </div>
</div>

		<script>
            var slider = new MasterSlider();
            slider.setup('masterslider' , {
                    width:1200,    // slider standard width
                    height:477,   // slider standard height
                    space:0,
                    autoplay:true,
                    loop:true
                });
            // adds Arrows navigation control to the slider.
            slider.control('arrows');
            slider.control('bullets' , {autohide:false, align:'bottom', margin:10});
        </script>
</div>
</body>
</html>
