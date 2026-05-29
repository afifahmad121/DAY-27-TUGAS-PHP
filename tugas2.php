
<!-- //  Menerima satu parameter $nilai (0–100). 
// ● Mengembalikan huruf grade: 
    // ○ 85–100: A 
    // ○ 70–84: B 
    // ○ 60–69: C 
    // ○ < 60: D  -->




<?php 

$arrayAngka = [90, 98, 75, 60, 80, 50, 45] ;
foreach($arrayAngka as $nilai){
    tentukanGrade($nilai);
}

function tentukanGrade($nilai){

if($nilai >= 85 && $nilai <= 100){

    echo "$nilai Grade A" . "<br>";
} elseif ($nilai >= 70 && $nilai <=84){
    echo "$nilai Grade B" . "<br>";
} elseif ($nilai >= 60 && $nilai <=69){
    echo "$nilai Grade C  <br>";
} else{
    echo "$nilai Grade D <br>";
}

}

?>



<!-- // $umur = array("Budi" => 25, "Siti" => 20, "Andi" => 30);

// foreach ($umur as $nama => $nilai_umur) { -->
<!-- //     echo $nama . " berumur " . $nilai_umur . " tahun<br>"; -->
<!-- // } -->

