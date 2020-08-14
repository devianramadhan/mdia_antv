<?php
// error_reporting (E_ALL ^ E_NOTICE);
// gallery settings
$itemsPerPage = '16';         // number of images per page    
$thumb_width  = '240';        // width of thumbnails
$thumb_height = '180';         // height of thumbnails
$src_folder   = '../CSR';             // current folder
$src_files    = scandir($src_folder); // files in current folder
$extensions   = array(".jpg",".png",".gif",".JPG",".PNG",".GIF"); // allowed extensions in photo gallery

// create thumbnails from images
function make_thumb($folder,$src,$dest,$thumb_width) {

	$source_image = imagecreatefromjpeg($folder.'/'.$src);
	$width = imagesx($source_image);
	$height = imagesy($source_image);
	
	$thumb_height = floor($height*($thumb_width/$width));
	
	$virtual_image = imagecreatetruecolor($thumb_width,$thumb_height);
	
	imagecopyresampled($virtual_image,$source_image,0,0,0,0,$thumb_width,$thumb_height,$width,$height);
	
	imagejpeg($virtual_image,$dest,100);
	
}

// display pagination
function print_pagination($numPages,$currentPage) {
     
   echo 'Page '. $currentPage .' of '. $numPages;
   
   if ($numPages > 1) {
      
	   echo '&nbsp;&nbsp;';
   
       if ($currentPage > 1) {
	       $prevPage = $currentPage - 1;
	       echo '<a href="'. $_SERVER['PHP_SELF'] .'?p='. $prevPage.'">&laquo;&laquo;</a>';
	   }	   
	   
	   for( $e=0; $e < $numPages; $e++ ) {
           $p = $e + 1;
       
	       if ($p == $currentPage) {	    
		       $class = 'current-paginate';
	       } else {
	           $class = 'paginate';
	       } 
	       

		       echo '<a class="'. $class .'" href="'. $_SERVER['PHP_SELF'] .'?p='. $p .'">'. $p .'</a>';
		  	  
	   }
	   
	   if ($currentPage != $numPages) {
           $nextPage = $currentPage + 1;	
		   echo '<a href="'. $_SERVER['PHP_SELF'] .'?p='. $nextPage.'">&raquo;&raquo;</a>';
	   }	  	 
   
   }

}
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>PT. INTERMEDIA CAPITAL TBK.</title>
<link href="../inc/antv_new.css" rel="stylesheet" type="text/css" />

	<link rel="stylesheet" href="css/lightbox.css" type="text/css" media="screen" />
	
	<script src="js/prototype.js" type="text/javascript"></script>
	<script src="js/scriptaculous.js?load=effects" type="text/javascript"></script>
	<script src="js/lightbox.js" type="text/javascript"></script>
    
<style type="text/css">
body {
/*background:#d9d9d9;*/
margin:0;
padding:0;
/*font:12px arial, Helvetica, sans-serif;
color:#222;*/
}

.gallery {
position:relative;
overflow:hidden;
width:auto;
margin:15px auto;
padding:50px;
background:#eee;
}

.gallery a:link,
.gallery a:active,
.gallery a:visited {
color:#555;
outline:0;
text-decoration:none;
}

.gallery a:hover {color:#fc0;} 

.gallery img {border:0;}
.gallery .float-left {float:left;}
.gallery .float-right {float:right;}
.gallery .clear {clear:both;}
.gallery .clearb10 {padding-bottom:10px;clear:both;}

.gallery .titlebar {
height:24px;
line-height:24px;
margin:0 5px;
}

.gallery .title {
font-size:18px;
font-weight:400;
}

.gallery .thumb {
overflow:hidden;
float:left;
width:240px;
height:180px;
margin:5px;
border:5px solid #fff;
}

.gallery .thumb:hover {
border:0;
width:250px;
height:190px;
}

/***** pagination style *****/
.gallery .paginate-wrapper {
padding:10px 0;
font-size:11px;
}

.gallery a.paginate {
color:#555;
padding:0;
margin:0 2px;
text-decoration:none;
}

.gallery a.current-paginate, 
.gallery a.paginate:hover {
color:#333;
font-weight:700;
padding:0;
margin:0 2px;
text-decoration:none;
}

.gallery a.paginate-arrow {
text-decoration:none;
border:0;
}
</style>
</head>
<body>


<div class="gallery">  
<?php 
$files = array();
foreach($src_files as $file) {
        
	$ext = strrchr($file, '.');
    if(in_array($ext, $extensions)) {
          
       array_push( $files, $file );
		  
		   
       if (!is_dir($src_folder.'/thumb')) {
          mkdir($src_folder.'/thumb');
          chmod($src_folder.'/thumb', 0777);
          //chown($src_folder.'/thumb', 'apache'); 
       }
		   
	   $thumb = $src_folder.'/thumb/'.$file;
       if (!file_exists($thumb)) {
          make_thumb($src_folder,$file,$thumb,$thumb_width); 
          
	   }
        
	}
      
}
 

if ( count($files) == 0 ) {

    echo 'There are no photos in this album!';
   
} else {
   
    $numPages = ceil( count($files) / $itemsPerPage );

    if(isset($_GET['p'])) {
      
       $currentPage = $_GET['p'];
       if($currentPage > $numPages) {
           $currentPage = $numPages;
       }

    } else {
       $currentPage=1;
    } 

    $start = ( $currentPage * $itemsPerPage ) - $itemsPerPage;

    for( $i=$start; $i<$start + $itemsPerPage; $i++ ) {
		  
	   if( isset($files[$i]) && is_file( $src_folder .'/'. $files[$i] ) ) { 
	   
	      echo '<div class="thumb">
	            <a href="'. $src_folder .'/'. $files[$i] .'" class="albumpix" rel="lightbox">
			       <img src="'. $src_folder .'/thumb/'. $files[$i] .'" width="'.$thumb_width.'" height="'.$thumb_height.'" alt="" />
				</a>  
			    </div>'; 
      
	    } else {
		  
		  if( isset($files[$i]) ) {
		    echo $files[$i];
		  }
		  
		}
     
    }
	   

     echo '<div class="clear"></div>';
  
     echo '<div class="p5-sides">
	         <div class="float-left">'.count($files).' images</div>
	 
	         <div class="float-right" class="paginate-wrapper">';
        	 
              print_pagination($numPages,$currentPage);
  
       echo '</div>
	 
	         <div class="clearb10">
		   </div>';

}
?>
  
</div>   

</body>
</html>