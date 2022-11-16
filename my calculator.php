<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>calculator</title>
</head>

<body>
    <center><br>
    <br>
    <form method="post" action="">
        <input type="text" name="num1" placeholder="enter first value"></input>
        <input type="text" name="num2" placeholder="enter seccond value"></input> 
        <select name="operator">
            <option>None</option>
            <option>Add</option>
            <option>Sub</option>
            <option>Multiple</option>
            <option>Divide</option>
</select>
<br>

<br>
        <input type="submit" name="submit" value ="submit"></input> 
</form>
<h2>The answer is: </h2>
<?php
$num1 = $_POST['num1'];
$num2 = $_POST['num2'];
$operator = $_POST['operator'];
if (is_numeric($num1) && is_numeric($num2)) {
    switch ($operator) {
        case "None":
            echo "enter the opetrator";
            break;
    case "Add":
    echo $num1 + $num2;
    break;
    case "Sub":
     echo  $num1 - $num2;
    break;
    case "Multiple":
    echo  $num1 * $num2;
    break;
    case "Divide":
    echo $num1 / $num2;
    }
    }
?>
</center>
</body>
</html>
