<?php
    if(isset($_POST['submit'])){
        $name= $_POST['name'];
        $email=$_POST['email'];
        $phone=$_POST['phone'];
        $password=$_POST['phone'];
        if($email=='' || $password==''){
            echo 'please fill required fields';
        }else{
            echo 'Successfully Registered';
        }

    }else{
        header('location:registration.php');
    }
    
?>