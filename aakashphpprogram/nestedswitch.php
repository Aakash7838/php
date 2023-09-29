<?php
$a = 45;
$b = 348;
$c = 98;

switch($a>$b && $a>$c){
    case true:
        echo "a is largest";
        break;
    case false:
        switch($b>$a && $b>$c){
            case true:
                echo "b is largest";
                break;
                case false:
                    echo "c is largest";
                    break;
        }
}