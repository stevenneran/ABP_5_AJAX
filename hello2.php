<?php
    $nilai = 80;
    if ($nilai > 50) { // pengondisian if-else
        echo "Nilai Anda adalah " . $nilai . ". Selamat, Anda lulus.";
    } else {
        echo "Nilai Anda adalah " . $nilai . ". Maaf, Anda tidak lulus.";
    }
    echo "<br> <br>";
    
    $nilai = 80;
    switch ($nilai) { // pengondisian switch-case
    case ($nilai > 50 && $nilai <= 60):
        echo "Nilai Anda adalah " . $nilai . ". Indeks nilai Anda C";
        break;
    case ($nilai > 60 && $nilai <= 70):
        echo "Nilai Anda adalah " . $nilai . ". Indeks nilai Anda BC";
        break;
    case ($nilai > 70 && $nilai <= 75):
        echo "Nilai Anda adalah " . $nilai . ". Indeks nilai Anda B";
        break;
    case ($nilai > 75 && $nilai <= 80):
        echo "Nilai Anda adalah " . $nilai . ". Indeks nilai Anda AB";
        break;
    case ($nilai > 80 && $nilai <= 100):
        echo "Nilai Anda adalah " . $nilai . ". Indeks nilai Anda A";
        break;
    default:
        echo "Nilai Anda adalah " . $nilai . ". Maaf, Anda tidak lulus";
        break;
    }
    echo "<br> <br>";
    
    for ($i=1 ; $i <= 10 ; $i++) { // perulangan for
        echo $i . " ";
    }
    echo "<br> <br>";
    
    $i = 1; // perulangan while
    while ($i <= 20) {
        echo $i . " ";
        $i += 2;
    }
    echo "<br> <br>";

    $i = 1; // perulangan do-while
    do {
        echo $i . " ";
        $i+=3;
    } while ($i <30);
?>