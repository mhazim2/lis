<div id="page-inner">
    <div class="row">
        <div class="col-md-12">
            <h2>Admin Dashboard</h2>
            <h5>Welcome Jhon Deo , Love to see you back. </h5>
        </div>
    </div>
    <!-- /. ROW  -->
    <hr />
    <div class="row">

        <div class="col-md-3 col-sm-6 col-xs-6">
            <?php
                $sql = mysqli_query($conn,"select id from tb_buku") or die(mysqli_error($conn));
                $jlh = mysqli_num_rows($sql);

            ?>
            <div class="panel panel-back noti-box">
                <span class="icon-box bg-color-red set-icon">
                    <i class="fa fa-envelope-o"></i>
                </span>
                <div class="text-box" >
                    <p class="main-text">
                        <?php
                            echo $jlh;
                        ?>
                        Buku
                    </p>
                    <p class="text-muted">Buku</p>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-6">
            <?php
                $sql = mysqli_query($conn,"select nim from tb_anggota") or die(mysqli_error($conn));
                $jlh = mysqli_num_rows($sql);

            ?>
            <div class="panel panel-back noti-box">
                <span class="icon-box bg-color-green set-icon">
                    <i class="fa fa-bars"></i>
                </span>
                <div class="text-box" >
                    <p class="main-text">
                        <?php
                            echo $jlh;
                        ?>
                        Orang
                    </p>
                    <p class="text-muted">Anggota</p>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-6">
            <?php
                $sql = mysqli_query($conn,"select id from tb_transaksi where status='pinjam'") or die(mysqli_error($conn));
                $jlh = mysqli_num_rows($sql);

            ?>
            <div class="panel panel-back noti-box">
                <span class="icon-box bg-color-blue set-icon">
                    <i class="fa fa-bell-o"></i>
                </span>
                <div class="text-box" >
                    <p class="main-text">
                        <?php
                            echo $jlh;
                        ?>
                        Orang
                    </p>
                    <p class="text-muted">Pinjam</p>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-6">

            <div class="panel panel-back noti-box">
                <span class="icon-box bg-color-brown set-icon">
                    <i class="fa fa-rocket"></i>
                </span>
                <div class="text-box" >
                    <p class="main-text">

                        Orang
                    </p>
                    <p class="text-muted">Denda</p>
                </div>
            </div>
        </div>
    </div>
    <!-- /. ROW  -->
    <hr />

</div>
<!-- /. PAGE INNER  -->
</div>
