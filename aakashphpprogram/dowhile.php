<?php
$num = 5;
$i = 1;
do{
    if($num*$i % 2==0){
        echo $num * $i.'is even';
    }else{
        echo $num * $i.'is odd';
    }
    echo "<br>";
    $i++;
}while($i<=10);
?>