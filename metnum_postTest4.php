<?php
$x1 = 0.85;
$e = 0.0001;

function f(float $value,bool $turunan = false){
    return $turunan ? (9*($value*2)) + ($value*2) + 1 : (3*($value*3)) + ($value*2) + $value - 3;
}

$i = 1;
do{
    $fx = f($x1);
    $f1x = f($x1,true);
    $x2 = $x1 - ($fx/$f1x);
    $fx2 = f($x2);

    print_r("[$i]\nx1 = $x1 \nf(x1) = $fx\nf'(x1) = $f1x\nx2 = $x2\nf(x2) = $fx2\n\n");
    if(abs($fx2) >= $e){
        $x1 = $x2;
    }

    $i++;
    if($i > 10) break;
}while(abs($fx2) >= $e);

//1. Ambil sembarang nilai awal x1 = 1
//2. f(x1) = 13 + 12 –3(1) – 3 = - 4
//3. f’(x1) = 3x2 + 2x –3 = 3 (1)2 +2 (1) – 3 = 2
//4. Hitung x2
//x2 = x1 – f(x1)/f’(x1)
//x2 = 1 – (-4)/2 = 3
//5. Hitung f(x2) = 33 + 32 –3 (3) – 3 = 24
//6. f(x2) = 24 >  , maka proses berulang dengan nilai x1 yang baru yaitu
//x1 = x2 = 3
//7. Langkah selanjutnya kembali ke langkah 2 dan seterusnya sampai
//diperoleh kondisi
//diperoleh f(xt)  
