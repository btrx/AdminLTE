<?php
include "../../conf/conn.php";
$id    = $_GET['id'];
$query = ("DELETE FROM mahasiswa WHERE id_mahasiswa ='$id'");
if (mysqli_query($conn,$query)) {
    echo '<script>alert("Data Berhasil Dihapus !!!");
    window.location.href="../../index.php?page=data_mahasiswa"
    </script>';
} else {
    die(mysqli_error($conn));
}
?> 