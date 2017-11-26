<?php
$nim = isset($_GET['nim']) ? $_GET['nim'] : null;
mysqli_query($conn, "delete from tb_anggota where nim='$nim'");


?>

<script type="text/javascript">
    window.location.href="?page=anggota";
</script>