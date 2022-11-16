<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
    <form action="" method="post">
        <lable for="username">Username :<input type="" name="username"
        value="<?php
        if(!empty($_COOKIE['usercookies'])){
            echo $_COOKIE['usercookies'];
        }
        ?>"
        ></input></lable><br><br><br>
        <lable for="password">Password : <input type="password" name="password"
        value="<?php
        if(!empty($_COOKIE['passwordcookies'])){
            echo $_COOKIE['passwordcookies'];
        }
        ?>"
        ></input></lable><br><br><br>
        <?php
        if(!empty($_COOKIE['usercookies']) && $_COOKIE['passwordcookies']){
        ?>
        <input checked type="checkbox" name="check" value="on">Remember me</input><br><br>
        <?php }else {?>
            <input  type="checkbox" name="check">Remember me</input><br><br>
            <?php }?>
        <input type="submit" name="submit" value="submit"></input><hr>
        
    </form>
    </center>
</body>
</html>

<?php

if(!empty($_POST['submit'])){
    $username= $_POST['username'];
    $password= $_POST['password'];
    if($username=='admin'&& $password=='admin'){
        if(!empty($_POST['check'])){
            if($_POST['check']=='on'){
                setcookie('usercookies',$username);
                setcookie('passwordcookies',$password);
                echo "<h2>Successful</h2>";
            }
        }
        
       
    }else{
        echo "<h2>Not successful</h2>";
    }
}

?>