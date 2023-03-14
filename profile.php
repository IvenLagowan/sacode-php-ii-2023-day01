<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Profile Page</title>
    <!-- Style CSS -->

   <style>

     body{
        background: #16a085;
    }

   </style>
</head>
<body>
    
    <!-- Heading dengan tag HTML -->
    <h1>Profile Page</h1>

    <!-- Paragraph dengan  syntax PHP -->

    <?php
        

        // menampilkan string ke layar
        echo "<p>Hello PHP!</p>";

        /*
        Syntax PHP bisah di jalankan
        hanya di dalam dokumen
        dengan extenxi *.php

        */


        # Membuat Variabel PHP

        $angka1 = 10;
        $angka2 = 5;

        # Penjumlahan
        $jumlah = $angka1 + $angka2;
        
        echo = $jumlah;

        # Pengurangan
        $jumlah = $angka1 - $angka2;
        echo = $pengurangan;


    ?>


    <h3>Hasil Penjumlahan</h3>

    <p>
    <?php
        echo $jumlah;
    ?>
    </p>

    <h3>Hasil Pegurangan</h3>
    <?php
    <p>
    echo $pengurangan;
    </p>
    ?>



</body>
</html>