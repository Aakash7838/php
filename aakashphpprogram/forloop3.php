<?php

$even = 0;
$odd = 0;
function evenodd($even,$odd){
for($i=1;$i<=40;$i++){
    if($i%2==0){
        $even = $even+$i;
    }else{
        $odd = $odd+$i;
    }
}
    echo "sum of even = $even";
    echo "sum of odd = $odd";
}
evenodd(56,145)
    ?>