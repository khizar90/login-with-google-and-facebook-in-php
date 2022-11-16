<?php
session_start();
if(isset($_SESSION["submit"])){
    $name= $_SESSION["username"];
    $age =$_SESSION['age'];
}else{
    $name=[];
    $age=[];
}

if(isset($_POST['submit'])){
    $name[]=$_POST['username'];
    $age[]=$_POST['age'];
}
$_SESSION['username']=$name;
$_SESSION['age']=$age;
?>
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
        <lable for="username">Username<input type="text" name="username"></input></lable><br><br><br>
        <lable for="age">Age : <input type="number" name="age"></input></lable><br><br><br>
        <input type="submit" name="submit" value="submit"></input><hr>
        <?php

        foreach($name as $key=>$value){
            print "<br><b>name</b> =      $name[$key]   <b>age</b> =    $age[$key]";
        }
        ?>
    </form>
    </center>
</body>
</html>
<?php
// session_start();
// session_unset();
session_destroy();
?>