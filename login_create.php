<?php
    include 'conf/conn.php';

    // isi username dan password pengguna yang ingin login
    $username = $_POST["username"];
    $password = $_POST["pwd"];

    // membuat query SQL untuk mencari data pengguna
    $sql_login = mysqli_query($connection, "SELECT * FROM pembeli WHERE (username = '$username') AND password = '$password'");

    // menampilkan hasil query SQL dalam bentuk tabel HTML jika ada data yang ditemukan
    if (mysqli_num_rows($sql_login) > 0) {
        // menampilkan pesan sukses login
        echo '<script>alert("Anda Telah Berhasil Login !!!");
        window.location.href="home.php"</script>';
    } else {
        // menampilkan pesan error login jika tidak ada data yang ditemukan
        echo '<script>alert("Username atau password salah");
        window.location.href="index.php"</script>'; // kembali ke halaman login
    }
?>