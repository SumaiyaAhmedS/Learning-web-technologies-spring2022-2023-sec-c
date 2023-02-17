<?php
 function check($a, $b, $c){
    if($a>$b && $a>$c){
        echo $a;
    } else if($b>$c && $b>$a){
        echo $b;
    } else {
        echo $c;
    }
 }
    $a = 17;
    $b = 23;
    $c = 27;
    check($a, $b, $c)
?>