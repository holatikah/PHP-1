<?php
    // definisikan konstanta
    define('PHI', 3.14);
    define('DBNAME','inventori');
    define('DBSERVER','Localhost');

    $jari = 8;
    $luas = PHI * $jari * $jari;
    $kll = 2 * PHI * $jari;

    echo 'Luas lingkaran dengan jari '.$jari.' : '.$luas;
    echo '<br/>Kelilingnya : '.$kll;
?>
<hr/>
<?php
    echo 'Nama databesenya : '.DBNAME;
    echo '<br/>Lokasi databesenya ada di '.DBSERVER;
?>    