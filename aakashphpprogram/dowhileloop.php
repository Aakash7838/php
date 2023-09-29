<?php
function evenodd(){
$even = 0;
$odd = 0;
$i = 1;
do{
    if($i%2==0){
        $even=$even+$i;
    }else{
        $odd=$odd+$i;
    }
    $i++;

  }while($i<=100);
  echo 'sum of even ='. $even;
    echo 'sum of odd ='. $odd;
}
evenodd()
  ?>