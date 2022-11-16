<?php
require 'function.php';

$register = new Register();
if(isset($_POST['submit'])){
    $result = $register->registration($_POST['firstname'],$_POST['lastname'],$_POST['email'],$_POST['password'],$_POST['confirmpassword']);
    if($result==10){
        echo "<script>alert('email has been taken');</script>";
    }
    if($result==1){
        echo "<script>alert('register successfuly');</script>";
        header("Location: login.php");
    }
    if($result==100){
        echo "<script>alert('password not match');</script>";
    }
}



?>