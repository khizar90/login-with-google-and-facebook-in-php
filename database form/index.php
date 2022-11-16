<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="form.css">
    <title>sinupForm</title>
</head>
<body>
       <form actiom="" method="post">
       <center>
        <lable for="firstname">First Name: <input type="text" name="firstname"></input></lable><br><br><br>
        <lable for="Seccondname">Seccond Name: <input type="text" name="Seccondname"></input></lable><br><br><br>
        <lable for="gender">Gender: <input type="radio" value="m" name="gender">male</input></lable>
        <lable for="gender"><input type="radio" name="gender">female</input></lable><br><br><br>
        <lable for="phonenumber">Phone: <input type="number" value="f" name="phonenumber"></input></lable><br><br><br>
        <lable for="email">Email: <input type="text" name="email"></input></lable><br><br><br>
        <lable for="password">Password: <input type="password" name="passsword"></input></lable><br><br><br>
        <input type="submit" name="submit"></input>
</center>
</form>
</body>
</html>
<?php
$fname=$_POST['firstname'];
$Sname=$_POST['Seccondname'];
$gender=$_POST['gender'];
$phone=$_POST['phonenumber'];
$email=$_POST['email'];
$passsword=$_POST['passsword'];


$conn = mysqli_connect("localhost","root","","form") or die("connection failed");
$sql = "INSERT INTO register(fname,Sname,gender,phone,email,passsword)  VALUES ('{$fname}','{$Sname}','{$gender}','{$phone}','{$email}','{$passsword}')";
mysqli_query($conn,$sql);
mysqli_close($conn);
?>