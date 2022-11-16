<?php
$cookies_name ="user";
$cookies_value ="khizar";
setcookie($cookies_name,$cookies_value,time() + 3600 , "/");

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
       <?php
       if(!isset($_COOKIE[$cookies_name])){
        echo "cookies not set";
       }else{
        echo $_COOKIE[$cookies_name]; 
       }
       
       ?>
</body>
</html>
<?php
setcookie($cookies_name,$cookies_value,time() - 3600 , "/");
?>
