<?php
session_start();//session starts here
include '../../bin/dbconn.php';

if(!$_SESSION['NM_LOGIN'])
{
   header("Location: ../../index.php");//redirect to login page to secure the welcome page without login access.
}

if ($_SESSION['ROLE']=="ADMINISTRATOR") {

  if (isset($_POST['simpan'])) {
    $KD_KLS_BNG = $_POST['KD_KLS_BNG'];
    $THN_AWAL_KLS_BNG = $_POST['THN_AWAL_KLS_BNG'];
    $THN_AKHIR_KLS_BNG = $_POST['THN_AKHIR_KLS_BNG'];
    $NILAI_MIN_BNG = $_POST['NILAI_MIN_BNG'];
    $NILAI_MAX_BNG = $_POST['NILAI_MAX_BNG'];
    $NILAI_PER_M2_BNG = $_POST['NILAI_PER_M2_BNG'];

    $insert = "INSERT INTO KELAS_BANGUNAN_2016 SET KD_KLS_BNG='$KD_KLS_BNG', THN_AWAL_KLS_BNG='$THN_AWAL_KLS_BNG', THN_AKHIR_KLS_BNG='$THN_AKHIR_KLS_BNG', NILAI_MIN_BNG='$NILAI_MIN_BNG', NILAI_MAX_BNG='$NILAI_MAX_BNG', NILAI_PER_M2_BNG='$NILAI_PER_M2_BNG'";
    if (mysqli_query($conn, $insert)) {
      $_SESSION['notif'] = "Data Berhasil Disimpan";
      header("Location: kelasbangunan.php");
    } else {
      $_SESSION['notif'] = "Data Gagal Disimpan";
      header("Location: kelasbangunan.php");
    }
  }

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SISMIOP PBB | PEMKAB. MINAHASA UTARA</title>
    <link rel="icon" type="image/x-icon" href="../images/minahasa-logo.png">

    <!-- Bootstrap Core CSS -->
    <link href="../../bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../../bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- DataTables CSS -->
    <link href="../../bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="../../bower_components/datatables-responsive/css/dataTables.responsive.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../../bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script src="../../bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../../bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- DataTables JavaScript -->
    <script src="../../bower_components/datatables/media/js/jquery.dataTables.min.js"></script>
    <script src="../../bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../../dist/js/sb-admin-2.js"></script>

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
</head>

<body>

    <div id="wrapper">

      <?php echo'
      <!-- Navigation -->
              <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
                  <div class="navbar-header">
                      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                          <span class="sr-only">Toggle navigation</span>
                          <span class="icon-bar"></span>
                          <span class="icon-bar"></span>
                          <span class="icon-bar"></span>
                      </button>
                      <a class="navbar-brand" href="../pages/"><img src="../images/Logo-Minahasa.jpg" width="30px" style="float:left;margin-top:-5px;"> &nbsp;&nbsp;Sistem Informasi Manajemen Pajak Bumi dan Bangunan Minahasa</a>
                  </div>
                  <ul class="nav navbar-top-links navbar-right">
                  <li class="dropdown">
                          <a class="dropdown-toggle" data-toggle="dropdown" href="#"> Hello, '.$_SESSION['NM_LOGIN'].' as '.$_SESSION['ROLE'].'
                              <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                          </a>
                          <ul class="dropdown-menu dropdown-user">
                              <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                              </li>
                              <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                              </li>
                              <li class="divider"></li>
                              <li><a href="../../logout.php?logout"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                              </li>
                          </ul>
                          <!-- /.dropdown-user -->
                      </li>
                      <!-- /.dropdown -->
                  </ul>
        ';?>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <!--<div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                            </div>
                            <!-- /input-group -->
                            <?php include '../menu.php';?>
                            <!-- BATAS MENU -->

                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Kelas Bangunan</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row"><!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">

                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            Home &gt; Referensi &gt; Kelas Bangunan &gt; Tambah Kelas Bangunan
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                        	<div>
                            <div class="table-responsive">
                              <form class="" action="<?=$_SERVER['PHP_SELF']?>" method="post">
                                    <table class="table table-bordered">
                                        <tr>
                                          <td style="width:30%;">Kode Kelas Bangunan</td>
                                          <td style="width:50%;">
                                            <input type="text" placeholder="Kode Kelas Bangunan" name="KD_KLS_BNG" value="" size="50" class="form-control" required>
                                          </td>
                                        </tr>

                                        <tr>
                                          <td style="width:30%;">Tahun Awal Kelas Bangunan</td>
                                          <td style="width:50%;">
                                            <input type="text" placeholder="Tahun Awal Kelas Bangunan" name="THN_AWAL_KLS_BNG" value="" size="50" class="form-control" required>
                                          </td>
                                        </tr>

                                        <tr>
                                          <td style="width:30%;">Tahun Akhir Kelas Bangunan</td>
                                          <td style="width:50%;">
                                            <input type="text" placeholder="Tahun Akhir Kelas Bangunan" name="THN_AKHIR_KLS_BNG" value="" size="50" class="form-control" required>
                                          </td>
                                        </tr>

                                        <tr>
                                          <td style="width:30%;">Nilai Minimum Bangunan</td>
                                          <td style="width:50%;">
                                            <input type="text" placeholder="Nilai Minimum Bangunan" name="NILAI_MIN_BNG" value="" size="50" class="form-control" required>
                                          </td>
                                        </tr>

                                        <tr>
                                          <td style="width:30%;">Nilai Maximum Bangunan</td>
                                          <td style="width:50%;">
                                            <input type="text" placeholder="Nilai Maksimum Bangunan" name="NILAI_MAX_BNG" value="" size="50" class="form-control" required>
                                          </td>
                                        </tr>

                                        <tr>
                                          <td style="width:30%;">Nilai Per M2 Bangunan</td>
                                          <td style="width:50%;">
                                            <input type="text" placeholder="Nilai Per M2 Bangunan" name="NILAI_PER_M2_BNG" value="" size="50" class="form-control" required>
                                          </td>
                                        </tr>
                                        <tr>
                                          <td>
                                          </td>
                                          <td>
                                            <input type="submit" class="btn btn-primary" name="simpan" value="Simpan">
                                            <a onclick="history.go(-1);" class="btn btn-default">Batal</a>
                                          </td>
                                        </tr>
                                   </table>
                            </div>
                          </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->

            </div>
            <!-- /.row -->
            <div class="row"><!-- /.col-lg-6 --><!-- /.col-lg-6 -->
            </div>
            <!-- /.row -->
            <div class="row"><!-- /.col-lg-6 --><!-- /.col-lg-6 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../../bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../../bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- DataTables JavaScript -->
    <script src="../../bower_components/datatables/media/js/jquery.dataTables.min.js"></script>
    <script src="../../bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../../dist/js/sb-admin-2.js"></script>

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
                responsive: true
        });
    });
    </script>
    <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
                responsive: true
        });
    });
    </script>
    <script type="text/javascript">
      $(function() {
      $("#graph_select").change(function() {
        if ($("#nop").is(":selected")) {
          $("#nops").show();
          $("#nmwps").hide();
          $("#jlnops").hide();
        } else if ($("#nmwp").is(":selected")) {
          $("#nops").hide();
          $("#nmwps").show();
          $("#jlnops").hide();
        } else {
          $("#nops").hide();
          $("#nmwps").hide();
          $("#jlnops").show();
        }
      }).trigger('change');
      });
    </script>
    <!-- <script type="text/javascript">
    var container = document.getElementsByClassName("nops")[0];
    container.onkeyup = function(e) {
      var target = e.srcElement;
      var maxLength = parseInt(target.attributes["maxlength"].value, 10);
      var myLength = target.value.length;
      if (myLength >= maxLength) {
          var next = target;
          while (next = next.nextElementSibling) {
              if (next == null)
                  break;
              if (next.tagName.toLowerCase() == "input") {
                  next.focus();
                  break;
              }
          }
      }
    }
    </script> -->
</body>

</html>

<?php } else {
  echo "You don't have access to this page.";
} ?>
