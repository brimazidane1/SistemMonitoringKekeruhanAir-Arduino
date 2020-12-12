<!DOCTYPE html>
<?php
// including database connection file 
include('koneksi.php');
include('kekeruhan_hulu_functions.php');
?>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>SiMo Sungai Siak | Kekeruhan Hulu</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <link rel="stylesheet" type="text/css" media="screen" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
        </li>

      </ul>

      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">
        <!-- Messages Dropdown Menu -->

        <li class="nav-item">
          <a class="nav-link">Sistem Monitoring Secara Real-Time Pencemaran Air Sungai Siak Pekanbaru Berbasis IoT</a>
        </li>
      </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="index3.html" class="brand-link">
        <img src="dist/img/AdminLTELogo1.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">SiMo Sungai Siak</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="dist/img/users.png" class="img-circle elevation-2" alt="User Image">
          </div>
          <div class="info">
            <a href="#" class="d-block">Administrator</a>
          </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item">
              <a href="index.php" class="nav-link">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                  Dashboard
                </p>
              </a>
            </li>

            <li class="nav-item has-treeview menu-open">
              <a href="#" class="nav-link active">
                <i class="nav-icon fas fa-water"></i>
                <p>
                  Kekeruhan
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="kekeruhan_hulu.php" class="nav-link active">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Kekeruhan Hulu</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="kekeruhan_hilir.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Kekeruhan Hilir</p>
                  </a>
                </li>
              </ul>
            </li>

            <li class="nav-item has-treeview">
              <a href="#" class="nav-link">
                <i class="nav-icon fab fa-acquisitions-incorporated"></i>
                <p>
                  Seng
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="seng_hulu.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Seng Hulu</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="seng_hilir.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Seng Hilir</p>
                  </a>
                </li>
              </ul>
            </li>

            <li class="nav-item has-treeview">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-radiation"></i>
                <p>
                  Timbal
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="timbal_hulu.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Timbal Hulu</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="timbal_hilir.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Timbal Hilir</p>
                  </a>
                </li>
              </ul>
            </li>

            <li class="nav-item has-treeview">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-ruler-horizontal"></i>
                <p>
                  Besi
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="besi_hulu.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Besi Hulu</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="besi_hilir.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Besi Hilir</p>
                  </a>
                </li>
              </ul>
            </li>
          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Kekeruhan Hulu</h1>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>

      <!-- Main content -->
      <!-- Main content -->
      <section class="content">

        <!-- Default box -->
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Data</h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                <i class="fas fa-minus"></i></button>
              <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                <i class="fas fa-times"></i></button>
            </div>
          </div>
          <div class="card-body">
            <center>
              <table>
                <tr>
                  <td>
                    <strong>Pilih Waktu:</strong>
                    <input type="datetime-local" id="custome_join_from" />

                  </td>
                  <td>
                    <strong>Sampai:</strong>
                    <input type="datetime-local" id="custome_join_to" />

                  </td>
                  <td>
                    <strong>Keterangan:</strong>
                    <?php $keterangan_arry = getKetList($connect);
                    if (!empty($keterangan_arry)) {
                    ?>
                      <select id="custome_keterangan">
                        <option value=''>Pilih Keterangan</option>
                        <?php foreach ($keterangan_arry as $keterangan) { ?>
                          <option value="<?php echo $keterangan['keterangan']; ?>"><?php echo $keterangan['keterangan']; ?></option>
                        <?php } ?>
                      </select>
                    <?php } ?>
                  </td>
                  <td>
                    <button id="cusomte_search">Cari</button>
                  </td>
                </tr>
              </table>
            </center>

            <table id="tkekeruhan_hulu" class="display" style="width:100%">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Tegangan</th>
                  <th>NTU</th>
                  <th>Keterangan</th>
                  <th>Waktu</th>
                </tr>
              </thead>
              <tbody>
              </tbody>
              <tfoot>
                <tr>
                  <th>#</th>
                  <th>Tegangan</th>
                  <th>NTU</th>
                  <th>Keterangan</th>
                  <th>Waktu</th>
                </tr>
              </tfoot>
            </table>

          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->

      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->


    <footer class="main-footer">
      <strong>Copyright &copy; 2020 <a href="https://techkuy.my.id/data_air/">SiMo Sungai Siak</a>.</strong>
      All rights reserved.
      <div class="float-right d-none d-sm-inline-block">
        <b>Version</b> 1.0.0
      </div>
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->

  <!-- jQuery -->
  <script src="plugins/jquery/jquery.min.js"></script>
  <!-- jQuery UI 1.11.4 -->
  <script src="plugins/jquery-ui/jquery-ui.min.js"></script>
  <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
  <script>
    $.widget.bridge('uibutton', $.ui.button)
  </script>
  <!-- Bootstrap 4 -->
  <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- ChartJS -->
  <script src="plugins/chart.js/Chart.min.js"></script>
  <!-- Sparkline -->
  <script src="plugins/sparklines/sparkline.js"></script>
  <!-- JQVMap -->
  <script src="plugins/jqvmap/jquery.vmap.min.js"></script>
  <script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
  <!-- jQuery Knob Chart -->
  <script src="plugins/jquery-knob/jquery.knob.min.js"></script>
  <!-- daterangepicker -->
  <script src="plugins/moment/moment.min.js"></script>
  <script src="plugins/daterangepicker/daterangepicker.js"></script>
  <!-- Tempusdominus Bootstrap 4 -->
  <script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
  <!-- Summernote -->
  <script src="plugins/summernote/summernote-bs4.min.js"></script>
  <!-- overlayScrollbars -->
  <script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
  <!-- AdminLTE App -->
  <script src="dist/js/adminlte.js"></script>
  <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
  <script src="dist/js/pages/dashboard.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="dist/js/demo.js"></script>

  <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>


  <script>
    $(document).ready(function() {
      var dataTable = $('#tkekeruhan_hulu').DataTable({
        processing: true,
        serverSide: true,
        ajax: {
          url: "kekeruhan_hulu2.php", // json datasource
          type: "post", // method  , by default get
          dataType: "json",
          data: function(data) {
            // Read values
            var from = $('#custome_join_from').val();
            var to = $('#custome_join_to').val();
            var keterangan = $('#custome_keterangan').val();

            // Append to data
            data.joinDateFrom = from;
            data.joinDateTo = to;
            data.keterangan = keterangan;
          },
          error: function() { // error handling
            $(".tkekeruhan_hulu-error").html("");
            $("#kekeruhan-grid").append('<tbody class="kekeruhan-grid-error"><tr><th colspan="3">No data found in the server</th></tr></tbody>');
            $("#tkekeruhan_hulu_processing").css("display", "none");
          }
        },
        // maped with result array from datatable  
        columns: [{
            "data": "id_kekeruhan"
          },
          {
            "data": "tegangan"
          },
          {
            "data": "ntu"
          },
          {
            "data": "keterangan"
          },
          {
            "data": "waktu"
          },
        ]
      });

      //reaload data table with filter fields
      $('#cusomte_search').click(function() {
        dataTable.draw();
      });
    });
  </script>
</body>

</html>