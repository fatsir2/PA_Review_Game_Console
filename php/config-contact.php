<?php 
    include ("config-nopdo.php");

    // Cek Tombol daftar
    if (isset($_POST['submit'])){
        // Data dari formulir
        $nama       = $_POST['name'];
        $email      = $_POST['email'];
        $pesan      = $_POST['pesan'];

        // Querry
        $sql = "INSERT INTO data_contactus (nama, email, pesan) VALUE ('$nama', '$email', '$pesan') ";
        $query = mysqli_query($conn,$sql);

        // Memberitahu query tersimpan 
        if ($query) {
            header('Location: ../index.php?status=sukses');
        } else {
            // Gagal 
            header('Location: ../index.php?status=gagal');
        }
    } else {
        die("Anda tidak dapat Akses WEBSITE INI....");
    }
?>
