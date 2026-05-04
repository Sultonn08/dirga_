<?php
//Materi 2: Operator dan kondisi

//Operator Aritmatika

//penjumlahan
$nilai1 = 10;
$nilai2 = 20;
$hasil = $nilai1 + $nilai2;
echo 'Hasil penjumlahan nilai 1 + nilai 2 = ' . $hasil;

echo '<br><br> ================================================================================================================================== <br><br>';

//pengurangan
$nilai1 = 10;
$nilai2 = 20;
$hasil = $nilai1 - $nilai2;
echo 'Hasil pengurangan nilai 1 - nilai 2 = ' . $hasil;

echo '<br><br> ================================================================================================================================== <br><br>';

//perkalian
$nilai1 = 10;
$nilai2 = 20;
$hasil = $nilai1 * $nilai2;
echo 'Hasil perkalian nilai 1  x nilai 2 = ' . $hasil;

echo '<br><br> ================================================================================================================================== <br><br>';

//pembagian
$nilai1 = 10;
$nilai2 = 20;
$hasil = $nilai1 / $nilai2;
echo 'Hasil pembagian nilai 1 :nilai 2 = ' . $hasil;

echo '<br><br> ================================================================================================================================== <br><br>';

//kondisi (if else)
$nilai = 90;

if ($nilai >= 80) {
    echo 'Nilai Anda A';
} elseif ($nilai >= 70) {
    echo 'Nilai Anda B';
} elseif ($nilai >= 60) {
    echo 'Nilai Anda C';
} else {
    echo 'Nilai Anda D';
}
echo '<br><br> ================================================================================================================================== <br><br>';
//penentuan bilangan genap atau ganjil
$bilangan = 15;

if ($bilangan % 2 == 0) {
    echo 'Bilangan ' . $bilangan . ' adalah genap';
} else {
    echo 'Bilangan ' . $bilangan . ' adalah ganjil';
}
?>