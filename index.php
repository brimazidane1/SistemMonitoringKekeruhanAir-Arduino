<!DOCTYPE html>

<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>SiMo Sungai Siak | Dashboard</title>
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
              <a href="index.php" class="nav-link active">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                  Dashboard
                </p>
              </a>
            </li>

            <li class="nav-item has-treeview">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-water"></i>
                <p>
                  Kekeruhan
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="kekeruhan_hulu.php" class="nav-link">
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
              <h1>Dashboard</h1>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>

      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-6">
              <!-- AREA CHART -->
              <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">Kekeruhan Hulu</h3>

                  <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
                  </div>
                </div>
                <div class="card-body">
                  <div class="chart">
                    <div id="kekeruhan_hulu_chart" style="width: auto; height: 500px"></div>
                  </div>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->

              <!-- DONUT CHART -->
              <div class="card card-danger">
                <div class="card-header">
                  <h3 class="card-title">Seng Hulu</h3>

                  <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
                  </div>
                </div>
                <div class="card-body">
                  <div id="seng_hulu_chart" style="width: auto; height: 500px"></div>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->

              <!-- PIE CHART -->
              <div class="card card-danger">
                <div class="card-header">
                  <h3 class="card-title">Timbal Hulu</h3>

                  <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
                  </div>
                </div>
                <div class="card-body">
                  <div id="timbal_hulu_chart" style="width: auto; height: 500px"></div>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->

              <!-- AREA CHART -->
              <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">Besi Hulu</h3>

                  <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
                  </div>
                </div>
                <div class="card-body">
                  <div class="chart">
                    <div id="besi_hulu_chart" style="width: auto; height: 500px"></div>
                  </div>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->

            </div>
            <!-- /.col (LEFT) -->
            <div class="col-md-6">
              <!-- LINE CHART -->
              <div class="card card-info">
                <div class="card-header">
                  <h3 class="card-title">Kekeruhan Hilir</h3>

                  <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
                  </div>
                </div>
                <div class="card-body">
                  <div class="chart">
                    <div id="kekeruhan_hilir_chart" style="width: auto; height: 500px"></div>
                  </div>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->

              <!-- BAR CHART -->
              <div class="card card-success">
                <div class="card-header">
                  <h3 class="card-title">Seng Hilir</h3>

                  <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
                  </div>
                </div>
                <div class="card-body">
                  <div class="chart">
                    <div id="seng_hilir_chart" style="width: auto; height: 500px"></div>
                  </div>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->

              <!-- STACKED BAR CHART -->
              <div class="card card-success">
                <div class="card-header">
                  <h3 class="card-title">Timbal Hilir</h3>

                  <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
                  </div>
                </div>
                <div class="card-body">
                  <div class="chart">
                    <div id="timbal_hilir_chart" style="width: auto; height: 500px"></div>
                  </div>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->

              <!-- LINE CHART -->
              <div class="card card-info">
                <div class="card-header">
                  <h3 class="card-title">Besi Hilir</h3>

                  <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
                  </div>
                </div>
                <div class="card-body">
                  <div class="chart">
                    <div id="besi_hilir_chart" style="width: auto; height: 500px"></div>
                  </div>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->

            </div>
            <!-- /.col (RIGHT) -->
          </div>
          <!-- /.row -->
        </div><!-- /.container-fluid -->
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

  <!-- chart -->
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  <script type="text/javascript">
    google.charts.load('current', {
      'packages': ['corechart']
    });
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {
      var data = google.visualization.arrayToDataTable([
        ['Waktu', 'Normal', 'Tegangan', 'NTU', ],

        //PHP Code 
        <?php

        include('koneksi.php');
        $waktu = date("Y-m");
        $query = "SELECT * FROM kekeruhan_hulu WHERE waktu LIKE '$waktu%'";
        $res = mysqli_query($connect, $query);
        while ($data = mysqli_fetch_array($res)) {
          $waktu = $data['waktu'];
          $standar = 50;
          $tegangan = $data['tegangan'];
          $ntu = $data['ntu'];
        ?>[
            '<?php echo $waktu; ?>',
            <?php echo $standar; ?>,
            <?php echo $tegangan; ?>,
            <?php echo $ntu; ?>
          ],
        <?php
        }

        ?>

      ]);

      var options = {
        title: 'Kekeruhan Hulu',
        hAxis: {
          format: 'M/d/yy',

        },
        curveType: 'function',
        legend: {
          position: 'top'
        },
        series: {
          0: {
            color: 'green'
          },
          1: {
            color: 'orange'
          },
          2: {
            color: 'red'
          }
        }

      };

      var chart = new google.visualization.LineChart(document.getElementById('kekeruhan_hulu_chart'));

      chart.draw(data, options);
    }
  </script>

  <script type="text/javascript">
    google.charts.load('current', {
      'packages': ['corechart']
    });
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {
      var data = google.visualization.arrayToDataTable([
        ['Waktu', 'Normal', 'Tegangan', 'NTU', ],

        //PHP Code 
        <?php

        include('koneksi.php');
        $waktu = date("Y-m");
        $query = "SELECT * FROM kekeruhan_hilir WHERE waktu LIKE '$waktu%'";
        $res = mysqli_query($connect, $query);
        while ($data = mysqli_fetch_array($res)) {
          $waktu = $data['waktu'];
          $standar = 50;
          $tegangan = $data['tegangan'];
          $ntu = $data['ntu'];
        ?>[
            '<?php echo $waktu; ?>',
            <?php echo $standar; ?>,
            <?php echo $tegangan; ?>,
            <?php echo $ntu; ?>
          ],
        <?php
        }

        ?>

      ]);

      var options = {
        title: 'Kekeruhan Hilir',
        hAxis: {
          format: 'M/d/yy',

        },
        curveType: 'function',
        legend: {
          position: 'top'
        },
        series: {
          0: {
            color: 'green'
          },
          1: {
            color: 'orange'
          },
          2: {
            color: 'red'
          }
        }

      };

      var chart = new google.visualization.LineChart(document.getElementById('kekeruhan_hilir_chart'));

      chart.draw(data, options);
    }
  </script>

  <script type="text/javascript">
    google.charts.load('current', {
      'packages': ['corechart']
    });
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {
      var data = google.visualization.arrayToDataTable([
        ['Waktu', 'Normal', 'PPM', 'ABS'],

        //PHP Code 
        <?php

        include('koneksi.php');
        $waktu = date("Y-m");
        $query = "SELECT * FROM seng_hulu WHERE waktu LIKE '$waktu%'";
        $res = mysqli_query($connect, $query);
        while ($data = mysqli_fetch_array($res)) {
          $waktu = $data['waktu'];
          $standar = 0.005;
          $ppm = $data['ppm'];
          $abs = $data['abs'];
        ?>[
            '<?php echo $waktu; ?>',
            <?php echo $standar; ?>,
            <?php echo $ppm; ?>,
            <?php echo $abs; ?>],
        <?php
        }

        ?>

      ]);

      var options = {
        title: 'Seng Hulu',
        hAxis: {
          format: 'M/d/yy',

        },
        curveType: 'function',
        explorer: {
          axis: 'horizontal',
          keepInBounds: true
        },
        legend: {
          position: 'top'
        },
        series: {
          0: {
            color: 'green'
          },
          1: {
            color: 'red'
          },
          2: {
            color: 'orange'
          }
        }

      };

      var chart = new google.visualization.LineChart(document.getElementById('seng_hulu_chart'));

      chart.draw(data, options);
    }
  </script>

  <script type="text/javascript">
    google.charts.load('current', {
      'packages': ['corechart']
    });
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {
      var data = google.visualization.arrayToDataTable([
        ['Waktu', 'Normal', 'PPM', 'ABS'],

        //PHP Code 
        <?php

        include('koneksi.php');
        $waktu = date("Y-m");
        $query = "SELECT * FROM seng_hilir WHERE waktu LIKE '$waktu%'";
        $res = mysqli_query($connect, $query);
        while ($data = mysqli_fetch_array($res)) {
          $waktu = $data['waktu'];
          $standar = 0.005;
          $ppm = $data['ppm'];
          $abs = $data['abs'];
        ?>[
            '<?php echo $waktu; ?>',
            <?php echo $standar; ?>,
            <?php echo $ppm; ?>,
            <?php echo $abs; ?>],
        <?php
        }

        ?>

      ]);

      var options = {
        title: 'Seng Hilir',
        hAxis: {
          format: 'M/d/yy',

        },
        curveType: 'function',
        explorer: {
          axis: 'horizontal',
          keepInBounds: true
        },
        legend: {
          position: 'top'
        },
        series: {
          0: {
            color: 'green'
          },
          1: {
            color: 'red'
          },
          2: {
            color: 'orange'
          }
        }

      };

      var chart = new google.visualization.LineChart(document.getElementById('seng_hilir_chart'));

      chart.draw(data, options);
    }
  </script>

  <script type="text/javascript">
    google.charts.load('current', {
      'packages': ['corechart']
    });
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {
      var data = google.visualization.arrayToDataTable([
        ['Waktu', 'Normal', 'PPM', 'ABS'],

        //PHP Code 
        <?php

        include('koneksi.php');
        $waktu = date("Y-m");
        $query = "SELECT * FROM timbal_hulu WHERE waktu LIKE '$waktu%'";
        $res = mysqli_query($connect, $query);
        while ($data = mysqli_fetch_array($res)) {
          $waktu = $data['waktu'];
          $standar = 0.005;
          $ppm = $data['ppm'];
          $abs = $data['abs'];
        ?>[
            '<?php echo $waktu; ?>',
            <?php echo $standar; ?>,
            <?php echo $ppm; ?>,
            <?php echo $abs; ?>],
        <?php
        }

        ?>

      ]);

      var options = {
        title: 'Timbal Hulu',
        hAxis: {
          format: 'M/d/yy',

        },
        curveType: 'function',
        explorer: {
          axis: 'horizontal',
          keepInBounds: true
        },
        legend: {
          position: 'top'
        },
        series: {
          0: {
            color: 'green'
          },
          1: {
            color: 'red'
          },
          2: {
            color: 'orange'
          }
        }

      };

      var chart = new google.visualization.LineChart(document.getElementById('timbal_hulu_chart'));

      chart.draw(data, options);
    }
  </script>

  <script type="text/javascript">
    google.charts.load('current', {
      'packages': ['corechart']
    });
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {
      var data = google.visualization.arrayToDataTable([
        ['Waktu', 'Normal', 'PPM', 'ABS'],

        //PHP Code 
        <?php

        include('koneksi.php');
        $waktu = date("Y-m");
        $query = "SELECT * FROM timbal_hilir WHERE waktu LIKE '$waktu%'";
        $res = mysqli_query($connect, $query);
        while ($data = mysqli_fetch_array($res)) {
          $waktu = $data['waktu'];
          $standar = 0.005;
          $ppm = $data['ppm'];
          $abs = $data['abs'];
        ?>[
            '<?php echo $waktu; ?>',
            <?php echo $standar; ?>,
            <?php echo $ppm; ?>,
            <?php echo $abs; ?>],
        <?php
        }

        ?>

      ]);

      var options = {
        title: 'Timbal Hilir',
        hAxis: {
          format: 'M/d/yy',

        },
        curveType: 'function',
        explorer: {
          axis: 'horizontal',
          keepInBounds: true
        },
        legend: {
          position: 'top'
        },
        series: {
          0: {
            color: 'green'
          },
          1: {
            color: 'red'
          },
          2: {
            color: 'orange'
          }
        }

      };

      var chart = new google.visualization.LineChart(document.getElementById('timbal_hilir_chart'));

      chart.draw(data, options);
    }
  </script>

  <script type="text/javascript">
    google.charts.load('current', {
      'packages': ['corechart']
    });
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {
      var data = google.visualization.arrayToDataTable([
        ['Waktu', 'Normal', 'PPM', 'ABS'],

        //PHP Code 
        <?php

        include('koneksi.php');
        $waktu = date("Y-m");
        $query = "SELECT * FROM besi_hulu WHERE waktu LIKE '$waktu%'";
        $res = mysqli_query($connect, $query);
        while ($data = mysqli_fetch_array($res)) {
          $waktu = $data['waktu'];
          $standar = 0.005;
          $ppm = $data['ppm'];
          $abs = $data['abs'];
        ?>[
            '<?php echo $waktu; ?>',
            <?php echo $standar; ?>,
            <?php echo $ppm; ?>,
            <?php echo $abs; ?>],
        <?php
        }

        ?>

      ]);

      var options = {
        title: 'Besi Hulu',
        hAxis: {
          format: 'M/d/yy',

        },
        curveType: 'function',
        explorer: {
          axis: 'horizontal',
          keepInBounds: true
        },
        legend: {
          position: 'top'
        },
        series: {
          0: {
            color: 'green'
          },
          1: {
            color: 'red'
          },
          2: {
            color: 'orange'
          }
        }

      };

      var chart = new google.visualization.LineChart(document.getElementById('besi_hulu_chart'));

      chart.draw(data, options);
    }
  </script>

  <script type="text/javascript">
    google.charts.load('current', {
      'packages': ['corechart']
    });
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {
      var data = google.visualization.arrayToDataTable([
        ['Waktu', 'Normal', 'PPM', 'ABS'],

        //PHP Code 
        <?php

        include('koneksi.php');
        $waktu = date("Y-m");
        $query = "SELECT * FROM besi_hilir WHERE waktu LIKE '$waktu%'";
        $res = mysqli_query($connect, $query);
        while ($data = mysqli_fetch_array($res)) {
          $waktu = $data['waktu'];
          $standar = 0.005;
          $ppm = $data['ppm'];
          $abs = $data['abs'];
        ?>[
            '<?php echo $waktu; ?>',
            <?php echo $standar; ?>,
            <?php echo $ppm; ?>,
            <?php echo $abs; ?>],
        <?php
        }

        ?>

      ]);

      var options = {
        title: 'Besi Hilir',
        hAxis: {
          format: 'M/d/yy',

        },
        curveType: 'function',
        explorer: {
          axis: 'horizontal',
          keepInBounds: true
        },
        legend: {
          position: 'top'
        },
        series: {
          0: {
            color: 'green'
          },
          1: {
            color: 'red'
          },
          2: {
            color: 'orange'
          }
        }

      };

      var chart = new google.visualization.LineChart(document.getElementById('besi_hilir_chart'));

      chart.draw(data, options);
    }
  </script>
</body>

</html>