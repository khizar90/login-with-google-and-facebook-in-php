<?php
require 'function.php';
if(isset($_SESSION["id"])){
    header("Location: index.php");
}
$login = new Loginn();
if(isset($_POST['submit'])){
    $result = $login->login($_POST['email'],$_POST['password']);
    if($result == 1){
        $_SESSION['login']=true;
        $_SESSION['id']= $login->idUser();
        header("Location: index.php");
    }elseif($result==10){
        echo "<script>alert('worng password');</script>";
    }elseif($result ==100){
        echo "<script>alert('Username not Resgister');</script>";
    }

}

?>