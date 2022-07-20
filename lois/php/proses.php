<?php

    echo "<head><title>====DAFTAR PELANGGAN====</title></head>";

    $fp = fopen ("daftarPelanggan.txt","a+");

    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $telepon = $_POST['telepon'];
    $jenis = $_POST['jenis'];
    $tgl = $_POST['tgl'];

    fputs($fp, "$tgl|$nama|$alamat|$telepon|$jenis\n\n");
    fclose($fp);

    echo "<h3 style='text-align: center;'><font color='grey'>Data Berhasil terisi!!!</font></h3>";
    echo "<h4><a href=lihat.php>Lihat Data Yang Dimasukkan</a></h4>";
?>
