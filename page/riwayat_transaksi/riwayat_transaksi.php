
<div class="row">
    <div class="col-md-12">
        <!-- Advanced Tables -->
        <div class="panel panel-default">
            <div class="panel-heading">
                Riwayat Transaksi
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                        <tr>
                            <th>No.</th>
                            <th>Judul</th>
                            <th>NIM</th>
                            <th>Nama</th>
                            <th>Tanggal Pinjam</th>
                            <th>Tanggal Kembali</th>
                            <th>Terlambat</th>
                            <th>Status</th>

                        </tr>
                        </thead>
                        <tbody>

                        <?php
                        $no = 1;
                        $sql = mysqli_query($conn,"select * from tb_transaksi ORDER BY id") or die(mysqli_error($conn));
                        while ($data=mysqli_fetch_assoc($sql)) {
                            ?>

                            <tr>
                                <td style="text-transform: capitalize"><?php echo $no++; ?></td>
                                <td style="text-transform: capitalize">
                                    <?php
                                    $id_buku = $data['id_buku'];
                                    $sql_judul = mysqli_query($conn,"select judul from tb_buku where id = '$id_buku'") or die(mysqli_error($conn));
                                    if ($judul=mysqli_fetch_assoc($sql_judul)) {
                                        echo $judul['judul'];
                                    }
                                    ?>
                                </td>
                                <td style="text-transform: capitalize"><?php echo $data['nim']; ?></td>
                                <td style="text-transform: capitalize">
                                    <?php
                                    $nim = $data['nim'];
                                    $sql_nama = mysqli_query($conn,"select nama from tb_anggota where nim = '$nim'") or die(mysqli_error($conn));
                                    if ($nama=mysqli_fetch_assoc($sql_nama)) {
                                        echo $nama['nama'];
                                    }
                                    ?>
                                </td>
                                <td style="text-transform: capitalize"><?php echo $data['tgl_pinjam']; ?></td>
                                <td style="text-transform: capitalize"><?php echo $data['tgl_kembali']; ?></td>
                                <td style="text-transform: capitalize">
                                    <?php
                                    $denda = 1000;
                                    $tgl_dateline = $data['tgl_kembali'];
                                    $tgl_kembali = date('Y-m-d');
                                    $lambat = terlambat($tgl_dateline, $tgl_kembali);
                                    $denda1 = $lambat * $denda;

                                    if ($lambat>0){
                                        echo '<font color="red">'.$lambat.' hari<br>(Rp'.$denda1.')</font>';
                                        //echo $lambat;
                                    }else{
                                        //echo $lambat.' hari';
                                        //echo '<b>-</b>';
                                        echo $lambat.' hari';
                                    }
                                    ?>
                                </td>
                                <td style="text-transform: capitalize"><?php echo $data['status']; ?></td>

                            </tr>

                        <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
