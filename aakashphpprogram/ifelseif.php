<?php
$marks = 55;
if($marks<33){
    echo "you are fail";
}
elseif($marks>=80 && $marks<100){
    echo "A grade";
}
elseif($marks>=60 && $marks<80){
    echo "B grade";
}
elseif($marks>=50 && $marks<60){
    echo "C grade";
}
elseif($marks>=34 && $marks<50){
    echo "D grade";
}
else{
    echo "Enter the Invalid Input";
}
?>  