<?php
    function cetakGenap() { // fungsi tanpa parameter dan return value
        echo "Bilangan genap dari 1 sampai 100 adalah: <br>";
        for ($i = 1; $i <= 100; $i++) {
            if ($i%2 == 0) {
                echo "$i ";
            }
        }
    }
    
    cetakGenap();
    echo "<br> <br>";
    
    function cetakGanjil($awal, $akhir) { // fungsi dengan parameter dan tanpa return value
        for ($i = $awal; $i <= $akhir; $i++) {
            if ($i%2 == 1) {
                echo "$i ";
            }
        }
    }

    $a = 10;
    $b = 50;
    echo "Bilangan ganjil dari $a sampai $b adalah: <br>";
    cetakGanjil($a, $b);
    echo "<br> <br>";

    function luasSegitiga($alas, $tinggi) { // fungsi dengan parameter dan return value
        return 0.5 * $alas * $tinggi;
    }

    $a = 10;
    $t = 50;
    echo "Luas Segitiga dengan alas $a dan tinggi $t adalah: " . luasSegitiga($a, $t);
    echo "<br> <br>";

    $arrKendaraan = array("Mobil", "Pesawat", "Kereta Api", "Kapal Laut"); // array
    echo $arrKendaraan[0] . "<br>";
    echo $arrKendaraan[2];
    echo "<br> <br>";

    $arrKota = array();
    $arrKota[] = "Jakarta";
    $arrKota[] = "Medan";
    $arrKota[] = "Bandung";
    $arrKota[] = "Malang";
    $arrKota[] = "Sulawesi";
    echo $arrKota[1] . "<br>";
    echo $arrKota[2] . "<br>";
    echo $arrKota[4];
    echo "<br> <br>";

    $arrAlamat = array ("Rona" => "Banjarmasin", "Dhiva" => "Bandung", "Ilham" => "Medan", "Oku" => "Hongkong"); // array asosiatif
    echo $arrAlamat['Dhiva'] . "<br>";
    echo $arrAlamat['Oku'];
    echo "<br> <br>";

    $arrNim = array();
    $arrNim['Rona'] = '11011112';
    $arrNim['Dhiva'] = '11011101';
    $arrNim['Ilham'] = '11011309';
    $arrNim['Oku'] = '11014765';
    $arrNim['Fadhlan'] = '11011113';
    echo $arrNim['Ilham'] . "<br>";
    echo $arrNim['Fadhlan'];
    echo "<br> <br>";
?>