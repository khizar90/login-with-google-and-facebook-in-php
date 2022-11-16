<?php
session_start();
if(isset($_SESSION["username"])){
    $name= $_SESSION["username"];
}else{
    $name=[];
}

if(isset($_POST['username'])){
    $name[]=$_POST['username'];
}
$_SESSION['username']=$name;
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
    <form action="" method="post">
        <lable for="username">Username<input type="text" name="username"></input></lable><br>
        <input type="submit" name="submit" value="submit"></input><hr>
        <?php
        $count=0;
        foreach($name as $key=>$value){
            $count++;
            print "<br>$count: name = $name[$key]";
        }
        ?>
    </form>
</body>
</html>

<?php
// session_unset();
session_destroy();
?>