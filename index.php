<?php
    include "function.php";

    $conn = mysqli_connect("localhost", "root", "", "db_lis");
    //$conn = mysqli_connect("localhost", "root", "");
    //$dbcon = mysqli_select_db($conn, "db_lis");
    if ( !$conn ) {
        die("Connection failed : " . mysqli_error($conn));
    }
    /*if ( !$dbcon ) {
        die("Database Connection failed : " . mysqli_error($conn));
    }*/
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Library Information  - System FAPERTA</title>
        <!-- BOOTSTRAP STYLES-->
        <link href="assets/css/bootstrap.css" rel="stylesheet" />
        <!-- FONTAWESOME STYLES-->
        <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
        <link href="assets/css/custom.css" rel="stylesheet" />
        <!-- GOOGLE FONTS-->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
        <!-- TABLE STYLES-->
        <link href="assets/js/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
    </head>
    <body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="//localhost/lis" style="font-size: large">Library Information System FAPERTA</a>
            </div>
            <div style="color: white;
                padding: 15px 50px 5px 50px;
                float: right;
                font-size: 16px;"> Last access : 30 May 2014 &nbsp; <a href="login.html" class="btn btn-danger square-btn-adjust">Logout</a>
            </div>
        </nav>
        <!-- /. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li class="text-center">
                        <img src="assets/img/find_user.png" class="user-image img-responsive"/>
                    </li>

                    <li>
                        <a  href="//localhost/lis"><i class="fa fa-dashboard fa-3x"></i> Dashboard</a>
                    </li>
                    <li>
                        <a  href="?page=anggota"><i class="fa fa-dashboard fa-3x"></i> Data Anggota</a>
                    </li>
                    <li>
                        <a  href="?page=buku"><i class="fa fa-dashboard fa-3x"></i> Data Buku</a>
                    </li>
                    <li>
                        <a  href="?page=transaksi"><i class="fa fa-dashboard fa-3x"></i> Transaksi</a>
                    </li>
                    <li>
                        <a  href="?page=riwayat_transaksi"><i class="fa fa-dashboard fa-3x"></i> Riwayat Transaksi</a>
                    </li>
                </ul>

            </div>

        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <!--<h2>Blank Page</h2>
                        <h5>Welcome Anda , Love to see you back. </h5>-->

                        <?php
                            $page = isset($_GET['page']) ? $_GET['page'] : null;
                            $aksi = isset($_GET['aksi']) ? $_GET['aksi'] : null;

                            if ($page == null){
                                //if ($aksi == ""){
                                    include "page/dashboard/dashboard.php";
                                //}
                            }
                            eleseif ($page == "anggota"){
                                if ($aksi == ""){
                                    include "page/anggota/anggota.php";
                                }elseif ($aksi == "tambah_anggota"){
                                    include "page/anggota/tambah_anggota.php";
                                }elseif ($aksi == "ubah_anggota"){
                                    include "page/anggota/ubah_anggota.php";
                                }elseif ($aksi == "hapus_anggota"){
                                    include "page/anggota/hapus_anggota.php";
                                }
                            }
                            elseif ($page == "buku"){
                                if ($aksi == ""){
                                    include "page/buku/buku.php";
                                }elseif ($aksi == "tambah_buku"){
                                    include "page/buku/tambah_buku.php";
                                }elseif ($aksi == "ubah_buku"){
                                    include "page/buku/ubah_buku.php";
                                }elseif ($aksi == "hapus_buku"){
                                    include "page/buku/hapus_buku.php";
                                }
                            }
                            elseif ($page == "transaksi"){
                                if ($aksi == ""){
                                    include "page/transaksi/transaksi.php";
                                }elseif ($aksi == "tambah_transaksi"){
                                    include "page/transaksi/tambah_transaksi.php";
                                }elseif ($aksi == "ubah_transaksi"){
                                    include "page/transaksi/ubah_transaksi.php";
                                }elseif ($aksi == "hapus_transaksi"){
                                    include "page/transaksi/hapus_transaksi.php";
                                }
                            }
                            elseif ($page == "riwayat_transaksi"){
                                if ($aksi == ""){
                                    include "page/riwayat_transaksi/riwayat_transaksi.php";
                                }
                            }
                        ?>

                    </div>
                </div>
                <!-- /. ROW  -->
                <hr />

            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
    <!-- DATA TABLE SCRIPTS -->
    <script src="assets/js/dataTables/jquery.dataTables.js"></script>
    <script src="assets/js/dataTables/dataTables.bootstrap.js"></script>
    <script>
        $(document).ready(function () {
            $('#dataTables-example').dataTable();
        });
    </script>
    <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>


    </body>
</html>
