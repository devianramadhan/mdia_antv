<?php $users = $this->model_users->users_edit($this->session->username)->row_array(); ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>WELCOME ADMINISTRATOR</title>
    <link rel="shortcut icon" href="../../favicon.ico" type="image/x-icon">
    
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>asset/admin/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>asset/admin/plugins/datatables/dataTables.bootstrap.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>asset/admin/dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>asset/admin/dist/css/skins/_all-skins.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>asset/admin/plugins/iCheck/flat/blue.css">
    <!-- Morris chart -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>asset/admin/plugins/morris/morris.css">
    <!-- jvectormap -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>asset/admin/plugins/jvectormap/jquery-jvectormap-1.2.2.css">
    <!-- Date Picker -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>asset/admin/plugins/datepicker/datepicker3.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>asset/admin/plugins/daterangepicker/daterangepicker-bs3.css">
    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>asset/admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
    <style type="text/css"> .files{ position:absolute; z-index:2; top:0; left:0; filter: alpha(opacity=0);-ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=0)"; opacity:0; background-color:transparent; color:transparent; } </style>
    <script type="text/javascript" src="<?php echo base_url(); ?>asset/admin/plugins/jQuery/jquery-1.12.3.min.js"></script>
    <script language="javascript" type="text/javascript"> 
      var maxAmount = 160;
      function textCounter(textField, showCountField) {
        if (textField.value.length > maxAmount) {
          textField.value = textField.value.substring(0, maxAmount);
        }else{ 
          showCountField.value = maxAmount - textField.value.length;
        }
      }
    </script>
    <script src="<?php echo base_url(); ?>asset/ckeditor/ckeditor.js"></script>
    <style type="text/css">
      .checkbox-scroll { border:1px solid #ccc; width:100%; height: 114px; padding-left:8px; overflow-y: scroll; }
    </style>
  </head>

  <body class="hold-transition skin-red sidebar-mini">
    <div class="wrapper">
      <header class="main-header">
          <style type="text/css">
  .sekolah{
    float: left;
    background-color: transparent;
    background-image: none;
    padding: 15px 15px;
    font-family: fontAwesome;
    color:#fff;
  }

  .sekolah:hover{
    color:#fff;
  }
</style>
        <!-- Logo -->
        <a href="home" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><img width="35px" height="35px" src="<?=base_url()?>images/header-logo.png" ></span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><img width="35px" height="35px" src="<?=base_url()?>images/header-logo.png" ><b> CMS MDIA</b></span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>

          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              
              <li>
                <a target='_BLANK' href="<?php echo base_url(); ?>"><i class="glyphicon glyphicon-new-window"></i></a>
              </li>

            </ul>
          </div>
        </nav>      
      </header>

      <aside class="main-sidebar">
          <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
            <div class="pull-left image">
              <img src="<?php echo base_url(); ?>asset/admin/dist/img/users.gif" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
              <p><?php echo $users['nama_lengkap']; ?></p>
              <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
          </div>

          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header" style='color:#fff; text-transform:uppercase; border-bottom:2px solid #ff4444'>MENU PENGGUNA</li>
            <li><a href="<?php echo base_url(); ?>administrator/home"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
            
            <?php
                if ($this->session->level == 'admin'){
                    $main = $this->model_menu->mainmenu_admin();
                    foreach ($main->result_array() as $row) {
                      if ($this->model_menu->submenu_admin($row['id_main'])->num_rows() == 0){
                        echo "<li><a href='".base_url()."$row[link]'><i class='glyphicon glyphicon-th-large'></i> <span>$row[nama_menu]</span></a></li>";
                      }else{
                        echo "<li class='treeview'>
                                <a href='".base_url()."$row[link]'><i class='glyphicon glyphicon-th-list'></i> <span>$row[nama_menu]</span><i class='fa fa-angle-left pull-right'></i></a>
                                 <ul class='treeview-menu'>";
                                    $sub = $this->model_menu->submenu_admin($row['id_main']);
                                    foreach ($sub->result_array() as $rows){
                                      echo "<li><a href='".base_url()."$rows[link_sub]'><i class='fa fa-circle-o'></i> $rows[nama_sub]</a></li>";
                                    }
                                echo "</ul>
                              </li>";
                      }
                    }
                }else{
                    $mainuser = $this->model_menu->mainmenu_user();
                    foreach ($mainuser->result_array() as $row) {
                      // echo "<li><a href='".base_url()."$row[link]'><i class='fa fa-circle-o'></i> <span>$row[nama_modul]</span></a></li>";
                      if ($this->model_menu->submenu_user($row['id_main'])->num_rows() == 0){
                        echo "<li><a href='".base_url()."$row[link]'><i class='glyphicon glyphicon-th-large'></i> <span>$row[nama_menu]</span></a></li>";
                      }else{
                        echo "<li class='treeview'>
                                <a href='".base_url()."$row[link]'><i class='glyphicon glyphicon-th-list'></i> <span>$row[nama_menu]</span><i class='fa fa-angle-left pull-right'></i></a>
                                 <ul class='treeview-menu'>";
                                    $sub = $this->model_menu->submenu_user($row['id_main']);
                                    foreach ($sub->result_array() as $rows){
                                      echo "<li><a href='".base_url()."$rows[link_sub]'><i class='fa fa-circle-o'></i> $rows[nama_sub]</a></li>";
                                    }
                                echo "</ul>
                              </li>";
                      }
                    }
                }
            ?>


            <li><a href="<?php echo base_url(); ?>administrator/logout"><i class="fa fa-power-off"></i> <span>Logout</span></a></li>
          </ul>
        </section>      
      </aside>

      <div class="content-wrapper">
        <section class="content-header">
          <h1> Dashboard <small>Control panel </small> </h1>
        </section>

        <section class="content">
            <?php 
            echo "<div class='col-md-12'>
              <div class='box box-danger'>
                <div class='box-header with-border'>
                  <h3 class='box-title'>Edit RUPS Terpilih</h3>
                  <br>
                        <p style='color:red'>Indonesia</p>
                </div>
              <div class='box-body'>";
              $attributes = array('class'=>'form-horizontal','role'=>'form');
              echo form_open_multipart('administrator/edit_berita_rups',$attributes); 
              echo "<div class='col-md-12'>
                  <table class='table table-condensed table-bordered'>
                  <tbody>
                    <input type='hidden' name='id' value='$brt[id]'>

                    <tr><th width='120px' scope='row'>ID Judul</th>
                    <td><select name='b' class='form-control' required>
                      <option value='' selected>- Pilih ID Judul -</option>";
                      foreach ($jdl->result_array() as $row){
                        echo "<option value='$row[id_judul]'>$row[judul]</option>";
                      }
                    echo "</td></tr>
                    
                    <tr><th scope='row'>Keterangan</th>             
                    <td><textarea class='form-control' name='c' style='height:320px' required>$brt[berita_rups]</textarea></td></tr>

                    <tr><th scope='row'>Ganti Dokumen</th>                 
                    <td><input type='file' class='form-control' name='d'>";
                      if ($brt['dokumen'] != ''){ echo "<i style='color:red'>Lihat Dokumen Saat ini : </i><a target='_BLANK' href='".base_url()."asset/dokumen/$brt[dokumen]'>$brt[dokumen]</a>"; } echo "</td></tr>
                    
                  </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>

              <div class='col-md-12'>
              <div class='box box-danger'>
                <div class='box-header with-border'>
                  <h3 class='box-title'>Edit Selected General Meeting of Shareholders</h3>
                  <br>
                        <p style='color:red'>English</p>
                </div>
              <div class='box-body'>";
              $attributes = array('class'=>'form-horizontal','role'=>'form');
              echo form_open_multipart('administrator/edit_berita_rups',$attributes); 
              echo "<div class='col-md-12'>
                  <table class='table table-condensed table-bordered'>
                  <tbody>
                    <input type='hidden' name='id' value='$brt_en[id]'>

                    <tr><th width='120px' scope='row'>Title ID</th>
                    <td><select name='e' class='form-control' required>
                      <option value='' selected>- Select Title ID -</option>";
                      foreach ($jdl_en->result_array() as $row){
                        echo "<option value='$row[id_judul]'>$row[judul]</option>";
                      }
                    echo "</td></tr>
                    
                    <tr><th scope='row'>Remark</th>             
                    <td><textarea class='form-control' name='f' style='height:320px' required>$brt_en[berita_rups]</textarea></td></tr>

                    <tr><th scope='row'>Change Document</th>                 
                    <td><input type='file' class='form-control' name='g'>";
                      if ($brt_en['dokumen'] != ''){ echo "<i style='color:red'>View current document : </i><a target='_BLANK' href='".base_url()."asset/dokumen/$brt_en[dokumen]'>$brt[dokumen]</a>"; } echo "</td></tr>
                    
                  </tbody>
                  </table>
                </div>
              </div>
            </div>

            <div class='box-footer'>
                    <button type='submit' name='submit' class='btn btn-danger'>Update</button>
                    <a href='../berita_rups'><button type='button' class='btn btn-default pull-right'>Cancel</button></a>
            </div>
            </div>"; ?>
        </section>
        <div style='clear:both'></div>
      </div><!-- /.content-wrapper -->
      <footer class="main-footer">
          <strong>Copyright &copy; 2018 <a target='_BLANK' href="home"> CMS MDIA Codeigniter</a>.</strong> All rights reserved.      
      </footer>
    </div><!-- ./wrapper -->
    <!-- jQuery 2.1.4 -->
    <script src="<?php echo base_url(); ?>asset/admin/plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
      $.widget.bridge('uibutton', $.ui.button);
    </script>
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/modules/data.js"></script>
    <script src="https://code.highcharts.com/modules/exporting.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="<?php echo base_url(); ?>asset/admin/bootstrap/js/bootstrap.min.js"></script>
    <!-- DataTables -->
    <script src="<?php echo base_url(); ?>asset/admin/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url(); ?>asset/admin/plugins/datatables/dataTables.bootstrap.min.js"></script>
    <!-- Morris.js charts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="<?php echo base_url(); ?>asset/admin/plugins/morris/morris.min.js"></script>
    <!-- Sparkline -->
    <script src="<?php echo base_url(); ?>asset/admin/plugins/sparkline/jquery.sparkline.min.js"></script>
    <!-- jvectormap -->
    <script src="<?php echo base_url(); ?>asset/admin/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="<?php echo base_url(); ?>asset/admin/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="<?php echo base_url(); ?>asset/admin/plugins/knob/jquery.knob.js"></script>
    <!-- daterangepicker -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js"></script>
    <script src="<?php echo base_url(); ?>asset/admin/plugins/daterangepicker/daterangepicker.js"></script>
    <!-- datepicker -->
    <script src="plugins/datepicker/bootstrap-datepicker.js"></script>

    <!-- Bootstrap WYSIHTML5 -->
    <script src="<?php echo base_url(); ?>asset/admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
    <!-- Slimscroll -->
    <script src="<?php echo base_url(); ?>asset/admin/plugins/slimScroll/jquery.slimscroll.min.js"></script>
    <!-- FastClick -->
    <script src="<?php echo base_url(); ?>asset/admin/plugins/fastclick/fastclick.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?php echo base_url(); ?>asset/admin/dist/js/app.min.js"></script>

    <script>
    $('#rangepicker').daterangepicker();
      $(function () { 
        $("#example1").DataTable();
        $('#example2').DataTable({
          "paging": true,
          "lengthChange": false,
          "searching": false,
          "ordering": true,
          "info": true,
          "autoWidth": false
        });
      });
    </script>
<script>
  $(function () {
    $(".textarea").wysihtml5();
  });

  CKEDITOR.replace('editor1' ,{
    filebrowserImageBrowseUrl : '<?php echo base_url(); ?>asset/kcfinder'
  });
</script>
  </body>
</html>
