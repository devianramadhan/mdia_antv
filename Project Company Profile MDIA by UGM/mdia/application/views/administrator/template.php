<?php $users = $this->model_users->users_edit($this->session->username)->row_array(); ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>WELCOME ADMINISTRATOR</title>
    <link rel="shortcut icon" href="../favicon.ico" type="image/x-icon">
    
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
    <style type="text/css"> .files{ position:absolute; z-index:2; top:0; left:0; filter: alpha(opacity=0);-ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=0)"; opacity:0; background-color:; color:transparent; } </style>
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
            <a style='color:#000' href='<?php echo base_url(); ?>administrator/berita'>

            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="info-box">
                <span class="info-box-icon bg-aqua"><i class="fa fa-book"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">Berita</span>
                  <?php $jmla = $this->model_berita->list_berita()->num_rows(); ?>
                  <span class="info-box-number"><?php echo $jmla; ?></span>
                </div><!-- /.info-box-content -->
              </div><!-- /.info-box -->
            </div><!-- /.col -->
            </a>

            <a style='color:#000' href='<?php echo base_url(); ?>administrator/dokumen'>
            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="info-box">
                <span class="info-box-icon bg-green"><i class="fa fa-file"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">Dokumen</span>
                  <?php $jmlb = $this->model_dokumen->list_dokumen()->num_rows(); ?>
                  <span class="info-box-number"><?php echo $jmlb; ?></span>
                </div><!-- /.info-box-content -->
              </div><!-- /.info-box -->
            </div><!-- /.col -->
            </a>

           <a style='color:#000' href='<?php echo base_url(); ?>administrator/slider'>
            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="info-box">
                <span class="info-box-icon bg-yellow"><i class="fa fa-files-o"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">Slider</span>
                  <?php $jmlc = $this->model_slider->slider()->num_rows(); ?>
                  <span class="info-box-number"><?php echo $jmlc; ?></span>
                </div><!-- /.info-box-content -->
              </div><!-- /.info-box -->
            </div><!-- /.col -->
            </a>

            <a style='color:#000' href='<?php echo base_url(); ?>administrator/manajemenuser'>
            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="info-box">
                <span class="info-box-icon bg-red"><i class="fa fa-users"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">Users</span>
                  <?php $jmld = $this->model_users->users()->num_rows(); ?>
                    <span class="info-box-number"><?php echo $jmld; ?></span>
                </div><!-- /.info-box-content -->
              </div><!-- /.info-box -->
            </div><!-- /.col -->
            </a>

   <section class="col-lg-12 connectedSortable">
     <div class='box' >
  <div class='box-header'>
    <h3 class='box-title'>Application Buttons</h3>
  </div>
  <div class='box-body'>
    <p>Silahkan klik menu pilihan yang berada di sebelah kiri untuk mengelola konten website anda 
        atau pilih ikon-ikon pada Control Panel di bawah ini : </p>
    
    <a href="<?php echo base_url(); ?>administrator/menuutama" class='btn btn-app'><i class='fa fa-th-large'></i> Menu</a>
    <a href="<?php echo base_url(); ?>administrator/submenu" class='btn btn-app'><i class='fa fa-th'></i> Submenu</a>
    <a href="<?php echo base_url(); ?>administrator/halamanbaru" class='btn btn-app'><i class='fa fa-file-text'></i> Halaman</a>
    <a href="<?php echo base_url(); ?>administrator/berita" class='btn btn-app'><i class='fa fa-television'></i> Berita</a>
    <a href="<?php echo base_url(); ?>administrator/kategoriberita" class='btn btn-app'><i class='fa fa-bars'></i> Kategori</a>
    <a href="<?php echo base_url(); ?>administrator/galeri" class='btn btn-app'><i class='fa fa-camera'></i> Media</a>
    <a href="<?php echo base_url(); ?>administrator/slider" class='btn btn-app'><i class='fa fa-file-image-o'></i> Slider</a>
    <a href="<?php echo base_url(); ?>administrator/manajemenuser" class='btn btn-app'><i class='fa fa-users'></i> Users</a>
    
  </div>
</div>
            </section><!-- /.Left col -->

            <section class="col-lg-5 connectedSortable">
                <script type="text/javascript" src="<?php echo base_url(); ?>asset/admin/plugins/jQuery/jquery.min.js"></script>
<script type="text/javascript">
    $(function () {
        $('#container').highcharts({
            data: {
                table: 'datatable'
            },
            chart: {
                type: 'column'
            },
            title: {
                text: ''
            },
            yAxis: {
                allowDecimals: false,
                title: {
                    text: ''
                }
            },
            tooltip: {
                formatter: function () {
                    return '<b>' + this.series.name + '</b><br/>' +
                        'Ada ' + this.point.y + ' Orang';
                }
            }
        });
    });
</script>



            </section><!-- right col -->
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
