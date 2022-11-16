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
    <form method="get" action="">
        <input type="number" name="num1" placeholder="enter first value"></input>
        <input type="number" name="num2" placeholder="enter seccond value"></input> 
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
                          if(isset($_GET['submit'])){
                            $result1=    $_GET['num1'];
                            $result2=    $_GET=['num2'];
                            $operator=  $_GET=["operator"];
                          }
                          switch($operator){
                            case "None":
                                echo "please select option";
                                break;
                            case "Add":
                                 echo $result1+$result2;
                                break;
                            case "Sub":
                                    echo $result1-$result2;
                                    break;
                            case "Multiple":
                                    echo $result1*$result2;
                                    break;
                            case "Divide":
                                    echo $result1/$result2;
                                     break;
                          }
                      ?>
</center>
</body>
</html>