<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "form";
$conn = new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error){
    die("connection failed");
}

$sql = "SELECT * from register";
$result = $conn->query($sql);


if($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
        echo "id: {$row['id']},name: {$row['fname']},Sname: {$row['Sname']},gender: {$row['gender']} <br>";
    }
}else{
    echo "no result found";
}
$conn->close();

?>