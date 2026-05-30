<?php
 
 $dataSiswa = [
    ["nama" => "Budi","jurusan" => "RPL", "nilai" => [80, 90, 75] ],
 ];
 
 function prosesDataSiswa($dataSiswa){

 
 foreach ($dataSiswa as $siswa ){
    
    $jumlahNilai = array_sum($siswa["nilai"]);
    $jumlahMataPelajaran = count($siswa["nilai"]);
    $rataRata = $jumlahNilai / $jumlahMataPelajaran;

    $siswa["rataRata"] = $rataRata;
    
    if($rataRata >= 85){
        $status = "Lulus dengan pujian";

     }elseif($rataRata >= 70){
        $status = "Lulus";

     }else{
        $status = "Remedial";
     }
    
    $siswa["status"] = $status;
        $hasil[] = $siswa;
        return $hasil;
    }

}

$hasilSiswa = prosesDataSiswa($dataSiswa);

$siswaLulus = [];

foreach ($hasilSiswa as $siswa) {
    if ($siswa["status"] != "Remedial") {
        $siswaLulus[] = $siswa;
    }
}

echo "<h3>Daftar Siswa Lulus</h3>";

foreach ($siswaLulus as $siswa) {
    echo "Nama: " . $siswa["nama"] . "<br>";
    echo "Jurusan: " . $siswa["jurusan"] . "<br>";
    echo "Rata-rata: " . round($siswa["rataRata"], 2) . "<br>";
    echo "Status: " . $siswa["status"] . "<br><br>";
}
     
?>