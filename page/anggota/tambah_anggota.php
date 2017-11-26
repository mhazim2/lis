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
                                <input class="form-control" type="text" name="nim"/>
                                <!--<p class="help-block">Help text here.</p>-->
                            </div>
                            <div class="form-group">
                                <label>Nama</label>
                                <input class="form-control" type="text" name="nama"/>
                            </div>
                            <div class="form-group">
                                <label>Tempat Lahir</label>
                                <input class="form-control" type="text" name="tempat_lahir"/>
                            </div>
                            <div class="form-group">
                                <label>Tanggal Lahir</label>
                                <select class="form-control" name="tanggal_lahir">
                                    <?php
                                    $tahun = date("Y");
                                    for ($i=$tahun; $i>=$tahun-117; $i--){
                                        echo '<option value="'.$i.'">'.$i.'</option>';
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Jenis Kelamin</label>
                                <input class="form-control" type="text" name="jenis_kelamin"/>
                            </div>
                            <div class="form-group">
                                <label>Departemen</label>
                                <input class="form-control" type="number" name="departemen" value="1"/>
                            </div>
                            <button type="submit" class="btn btn-primary" name="simpan">Simpan</button>
                            <button type="reset" class="btn btn-default">Reset</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
    $nim = isset($_POST['nim']) ? $_POST['nim'] : null;
    $pengarang = isset($_POST['pengarang']) ? $_POST['pengarang'] : null;
    $penerbit = isset($_POST['penerbit']) ? $_POST['penerbit'] : null;
    $tahun_terbit = isset($_POST['tahun_terbit']) ? $_POST['tahun_terbit'] : null;
    $isbn = isset($_POST['isbn']) ? $_POST['isbn'] : null;
    $jumlah_buku = isset($_POST['jumlah_buku']) ? $_POST['jumlah_buku'] : null;
    $lokasi = isset($_POST['lokasi']) ? $_POST['lokasi'] : null;
    $tgl_input = isset($_POST['tgl_input']) ? $_POST['tgl_input'] : null;

    $simpan = isset($_POST['simpan']) ? 1 : 0;
    if ($simpan){

        $sql = mysqli_query($conn,"insert into tb_buku (judul, pengarang, penerbit, tahun_terbit, isbn, jumlah_buku, lokasi, tgl_input) values ('$judul', '$pengarang', '$penerbit', '$tahun_terbit', '$isbn', '$jumlah_buku', '$lokasi', '$tgl_input')") or die(mysqli_error($conn));
        if ($sql){
            ?>
            <script type="text/javascript">
                alert("Data Berhasil Disimpan!");
                window.location.href="?page=buku";
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