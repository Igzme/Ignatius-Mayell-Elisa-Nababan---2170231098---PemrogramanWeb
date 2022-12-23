<html>
    <head>
        <title> Pemrograman PHP dengan Array </title>
</head>
<body>
    <?php
    //penulisan array dapat dibuat seperti berikut
    $nama[] = "Ignatius ";
    $nama[] =" Mayell";
    $nama[] =" Elisa";
    $nama[] =" Nababan";
    echo $nama[0].$nama[1];
    echo "<br>";
    //menghitung jumlah elemen array
    $jum_array=count($nama);
    echo "jumlah elemen array =".$jum_array;
   ?>
   </body>
   </html> 