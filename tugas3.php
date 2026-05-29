<?php 


$daftarBelanja = [
    ["nama" => "item A", "harga" => 25000, "qty" => 2],
    ["nama" => "item B", "harga" => 40000, "qty" => 1]
];

$daftarBelanja2 = [
    ["nama" => "item C", "harga" => 2000, "qty" => 1],
    ["nama" => "item D", "harga" => 8000, "qty" => 6]
];


function hitungTotalBelanja($daftarBelanja, $isMember = false){

    $grandTotal = 0;
    $totalQty = 0;
    $diskonPersen = 0;
    $diskonNominal = 0;
    $totalBayar = 0;
    
    foreach($daftarBelanja as $item){
    $subTotal = $item["harga"] * $item["qty"];
    $grandTotal = $grandTotal + $subTotal;
    $totalQty =  $totalQty + $item["qty"];

     }
     if($isMember){

        $diskonPersen += 0.15;

     }if ($totalQty > 5){

         $diskonPersen += 0.05;

     }
     $diskonNominal = $grandTotal * $diskonPersen;
     $totalBayar = $grandTotal - $diskonNominal;

     return ["grandTotal" => $grandTotal, "totalQty" => $totalQty,
            "diskonPersen" => $diskonPersen, "diskonNominal" => $diskonNominal,
            "totalBayar" => $totalBayar
            ];
           
    }
    
    hitungTotalBelanja($daftarBelanja);
    hitungTotalBelanja($daftarBelanja2, true);
    $hasil1 = hitungTotalBelanja($daftarBelanja);
    $hasil2 = hitungTotalBelanja($daftarBelanja2, true);

    echo "Daftar Belanja Item A & Item B  " ;
    echo "Grand Total : Rp " . number_format($hasil1["grandTotal"]) . "<br>";
    echo "Total Qty : " . $hasil1["totalQty"] . "<br>";
    echo "Diskon persen : " . $hasil1["diskonPersen"] * 100 . "%<br>";
    echo "Diskon Nominal Rp : " . number_format($hasil1["diskonNominal"]) . "<br>";
    echo "Total Bayar Rp : " . number_format($hasil1["totalBayar"]) . "<br>" . "<br>";

    echo "Daftar Belanja Item C & Item D  " ;
    echo "Grand Total Rp " . number_format($hasil2["grandTotal"]) . "<br>";
    echo "Total Qty : " . $hasil2["totalQty"] . "<br>";
    echo "Diskon Persen : " . $hasil2["diskonPersen"] * 100 . "%<br>";
    echo "Diskon Nominal Rp : " . number_format($hasil2["diskonNominal"]) . "<br>";
    echo "Total Bayar Rp : " . number_format($hasil2["totalBayar"]) ;



?>