<?php
    $id = $_GET['id'];
    $sql = mysqli_query($conn, "select * from tb_buku where id='$id'");
    $tampil = mysqli_fetch_assoc($sql);
?>

<div class="row">
    <div class="col-md-12">
        <!-- Form Elements -->
        <div class="panel panel-default">
            <div class="panel-heading">
                Ubah Data Buku
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-8">
                        <!--<h3>Isi Data</h3>-->
                        <form method="post">
                            <div class="form-group">
                                <label>Judul</label>
                                <input class="form-control" type="text" name="judul" value="<?php echo $tampil['judul']?> " style="text-transform: capitalize"/>
                                <!--<p class="help-block">Help text here.</p>-->
                            </div>
                            <div class="form-group">
                                <label>Pengarang</label>
                                <input class="form-control" type="text" name="pengarang" value="<?php echo $tampil['pengarang']?> " style="text-transform: capitalize"/>
                            </div>
                            <div class="form-group">
                                <label>Penerbit</label>
                                <input class="form-control" type="text" name="penerbit" value="<?php echo $tampil['penerbit']?> " style="text-transform: capitalize"/>
                            </div>
                            <div class="form-group">
                                <label>Tahun Terbit</label>
                                <select class="form-control" name="tahun_terbit">
                                    <?php
                                    $tahun_terbit = $tampil['tahun_terbit'];
                                    $tahun = date("Y");
                                    for ($i=$tahun; $i>=$tahun-117; $i--){
                                        if ($i == $tahun_terbit)
                                            echo '<option value="'.$i.'" selected>'.$i.'</option>';
                                        else
                                            echo '<option value="'.$i.'">'.$i.'</option>';
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>ISBN</label>
                                <input class="form-control" type="text" name="isbn" value="<?php echo $tampil['isbn']?> " style="text-transform: uppercase"/>
                            </div>
                            <div class="form-group">
                                <label>Jumlah Buku</label>
                                <input class="form-control" type="number" name="jumlah_buku" value="1" value="<?php echo $tampil['jumlah_buku']?> "/>
                            </div>
                            <div class="form-group">
                                <label>Lokasi</label>
                                <input class="form-control" type="text" name="lokasi" value="<?php echo $tampil['lokasi']?> " style="text-transform: uppercase"/>
                            </div>
                            <div class="form-group">
                                <label>Tanggal Input</label>
                                <input class="form-control" type="date" name="tgl_input" value="<?php echo $tampil['tgl_input']?>"/>
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
$judul = isset($_POST['judul']) ? $_POST['judul'] : null;
$pengarang = isset($_POST['pengarang']) ? $_POST['pengarang'] : null;
$penerbit = isset($_POST['penerbit']) ? $_POST['penerbit'] : null;
$tahun_terbit = isset($_POST['tahun_terbit']) ? $_POST['tahun_terbit'] : null;
$isbn = isset($_POST['isbn']) ? $_POST['isbn'] : null;
$jumlah_buku = isset($_POST['jumlah_buku']) ? $_POST['jumlah_buku'] : null;
$lokasi = isset($_POST['lokasi']) ? $_POST['lokasi'] : null;
$tgl_input = isset($_POST['tgl_input']) ? $_POST['tgl_input'] : null;

$ubah = isset($_POST['ubah']) ? 1 : 0;
if ($ubah){
    //if (isset($_POST['simpan'])){
    /*$judul = $_POST['judul'];
    $pengarang = $_POST['pengarang'];
    $penerbit = $_POST['penerbit'];
    $tahun_terbit = $_POST['tahun_terbit'];
    $isbn = $_POST['isbn'];
    $jumlah_buku = $_POST['jumlah_buku'];
    $lokasi = $_POST['lokasi'];
    $tgl_input = $_POST['tgl_input'];*/

    $sql = mysqli_query($conn,"update tb_buku set judul='$judul', pengarang='$pengarang', penerbit='$penerbit', tahun_terbit='$tahun_terbit', isbn='$isbn', jumlah_buku='$jumlah_buku', lokasi='$lokasi', tgl_input='$tgl_input' where id='$id'") or die(mysqli_error($conn));
    if ($sql){
        ?>
        <script type="text/javascript">
            alert("Data Berhasil Diubah!");
            window.location.href="?page=buku";
        </script>
        <?php
    }
    else{
        ?>
        <script type="text/javascript">
            alert("Galat, Data Tidak Berhasil Diubah!");
        </script>
        <?php
    }
}
?>