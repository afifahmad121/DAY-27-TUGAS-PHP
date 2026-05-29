<?php

//Mendefinisikan minimal 5 variabel: 
//nama (string), usia (integer), saldo (float), statusAktif (boolean), hobi (array of string).

//Menampilkan informasi user dalam format sederhana 
//(boleh HTML atau plain text) menggunakan echo. Nama, Email, Username,

// Gunakan var_dump() minimal 1 kali untuk menampilkan tipe data salah satu variabel.

// Tambahkan satu function tampilkanProfil($nama, $usia, $statusAktif, $hobi) yang: 
    // ● Menerima parameter dan menampilkan teks deskriptif tentang user. 
    // ● Tidak boleh mengakses variabel global secara langsung (harus lewat parameter).


$nama = "afif";
$usia = 25;
$saldo = 5800.00;
$statusAktif = true; 
$hobi = ["jogging", "badminton", "nonton film"];

echo "nama user : " . $nama . "<br>"; echo "usia user : " . $usia . "<br>";
echo "saldo user : " . $saldo . "<br>"; echo "status aktif user : " . ($statusAktif ? 'Aktif' : 'Tidak Aktif') . "<br>" ; echo "hobi user : " . $gabunganHobi = implode(", ", $hobi); 
echo "<br>"; echo "<br>";

var_dump($nama);
echo "<br>";

var_dump($usia);
echo "<br>";

var_dump($statusAktif); 
echo "<br>";

var_dump($saldo);
echo "<br>"; echo "<br>";

function tampilkanProfil( $nama, $usia, $statusAktif, $hobi){

    $gabunganHobi = implode(", ", $hobi);
    $status = $statusAktif ? 'Aktif' : 'Tidak Aktif';
    echo "nama  $nama Usia $usia tahun status $status hobi $gabunganHobi ";
    
}
    tampilkanProfil($nama, $usia, $statusAktif, $hobi);
    

?>