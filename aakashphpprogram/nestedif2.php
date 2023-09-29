<?php
$a = 34;
$b = 56;
$c = 23;

if($a>$b){
    if($a>$c){
        echo "a is greater";
    }
}
if($b>$a){
    if($b>$c){
        echo "b is greater";
    }
}
if($c>$a){
    if($c>$b){
        echo "c is greater";
    }
}