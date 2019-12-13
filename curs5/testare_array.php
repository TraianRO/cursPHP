<?php

function test_array($arr=[]){
    if(is_array($arr)){
        foreach($arr as $key => $val){
            echo "cheia este: $key => cu valoarea: $val <br>";
        };
        echo "sirul are ".count($arr)." elemente <br><br>";
    } else echo "Eroare sir <br><br>";
}

$a = 2;
test_array($a);

test_array();

$sir=[];
test_array($sir);

$sir=[10];
test_array($sir);

$sir=[10,100,1000];
test_array($sir);

$sir=[10,20,30,40,50,60,70,80,90,100];
test_array($sir);
?>
