<?php
include "../conf/conn.php";
$username = mysqli_real_escape_string($conn,$_POST['username']);
$password = mysqli_real_escape_string($conn,$_POST['password']);
$check    = mysqli_query($conn,"SELECT * FROM admin WHERE username = '$username' AND password = md5('$password')") or die(mysql_error());
if(mysqli_num_rows($check) >= 1){
    while($row = mysqli_fetch_array($check)){
        session_start();
        if ($row['level']==1){
        $_SESSION['id_admin'] = $row['id_admin'];
        ?>
        <script>alert("Selamat Datang <?= $row['username']; 
            ?> Kamu Telah Login Ke Halaman Super Admin !!!");
            window.location.href="../index_admin.php"
        </script>
        <?php
        } else {
            $_SESSION['id_admin'] = $row['id_admin'];
            ?>
            <script>alert("Selamat Datang <?= $row['username']; 
                ?> Kamu Telah Login Ke Halaman Super Admin !!!");
                window.location.href="../index.php"
            </script>
            <?php
        }
    }
}else{
        echo '<script>alert("Masukan Username dan Password dengan Benar !!!");
        window.location.href="login.php"</script>';
    }
?>