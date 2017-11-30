<?php
$nim = $_GET['nim'];
$sql = mysqli_query($conn, "select * from tb_anggota where nim='$nim'");
$tampil = mysqli_fetch_assoc($sql);
?>

<div class="row">
    <div class="col-md-12">
        <!-- Form Elements -->
        <div class="panel panel-default">
            <div class="panel-heading">
                Tambah Data Anggota
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-8">
                        <!--<h3>Isi Data</h3>-->
                        <form method="post">
                            <div class="form-group">
                                <label>NIM</label>
                                <input class="form-control" type="text" name="nim" value="<?php echo $tampil['nim']?>" style="text-transform: capitalize;" readonly/>
                                <!--<p class="help-block">Help text here.</p>-->
                            </div>
                            <div class="form-group">
                                <label>Nama</label>
                                <input class="form-control" type="text" name="nama" value="<?php echo $tampil['nama']?>" style="text-transform: capitalize;" required/>
                            </div>
                            <div class="form-group">
                                <label>Tempat Lahir</label>
                                <input class="form-control" type="text" name="tempat_lahir" value="<?php echo $tampil['tempat_lahir']?>" style="text-transform: capitalize;" required/>
                            </div>
                            <div class="form-group">
                                <label>Tanggal Lahir</label>
                                <input class="form-control" type="date" name="tgl_lahir" value="<?php echo $tampil['tgl_lahir']?>" required/>
                            </div>
                            <div class="form-group">
                                <label>Jenis Kelamin</label>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="jk" id="optionsRadios1" value="Laki-laki" <?php if ($tampil['jk']=='Laki-laki') echo 'checked'; ?> required/>Laki-laki
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="jk" id="optionsRadios2" value="Perempuan" <?php if ($tampil['jk']=='Perempuan') echo 'checked'; ?> required/>Perempuan
                                    </label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Departemen</label>
                                <select class="form-control" name="departemen" required>
                                    <option value="">Pilih departemen</option>
                                    <option value="agronomi dan holtikultura" <?php if ($tampil['departemen']=='agronomi dan holtikultura') echo 'selected'; ?>>Agronomi dan Holtikultura</option>
                                    <option value="ilmu tanah dan sumberdaya lahan" <?php if ($tampil['departemen']=='ilmu tanah dan sumberdaya lahan') echo 'selected'; ?>>Ilmu Tanah dan Sumberdaya Lahan</option>
                                    <option value="proteksi tanaman" <?php if ($tampil['departemen']=='proteksi tanaman') echo 'selected'; ?>>Proteksi Tanaman</option>
                                    <option value="arsitektur lanskap" <?php if ($tampil['departemen']=='arsitektur lanskap') echo 'selected'; ?>>Arsitektur Lanskap</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary" name="ubah">Ubah</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
$nama = strtolower(isset($_POST['nama']) ? $_POST['nama'] : null);
$tempat_lahir = strtolower(isset($_POST['tempat_lahir']) ? $_POST['tempat_lahir'] : null);
$tgl_lahir = strtolower(isset($_POST['tgl_lahir']) ? $_POST['tgl_lahir'] : null);
$jk = strtolower(isset($_POST['jk']) ? $_POST['jk'] : null);
$departemen = strtolower(isset($_POST['departemen']) ? $_POST['departemen'] : null);

$ubah = isset($_POST['ubah']) ? 1 : 0;
if ($ubah){

    $sql = mysqli_query($conn,"update tb_anggota set nama='$nama', tempat_lahir='$tempat_lahir', tgl_lahir='$tgl_lahir', jk='$jk', departemen='$departemen' where nim='$nim'") or die(mysqli_error($conn));
    if ($sql){
        ?>
        <script type="text/javascript">
            alert("Data Berhasil Diubah!");
            window.location.href="?page=anggota";
        </script>
        <?php
    }
    else{
        ?>
        <script type="text/javascript">
            alert("Galat, Data Tidak Berhasil Diubah!");
            window.location.href="?page=anggota&aksi=ubah_anggota&nim=<?php echo $tampil['nim']; ?>";
        </script>
        <?php
    }
}
?>