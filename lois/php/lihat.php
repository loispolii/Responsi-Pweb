<?php

    echo "<head><title>Daftar Pelanggan CLEAN LAUNDRY</title></head>";

    $fp = fopen ("daftarPelanggan.txt","r");

    //echo "<table border='1'>";
    //echo "<tr><td>Nama</td><td>Alamat</td><td>No Telepon</td><td>Jenis Cucia</td><td>Tanggal</td></tr>";
    while ($isi = fgets($fp))
    {
        $pisah = array_pad(explode("|", $isi),10,null);
        echo "<br>Tanggal : ".$pisah[0];
        echo "<br>Nama : ".$pisah[1];
        echo "<br>Alamat : ".$pisah[2];
        echo "<br>Telepon : ".$pisah[3];
        echo "<br>Jenis : ".$pisah[4];
        echo "<br>";
    }

    echo "<h3><a href=home.html>Klik Disini Untuk Kembali Mengisi Data</h3></a>";
    echo "<h3><a href=index.html>Klik Disini Untuk Kembali Ke Home</h3></a>";
?>
