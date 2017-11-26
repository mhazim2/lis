<a href="?page=anggota&aksi=tambah_anggota" class="btn btn-primary" style="margin-bottom: 5px">Tambah Data Anggota</a>
<div class="row">
    <div class="col-md-12">
        <!-- Advanced Tables -->
        <div class="panel panel-default">
            <div class="panel-heading">
                Data Anggota
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                        <tr>
                            <th>No</th>
                            <th>Judul</th>
                            <th>Nim</th>
                            <th>Nama</th>
                            <th>Tanggal Pinjam</th>
                            <th>Tanggal Kembali</th>
                            <th>Terlambat </th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                        </thead>
                        <tbody>

                        <?php
                        $no = 1;
                        $sql = mysqli_query($conn,"select * from tb_transaksi where status='pinjam' ");
                        while ($data=mysqli_fetch_assoc($sql)) {
                            ?>

                            <tr>
                                <td><?php echo $no++; ?></td>
                                <td><?php echo $data['judul']; ?></td>
                                <td><?php echo $data['nim']; ?></td>
                                <td><?php echo $data['nama']; ?></td>
                                <td><?php echo $data['tgl_pinjam']; ?></td>
                                <td><?php echo $data['tgl_kembali']; ?></td>
                                <td>

                                    <?php
                                            $denda = 1000;

                                            $tgl_dateline = $data['tgl_kembali'];
                                            $tgl_kembali = date('Y-m-d');

                                            $lambat = terlambat($tgl_dateline, $tgl_kembali);
                                            $denda1 = $lambat*$denda;

                                            if($lambat>0){
                                                echo"      
                                                <font color='red'>$lambat hari<br>(RP $denda1)</font>
                                                
                                                ";

                                            }else{

                                                echo $lambat ."Hari";
                                            }

                                    ?>

                                </td>
                                <td><?php echo $data['status'];?></td>
                                <td>
                                    <a href="?page=anggota&aksi=ubah_anggota&id=<?php echo $data['id']; ?>" class="btn btn-info">Ubah</a>
                                    <a onclick="return confirm('Anda Yakin Ingin Menghapus Data Anggota Ini?')" href="?page=anggota&aksi=hapus_anggota&id=<?php echo $data['id']; ?>" class="btn btn-danger">Hapus</a>
                                </td>
                            </tr>

                        <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>