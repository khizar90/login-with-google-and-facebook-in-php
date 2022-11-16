<?php
$t=0;
$t1=1;
$t2=0;
echo "<h1>fibonacii series</h1>";
echo "<ul>";
for($i=1;$i<10; $i++){
    echo "<li>".$t."</li>";
    $t=$t1+$t2;
    $t1=$t2;
    $t2=$t;
}
echo "</ul>";

echo "<h1>fibonacii series in function</h1>";
function fibonacii($t,$t1,$t2){
    echo "<ul>";
    for($i=1;$i<10; $i++){
        echo "<li>".$t."</li>"; 
        $t=$t+$t2;
        $t1=$t2;
        $t2=$t;
    }
    echo "</ul>";

}
echo fibonacii(1,2,3);
echo "<h1>print pattern</h1>";
for($i=1;$i<=5; $i++){
    for($j=0;$j<$i; $j++){
        echo "*";   
    }
 
    echo "<br>";
}
echo "<h1>print reverse pattern</h1>";
for($i=5;$i>=1; $i--){
    for($j=1;$j<$i; $j++){
        echo "*";   
    }
 
    echo "<br>";
}
for($i=1;$i<=5; $i++){
    for($j=1;$j<=$i; $j++){
        echo $j;   
    }
    echo "<br>";
}
echo "<h1>print reverse pattern</h1>";
for($i=5;$i>=1; $i--){
    for($j=1;$j<$i; $j++){
        echo "*";   
    }
 
    echo "<br>";
}
echo "<h1>prime number</h1>";

$n=11;
$flag=0;
for($i=2;$i<$n; $i++){
    if($n%$i==0){
            $flag=1;
            break;
    }
}
if($flag==1){
    echo "number is not prime";
}
else{
    echo " prime";
}
    

?>