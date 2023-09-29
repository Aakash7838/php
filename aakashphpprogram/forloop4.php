<?php
$even = 0;
$odd = 0;

for($i=1;$i<=60;$i++){
    if($i%2==0){
        echo 'numeber of even='.$i;
        echo '<br>';
    }else{
        echo 'number of odd='.$i;
        echo '<br>';
    }
}