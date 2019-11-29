<?php
// $x ** $y  x la puterea y
function putere(int $x, int $n){
    if(($x==0)&&($n>0)) return 0;
    if(($x>0) &&($n==0)) return 1;
    if(($x>0) &&($n>0)) return $x*putere($x,$n-1);
}

function putere2(int $x, int $n){
    return $n ? return $x * putere($x, $n-1); : 1;
}

echo putere(3,2);
echo "\n";
echo putere(2,10);
echo "\n";
?>