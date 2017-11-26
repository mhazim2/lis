<?php
    $id = isset($_GET['id']) ? $_GET['id'] : null;
    mysqli_query($conn, "delete from tb_buku where id='$id'");


?>

<script type="text/javascript">
    window.location.href="?page=buku";
</script>
