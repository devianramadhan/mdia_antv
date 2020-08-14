<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>PT. INTERMEDIA CAPITAL TBK.</title>
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">

<link rel="stylesheet" href="inc/mdia.css">

<meta name="viewport" content="width=device-width, initial-scale=1.0" />
    
<link href="masterslider/style/masterslider.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="masterslider/skins/metro/style.css" />
<script src="inc/jquery-1.11.2.min.js" type="text/javascript"></script>
<script src="masterslider/masterslider.js" type="text/javascript"></script>

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
<div id="wrapper">

		<div id="header">
      		<?php include("header-en.txt"); ?>
    	</div>
        
    	<!--slider-->
        <div id="banner_web">
            <div class="ms-gallery-template" id="ms-gallery">
				<!--1-->
                <div class="master-slider ms-fullheight ms-skin-metro" id="masterslider">
                	<div class="ms-slide">
                  <img src="masterslider/blank.gif" data-src="slider3/banner_mdia_home.jpg" alt=""/> 
                  <div class="ms-info">
                  </div>
                </div>
                 <!--2--> 
                <div class="ms-slide">
                  <img src="masterslider/blank.gif" data-src="slider3/new2.jpg" alt=""/> 
                  <div class="ms-info">
                  </div>
                </div>
				<!--3-->
                <div class="ms-slide">
                  <img src="masterslider/blank.gif" data-src="slider3/new6.jpg" alt=""/> 
                  <div class="ms-info">
                  </div>
                </div>
				<!--4-->
                <div class="ms-slide">
                  <img src="masterslider/blank.gif" data-src="slider3/new3.jpg" alt=""/> 
                  <div class="ms-info">
                  </div>
                </div>
				<!--5
                <div class="ms-slide">
                  <img src="masterslider/blank.gif" data-src="slider3/new7.jpg" alt=""/> 
                  <div class="ms-info">
                  </div>
                </div>
				
				<div class="ms-slide">
                  <img src="masterslider/blank.gif" data-src="slider3/new8-meet.jpg" alt=""/> 
                  <div class="ms-info">
                  </div>
                </div>-->
				
				<!--6-->
                <div class="ms-slide">
                  <img src="masterslider/blank.gif" data-src="slider3/new5.jpg" alt=""/> 
                  <div class="ms-info">
                  </div>
                </div>
                
				<!--7-->
                <div class="ms-slide">
                  <img src="masterslider/blank.gif" data-src="slider3/new1.jpg" alt=""/> 
                  <div class="ms-info">
                  </div>
                </div>
                
                </div>
            </div>
        
       	</div> 
    	<!--end-->
    
    <!--content-->
  <div id="content">
    	
        <div align="center">
        <div style="width:500px;"><h1  class="tag">PT INTERMEDIA CAPITAL Tbk.</h1></div>
        <p>&quot;To support the Indonesia national character building with the spirit of creativity and <br />
          innovation through entertaining and quality television programs for every family member in Indonesia&quot;</p>
        </div>
        <div align="center">
        	<img id="1" src="program/pesbukers.jpg" width="395" height="151" alt="Pesbukers" />
            <img id="2" src="program/CJL.jpg" width="395" height="151" alt="Cari Jodoh Lagi" />
            <img id="3" src="program/jwb.jpg" width="395" height="151" alt="Jodoh Wasiat Bapak" />
           <img id="4" src="program/Nakusha.jpg" width="395" height="151" alt="Nakusha" />
            <img id="5" src="program/SPN.jpg" width="395" height="151" alt="Selamat Pagi Nusantara" />
            <img id="6" src="program/swaragini.jpg" width="395" height="151" alt="Swaragini" />
        </div>
            
  </div>
   <!--end-->
   
    <div id="footer">
        <div id="footer-dom">
            <p class="copy">COPYRIGHT &COPY; <?PHP ECHO DATE('Y'); ?> PT. CAKRAWALA ANDALAS TELEVISI</p>
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
