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
                            <th>No.</th>
                            <th>Nim</th>
                            <th>Nama</th>
                            <th>Tempat Lahir</th>
                            <th>Tanggal Lahir</th>
                            <th>Jenis Kelamin</th>
                            <th>Program Studi</th>
                            <th>Aksi</th>
                        </tr>
                        </thead>
                        <tbody>

                        <?php
                        $no = 1;
                        $sql = mysqli_query($conn,"select * from tb_anggota");
                        while ($data=mysqli_fetch_assoc($sql)) {
                            ?>

                            <tr>
                                <td><?php echo $no++; ?></td>
                                <td><?php echo $data['nim']; ?></td>
                                <td><?php echo $data['nama']; ?></td>
                                <td><?php echo $data['tempat_lahir']; ?></td>
                                <td><?php echo $data['tgl_lahir']; ?></td>
                                <td><?php echo $data['jk']; ?></td>
                                <td><?php echo $data['departemen']; ?></td>
                                <td>
                                    <a href="?page=anggota&aksi=ubah_anggota&nim=<?php echo $data['nim']; ?>" class="btn btn-info">Ubah</a>
                                    <a onclick="return confirm('Anda Yakin Ingin Menghapus Data Anggota Ini?')" href="?page=anggota&aksi=hapus_anggota&nim=<?php echo $data['nim']; ?>" class="btn btn-danger">Hapus</a>
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