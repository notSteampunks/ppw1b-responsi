<?php
include "koneksi.php";

if (isset($_POST['kirim'])) {
    $nama     = $_POST['nama'];
    $email    = $_POST['email'];
    $komentar = $_POST['komentar'];

    $simpan = "INSERT INTO saran(nama,email,komentar) VALUES ('$nama','$email', '$komentar')";

    $result = mysqli_query($conn,$simpan);

    if($result){
        echo "<script>alert('Data Telah Berhasil Dikirim');window.location='index.php'</script>";
    }
}
?>