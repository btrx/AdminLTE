<?php
include "../../conf/conn.php";


    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];
    $jurusan = $_POST['jurusan'];

    $query = ("INSERT INTO mahasiswa (id_mahasiswa,nim,nama,kelas,jurusan) VALUES ('','".$nim."','".$nama."','".$kelas."','".$jurusan."')");

    if(mysqli_query($conn,$query)){
        echo '<script>alert("Data berasil ditambahkan");
        window.location.href="../../index.php?page=data_mahasiswa"
        </script>';
    } else {
        die(mysqli_error($conn));
    }

?>