<?php
$even = 0;
$odd = 0;
$i = 1;
while($i<=100){
if($i%2==0){
        $even=$even+$i;
    }else{
        $odd=$odd+$i;
    }
    
    $i++;
}
    echo "sum of even = $even";
    echo "sum of odd = $odd";

  ?>