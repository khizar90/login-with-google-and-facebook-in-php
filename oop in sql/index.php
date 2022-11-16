<?php
include 'database.php';
// $obj =new Database();
// $obj->insert('student',['name'=>'salman ahmad','age'=>34,'city'=>'lahore']);
// print_r($obj->getResult());
// $obj =new Database();
// $obj->update('student',['name'=>'ahmad khan','age'=>'24','city'=>'delhi'], 'id="1"');
// print_r($obj->getResult());
$obj =new Database();
$obj->delete('student',' id="2"');
print_r($obj->getResult());
?>



<!-- pdo -->