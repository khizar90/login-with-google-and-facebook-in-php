<?php
function __autoload($class){
    require "clases/". $class .".php";
}

function wow(){
    echo "this is from index file<br>";
}

// $c1=new tst\Product();
// $c2=new test\Product();
// wow();
// test\wow();
$c1=new Product(Product);

?>
