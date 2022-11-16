<?php
$stu_id = $_GET['id'];
$conn = mysqli_connect("localhost","root","","crud") or die("connection failed");
$sql = "DELETE FROM `student` WHERE sid = {$stu_id }";
$result = mysqli_query($conn,$sql) or die("query unsucessful");

header("Location: http://localhost:8080/learnPHP/crud_html/index.php");

mysqli_close($conn);
?>