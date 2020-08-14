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
			color: #fff;
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
			max-height: inherit;  
		}
		</style>
        
        <style>
			.post-container {
				margin: 20px 20px 0 0;  
				border: 0px solid #333;
				overflow: auto
			}
			.post-thumb {
				float: left
			}
			.post-thumb img {
				display: block
			}
			.post-content {
				margin-left: 250px
			}
			.post-title {
				font-weight: bold;
				font-size: 200%;
				padding: 9px;
				/*background: #ccc*/
			}


		</style>

</head>
	
<body>
<div id="responsive1">
      <?php include("header-en.php"); ?>
    
    <div id="banner_web_in">
    	<?php
            foreach ($gambarpenghargaan_en->result_array() as $row) {
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
        foreach ($judulpenghargaan_en->result_array() as $row) {
            echo "<h1 class='judul'>$row[judul_halaman]</h1>"; 
        }
        ?>
	</div>
	
	
    <?php
          foreach ($pengser_en->result_array() as $row) {
            $tahun = $row['tahun'];
            echo "<button class='accordion'>List Year $tahun </button>";
            echo "<div class='panel'>";
            
            echo "<button class='accordion'>Awards</button>";
            echo "<div class='panel'>";
            foreach ($peng_en->result_array() as $row) {
                if ($row['tahun_berita'] == $tahun ){
                    $foto = $row['gambar'];

                    echo "<div class='post-container'>";
                    echo "<div class='post-thumb'><img src='".base_url()."asset/foto_berita/".$foto."' width='114' height='170'/></div>";
                    echo "<div class='post-content'>";
                    echo "<h4>$row[judul_penghargaan]</h4>";
                    echo "<p>$row[isi]</p></div>";
                    echo "</div> <hr />";
                }
            }
            echo "</div>";

            echo "<button class='accordion'>Certifications</button>";
            echo "<div class='panel'>";
           
            foreach ($ser_en->result_array() as $row) {
                if ($row['tahun_berita'] == $tahun ){
                    $foto = $row['gambar']; 
                    echo "<div class='post-container'>";
                    echo "<div class='post-thumb'><img src='".base_url()."asset/foto_berita/".$foto."' width='114' height='170'/></div>";
                    echo "<div class='post-content'>";
                    echo "<p>$row[isi]</p></div>"; 
                    echo "</div> <hr />"; 
                }
            }
            echo "</div>";

            echo "</div>";
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
		