<?php
include "../../conf/conn.php";
if($_POST)
{
    $id = $_POST['id'];
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];
    $jurusan = $_POST['jurusan'];

    $query = ("UPDATE mahasiswa SET nim='$nim',nama='$nama',kelas='$kelas',jurusan='$jurusan' WHERE id_mahasiswa='$id'");

    if(mysqli_query($conn,$query)){
        echo '<script>alert("Data berasil diubah");
        window.location.href="../../index.php?page=data_mahasiswa"
        </script>';
    } else {
        die(mysqli_error($conn));
    }
}
?>