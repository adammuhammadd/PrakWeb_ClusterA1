<?php

    $koneksi = mysqli_connect("localhost", "root", "", "mahasiswa") 
               or die("gagal");

    $result = mysqli_query($koneksi, "select * from informatika");

    //array -> [Index] => value [column_name]
    while ($row = mysqli_fetch_array($result)) {
        print_r($row);
        echo "<br>";
    }

    //assoc -> [column_name] => value
    // echo "<br><br>";
    // while ($row = mysqli_fetch_assoc($result)) {
    //     print_r($row);
    //     echo "<br>";
    // }

    //row -> [Index] => value
    // echo "<br><br>";
    // while ($row = mysqli_fetch_row($result)) {
    //     print_r($row);
    //     echo "<br>";
    // }
?>