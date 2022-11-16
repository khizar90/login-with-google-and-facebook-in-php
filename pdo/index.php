<?php
$db_name = "mysql:host=localhost;dbname=form";
$user_name= "root";
$password= "";
$conn = new PDO($db_name, $user_name, $password);
$sql = $conn->query("SELECT *FROM students ");

$result = $sql->fetchAll(PDO::FETCH_NUM);
if(count($result)){
    foreach($result as $row){
        echo "{$row[1]}<br>";
    }
}



// while($row = $sql->fetch(PDO::FETCH_ASSOC)){

//     echo "{$row['id']}-{$row['sname']}-{$row['city']}-{$row['dob']}<br>";
// }
    
?>