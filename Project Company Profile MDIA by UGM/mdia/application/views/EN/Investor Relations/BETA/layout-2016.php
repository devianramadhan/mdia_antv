<!-- bagian ini merupakan hasil generate dari macromedia dreamweaver -->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

<!-- bagian ini untuk menampilkan icon website kecil disebelah alamat url -->
<link rel="Shortcut icon" href="images/favicon.jpg" type="image/x-icon" />

<!-- bagian ini untuk menampilkan title halaman website -->
<title>Tutorial pembelajaran website - computer technology </title>

<!-- bagian ini digunakan untuk memanggil script css yang berada pada folder style -->
<link rel="stylesheet" href="inc/layout.css" type="text/css" />
<link rel="stylesheet" href="style/slider.css" type="text/css" />

<!-- bagian ini digunakan untuk memanggil script javascript yang berada pada folder js -->
<script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="js/slider.min.jquery.js"></script>
<script type="text/javascript" src="js/javascript.js"></script>
</head>

<body>

<!--
bagian utama halaman website dengan lebar tertentu yang akan kita posisikan pada
posisi center browser.
-->
<div id="wrapper">
	
	<!-- membuat bagian header untuk penempatan logo dan lain - lain -->
	<div id="header">
		<div id="logo">
			<img src="images/theme/logo.png" border="0" align="absmiddle" />
		</div>
		<div id="share">
			<img src="images/theme/share.png" border="0" align="absmiddle" />
		</div>
	</div>
	
	<!-- membuat bagian untuk penempatan menu dan lain - lain -->
	<div id="top-menu">
		<div id="navigasi">
			<a href="#home">Home</a>
			<a href="http://media-kreatif.com" title="Situs pendidikan dan teknology">Media kreatif</a>
			<a href="http://media-kreatif.com/creativeclass">Pendidikan online</a>
			<a href="#home">Product</a>
			<a href="http://dynamic-307.media-kreatif.com" title="Live demo pendidikan kreatif">Demo product</a>
		</div>
	</div>
	
	<!-- membuat bagian untuk penempatan banner -->
	<div id="banner_web">
		<div class="slides_container" style="width:900px; height:250px;">
			<a href="#"><img src="images/theme/banner-1.jpg" width="900" height="250" /></a>
			<a href="#"><img src="images/theme/banner-2.jpg" width="900" height="250" /></a>
		</div>
	</div>
	
	<!--mem buat bagian untuk menampilkan content website -->
	<div id="content">
		<?php
            include("layout-2016=isi.html");
        ?>
	</div>
	
</div>
<!-- membuat bagian footer website untuk penempatan menu bawah dan tulisan copyright -->
<div id="footer">
	<div id="footer-dom">
		<p class="copy">copyright © 2012 - Media Kreatif</p>
	</div>
</div>

</body>
</html>