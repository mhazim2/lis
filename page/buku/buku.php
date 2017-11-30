<a href="?page=buku&aksi=tambah_buku" class="btn btn-primary" style="margin-bottom: 5px">Tambah Data Buku</a>
<div class="row">
    <div class="col-md-12">
        <!-- Advanced Tables -->
        <div class="panel panel-default">
            <div class="panel-heading">
                Data Buku
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Judul</th>
                                <th>Pengarang</th>
                                <th>Penerbit</th>
                                <th>Tahun Terbit</th>
                                <th>ISBN</th>
                                <th>Jumlah Buku</th>
                                <th>Lokasi</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php
                                $no = 1;
                                $sql = mysqli_query($conn,"select * from tb_buku");
                                while ($data=mysqli_fetch_assoc($sql)) {
                            ?>

                            <tr>
                                <td style="text-transform: capitalize"><?php echo $no++; ?></td>
                                <td style="text-transform: capitalize"><?php echo $data['judul']; ?></td>
                                <td style="text-transform: capitalize"><?php echo $data['pengarang']; ?></td>
                                <td style="text-transform: capitalize"><?php echo $data['penerbit']; ?></td>
                                <td style="text-transform: capitalize"><?php echo $data['tahun_terbit']; ?></td>
                                <td style="text-transform: uppercase"><?php echo $data['isbn']; ?></td>
                                <td style="text-transform: capitalize"><?php echo $data['jumlah_buku']; ?></td>
                                <td style="text-transform: uppercase"><?php echo $data['lokasi']; ?></td>
                                <td>
                                    <a href="?page=buku&aksi=ubah_buku&id=<?php echo $data['id']; ?>" class="btn btn-info">Ubah</a>
                                    <a onclick="return confirm('Anda Yakin Ingin Menghapus Data Buku Ini?')" href="?page=buku&aksi=hapus_buku&id=<?php echo $data['id']; ?>" class="btn btn-danger">Hapus</a>
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