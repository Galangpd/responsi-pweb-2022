<?php
    echo"<head><title>My Guest Book</title></head>";
    $fp=fopen("orderan.txt", "a+");
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $telepon = $_POST['telepon'];
    $paket = $_POST['paket'];
    $service = $_POST['service'];
    $berat = $_POST['berat'];
    fputs($fp, "$nama|$alamat|$telepon|$paket|$service|$berat");
    fclose($fp);

    echo"Terima Kasih telah memilih laundry kami <br>";
    echo"<a href=responsi.html> Isi orderan </a><br>";
    echo"<a href=lihat.php> Lihat orderan </a><br>";
?>