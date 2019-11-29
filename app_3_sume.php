<?php
$a = 7;
$b = 8;
$x = 5;
$y = 6;
$i = 15;
$ii = 24;

//$z = $x + $y;
//$c = $a + $b;
//$iii = $i + $ii;

//TiparesteSuma($a, $b);
//TiparesteSuma($x, $y);
//TiparesteSuma($i, $ii);

//suma3(4,5,6);
//suma3(10,20,30);
//suma3(100,200,300);

suma4(1,2);

function TiparesteSuma($param1, $param2){
    $suma = $param1 + $param2;
    print_r("Suma este $suma");
    return true;
}

function suma3($p1=0, $p2=0, $p3=0){
    echo $p1 + $p2 + $p3;
}

function suma4(...$z){
    //func_get_arg();
    $suma = 0;
    foreach($z as $s){
        $suma += $s;
    }
}
