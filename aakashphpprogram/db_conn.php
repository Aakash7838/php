<?php
    $server = 'localhost';
    $user = 'root';
    $password='';
    $db_name='db';

    $conn= mysqli_connect($server, $user, $password, $db_name);

    if(!$conn){
        echo 'non-connected';
    }else{
        echo 'connected';
    }
?>