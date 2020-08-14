

<div id="share">
          <a href="<?php echo base_url('en_home'); ?>"><button class="button button3">EN</button></a>
          <a href="#"><button class="button button2 kiri">ID</button></a>
      </div>

  <div id="top-menu">
      <img style="padding-left: 33px; padding-top: 20px;" src="<?=base_url()?>images/header-logo.png" >

    <div id="navigasi">
            <?php
              foreach ($head->result_array() as $row) {
                $id = $row['id_main'];
                if($row['link'] != ''){
                  echo "<a href='$row[link]'>$row[nama_menu]</a>";
                }else{
                  echo "<a href='#' data-popupmenu='$row[id_main]'>$row[nama_menu]</a>";
                  echo "<ul id='$id' class='jqpopupmenu'>";
                  foreach ($submenu1->result_array() as $sub){
                    if($sub['id_main']==$id){
                      $ids=$sub['id_sub'];
                      if($sub['link_sub'] != ''){
                        echo "<li><a href='$sub[link_sub]'>$sub[nama_sub]</a></li>";
                      }else{
                        echo "<li><a href='#'>$sub[nama_sub]</a>";
                        echo "<ul>";
                        foreach ($subsubmenu->result_array() as $row) {
                          if($ids==$row['idsub']){
                            if($row['link_subsub']!=''){
                              echo "<li><a href='$row[link_subsub]'>$row[nama_subsub]</a></li>";
                            } 
                            else{
                              foreach ($dokumen->result_array() as $dok) {
                                if($row['nama_subsub']==$dok['judul_dokumen']){
                                  $dokum = $dok['dokumen'];
                                  echo "<li><a href='".base_url()."asset/dokumen/$dokum'>$row[nama_subsub]</a></li>";
                                }
                              }
                            }
                          }
                        }
                      echo "</ul>";
                      echo "</li>";
                      }
                    }      
                  }
                }
                echo "</ul>";
            }
            ?>
    </div> 
  </div>