<?php
    $pinjam = date('Y-m-d');
    $tujuh_hari = mktime(0,0,0, date('n'), date('j')+7, date('Y'));
    $kembali = date('Y-m-d', $tujuh_hari);
?>
<div class="row">
    <div class="col-md-12">
        <!-- Form Elements -->
        <div class="panel panel-default">
            <div class="panel-heading">
                Tambah Data Transaksi
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-8">
                        <!--<h3>Isi Data</h3>-->
                        <form method="post">
                            <div class="form-group">
                                <label>Judul</label>
                                <select class="form-control" name="judul" required>
                                    <option value="">Pilih judul</option>
                                    <?php
                                    $sql = mysqli_query($conn,"select * from tb_buku order by judul");
                                    while ($tampil=mysqli_fetch_assoc($sql)) {
                                        echo '<option value="'.$tampil['id'].'" style="text-transform: capitalize">'.$tampil['judul'].' : '.$tampil['pengarang'].'</option>';
                                    }
                                    ?>
                                </select>
                                <!--<input class="form-control" list="dataBuku" name="judul" style="text-transform: capitalize" required/>-->
                                <!--<select id="dataBuku" >
                                    <?php
                                    /*$sql = mysqli_query($conn,"select * from tb_buku order by judul");
                                    while ($tampil=mysqli_fetch_assoc($sql)) {
                                        echo '<option value="'. $tampil['id'] . $tampil['judul'] . '">' . $tampil['pengarang'] . '</option>';
                                    }*/
                                    ?>
                                </select>-->

                                <!--<p class="help-block">Help text here.</p>-->
                            </div>
                            <div class="form-group">
                                <label>NIM</label>
                                <select class="form-control" name="nim" required>
                                    <option value="">Pilih NIM</option>
                                    <?php
                                    $sql = mysqli_query($conn,"select * from tb_anggota order by nim");
                                    while ($tampil=mysqli_fetch_assoc($sql)) {
                                        echo '<option value="'.$tampil['nim'].$tampil['nama'].'" style="text-transform: uppercase">'.$tampil['nim'].' '.$tampil['nama'].'</option>';
                                    }
                                    ?>
                                </select>
                                <!--<input class="form-control" type="text" name="nim" style="text-transform: uppercase;" required/>-->
                            </div>
                            <!--<div class="form-group">
                                <label>Nama</label>
                                <input class="form-control" type="text" name="nama" style="text-transform: capitalize;" required/>
                            </div>-->
                            <div class="form-group">
                                <label>Tanggal Pinjam</label>
                                <input class="form-control" type="date" name="tgl_pinjam" value="<?php echo $pinjam;?>" required/>
                            </div>
                            <div class="form-group">
                                <label>Tanggal Kembali</label>
                                <input class="form-control" type="date" name="tgl_kembali" value="<?php echo $kembali;?>" required/>
                            </div>

                            <button type="submit" class="btn btn-primary" name="simpan">Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
$id = strtolower(isset($_POST['judul']) ? $_POST['judul'] : null);
$nim = strtolower($nim = isset($_POST['nim']) ? $_POST['nim'] : null);
$nama = substr($nim, 9);
$nim = substr($nim,0,9);
$tgl_pinjam = strtolower(isset($_POST['tgl_pinjam']) ? $_POST['tgl_pinjam'] : null);
$tgl_kembali = strtolower(isset($_POST['tgl_kembali']) ? $_POST['tgl_kembali'] : null);


$simpan = isset($_POST['simpan']) ? 1 : 0;
if ($simpan){

    $sql = mysqli_query($conn,"insert into tb_transaksi (id, nim, nama, tgl_pinjam, tgl_kembali) values ('$id', '$nim', '$nama', '$tgl_pinjam', '$tgl_kembali')") or die(mysqli_error($conn));
    if ($sql){
        ?>
        <script type="text/javascript">
            alert("Data Berhasil Disimpan!");
            window.location.href="?page=transaksi";
        </script>
        <?php
    }
    else{
        ?>
        <script type="text/javascript">
            alert("Galat, Data Tidak Berhasil Disimpan!");
        </script>
        <?php
    }
}

?>