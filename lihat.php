<?php
    echo "<head><title>Daftar Orderan </title></head>";
    $fp=fopen("orderan.txt","r");
    echo "<table border=0>";

    while($isi=fgets($fp, 80))
    {
        $pisah = explode("|",$isi);
        echo "<tr><td>Nama </td><td>: $pisah[0]</td></tr>";
        echo "<tr><td>Alamat </td><td>: $pisah[1]</td></tr>";
        echo "<tr><td>Telepon </td><td>: $pisah[2]</td></tr>";
        echo "<tr><td>Paket </td><td>: $pisah[3]</td></tr>";
        echo "<tr><td>Service </td><td>: $pisah[4]</td></tr>";
        echo "<tr><td>Berat </td><td>: $pisah[5]</td></tr>
        <tr><td>&nbsp;<hr></td><td>&nbsp;<hr></td></tr>";
    }

    echo "</table>";
    echo "<a href=responsi.html>Klik di sini </a> isi orderan";
?>