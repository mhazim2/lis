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
                                <input class="form-control" type="text" name="nim" style="text-transform:capitalize"/>
                                <!--<p class="help-block">Help text here.</p>-->
                            </div>
                            <div class="form-group">
                                <label>Nama</label>
                                <input class="form-control" type="text" name="nama" style="text-transform: capitalize;"/>
                            </div>
                            <div class="form-group">
                                <label>Tempat Lahir</label>
                                <input class="form-control" type="text" name="tempat_lahir" style="text-transform: capitalize;"/>
                            </div>
                            <div class="form-group">
                                <label>Tanggal Lahir</label>
                                <input class="form-control" type="date" name="tgl_lahir" placeholder="" />
                            </div>
                            <div class="form-group">
                                <label>Jenis Kelamin</label>
                                <!--<select class="form-control" name="departemen">
                                    <option value="Laki-laki">Laki-laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>-->
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="jk" id="optionsRadios1" value="Laki-laki"/>Laki-laki
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="jk" id="optionsRadios2" value="Perempuan"/>Perempuan
                                    </label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Departemen</label>
                                <select class="form-control" name="departemen">
                                    <option value="AGRONOMI & HORTIKULTURA">AGRONOMI & HORTIKULTURA</option>
                                    <option value="ILMU TANAH DAN SUMBERDAYA LAHAN">ILMU TANAH DAN SUMBERDAYA LAHAN</option>
                                    <option value="PROTEKSI TANAMAN">PROTEKSI TANAMAN</option>
                                    <option value="ARSITEKTUR LANSKAP">ARSITEKTUR LANSKAP</option>
                                </select>
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
    $nama = isset($_POST['nama']) ? $_POST['nama'] : null;
    $tempat_lahir = isset($_POST['tempat_lahir']) ? $_POST['tempat_lahir'] : null;
    $tgl_lahir = isset($_POST['tgl_lahir']) ? $_POST['tgl_lahir'] : null;
    $jk = isset($_POST['jk']) ? $_POST['jk'] : null;
    $departemen = isset($_POST['departemen']) ? $_POST['departemen'] : null;
    $simpan = isset($_POST['simpan']) ? 1 : 0;
    echo $jk;
    if ($simpan){

        $sql = mysqli_query($conn,"insert into tb_anggota (nim, nama, tempat_lahir, tgl_lahir, jk, departemen) values ('$nim', '$nama', '$tempat_lahir', '$tgl_lahir', '$jk', '$departemen')") or die(mysqli_error($conn));
        if ($sql){
            ?>
            <script type="text/javascript">
                alert("Data Berhasil Disimpan!");
                window.location.href="?page=anggota";
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